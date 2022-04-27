<!--Begin input full name -->
<div class="input-group {{ $errors->has('name') ? ' has-danger' : '' }}" style="backdrop-filter: blur(11px);">
  <div class="input-group-prepend">
  <div class="input-group-text">
    <i class="now-ui-icons users_circle-08"></i>
  </div>
  </div>
  <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nome Completo') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
  @if ($errors->has('name'))
    <span class="invalid-feedback" style="display: block;" role="alert">
      <strong>{{ $errors->first('name') }}</strong>
    </span>
  @endif
</div>
<!--Begin input username -->
<div class="input-group {{ $errors->has('username') ? ' has-danger' : '' }}">
  <div class="input-group-prepend">
  <div class="input-group-text">
    <i class="now-ui-icons users_circle-08"></i>
  </div>
  </div>
  <input class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="{{ __('Username') }}" type="text" name="username" value="{{ old('username') }}" required autofocus>
  @if ($errors->has('username'))
    <span class="invalid-feedback" style="display: block;" role="alert">
      <strong>{{ $errors->first('username') }}</strong>
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
<!-- input telemovel -->
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <i class="now-ui-icons tech_mobile"></i></i>
    </div>
  </div>
  <input class="form-control" placeholder="{{ __('Telefone') }}" type="number" name="telemovel" min="900000000" max="999999999" required>
</div>
<!-- input telemovel -->
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <i class="now-ui-icons tech_mobile"></i></i>
    </div>
  </div>
  <input class="form-control" placeholder="{{ __('Endereço') }}" type="text" name="endereco" required>
</div>