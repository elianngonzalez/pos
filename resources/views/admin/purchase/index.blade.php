
@extends('layouts.admin')
@section('title','Compras')
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
              Gestion de Compras
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="/">
                  Inicio
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">Compras</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Compras</h4>
               
                  <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="{{route('purchases.create')}}" class="dropdown-item" type="button">agregar</a>
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
                          @foreach($purchases as $purchase)
                        <tr>
                          <td><a href="{{route('purchases.show', $purchase)}}">{{$purchase->id}}</a> </td>
                          {{-- purchasee data modal show--}}
                          <td>{{$purchase->purchase_date}}</td>
                          <td>{{$purchase->total}}</td>
                          <td>{{$purchase->status}}</td>
                          <td style="width: 100px;">
                            {!! Form::open(['route' => ['purchases.destroy', $purchase], 'method' => 'DELETE']) !!}
                            {{--  
                            <a href="{{route('purchases.edit', $purchase)}}" class="jsgrid-button jsgrid-edit-button unstyled-button" type="submit" title="ver">
                                <i class="far fa-eye"></i> 
                            </a>  --}}

                            <a href="{{route('purchases.show', $purchase)}}" class="jsgrid-button jsgrid-edit-button unstyled-button" type="submit" title="ver">
                                <i class="far fa-eye"></i> 
                            </a>

                         {{--     <a href="{{route('purchases.edit', $purchase)}}" class="jsgrid-button jsgrid-edit-button unstyled-button" type="submit" title="editar">
                                <i class="far fa-file-pdf"></i> 
                            </a>  --}}
                            @if (Auth::user()->rol == 'admin')
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

