@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ventas</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Lista de ventas') }}
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" width="100%"
                            id="tblVentas">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Monto</th>
                                    <th>Cliente</th>
                                    <th>Fecha/Hora</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link href="{{ asset('DataTables/datatables.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endsection

@section('js')
@section('js')
<script src="{{ asset('DataTables/datatables.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="{{ asset('DataTables/moment.js') }}"></script> <!-- Archivo moment.js en tu proyecto -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        new DataTable('#tblVentas', {
            responsive: true,
            fixedHeader: true,
            ajax: {
                url: '{{ route('sales.list') }}',
                dataSrc: 'data'
            },
            columns: [
                { data: 'id' },
                { data: 'total' },
                { data: 'nombre' },
                {
                    data: 'created_at',
                    render: function (data, type, row) {
                        return moment(data).format('YYYY-MM-DD h:mm A');
                    }
                },
                {
                    data: null,
                    render: function (data, type, row) {
                        return '<a class="btn btn-sm btn-primary" target="_blank" href="/venta/' +
                            row.id + '/ticket">Ticket</a>';
                    }
                }
            ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
            },
            order: [
                [0, 'desc']
            ]
        });
    });
</script>
@stop

@stop
