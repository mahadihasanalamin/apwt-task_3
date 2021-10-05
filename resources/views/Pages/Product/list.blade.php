@extends('Layouts.app')
@section('content')
    <table class='table table-bordered'>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
        @foreach($products as $product)
            <tr>
                <td>{{$product->p_id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->description}}</td>
                <td><a class ="btn btn-success" href="/product/edit/{{$product->id}}">Edit</a></td>
                <td><a class ="btn btn-danger" href="/product/delete/{{$product->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection