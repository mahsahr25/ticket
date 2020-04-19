@extends('layouts.confer.sitemaster')

@section('content')



<section style="padding-top:20vh;padding-right:10vw;padding-bottom:20vh;">
    {{-- <section class="our-speaker-area section-padding-100 mt-5"> --}}

  <div class="container-fluid">
    <h4>نتایج جستجو برای "{{$keyword}}"</h4>


    <div class="row pb-5 mt-5">
         @forelse ($events as $item)
    <div class="col-lg-3  mb-5">

       {{-- <div class="card " style="width:250px;margin-bottom:100px"> --}}
        @foreach($item->image()->take('1')->get() as $photo)
        <div class="col-12" style="height:280px">
            <a href="">
                <img class="card-img-top" src="{{$photo['name']}}" alt="search image" style="height:100%;width:100%">

            </a>
        </div>
        @endforeach
        {{-- <div class="card-body"> --}}
          <h4 class="card-title text-center mt-3">{{$item['name'] }}</h4>
          {{-- <p class="card-text text-center">کارگردان:{{$item['director']}}</p> --}}
          {{-- <div class="text-center"> --}}
             {{-- <a href="#" class="btn confer-btn ">خرید بلیط</a> --}}
          {{-- </div> --}}

        {{-- </div> --}}
      {{-- </div> --}}

    </div>
        {{-- <div class="pt-4 mt-4" > --}}
            @empty{{$Message}}
         {{-- </div> --}}

      @endforelse


    </div>


  </div>
</section>




@endsection
