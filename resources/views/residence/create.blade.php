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
                        <div class="form-group">
                            <label for="complement">Complemento</label>
                            <input name="complement" type="text" class="form-control" 
                                id="complement" placeholder="Complemento" 
                            >
                            <input name="condo_id" type="hidden" value="{{$condo_id}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Nome do proprietário</label>
                            <input name="name[]" type="text" class="form-control" 
                                id="name" placeholder="Nome do proprietário"
                                 >
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail do proprietário</label>
                            <input name="email[]" type="email" class="form-control" 
                                id="email" placeholder="E-mail do proprietário"
                                 >
                        </div>
                        <div class="form-group">
                            <label for="document">Documento do proprietário</label>
                            <input name="document[]" type="text" class="form-control" 
                                id="document" placeholder="Documento do proprietário"
                                 >
                        </div>
                        <div class="form-group">
                            <label for="username">Usuário do proprietário</label>
                            <input name="username[]" type="text" class="form-control" 
                                id="username" placeholder="Usuário do proprietário"
                                 >
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Data de nascimento do proprietário</label>
                            <input name="birth_date[]" type="date" class="form-control" 
                                id="birth_date"
                                 >
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Default radio
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Second default radio
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="tenant_name">Nome do inquilino</label>
                            <input name="name[]" type="text" class="form-control" 
                                id="tenant_name" placeholder="Nome do inquilino"
                            >
                        </div>
                        <div class="form-group">
                            <label for="tenant_email">E-mail do inquilino</label>
                            <input name="email[]" type="email" class="form-control" 
                                id="tenant_email" placeholder="E-mail do inquilino"
                            >
                        </div>
                        <div class="form-group">
                            <label for="tenant_document">Documento do inquilino</label>
                            <input name="document[]" type="text" class="form-control" 
                                id="tenant_document" placeholder="Documento do inquilino"
                            >
                        </div>
                        <div class="form-group">
                            <label for="tenant_username">Usuário do inquilino</label>
                            <input name="username[]" type="text" class="form-control" 
                                id="tenant_username" placeholder="Usuário do inquilino"
                            >
                        </div>
                        <div class="form-group">
                            <label for="tenant_birthdate">Data de nascimento do inquilino</label>
                            <input name="birthdate[]" type="date" class="form-control" 
                                id="tenant_birthdate"
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
