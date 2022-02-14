@extends('category.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Add new Product </h3>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categorys.index') }}">Back</a>
            </div>
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

    <form action="{{ route('categorys.store') }}" method="POST">
        @csrf
        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category Name</strong>
                    <input type="text" class="form-control" placeholder="Category Name" name="category_name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </div>

    </form>

@endsection
