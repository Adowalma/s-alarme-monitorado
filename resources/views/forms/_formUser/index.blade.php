<!--Begin input name -->
<div class="input-group {{ $errors->has('name') ? ' has-danger' : '' }}">
  <div class="input-group-prepend">
  <div class="input-group-text">
    <i class="now-ui-icons users_circle-08"></i>
  </div>
  </div>
  <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nome') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
  @if ($errors->has('name'))
    <span class="invalid-feedback" style="display: block;" role="alert">
      <strong>{{ $errors->first('name') }}</strong>
    </span>
  @endif
</div>
<!--Begin input email -->
<div class="input-group {{ $errors->has('email') ? ' has-danger' : '' }}">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <i class="now-ui-icons ui-1_email-85"></i>
    </div>
  </div>
  <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
  </div>
  @if ($errors->has('email'))
    <span class="invalid-feedback" style="display: block;" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif
<!--Begin input user type-->

<!--Begin input password -->
<div class="input-group {{ $errors->has('password') ? ' has-danger' : '' }}">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <i class="now-ui-icons objects_key-25"></i>
    </div>
  </div>
  <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Palavra-passe') }}" type="password" name="password" required>
  @if ($errors->has('password'))
    <span class="invalid-feedback" style="display: block;" role="alert">
      <strong>{{ $errors->first('password') }}</strong>
    </span>
  @endif
</div>

<!--Begin input confirm password -->
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <i class="now-ui-icons objects_key-25"></i></i>
    </div>
  </div>
  <input class="form-control" placeholder="{{ __('Confirmar palavra-passe') }}" type="password" name="password_confirmation" required>
</div>
<!-- input telemovel -->
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <i class="now-ui-icons tech_mobile"></i></i>
    </div>
  </div>
  <input class="form-control" placeholder="{{ __('telefone') }}" type="number" name="" required>
</div>

<!-- input latitude -->
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <i class="now-ui-icons location_pin"></i>
    </div>
  </div>
  <input class="form-control" placeholder="{{ __('Latitude') }}" type="number" name="" required>
</div>
<!-- input longitude -->
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <i class="now-ui-icons location_pin"></i></i>
    </div>
  </div>
  <input class="form-control" placeholder="{{ __('Longitude') }}" type="number" name="" required>
</div>
