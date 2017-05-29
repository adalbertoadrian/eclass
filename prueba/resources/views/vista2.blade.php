@extends('layout')

@section('content')
    <script>
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(enero);
        @php $last = end($productos_enero); @endphp
        function enero() {
            var data = google.visualization.arrayToDataTable([
                ['Producto', 'Coordinadoras', 'Atenciones', 'Promedio'],
                @foreach($productos_enero as $producto_enero)
                    @if($producto_enero != $last)
                        ['{{$producto_enero["producto"]}}', {{$producto_enero["coordinadoras"]}}, {{$producto_enero["atenciones"]}}, {{$producto_enero["atenciones"] / $producto_enero["coordinadoras"]}}],
                    @elseif ($producto_enero == $last)
                    ['{{$producto_enero["producto"]}}', {{$producto_enero["coordinadoras"]}}, {{$producto_enero["atenciones"]}}, {{$producto_enero["atenciones"] / $producto_enero["coordinadoras"]}}]
                    @endif
                @endforeach
            ]);

            var options = {
                chart: {
                    title: 'Atenciones Enero',
                    subtitle: 'Relación entre numero de atenciones y coordinadoras asignadas',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('enero'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

        google.charts.setOnLoadCallback(febrero);
        @php $last = end($productos_febrero); @endphp
        function febrero() {
            var data = google.visualization.arrayToDataTable([
                ['Producto', 'Coordinadoras', 'Atenciones', 'Promedio'],
                    @foreach($productos_febrero as $producto_febrero)
                    @if($producto_febrero != $last)
                ['{{$producto_febrero["producto"]}}', {{$producto_febrero["coordinadoras"]}}, {{$producto_febrero["atenciones"]}}, {{$producto_febrero["atenciones"] / $producto_febrero["coordinadoras"]}}],
                    @elseif ($producto_febrero == $last)
                ['{{$producto_febrero["producto"]}}', {{$producto_febrero["coordinadoras"]}}, {{$producto_febrero["atenciones"]}}, {{$producto_febrero["atenciones"] / $producto_febrero["coordinadoras"]}}]
                @endif
                @endforeach
            ]);

            var options = {
                chart: {
                    title: 'Atenciones Febrero',
                    subtitle: 'Relación entre numero de atenciones y coordinadoras asignadas',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('febrero'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

        google.charts.setOnLoadCallback(marzo);
        @php $last = end($productos_marzo); @endphp
        function marzo() {
            var data = google.visualization.arrayToDataTable([
                ['Producto', 'Coordinadoras', 'Atenciones', 'Promedio'],
                    @foreach($productos_marzo as $producto_marzo)
                    @if($producto_marzo != $last)
                ['{{$producto_marzo["producto"]}}', {{$producto_marzo["coordinadoras"]}}, {{$producto_marzo["atenciones"]}}, {{$producto_marzo["atenciones"] / $producto_marzo["coordinadoras"]}}],
                    @elseif ($producto_marzo == $last)
                ['{{$producto_marzo["producto"]}}', {{$producto_marzo["coordinadoras"]}}, {{$producto_marzo["atenciones"]}}, {{$producto_marzo["atenciones"] / $producto_marzo["coordinadoras"]}}]
                @endif
                @endforeach
            ]);

            var options = {
                chart: {
                    title: 'Atenciones Marzo',
                    subtitle: 'Relación entre numero de atenciones y coordinadoras asignadas',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('marzo'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

        google.charts.setOnLoadCallback(abril);
        @php $last = end($productos_abril); @endphp
        function abril() {
            var data = google.visualization.arrayToDataTable([
                ['Producto', 'Coordinadoras', 'Atenciones', 'Promedio'],
                    @foreach($productos_abril as $producto_abril)
                    @if($producto_abril != $last)
                ['{{$producto_abril["producto"]}}', {{$producto_abril["coordinadoras"]}}, {{$producto_abril["atenciones"]}}, {{$producto_abril["atenciones"] / $producto_abril["coordinadoras"]}}],
                    @elseif ($producto_abril == $last)
                ['{{$producto_abril["producto"]}}', {{$producto_abril["coordinadoras"]}}, {{$producto_abril["atenciones"]}}, {{$producto_abril["atenciones"] / $producto_abril["coordinadoras"]}}]
                @endif
                @endforeach
            ]);

            var options = {
                chart: {
                    title: 'Atenciones Abril',
                    subtitle: 'Relación entre numero de atenciones y coordinadoras asignadas',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('abril'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

        google.charts.setOnLoadCallback(mayo);
        @php $last = end($productos_mayo); @endphp
        function mayo() {
            var data = google.visualization.arrayToDataTable([
                ['Producto', 'Coordinadoras', 'Atenciones', 'Promedio'],
                    @foreach($productos_mayo as $producto_mayo)
                    @if($producto_mayo != $last)
                ['{{$producto_mayo["producto"]}}', {{$producto_mayo["coordinadoras"]}}, {{$producto_mayo["atenciones"]}}, {{$producto_mayo["atenciones"] / $producto_mayo["coordinadoras"]}}],
                    @elseif ($producto_abril == $last)
                ['{{$producto_mayo["producto"]}}', {{$producto_mayo["coordinadoras"]}}, {{$producto_mayo["atenciones"]}}, {{$producto_mayo["atenciones"] / $producto_mayo["coordinadoras"]}}]
                @endif
                @endforeach
            ]);

            var options = {
                chart: {
                    title: 'Atenciones Mayo',
                    subtitle: 'Relación entre numero de atenciones y coordinadoras asignadas',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('mayo'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
    <style>
        span{
            font-size: 12px;
        }
    </style>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12 text-muted">
            <h3 class="page-header text-muted">Vista2</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="col-lg-12">
        <div id="enero"></div>
        <table class = "table">
            <thead>
                <th><span>Código</span></th>
                @foreach($productos_enero as $producto_enero)
                    <th><span>{{$producto_enero["producto"]}}</span></th>
                @endforeach
            </thead>
            <tbody>
                <tr>
                    <td><span>Coordinadoras</span></td>
                    @foreach($productos_enero as $producto_enero)
                        <td><span>{{$producto_enero["coordinadoras"]}}</span></td>
                    @endforeach
                </tr>
                <tr>
                    <td><span>Atenciones</span></td>
                    @foreach($productos_enero as $producto_enero)
                        <td><span>{{$producto_enero["atenciones"]}}</span></td>
                    @endforeach
                </tr>
                <tr>
                    <td><span>Promedio</span></td>
                    @foreach($productos_enero as $producto_enero)
                        <td><span>{{round($producto_enero["atenciones"] / $producto_enero["coordinadoras"], 2)}}</span></td>
                    @endforeach
                </tr>
            </tbody>
        </table>
        <br />
        <div id="febrero"></div>
        <table class = "table">
            <thead>
            <th><span>Código</span></th>
            @foreach($productos_febrero as $producto_febrero)
                <th><span>{{$producto_febrero["producto"]}}</span></th>
            @endforeach
            </thead>
            <tbody>
            <tr>
                <td><span>Coordinadoras</span></td>
                @foreach($productos_febrero as $producto_febrero)
                    <td><span>{{$producto_febrero["coordinadoras"]}}</span></td>
                @endforeach
            </tr>
            <tr>
                <td><span>Atenciones</span></td>
                @foreach($productos_febrero as $producto_febrero)
                    <td><span>{{$producto_febrero["atenciones"]}}</span></td>
                @endforeach
            </tr>
            <tr>
                <td><span>Promedio</span></td>
                @foreach($productos_febrero as $producto_febrero)
                    <td><span>{{round($producto_febrero["atenciones"] / $producto_febrero["coordinadoras"], 2)}}</span></td>
                @endforeach
            </tr>
            </tbody>
        </table>
        <br />
        <div id="marzo"></div>
        <table class = "table">
            <thead>
            <th><span>Código</span></th>
            @foreach($productos_marzo as $producto_marzo)
                <th><span>{{$producto_marzo["producto"]}}</span></th>
            @endforeach
            </thead>
            <tbody>
            <tr>
                <td><span>Coordinadoras</span></td>
                @foreach($productos_marzo as $producto_marzo)
                    <td><span>{{$producto_marzo["coordinadoras"]}}</span></td>
                @endforeach
            </tr>
            <tr>
                <td><span>Atenciones</span></td>
                @foreach($productos_marzo as $producto_marzo)
                    <td><span>{{$producto_marzo["atenciones"]}}</span></td>
                @endforeach
            </tr>
            <tr>
                <td><span>Promedio</span></td>
                @foreach($productos_marzo as $producto_marzo)
                    <td><span>{{round($producto_marzo["atenciones"] / $producto_marzo["coordinadoras"], 2)}}</span></td>
                @endforeach
            </tr>
            </tbody>
        </table>
        <br />
        <div id="abril"></div>
        <table class = "table">
            <thead>
            <th><span>Código</span></th>
            @foreach($productos_abril as $producto_abril)
                <th><span>{{$producto_abril["producto"]}}</span></th>
            @endforeach
            </thead>
            <tbody>
            <tr>
                <td><span>Coordinadoras</span></td>
                @foreach($productos_abril as $producto_abril)
                    <td><span>{{$producto_abril["coordinadoras"]}}</span></td>
                @endforeach
            </tr>
            <tr>
                <td><span>Atenciones</span></td>
                @foreach($productos_abril as $producto_abril)
                    <td><span>{{$producto_abril["atenciones"]}}</span></td>
                @endforeach
            </tr>
            <tr>
                <td><span>Promedio</span></td>
                @foreach($productos_abril as $producto_abril)
                    <td><span>{{round($producto_abril["atenciones"] / $producto_abril["coordinadoras"], 2)}}</span></td>
                @endforeach
            </tr>
            </tbody>
        </table>
        <br />
        <div id="mayo"></div>
        <table class = "table">
            <thead>
            <th><span>Código</span></th>
            @foreach($productos_mayo as $producto_mayo)
                <th><span>{{$producto_mayo["producto"]}}</span></th>
            @endforeach
            </thead>
            <tbody>
            <tr>
                <td><span>Coordinadoras</span></td>
                @foreach($productos_mayo as $producto_mayo)
                    <td><span>{{$producto_mayo["coordinadoras"]}}</span></td>
                @endforeach
            </tr>
            <tr>
                <td><span>Atenciones</span></td>
                @foreach($productos_mayo as $producto_mayo)
                    <td><span>{{$producto_mayo["atenciones"]}}</span></td>
                @endforeach
            </tr>
            <tr>
                <td><span>Promedio</span></td>
                @foreach($productos_mayo as $producto_mayo)
                    <td><span>{{round($producto_mayo["atenciones"] / $producto_mayo["coordinadoras"], 2)}}</span></td>
                @endforeach
            </tr>
            </tbody>
        </table>
        <br />
    </div>
</div>
@endsection