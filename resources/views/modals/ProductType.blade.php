<!-- Modal -->
<div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle color-danger">Tipo de Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <form method="POST" action="{{ route('produtoType.store') }}" enctype="multipart/form-data">
              @csrf
              @include('forms._formProduto.type')
          
            
            <div class="modal-footer d-flex justify-content-end">
                <button type="submit" class="btn btn-primary btn-round">{{__('Cadastrar')}}</button>
                <button type="button" class="btn btn-secondary btn-round" data-dismiss="modal">Fechar</button>&nbsp;
            </div>
              <!-- <button type="button" class="btn btn-primary">Descartar alarme</button> -->
            </div>

            </form>
          </div>
         
        </div>
      </div>

    </div>
  </div>
</div>


