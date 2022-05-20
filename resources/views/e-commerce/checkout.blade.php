@extends('layouts.site')

@section('content')

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Seguro e Confiável</p>
						<h1>Check Out Produtos</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
		@include('alerts.personalizado.index')

			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Detalhes de Faturamento
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form >
						        		<p><input type="text" name='nome' placeholder="Nome Completo" value='{{$user->name}}' disabled></p>
						        		<p><input type="email" name='email' placeholder="Email" value='{{$user->email}}' disabled></p>
						        		<p><input type="text" name='endereco' placeholder="Endereço" value='{{$user->endereco}}' disabled></p>
						        		<p><input type="tel" name='tel' placeholder="Telemóvel" value='{{$user->telemovel}}' disabled></p>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
											Características da viatura
						        </button>
						      </h5>
						    </div>

						    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form methods='Post' action="{{route('checkout.save')}}">
												<p><input type="text" name='matricula' placeholder="Matrícula" required></p>
												<p><input type="text" name='marca' placeholder="Marca" required></p>
												<p><input type="text" name='modelo' placeholder="Modelo" required></p>						        
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 d-flex justify-content-end">
					<div class="order-details-wrap">
						<button type="submit" class="boxed-btn">Concluir Solicitação</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

@endsection