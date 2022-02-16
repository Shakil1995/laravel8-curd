@extends('category.layout')

@section('content')
    <div class="row mb-3">
        <div class="col-md-6 ">
            <h2>Subc-Category List </h2>
           </div>
           <div class="col-md-6 d-flex justify-content-end">
                <a class="btn btn-success" href="{{ route('subCategorys.create') }}"> Create New SubCategory</a>
           </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table id="datatable" class="display  table-sm  " style="width:100%">
        <thead>
            <tr class="text-center bg-secondary">
                <th>SL NO</th>
                <th>Category Name</th>
                <th>SubCategory Name</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>


            @foreach ($subCategorys as $key => $subCategory)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $subCategory->category_id }}</td>
                    <td>{{ $subCategory->SubCategory_name }}</td>
                    <td class="text-center">
                        <form action="{{ route('subCategorys.destroy', $subCategory->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('subCategorys.show', $subCategory->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('subCategorys.edit', $subCategory->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
@endsection
