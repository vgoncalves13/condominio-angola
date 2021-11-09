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
                                <h3>Medição total:<strong>{{$financial->reading}}</strong></h3>
                                <form action="{{route('financial_residence.store')}}" method="POST">
                                    <input type="hidden" name="financial_id" value="{{$financial->id}}">
                                    <input type="hidden" name="reading" value="{{$financial->reading}}">
                                    @csrf
                                    <table class="table">
                                        <th>Complemento</th>
                                        <th>Leitura medidor</th>
                                        <th>Total a pagar cada morada</th>
                                        @foreach($financial->condo->residences as $residence)
                                            <tr>
                                                <td>{{$residence->complement}}</td>
                                                <td>
                                                    <input name="residence_id[{{$residence->id}}]"
                                                           class="form-control"
                                                           type="number"
                                                   @foreach($financial->residences as $reading)
                                                       @if($reading->pivot->residence_id == $residence->id)
                                                           value="{{$reading->pivot->reading}}"
                                                       @endif
                                                   @endforeach
                                                    >
                                                </td>
                                                <td>
                                                    <p>
                                                           @foreach($values as $value)
                                                           @if($value['residence_id'] == $residence->id)
                                                                {{sprintf('%01.2f Kz',$value['bill_value'])}}
                                                        @endif
                                                        @endforeach
                                                    </p>
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
