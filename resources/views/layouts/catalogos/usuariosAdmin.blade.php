
@extends('layouts.app', ['activePage' => 'usuariosOp', 'titlePage' => __('Usuarios Operativos')])
@section('content')
    <script type="text/javascript" src="js/d3.v3.min.js"></script>
    <script type="text/javascript" src="js/utilities.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<div class="content"><br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Administradores</h4>
            <p class="card-category">Administradores registrados y activos</p>
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
                      editor-controls="all"
                      filter
                      pager
                      page-size=5
                      page-size-options='1,5,10,15,20'
                      theme='ios'
                      context-menu
                      columns-controls
                      layout-controls
                      lang="es"
                      src="https://cdn.zinggrid.com/datasets/remote-data.json"
                  >
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
                  </zg-colgroup>
              </zing-grid> 
            </body>
          </div>
        </div>
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
    const zgRef1 = document.querySelector('#usuarios');
  });
</script>

@endsection