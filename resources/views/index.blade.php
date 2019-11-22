@extends('frontLayout.front_design')

@section('content')
<div class="super_container">
<div class="home">

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url('{{asset('frontend')}}/images/index_1.jpg')"></div>
					<div class="home_content welc text-center ">

<h1 class='text-center home_title css-typing'>Online Home Nurse Care</h1>
</div>

					<div class="home_container">

						<div class="container">

							<div class="row">
								<div class="col">
									
									
										<div class="serch">
												<div class="sub-main-w3">
			<form action="{{route('search')}}" method="get">
				<div class="form-style-agile">
					 <div class="form-row">
    <div class="col-6">
      <input type="text" class="form-control bg-light text-dark" placeholder="Your City" name="search" required>
    </div>
    <div class="col-6">
      <input type="text" class="form-control bg-light text-dark" placeholder="Your Area" name="search1" >
    </div>
				<!-- switch -->
				
				<!-- //switch   -->
				<input type="submit" value="search">
				
			</form>
		</div>
										</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				

			

			</div>
			
		<!-- Home Slider Dots -->
		
			
		</div>
	</div>

	<!-- Features -->
<h3 class="text-center ">Our Service</h3>

	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_slider_container">
			<div class="owl-carousel owl-theme gallery_slider">
				
				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url('{{asset('frontend')}}/images/gallery_1.jpg')"></div>
					<a class="colorbox" href="images/gallery_1.jpg"></a>
				</div>

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url('{{asset('frontend')}}/images/gallery_2.jpg')"></div>
					<a class="colorbox" href="images/gallery_2.jpg"></a>
				</div>

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url('{{asset('frontend')}}/images/gallery_3.jpg')"></div>
					<a class="colorbox" href="images/gallery_3.jpg"></a>
				</div>

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url('{{asset('frontend')}}/images/gallery_4.jpg')"></div>
					<a class="colorbox" href="images/gallery_4.jpg"></a>
				</div>

			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				
				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">
						<div class="about_title"><h2>Home Nurse Care / 10 years of excellence</h2></div>
						<div class="about_text">
							<p>Home Health Aide (English/Spanish) Positions
	We are currently seeking Home Heath Aides for 2 to 4 hour visits We need you! All of Broward, ESPECIALLY if you service Hollywood,Pembroke Pines, Hallandale Beach, Miramar. We are one of the only home health agencies that have 100% daily pay! Come in and join our family!

	Aide applicants must drive and have reliable transportation</p>
						</div>
					</div>
				</div>

				<!-- About Images -->
				<div class="col-lg-6">
					<div class="about_images d-flex flex-row align-items-center justify-content-between flex-wrap">
						<img src="images/about_1.png" alt="">
						<img src="images/about_2.png" alt="">
						<img src="images/about_3.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
		<div class="testimonials_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme test_slider">
							
							<!-- Slide -->
							 @foreach($nInfo as $nInfo)
							<div  class="test_slider_item text-center">
								<div class="rating rating_5 d-flex flex-row align-items-start justify-content-center"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="testimonial_title"><a href="#">{{$nInfo->name}}</a></div>
								<div class="testimonial_text">
									<p>{{$nInfo->skill}}</p>
								</div>
								<div class="testimonial_image"><img src="{{ Storage::url($nInfo->photo) }}" alt=""></div>
								<div class="testimonial_author"><a href="#">{{$nInfo->area}},{{$nInfo->city}}</a></div>
							</div>
							@endforeach
							<!-- Slide -->
							

							<!-- Slide -->
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Booking -->

	<div class="booking">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="booking_title text-center"><h2>Home Nurse Care</h2></div>
					<div class="booking_text text-center">
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit.</p>
					</div>

					<!-- Booking Slider -->
					<div class="booking_slider_container">
						<div class="owl-carousel owl-theme booking_slider">
							
							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url('{{asset('frontend')}}/images/booking_1.jpg')"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_price">$120/7day Care</div>
								<div class="booking_link"><a href="#">details</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url('{{asset('frontend')}}/images/booking_2.jpg')"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_price">$170/1month Care</div>
								<div class="booking_link"><a href="#">details</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url('{{asset('frontend')}}/images/booking_3.jpg')"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_price">$180/1Year Care</div>
								<div class="booking_link"><a href="#">details</a></div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">

		<!-- Blog Slider -->
		<div class="blog_slider_container">
			<div class="owl-carousel owl-theme blog_slider">
				
				<!-- Slide -->
				<div class="blog_slide">
					<div class="background_image" style="background-image:url('{{asset('frontend')}}/images/index_blog_1.jpg')"></div>
					<div class="blog_content">
						<div class="blog_date"><a href="#">Oct 20, 2018</a></div>
						<div class="blog_title"><a href="#">Nurse Work</a></div>
					</div>
				</div>

				<!-- Slide -->
				<div class="blog_slide">
					<div class="background_image" style="background-image:url('{{asset('frontend')}}/images/index_blog_2.jpg')"></div>
					<div class="blog_content">
						<div class="blog_date"><a href="#">Oct 20, 2018</a></div>
						<div class="blog_title"><a href="#">10 Nurse Work</a></div>
					</div>
				</div>

				<!-- Slide -->
				<div class="blog_slide">
					<div class="background_image" style="background-image:url('{{asset('frontend')}}/images/index_blog_3.jpg')"></div>
					<div class="blog_content">
						<div class="blog_date"><a href="#">Oct 20, 2018</a></div>
						<div class="blog_title"><a href="#">Nurse Care </a></div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection
	<!-- Footer -->