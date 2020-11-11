@extends('site.template')
@section('content')
<div id="page" style="margin-top: 102px;">
			<section id="pageheading">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h3>{{$page->title}}</h3>
							<span><a href="">Home</a>/ <a href="">About us</a> / <a href="">{{$page->title}}</a> </span>
						</div>
					</div>
				</div>
			</section>
			<section id="pagebody" style="padding: 40px 0;">	
				<div class="container">	
						<div class="row">	
								<div class="col-md-3">
									<img src="{{asset('site/img/page/'.$page->photo)}}" class="img-fluid">
								</div>
								<div class="col-md-9">
									<p>	{{$page->detail}}</p>
								</div>
						</div>
				</div>	
			</section>	
			
		</div>
@stop