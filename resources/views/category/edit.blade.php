@extends('category.layout')

@section('content')
<div class="row mb-3">
    <div class="col-md-6 ">
        <h2> Category  Edit</h2>
       </div>
       <div class="col-md-6 d-flex justify-content-end">
            <a class="btn btn-success" href="{{ route('categorys.index') }}">  Back</a>
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

    <form action="{{ route('categorys.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category Name:</strong>
                    <input type="text" name="category_name" value="{{ $category->category_name }}" class="form-control"
                        placeholder="category Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
