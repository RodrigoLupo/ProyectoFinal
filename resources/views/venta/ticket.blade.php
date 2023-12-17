<!DOCTYPE html>
<html>

<head>
    <title>Reporte ticket</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
        }

        .ticket {
            width: 140pt;
            margin: 0 auto;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo {
            text-align: center;
            margin-bottom: 10px;
        }

        .logo img {
            max-width: 80px;
            height: auto;
        }

        .business-info {
            text-align: center;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .ticket-details {
            margin-top: 10px;
        }

        .ticket-details h3 {
            font-size: 14px;
            margin-bottom: 10px;
            text-align: center;
        }

        .ticket-details p {
            font-size: 10px;
            margin: 5px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            padding: 6px;
            text-align: left;
            font-size: 10px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .text-right {
            text-align: right;
        }

        .total {
            margin-top: 10px;
            text-align: right;
        }

        .total h4 {
            margin: 0;
            font-size: 14px;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="ticket">
        <div class="logo">
            <img src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.jpg') }}" alt="Logo">
        </div>
        <div class="business-info">
            <h3>{{$company->nombre}}</h3>
            <p>{{$company->direccion}}</p>
            <p>{{$company->telefono}}</p>
            <p>{{$company->correo}}</p>
        </div>
        <div class="ticket-details">
            <h3>Ticket de Venta</h3>
            <p>Fecha: {{ $fecha . ' ' . $hora }}</p>
            <p>Nro: {{ $venta->id }}</p>
            <p>Cliente: {{ $venta->nombre}}</p>
            <p>Teléfono: {{ $venta->telefono }}</p>
            <p>Dirección: {{ $venta->direccion }}</p>
            <table>
                <thead>
                    <tr>
                        <th>Cant</th>
                        <th>Producto</th>
                        <th>Importe</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->cantidad }}</td>
                            <td>{{ $producto->producto }}</td>
                            <td>{{ $producto->precio }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr class="total">
                        <td colspan="2"><strong>Total</strong></td>
                        <td><h4>{{ $venta->total }}</h4></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>

</html>
