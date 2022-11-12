	{!! csrf_field() !!}

		<fieldset class="form-group">
			<label for="formGroupExampleInput">Nombre</label>
			<input type="text" class="form-control" id="name" name="name" required>
		</fieldset>
		<fieldset class="form-group">
			<label for="formGroupExampleInput2">Precio de venta</label>
			<input type="number" class="form-control" id="sell_price" name="sell_price" required>
		</fieldset>

		<fieldset class="form-group">
		<span class="label label-default" for='category_id'>Categoria</span>
		<select class="custom-select" name="category_id" id="category_id">
			@foreach ($categories as $category)
			<option value="{!! $category->id !!}">{!! $category->name !!}</option>
			@endforeach
		</select>
		</fieldset>

{{-- 		<fieldset class="form-group">
		<span class="label label-default" for='category_id'>Categoria</span>
		<select class="custom-select" name="category_id" id="category_id">
			@foreach ($product->status as $status)
			<option value="{!! $status->id !!}">{!! $status->name !!}</option>
			@endforeach
		</select>
		</fieldset> --}}

		<fieldset class="form-group">
		<span class="label label-default" for='provider_id'>Proveedor</span>
		<select class="custom-select" name="provider_id" id="provider_id">
			@foreach ($providers as $provider)
			<option value="{!! $provider->id !!}">{!! $provider->name !!}</option>
			@endforeach
		</select>
	</fieldset>

			 <div class="form-group ">
                     <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Seleccionar archivo</h4>
                        <input type="file" name="picture" class="dropify"/>
                        </div>
                      </div>
                    </div>		


