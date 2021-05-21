@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Financeiro</h1>
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
                <form method="POST" action="{{route('financials.store')}}" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="bill_name">Condomínio e conta</label>
                            <input name="bill_name" type="text" class="form-control" id="bill_name" placeholder="Nome do condomínio e  da conta">
                        </div>
                        <div class="form-group">
                            <label for="bill_month">Data</label>
                            <input name="bill_month" type="date" class="form-control" id="bill_month">
                        </div>
                        <div class="form-group">
                            <label for="bill_value">Valor</label>
                            <input name="bill_value" type="number" min="1" step="any" class="form-control" id="bill_value" placeholder="Valor">
                        </div>
                        <label>Upload do Boleto</label>
                        <input name="condo_id" type="hidden" value="{{$condo_id}}">
                        <div class="form-group">
                            <input type="file" name ="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary" >Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
