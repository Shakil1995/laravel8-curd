@extends('category.layout')

@section('content')
<div class="row mb-3">
    <div class="col-md-6 ">
        <h2> Edit Sub Category </h2>
       </div>
       <div class="col-md-6 d-flex justify-content-end">
            <a class="btn btn-success" href="{{ route('subCategorys.index') }}">  Back</a>
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
    <form action="{{ route('subCategorys.update', $subCategorys->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category:</strong>
                    <select class="form-control" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id == $subCategorys->category_id) selected="" @endif>
                                {{ $category->category_name }} </option>
                        @endforeach
                    </select>

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sub Category Name:</strong>
                    <input type="text" name="SubCategory_name" value="{{ $subCategorys->SubCategory_name }}" class="form-control"
                        placeholder="category Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
   
@endsection
