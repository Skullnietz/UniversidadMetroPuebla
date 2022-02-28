
@extends('layouts.app', ['activePage' => 'usuariosOp', 'titlePage' => __('Usuarios Operativos')])
@section('content')


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
              <title>ZingGrid: Docs Getting Started</title>
              <!--Script Reference[1]-->
              <script nonce="undefined" src="https://cdn.zinggrid.com/zinggrid.min.js"></script>
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
              <!--Grid Component Placement[2]-->

               <meta name="csrf-token" content="{{ csrf_token() }}">
              <zing-grid 
                      id='usuarios'
                      filter
                      theme='ios'
                      context-menu
                      columns-controls
                  >
                  <zg-colgroup>
                      <zg-column 
                          index='a'  
                          type='text' 
                          filter='disabled'
                          header='Nombre'
                      ></zg-column>
                      <zg-column 
                          index='b'  
                          type='text'
                          header='Apellido'
                      ></zg-column>
                      <zg-column 
                          index='c'  
                          type='text' 
                          header='Correo'
                      ></zg-column>
                      <zg-column 
                          index='d'  
                          type='text' 
                          header='Tipo de Usuario'
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
 
@endsection