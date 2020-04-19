@extends('layouts.confer.regular')

@section('content')



<section style="padding-top:20vh;padding-right:10vw;padding-bottom:20vh;">

  <div class="container-fluid">
    <h4>نتایج جستجو برای "{{$k}}"</h4>
     
      
      <div class="row pb-5">
         @forelse ($events as $item)
        <div class="col-4 pb-4 pt-4 mb-5">
         
       <div class="card" style="width:300px;margin-bottom:100px">
        <img class="card-img-top" src="storage/{{$item->fileimage}}" alt="search image" style="height:100%;width:100%">
        <div class="card-body">
          <h4 class="card-title text-center">{{$item['title'] }}</h4>
          <p class="card-text text-center">کارگردان:{{$item['director']}}</p>
          <div class="text-center">
             <a href="#" class="btn confer-btn ">خرید بلیط</a>
          </div>
         
        </div>
      </div>
    
        </div>

        <div class="pt-4 mt-4">
           @empty{{$Message}}
        </div>
        
     @endforelse
     
    </div>
    
  </div>


{{-- <h2>{{$item->Category['name'] }}</h2> --}}

{{-- <h2>{{$item['cast']}}</h2> --}}
{{-- <h2>{{$item->Genre['name']}}</h2> --}}

    







</section>




@endsection