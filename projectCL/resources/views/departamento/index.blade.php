@extends('adminlte::page')

@section('title', 'Departamento')

@section('content_header')
<h1>Departamento</h1>

@stop

@section('content')
<div class="row">
    <div class="col-12">
        <a href="{{url('/departamento/create')}}" class="btn btn-primary btn-lg float-right">Agregar</a>
    </div>
</div>
<br>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Departamento</h3>
        <input align='right' style="float: right" type="text" placeholder="Buscar" name="search" id="search"
            class="from-control" />
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 700px;">
        <table class="table table-head-fixed text-nowrap" id="tabla1">
            <thead>
                <tr>
                    <th>Departamento</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departamentos as $departamento)
                <tr>
                    <td>{{$departamento->Numero}} - {{$departamento->Bloque}}</td>
                    <td>
                        <form method="post" action="{{url('/departamento/'.$departamento->ID_dept)}}">
                            {{csrf_field() }}
                            {{method_field('GET')}}
                            <button type="submit" class="btn btn-block btn-success">Ver mas</button>
                        </form>
                    </td>
                    <td>

                        <input type="button" class="btn btn-block btn-warning" name="btn" value="Editar" id="submitBtn"
                            data-toggle="modal" data-target="#edit-modal" class="btn btn-default" />

                        <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">¿Editar?</h5>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Cancelar</button>

                                        <a href="{{url('/departamento/'.$departamento->ID_dept.'/edit')}}">
                                            <button type="submit" class="btn btn-primary">Aceptar</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td>
                        <input type="button" class="btn btn-block btn-danger" name="btn" value="Eliminar" id="submitBtn"
                            data-toggle="modal" data-target="#delete-modal" class="btn btn-default" />
                        <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">¿Borrar?</h5>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Cancelar</button>
                                        <form method="post" action="{{url('/departamento/'.$departamento->ID_dept)}}">
                                            {{csrf_field() }}
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-primary">Aceptar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

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
<script>
    $(document).ready(function () {
        $('#search').keyup(function () {
            search_table($(this).val());
        });

        function search_table(value) {
            $('#tabla1 tbody tr').each(function () {
                var found = 'false';
                $(this).each(function () {
                    if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
                        found = 'true';
                    }
                });
                if (found == 'true') {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }
    });

</script>
@stop
