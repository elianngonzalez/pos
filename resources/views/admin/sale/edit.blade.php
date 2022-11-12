
@extends('layouts.admin')
@section('title','Cliente')
@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Gestion de Clientes
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">
                  Clientes
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">Ediar Cliente</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Ediar Cliente</h4>
                </div>
              {!! Form::model($client, ['route' => ['clients.update',$client] , 'method' => 'PUT']) !!}
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
      <input value="{{$client->name}}" type="text" class="form-control" id="name" name="name" required>
    </fieldset>
    <fieldset class="form-group">
      <label for="formGroupExampleInput2">DNI</label>
      <input value="{{$client->dni}}" type="number" class="form-control" id="dni" name="dni" required>
    </fieldset>
    <fieldset class="form-group">
      <label for="formGroupExampleInput2">CUIT</label>
      <input value="{{$client->ruc}}" type="number" class="form-control" id="ruc" name="ruc" required>
    </fieldset>
    <fieldset class="form-group">
      <label for="formGroupExampleInput2">Direccion</label>
      <input value="{{$client->address}}" type="text" class="form-control" id="address" name="address" required>
    </fieldset>
    <fieldset class="form-group">
      <label for="formGroupExampleInput2">Telefono</label>
      <input value="{{$client->phone}}" type="phone" class="form-control" id="phone" name="phone" required>
    </fieldset>
    <fieldset class="form-group">
      <label for="formGroupExampleInput2">Email</label>
      <input value="{{$client->email}}" type="email" class="form-control" id="email" name="email" required>
    </fieldset>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{route('clients.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
    
              {{ Form::close() }}
              </div>
            </div>



    

@endsection
@section('js')
{{Html::script('melody/js/dropify.js')}}
@endsection