<!-- Modal -->
<div  class="modal fade " id="modal-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle color-danger">Ficha técnica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col"> <img src="/uploads/{{ $product->image }}"></div>
          <div class="col">
            <p>{{ $product->tipo }}</p>
            <p>{{ $product->preco }} kz</p>
            <h6>Especificações:</h6>
              <p>{{ $product->descricao }}</p> 
              </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>&nbsp; -->
        <!-- <button type="button" class="btn btn-primary">Descartar alarme</button> -->
      <!-- </div> -->
    </div>
  </div>
</div>


