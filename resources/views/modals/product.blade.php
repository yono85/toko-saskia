<div class="modal fade new-modal new-modal-form" id="modal-product" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
    <div class="modal-dialog w460" role="document" >

        <div class="modal-content br-rds12">

            <div class="loading-document br-rds8">
                <img src="/assets/svg/loading.blue.svg" alt="loading">
            </div>

            <div class="modal-header txt-center no-br">
                <div class="div">
                    <h2 class="modal-title">
                        <span class="fsize18">{title}</span>
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

                    <form action="/api/product/create" enctype="multipart/form-data" id="form-submit" method="POST">
                        <div class="div fsize14">

                            <div class="div">
                                <div class="div h18"></div>
                                <div class="div area-field">
                                    <span class="label hide">Gambar Produk</span>
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
                                                                <span>Gambar Produk</span>
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

                            <div class="div">
                                <div class="div h18"></div>

                                <div class="div">
                                    <div class="area-field ar-content">
                                        <div class="div">
                                            <span class="label font-wg25">Nama Produk:</span>
                                            <div class="div">
                                                <input type="text" name="name" class="form-control br-rds8 txt-def-empty" placeholder="" maxlength="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="div">
                                <div class="div h18"></div>

                                <div class="div">
                                    <div class="div clr-float">
                                        <div class="fl-left area-field w50p ar-content">
                                            <div class="div">
                                                <span class="label font-wg25">Harga:</span>
                                                <div class="div ar-content">
                                                    <input type="text" name="price" class="form-control br-rds8 txt-def-empty number" placeholder="" maxlength="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="div">
                                <div class="div h18"></div>

                                <div class="div">
                                    <div class="div clr-float">
                                        <div class="fl-left area-field w50p ar-content">
                                            <div class="div">
                                                <span class="label font-wg25">Stock:</span>
                                                <div class="div ar-content">
                                                    <input type="text" name="stock" class="form-control br-rds8 txt-def-empty number" placeholder="" maxlength="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="div hide">
                                <div class="div h18"></div>

                                <div class="div">
                                    <div class="divx">
                                        
                                        <div class="div">

                                            <div class="div w50p">
                                                <span class="label font-wg25">Status:</span>
                                                <div class="ddwn area-ddwn ar-content area-field area-bank keep" data-label="Pilih Status" data-value="-1">
                                                    <button class="btn br-rds8 cddwn" role="off">
                                                        <label><span class="fsize14 ">Pilih Status</span></label>
                                                    </button>
                                                    <div class="ddwn-pg area-ddwn-page">
                                                        <div class="ddwn-header hide">
                                                            <div class="inhd">
                                                                <button height="auto" type="button"></button>
                                                                <input type="text" placeholder="Cari Bank" class="ddwn-tsrc">
                                                            </div>
                                                        </div>
                                                        <ul class="mg0">
                                                            <li aria-selected="false" dataid="1" class="">
                                                                <button role="off" dataid="1" aria-role="true"><span>Publish</span></button>
                                                            </li>
                                                            <li aria-selected="false" dataid="0" class="">
                                                                <button role="off" dataid="0" aria-role="true"><span>Arsip</span></button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" class="value-dropdown txt-def-empty" name="status" value="-1">
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
                                            <span class="label font-wg25">Deskripsi:</span>
                                            <div class="div">
                                                <textarea name="description" class="form-control fsize14" placeholder="Isi deskripsi disini..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <input type="hidden" name="user_id" value="{{$account['id']}}" >
                        <input type="hidden" name="code" value="" class="empty">
                        <input type="hidden" name="type" value="">
                        @csrf()
                    </form>
                </div>
            </div>
            
            <div class="modal-footer no-br br-rdsb12">
                
                <button type="button" class="btn green modal-submit fix w110 is-loading br-rds12" role="off" style="height:40px">
                    <span class="sli_icon-cloud-upload hide"></span>
                    <span>Simpan</span>
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
            var $name = $form.find("*[name='name']"),
            $price = $form.find("*[name='price']"),
            $stock = $form.find("*[name='stock']"),
            $description = $form.find("*[name='description']"),
            $type = $form.find("*[name='type']"),
            $file = $form.find("*[name='file']");

            $form.find(".br-error").removeClass("br-error");
            $form.find("span.error").remove();

            if( 
                $.trim($name.val()) === "" ||
                $.trim($price.val()) === "" ||
                $.trim($stock.val()) === "" ||
                $.trim($description.val()) === "" ||
                $.trim($file.val()) === "" && $.trim($type.val()) === "add"
            ){

                if( $.trim($name.val()) === ""){
                    $name.addClass("br-error");
                    $name.parents(".area-field").append("<span class='error'>Harap diisi!</span>");
                }

                if( $.trim($price.val()) === ""){
                    $price.addClass("br-error");
                    $price.parents(".area-field").append("<span class='error'>Harap diisi!</span>");
                }

                if( $.trim($stock.val()) === ""){
                    $stock.addClass("br-error");
                    $stock.parents(".area-field").append("<span class='error'>Harap diisi!</span>");
                }

                if( $.trim($description.val()) === ""){
                    $description.addClass("br-error");
                    $description.parents(".area-field").append("<span class='error'>Harap diisi!</span>");
                }

                if( $.trim($file.val()) === "" && $.trim($type.val()) === "add" ){
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
                $("#form-table").submit();
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

    // $("#modal-payment button.modal-submit").click(function(e){
    //     e.preventDefault();

    //     var $button = $(this),
    //     $modal = $button.parents(".new-modal"),
    //     $form = $modal.find("form");

    //     $form.submit();
    // })

    $("body").on("click", ".cmd-modal-widget[data-target='#modal-product']", function(){

        var $button = $(this),
        $type = $button.attr("data-type"),
        $modal = $($button.attr("data-target"));

        $modal.find(".loading-document").removeClass("hide");
        $modal.find("*[name='type']").val($button.attr("data-type"));

        if($type === "add"){

            $modal.find(".loading-document").addClass("hide");
            $modal.find(".modal-title span").html("Tambah");
            // return false;
        }else{
            dataProduct($button);
        }

    });

    function dataProduct(e){
        var $button = e,
        $modal = $($button.attr("data-target"));

        var $URL = CONFIG.APP.URL + '/api/product/view?code=' + $button.parents(".tr").attr("data-token");

        $modal.find(".modal-title span").html("Sunting");



        var $t = ajaxRequestGet($URL);
        $t.success(function(n){
            console.log(n);
            var $data = n.data;


            $modal.find("*[name='code']").val($data.code);
            $modal.find("*[name='name']").val($data.name);
            $modal.find("*[name='price']").val($data.price);
            $modal.find("*[name='stock']").val($data.quantity);
            $modal.find("*[name='description']").val($data.description);
            $modal.find(".img-upload").attr("src", $data.images);
            $modal.find(".area-preview-upload").attr("aria-upload", "true");
            $modal.find(".loading-document").addClass("hide");

        })
        .error(function(n){
            console.log(n);
        });
    }

    return false;
})
</script>