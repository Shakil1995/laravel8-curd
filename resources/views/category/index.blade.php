
@extends('category.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Category</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categorys.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>SL NO</th>
            <th>Category</th>
        
            <th width="280px">Action</th>
        </tr>
        @foreach ($categorys as $key=>$category)
        <tr>
            <td>{{  $key+1 }}</td>         
            <td>{{ $category->category_name }}</td>
            <td>
                <form action="{{ route('categorys.destroy',$category->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('categorys.show',$category->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('categorys.edit',$category->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $categorys->links() }}


@endsection