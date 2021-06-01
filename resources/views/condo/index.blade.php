@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Condomínios</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <a class="btn btn-block btn-primary" href="{{route('condos.create')}}">Cadastrar novo condomínio</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table" id="tabela-condominios">
                        <th>Nome condomínio</th>
                        <th>Endereço</th>
                        <th>Endereço 2</th>
                        <th>Distrito</th>
                        <th>Cidade</th>
                        <th>Ações</th>
                            @foreach($condos as $condo)
                                <tr>
                                    <td>{{$condo->name}}</td>
                                    <td>{{$condo->address->address}}</td>
                                    <td>{{$condo->address->address2}}</td>
                                    <td>{{$condo->address->district}}</td>
                                    <td>{{$condo->address->city->city}}</td>
                                    <td>
                                        <a class="btn btn-flat btn-info btn-sm" href="{{route('condos.show',$condo)}}">Ver</a>
                                        <a class="btn btn-flat btn-info btn-sm" href="{{route('condos.edit',$condo)}}">Editar</a>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
