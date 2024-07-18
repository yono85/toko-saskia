<div class="modal fade new-modal new-modal-form" id="modal-verification-payment" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog mw-w480" role="document">

        <div class="modal-content br-rds8">
            
            <div class="loading-document br-rds8">
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
                <button type="button" class="close pd-tbnull" data-dismiss="modal" aria-label="Close">
                    <span class="flaticon2-cross fsize12"></span>
                </button>
            </div>

            <div class="modal-body body-verif-payment">
                <div class="div">
                    <form action="/api/orders/payment/verification" id="form-submit">

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
                                <div class="div clr-float list-xdp">
                                    <div class="fl-left">
                                        <span class="label">Akun Bank</span>
                                    </div>
                                    <div class="fl-right value-metode-account">
                                        {metode_account}
                                    </div>
                                </div>
                                <div class="div clr-float list-xdp">
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
                                    <div class="fl-right">
                                        <a href="#" target="_blank" class="cmd-previewimg value-payment-image" role="off" data-img="" data-date="" data-name="" data-invoice="">
                                            <span class="sli_icon-picture"></span>
                                            <span>Lihat Bukti Bayar</span>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="div list-xdp">
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
                                <div class="div list-xdp br"></div>
                                <div class="div list-xdp">
                                    <b>Discount</b>
                                </div>
                                <div class="div clr-float list-xdp">
                                    <div class="fl-left">
                                        <span class="label">Promo</span>
                                        <div class="div value-promo-label color-orangered">{promo_label}</div>
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
                        <input type="hidden" name="user_id" value="" >
                        <input type="submit" value="Submit" class="hide">

                    </form>

                </div>
            </div>
            
            <div class="modal-footer br-rdsb12">
                <button type="button" class="btn orange modal-submit fix w110 is-loading br-rds8 is-loading" role="off" disabled="disabled">
                    <span>VERIFIKASI</span>
                </button>
            </div>

        </div>
    </div>
</div>