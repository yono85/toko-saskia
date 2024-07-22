<div class="modal fade new-modal new-modal-form hide" id="modal-verification-payment" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog mw-w480" role="document">

        <div class="modal-content br-rds8">
            
            <div class="loading-document br-rds8 hide">
                <img src="/assets/svg/loading.blue.svg" alt="loading">
            </div>

            <div class="modal-header txt-center">
                <div class="div">
                    <h2 class="modal-title">
                        <span class="fsize16">
                            <span>Detail Pesanan</span>
                        </span>
                    </h2>
                    <div class="div hide">
                        <span class="label">{description_title}</span>
                    </div>
                </div>
                <button type="button" class="close pd-tbnull modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="flaticon2-cross fsize12"></span>
                </button>
            </div>

            <div class="modal-body body-verif-payment">
                <div class="div">
                    <form action="/api/orders/payment/verification" id="form-submit" method="POST">

                        <ul class="">

                            <li>
                                <div class="div clr-float list-xdp">
                                    <div class="fl-left">
                                        <span class="label">Status Pembayaran</span>
                                    </div>
                                    <div class="fl-right value-status status-payment green">
                                        {satus}
                                    </div>
                                </div>
                                <div class="div clr-float list-xdp">
                                    <div class="fl-left">
                                        <span class="label">Metode Pembayaran</span>
                                    </div>
                                    <div class="fl-right value-metode-bank">
                                        {metode_bank}
                                    </div>
                                </div>
                                <div class="div clr-float list-xdp" style="display:none !important">
                                    <div class="fl-left">
                                        <span class="label">Akun Bank</span>
                                    </div>
                                    <div class="fl-right value-metode-account">
                                        {metode_account}
                                    </div>
                                </div>
                                <div class="div clr-float list-xdp hide" style="display:none !important">
                                    <div class="fl-left">
                                        <span class="label">Marketing</span>
                                    </div>
                                    <div class="fl-right value-marketing">
                                        {marketing}
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="div list-xdp">
                                    <b>Informasi Pembayaran</b>
                                </div>
                                <div class="div clr-float list-xdp">
                                    <div class="fl-left">
                                        <span class="label">Dari Bank</span>
                                    </div>
                                    <div class="fl-right value-payment-bank">
                                        {payment_bank}
                                    </div>
                                </div>
                                <div class="div clr-float list-xdp">
                                    <div class="fl-left">
                                        <span class="label">Pemilik Rekening</span>
                                    </div>
                                    <div class="fl-right value-payment-account">
                                        {payment_account}
                                    </div>
                                </div>
                                <div class="div clr-float list-xdp">
                                    <div class="fl-left">
                                        <span class="label">Nomor Rekening</span>
                                    </div>
                                    <div class="fl-right value-payment-norek">
                                        {payment_norek}
                                    </div>
                                </div>
                                <div class="div clr-float list-xdp">
                                    <div class="fl-left">
                                        <span class="label">Tanggal Transfer</span>
                                    </div>
                                    <div class="fl-right value-payment-date">
                                        {payment_date}
                                    </div>
                                </div>
                                <div class="div clr-float list-xdp hide">
                                    <div class="fl-left">
                                        <span class="label">Nominal</span>
                                    </div>
                                    <div class="fl-right">
                                        <span class="value-payment-subtotal">{nominal}</span>
                                    </div>
                                </div>
                                <div class="div clr-float list-xdp value-area-link-image">
                                    <div class="fl-left">
                                        <span class="label">Bukti Bayar</span>
                                    </div>
                                    <div class="fl-right value-payment-image">
                                        <!-- <a href="#" target="_blank" class="cmd-previewimg value-payment-image" role="off" data-img="" data-date="" data-name="" data-invoice=""> -->
                                        <!-- <a href="#" target="_blank" class="value-payment-image" role="off" >
                                            <span class="sli_icon-picture"></span>
                                            <span>Lihat Bukti Bayar</span>
                                        </a> -->
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="div list-xdp mg-t15">
                                    <b>Informasi Pesanan</b>
                                </div>
                                <div class="div clr-float list-xdp">
                                    <div class="fl-left">
                                        <span class="label">Nomor Invoice</span>
                                    </div>
                                    <div class="fl-right value-invoice">
                                        {invoice}
                                    </div>
                                </div>
                                <div class="div clr-float list-xdp">
                                    <div class="fl-left">
                                        <span class="label">Produk</span>
                                    </div>
                                    <div class="fl-right value-product-name">
                                        {product_name}
                                    </div>
                                </div>
                                <div class="div clr-float list-xdp">
                                    <div class="fl-left">
                                        <span class="label">Tanggal</span>
                                    </div>
                                    <div class="fl-right value-date">
                                        {date}
                                    </div>
                                </div>
                                <div class="div clr-float list-xdp">
                                    <div class="fl-left">
                                        <b>Subtotal</b>
                                    </div>
                                    <div class="fl-right">
                                        <b class="value-payment-subtotal">{subtotal}</b>
                                    </div>
                                </div>
                                <div class="div list-xdp br hide"></div>
                                <div class="div list-xdp hide">
                                    <b>Discount</b>
                                </div>
                                <div class="div clr-float list-xdp">
                                    <div class="fl-left">
                                        <!-- <b>Discount</b> -->
                                        <span class="label">Discount</span>
                                        <!-- <div class="div value-promo-label color-orangered">{promo_label}</div> -->
                                    </div>
                                    <div class="fl-right">
                                        <span class="value-payment-discount">{discount}</span>
                                    </div>
                                </div>
                                <div class="div list-xdp br"></div>
                                <div class="div clr-float list-xdp">
                                    <div class="fl-left">
                                        <b>Total Bayar</b>
                                    </div>
                                    <div class="fl-right">
                                        <b class="color-orangered value-payment-total">{total_bayar}</b>
                                    </div>
                                </div>
                            </li>

                        </ul>

                        <input type="hidden" name="order_id" class="txt-def-empty" value="" >
                        <input type="hidden" name="order_code" class="txt-def-empty" value="">
                        <input type="hidden" name="user_id" value="{{$account['id']}}" >
                        <input type="submit" value="Submit" class="hide">

                    </form>

                </div>
            </div>
            
            <div class="modal-footer br-rdsb12">
                @if($account['level'] == 1)
                <button type="button" class="btn orange modal-submit fix w110 is-loading br-rds8" role="off" disabled="disabled">
                    <span>VERIFIKASI</span>
                </button>
                @else
                <button type="button" class="btn orange modal-close fix w110 is-loading br-rds8" role="off" disabled="disabled" data-dismiss="modal">
                    <span>TUTUP</span>
                </button>
                @endif
            </div>

        </div>
    </div>
</div>

<script>
$(document).ready(function(){


    $("body").on("click", ".cmd-modal-widget[data-target='#modal-verification-payment']", function(){
        var $button = $(this),
        $modal = $($button.attr("data-target"));

        $modal.find(".loading-document").removeClass("hide");
        var $URL = CONFIG.APP.URL + '/api/orders/view?q=' + $button.parents(".tr").attr("data-token");

        // $modal.find("button.modal-submit").attr("disabled", "disabled");

        var $t = ajaxRequestGet($URL);
        $t.success(function(n){
            console.log(n);
            var $data = n.data;

            $statuPayment = "<b class='"+$data.payment.status+"'>"+$data.payment.status+"</b>";

            $modal.find(".status-payment").html($statuPayment);
            $modal.find(".value-metode-bank").html($data.payment.metode !== "CASH" ? "Transfer Bank " + $data.payment.metode : $data.payment.metode );

            $modal.find(".value-payment-bank").html($data.payment.metode === "CASH" ? "---" : $data.payment.from.bank );
            $modal.find(".value-payment-account").html($data.payment.metode === "CASH" ? "---" : $data.payment.from.owner );
            $modal.find(".value-payment-norek").html($data.payment.metode === "CASH" ? "---" : $data.payment.from.norek );
            $modal.find(".value-payment-date").html($data.payment.metode === "CASH" ? "---" : $data.payment.from.date );
            $modal.find(".value-payment-subtotal").html( formatRupiah($data.subtotal,'Rp') );

            // $modal.find(".value-payment-image").attr('href', ($data.payment.metode === "CASH" ? "#" : CONFIG.APP.URL + $data.payment.from.images) );

            var $linkimage = ($data.payment.metode === "CASH" ? '---' : ( $data.payment.from.bank == "" ? "--" : '<a href="'+CONFIG.APP.URL + $data.payment.from.images+'" target="_blank" class="value-payment-image" role="off" ><span class="sli_icon-picture"></span><span> Lihat Bukti Bayar</span></a>'));

            $modal.find(".value-payment-image").html($linkimage);

            $modal.find(".value-invoice").html($data.invoice);
            $modal.find(".value-date").html($data.date);
            $modal.find(".value-payment-discount").html('---');
            $modal.find(".value-payment-total").html(formatRupiah($data.total, "Rp"));

            var $items = [];
            $.each($data.items, function(i, item){
                $items.push(item.product_name + ' ('+item.quantity+'x)');
            });

            // console.log($items);
            $modal.find(".value-product-name").html($items.join('<br>'));

            if( $data.payment.status === "success"){
                $modal.find("button.modal-submit").attr("disabled", "disabled");
            }else{
                
                if($data.payment.metode !== "CASH" && $data.payment.from.bank === ""){
                    $modal.find("button.modal-submit").attr("disabled", "disabled");
                }else{
                    $modal.find("button.modal-submit").removeAttr("disabled");
                }
            }

            $modal.find("*[name='order_id']").val($data.id);
            $modal.find("*[name='order_code']").val($data.code);
            $modal.find(".loading-document").addClass("hide");
        })
        .error(function(n){
            console.log(n);
        });

        // console.log($URL);
    })


    // POST SUBMIT VERIFICATION
    $("#modal-verification-payment form").submit(function(){
        var $form = $(this),
        $modal = $form.parents(".new-modal"),
        $button = $modal.find(".modal-submit");

        if($button.attr("role") === "off"){
            $button.attr("role", "on");

            // SUBMIT
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
    });


    // $('body').on('click', '.cmd-previewimg', function(e)
    // {
    //     e.preventDefault();
    //     var cmd = $(this);

    //     if( cmd.attr('role') === 'off')
    //     {

    //         cmd.attr('role','on');
    //         $('body').find('.area-prev-img').remove();
    //         var el = {
    //             'image' :   cmd.attr('data-img')
    //         }
    //         var target = modalPreviewImg();
    //         $('body').append(target);
    //         var area = $('body').find('.area-prev-image');

    //         area.find('.prev-img').html('<img src="'+cmd.attr('data-img')+'" alt="image">');
    //         area.find('.prev-invoice b').html(cmd.attr("data-invoice"));
    //         area.find('.prev-name').html(cmd.attr("data-name"));
    //         area.find('.prev-date').html(cmd.attr("data-date"));

    //         area.addClass('show');
    //         cmd.attr('role', 'off');
    //     }
    // });

    return false;
})
</script>