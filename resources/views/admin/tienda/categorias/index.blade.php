@extends('adminlte::page')

@section('title', __('Categorias'))

@section('content_header')
    <h1>{{ __('Categorias') }}</h1>
@stop
@section('content')
    <div class="card card-outline card-danger">
        <div class="card-header">
            <div class="row justify-content-end">
                <div class="btn-group">
                    <a href="{{ route('admin.categorias.create') }}" class="btn btn-dark btn-sm"><span class="fa fa-plus"></span><br>{{__('Nueva')}}</a>
                </div>
            </div>
        </div>

        <div class="card-body">

            @include('flash-message')

            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="datatable-categorias" style="width:100%">
                    <thead>
                        <th class="text-center" width="50px">#</th>
                        <th class="text-center">{{__('Nombre')}}</th>
                        <th class="text-center" width="140px">{{__('Acciones')}}</th>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.tienda.categorias.modales._delete')
@stop

@section('js')
<script>
    function montarTabla() {
        return $('#datatable-categorias').DataTable({
            "order": [[0, "asc"]],
            "stateSave": true,
            "serverSide": true,
            "processing": true,
            "bJQueryUI": true,
            "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "{{__('Todos')}}"]],
            "ajax": {
                url: "{{ route('admin.categorias.indexAjax') }}",
                method: "get",
            },
            "columns": [
                {data: 'id', 'className': 'text-center'},
                {data: 'nombre', 'className': 'text-center'},
                {data: null,'className': 'text-center',
                    render: function(data,type,row,meta){
                        let url;
                        let button = "";

                        url = '{{ url('admin/categorias/edit') }}/'+data.id;
                        button += '<a href="'+url+'" class="btn btn-dark" title="{{__('Editar')}}"><i class="fa fa-edit"></i></a> '
                        button += '<button type="button" id="'+data.id+'" class="btn btn-danger eliminar-categoria" title="{{__('Eliminar')}}" data-toggle="modal" data-target="#modalEliminar"><i class="fa fa-trash"></i></button>'

                        return button;
                    }
                },
            ],
            "oLanguage": {
                "sProcessing": "{{__('Procesando...')}}",
                "sLengthMenu": "{{__('Mostrar _MENU_ registros')}}",
                "sZeroRecords": "{{__('No se encontraron resultados')}}",
                "sEmptyTable": "{{__('Ning??n dato disponible en esta tabla')}}",
                "sInfo": "{{__('Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros')}}",
                "sInfoEmpty": "{{__('Mostrando registros del 0 al 0 de un total de 0 registros')}}",
                "sInfoFiltered": "{{__('(filtrado de un total de _MAX_ registros)')}}",
                "sInfoPostFix": "",
                "sSearch": "{{__('Buscar:')}}",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "{{__('Cargando...')}}",
                "oPaginate": {
                    "sFirst": "{{__('Primero')}}",
                    "sLast": "{{__('??ltimo')}}",
                    "sNext": "{{__('Siguiente')}}",
                    "sPrevious": "{{__('Anterior')}}"
                },
                "oAria": {
                    "sSortAscending": "{{__(': Activar para ordenar la columna de manera ascendente')}}",
                    "sSortDescending": "{{__(': Activar para ordenar la columna de manera descendente')}}"
                },
                "buttons": {
                    "copy": "{{__('Copiar')}}",
                    "colvis": "{{__('Visibilidad')}}"
                }
            }
        });
    }
    $(document).ready(function(){
        montarTabla();

        $('#datatable-categorias tbody').on('click', '.eliminar-categoria', function () {
            let id = $(this).attr('id');
            let url = "{{ url('/admin/categorias/destroy') }}/" + id;
            $('#formularioEliminarCategoria').attr('action', url);
        });
    });
</script>
@stop
