@extends('layouts.app', ['activePage' => 'usuariosOp', 'titlePage' => __('Usuarios Operativos')])
@section('content')

    <script type="text/javascript" src="js/d3.v3.min.js"></script>
    <script type="text/javascript" src="js/utilities.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="content"><br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Administradores</h4>
              <p class="card-category"><button type="button"class='btn btn-sm btn-success' data-toggle="modal" data-target="#modalAgregar">Agregar Usuario</button></p>
          </div>

          <div class="card-body">
            <head>
              <style>
                html,
                body {
                  width: 100%;
                  height: 100%;
                  position: relative;
                  overflow: hidden;
                }
            
                zing-grid[loading] {
                  height: 367px;
                }
              </style>
            </head>
            
            <body>
               <meta name="csrf-token" content="{{ csrf_token() }}">
              <zing-grid 
                      id='usuario'
                      filter
                      pager
                      page-size=5
                      page-size-options='1,5,10,15,20'
                      theme='ios'
                      lang="es"
                      src="https://cdn.zinggrid.com/datasets/remote-data.json">
                  <zg-colgroup>
                      <zg-column 
                          index='a'  
                          type='text' 
                          header='Nombre'
                      ></zg-column>
                      <zg-column 
                          index='b'  
                          type='text'
                          header='Apellido'
                      ></zg-column>
                      <zg-column 
                          index='c'  
                          type='mail' 
                          filter='disable'
                          header='Correo'
                      ></zg-column>
                      <zg-column 
                          index='d'  
                          type='text' 
                          filter='disable'
                          header='Titulo'
                      ></zg-column>
                      <zg-column 
                          index='e'  
                          type='text' 
                          filter='disabled'
                          header='Status'
                      ></zg-column>
                      <zg-column
                          index='f'  
                          header='Opciones'
                          filter='disabled'
                      ></zg-column>
                  </zg-colgroup>
              </zing-grid> 
            </body>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>

<div class="modal" id="modalAgregar">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form role="form" method="POST">
      <div class="modal-header" style="background: #151E46">
        <h4 class="modal-title"><font color="white">Agregar Usuario</font></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="box-body">
            
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
              <input type="text" name="nombre" class="form-control" placeholder="Nombre">
              <input type="text" name="apellido" class="form-control" placeholder="Apellido">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
              </div>
              <input type="text" name="titulo" class="form-control" placeholder="Titulo">
            </div>
            
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-at"></i></span>
              </div>
              <input type="email" name="correo" class="form-control" placeholder="Correo Electronico">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-key"></i></span>
              </div>
              <input type="password" name="pass" class="form-control" placeholder="Contraseña">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancelar</botton>
        <button type="submit" class="btn btn-sm btn-success">Guardar</botton>
      </div>
    
    </div>
  </div>
</div>

<script src='https://cdn.zinggrid.com/zinggrid.min.js' defer></script>
<script>
  $(document).ready(() => {
    window.onload = function(){
      document.querySelector('#usuario').data = @json($consulta);
      
    }
    const zgRef = document.querySelector('#usuarios');
   
  });
</script>


@endsection