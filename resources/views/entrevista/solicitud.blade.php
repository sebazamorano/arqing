@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-head">
                    <h4 class="panel-heading">Solicitud de Entrevista</h4>
                </div>
                <div class="panel-body">
                    <form action="{{ route('solicitud') }}" class="form-horizontal" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Nombre" class="control-label col-lg-2">Jefe de Proyecto</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="Nombre" name="jefe_proyecto" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Empresa" class="control-label col-lg-2">Empresa</label>
                            <div class="col-lg-4">
                                <select class="form-control" id="Empresa" name="Empresa" required>
                                    <option value="">Selecciona tu empresa</option>
                                    @foreach($empresas as $empresa)
                                        <option value="{{ $empresa->Empresa }}">{{ $empresa->Empresa }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Descripcion" class="control-label col-lg-2">Descripcion</label>
                            <div class="col-lg-4">
                                <textarea class="form-control" name="descripcion" id="Descripcion" cols="30" rows="10" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Empresa" class="control-label col-lg-2">Criticidad</label>
                            <div class="col-lg-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="radio" name="criticidad" value="Alta" required> Alta
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="radio" name="criticidad" value="Media" required> Media
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="radio" name="criticidad" value="Baja" required> Baja
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-2">
                                <button class="btn btn-success">Guardar</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection