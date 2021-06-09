@extends('layouts.app')

@section('content')
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
        <form action="/action_page.php">
            <label for="fname" style="font-size: 24px;">Tên món ăn</label>
            <input type="text" id="fname" name="firstname" placeholder="Tên món..">

            <label for="lname" style="font-size: 24px;">Nguyên Liệu</label></br>
            <label>Tên nguyên liệu</label><input type="text" id="lname" name="lastname" placeholder="Lượng.."></br>
            <label>Lượng(gram)      </label><input type="number" id="lname" name="lastname" placeholder="Lượng.."></br>
            <label for="fname">Cách nấu</label>
            <input type="text" name="firstname" placeholder="Cách nấu..">
            <label for="country" style="font-size: 24px;">Hình ảnh món ăn</label></br>
            </br>
            <form action="/action_page.php">
            <input type="file" id="myFile" name="filename">
            </form>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
@endsection
