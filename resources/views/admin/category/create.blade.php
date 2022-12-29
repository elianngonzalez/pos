
@extends('layouts.admin')
@section('title','categorias')
@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Gestion de categorias
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="/">
                  Inicio
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">categorias</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Categorias</h4>
                </div>
              {{ Form::open(['route' => 'categories.store' , 'method' => 'POST']) }}
                @include('admin.category._form')
                <button type="submit" class="btn btn-primary">Registrar</button>
                <a href="{{route('categories.index')}}" class="btn btn-danger">Cancelar</a>
              {{ Form::close() }}
              </div>
            </div>
          </div>




@endsection


