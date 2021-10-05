@extends('Layouts.app')
@section('content')
    <form action="{{route('product/edit')}}" method='POST'>
        {{csrf_field()}}
        <input type='hidden' name='id' value="{{$product->id}}">
        <div class='col-md-2 form-group'>
            <span>ID</span>
            <input type='text' name='p_id' value="{{$product->p_id}}" class='form-control'>
            @error('p_id')
                <span class='text-danger'>{{$message}}</span>
            @enderror
        </div>
        <div class='col-md-2 form-group'>
            <span>Name</span>
            <input type='text' name='name' value="{{$product->name}}" class='form-control'>
            @error('name')
                <span class='text-danger'>{{$message}}</span>
            @enderror
        </div>
        <div class='col-md-2 form-group'>
            <span>Price</span>
            <input type='text' name='price' value="{{$product->price}}" class='form-control'>
            @error('price')
                <span class='text-danger'>{{$message}}</span>
            @enderror
        </div>
        <div class='col-md-2 form-group'>
            <span>Quantity</span>
            <input type='text' name='quantity' value="{{$product->quantity}}" class='form-control'>
            @error('quantity')
                <span class='text-danger'>{{$message}}</span>
            @enderror
        </div>
        <div class='col-md-2 form-group'>
            <span>Description</span>
            <input type='text' name='description' value="{{$product->description}}" class='form-control'>
            @error('description')
                <span class='text-danger'>{{$message}}</span>
            @enderror
        </div>
        <input type='submit' name='submit' value='Update' class='btn btn-success'>
    </form>
@endsection