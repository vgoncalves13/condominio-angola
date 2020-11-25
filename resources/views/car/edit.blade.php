@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Viaturas</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Editar</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{route('cars.update',$car->residence_id)}}" role="form">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="model">Modelo do carro</label>
                            <input name="model" type="text" class="form-control" id="model" 
                            placeholder="Modelo"
                            value="{{$car->model}}">
                        </div>
                        <div class="form-group">
                            <label for="car_plate">Número Placa do carro</label>
                            <input name="car_plate" type="text" class="form-control" id="car_plate" 
                            placeholder="Número Placa"
                            value="{{$car->car_plate}}">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop