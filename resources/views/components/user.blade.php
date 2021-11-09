<div class="form-group">
    <label for="name">Nome</label>
    <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
           id="name" placeholder="Nome" value="{{old('name')}}"
    >
    @if($errors->has('name'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input name="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
           id="email" placeholder="E-mail"
           value="{{old('email')}}"
    >
    @if($errors->has('email'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('email') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="document">Documento</label>
    <input name="document" type="text" class="form-control {{ $errors->has('document') ? 'is-invalid' : '' }}"
           id="document" placeholder="Documento" value="{{old('document')}}"
    >
    @if($errors->has('document'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('document') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="username">Usuário</label>
    <input name="username" type="text" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}"
           id="username" placeholder="Usuário" value="{{old('username')}}"
    >
    @if($errors->has('username'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('username') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="birth_date">Data de nascimento</label>
    <input name="birth_date" type="date" class="form-control {{ $errors->has('birth_date') ? 'is-invalid' : '' }}"
           id="birth_date" value="{{old('birth_date')}}"
    >
    @if($errors->has('birth_date'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('birth_date') }}</strong>
        </div>
    @endif
</div>
