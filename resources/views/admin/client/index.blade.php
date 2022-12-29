
@extends('layouts.admin')
@section('title','Clientes')
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
              Gestion de Clientes
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="/">
                  Inicio
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">Clientes</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Clientes</h4>
               
                  <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="{{route('clients.create')}}" class="dropdown-item" type="button">agregar</a>
                      <a class="dropdown-item" type="button">Another action</a>
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
                          <th>DNI</th>
                          <th>Telefono</th>
                          <th>Email</th>
                          <th>Acctions</th>
                        </tr>
                        <tbody>
                          @foreach($clients as $client)
                        <tr>
                          <td>{{$client->id}}</td>
                          {{-- cliente data modal show--}}
                          <td>{{$client->name}}</td>
                          <td>{{$client->dni}}</td>
                          <td>{{$client->phone}}</td>
                          <td>{{$client->email}}</td>
                          <td style="width: 50px;">
                            {!! Form::open(['route' => ['clients.destroy', $client], 'method' => 'DELETE']) !!}
                            
                            <a href="{{route('clients.edit', $client)}}" class="jsgrid-button jsgrid-edit-button unstyled-button" type="submit" title="editar">
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

