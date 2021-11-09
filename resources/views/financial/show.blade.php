@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Finanças do condomínio <b>{{$condo->name}}</b></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <a class="btn btn-block btn-primary" href="{{route('financials.create',$condo->id)}}">Cadastrar nova conta</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <table class="table" id="tabela-financas">
                                    <th><strong>Prestador de serviço</strong></th>
                                    <th><strong>Conta</strong></th>
                                    <th>Tipo</th>
                                    <th><strong>Data</strong></th>
                                    <th><strong>Valor</strong></th>
                                    <th><strong>Ações</strong></th>
                                        @foreach ($financials as $financial)
                                            <tr>
                                                <td><a href="{{route('service-providers.show',$financial->service_provider->id)}}">
                                                        {{$financial->service_provider->name}}
                                                    </a>
                                                </td>
                                                <td>{{$financial->bill_name}}</td>
                                                <td>{{$financial->bill_type}}</td>
                                                <td>{{$financial->bill_month}}</td>
                                                <td>{{$financial->bill_value}}</td>
                                                <td>
                                                    <a target="_blank" href="{{asset("$financial->bill_path")}}"
                                                       class="btn btn-xs btn-default text-blue mx-1"
                                                       title="{{__('Download')}}">
                                                        <i class="fa fa-lg fa-fw fa-download"></i>
                                                    </a>
                                                    <a href="{{route('financials.details',$financial)}}"
                                                       class="btn btn-xs btn-default text-blue mx-1"
                                                       title="{{__('Ver detalhes')}}">
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
            </div>
        </div>
    </div>
@stop
