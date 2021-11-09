@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Detalhes do condomínio</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{$condo->name}}</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-9">
                            <p><strong>Nome condomínio: </strong> {{$condo->name}}</p>
                            <p><strong>Endereço: </strong> {{$condo->address->address}}</p>
                            <p><strong>Endereço 2: </strong> {{$condo->address->address2}}</p>
                            <p><strong>Código Postal: </strong> {{$condo->address->postal_code}}</p>
                            <p><strong>Distrito: </strong> {{$condo->address->district}}</p>
                            <p><strong>Cidade: </strong> {{$condo->address->city->city}}</p>
                        </div>
                        <div class="col-12 col-md-3">
                            @isset($condo->file->file_path)
                                <img width="200" height="200" src="/{{$condo->file->file_path}}">
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <a class="btn btn-flat btn-info" href="{{route('files.create',$condo->id)}}">Adicionar Logo</a>
                    <a class="btn btn-flat btn-info" href="{{route('residences.create',$condo->id)}}">Adicionar residência</a>
                    <a class="btn btn-flat btn-info" href="{{route('financials.show',$condo->id)}}">Finanças do Condomínio</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table">
                            <tr>
                                <th>Complemento</th>
                                <th>Nome do responsável</th>
                                <th>Documento</th>
                            </tr>
                                @foreach ($condo->residences as $residence)
                                    <tr>
                                        <td>{{$residence->complement}}</td>
                                        <td>@isset($residence->rent->user->name){{$residence->rent->user->name}}@endisset</td>
                                        <td>@isset($residence->rent->user->document){{$residence->rent->user->document}}@endisset</td>
                                        <td>
                                        <a class="btn btn-flat btn-info btn-sm" href="{{route('residences.show',$residence->id)}}">Ver</a>
                                        <a class="btn btn-flat btn-info btn-sm" href="{{route('residences.edit',$residence->id)}}">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
