@extends('layouts.app')

@section('content')
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap-theme.css.map')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-3.1.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/responsive.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    /* padding: 20px; */
}
</style>
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
    <div>
        <h1>Bạn muốn chia sẻ món ăn gì không?</h1>
    </div>
    <div class="post">
        <form action="{{route('post')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <label for="fname" style="font-size: 24px;">Tên món ăn</label>
            <input type="text" id="fname" name="tenmon" placeholder="Tên món..">
            <label for="lname" style="font-size: 24px;">Nguyên Liệu</label></br>
            <label>Tên nguyên liệu</label><input type="text" id="lname" name="tennguyenlieu" placeholder="Tên.."></br>
            <label>Lượng(gram)      </label><input type="text" id="lname" name="luong" placeholder="Lượng.."></br>
            <label for="fname">Cách nấu</label>
            <input type="text" name="cachnau" placeholder="Cách nấu..">
            <label for="country" style="font-size: 24px;">Hình ảnh món ăn</label></br>
            <input type="file" id="myFile" name="image">
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
<footer>
	<div class="main-footer">
		    <div class="container">
		    	<div class="row">
		    		<div class="col-md-4">
		    			<h2>WHAT<font color="blue">ISFOR</font>DINNER</h2>
  					    <address>
  						<ul>
    						<li><a href="https://www.hust.edu.vn/">Ha Noi University of Science and Technology</a></li>
    						<li><a href="https://soict.hust.edu.vn/">Student Of Soict</a></li>
  						</ul>
  					    </address>
		    		</div>
		    		<div class="col-md-4">
		    			<h2>SUPPORT</h2>
		    			<div class="col-md-4--contact">
		    				
        					<a href="#" class="btn btn-info btn-lg">
          					<span class="glyphicon glyphicon-envelope"></span> whatisfordinner@gmail.com 
        					</a>
        					<a href="#" class="btn btn-info btn-lg">
          					<span class="glyphicon glyphicon-earphone"></span> 0987906734
        					</a>
        					
        				</div>
		    		</div>
		    		<div class="col-md-4">
		    			<h2>FOLLOW US</h2>
		    			<div class="col-md-3--contact">
                            <div class="col-md-3--contact1"><a href="https://www.facebook.com/"><img src="{{asset('asset/image/face.png')}}"></a></div>
                            <div class="col-md-3--contact1"><a href="https://www.twiter.com/"><img src="{{asset('asset/image/twiter.png')}}"></a></div>
                            <div class="col-md-3--contact1"><a href="https://www.instagram.com/"><img src="{{asset('asset/image/instagram.png')}}"></a></div>
                            <div class="col-md-3--contact1"><a href="https://www.youtube.com/"><img src="{{asset('asset/image/youtube.png')}}"></a></div>
		    		    </div>
		    		</div>
		    	</div>
		    </div>
	</div>
</footer>
@endsection
