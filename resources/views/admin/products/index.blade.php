@extends('admin.master')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Category Table</h3>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Cat-id</th>
                    <th>Name</th>
                    <th style="">Image</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Content</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                        <div>
                            <div>
                                <img style="width: 200px"
                                    src="{{ asset($product->img) }}"
                                    alt="" srcset="">
                            </div>
                        </div>
                    </td>
                    <td>
                        {!!

                        $product->status ==1 ?
                        '<span class="badge bg-primary">hoạt động</span>' :
                        '<span class="badge bg-secondary">không hoạt động</span>'

                        !!}
                    </td>
                    <td>
                        {!!$product->description!!}
                    </td>
                    <td>
                      {{$product->content}}
                  </td>
                    <td>
                        {{$product->created_at}}
                    </td>
                    <td>
                        {{$product->updated_at}}
                    </td>
                    <td>
                      {{$product->price}}
                  </td>
                  <td>
                        {{-- <a href="{{route('product.create')}}" class="btn btn-success">Thêm <i class="fa-regular fa-cart-arrow-down"></i></i></a> --}}
                        <a href="{{ route('admin.product.edit', $product->id) }}"
                            class="btn btn-warning">Sửa <i
                                class="fa fa-pencil"></i></a>
                        <form
                            action="{{ route('admin.product.destroy', $product->id) }}"
                            method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger">Xóa <i
                                    class="fa fa-trash"></i></button>
                        </form>

                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <div class="card-footer clearfix">
        {{$products->links('pagination.custom')}}
    </div>
</div>


@endsection
