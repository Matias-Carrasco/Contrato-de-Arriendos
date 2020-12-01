@extends('adminlte::page')

@section('title', 'Estacionamiento')

@section('content_header')
    <h1>Estacionamiento</h1>

@stop

@section('content')
    <div class="row">
      <div class="col-12"> 
        <a href="{{url('/estacionamiento/create')}}" class="btn btn-primary btn-lg float-right" >Agregar</a>
        
        
      </div>
    </div>
    <br>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Estacionamiento</h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 700px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                        <th>Numero</th>     
                        <th>Propietario</th>
                                                    
 
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($estacionamientos as $estacionamiento)
                    <tr>       
                        <td>{{$estacionamiento->Numero}}</td>
                        @foreach ($listaprop as $lista)
                            @if ($estacionamiento->ID_prop == $lista->ID_prop)
                            <td>{{$lista->Nombre}}</td>
                            @endif
                        @endforeach                                        
                                           
                        
                        {{-- <td>
                          <form method="post" action="{{url('/estacionamiento/'.$estacionamiento->ID_est)}}">
                          {{csrf_field() }}
                          {{method_field('GET')}}
                          <button type="submit" class="btn btn-block btn-success">Ver mas</button>
          
                          </form>
                      </td> --}}
                      <td>
                        <a href="{{url('/estacionamiento/'.$estacionamiento->ID_est.'/edit')}}">
                         <button type="submit" class="btn btn-block btn-warning" onclick="return confirm('Editar');">Editar</button>
                        </a>
        
                      </td>
                      <td>
                        <form method="post" action="{{url('/estacionamiento/'.$estacionamiento->ID_est)}}">
                        {{csrf_field() }}
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-block btn-danger" onclick="return confirm('Borrar');">Borrar</button>
            
                        </form>
                    </td>

                   </tr>
                 @endforeach
                  </tbody>
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