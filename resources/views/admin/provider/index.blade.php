
@extends('layouts.admin')
@section('title','Proveedores')
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
              Gestion de proveedores
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="/">
                  Inicio
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">Proveedores</li>
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
                      <a href="{{route('providers.create')}}" class="dropdown-item" type="button">agregar</a>
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
                          <th>Correo electronico</th>
                          <th>Direccion</th>
                          <th>Telefono/celular</th>
                          <th>Acctions</th>
                        </tr>
                        <tbody>
                          @foreach($providers as $provider)
                        <tr>
                          <td>{{$provider->id}}</td>
                          <td><a href="{{route('providers.show', $provider)}}">{{$provider->name}}</a> </td>
                          <td>{{$provider->email}}</td>
                          <td>{{$provider->address}}</td>
                          <td>{{$provider->phone}}</td>
                          <td style="width: 50px;">
                            {!! Form::open(['route' => ['providers.destroy', $provider], 'method' => 'DELETE']) !!}
                            
                            <a href="{{route('providers.edit', $provider)}}" class="jsgrid-button jsgrid-edit-button unstyled-button" type="submit" title="editar">
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

