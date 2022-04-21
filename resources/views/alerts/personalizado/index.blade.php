@if(session('erro'))
    <div class="alert alert-danger">
        <button type="button" aria-hidden="true" class="close">
            <i class="now-ui-icons ui-1_simple-remove"></i>
        </button>
        <span>{{session('erro')}}</span>
    </div>
@endif
@if(session('alerta'))
    <div class="alert alert-warning">
        <button type="button" aria-hidden="true" class="close">
            <i class="now-ui-icons ui-1_simple-remove"></i>
        </button>
        <span>{{session('alerta')}}</span>
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success">
        <button type="button" aria-hidden="true" class="close">
            <i class="now-ui-icons ui-1_simple-remove"></i>
        </button>
        <span>{{session('success')}}</span>
    </div>
@endif
