@extends('main')

@section('title','Order')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="/styles/contact.css">
<link rel="stylesheet" type="text/css" href="/styles/contact_responsive.css">
@endsection
@section('custom_js')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="/js/contact.js"></script>
@endsection


@section('content')
<!-- Home -->

<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(/images/contact.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="/">Home</a></li>
										<li>Order</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->
	
	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-8 contact_col">
					<div class="get_in_touch">
						<div class="section_title">{{$car->category->title}} {{$car->title}}</div>
						<div class="details_price">${{$car->price}}</div>
						<div class="contact_form_container">
							<form action="/create" method = "post" id="contact_form" class="contact_form">
								<div class="row">
									<div class="col-xl-6">
										<!-- Name -->
										<label for="contact_name">Имя</label>
										<input type="text" id="contact_name" class="contact_input" required="required">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Last Name -->
										<label for="contact_last_name">Фамилия</label>
										<input type="text" id="contact_last_name" class="contact_input" required="required">
									</div>
								</div>
								<div>
									<!-- Subject -->
									<label for="contact_company">Телефон</label>
									<input type="text" id="contact_company" class="contact_input">
								</div>
								<div>
									<label for="contact_textarea">Коментарий</label>
									<textarea id="contact_textarea" class="contact_input contact_textarea" required="required"></textarea>
								</div>
								<button class="button contact_button"><span>Оформить заявку</span></button>
							</form>
						</div>
					</div>
				</div>

				
			</div>
			
		</div>
	</div>


@endsection
