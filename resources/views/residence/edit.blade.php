@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Residências</h1>
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
                <form method="POST" action="{{route('residences.update',$residence->id)}}" role="form">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="complement">Complemento</label>
                            <input name="complement" type="text" class="form-control"
                                id="complement"
                                placeholder="Complemento"
                                value="{{$residence->complement}}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="name">Nome do responsável</label>
                            <input name="name" type="name" class="form-control"
                                id="name"
                                placeholder="Nome do responsável"
                                value="{{$residence->user->name}}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input name="email" type="email" class="form-control"
                                id="email"
                                placeholder="E-mail"
                                value="{{$residence->user->email}}"
                                >
                        </div>
                        <div class="form-group">
                            <label for="document">Documento</label>
                            <input name="document" type="text" class="form-control"
                                id="document"
                                placeholder="Documento"
                                value="{{$residence->user->document}}"
                                >
                        </div>
                        <div class="form-group">
                            <label for="username">Usuário</label>
                            <input name="username" type="text" class="form-control"
                                id="username"
                                placeholder="Usuário"
                                value="{{$residence->username}}"
                                >
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Data de Nascimento</label>
                            <input name="birth_date" type="date" class="form-control"
                                id="birth_date"
                                value="{{$residence->user->birth_date}}"
                                >
                        </div>
                        <div class="form-group">
                            <label for="number_cars">Viaturas</label>
                            <input name="number_cars" type="number" class="form-control"
                                id="number_cars" min="0" max="5"
                                value="{{$residence->number_cars}}"
                                >
                        </div>
                        <div class="form-group">
                            <label for="number_fam">Familiares</label>
                            <input name="number_fam" type="number" class="form-control"
                                id="number_fam" min="0"
                                value="{{$residence->number_fam}}"
                                >
                        </div>
                        <div class="form-group">
                            <label for="number_emp">Funcionários</label>
                            <input name="number_emp" type="number" class="form-control"
                                id="number_emp" min="0"
                                value="{{$residence->number_emp}}"
                                >
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
