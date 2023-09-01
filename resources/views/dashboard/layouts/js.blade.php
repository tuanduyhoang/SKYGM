<script src="{{ asset('assets/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/chosen.min.js')}}"></script>
<script src="{{ asset('assets/js/countdown.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.scrollbar.min.js')}}"></script>
<script src="{{ asset('assets/js/lightbox.min.js')}}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/js/slick.js')}}"></script>
<script src="{{ asset('assets/js/jquery.zoom.min.js')}}"></script>
<script src="{{ asset('assets/js/threesixty.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('assets/js/mobilemenu.js')}}"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
<script src="{{ asset('assets/js/functions.js')}}"></script>
<script src="{{ asset('assets/js/js1.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"  />
<script>
    // kiểm tra tồn lại session hay ko?
    @if(session()->has('success'))
        // sử dụng thư viện js để hiển thị thông báo
        toastr.success('{{ session()->get("success") }}')
    @elseif(session()->has('error'))
        toastr.danger('{{ session()->get("error") }}')
    @endif

</script>
