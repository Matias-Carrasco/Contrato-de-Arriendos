@extends('adminlte::page')

@section('title', 'Departamento')

@section('content_header')
    <h1>Departamento</h1>

@stop

@section('content')
    <div class="row">
      <div class="col-12"> 
        <a href="{{url('/departamento/')}}" class="btn btn-primary btn-lg " >Volver</a>
        
        
      </div>
    </div>
    <br>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Departamento</h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 700px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                        <th>ID Depto</th>
                        <th>ID Propietario</th>
                        <th>Numero</th>
                        <th>Bloque</th>                                       

                    </tr>
                  </thead>
                  <tbody>
                   <tr> 
                    <td>{{$datosVERMAS->ID_dept}}</td>
                    <td>{{$datosVERMAS->ID_prop}}</td>
                    <td>{{$datosVERMAS->Numero}}</td>
                    <td>{{$datosVERMAS->Bloque}}</td>              
                   
                   </tr>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop