<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Mail\VerifyEmail;
use App\Models\User;
use App\Models\VerifyUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;



class AuthController extends Controller
{
    public function getRegister()   {
        return view('auth.register');
    }
    public function postRegister(RegisterRequest $request)  {
        // dd($request->all());
        $user = $request->only('name','email','password');
        $user['password'] = Hash::make($request->password);
        // dd($user);
        $user = User::create($user); //eloquent
        $save = $user->save();
        $token = $user->id .hash('sha256',Str::random(120));
        $verifyURL = route('verify',['token'=>$token,'service'=>'Email_Verification']);
        VerifyUser::create([
            'token' => $user->id .hash('sha256',Str::random(120)),
            'user_id' =>$user->id,
        ]);

        $message = 'Dear <b>'.$request->name.'</b>';
        $message.= 'Thanks for signing up, we just need you to verify your email address to complete setting up your account.';
        $mail_data = [
            'recipient' => $request->email,
            'fromEmail' => $request->email,
            'fromName' => $request->name,
            'subject' => 'Email Verification',
            'body' => $message,
            'actionLink' => $verifyURL,
            'actionText'=>"Click here to verify your email",
        ];

        Mail::send('emails.verifyemail', $mail_data, function ($message) use ($mail_data) {
            $message->to( $mail_data['recipient']);
            $message->from($mail_data['fromEmail'], $mail_data['fromName']);
            $message->subject($mail_data['subject']);

        });
        // dd($request->all());
        if($save){
        return redirect()->back()->with('success','You need to verify your account. We have sent you an activation link, please check your email.');
        }
        return redirect()->back()->with('error','Something went wrong, failed to register');


    }
    public function verifyEmail(Request $request) {
        $token = $request->token;
        $verifiedUser = VerifyUser::where('token',$token)->first();
        if(!is_null($verifiedUser))
        {
            $user = $verifiedUser->user;
            if(!$user->status)
            {
                $user->status = 1;
                $verifiedUser->$user->save();
                // $user->update(['email_verified_at'=>now()]);
                return redirect()->route('get.login')->with('success','Your email has been verified. You can now login')->with('verifiedEmail',$user->email);
            }
            else
            {
                return redirect()->back()->with('info','Your email has already been verified. You can now login')->with('verifiedEmail',$user->email);

            }
        }
        else
        {
            abort(403,'Sorry your token is invalid.');
        }
    }
    public function getLogin() {
        return view('front.auth.login');
    }
    public function postLogin(Request $request) {
        $user = $request->only('email','password');
        $remember = $request->has('remember') ? true : false;
        // dd(Auth::attempt($user));
        if(Auth::attempt($user,$remember)){
            // if(Auth::user()->email_verified_at == null)
            // {
            //     Auth::logout();
            //     return redirect()->route('get.login')->with('message','Please verify you account first');
            // }
            return redirect()->route('front.home')->with('success','Logged In Successfully');
        }
            return redirect()->back()->with('error','Tài khoản hoặc mật khẩu không đúng');


        // dd($request->all());
    }
    public function logout() {

        Auth::logout();
        return redirect()->route('front.home')->with('success','Logged Out Successfully');
    }

}
