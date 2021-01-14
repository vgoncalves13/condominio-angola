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
                <form method="POST" action="{{route('financial.store')}}" role="form">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="bill_name">Nome da conta</label>
                            <input name="bill_name" type="text" class="form-control" id="bill_name" placeholder="Nome da conta">
                        </div>
                        <div class="form-group">
                            <label for="bill_month">Data</label>
                            <input name="bill_month" type="date" class="form-control" id="bill_month">
                        </div>
                        <div class="form-group">
                            <label for="bill_value">Valor</label>
                            <input name="bill_value" type="number" min="1" step="any" class="form-control" id="bill_value" placeholder="Valor">
                        </div>
                        <div class="form-group">
                            <label for="condo_percentage">Porcentagem</label>
                            <input name="condo_percentage" type="text" class="form-control" id="condo_percentage" placeholder="Porcentagem">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Upload dos boletos
                </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{}}" role="form" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <!-- /.card-body -->
                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
