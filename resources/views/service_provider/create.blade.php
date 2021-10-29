@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Prestadores de serviços</h1>
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
                <form method="POST" action="{{route('service-providers.store')}}" role="form">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nome da empresa</label>
                            <input name="name" type="text" class="form-control" id="name"
                                   placeholder="Nome da empresa">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary" >Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
