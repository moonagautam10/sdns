@extends('site.template')
@section('content')
<div id="page" style="margin-top: 102px;">
	<section id="pageheading">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h3> News & Events </h3>
							<span><a href="">Home</a>/ <a href="">About us</a> / <a href="">News & Event</a> </span>
						</div>
					</div>
				</div>
			</section>
	<section id="newspage" style="">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					
				
				<ul class="list-unstyled">
					@foreach($news as $news)
				  <li class="media" style="padding: 20px;">
				    <img src="{{asset('site/img/news/'.$news->photo)}}"style="height: 200px; width: 250px;"  class="mr-3" alt="">
				    <div class="media-body">
				      <h5 class="mt-0 mb-1">{{$news->title}}</h5>
				     {{$news->detail}}
				      <p style="text-align: right;">
				      	<a href="{{route('getNewsDetail',$news->slug)}}" class="btn btn-primary">Read more</a>
				      </p>
				    </div>
				  </li>
				   	@endforeach
				</ul>
				</div>
				<div class="col-md-4">
							<div class="sidebar" style="background: skyblue; padding: 20px; margin-top: 20px">
								<h5> News &amp; Events</h5>
								<ul class="sidebarlist">
									<li><a href=""> efhuiegf feh</a></li>
									<li><a href="">efgug fieugfu s</a></li>
								</ul>
							</div>
						</div>
			</div>
		</div>
	</section>
</div>
@stop