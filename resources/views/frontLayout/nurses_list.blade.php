@extends('frontLayout.front_design')

@section('content')

 
  
<div class="testimonials">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
		<div class="testimonials_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
					
				<!-- Slide -->
<form action="{{route('search')}}" method="get">
  <div class="form-row">
    <div class="col-4">
      <input type="text" class="form-control bg-light text-dark" placeholder="Your City" name="search" required>
    </div>
    <div class="col-4">
      <input type="text" class="form-control bg-light text-dark" placeholder="Your Area" name="search1" >
    </div>
    <div class="col">
    	<button type="submit" class="bg-light text-dark form-control" value="search"> Submit</button>
    </div>
  </div>
</form>


							 @foreach($nInfo as $nInfo)
							 <div class="container py-3">
							    <div class="card">
							      <div class="row ">
							        <div class="col-md-4">
							            <img src="{{ Storage::url($nInfo->photo) }}"class="w-100">
							          </div>
							          <div class="col-md-8 px-3">
							            <div class="card-block px-3">
							            	<div class="rating rating_5 d-flex flex-row align-items-start justify-content-left"><i></i><i></i><i></i><i></i><i></i></div>
							              <h4 class="card-title">{{$nInfo->name}}</h4>
							              <h4 class="card-title">{{$nInfo->skill}}</h4>
							              <h4 class="card-title">{{$nInfo->price}}</h4>
							              <p class="card-text">{{$nInfo->description}}</p>
							              <h6>{{$nInfo->area}},{{$nInfo->city}} </h6>

							              <a href="#" class="btn btn-primary">{{$nInfo->number}}</a>  <a href="#" class="btn btn-primary">call me</a>
							            </div>
							          </div>
							        </div>
							      </div>
							    </div>
 							@endforeach
							<!-- Slide -->
							

							<!-- Slide -->
							
						
					</div>
				</div>
			</div>
		</div>
	</div>
	

@endsection