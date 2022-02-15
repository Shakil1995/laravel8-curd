
@extends('products.layout')

@section('content')
    <div class="row mb-3">
        <div class="col-md-6">
             <h2>Product Detalis </h2>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a> 
           </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

  
 <table id="datatable" class="display mt-4 table-sm" style="width:100%">
        <thead>
            <tr  class="text-center bg-secondary">
            <th>SL NO</th>
            <th>User Name </th>
            <th>Category Name</th>
            <th>Product title</th>
            <th>Images</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
           
           
           
             @foreach ($products as $key=>$product)
        <tr>
            <td>{{  $key+1 }}</td>
            <td>{{ $product->user->name  ?? 'None'}}</td>
            <td>{{ $product->category->category_name ?? 'None' }}</td>
            <td>{{ $product->name }}</td> 
            <td class="text-center"><img src="{{ asset($product->product_img)}}" height="40" width="70"></td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="text-center">
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            {{-- </td>
            <td  class="text-center >
         
                    <a class="" href="{{ route('products.show',$product->id) }}"><i class="fas fa-eye"> </i></a>
                    <a class="" href="{{ route('products.edit',$product->id) }}"><i class="fas fa-edit"> </i></a>
                    <a class="" href="{{ route('products.destroy',$product->id) }}"><i class="fas fa-trash"> </i></a>
                   
            </td> --}}
        </tr>
        @endforeach
        </tbody>
    
    </table> 


    <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();
} );
    </script>

@endsection