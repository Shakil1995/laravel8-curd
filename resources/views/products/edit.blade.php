@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $products->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User Name : </strong>
                    {{ $products->user->name }}
                    {{-- {{$users->name }} --}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category:</strong>
                    <select class="form-control" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id == $products->category_id) selected="" @endif>
                                {{ $category->category_name }} </option>
                        @endforeach
                    </select>

                </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product title:</strong>
                    <input type="text" name="name" value="{{ $products->name }}" class="form-control"
                        placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> description :</strong>
                    <textarea class="form-control" style="height:100px" name="detail"
                        placeholder="description">{{ $products->detail }}</textarea>
                </div>
            </div>
            <div class="row mt-5">
                <div class="form-group col-md-6 ">
                    <label for="">Upadate Image</label>
                    <input type="file" class="" id="" name="product_img">
                </div>
                <div class="form-group col-md-6">
                    <label for=""> Old Image</label>
                    <img src="{{ URL::to($products->product_img) }}" alt="" style="height:100px" width="120px">
                    <input type="hidden" name="oldImage" value="{{ $products->product_img }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
