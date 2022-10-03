<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        html{
            padding: 0;
            margin: 0;
        }
        body{
            font-family: sans-serif;
        }
        .container{
            width: 80%;
            margin: 0px auto;
        }

        table{
            border-color: #000;
            border-collapse: collapse;
            width: 80%;
        }
        tr, td, th{
            border: 1px solid;☻

        }
    </style>
</head>
<body>
    <main class="container">
        <h1>Cultivo</h1>
        <p>
            <strong>Nombre:</strong>
            {{$cultivo->nombre}}
        </p>
        <section>
            @foreach ($fases as $fase)
                <h2>Fase {{$fase->nombre}}</h2>
                <div>
                    <section>
                        <h3>Mano de obra</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Actividad</th>
                                    <th>Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $actividades = DB::table('movimientos_actividad')
                                    ->select(
                                    'actividads.nombre as nombre_actividad',
                                    'movimientos_actividad.cantidad as cantidad_movimiento',
                                    'movimientos_actividad.valor as valor_movimiento',
                                    'movimientos_actividad.created_at as fecha_movimiento',
                                    )
                                    ->where('cultivo_fase_id', $fase->cultivo_fase_id)
                                    ->join('actividads', 'movimientos_actividad.actividad_id', '=', 'actividads.id')
                                    ->get();

                                    $valorTotal = 0;
                                @endphp
                                @foreach ($actividades as $actividad)
                                @php
                                    $valor = $actividad->cantidad_movimiento * $actividad->valor_movimiento;
                                    $valorTotal += $valor;
                                @endphp
                                <tr>
                                    <td>{{$actividad->nombre_actividad}}</td>
                                    <td>{{$valor}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Total</td>
                                    <td>{{$valorTotal}}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </section>
                    <section>
                        <h3>Insumos</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Tipo movimiento</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $insumos = DB::table('movimientos_insumos')
                                ->select(
                                'insumos.nombre as nombre_insumo',
                                'movimientos_insumos.tipo as tipo_movimiento',
                                'movimientos_insumos.cantidad as cantidad_movimientos_insumos',
                                'insumos.precio as precio_insumo',
                                'movimientos_insumos.created_at as fecha_movimiento',
                                )
                                ->where('cultivo_fase_id', $fase->cultivo_fase_id)
                                ->join('insumos', 'movimientos_insumos.insumo_id', '=', 'insumos.id')
                                ->get();
                    
                                $valorTotal = 0;
                                @endphp
                                @foreach ($insumos as $insumo)
                                @php
                                $valor = $insumo->precio_insumo * $insumo->cantidad_movimientos_insumos;
                                $valorTotal += $valor;
                                @endphp
                                <tr>
                                    <td>{{$insumo->nombre_insumo}}</td>
                                    <td>{{$insumo->tipo_movimiento ? "Devolución" : "Salida"}}</td>
                                    <td>{{$insumo->cantidad_movimientos_insumos}}</td>
                                    <td>{{$insumo->precio_insumo}}</td>
                                    <td>{{$valor}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">Total</td>
                                    <td>{{$valorTotal}}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </section>
                </div>
            @endforeach
        </section>
        
    </main>
</body>
</html>