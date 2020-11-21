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
                            <p><strong>Familiares: </strong> 
                            <p><strong>Funcionários: </strong> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
