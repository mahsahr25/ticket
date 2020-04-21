@extends('layouts.confer.sitemaster')

@section('content')
<style>
    .seat{
        width:50px;
        height: 50px;
        /* background-color: darkgreen; */
        color: darkgreen;
        margin-right: 2px;
        margin-top: 2px;
        line-height: 50px;
        text-align: center;
        position: relative;
        /* direction:rtl; */
        /* text-align: right; */
    }
    .half{
        margin-right: 25px;
    }
    .rownum{
        background-color: white;
        color: black;
    }
    .none{
        visibility: hidden;
    }
    .popover-title {
        text-align: right;
        direction:rtl;
    }


.tooltip .tooltip-inner { background-color:  #337ab7; }
.tooltip .arrow:before {
 border-bottom-color:#337ab7 !important;
 border-top-color:#337ab7 !important;
 }
</style>

<section class="container main">
    <div  style="padding-top:200px;padding-bottom:200px;padding-right:200px;" >

    {{-- <div class="row"> --}}
    {{-- <div style="background-color:darkgrey;"> --}}
            @for($i=$maxrow;$i>=1;$i--)
            <div class="row">
            <div class="seat rownum">{{$i}}</div>
                @foreach($seats as $seat)
                @if($seat->row==$i)
            <div class="seat @if($seat->seatstatus==0){{"half se"}}@elseif($seat->seatstatus==1){{"none"}}@elseif($seat->seatstatus==3){{"none half"}}@else{{"se"}}@endif"
                data-toggle="tooltip" title="سینما آزادی<br />{{$seat->row}}<br />مطرب" data-html="true" style="direction:rtl;">


                 <i class="flaticon-chair" style="color:rgb(0,168,0)"></i>
                <p class="text-center"style="position:absolute;top:3px;left:45%;color:white;"><b>{{$seat->number}}</b></p>
            </div>
                @endif
                @endforeach
            </div>
            @endfor

    {{-- </div> --}}
{{-- </div> --}}
</div>

</section>

@endsection
