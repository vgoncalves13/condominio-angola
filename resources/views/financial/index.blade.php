@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Financeiro</h1>
@stop
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table" id="tabela-financeiro">
                        <th>Nome</th>
                        <th>Tipo conta</th>
                        <th>Data</th>
                        <th>Valor</th>
                        <th>Ações</th>
                            @foreach($financials as $financial)
                                <tr>
                                    <td>{{$financial->bill_name}}</td>
                                    <td>{{$financial->bill_type}}</td>
                                    <td>{{$financial->bill_month}}</td>
                                    <td>{{$financial->bill_value}}</td>
                                    <td>
                                        <a target="_blank" href="{{asset("$financial->bill_path")}}"
                                           class="btn btn-xs btn-default text-teal mx-1 shadow"
                                           title="{{__('Visualizar')}}">
                                            <i class="fa fa-lg fa-fw fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
