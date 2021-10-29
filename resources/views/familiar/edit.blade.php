@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Familiares</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Editar</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{route('familiars.update',$familiar->id)}}" role="form">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input name="name" type="text" class="form-control" id="name"
                            placeholder="Nome do familiar"
                            value="{{$familiar->name}}">
                        </div>
                        <div class="form-group">
                            <label for="age">Idade</label>
                            <input name="age" type="text" class="form-control" id="age"
                            placeholder="Idade do familiar"
                            value="{{$familiar->age}}">
                        </div>
                        <div class="form-group">
                            <label for="relationship">Parentesco</label>
                            <input name="relationship" type="text" class="form-control" id="relationship"
                            placeholder="Parentesco"
                            value="{{$familiar->relationship}}">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
