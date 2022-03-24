
<!-- Modal -->
<div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle color-danger">Alerta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
          <video id="video" width="640" height="250" autoplay></video>
          <!-- <button id="snap">Snap Photo</button> -->
          <!-- <canvas id="canvas" width="640" height="250"></canvas> -->
          </div>
          <!-- mapa -->
          <div class="col-md-6" width="640" height="250">
            <div class="card ">
              <div class="card-body ">
                <div id="map_canvas" class="map"></div>
              </div>
            </div>
          </div>
          <!-- end mapa -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>&nbsp;
        <button type="button" class="btn btn-primary">Descartar alarme</button>
      </div>
    </div>
  </div>
</div>


