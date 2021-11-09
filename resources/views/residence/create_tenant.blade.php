@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Adicionar inquilo</h1>
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
                <form method="POST" action="{{route('residences.storeTenant')}}" role="form">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                </div>
                                <h3>{{trans('message.rent_informations')}}</h3>
                                <hr/>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <x-user />
                                    </div>
                                    <div id="te" class="col-12 col-md-6">
                                        <x-complement />
                                    </div>
                                </div>
                            </div>
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
