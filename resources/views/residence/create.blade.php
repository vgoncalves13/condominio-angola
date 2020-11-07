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
