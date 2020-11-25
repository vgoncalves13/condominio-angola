@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Detalhes da residência</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{$residence->complement}}</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <p><strong>Complemento:</strong> {{$residence->complement}}</p>
                            <p><strong>Nome do responsável: </strong> {{$residence->resident->user->name}}</p>
                            <p><strong>E-mail: </strong> {{$residence->resident->user->email}}</p>
                            <p><strong>Documento: </strong> {{$residence->resident->document}}</p>
                            <p><strong>Usuário: </strong> {{$residence->resident->username}}</p>
                            <p><strong>Data de Nascimento: </strong> {{$residence->resident->birth_date}}</p>
                            <p><strong>Viaturas: </strong> {{$residence->number_cars}}</p>
                            <p><strong>Familiares: </strong> {{$residence->number_fam}}</p>
                            <p><strong>Funcionários: </strong> {{$residence->number_emp}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <h3 class="card-title">Viaturas</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                        <table class="table">
                            <tr>
                                <th>Modelo</th>
                                <th>Número Placa</th>
                                <th>Ações</th>
                            </tr>
                                @foreach ($residence->cars as $car)
                                    <tr>
                                        <td>{{$car->model}}</td>    
                                        <td>{{$car->car_plate}}</td>
                                        <td>
                                        <a class="btn btn-flat btn-info btn-sm" href="{{route('cars.edit',$car->id)}}">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <h3 class="card-title">Familiares</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                        <table class="table">
                            <tr>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Parentesco</th>
                                <th>Ações</th>
                            </tr>
                                @foreach ($residence->resident->familiars as $familiar)
                                    <tr>
                                        <td>{{$familiar->name}}</td>    
                                        <td>{{$familiar->age}}</td>
                                        <td>{{$familiar->relationship}}</td>
                                        <td>
                                        <a class="btn btn-flat btn-info btn-sm" href="{{route('familiars.edit',$familiar->id)}}">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <h3 class="card-title">Funcionários</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                        <table class="table">
                            <tr>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Função</th>
                                <th>Ações</th>
                            </tr>
                                @foreach ($residence->resident->employees as $employee)
                                    <tr>
                                        <td>{{$employee->name}}</td>    
                                        <td>{{$employee->age}}</td>
                                        <td>{{$employee->occupation}}</td>
                                        <td>
                                        <a class="btn btn-flat btn-info btn-sm" href="{{route('employees.edit',$employee->id)}}">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
