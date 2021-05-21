@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Finanças do condomínio <b>{{$condo_name->name}}</b></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <table class="table" id="tabela-financas">
                                    <th><p><strong>Conta</strong> </p></th>
                                    <th><p><strong>Data</strong> </p></th>
                                    <th><p><strong>Valor</strong> </p></th>
                                        @foreach ($financials as $financial)
                                            <tr>
                                                <td>{{$financial->bill_name}}</td>    
                                                <td>{{$financial->bill_month}}</td>
                                                <td>{{$financial->bill_value}}</td>
                                                <td>    
                                                    <a href='{{ asset("$financial->bill_path") }}'>Ver</a>
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
    </div>
@stop
