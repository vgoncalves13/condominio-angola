@extends('adminlte::page')

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
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 d-flex">
                                        <label>O responsável é:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="owner" id="owner" value="owner"
                                                {{ old('owner') == "owner" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="owner">
                                                <p>Proprietário</p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="owner" id="tenant" value="tenant"
                                                {{ old('owner') == "tenant" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="tenant">
                                                <p>Inquilino</p>
                                            </label>
                                        </div>
                                        @if($errors->has('owner'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('owner') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="complement">Complemento</label>
                                    <input name="complement" type="text" class="form-control {{ $errors->has('complement') ? 'is-invalid' : '' }}"
                                           id="complement" placeholder="Complemento"
                                    >
                                    @if($errors->has('complement'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('complement') }}</strong>
                                        </div>
                                    @endif
                                    <input name="condo_id" type="hidden" value="{{$condo_id}}">
                                </div>
                                <h3>{{trans('message.owner_informations')}}</h3>
                                <hr/>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <x-user />
                                    </div>
                                    <div id="owner_complement" class="col-12 col-md-6">
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
    <script>
    </script>
@stop
@section('js')
    <script>
        $(document).ready(function() {
            $("#owner_complement").hide();
        });
        $('#owner').click(function (){
            $("#owner_complement").show('fast');
        });
        $('#tenant').click(function (){
            $("#owner_complement").hide('fast');
        });
    </script>
@endsection
