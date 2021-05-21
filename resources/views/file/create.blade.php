@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Logo do condomínio</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">O cadastro funciona com imagens em formato Jpeg, 
                        Png e Jpg<br> O tamanho máximo da imagem é  150 de altura e 940 de largura<br>
                        Caso seja maior que isso,o sistema irá redimensionar a imagem
                    </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{route('files.store')}}" role="form" enctype="multipart/form-data">
                    @csrf
                    <input name="condo_id" type="hidden" value="{{$condo_id}}">
                    <input type="file" name="file" class="form-control">
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
