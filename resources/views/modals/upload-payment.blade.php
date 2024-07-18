<div class="modal fade new-modal new-modal-form" id="modal-payment" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
    <div class="modal-dialog w460" role="document" >

        <div class="modal-content br-rds12">
            <div class="modal-header txt-center no-br">
                <div class="div">
                    <h2 class="modal-title">
                        <span class="fsize18">Upload Bukti Bayar</span>
                    </h2>
                    <div class="div hide">
                        <span class="label">{label}</span>
                    </div>
                </div>
                <button type="button" class="close pd-tbnull" data-dismiss="modal" aria-label="Close">
                    <span class="flaticon2-cross fsize12"></span>
                </button>
            </div>

            <div class="modal-body pd-t10 pd-on">
                <div class="div">

                    <form action="/api/checkout/upload" enctype="multipart/form-data" id="form-submit" method="POST">
                        <div class="div fsize14">

                            <div class="div">
                                <div class="div h18"></div>

                                <div class="div">
                                    <div class="divx">
                                        
                                        <div class="div">

                                            <div class="div">
                                                <span class="label font-wg25">Pembayaran dari Bank:</span>
                                                <div class="ddwn area-ddwn ar-content area-field area-bank keep" data-label="Pilih Bank" data-value="-1">
                                                    <button class="btn br-rds8 cddwn" role="off">
                                                        <label><span class="fsize14 ">Pilih Bank</span></label>
                                                    </button>
                                                    <div class="ddwn-pg area-ddwn-page">
                                                        <div class="ddwn-header hide">
                                                            <div class="inhd">
                                                                <button height="auto" type="button"></button>
                                                                <input type="text" placeholder="Cari Bank" class="ddwn-tsrc">
                                                            </div>
                                                        </div>
                                                        <ul class="mg0">
                                                            <li aria-selected="false" dataid="bca" class="">
                                                                <button role="off" dataid="bca" aria-role="true"><span>BCA</span></button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" class="value-dropdown txt-def-empty" name="payment_bank" value="-1">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="div">
                                <div class="div h18"></div>

                                <div class="div">
                                    <div class="area-field ar-content">
                                        <div class="div">
                                            <span class="label font-wg25">Nama Pemilik Rekning:</span>
                                            <div class="div">
                                                <input type="text" name="payment_owner" class="form-control br-rds8 txt-def-empty" placeholder="" maxlength="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="div">
                                <div class="div h18"></div>

                                <div class="div">
                                    <div class="div clr-float">
                                        <div class="fl-left area-field w65p pd-r10 ar-content">
                                            <div class="div">
                                                <span class="label font-wg25">Nomor Rekening:</span>
                                                <div class="div ar-content">
                                                    <input type="text" name="payment_norek" class="form-control br-rds8 txt-def-empty number" placeholder="" maxlength="100">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-left area-field w35p">
                                            <div class="div">
                                                <span class="label font-wg25">Tanggal:</span>
                                                <div class="div ar-content">
                                                    <input type="text" name="payment_date" class="form-control br-rds8 txt-def-empty afalse field-date" placeholder="" maxlength="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            

                            <div class="div">
                                <div class="div h18"></div>
                                <div class="div area-field">
                                    <span class="label hide">Bukti Bayar</span>
                                    <div class="div">
                                        <div class="area-preview-upload br-rds4 div area-img-upload" role="false" aria-upload="false">
                                            <div class="area-navi-close">
                                                <button class="cmd-delete-preview"  role="off">
                                                <span class="text">HAPUS</span>
                                                </button>
                                            </div>
                                            <div class="area-img-preview">
                                                <div class="cover-img">
                                                    <img src="" class="img-upload" alt="">
                                                </div>
                                            </div>

                                            <div class="area-button">
                                                <a href="#" role="off" class="cmd-img-upload">
                                                    <div class="tbl">
                                                        <div class="intbl">
                                                            <div class="area-select-icon">
                                                                <span class="sli_icon-camera"></span>
                                                                <span>Bukti Bayar</span>
                                                            </div>
                                                            <div class="area-loading">
                                                                <img src="/assets/svg/loading.blue.svg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                            <input type="file" class="hide file-upload txt-def-empty" name="file" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div">
                                <div class="div">
                                    <div class="div h18"></div>
                                </div>
                                <div class="dropdown-divider"></div>
                            </div>
                            

                        </div>

                        <input type="hidden" name="user_id" value="">
                        <input type="hidden" name="order_code" value="">
                        <input type="hidden" name="openpage" value="">
                        @csrf()
                    </form>
                </div>
            </div>
            
            <div class="modal-footer no-br br-rdsb12">
                
                <button type="button" class="btn green modal-submit fix w110 is-loading br-rds12" role="off" style="height:40px">
                    <span class="sli_icon-cloud-upload"></span>
                    <span>Upload</span>
                </button>
            </div>
            
        </div>
        
    </div>
</div>

<script>
$(document).ready(function(){

    $('body').on('click', '.cmd-img-upload', function(e)
    {
        e.preventDefault();

        beforeUploadImg($(this));

    });

    $('body').on('click', '.cmd-delete-preview', function(e)
    {
        e.preventDefault();

        deleteUploadImg($(this));

    });

    $('body').on('change', 'input.file-upload', function()
    {

        changeUploadImg(this,$(this));
    });

    $(".field-date").datepicker({
            // defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
        dateFormat:"dd/mm/yy"
    });


    $("#form-submit").submit(function(){
        var $form = $(this),
        $modal = $form.parents(".new-modal"),
        $button = $modal.find(".modal-submit");

        if($button.attr("role") === "off"){
            $button.attr("role", "on");

            //VALIDATION FORM
            var $bank = $form.find("*[name='payment_bank']"),
            $owner = $form.find("*[name='payment_owner']"),
            $norek = $form.find("*[name='payment_norek']"),
            $date = $form.find("*[name='payment_date']"),
            $file = $form.find("*[name='file']"),
            $openpage = $form.find("*[name='openpage']").val();

            $form.find(".br-error").removeClass("br-error");
            $form.find("span.error").remove();

            if( 
                $.trim($bank.val()) === "-1" ||
                $.trim($owner.val()) === "" ||
                $.trim($norek.val()) === "" ||
                $.trim($date.val()) === "" ||
                $.trim($file.val()) === ""
            ){

                if( $.trim($bank.val()) === "-1"){
                    $bank.parent(".area-field").find("button.cddwn").addClass("br-error");
                    $bank.parent(".area-field").append("<span class='error'>Harap pilih!</span>");
                }

                if( $.trim($owner.val()) === ""){
                    $owner.addClass("br-error");
                    $owner.parents(".area-field").append("<span class='error'>Harap diisi!</span>");
                }

                if( $.trim($norek.val()) === ""){
                    $norek.addClass("br-error");
                    $norek.parents(".area-field").append("<span class='error'>Harap diisi!</span>");
                }

                if( $.trim($date.val()) === ""){
                    $date.addClass("br-error");
                    $date.parents(".area-field").append("<span class='error'>Harap diisi!</span>");
                }

                if( $.trim($file.val()) === ""){
                    $file.parents(".area-preview-upload").addClass("br-error");
                    $file.parents(".area-field").append("<span class='error'>Harap pilih Image!</span>");
                }


                $button.attr("role", "off");
                $form.find(".br-error").eq(0).focus();
                return false;
            }


            // SUBMIT
            var $t = ajaxFormPostFile($form);
            $t.success(function(n){
                console.log(n);
                if($openpage === "table"){
                    $('#form-table').submit();
                }
                $modal.find("button.close").click();
                $button.attr("role", "off");

            });
            $t.error(function(n){
                console.log(n);
                $button.attr("role", "off");
            });

        }

        return false;
    })

    // $("#modal-payment button.modal-submit").click(function(e){
    //     e.preventDefault();

    //     var $button = $(this),
    //     $modal = $button.parents(".new-modal"),
    //     $form = $modal.find("form");

    //     $form.submit();
    // })


    return false;
})
</script>