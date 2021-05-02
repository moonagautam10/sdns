@extends('site.template')
@section('content')
<section id="slider">
			<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
			  	<div class="carousel-inner">

				    @foreach($sliders as $slider)
			  	<?php $active = 'active'; ?>
				    <div class="carousel-item {{$active}}">
				      <img src="{{asset('site/img/slider/'.$slider->photo)}}" class="d-block w-100" alt="...">
				    </div>
				    <?php $active = ''; ?>
				    @endforeach
			  	</div>
				<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
			</div>
		</section>
		<section id="informatonbox">
			<div class="container">
				<div class="row">
					<div class="col-md-6 informationbox-left">
						<ul class="noticeboard">
							
							<h5><span style="color: red;"><i class="far fa-bell"></i></span> Notice Board</h5>
							@foreach($notices as $xxx)
							<li><a href="{{route('getNoticeDetail',$xxx->slug)}}"><small style="background: red; margin-right: 10px;padding: 0 5px;"> {{$xxx->created_at->format('d M, Y')}}</small>{{$xxx->title}} </a></li>
							@endforeach							
						</ul>
						<p style="margin-top: 15px; text-align: right;"><a href="{{route('getNotices')}}" class="btn btn-primary">View all</a></p>
					</div>
					<div class="col-md-6 informationbox-right">
						<ul class="noticeboard">
							<h5><span style="color: red;"> <i class="far fa-newspaper"></i></span> News &amp; Events</h5>
							@foreach($news as $abc)
							<li><a href="{{route('getNewsDetail',$abc->slug)}}"><small style="background: red; margin-right: 10px;padding: 0 5px;"> {{$abc->created_at->format('d M, Y')}}</small>{{$abc->title}} </a></li>
							@endforeach
							
						</ul>
						<p style="margin-top: 15px; text-align: right;"><a href="{{route('getNews')}}" class="btn btn-primary">View all</a></p>
					</div>
				</div>
			</div>
		</section>
		<section id="welcome">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img src="{{asset('site/img/page/'.$about->photo)}}" alt="" style="width: 100%">
					</div>
					<div class="col-md-8">
						<h4>Welcome to Deupur Namuna English Boarding School</h4>
						<p>{{$about->detail}}</p>
						<p style="text-align: right;"><a href="{{route('getPage','about-us')}}" class="btn btn-primary">View more</a></p>
					</div>
				</div>
			</div>
		</section>
		<section id="features">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h5 class="title">Our Facilities</h5>
						<br />
							<div class="row facilities">
								@foreach($features as $feature )

								<div class="col-md-3 col-sm-3  col-xs-6 facilities_block"> 
									<a href="">
										<img src="{{asset('site/img/feature/'.$feature->photo)}}">
									</a>
									<br>
									<a href="">{{$feature->title}}</a>
								</div>
								@endforeach

							</div>
					</div>
					<div class="col-md-4">
						<h5 class="title">Message from Chairperson</h5>
						<br />
						<p><img src="{{asset('site/img/page/'.$chairman->photo)}}" alt="" style="float: left; width: 180px; margin-right: 15px;">{{$chairman->detail}}</p>
						<p style="text-align: right;"><a href="{{route('getPage','principle')}}" class="btn btn-primary">View more</a></p>
					</div>
				</div>
			</div>
		</section>
@stop