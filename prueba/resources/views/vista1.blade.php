@extends('layout')

@section('content')
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(enero);
        function enero() {
            var data = google.visualization.arrayToDataTable([
                ['Coordinadora', 'Atenciones'],
                ['Coordinadora1',    {{$coordinadoras_enero["primero"]["atenciones"]}}],
                ['Coordinadora2',    {{$coordinadoras_enero["ultimo"]["atenciones"]}}]
            ]);

            var options = {
                title: 'Atenciones Enero',
                pieHole: 0.4,
                pieSliceText: 'value',
                tooltip: {textStyle: {color: '#FF0000'}, showColorCode: true},
                width: 450,
            };

            var chart = new google.visualization.PieChart(document.getElementById('enero'));
            chart.draw(data, options);
        }
        google.charts.setOnLoadCallback(febrero);
        function febrero() {
            var data = google.visualization.arrayToDataTable([
                ['Coordinadora', 'Atenciones'],
                ['Coordinadora1',    {{$coordinadoras_febrero["primero"]["atenciones"]}}],
                ['Coordinadora2',    {{$coordinadoras_febrero["ultimo"]["atenciones"]}}]
            ]);

            var options = {
                title: 'Atenciones Febrero',
                pieHole: 0.4,
                pieSliceText: 'value',
                tooltip: {textStyle: {color: '#FF0000'}, showColorCode: true},
                width: 450,
            };

            var chart = new google.visualization.PieChart(document.getElementById('febrero'));
            chart.draw(data, options);
        }
        google.charts.setOnLoadCallback(marzo);
        function marzo() {
            var data = google.visualization.arrayToDataTable([
                ['Coordinadora', 'Atenciones'],
                ['Coordinadora1',    {{$coordinadoras_marzo["primero"]["atenciones"]}}],
                ['Coordinadora2',    {{$coordinadoras_marzo["ultimo"]["atenciones"]}}]
            ]);

            var options = {
                title: 'Atenciones Marzo',
                pieHole: 0.4,
                pieSliceText: 'value',
                tooltip: {textStyle: {color: '#FF0000'}, showColorCode: true},
                width: 450,
            };

            var chart = new google.visualization.PieChart(document.getElementById('marzo'));
            chart.draw(data, options);
        }
        google.charts.setOnLoadCallback(abril);
        function abril() {
            var data = google.visualization.arrayToDataTable([
                ['Coordinadora', 'Atenciones'],
                ['Coordinadora1',    {{$coordinadoras_abril["primero"]["atenciones"]}}],
                ['Coordinadora2',    {{$coordinadoras_abril["ultimo"]["atenciones"]}}]
            ]);

            var options = {
                title: 'Atenciones Abril',
                pieHole: 0.4,
                pieSliceText: 'value',
                tooltip: {textStyle: {color: '#FF0000'}, showColorCode: true},
                width: 450,
            };

            var chart = new google.visualization.PieChart(document.getElementById('abril'));
            chart.draw(data, options);
        }
        google.charts.setOnLoadCallback(mayo);
        function mayo() {
            var data = google.visualization.arrayToDataTable([
                ['Coordinadora', 'Atenciones'],
                ['Coordinadora1',    {{$coordinadoras_marzo["primero"]["atenciones"]}}],
                ['Coordinadora2',    {{$coordinadoras_marzo["ultimo"]["atenciones"]}}]
            ]);

            var options = {
                title: 'Atenciones Mayo',
                pieHole: 0.4,
                pieSliceText: 'value',
                tooltip: {textStyle: {color: '#FF0000'}, showColorCode: true},
                width: 450,
            };

            var chart = new google.visualization.PieChart(document.getElementById('mayo'));
            chart.draw(data, options);
        }
    </script>
    <style>
        table th,
        span {
            font-size: 12px;
        }
    </style>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12 text-muted">
                <h3 class="page-header text-muted">Vista1</h3>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-12">
            <table>
                <tr>
                    <td>
                        <table class="table">
                            <caption>Atenciones Enero</caption>
                            <thead>
                                <th>Coordinadora</th>
                                <th>Código</th>
                                <th>Cantidad</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span>Coordinadora1</span></td>
                                    <td><span>{{$coordinadoras_enero["primero"]["coordinadora"]}}</span></td>
                                    <td><span>{{$coordinadoras_enero["primero"]["atenciones"]}}</span></td>
                                </tr>
                                <tr>
                                    <td><span>Coordinadora2</span></td>
                                    <td><span>{{$coordinadoras_enero["ultimo"]["coordinadora"]}}</span></td>
                                    <td><span>{{$coordinadoras_enero["ultimo"]["atenciones"]}}</span></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><div id="enero"></div></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td>
                        <table class="table">
                            <caption>Atenciones Febrero</caption>
                            <thead>
                                <th>Coordinadora</th>
                                <th>Código</th>
                                <th>Cantidad</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td><span>Coordinadora1</span></td>
                                <td><span>{{$coordinadoras_febrero["primero"]["coordinadora"]}}</span></td>
                                <td><span>{{$coordinadoras_febrero["primero"]["atenciones"]}}</span></td>
                            </tr>
                            <tr>
                                <td><span>Coordinadora2</span></td>
                                <td><span>{{$coordinadoras_febrero["ultimo"]["coordinadora"]}}</span></td>
                                <td><span>{{$coordinadoras_febrero["ultimo"]["atenciones"]}}</span></td>
                            </tr>
                            <tr>
                                <td colspan="3"><div id="febrero"></div></td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="table">
                            <caption>Atenciones Marzo</caption>
                            <thead>
                                <th>Coordinadora</th>
                                <th>Código</th>
                                <th>Cantidad</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td><span>Coordinadora1</span></td>
                                <td><span>{{$coordinadoras_marzo["primero"]["coordinadora"]}}</span></td>
                                <td><span>{{$coordinadoras_marzo["primero"]["atenciones"]}}</span></td>
                            </tr>
                            <tr>
                                <td><span>Coordinadora2</span></td>
                                <td><span>{{$coordinadoras_marzo["ultimo"]["coordinadora"]}}</span></td>
                                <td><span>{{$coordinadoras_marzo["ultimo"]["atenciones"]}}</span></td>
                            </tr>
                            <tr>
                                <td colspan="3"><div id="marzo"></div></td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                    <td>
                        <table class="table">
                            <thead>
                                <caption>Atenciones Abril</caption>
                                <th>Coordinadora</th>
                                <th>Código</th>
                                <th>Cantidad</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td><span>Coordinadora1</span></td>
                                <td><span>{{$coordinadoras_abril["primero"]["coordinadora"]}}</span></td>
                                <td><span>{{$coordinadoras_abril["primero"]["atenciones"]}}</span></td>
                            </tr>
                            <tr>
                                <td><span>Coordinadora2</span></td>
                                <td><span>{{$coordinadoras_abril["ultimo"]["coordinadora"]}}</span></td>
                                <td><span>{{$coordinadoras_abril["ultimo"]["atenciones"]}}</span></td>
                            </tr>
                            <tr>
                                <td colspan="3"><div id="abril"></div></td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="table">
                            <caption>Atenciones Mayo</caption>
                            <thead>
                                <th>Coordinadora</th>
                                <th>Código</th>
                                <th>Cantidad</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td><span>Coordinadora1</span></td>
                                <td><span>{{$coordinadoras_mayo["primero"]["coordinadora"]}}</span></td>
                                <td><span>{{$coordinadoras_mayo["primero"]["atenciones"]}}</span></td>
                            </tr>
                            <tr>
                                <td><span>Coordinadora2</span></td>
                                <td><span>{{$coordinadoras_mayo["ultimo"]["coordinadora"]}}</span></td>
                                <td><span>{{$coordinadoras_mayo["ultimo"]["atenciones"]}}</span></td>
                            </tr>
                            <tr>
                                <td colspan="3"><div id="mayo"></div></td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection