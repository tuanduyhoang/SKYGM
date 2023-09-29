@extends('admin.master')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Manage Orders</h3>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Customer name</th>
                    <th style="width: 40px">Phone</th>
                    <th>Email</th>
                    <th>Created_at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>
                        {{ $order->phone }}
                    </td>
                    <th>{{ $order->email }}</th>
                    {{-- <td>{{ $category->description }}</td> --}}
                    <td>{{ $order->created_at }}</td>
                    <td>
                        <a href="{{route('admin.detail')}}"
                            class="btn btn-warning"> <i
                                class="fa fa-eye"></i></a>
                        <form
                            action=""
                            method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger"> <i
                                    class="fa fa-trash"></i></button>
                        </form>

                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <div class="card-footer clearfix">
        {{-- {{$orders->links('pagination.custom')}} --}}
    </div>
</div>



@endsection
