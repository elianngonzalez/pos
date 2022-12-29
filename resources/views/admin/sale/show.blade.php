@extends('layouts.admin')
@section('title','venta')

@section('content')

<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              {{-- Compra N°: {{$sale->id}} --}}
            </h3>
            <nav aria-label="breadcrumb float-right">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('sales.index') }}">Ventas</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$sale->id}}</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      {{-- <div class="border-bottom text-center pb-4">
                        <img src="{{ asset('image/'.$sale->image) }}" style='width: 200px;'>
                      </div> --}} <h3 class="page-title text-center">
              Venta N°: {{$sale->id}}
            </h3>
                      <div class="py-4">
                        <p class="clearfix">
                          <span class="float-left">
                            Fecha
                          </span>
                          <span class="float-right text-muted">
                            {{$sale->sale_date}}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Estado
                          </span>
                          <span class="float-right text-muted">
                            @if ($sale->status == 'VALID')
                              <label class="badge badge-success">Valida</label>
                            @else
                              <label class="badge badge-danger">Erronea</label>
                            @endif
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Codigo
                          </span>
                          <span class="float-right text-muted">
                            {{$sale->id}}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Total
                          </span>
                          <span class="float-right text-muted">
                            {{$sale->total}}$
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Impuestos
                          </span>
                          <span class="float-right text-muted">
                            {{$sale->tax}}$
                          </span>
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-8 pl-lg-5">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3>Productos vendidos:</h3>
                        </div>
                      </div>
              
                      <div class="profile-feed"> 
                         <table id="products" class="table">
                      <thead>
                        <tr>
                          <th>Codigo</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                          <th>precio de venta</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                        <tbody>
                          @foreach($sale->saleDetails as $detail)
                        <tr>
                           {{-- sale data modal show --}}

                          <td>{{$detail->product->code}}</td>
                          <td>{{$detail->product->name}}</td>
                          <td>{{$detail->quantity}}</td>
                          <td>{{$detail->product->sell_price}}</td>
                          <td>{{$subTotal}}</td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
        
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-muted">
                            <a class="btn btn-primary" href="{{ route('sales.index') }}">Regresar</a>
                    </div>
                </div>
             </div>
           </div>


@endsection


@section('js')
{!!Html::script("melody/js/data-table.js")!!}

<script>
  var tableData = $('#products').DataTable( {
        paging: false,
        searching: false,
        columnDefs:[{
            targets: "_all",
            sortable: false
        }],
        fixedColumns:   {
            leftColumns: 3
        }
    });
</script>

@stop