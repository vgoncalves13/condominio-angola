@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Detalhes do condomínio</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{$condo->name}}</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <p><strong>Nome condomínio:</strong> {{$condo->name}}</p>
                            <p><strong>Endereço: </strong> {{$condo->address->address}}</p>
                            <p><strong>Endereço 2: </strong> {{$condo->address->address2}}</p>
                            <p><strong>Código Postal: </strong> {{$condo->address->postal_code}}</p>
                            <p><strong>Distrito: </strong> {{$condo->address->district}}</p>
                            <p><strong>Cidade: </strong> {{$condo->address->city->city}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <a class="btn btn-flat btn-info" href="{{route('residences.create',$condo->id)}}">Adicionar residência</a>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table">
                            <th>Complemento</th>
                            <th>Nome do responsável</th>
                            <th>Documento</th>
                                @foreach ($residences as $residence)
                                    <td>{{$residence->complement}}</td>    
                                    <td>{{$residence->resident->user->name}}</td>
                                    <td>{{$residence->resident->document}}</td>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
