@extends('layouts.app')
@section('content')
<form action="{{route('editproduct')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$product->id}}">
        <div class="col-md-4 form-group">
            <span>Product Name</span>
            <input type="text" name="name" value="{{$product->p_name}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product code</span>
            <input type="text" name="pcode" value="{{$product->p_code}}"class="form-control">
            @error('pcode')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product description</span>
            <input type="text" name="pdes" value="{{$product->p_desc}}" class="form-control">
            @error('pdes')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product category</span>
            <select name="category" id="category" >
                <option value="Select a category" class="form-control" >Select a Category</option>
                <option value="TV" @if ($product->p_category == "TV") selected @endif  class="form-control" >TV</option>
                <option value="Laptop" @if ($product->p_category == "Laptop") selected @endif  class="form-control">Laptop</option>
                <option value="Computer" @if ($product->p_category == "Computer") selected @endif class="form-control">Computer</option>
               
              </select><br>

            @error('category')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Price</span>
            <input type="text" name="price" value="{{$product->p_price}}" class="form-control">
            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product quantity</span>
            <input name="quantity" type=text value="{{$product->p_quantity}}" class="form-control">
            @error('quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product stock date</span>
            <input type="date" name="stockDate" value="{{$product->p_stock_date}}" class="form-control">
            @error('stockDate')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product rating</span><br>
            <input type="radio" id="valOne" name="rating" @if ($product->p_rating == "1") checked @endif value="1">
            <label for="valOne">1 </label><br>
            <input type="radio" id="valtwo" name="rating" @if ($product->p_rating == "2") checked @endif value="2">
            <label for="valtwo">2</label><br>
            <input type="radio" id="valthree" name="rating" @if ($product->p_rating == "3") checked @endif value="3">
            <label for="valthree">3 </label><br>
            <input type="radio" id="valfour" name="rating" @if ($product->p_rating == "4") checked @endif value="4">
            <label for="valfour">4 </label><br>
            <input type="radio" id="valfive" name="rating" @if ($product->p_rating == "5") checked @endif value="5">
            <label for="valfive">5 </label><br>
            @error('rating')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product purcased</span>
            <input type="text" name="purchased" value="{{$product->p_purchased}}" class="form-control">
            @error('purchased')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>



@endsection

