@extends('layout')

@section('content')
    <script>
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(enero);
        @php $last = end($productos_enero); @endphp
        function enero() {
            var data = google.visualization.arrayToDataTable([
                ['Producto', 'Coordinadoras', 'Atenciones'],
                @foreach($productos_enero as $producto_enero)
                    @if($producto_enero != $last)
                        ['{{$producto_enero["producto"]}}', {{$producto_enero["coordinadoras"]}}, {{$producto_enero["atenciones"]}}],
                    @elseif ($producto_enero == $last)
                    ['{{$producto_enero["producto"]}}', {{$producto_enero["coordinadoras"]}}, {{$producto_enero["atenciones"]}}]
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
                ['Producto', 'Coordinadoras', 'Atenciones'],
                    @foreach($productos_febrero as $producto_febrero)
                    @if($producto_febrero != $last)
                ['{{$producto_febrero["producto"]}}', {{$producto_febrero["coordinadoras"]}}, {{$producto_febrero["atenciones"]}}],
                    @elseif ($producto_febrero == $last)
                ['{{$producto_febrero["producto"]}}', {{$producto_febrero["coordinadoras"]}}, {{$producto_febrero["atenciones"]}}]
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
                ['Producto', 'Coordinadoras', 'Atenciones'],
                    @foreach($productos_marzo as $producto_marzo)
                    @if($producto_marzo != $last)
                ['{{$producto_marzo["producto"]}}', {{$producto_marzo["coordinadoras"]}}, {{$producto_marzo["atenciones"]}}],
                    @elseif ($producto_marzo == $last)
                ['{{$producto_marzo["producto"]}}', {{$producto_marzo["coordinadoras"]}}, {{$producto_marzo["atenciones"]}}]
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
                ['Producto', 'Coordinadoras', 'Atenciones'],
                    @foreach($productos_abril as $producto_abril)
                    @if($producto_abril != $last)
                ['{{$producto_abril["producto"]}}', {{$producto_abril["coordinadoras"]}}, {{$producto_abril["atenciones"]}}],
                    @elseif ($producto_abril == $last)
                ['{{$producto_abril["producto"]}}', {{$producto_abril["coordinadoras"]}}, {{$producto_abril["atenciones"]}}]
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
                ['Producto', 'Coordinadoras', 'Atenciones'],
                    @foreach($productos_mayo as $producto_mayo)
                    @if($producto_mayo != $last)
                ['{{$producto_mayo["producto"]}}', {{$producto_mayo["coordinadoras"]}}, {{$producto_mayo["atenciones"]}}],
                    @elseif ($producto_abril == $last)
                ['{{$producto_mayo["producto"]}}', {{$producto_mayo["coordinadoras"]}}, {{$producto_mayo["atenciones"]}}]
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
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12 text-muted">
            <h3 class="page-header text-muted">Vista2</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="col-lg-12">
        <div id="enero"></div>
        <div id="febrero"></div>
        <div id="marzo"></div>
        <div id="abril"></div>
        <div id="mayo"></div>
    </div>
</div>
@endsection