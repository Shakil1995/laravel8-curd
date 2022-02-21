@extends('category.layout')
@section('content')
<div class="row mb-3">
    <div class="col-md-6 ">
        <h2> Show Sub Category </h2>
       </div>
       <div class="col-md-6 d-flex justify-content-end">
            <a class="btn btn-success" href="{{ route('subCategorys.index') }}">  Back</a>
       </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <h3> <strong>Category Name : </strong>  {{ $subCategorys->category->category_name }}</h3> 
           <h3> <strong>Sub Category Name : </strong>  {{ $subCategorys->SubCategory_name }}</h3> 
          
        </div>
    
    </div>
  
    
   
</div>

@endsection