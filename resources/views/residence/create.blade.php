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
                            <label for="name">Nome responsável</label>
                            <input name="name" type="text" class="form-control" 
                                id="name" placeholder="Nome responsável"
                            >
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input name="email" type="text" class="form-control" 
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
                            <label for="user">Usuário</label>
                            <input name="user" type="text" class="form-control" 
                                id="user" placeholder="Usuário"
                            >
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Data de Nascimento</label>
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
