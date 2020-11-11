@extends('site.template')
@section('content')
 <div id="page" style="margin-top: 102px; ">
  <section id="pageheading">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3> Gallery Page</h3>
              <span><a href="">Home</a>/ <a href="">About us</a> / <a href="">Gallery</a> </span>
            </div>
          </div>
        </div>
      </section>
   <section id="gallerypage" style=" padding: 20px 20px;">
 	<div class="container">
      <div class="row">
         
            <div class="col-md-12">
              <h2 style="padding: 30px 0; font-style: italic; color: #ffc107; text-align: center;">Gallery </h2>
            </div>
          <div class="row">
            @foreach($galleries as $gallery) 
                <div class="img-thumbnail col-md-4">
              <div class="card" style="width: 22rem;">
                  <img src="{{asset('site/img/gallery/'.$gallery->photo)}}" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text" style="font-style: italic;">{{$gallery->title}} </p>
                  </div>
                </div>
          </div>
          @endforeach
          </div>
         
          
      </div>  
    </div>
    </section>  
</div>

@stop
