<div class="row">
<!--Begin input name -->
<div class="col-6 input-group {{ $errors->has('name') ? ' has-danger' : '' }}">
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

<!-- input product-type -->
<div class="col-6 input-group form-floating">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <i class="now-ui-icons location_pin"></i>
    </div>
  </div>
  
  <select class="form-control" name ="type_id">
    <option selected>Selecione o tipo de produto</option>
    @foreach ($types as $tipo =>$value)
        <option   value="{{ $tipo}}">{{$value}}</option>
    @endforeach
  </select>
    <!-- <button class="btn btn-primary btn-round" type="button" +</button> -->
    <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#exampleModalCenter" title="Adicionar novo tipo de produto">+</button>
    <p class="help-block"></p>
    @if($errors->has('type_id'))
      <span class="invalid-feedback" style="display: block;" role="alert">
        <strong>{{ $errors->first('type_id') }}</strong>
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