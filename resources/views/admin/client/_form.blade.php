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
			<label for="formGroupExampleInput">Nombre</label>
			<input type="text" class="form-control" id="name" name="name" required>
		</fieldset>
		<fieldset class="form-group">
			<label for="formGroupExampleInput2">DNI</label>
			<input type="number" class="form-control" id="dni" name="dni" >
		</fieldset>
		<fieldset class="form-group">
			<label for="formGroupExampleInput2">CUIT</label>
			<input type="number" class="form-control" id="ruc" name="ruc" >
		</fieldset>
		<fieldset class="form-group">
			<label for="formGroupExampleInput2">Direccion</label>
			<input type="text" class="form-control" id="address" name="address" >
		</fieldset>
		<fieldset class="form-group">
			<label for="formGroupExampleInput2">Telefono</label>
			<input type="phone" class="form-control" id="phone" name="phone" >
		</fieldset>
		<fieldset class="form-group">
			<label for="formGroupExampleInput2">Email</label>
			<input type="email" class="form-control" id="email" name="email" >
		</fieldset>
		

		


