@extends('layouts.site')

@section('content')
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Seguro e Confiável</p>
						<h1>Carrinho</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
		@include('alerts.personalizado.index')

			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Imagem do produto</th>
									<th class="product-name">Nome</th>
									<th class="product-price">Preço</th>
									<th class="product-quantity">Quantidade</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
								@if(session('cart'))
									@foreach(session('cart') as $id => $details)
								<tr class="table-body-row" data-id="{{ $id }}">
									<td class="product-remove "><a href="#"><i class="far fa-trash-alt btn btn-danger btn-sm remove-from-cart" title="Eliminar item do carrinho"></i></a></td>
									<td class="product-image"><img src="/uploads/{{ $details['image'] }}" alt=""></td>
									<td class="product-name">{{ $details['name'] }}</td>
									<td class="product-price">{{ $details['price'] }} Kz</td>
									<td class="product-quantity">
										<input class="quantity update-cart" type="number" value="{{ $details['quantity'] }}">
									</td>
									<td class="product-total">{{ $details['price'] * $details['quantity'] }}kz</td>
								</tr>
								@endforeach
								@endif
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Preço</th>
								</tr>
							</thead>
							<tbody>
								<!-- <tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td>$500</td>
								</tr>
								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td>$45</td>
								</tr> -->
								@php $total = 0 @endphp
								@foreach((array) session('cart') as $id => $details)
							
										@php $total += $details['price'] * $details['quantity'] @endphp
								@endforeach
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>{{ $total }}Kz</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons d-flex justify-content-end">
							<a href="{{route('checkout')}}" class="boxed-btn black">Pagamento</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

	@endsection

	@section('scripts')
	<script type="text/javascript">
  
    $(".update-cart").change(function (e) {
			e.preventDefault();

			var ele = $(this);

			$.ajax({
				url: '{{ route('update.cart') }}',
				method: "patch",
				data: {
						_token: '{{ csrf_token() }}', 
						id: ele.parents("tr").attr("data-id"), 
						quantity: ele.parents("tr").find(".quantity").val()
				},
				success: function (response) {
						window.location.reload();
				}
			});
    });
		$(".remove-from-cart").click(function (e) {
      e.preventDefault();
  
			var ele = $(this);

			if(confirm("Tem certeza que pretende eliminar?")) {
				$.ajax({
					url: '{{ route('remove.from.cart') }}',
					method: "DELETE",
					data: {
							_token: '{{ csrf_token() }}', 
							id: ele.parents("tr").attr("data-id")
					},
					success: function (response) {
							window.location.reload();
					}
				});
			}
    });
  
	</script>
@endsection