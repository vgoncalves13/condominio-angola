@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Viaturas</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{route('cars.store')}}" role="form">
                    @csrf
                    @for($i=0; $i<$number_cars; $i++)
                    <div class="card-body">
                        <div class="form-group">
                            <label for="model">Modelo do carro {{$i+1}}</label>
                            <input name="model[]" type="text" class="form-control" id="model" placeholder="Modelo">
                        </div>
                        <div class="form-group">
                            <label for="car_plate">Número Placa do carro {{$i+1}}</label>
                            <input name="car_plate[]" type="text" class="form-control" id="car_plate" placeholder="Número Placa">
                        </div>
                    </div>
                    @endfor
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
