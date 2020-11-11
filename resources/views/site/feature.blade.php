@extends('site.template')
@section('content')
<div id="page" style="margin-top: 102px;">
			<section id="pageheading">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h3>School Feature </h3>
							<span><a href="">Home</a>/ <a href="">School Feature</a> </span>
						</div>
					</div>
				</div>
			</section>
			<section id="pagebody" style="padding: 40px 0;">	
				<div class="container">	
						<div class="row">	
								<div class="col-md-8">
									<div class="row">
									@foreach($features as $item)
									<div class="col-md-12" style="background: #ccc; margin-bottom: 20px; padding: 20px;">
										<h5>{{$item->title}}</h5>
										<hr>
										<p>{{$item->detail}}</p>
									</div>

									@endforeach
								</div>
								</div>
								<div class="col-md-4">
									
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