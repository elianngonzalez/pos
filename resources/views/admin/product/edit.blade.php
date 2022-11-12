
@extends('layouts.admin')
@section('title','Producto')
@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Gestion de Productos
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">
                  Productos
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">Ediar producto</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Ediar producto</h4>
                </div>
              {!! Form::model($product, ['route' => ['products.update',$product] , 'method' => 'PUT', 'files' => True ]) !!}
                    {!! csrf_field() !!}
                    <fieldset class="form-group">
                      <label for="formGroupExampleInput">Nombre</label>
                      <input type="text" class="form-control" id="name" name="name" value='{{$product->name}}' required>
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="sell_price">Precio de venta</label>
                      <input type="number" class="form-control" id="sell_price" value='{{$product->sell_price}}' name="sell_price" required>
                    </fieldset>

                <fieldset class="form-group">
                    <span class="label label-default" for='category_id'>Categoria</span>
                    <select class="custom-select" name="category_id" id="category_id">
                      @foreach ($categories as $category)
                      <option value="{!! $category->id !!}" 
                          @if ($category->id == $product->category_id)
                            selected 
                          @endif
                        >{!! $category->name !!}</option>
                      @endforeach
                    </select>
                </fieldset>

                <fieldset class="form-group">
                    <span class="label label-default" for='provider_id'>Proveedor</span>
                    <select class="custom-select" name="provider_id" id="provider_id">
                      @foreach ($providers as $provider)
                      <option value="{!! $provider->id !!}"
                          @if ($provider->id == $product->provider_id)
                            selected 
                          @endif
                        >{!! $provider->name !!}</option>
                      @endforeach
                    </select>
                  </fieldset>

                    <div class="form-group ">
                     <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Seleccionar archivo</h4>
                        <input type="file" name="picture" class="dropify" data-default-file="{{ asset('image/'.$product->image) }}" />
                        </div>
                      </div>
                    </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{route('products.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
    
              {{ Form::close() }}
              </div>
            </div>



    

@endsection
@section('js')
{{Html::script('melody/js/dropify.js')}}
@endsection