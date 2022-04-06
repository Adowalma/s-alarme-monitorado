<!--Begin input name -->
<div class="col-12 input-group {{ $errors->has('name') ? ' has-danger' : '' }}">
  <div class="input-group-prepend">
  <div class="input-group-text">
    <i class="now-ui-icons users_circle-08"></i>
  </div>
  </div>
  <input id="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nome do tipo de Produto') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
  @if ($errors->has('name'))
    <span class="invalid-feedback" style="display: block;" role="alert">
      <strong>{{ $errors->first('name') }}</strong>
    </span>
  @endif
</div>