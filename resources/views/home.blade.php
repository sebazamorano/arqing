@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Jefe Proyecto</th>
                            <th>Empresa</th>
                            <th>Descripcion</th>
                            <th>Criticidad</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($entrevistas as $entrevista)
                        <tr>
                            <td>{{ $entrevista->jefe_proyecto }}</td>
                            <td>{{ $entrevista->Empresa }}</td>
                            <td>{{ $entrevista->descripcion }}</td>
                            <td>{{ $entrevista->criticidad }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
