
@extends('layouts.admin')
@extends('layouts._nav')

@section('title','categorias')
@section('nav_buttons')
 <li class="nav-item d-none d-lg-flex">
    <a class="nav-link" href="{{route('categories.create')}}" >
      <span class="btn btn-primary">+ Crear nuevo</span>
    </a>
</li>
@endsection
@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Gestion de categorias
            </h3>
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="/">
                  Inicio
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">categorias</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">Categorias</h4>
                <div class="btn-group">
                  <h4 class="card-title">
                    <a href="#">
                      <i class="fas fa-download"></i>
                      Exportar
                    </a>
                  </h4>
                </div>
                 {{--  <div class="btn-group">
  <a class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i>
  </a>
  <div class="dropdown-menu dropdown-menu-right">
    <a href="{{route('categories.create')}}" class="dropdown-item" type="button">agregar</a>
    <a class="dropdown-item" type="button">Another action</a>
    <a class="dropdown-item" type="button">Something else here</a>
  </div>
</div> --}}
                </div>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Acctions</th>
                        </tr>
                        <tbody>
                          @foreach($categories as $category)
                        <tr>
                          <td>{{$category->id}}</td>
                          <td><a href="{{route('categories.show', $category)}}">{{$category->name}}</a> </td>
                          <td>{{$category->description}}</td>
                          <td style="width: 50px;">
                            {!! Form::open(['route' => ['categories.destroy', $category], 'method' => 'DELETE']) !!}
                            
                            <a href="{{route('categories.edit', $category)}}" class="jsgrid-button jsgrid-edit-button" type="submit" title="editar">
                                <i class="far fa-edit"></i> 
                            </a>
                            
                             <a class="jsgrid-button jsgrid-delete-button" type="submit" title="eliminar">
                                <i class="far fa-trash-alt"></i> 
                            </a>
                            
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


@endsection

@section('js')
{!!Html::script("melody/js/data-table.js")!!}
@endsection

