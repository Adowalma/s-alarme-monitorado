@extends('layouts.site')

@section('content')
<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-10 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
							<p class="subtitle">Sistema de Alarme Monitorado</p>
							<h1>Protegemos o que realmente importa</h1>
							<!-- <h2 class="text-white">{{ __('Proteja o Seu Património') }}</h2> -->
              <h3 class="text-white">{{ __('O Sistema de alarme ideal pra você ') }}</h3>

							<div class="hero-btns">
								<a href="#Product" class="boxed-btn">Serviços</a>
								<a href="{{route('contact')}}" class="bordered-btn">Contacte-nos</a>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
							<p class="subtitle">Sistema de Alarme Monitorado</p> -->
							<h1>Protegemos o que realmente importa</h1>
							<!-- <h2 class="text-white">{{ __('Proteja o Seu Património') }}</h2> -->
              <h3 class="text-white">{{ __('O Sistema de alarme ideal pra você ') }}</h3>

							<div class="hero-btns">
								<a href="#Product" class="boxed-btn">Serviços</a>
								<a href="{{route('contact')}}" class="bordered-btn">Contacte-nos</a>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
							<p class="subtitle">Sistema de Alarme Monitorado</p> -->
							<h1>Protegemos o que realmente importa</h1>
							<!-- <h2 class="text-white">{{ __('Proteja o Seu Património') }}</h2> -->
              <h3 class="text-white">{{ __('O Sistema de alarme ideal pra você ') }}</h3>

							<div class="hero-btns">
								<a href="{{route('shop')}}" class="boxed-btn">Serviços</a>
								<a href="#Product" class="bordered-btn">Contacte-nos</a>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-bell"></i>
						</div>
						<div class="content">
							<h3>Botão SOS</h3>
							<p>Você aciona o botão SOS, nós enviamos ajuda rapidamente a polícia</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-laptop-code"></i>
						</div>
						<div class="content">
							<h3>Controle pela Web</h3>
							<p>Sua segurança em qualquer lugar. A SAM gerencia o seu alarme de qualquer lado dom mundo através do Sistema Web </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-stopwatch"></i>
						</div>
						<div class="content">
							<h3>Resposta em Pouco tempo</h3>
							<p>A Central de monitoramento é capaz de verificar o acionamento do alarme e atuar em menos de 60 segundo, de acordo com a ocorrência</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div id="Product" class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3 ><span class="orange-text">Nossos</span> Serviços</h3>
						<p> A SAM possui a mais avançada e inovadora tecnologia do mercado que permite proteção 24 horas e conectividade total com a nossa Central de Monitoramento de Alarmes SAM.</p>
						<div class="text-center">
						<a href="{{url('/checkout')}}" class="cart-btn text-center"><i class="fas fa-shopping-cart"></i> Solicitar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

	@endsection