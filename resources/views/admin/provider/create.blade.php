
@extends('layouts.admin')
@section('title','proveedores')
@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Crear proveedor
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="{{ route('providers.index') }}">
                  Inicio
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">proveedores</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Proveedores</h4>
                </div>
              {{ Form::open(['route' => 'providers.store' , 'method' => 'POST']) }}
                @include('admin.provider._form')
                <button type="submit" class="btn btn-primary">Registrar</button>
                <a href="{{route('providers.index')}}" class="btn btn-danger">Cancelar</a>
              {{ Form::close() }}
              </div>
            </div>
          </div>




@endsection


