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
							<p class="subtitle">Sistema de Alarme Monitorado</p> -->
							<h1>Protegemos o que realmente importa</h1>
							<!-- <h2 class="text-white">{{ __('Proteja o Seu Património') }}</h2> -->
              <h3 class="text-white">{{ __('O Sistema de alarme ideal pra você ') }}</h3>

							<div class="hero-btns">
								<a href="#Product" class="boxed-btn">Produtos</a>
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
								<a href="#Product" class="boxed-btn">Produtos</a>
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
								<a href="{{route('shop')}}" class="boxed-btn">Produtos</a>
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
							<p>Sua segurança em qualquer lugar. A SAM gerencia o seu alarme de qualquer lado dom mundo através do Sistema
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
						<h3 ><span class="orange-text">Nossos</span> Produtos</h3>
						<p> Os dispositivos da SAM possuem a mais avançada e inovadora tecnologia do mercado que permite proteção 24 horas e conectividade total com a nossa Central de Monitoramento de Alarmes SAM.</p>
					</div>
				</div>
			</div>

			<div class="row d-flex justify-content-center">
			@foreach ($products as $product)
			@include('modals.about')

				<div class="col-lg-4 col-md-6 ">
					<div class="single-product-item">
						<div class="product-image text-right">
						<a class="text-dark " style="background-color:transparent;" title="Detalhes" data-toggle="modal" data-target="#modal-{{$product->id}}"><i class="fas fa-info-circle fa-2x"></i> </a> 
							<img src="/uploads/{{ $product->image }}">
						</div>
						<h3 class="text-center">{{ $product->tipo }}</h3>
						<p class="product-price text-center"><!--span>Por unidade</span--> {{ $product->preco }} kz </p>
						<div class="text-center">
						<a href="{{route('add.to.cart', $product->id)}}" class="cart-btn text-center"><i class="fas fa-shopping-cart"></i> Adicionar ao carrinho</a>
						</div>
					</div>
				</div>

				@endforeach
			</div>
		</div>
	</div>
	<!-- end product section -->


	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> de desconto
                                </span>
                            </div>
                        </div>
                    	<img src="assets/img/product_mockup/cam1.png" width="320px" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Deal</span> of the month</h3>
                    <h4>Hikan Strwaberry</h4>
                    <div class="text">Quisquam minus maiores repudiandae nobis, minima saepe id, fugit ullam similique! Beatae, minima quisquam molestias facere ea. Perspiciatis unde omnis iste natus error sit voluptatem accusant</div>
                    <!--Countdown Timer-->
                    <div class="time-counter"><div class="time-countdown clearfix" data-countdown="2020/2/01"><div class="counter-column"><div class="inner"><span class="count">00</span>Days</div></div> <div class="counter-column"><div class="inner"><span class="count">00</span>Hours</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Mins</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Secs</div></div></div></div>
                	<a href="{{route('cart')}}" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Adicionar ao carrinho</a> 

                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-100 mb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
				<div class="section-title">	
						<h3><span class="orange-text">Nossos</span> Clientes</h3>
				</div>
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/default-avatar.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Ana Paula <span>Dono de loja local</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/default-avatar.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Joao Andrade<span>Dono de loja local</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/default-avatar.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Ricardo Alvez <span>Dono de loja local</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="assets/img/sam.mp4" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Desde 2022</p>
						<h2>Somos a <span class="orange-text">SAM</span></h2>
						<p>Etiam vulputate ut augue vel sodales. In sollicitudin neque et massa porttitor vestibulum ac vel nisi. Vestibulum placerat eget dolor sit amet posuere. In ut dolor aliquet, aliquet sapien sed, interdum velit. Nam eu molestie lorem.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente facilis illo repellat veritatis minus, et labore minima mollitia qui ducimus.</p>
						<a href="{{route('about')}}" class="boxed-btn mt-4">Saber mais...</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3>Promoção de Abril! <br> Grande <span class="orange-text">Desconto...</span></h3>
            <div class="sale-percent"><span>Oferta! <br> até</span>50% <span>de desconto</span></div>
            <a href="{{route('shop')}}" class="cart-btn btn-lg">Compre Agora</a>
        </div>
    </section>
	<!-- end shop banner -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Nossos</span> Artigos</h3>
						<p>Reduzir o risco de roubo em sua casa ou empresa é fácil. Seguindo algumas dicas simples,
							 você aumenta a proteção da sua família ou empresa. Fique por dentro das nossas melhores recomendações.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="{{route('singleNews')}}"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><a href="{{route('singleNews')}}">Quanto custa um Sistema de Alarme?</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 de Janeiro, 2022</span>
							</p>
							<p class="excerpt">O custo do sistema de Alarme SAM é determinado de acordo com as suas necessidades. 
								 Encontraremos a melhor solução para a sua segurança e o preço personalizado, de acordo com os 
								 dispositivos necessários para protegê-lo.</p>
							<a href="{{route('singleNews')}}" class="read-more-btn">Ler mais <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="{{route('singleNews')}}"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><a href="{{route('singleNews')}}">Sistema de Segurança mais indicado para ti</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 de Janeiro, 2022</span>
							</p>
							<p class="excerpt">Instalar um sistema de segurança é uma decisão importante, para começar, é preciso identificar
								 quais são suas maiores necessidades: monitorar seus funcionários, proteger a família, vigiar as crianças, proteger
								  seus bens, enfim, são inúmeras as possibilidades para se ter um sistema de alarme e por isso, o sistema de alarme 
									SAM é versátil para se adaptar a qualquer que seja sua necessidade.

							</p>
							<a href="{{route('singleNews')}}" class="read-more-btn">Ler mais <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href="{{route('singleNews')}}"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="{{route('singleNews')}}">Vantagens de um câmera IP</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 de Janeiro, 2022</span>
							</p>
							<p class="excerpt">A câmera IP envia imagens para a internet de forma direta, não necessitando de computador ou DVR , 
								com armazenamento diretamente na nuvem ou web. Com uma câmera IP basta ter um navegador web e acesso à internet para
								 visualizar o que acontece em tempo real, ou por faixa de horário, no ambiente monitorado.</p>
							<a href="{{route('singleNews')}}" class="read-more-btn">Ler mais <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="{{route('news')}}" class="boxed-btn">Mais Artigos</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

	@endsection