@extends('layouts.admin')
@section('title','perfil de producto ')

@section('content')

<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Perfirl de producto
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">products</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="border-bottom text-center pb-4">
                        <img src="{{ asset('image/'.$product->image) }}" style='width: 200px;'>
                      </div>
                      <div class="py-4">
                        <p class="clearfix">
                          <span class="float-left">
                            Status
                          </span>
                          <span class="float-right text-muted">
                            @if ($product->status == 'ACTIVE')
                              <label class="badge badge-success">Activo</label>
                            @else
                              <label class="badge badge-danger">Pausado</label>
                            @endif
                          
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Stok
                          </span>
                          <span class="float-right text-muted">
                            {{$product->stock}}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Precio
                          </span>
                          <span class="float-right text-muted">
                            {{$product->sell_price}}$
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Categoria
                          </span>
                          <span class="float-right text-muted">
                            {{$product->category->name}}
                          </span>
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-8 pl-lg-5">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3>{{$product->name}}</h3>
                          <div class="d-flex align-items-center">
                         <p>codigo: {{$product->code}}</p>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 py-2 border-top border-bottom">
                        <ul class="nav profile-navbar">
                          <li class="nav-item">
                            <a class="nav-link active" href="{{ route('providers.show',$product->provider->id)}}">
                            <i class="far fa-handshake"></i><strong>Proveedor:</strong> {{$product->provider->name}}</a>
                           </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              <i class="far fa-user"></i>
                              <strong>Numero de contacto:</strong> {{$product->provider->phone}}
                            </a>
                         {{-- </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              <i class="fa fa-calendar"></i>
                              Agenda
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              <i class="far fa-file-word"></i>
                              Resume
                            </a>
                          </li> --}}
                        </ul>
                      </div>
                      <div class="profile-feed">
                        <div class="d-flex align-items-start profile-feed-item">
                          a
                        </div>
                        <div class="d-flex align-items-start profile-feed-item">  a
        
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                    <div class="card-footer text-muted">
                            <a class="btn btn-primary" href="{{ route('products.index') }}">Regresar</a>
                          </div>
              </div>
            </div>
          </div>
        </div>

@endsection