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
						        	<form action="route{{('ecommerce.index')}}">
						        		<p><input type="text" name='nome' placeholder="Nome Completo" value='{{$user->name}}'></p>
						        		<p><input type="email" name='email' placeholder="Email" value='{{$user->email}}'></p>
						        		<p><input type="text" name='endereco' placeholder="Endereço" value='{{$user->endereco}}'></p>
						        		<p><input type="tel" name='tel' placeholder="Telemóvel" value='{{$user->telemovel}}'></p>
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
						        	<form action="route{{('ecommerce.index')}}">
												<p><input type="text" name='matricula' placeholder="Matrícula"></p>
												<p><input type="text" name='marca' placeholder="Marca"></p>
												<p><input type="text" name='modelo' placeholder="Modelo"></p>
												<p><input type="text" name='motor' placeholder="Nº do Motor"></p>
												<p><input type="text" name='quadro' placeholder="Nº do Quadro"></p>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Detalhes de Pagamento
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="card-details">
						        	<h6>Métodos de Pagamento</h6>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"checked>
												<label class="form-check-label p" for="flexRadioDefault1">
													Pagamento na Entrega
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" disabled>
												<label class="form-check-label p" for="flexRadioDefault2">
													Pagar por referência Multicaixa
												</label>
											</div>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Pedidos</th>
									<th>Preços</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td>Produtos</td>
									<td>Total</td>
								</tr>
							@if(session('cart'))
							@foreach(session('cart') as $id => $details)
								<tr>
									<td>{{ $details['name'] }}</td>
									<td>{{ $details['price'] * $details['quantity'] }}kz</td>
								</tr>
							@endforeach
							@endif
								
							</tbody>
							<tbody class="checkout-details">
							@php $total = 0 @endphp
							@foreach((array) session('cart') as $id => $details)
						
									@php $total += $details['price'] * $details['quantity'] @endphp
							@endforeach
									<td>Total</td>
									<td>{{ $total }}Kz</td>
								</tr>
							</tbody>
						</table>
						<a href="{{route('checkout.save')}}" type="submit" class="boxed-btn">Concluir Pagamento</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

@endsection