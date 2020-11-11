@extends('site.template')
@section('content')
<div id="page" style="margin-top: 102px;">
	<section id="pageheading">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h3> Notice </h3>
							<span><a href="">Home</a>/ <a href="">About us</a> / <a href="">Notice</a> </span>
						</div>
					</div>
				</div>
			</section>
			<section id="notice">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
					<ul>
						@foreach($notices as $notice)
					<li class="media" style="padding: 20px;">
				    <div class="media-body">
				      <h5 class="mt-0 mb-1">{{$notice->title}}</h5>
				    {{$notice->detail}}
				      <p style="text-align: right;">
				      	<a href="{{route('getNoticeDetail',$notice->slug)}}" class="btn btn-primary">Read more</a>
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
