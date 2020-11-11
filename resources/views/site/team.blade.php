@extends('site.template')
@section('content')
<div id="page" style="margin-top: 102px;">
			<section id="pageheading">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h3> Team </h3>
							<span><a href="">Home</a>/ <a href="">About us</a> / <a href="">Team</a> </span>
						</div>
					</div>
				</div>
			</section>
			<section id="pagebody" style="padding: 40px 0;">	
				<div class="container">	
						<div class="row">	
								<div class="col-md-8">
									<div class="row">
									@foreach($teams as $team)
									<div class="col-md-4">
										<div class="card">
										  <img src="{{asset('site/img/team/'.$team->photo)}}" class="card-img-top" alt="...">
										  <div class="card-body">
										    <h5 class="card-title text-center">{{$team->name}}</h5>
										    <p class="card-text text-center">{{$team->post}}</p>
										    
										  </div> 
										</div>
									</div>
									@endforeach
								</div>
								</div>
								<div class="col-md-4">
									<h5>Academice staff</h5>
									<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
									  <div class="card-header">Latest Notices</div>
									  <div class="card-body">
									   <ul style="padding: 0; margin: 0; list-style: none;">
									   	@foreach($notices as $item)
									   	<li style="border-bottom: 1px solid #fff; line-height: 30px;"><a href="" style="color:#000">{{$item->title}}</a></li>
									   	@endforeach
									   	
									   </ul>
									  </div>
									</div>
								</div>
						</div>
				</div>	
			</section>	
			
		</div>
@stop