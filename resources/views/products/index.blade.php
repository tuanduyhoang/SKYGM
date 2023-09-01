@extends('master')
@section('main')
@section('title','index')
<section class="intro">
    <div class="">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-center">Product Table</h3>
            </div>
            <div class="bg-image h-100" style="background-image: url(https://mdbootstrap.com/img/Photos/new-templates/glassmorphism-article/img7.jpg);">
                <div class="mask d-flex align-items-center h-100">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-12">
                        <div class="card mask-custom">
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-borderless  mb-0">
                                <thead class="text-black">
                                  <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Category-Id</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col" style="">Status</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Created_at</th>
                                    <th scope="col">Updated_at</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody class="text-white">
                                  @foreach($products as $product)
                              <tr>
                                  <td>{{$product->id}}</td>
                                  <td>{{$product->category_id}}</td>
                                  <td>{{$product->name}}</td>
                                  <td>
                                      <div >
                                          <div >
                                             <img style="width: 200px" src="{{ asset($product->img) }}" alt="" srcset="">
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
                                      <a href="{{route('category.edit',$product->id)}}" class="btn btn-warning">Sửa <i class="fa fa-pencil"></i></a>
                                      <form action="{{route('category.destroy',$product->id)}}" method="POST">
                                          @method('delete')
                                          @csrf
                                          <button class="btn btn-danger">Xóa <i class="fa fa-trash"></i></button>
                                      </form>

                                  </td>
                              </tr>
                             @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer clearfix">
                  {{$products->links('pagination.custom')}}
              </div>
        </div>
   </div>

  </section>




@endsection
