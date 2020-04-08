<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<style>
    .seat{
        width:50px;
        height: 50px;
        background-color: darkgreen;
        color: white;
        margin-right: 2px;
        margin-top: 2px;
        line-height: 50px;
        text-align: center;
    }
    .half{
        margin-left: 25px;
    }
    .none{
        background-color: white;
        color: black;
    }
    .main{
        margin-top: 100px;
    }
</style>
<body>
<div class="container main">
    {{-- <div class="row">
        <div class="seat none">1</div>
        <div class="seat none"></div>
        <div class="seat ">1</div>
        <div class="seat ">2</div>

    </div>
    <div class="row">
<div class="seat none">2</div>
<div class="seat half">1</div>
<div class="seat ">2</div>
<div class="seat ">3</div>

    </div>
    <div class="row">
<div class="seat none">3</div>

<div class="seat">1</div>
<div class="seat">2</div>
<div class="seat ">3</div>
<div class="seat">4</div>
    </div> --}}
    <div class="row">
    <div class="col-4"></div>
    <div class="col-6">
            @for($i=1;$i<=$max;$i++)
            <div class="row">
                @foreach($seats as $seat)
                @if($seat->row==$i)
            <div class="seat @if($seat->status==0){{"half se"}}@elseif($seat->status==1){{"none"}}@else{{"se"}}@endif">{{$seat->number}}</div>
                @endif
                @endforeach
            </div>
            @endfor

    </div>
</div>

</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="myseat.js"></script>
</body>
</html>
