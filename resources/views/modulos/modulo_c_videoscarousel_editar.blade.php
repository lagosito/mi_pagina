

<div id="editarItemVideo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" >
        <!-- Modal content-->
        <div class="modal-content tabs-modal-content">
            <div class="modal-body tabs-modal-body row">
                <div class="col-md-12 sinpadding clearfix"  style="position: relative">
                    <button type="button" class="close" data-dismiss="modal" style="font-size: 20px">&times;</button>
                    <div class="col-md-12" style="padding-top: 15px">
                        <span style="font-size: 12px">IMPORTANTE: Sólo copiar el ID del video según indica el rectángulo.</span>
                        <span style="font-style: italic; font-size: 12px"> *https://www.youtube.com/watch?v=</span>
                        <span style="border: 1px solid red; font-weight: bold; font-size: 12px">d4bpg65VXD0</span>
                        <br/>
                        <input  id="item-video-imagen" name="imagen"  style="margin: 15px 0; border: 0; border-bottom: 1px dashed blue;width: 100%" placeholder="Id video"/>
                        <input class="nomostrar" value="" id="id-item-video">
                        <input class="nomostrar" value="" id="id-tab-item-video">
                    </div>
                    <div class="col-md-12">
                        <input class="edit-item-video-name" id="edit-item-video-name" name="item"  style="border: 0; border-bottom: 1px dashed blue;width: 100%" placeholder="Titulo"/>
                    </div>
                    <div class="col-md-12" style="margin-top: 15px;margin-bottom: 15px">
                        <textarea id="edit-item-video-texto" name="texto" style="border: 0; border-bottom: 1px dashed blue;width: 100%" rows="7" placeholder="Descripción"></textarea>
                    </div>

                </div>
                <div class="alert alert-success alert-dismissable nomostrar label-cargando col-md-6 col-md-offset-3" style="background: none; text-align: center">
                    <label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> Guardando item...</label>
                </div>
                <div class="col-md-12" style="text-align: right">
                    <span class="btn blue editable-submit btn-save-item-video">
                        <i class="fa fa-check"> Guardar</i>
                    </span>
                    <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                        <i class="fa fa-times"> Cancelar</i>
                    </button>
                    <br/>
                </div>

            </div>
        </div>
    </div>
</div>