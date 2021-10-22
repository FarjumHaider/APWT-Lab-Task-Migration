@extends('layouts.app')
@section('content')
<div >
<!-- <input type="hidden" name="id" value="{{$product->id}}"> -->
        <h1>Product Details</h1>
        <div class="col-md-4 form-group">
            <span>Product Name: {{$product->p_name}}</span>
        </div>
        <div class="col-md-4 form-group">
            <span>Product code: {{$product->p_code}}</span>
        </div>
        <div class="col-md-4 form-group">
            <span>Product description: {{$product->p_desc}}</span>
        </div>
        <div class="col-md-4 form-group">
            <span>Product category : {{$product->p_category}}</span>
        </div>
        <div class="col-md-4 form-group">
            <span>Product Price: {{$product->p_price}}</span>
        </div>
        <div class="col-md-4 form-group">
            <span>Product quantity: {{$product->p_quantity}}</span>
        </div>
        <div class="col-md-4 form-group">
            <span>Product stock date: {{$product->p_stock_date}}</span>
        </div>
        <div class="col-md-4 form-group">
            <span>Product rating: {{$product->p_rating}}</span><br>
        </div>
        <div class="col-md-4 form-group">
            <span>Product purcased: {{$product->p_purchased}}</span>
        </div><br>

</div>
        
@endsection

