
@extends('layouts.admin')
@section('title','Proveedores')
@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Gestion de Proveedores
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="{{ route('providers.index') }}">
                  Proveedores
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">Ediar proveedor</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Ediar proveedor</h4>
                </div>
              {!! Form::model($provider, ['route' => ['providers.update',$provider] , 'method' => 'PUT']) !!}
                  <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" required value="{{$provider->name}}" >
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="email" required value="{{$provider->email}}">
                  </div>
                  <div class="form-group">
                    <label for="ruc_number">Cuit</label>
                    <input type="number" class="form-control" name="ruc_number" id="ruc_number" placeholder="Cuit" required value="{{$provider->ruc_number}}" >
                  </div>
                  <div class="form-group">
                    <label for="address">Direccion</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Direccion" required value="{{$provider->address}}" >
                  </div>
                  <div class="form-group">
                    <label for="phone">Celular/Telefono</label>
                    <input type="tel" class="form-control" name="phone" id="phone" required value="{{$provider->phone}}">
                  </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{route('providers.index')}}" class="btn btn-danger">Cancelar</a>
              {{ Form::close() }}
              </div>
            </div>
          </div>




@endsection