@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Funcionários</h1>
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
                <form method="POST" action="{{route('employees.store')}}" role="form">
                    @csrf
                    @for($i=0; $i<$number_emp; $i++)
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nome {{$i+1}}</label>
                            <input name="name[]" type="text" class="form-control" id="name" placeholder="Nome do funcionário">
                        </div>
                        <div class="form-group">
                            <label for="age">Idade {{$i+1}}</label>
                            <input name="age[]" type="text" class="form-control" id="age" placeholder="Idade do funcionário">
                        </div>
                        <div class="form-group">
                            <label for="occupation">Função {{$i+1}}</label>
                            <input name="occupation[]" type="text" class="form-control" id="occupation" placeholder="Função">
                        </div>
                    </div>
                    @endfor
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
