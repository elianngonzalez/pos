@extends('layouts.admin')
@section('title','Compra')

@section('content')

<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              {{-- Compra N°: {{$purchase->id}} --}}
            </h3>
            <nav aria-label="breadcrumb float-right">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('purchases.index') }}">Compras</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$purchase->id}}</li>
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
                        <img src="{{ asset('image/'.$purchase->image) }}" style='width: 200px;'>
                      </div> --}} <h3 class="page-title text-center">
              Compra N°: {{$purchase->id}}
            </h3>
                      <div class="py-4">
                        <p class="clearfix">
                          <span class="float-left">
                            Fecha
                          </span>
                          <span class="float-right text-muted">
                            {{$purchase->purchase_date}}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Status
                          </span>
                          <span class="float-right text-muted">
                            @if ($purchase->status == 'VALID')
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
                            {{$purchase->id}}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Total
                          </span>
                          <span class="float-right text-muted">
                            {{$purchase->total}}$
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Impuestos
                          </span>
                          <span class="float-right text-muted">
                            {{$purchase->tax}}$
                          </span>
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-8 pl-lg-5">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3>Productos comprados</h3>
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
                          @foreach($purchaseDetails as $detail)
                        <tr>
                           {{-- purchase data modal show --}}

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
                            <a class="btn btn-primary" href="{{ route('purchases.index') }}">Regresar</a>
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