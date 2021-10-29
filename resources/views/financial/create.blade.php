@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Financeiro</h1>
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
                <form method="POST" action="{{route('financials.store')}}" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="col-12 col-lg-9">
                            <div class="form-group">
                                <label for="city">Prestador de serviço</label>
                                <select class="form-control {{ $errors->has('service_provider_id') ? 'is-invalid' : '' }}"
                                        name="service_provider_id" id="service_provider_id">
                                    <option value="">Selecione um provedor</option>
                                    @foreach ($service_providers as $key => $value)
                                        <option {{old('service_provider_id', null) == $key ? 'selected' : ''}}
                                                value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('service_provider_id') }}</strong>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bill_type">Tipo de conta</label>
                                <select name="bill_type" class="form-control {{ $errors->has('bill_type') ? 'is-invalid' : '' }}"
                                        id="bill_type">
                                    <option value="">Selecione...</option>
                                    <option {{old('bill_type', null) == 'division' ? 'selected' : ''}} value="division">Divisão</option>
                                    <option {{old('bill_type', null) == 'individual' ? 'selected' : ''}} value="individual">Individual</option>
                                </select>
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('bill_type') }}</strong>
                                </div>
                                <small id="bill_type" class="form-text text-muted">
                                    Contas do tipo "Divisão" serão distribuídas de forma igual para todas as moradas.<br>
                                    Contas do tipo "Individual" serão distribuídas de acordo com o consumo de cada morada.
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="bill_name">Nome da conta</label>
                                <input name="bill_name"
                                       type="text"
                                       class="form-control {{ $errors->has('bill_name') ? 'is-invalid' : '' }}"
                                       id="bill_name" value="{{old('bill_name')}}" placeholder="Nome da conta">
                                @if($errors->has('bill_name'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('bill_name') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="bill_month">Data</label>
                                <input name="bill_month" type="date" class="form-control" id="bill_month">
                            </div>
                            <div class="form-group">
                                <label for="bill_value">Valor</label>
                                <input name="bill_value" type="number" min="1" step="any"
                                       class="form-control" id="bill_value" placeholder="Valor">
                            </div>
                            <label>Upload do Boleto</label>
                            <input name="condo_id" type="hidden" value="{{$condo_id}}">
                            <div class="form-group">
                                <input type="file" name ="file" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" >Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
