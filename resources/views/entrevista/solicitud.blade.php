@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-head">
                    <h4 class="panel-heading">Solicitud de Entrevista</h4>
                </div>
                <div class="panel-body">
                    <form action="" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Nombre" class="control-label col-lg-2">Nombre</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="Nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Correo" class="control-label col-lg-2">Correo</label>
                            <div class="col-lg-4">
                                <input type="email" class="form-control" id="Correo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Empresa" class="control-label col-lg-2">Empresa</label>
                            <div class="col-lg-4">
                                <select class="form-control" id="Empresa">
                                    <option value="">Selecciona tu empresa</option>
                                    @foreach($empresas as $empresa)
                                        <option value="{{ $empresa->id }}">{{ $empresa->Empresa }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection