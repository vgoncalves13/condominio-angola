@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Finanças do condomínio</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <table class="table" id="tabela-condominios">
                                    <th><p><strong>Conta</strong> </p></th>
                                    <th><p><strong>Data</strong> </p></th>
                                    <th><p><strong>Valor</strong> </p></th>
                                    <th><p><strong>Porcentagem</strong> </p></th>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
