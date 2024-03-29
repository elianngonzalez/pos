@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
{!! csrf_field() !!}


<fieldset class="form-group">
	<label class="label label-default" for='provider_id'>Proveedor</label>
	<select class="custom-select" name="provider_id" id="provider_id">
		@foreach ($providers as $provider)
		<option value="{!! $provider->id !!}">{!! $provider->name !!}</option>
		@endforeach
	</select>
</fieldset>

<fieldset class="form-group">
	<label class="label label-default" for='product_id'>Producto</label>
	<select class="custom-select" name="product_id" id="product_id">
		@foreach ($products as $product)
		<option value="{!! $product->id !!}">{!! $product->name !!} -{!! $product->sell_price !!}</option>
		@endforeach
	</select>
</fieldset>


<fieldset class="form-group">
	<label for="formGroupExampleInput">Impuesto</label>
	<input type="number" class="form-control" id="tax" name="tax" value="0">
</fieldset>
<fieldset class="form-group">
	<label for="formGroupExampleInput">Cantidad</label>
	<input type="number" class="form-control" id="quantity" name="quantity">
</fieldset>
<fieldset class="form-group">
	<label for="formGroupExampleInput">Precio</label>
	<input type="number" class="form-control" id="price" name="price">
</fieldset>
<fieldset class="form-group">
	<label for="formGroupExampleInput">Precio compra</label>
	<input type="number" class="form-control" id="buy_price" name="buy_price">
</fieldset>


<div class="form-group pb-4">
	<button type="button" id="agregar" class="btn btn-primary float-right">Agregar producto</button>
</div>


<fieldset class="form-group">

	<h4 class="card-title">Detalle de compra</h4>
	<div class="table-responsive col-md-12">
		<table id="detalles" class="table table-striped">
			<thead>
				<tr>
					<th>Eliminar</th>
					<th>Producto</th>
					<th>-</th>
					<th>Precio(ARS)</th>
					<th>-</th>
					<th>Cantidad</th>
					<th>SubTotal(ARS)</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th colspan='5'>
						<p align="right">TOTAL:</p>
					</th>
					<th>
						<p align="right"><span id="total">ARS 0.00</span></p>
					</th>
				</tr>
				<tr id="dvOcultar">
					<th colspan='5'>
						<p align="right">IMPUESTO:</p>
					</th>
					<th>
						<p align="right"><span id="total_impuesto">ARS 0.00</span></p>
					</th>
				</tr>
				<tr id="dvOcultar">
					<th colspan='5'>
						<p align="right">TOTAL A PAGAR:</p>
					</th>
					<th>
						<p align="right"><span align="right" id="total_pagar_html">ARS 0.00</span><input id="total_pagar" name="total" type="hidden"></p>
					</th>
				</tr>
			</tfoot>
			<tbody id="body-table">
			</tbody>
		</table>
	</div>
</fieldset>