
@extends('layouts.admin')
@section('title','Clientes')
@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Crear cliente
            </h3>

             <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">
                  Inicio
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">Clientes</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Cliente</h4>
                </div>
              {{ Form::open(['route' => 'clients.store' , 'method' => 'POST','files' => true]) }}
                @include('admin.client._form')
                <button type="submit" class="btn btn-primary">Registrar</button>
                <a href="{{route('clients.index')}}" class="btn btn-danger">Cancelar</a>
              {{ Form::close() }}
              </div>
            </div>
          </div>




@endsection

