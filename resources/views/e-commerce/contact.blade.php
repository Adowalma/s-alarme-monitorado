@extends('layouts.site')

@section('content')
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Suporte 24/7 </p>
						<h1>Contacte-nos</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Tem alguma questão?</h2>
						<p>Precisa de mais informações sobre o Alarme SAM? Tem dúvidas sobre seu funcionamento?Entre em contacto connosco</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							<p>
								<input type="text" placeholder="Nome" name="name" id="name">
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Telemóvel" name="phone" id="phone">
								<input type="text" placeholder="Assunto" name="subject" id="subject">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Mensagem"></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Enviar"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<!-- <div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Endereço da loja</h4>
							<p>bairro CTT KM-7 <br> Distrito do Rangel<br> Luanda</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Horário Comercial</h4>
							<p>Seg - Sexta: 8h às 21h <br> Sab - Domingo: 8h às 12h</p>
						</div> -->
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contactos</h4>
							<p>Telemóvel: +244 999 999 999 <br> Email: sam.support@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Nossa Localização</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26432.42324808999!2d-118.34398767954286!3d34.09378509738966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf07045279bf%3A0xf67a9a6797bdfae4!2sHollywood%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1576846473265!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe> -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.650263070718!2d13.26488761419633!3d-8.81888849366677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f18003d4bac3%3A0x2568aa7432e71445!2sInstituto%20de%20Telecomunica%C3%A7%C3%B5es!5e0!3m2!1sen!2sao!4v1650876893478!5m2!1sen!2sao" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<!-- end google map section -->

@endsection