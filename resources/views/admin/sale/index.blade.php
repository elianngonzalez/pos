
@extends('layouts.admin')
@section('title','Ventas')
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
              Gestion de Ventas
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="/">
                  Inicio
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">Ventas</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Ventas</h4>
               
                  <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="{{route('sales.create')}}" class="dropdown-item" type="button">agregar</a>
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
                          <th>Fecha</th>
                          <th>Total</th>
                          <th>Estado</th>
                          <th>Acctions</th>
                        </tr>
                        <tbody>
                          @foreach($sales as $sale)
                        <tr>
                          <td><a href="{{route('sales.show', $sale)}}">{{$sale->id}}</a> </td>
                          {{-- salee data modal show--}}
                          <td>{{$sale->sale_date}}</td>
                          <td>{{$sale->total}}</td>
                          <td>{{$sale->status}}</td>
                          <td style="width: 100px;">
                            {!! Form::open(['route' => ['sales.destroy', $sale], 'method' => 'DELETE']) !!}
                             
                            <a href="{{route('sales.edit', $sale)}}" class="jsgrid-button jsgrid-edit-button unstyled-button" type="submit" title="ver">
                                <i class="far fa-edit"></i> 
                            </a> 

                            <a href="{{route('sales.show', $sale)}}" class="jsgrid-button jsgrid-edit-button unstyled-button" type="submit" title="ver">
                                <i class="far fa-eye"></i> 
                            </a>
                            
                            @if (Auth::user()->rol == 'admin')
                             <a href="{{route('sales.edit', $sale)}}" class="jsgrid-button jsgrid-edit-button unstyled-button" type="submit" title="editar">
                                <i class="far fa-file-pdf"></i> 
                            </a> 

                              <button  class="jsgrid-button jsgrid-delete-button unstyled-button" type="submit" title="eliminar">
                                <i class="far fa-trash-alt"></i> 
                              </button>
                            @endif
                            
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

