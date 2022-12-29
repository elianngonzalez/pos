@extends('layouts.admin')
@section('title','perfil de proveedor ')

@section('content')

<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Perfirl de proveedor
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('providers.index') }}">providers</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$provider->name}}</li>
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
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMUAAAEACAMAAAA0tEJxAAAAeFBMVEX///8AAAC0tLSVlZX4+Pj19fWLi4vBwcH8/Pw+Pj6enp46OjqIiIjw8PDf39/n5+cVFRUbGxvj4+PU1NTZ2dnMzMwQEBBra2vs7Oy+vr6pqalDQ0MYGBh2dnZgYGBaWloxMTGZmZmvr69RUVEiIiIpKSleXl5xcXGDzK5sAAAE0ElEQVR4nO2dD1ObMBiHQwdttCZxBDRWq3Vu6/f/hgu16mwTGpIAgfs9V++o5V7yXCCQvxACAAAAAAAAAAAAAAAAAAAAAAAAgLQofy3SYEWov8VDlgohFquxE//Jyl8iIYv9LCyyeVgs/K+MhCxeZmGRMV+JpCw23pmRksXjLPIiE7OweJ2FxXoWFlk1C4ulZymVlsXTLPIik7Ow2PqdUolZ3M3husiyh1lY3M/CIit8LNJpPTjiVVeSz/cH/r68rZ/GNmh488mL/6F5fTO2REhd6Qt2P7bFdbiEPifHzg7/utI3rpwPuL4ysm7Y/b7z1OBRLNyLrdbShOZMlFW9uN7+6WYR4ZTSR1fOx3Mt25lc7twtdjEsCHE+Ypc7FP/hnCU8pOH5k7c+LDS1Y+CbCA6EbHuy0Bny4hL2ZxQL57LW45lHrh3i1jEslr1ZUH3Cby7H3caw+NGbxQH2eDFwnr6FwwFC+pUGsqD5xVrNc/oWDeWFyBEebPu3oIT9bo28mILFRY3gutIgFhp12xbauxNgWAvafm1spmJB6pbQVyT0kXCYM0pz3RI7uK40lEVOWh4OX8fPC0sC6OlXZo99O74FeVyfszN02y3swX37lSJaGHdfGna0n1OhdaUIFsZ7gclC2KNPx4K2HCywrjScBdVYb+GBdaUhz6i2CzyskBrUgtobjjy7KuNZGFs3LRbmKtPLIrDaOqiF5rwe/rYJryYNmxdnmbHeNI/lNIF7t3F3W17830q/W5ZhiR/P4qOV/mkZdkGPavFeTN3tJX1vd0vFwtx5YLfYZPuHaMmPZlF1s6CUkeC6XXwL8y3AnhfRFaJYmFvdrVd3L4RbmHeflIXtmWJaFoRa+oinZfHXsvtULA6lzbNt96lYaKS9Q3gqFlRaMyJdC8G+UOVqs23vlEjUoiOwgAUsYAELWMACFrCABSxgAQtYwAIWsIBFkIXkH1SyXj1c39jamZO2OB/jULQNaEzUwtTaXNinLU7HglL7JJRJWZD95C0OWIafTcqC2oafTcpCa8zBwhZhahbm0fxTszCP9Z2aBZ2FRcexar0AiyOdRqL2w7AjtPsCFkdgEQlYHIFFJGBxZB4Wxt3jrFbiSgSL5Y0Bv/XrfOltNm78weQtDDYzuldgkQ6wSAdYpMMcLNomjk/HokNexFgyszecLdTYKW3DeXW4WBNne8F5WdQ4K2b2AnVfTjTKino90bLsywm/hn3W7kTbgkjf2Sds0TZB6oR0JaS7xMA16Q7wDhLNlZECpxP0S+c1OD9y4+zON8JZ9nnIXHG5WbosWHrK/rXmojCEHJBV9vOAR/K/cft0jBNl1eXuFpGBBSxgAQtYwAIWsIAFLGABC1jAAhYzs4j+fj3vt/SGQPO4FPEW0uwgET9iui3QAAAAAAAAAAAAAAAAAAAAAAAARoR+66R+f00gtfyaKIcUfvaL6w16kuzmJczDJ6sjnEtCWTN9RunUsrL5kLzm7CPpxddmugghq5IXkhd1XlZ5xZmoqlyWXHD9J0SpOGf6i3YRquRlyaVQyWmVgnAiKGeqyrksSp3uuqCSKlGLQgheE14WOsPy5p+MK85kXiZnoRgRuWKHd6mJJt25YCovid5SzX/0RxX6V5XrX3Klt/TvYycanPAPHlhhyLT4lAIAAAAASUVORK5CYII=" style='width: 100px;'>
                        <p>Bureau Oberhaeuser is a design bureau focused on Information- and Interface Design. </p>
                      </div>
                      <div class="border-bottom py-4">
                                                                                    
                      </div>
                      
                      <div class="py-4">
                        <p class="clearfix">
                          <span class="float-left">
                            Status
                          </span>
                          <span class="float-right text-muted">
                            Active
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Telefono
                          </span>
                          <span class="float-right text-muted">
                            {{$provider->phone}}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Email
                          </span>
                          <span class="float-right text-muted">
                            {{$provider->email}}
                          </span>
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-8 pl-lg-5">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3>{{$provider->name}}</h3>
                          <div class="d-flex align-items-center">
                         <p>{{$provider->address}}</p>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 py-2 border-top border-bottom">
                        <ul class="nav profile-navbar">
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              <i class="fa fa-user"></i>
                              Info
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="#">
                              <i class="fas fa-file"></i>
                              Feed
                            </a>
                          </li>
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
                          </li>
                        </ul>
                      </div>
                      <div class="profile-feed">
                        <div class="d-flex align-items-start profile-feed-item">
                          a
                        </div>
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
                            <a class="btn btn-primary" href="{{ route('providers.index') }}">Regresar</a>
                          </div>
              </div>
            </div>
          </div>
        </div>

@endsection