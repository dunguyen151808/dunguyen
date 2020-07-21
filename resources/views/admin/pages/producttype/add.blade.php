@extends('admin.layout.master')
@section('title')
      <title>Trang chủ</title>
@endsection
@section('content')
<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
			  <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <div class="card shadow mb-4">
		<div class="card-header py-3">
	        <h6 class="m-0 font-weight-bold text-primary">Loại sản phẩm</h6>
	    </div>
		<div class="row" style="margin: 5px">
	        <div class="col-lg-12">
	            <form role="form" action="{{ route('producttype.store') }}" method="post">
	            	@csrf
	                <fieldset class="form-group">
	                    <label>Name</label>
	                    <input class="form-control" name="name" placeholder="Nhập tên loại sản phẩm">
	                    @if($errors->has('name'))
							<div class="alert alert-danger">{{ $errors->first('name') }}</div>
	                    @endif
	                </fieldset>
	                <div class="form-group">
	                    <label>Category</label>
	                    <select class="form-control" name="idCategory">
							@foreach($category as $cate)
	                        	<option value="{{ $cate->id }}">{{ $cate->name }}</option>
	                        @endforeach	
	                    </select>
	                </div>
	                <div class="form-group">
	                    <label>Status</label>
	                    <select class="form-control" name="status">
	                        <option value="1">Hiển Thị</option>
	                        <option value="0">Không Hiển Thị</option>
	                    </select>
	                </div>
	                <button type="submit" class="btn btn-success">Thêm</button>
	                <button type="reset" class="btn btn-primary">Nhập Lại</button>
	            </form>
	        </div>
	    </div>
	</div>  
</div>  
@endsection