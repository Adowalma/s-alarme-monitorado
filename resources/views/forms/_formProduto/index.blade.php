<div class="row">

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
  <textarea class="form-control" id="txt" placeholder="{{ __('Descrição') }}" type="text" value="{{ old('descricao') }}" name="descricao" disabled></textarea>
  <small class="pull-left" style="font-size: 11px;color: #ff6d5e;" id="txt"></small>
</div>

</div>