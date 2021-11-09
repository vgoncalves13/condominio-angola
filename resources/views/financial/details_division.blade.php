@extends('adminlte::page')

@section('title_postfix', 'Finanças - Detalhes - Divisão')

@section('content_header')
    <h1 class="m-0 text-dark">Detalhes finanças</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <h3>Valor total:<strong>{{$financial->bill_value}}</strong></h3>
                                <table class="table">
                                    <th>Complemento</th>
                                    <th>Valor a pagar</th>
                                @foreach($financial->condo->residences as $residence)
                                    <tr>
                                        <td>{{$residence->complement}}</td>
                                        <td>{{sprintf('%01.2f Kz',$division)}}</td>
                                    </tr>
                                @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
