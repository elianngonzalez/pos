
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
                <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">
                  categorias
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">Ediar categoria</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Ediar categoria</h4>
                </div>
              {!! Form::model($category, ['route' => ['categories.update',$category] , 'method' => 'PUT']) !!}
                  <div class="form-group">
                    <label for="name">nombre</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="nombre" required value="{{$category->name}}" >
                  </div>
                  <div class="form-group">
                    <label for="description">descripcion</label>
                    <textarea type="text" class="form-control" name="description" id="description" placeholder="descripcion" rows="3">{{$category->description}}</textarea> 
                  </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{route('categories.index')}}" class="btn btn-danger">Cancelar</a>
              {{ Form::close() }}
              </div>
            </div>
          </div>




@endsection