<!--Begin input tipo -->
<div class="col-12 input-group {{ $errors->has('tipo') ? ' has-danger' : '' }}">
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
<!-- input descricao -->
<div class="col-12 input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <i class="now-ui-icons location_pin"></i></i>
    </div>
  </div>
  <textarea class="form-control" id="txt" placeholder="{{ __('Descrição') }}" type="text" value="{{ old('descricao') }}" name="descricao"></textarea>
  <small class="pull-left" style="font-size: 11px;color: #ff6d5e;" id="txt"></small>
</div>