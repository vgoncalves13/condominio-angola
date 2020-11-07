@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Condomínios</h1>
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
                <form method="POST" action="{{route('condos.update',$condo->id)}}" role="form">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nome condomínio</label>
                            <input name="name" type="text" class="form-control" 
                                id="name" 
                                placeholder="Nome condomínio"
                                value="{{$condo->name}}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input name="email" type="email" class="form-control" 
                                id="email" 
                                placeholder="E-mail do condomínio"
                                value="{{$condo->email}}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="address">Endereço</label>
                            <input name="address" type="text" class="form-control" 
                                id="address" 
                                placeholder="Endereço"
                                value="{{$condo->address->address}}"
                                >
                        </div>
                        <div class="form-group">
                            <label for="address2">Endereço 2</label>
                            <input name="address2" type="text" class="form-control" 
                                id="address2" 
                                placeholder="Endereço 2"
                                value="{{$condo->address->address2}}"
                                >
                        </div>
                        <div class="form-group">
                            <label for="district">Distrito</label>
                            <input name="district" type="text" class="form-control" 
                                id="district" 
                                placeholder="Distrito"
                                value="{{$condo->address->district}}"
                                >
                        </div>
                        <div class="form-group">
                            <label for="postal_code">Código Postal</label>
                            <input name="postal_code" type="text" class="form-control" 
                                id="postal_code" 
                                placeholder="Código Postal"
                                value="{{$condo->address->postal_code}}"
                                >
                        </div>
                        <div class="form-group">
                            <label for="city">Cidade</label>
                            <select class="form-control" name="city_id" id="city">
                                @foreach ($cities as $key => $value)
                                    <option {{ $key == $condo->address->city_id ? 'selected':'' }} value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
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
