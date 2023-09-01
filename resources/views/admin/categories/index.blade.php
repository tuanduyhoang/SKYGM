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
                        <th>Name</th>
                        <th>Photo</th>
                        <th style="width: 40px">Status</th>
                        <th>Description</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <div>
                                <div>
                                    <img style="width: 200px"
                                        src="{{ asset($category->img) }}"
                                        alt="" srcset="">
                                </div>
                            </div>
                        </td>
                        <td>
                            {!! $category->status == 1
                                ? '<span class="badge bg-primary">hiển thị</span>'
                                : '<span class="badge bg-secondary">không hiển thị</span>' !!}
                        </td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            {{-- <a href="{{route('category.create')}}" class="btn btn-success">Thêm <i class="fa-regular fa-cart-arrow-down"></i></i></a> --}}
                            <a href="{{ route('admin.category.edit', $category->id) }}"
                                class="btn btn-warning">Sửa <i
                                    class="fa fa-pencil"></i></a>
                            <form
                                action="{{ route('admin.category.destroy', $category->id) }}"
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
            {{$categories->links('pagination.custom')}}
        </div>
    </div>
@endsection
