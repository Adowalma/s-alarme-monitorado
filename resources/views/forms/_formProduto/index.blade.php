<div class="row">
<!--Begin input image -->
<div class="col-6 input-group {{ $errors->has('image') ? ' has-danger' : '' }}">
  <div class="input-group-prepend">
  <div class="input-group-text">
    <i class="now-ui-icons users_circle-08"></i>
  </div>
  </div>
  <input id="image" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" type="file" name="image" value="{{ old('image') }}" accept="image/*" required autofocus>
  @if ($errors->has('image'))
    <span class="invalid-feedback" style="display: block;" role="alert">
      <strong>{{ $errors->first('image') }}</strong>
    </span>
  @endif
</div>
<!--Begin input tipo -->
<div class="col-6 input-group {{ $errors->has('tipo') ? ' has-danger' : '' }}">
  <div class="input-group-prepend">
  <div class="input-group-text">
    <i class="now-ui-icons users_circle-08"></i>
  </div>
  </div>
  <input id="tipo" class="form-control {{ $errors->has('tipo') ? ' is-invalid' : '' }}" placeholder="{{ __('Nome do tipo de Produto') }}" type="text" name="tipo" value="{{ old('tipo') }}" required autofocus>
  @if ($errors->has('tipo'))
    <span class="invalid-feedback" style="display: block;" role="alert">
      <strong>{{ $errors->first('tipo') }}</strong>
    </span>
  @endif
</div>
<!--Begin input preco -->
<div class="col-6 input-group {{ $errors->has('preco') ? ' has-danger' : '' }}">
  <div class="input-group-prepend">
  <div class="input-group-text">
    <i class="now-ui-icons users_circle-08"></i>
  </div>
  </div>
  <input id="preco" class="form-control {{ $errors->has('preco') ? ' is-invalid' : '' }}" placeholder="{{ __('Preço do produto') }}" type="number" name="preco" value="{{ old('preco') }}" required autofocus>
  @if ($errors->has('preco'))
    <span class="invalid-feedback" style="display: block;" role="alert">
      <strong>{{ $errors->first('preco') }}</strong>
    </span>
  @endif
</div>

<!--Begin input quantidade -->
<div class="col-6 input-group {{ $errors->has('quantidade') ? ' has-danger' : '' }}">
  <div class="input-group-prepend">
  <div class="input-group-text">
    <i class="now-ui-icons users_circle-08"></i>
  </div>
  </div>
  <input id="quantidade" class="form-control {{ $errors->has('quantidade') ? ' is-invalid' : '' }}" placeholder="{{ __('Quantidade de produtos') }}" type="number" name="quantidade" value="{{ old('quantidade') }}" required autofocus>
  @if ($errors->has('quantidade'))
    <span class="invalid-feedback" style="display: block;" role="alert">
      <strong>{{ $errors->first('quantidade') }}</strong>
    </span>
  @endif
</div>

<!-- input descricao -->
<div class="col-6 input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <i class="now-ui-icons location_pin"></i></i>
    </div>
  </div>
  <textarea class="form-control" id="txt" placeholder="{{ __('Descrição') }}" type="text" value="{{ old('descricao') }}" name="descricao"></textarea>
  <small class="pull-left" style="font-size: 11px;color: #ff6d5e;" id="txt"></small>
</div>
</div>