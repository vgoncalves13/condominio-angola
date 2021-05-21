@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Adicionar residência</h1>
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
                <form method="POST" action="{{route('residences.store')}}" role="form">
                    @csrf
                    <div class="card-body">
                        <label>O responsável é:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="owner" value="{{$type = 'Proprietário'}}" checked>
                            <label class="form-check-label" for="owner">
                                <p>Proprietário</p>
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="tenant" value="{{$type = 'Inquilino'}}">
                            <label class="form-check-label" for="tenant">
                                <p>Inquilino</p>
                            </label>
                        </div>
                        <label>A residência está:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="state" id="ocuppied" value="{{$state = 'OCUPADA'}}" checked>
                            <label class="form-check-label" for="owner">
                                <p>Ocupada</p>
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="state" id="empty" value="{{$state = 'VAZIA'}}">
                            <label class="form-check-label" for="empty">
                                <p>Vazia</p>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="complement">Complemento</label>
                            <input name="complement" type="text" class="form-control" 
                                id="complement" placeholder="Complemento" 
                            >
                            <input name="condo_id" type="hidden" value="{{$condo_id}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input name="name" type="text" class="form-control" 
                                id="name" placeholder="Nome"
                                 >
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input name="email" type="email" class="form-control" 
                                id="email" placeholder="E-mail"
                                 >
                        </div>
                        <div class="form-group">
                            <label for="document">Documento</label>
                            <input name="document" type="text" class="form-control" 
                                id="document" placeholder="Documento"
                                 >
                        </div>
                        <div class="form-group">
                            <label for="username">Usuário</label>
                            <input name="username" type="text" class="form-control" 
                                id="username" placeholder="Usuário"
                                 >
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Data de nascimento</label>
                            <input name="birth_date" type="date" class="form-control" 
                                id="birth_date"
                                 >
                        </div>
                        <div class="form-group">
                            <label for="number_cars">Viaturas</label>
                            <input name="number_cars" type="number" class="form-control" 
                                id="number_cars" min='0' max='5'
                            > 
                        </div>
                        <div class="form-group">
                            <label for="number_fam">Familiares</label>
                            <input name="number_fam" type="number" class="form-control" 
                                id="number_fam" min='0'
                            > 
                        </div>
                        <div class="form-group">
                            <label for="number_emp">Funcionários</label>
                            <input name="number_emp" type="number" class="form-control" 
                                id="number_emp" min='0'
                            > 
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
