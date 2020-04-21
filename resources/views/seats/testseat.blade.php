@extends('layouts.confer.sitemaster')

@section('content')
<style>
    .seat{
        width:50px;
        height: 50px;
        /* background-color: darkgreen; */
        color: white;
        margin-left: 2px;
        margin-top: 2px;
        line-height: 50px;
        text-align: center;
        position: relative;

    }
    .half{
        margin-right: 20px;
        /* background-color: aquamarine; */
    }
    .rownum{
        background-color: white;
        color: black;
    }
    .none{
        visibility: hidden;
    }
    .main{
        /* margin-top: 100px; */
    }
</style>

<section class="container">
    <div  style="padding-top:200px;padding-bottom:200px;padding-right:200px;" class="arrange">
        {{-- <p>{{$seats[0]->totalrow}}</p> --}}
         {{-- @foreach($seats as $seat) --}}
        {{-- <p>{{$seat->totalrow}}</p> --}}
         @for($i=($maxrow);$i>=1;$i--)
        <div class="row m{{$i}}" >
                <button class=" mb-2 px-2" id="m{{$i}}">شیفت</button>
                {{-- <button class="mr-1 mb-1 px-2" id="d{{$i}}">حذف</button> --}}
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

               <div class="seat rownum">{{$i}}</div>

         @foreach($seats as $seat)
         @if($seat->row==$i)


                @for($j=1;$j<=$maxseat;$j++)
                @if($j==$seat->number)
                <div class="seat" id="{{$seat->id}}">
                    <i class="flaticon-chair" style="color:rgb(0,168,0)"></i>
                    <p class="text-center"style="position:absolute;top:3px;left:45%;color:white;"><b>{{$j}}</b></p>
                </div>
                @endif
                @endfor
                @endif
                @endforeach

                {{-- <button type="submit" name = "submit" value = "shift" class="mr-5 mb-1 px-2" href="{{route('seat_arrange')}}">شیفت</button>&nbsp; --}}
                {{-- <button type="submit" name = "submit"  value = "delete" class="mr-1 mb-1 px-2">حذف</button> --}}
                {{-- <button type="submit" name = "submit" value = "shift"  class="mr-5 mb-1 px-2" id="{{$i}}"><a href="{{url('seat_arrange/'.$i)}}" type="submit" name = "submit" value = "shift">شیفت</a></button>&nbsp; --}}
        </div>
        @endfor
        {{-- @endforeach --}}
    </div>
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
    {{-- <div class="row">
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

    </div> --}}
{{-- </div> --}}

</section>
{{-- <script>
$('#m').on('click',function(){
alert('hi')
});
</script> --}}

@endsection
