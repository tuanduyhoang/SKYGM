@extends('master')
@section('main')
<form action="{{route('category.update',$category)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    {{-- @if (@isset($errors))
    @foreach ($errors->all() as $error)
    {{ $error }}
    @endforeach
    @endif --}}

    @if($errors = session()->get('errors'))
    <ul>
        @foreach ($errors->messages() as $error)
        <li>{{ $error[0] }}</li>
        @endforeach
    </ul>
    @endif
    <div class="container">
        <div class="row col-md-6">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Name</label>
                <input type="text" class="form-control" id="email" placeholder="Enter name" name="name" value="{{$category->name}}">
              </div>
              <div class="mb-3">
                <label for="pwd" class="form-label">Description</label>
                <input type="textarea" class="form-control" id="pwd" placeholder="Enter description" name="description" value="{{$category->description}}"
               >
              </div>
              <div class="mb-3">
                  <label for="img" class="form-label">Ảnh</label>
                  <input type="file" class="form-control" name="img" id="img">
                </div>
              <div class="mb-3">
                  <label for="status" class="form-label">Status</label>
                  {{-- <input type="" class="form-control" > --}}
                  <select class="form-control" name="status" id="status">
                      <option value="0"{{ $category->status ==0 ? 'selected' : '' }}>Không hoạt động</option>
                      <option value="1"{{ $category->status ==1 ? 'selected' : '' }}>Hoạt động</option>
                  </select>
                </div>
              <div class="form-check mb-3">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-success">Sửa đê</button>
        </div>
    </div>
  </form>
  @endsection
