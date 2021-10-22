@extends('layouts.app')
@section('content')
<form action="{{route('addproduct')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Product Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product code</span>
            <input type="text" name="pcode" value="{{old('pcode')}}"class="form-control">
            @error('pcode')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product description</span>
            <input type="text" name="pdes" value="{{old('pdes')}}" class="form-control">
            @error('pdes')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product category</span>
            <select name="category" id="category" >
                <option value="Select a category" class="form-control">Select a Category</option>
                <option value="TV" class="form-control">TV</option>
                <option value="Laptop" class="form-control">Laptop</option>
                <option value="Computer" class="form-control">Computer</option>
               
              </select><br>

            @error('category')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product Price</span>
            <input type="text" name="price" value="{{old('price')}}" class="form-control">
            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product quantity</span>
            <input name="quantity" type=text value="{{old('quantity')}}" class="form-control">
            @error('quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product stock date</span>
            <input type="date" name="stockDate" value="{{old('stockDate')}}" class="form-control">
            @error('stockDate')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product rating</span><br>
            <input type="radio" id="valOne" name="rating" value="1">
            <label for="valOne">1 </label><br>
            <input type="radio" id="valtwo" name="rating" value="2">
            <label for="valtwo">2</label><br>
            <input type="radio" id="valthree" name="rating" value="3">
            <label for="valthree">3 </label><br>
            <input type="radio" id="valfour" name="rating" value="4">
            <label for="valfour">4 </label><br>
            <input type="radio" id="valfive" name="rating" value="5">
            <label for="valfive">5 </label><br>
            @error('rating')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Product purcased</span>
            <input type="text" name="purchased" value="{{old('purchased')}}" class="form-control">
            @error('purchased')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        <input type="submit" class="btn btn-success" value="Add" >
    </form>



@endsection

