@extends('products.layout');


@section('content')



<div class="row mb-3">
    <div class="col-md-6 ">
        <h2> Add new Category </h2>
       </div>
       <div class="col-md-6 d-flex justify-content-end">
            <a class="btn btn-success" href="{{ route('products.index') }}">  Back</a>
       </div>
</div>



    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>whoops ! </strong> problem in ypur input
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif






    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User Name</strong>
                    <select class="form-control" name="user_id" required="">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Category</strong>
                    <select class="form-control" name="category_id" required="">
                        @foreach ($categorys as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>


                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title</strong>
                    <input type="text" class="form-control" placeholder="product Title" name="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>description</strong>
                    <textarea type="text" class="form-control" rows="4" cols="50" placeholder="Product description"
                        name="detail"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image</strong>
                    <input type="file" class="form-control" placeholder="product Images" name="product_img">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

    </form>

@endsection
