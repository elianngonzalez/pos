	{!! csrf_field() !!}

	<div class="form-group">
		<label for="name">Nombre</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="Nombre" required >
	</div><div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" id="email" placeholder="email" required>
	</div><div class="form-group">
		<label for="ruc_number">Cuit</label>
		<input type="number" class="form-control" name="ruc_number" id="ruc_number" placeholder="Cuit" required >
	</div><div class="form-group">
		<label for="address">Direccion</label>
		<input type="text" class="form-control" name="address" id="address" placeholder="Direccion" required >
	</div><div class="form-group">
		<label for="phone">Celular/Telefono</label>
		<input type="tel" class="form-control" name="phone" id="phone" required>
	</div>
