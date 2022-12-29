
@extends('layouts.admin')
@section('title','Productos')
@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Crear Producto
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">
                  Inicio
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">Productos</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Productos</h4>
                </div>
              {{ Form::open(['route' => 'products.store' , 'method' => 'POST','files' => true]) }}
                @include('admin.product._form')
                <button type="submit" class="btn btn-primary">Registrar</button>
                <a href="{{route('products.index')}}" class="btn btn-danger">Cancelar</a>
              {{ Form::close() }}
              </div>
            </div>
          </div>




@endsection

@section('js')
{{Html::script('melody/js/dropify.js')}}
@endsection
