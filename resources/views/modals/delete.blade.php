<div class="modal fade new-modal modal-create" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" aria-load="false" aria-delete="true" aria-alert="false">
    
    <div class="modal-dialog w420" role="document">

        <div class="modal-content">
    
            <div class="msg-modal alert" data-role="success">
                <div class="inalert">
                    <a href="#" class="close" role="off">
                        <span class="flaticon2-cancel-music"></span>
                    </a>
                    <div class="div">
                        <span class="ic danger flaticon-danger"></span>
                        <span class="ic check sli_icon-check"></span>
                    </div>
                    <div class="div msg">message</div>
                </div>
            </div>

            <div class="modal-inload">
                <img src="/assets/svg/loading.blue.svg" alt="loading">
            </div>

            <div class="div inmodal-content">

                <!-- header -->
                <div class="modal-header no-br">
                    <h4 class="modal-title color-red">
                        <span class="ic modal-icon flaticon2-warning"></span>
                        <span class="title-label">Hapus Data</span>
                    </h4>
                    <button type="button" class="close hide" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-inbody">

                    <!-- body -->
                    <div class="modal-body">
                        <div class="div txt-center">
                            <p class="fsize16 color-black666">Anda yakin akan menghapus data ini?</p>
                        </div>
                    </div>

                    <!-- footer -->
                    <div class="modal-footer no-br">

                        <button type="button" role="off" class="btn del cmd-modal-close is-loading font-wg0" >
                            <span class="lbl">BATAL</span>
                        </button>

                        <button type="button" class="btn green is-loading modal-submit font-wg0" role="off">
                            <span class="ic flaticon2-check-mark hide"></span> <span class="lbl">YA, HAPUS</span>
                        </button>
                    </div>

                    <form class="hide" id="form-delete" action="/api/product/delete" method="POST">
                        @csrf()
                    </form>

                </div>

            </div>

        </div>
    </div>
</div>

<script>
$(document).ready(function(){

    $("#modal-delete form").submit(function(){
        var $form = $(this),
        $modal = $form.parents("#modal-delete"),
        $button = $modal.find("button.modal-submit");

        if($button.attr("role") === "off"){
            $button.attr("role", "on");

            var $t = ajaxFormRequest($form);
            $t.success(function(n){
                console.log(n);
                $('#form-table').submit();
                $modal.find("button.close").click();
                $button.attr("role", "off");
                flagnotif("success", n.message);
            });
            $t.error(function(n){
                console.log(n);
                $button.attr("role", "off");
            });
        }
        return false;
    })

    $("#modal-delete button.modal-submit").click(function(e){
        e.preventDefault();

        var $button = $(this),
        $modal = $button.parents("#modal-delete"),
        $form = $modal.find("form");

        $form.submit();
    })
    return false;
})
</script>