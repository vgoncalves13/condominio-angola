@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Funcionários</h1>
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
                <form method="POST" action="{{route('employees.update',$employee->id)}}" role="form">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input name="name" type="text" class="form-control" id="name"
                            placeholder="Nome do funcionário"
                            value="{{$employee->name}}">
                        </div>
                        <div class="form-group">
                            <label for="age">Idade</label>
                            <input name="age" type="text" class="form-control" id="age"
                            placeholder="Idade do funcionário"
                            value="{{$employee->age}}">
                        </div>
                        <div class="form-group">
                            <label for="occupation">Função</label>
                            <input name="occupation" type="text" class="form-control" id="occupation"
                            placeholder="Função"
                            value="{{$employee->occupation}}">
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
