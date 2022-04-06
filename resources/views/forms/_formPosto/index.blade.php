<!--Begin input name -->
<div class="input-group {{ $errors->has('name') ? ' has-danger' : '' }}">
  <div class="input-group-prepend">
  <div class="input-group-text">
    <i class="now-ui-icons users_circle-08"></i>
  </div>
  </div>
  <input id="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nome') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
  @if ($errors->has('name'))
    <span class="invalid-feedback" style="display: block;" role="alert">
      <strong>{{ $errors->first('name') }}</strong>
    </span>
  @endif
</div>

<!-- input latitude -->
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <i class="now-ui-icons location_pin"></i>
    </div>
  </div>
  <input class="form-control" id="txtLat" placeholder="{{ __('Latitude') }}" type="text" name="latitude" value="{{ old('latitude') }}" required>
  <small class="pull-left" style="font-size: 11px;color: #ff6d5e;" id="error-lat"></small>
</div>

<!-- input longitude -->
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <i class="now-ui-icons location_pin"></i></i>
    </div>
  </div>
  <input class="form-control" id="txtLng" placeholder="{{ __('Longitude') }}" type="text" value="{{ old('longitude') }}" name="longitude" required>
  <small class="pull-left" style="font-size: 11px;color: #ff6d5e;" id="error-lng"></small>
</div>

<!-- input descricao -->
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <i class="now-ui-icons location_pin"></i></i>
    </div>
  </div>
  <textarea class="form-control" id="txt" placeholder="{{ __('Informações adicionais') }}" type="text" value="{{ old('descricao') }}" name="descricao" required></textarea>
  <small class="pull-left" style="font-size: 11px;color: #ff6d5e;" id="txt"></small>
</div>
