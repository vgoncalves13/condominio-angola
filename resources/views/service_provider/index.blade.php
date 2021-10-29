@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Prestadores de serviços</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <a class="btn btn-block btn-primary"
               href="{{route('service-providers.create')}}">Cadastrar novo prestador</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table" id="">
                        <th>Nome prestador</th>
                        <th>Ações</th>
                            @foreach($service_providers as $provider)
                                <tr>
                                    <td>{{$provider->name}}</td>
                                    <td>
                                        <a class="btn btn-flat btn-info btn-sm"
                                           href="{{route('service-providers.show',$provider)}}">Ver</a>
                                        <a class="btn btn-flat btn-info btn-sm"
                                           href="{{route('service-providers.edit',$provider)}}">Editar</a>
                                    </td>

                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
