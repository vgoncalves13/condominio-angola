@extends('adminlte::page')

@section('title_postfix', 'Finanças - Detalhes - Individual')

@section('content_header')
    <h1 class="m-0 text-dark">Detalhes finanças</h1>
@stop
@section('validation_error')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">

                                <h3>Valor total:<strong>{{$financial->bill_value}}</strong></h3>
                                <form action="{{route('financial_residence.store')}}" method="POST">
                                    <input type="hidden" name="financial_id" value="{{$financial->id}}">
                                    @csrf
                                    <table class="table">
                                        <th>Complemento</th>
                                        <th>Leitura medidor</th>
                                        @foreach($financial->condo->residences as $residence)
                                            <tr>
                                                <td>{{$residence->complement}}</td>
                                                <td>
                                                    <input name="residence_id[{{$residence->id}}]"
                                                           class="form-control"
                                                           type="text"
                                                   @foreach($financial->residences as $spent)
                                                       @if($spent->pivot->residence_id == $residence->id)
                                                           value="{{$spent->pivot->spent}}"
                                                       @endif
                                                   @endforeach
                                                    >
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary btn-flat" type="submit">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@stop
