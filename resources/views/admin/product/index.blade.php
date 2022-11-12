
@extends('layouts.admin')
@section('title','Productos')
@section('content')

<style type="text/css">
  .unstyled-button{
    border: none;
    padding: 0;
    background: none;
  }
</style>

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Gestion de Productos
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="/">
                  Inicio
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">Productos</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Proovedores</h4>
                
                  <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="{{route('products.create')}}" class="dropdown-item" type="button">agregar</a>
                      <a class="dropdown-item" type="button">Another action</a>
                      <a class="dropdown-item" type="button">Something else here</a>
                    </div>
                    </div>
                </div>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Stock</th>
                          <th>Estado</th>
                          <th>Categoria</th>
                          <th>Acctions</th>
                        </tr>
                        <tbody>
                          @foreach($products as $product)
                        <tr>
                          <td>{{$product->stock}}</td>
                          <td><a href="{{route('products.show', $product)}}">{{$product->name}}</a> </td>
                          <td>{{$product->stok}}</td>
                          <td>@if ($product->status == 'ACTIVE')
                              <label class="badge badge-success">Activo</label>
                            @else
                              <label class="badge badge-danger">Pausado</label>
                            @endif</td>
                          <td>{{$product->category->name}}</td>
                          <td style="width: 50px;">
                            {!! Form::open(['route' => ['products.destroy', $product], 'method' => 'DELETE']) !!}
                            
                            <a href="{{route('products.edit', $product)}}" class="jsgrid-button jsgrid-edit-button unstyled-button" type="submit" title="editar">
                                <i class="far fa-edit"></i> 
                            </a> 
                            
                             <button  class="jsgrid-button jsgrid-delete-button unstyled-button" type="submit" title="eliminar">
                                <i class="far fa-trash-alt"></i> 
                            </button>
                            
                            {!! Form::close() !!}
                          </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


@stop

@section('js')
{!!Html::script("melody/js/data-table.js")!!}
@stop

