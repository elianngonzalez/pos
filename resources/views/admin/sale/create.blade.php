
@extends('layouts.admin')
@section('title','Ventas')
@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Crear Ventas
            </h3>

             <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="{{ route('sales.index') }}">
                  Inicio
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">Ventas</li>
              </ol>
            </nav>
          </div>
          <div class="card">
             {{ Form::open(['route' => 'sales.store' , 'method' => 'POST','files' => true]) }}
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Compra</h4>
                </div>
             
                @include('admin.sale._form')
              
              </div>
               <div class="card-footer text-muted">
                  <button type="submit"  id="guardar" class="btn btn-primary">Registrar</button>
                <a href="{{route('sales.index')}}" class="btn btn-danger">Cancelar</a>
               </div>
              {{ Form::close() }}
            </div>
          </div>



@endsection

@section('js') 

{!!Html::script('/melody/js/avgrund.js')!!}
{!!Html::script('/melody/js/alerts.js')!!}

<script>
  $(document).ready(function() {
    $('#agregar').click(function() {
      agregar()
    });
  


  var cont = 0;
  total = 0;
  subtotal = [];

  
  $('#guardar').hide();
  $('#product_id').change(mostrarValores);

  function mostrarValores() {
    datosDelProducto = document.getElementById('product_id').value.split('_')
    console.log({datosDelProducto});
    $('#price').val(datosDelProducto[1])
    $('#stock').val(datosDelProducto[2])
  }
  
  function agregar(){
    datosDelProduct = document.getElementById('product_id').value.split('_')
    product_id = datosDelProduct[0]
    console.log({product_id});
    producto = $('#product_id option:selected').text();
    quantity = $('#quantity').val();
    price = $('#price').val();
    impuesto = $('#tax').val();
    discount = $('#discount').val();

    if (product_id != "" && quantity > 0 && price != "" && NameExist(producto) == false ) {
      subtotal[cont] = (quantity * price) - (quantity * price * discount / 100) ;
      total = total + subtotal[cont];
      var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class="fa fa-times"></i></button></td><td><input type="hidden" id="producto_nombre" name="product_id[]" value="'+ product_id +'" ><p id="prod">'+ producto +'</p></td><td><input type="hidden" id="price[]" name="price[]" value="'+ parseFloat(price).toFixed(2) +'" </td><td><input class="form-control" type="number" id="price[]" value="'+ parseFloat(price).toFixed(2) +'" disabled ></td><td><input type="hidden" name="discount[]" value="'+ parseFloat(discount).toFixed(2) +'" ></td><td><input class="form-control" type="number" id="discount[]" value="'+ parseFloat(discount).toFixed(2)+'" disabled ></td><td><input type="hidden" name="quantity[]" value="'+ quantity +'" ></td><td><input class="form-control" type="number" id="quantity[]" value="'+quantity +'" disabled ></td><td align="right">s/'+ subtotal[cont] +'</td></tr>';
      cont ++;
      limpiar();
      totales();
      evaluar();
/*    console.log(fila);*/
      $('#detalles').append(fila);


    }else{
      //este es el alert
      showSwal('error-message')
    }
  };
  });

  function limpiar(){
    $('#quantity').val('');
    $('#price').val('');
  }

  function totales(){
    $('#total').html('ARS ' + total.toFixed(2));
    total_impuesto = total * impuesto / 100;
    total_pagar = total + total_impuesto;
    $('#total_impuesto').html('ARS ' + total_impuesto.toFixed(2));
    $('#total_pagar_html').html('ARS ' + total_pagar.toFixed(2));
    $('#total_pagar').val(total_pagar.toFixed(2));    
  }

  function evaluar(){
    if (total > 0) {
      $('#guardar').show();
    } else {
      $('#guardar').hide();
    }
  }


  function eliminar(index){
    total = total - subtotal[index];
    total_impuesto = total * impuesto / 100;
    total_pagar_html = total + total_impuesto;
    $('#total').html('ARS'+total);
    $('#total_impuesto').html('ARS '+total_impuesto);
    $('#total_pagar_html').html('ARS '+total_pagar_html);
    $('#total_pagar').html(total_pagar_html.toFixed(2));
    $('#fila'+index).remove();
    evaluar();
  }

function NameExist(name){
  let nombres = []
   $( "tr.selected" ).each(function() {
      nombres.push($( this ).find('p#prod').text())       
      });

    if (nombres.includes(name)) {
      return true
    }
    
    return false;

 };

 async function Vuelto() {
   let dinero = $('#dinero_recivido').val();
   let total_pago = $('#total_pagar').val();
   let total_vuelto = dinero - total_pago;
   if (total_pago > 0) {
    $('#total_vuelto_html').html('VUELTO: ARS '+total_vuelto);
  }
  if (total_vuelto < 0) {
    $('#total_vuelto_html').html('VUELTO: NO ALCANZA PARA PAGAR');
  }

 }




</script>   


@endsection

    
