@extends('subCategory.layout')

@section('content')
<div class="row mb-3">
    <div class="col-md-6">
         <h2>Sub-Category Add </h2>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
          <a class="btn btn-success" href="{{ route('subCategorys.index') }}"> Back</a> 
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

    <form action="{{ route('subCategorys.store') }}" method="POST">
        @csrf
        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Category Name </strong>
                    <select class="form-control" name="category_id" required="">
                        @foreach ($categorys as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>


                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sub Category Name</strong>
                    <input type="text" class="form-control" placeholder="sub Category Name" name="SubCategory_name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </div>

    </form>

@endsection
