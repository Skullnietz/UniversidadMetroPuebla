@extends('sidebar')
@section('title')
Formulario
@endsection
@section('sidebartitle')
Formulario
@endsection
@section('itemformulario')
active
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <form method="post" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
                @csrf
                @method('put')
    
                <div class="card ">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">{{ __('Formulario') }}</h4>
                    <p class="card-category">{{ __('Diseño de Inputs') }}</p>
                  </div>
                  <div class="card-body ">
                    @if (session('status'))
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="material-icons">close</i>
                            </button>
                            <span>{{ session('status') }}</span>
                          </div>
                        </div>
                      </div>
                    @endif
                    <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                      <div class="col-sm-7">
                        <div class="bmd-form-group is-filled">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">badge</i>
                                </span>
                              </div>
                              <input type="text" name="" class="form-control" placeholder="Nombre" value="" required="">
                            </div>
                                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                      <div class="col-sm-7">
                        <div class="bmd-form-group is-filled">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">email</i>
                                </span>
                              </div>
                              <input type="text" name="" class="form-control" placeholder="Email" value="" required="">
                            </div>
                                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Telefono') }}</label>
                        <div class="col-sm-7">
                          <div class="bmd-form-group is-filled">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="material-icons">phone</i>
                                  </span>
                                </div>
                                <input type="number" name="" class="form-control" placeholder="Telefono" value="" required="">
                              </div>
                                          </div>
                        </div>
                      </div><br><hr>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Select 2 Jquery') }}</label>
                        <div class="col-sm-5">
                          <select name="" id="" class="form-control selectdinamico">
                              <option value="">Seleccionar un valor</option>
                              <option value="1">Opcion 1</option>
                              <option value="2">Opcion 2</option>
                              <option value="3">Opcion 3</option>
                          </select>
                        </div>
                      </div><br><hr>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Checkbox Opcion Multiple') }}</label>
                        <div class="col-sm-7">
                          
                            <div class="form-check">
                                <label class="form-check-label checkbtn">
                                  <input class="form-check-input" type="checkbox" value="Opcion 1"  name="checkbox">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>Opcion 1
                                </label>
                                <label class="form-check-label checkbtn">
                                    <input class="form-check-input" type="checkbox" value="Opcion 2"  name="checkbox">
                                    <span class="form-check-sign">
                                      <span class="check"></span>
                                    </span>Opcion 2
                                  </label>
                                  <label class="form-check-label checkbtn">
                                    <input class="form-check-input" type="checkbox" value="Opcion 3"  name="checkbox">
                                    <span class="form-check-sign">
                                      <span class="check"></span>
                                      <!-- style="color:#545454" -->
                                    </span>Opcion 3
                                  </label>
                              </div>
                              
                        </div>
                      </div>
                  </div>
                  <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                  </div>
                </div>
              </form>
        </div>
        @push('js')
        <script>
        $(document).ready(function() {
            $('.selectdinamico').select2();
        });
        </script>
        @endpush

@endsection