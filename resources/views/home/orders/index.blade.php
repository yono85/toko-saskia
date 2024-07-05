@extends('home.index')

@section('content')
<main class="moby__content-body">

    <div class="ar-table">

        <div class="in-head-table ">
            <div class="div clr-float">

                <div class="brcumb wh-m-520">
                    <div class="tbl">
                        <div class="intbl">
                            <div class="div">
                                <span class="fa flaticon2-line-chart"></span>
                                <a href="/">
                                    <span>Dashboard</span>
                                </a>
                                <span class="bts">
                                    <span class="ic fas fa-circle"></span>
                                </span>
                                <span class="label">
                                    <span>Pesanan</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="fl-left wh-m-680"></div>
                <div class="fl-right">

                    <ul>

                        <li class="fl-right">

                            <button class="no cmd-modal-widget green rds4 " data-toggle="modal" data-target="#modal-create-formula" data-type="add" role="off">
                                <span class="ic-abs fas fa-plus"></span>
                                <span class="sli_icon-bag"></span>
                            </button>


                        </li>

                        <li class="fl-left">

                            <form metode="GET" action="/api/orders/table" id="form-table" aria-categori="false" data-filter="false">
                                <div class="ar-li">
                                
                                    <div class="ar-src" aria-role="false">
                                        <input type="text" placeholder="Cari Invoice" name="search" class="" value="">

                                        <a href="#" class="clr-text cmd-clear-search" role="off">
                                            <div class="tbl">
                                                <div class="intbl">
                                                    <span class="sli_icon-close"></span>
                                                </div>
                                            </div>
                                        </a>
                                        <button class="nobr btn blue cmd-search-new is-loading" role="off">
                                            <span class="sli_icon-magnifier"></span>
                                        </button>
                                    </div>

                                    @if($account->level == 1)
                                    <button class="grey nobr s10 cmd-filter-table fil-table" role="off">
                                        <span class="ic-filter fas fa-filter"></span>
                                        <span class="ic-close sli_icon-close"></span>
                                        <span class="ic-notif"></span>
                                    </button>
                                    @endif

                                </div>

                                <div class="box-fil-table area-categori">
                                    <div class="inar">
                                        <div class="div clr-float">
                                            <ul>
                                                <li>
                                                    <div class="div ttl">
                                                        <span class="ic fas fa-filter hide"></span>
                                                        <span>Filter Kategori</span>
                                                        <a href="#" class="cmd-categori-reset" role="off">RESET</a>
                                                    </div>
                                                </li>

                                                <li class="hide">
                                                    <div class="div field">
                                                        <div class="div legend">USERS</div>
                                                        <div class="div bdy">
                                                            <select class="selectpicker cmd-type val-min1" data-live-search="false" name="uid" data-field="users">
                                                                
                                                                @if($account->level == 2)
                                                                <option value="{{$account->id}}">{{$account->name}}</option>
                                                                @else
                                                                <option value="-1">All...</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="hide">
                                                    <div class="div field">
                                                        <div class="div legend">STATUS</div>
                                                        <div class="div bdy">
                                                            <select class="selectpicker cmd-progress val-min1" data-live-search="false" name="status" data-field="status">
                                                                <option value="-1">All...</option>
                                                                <option value="1">Paid</option>
                                                                <option value="2">Verif</option>
                                                                <option value="0">Waiting</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="div field navi">
                                                        <div class="div clr-float">
                                                            <button class="blue cmd-categori rds4" role="off">
                                                                <span class="flaticon2-check-mark"></span>
                                                                <span>SIMPAN</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- form -->
                                <input type="hidden" name="src" class="empty" value="">
                                <input type="hidden" name="sort" value="desc" />
                                <input type="hidden" name="page" value="1" />

                            </form>

                        </li>

                    </ul>
                
                    
                </div>
            </div>

        </div>

        <div class="in-body-table area-table">
            
            <div class="ar-body-table">
                
                <div class="div wh-m-520">
                    <div class="atable table-header">
                        <div class="th">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="td-iner">
                                                <a href="#" class="cmd-sort-table" role="off" aria-sort="desc" data-name="sort">
                                                    <span class="ic far fa-file-alt"></span>
                                                    <span>RINCIAN</span>
                                                    <span class="ic-sort">
                                                        <span class="down fas fa-sort-amount-down"></span>
                                                        <span class="up fas fa-sort-amount-up"></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                        
                                        <td class="td-w210">
                                            <div class="td-iner">
                                                <span class="ic far fa-address-card"></span>
                                                KONTAK
                                            </div>
                                        </td>
                                        <td class="td-w210">
                                            <div class="td-iner">
                                                <span class="ic sli_icon-home"></span>
                                                ALAMAT
                                            </div>
                                        </td>
                                        <td class="td-w240">
                                            <div class="td-iner">
                                                <span class="ic sli_icon-credit-card"></span>
                                                PEMBAYARAN
                                            </div>
                                        </td>
                                        
                                        <td class="td-center td-w70">
                                            <div class="td-iner">
                                                <span class="far fa-sun fsize14"></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="div">
                    <div class="atable table-body">

                        <!-- empty -->
                        <!-- <div class="tr empty">
                            <div class="tbody">
                                <div class="div">
                                    <div class="div">
                                        <span class="icon flaticon2-warning"></span>
                                    </div>
                                    <div class="div">
                                        Data tidak ditemukan
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="tr">
                            <div class="thr">
                                <div class="div clr-float">
                                    
                                    <div class="spc">
                                        <div class="tag">
                                            <ul>
                                                <li class="bc-green">
                                                    <span class="fa flaticon2-check-mark"></span>
                                                    <span>SUCCESS</span>
                                                </li>
                                                <li class="bc-orange">
                                                    <span class="sli_icon-clock"></span>
                                                    <span>MV</span>
                                                </li>
                                                <li class="bc-red">
                                                    <span class="sli_icon-credit-card"></span>
                                                    <span>MP</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spc">
                                        <span class="txt11"><b>HB210305MNH9INV</b></span>
                                    </div>
                                    

                                    <div class="spcr">
                                        <span class="label sli_icon-calendar"></span>
                                        <span class="date">16.41</span>
                                    </div>
                                    <div class="spcr wh-m-520">
                                        <span class="label sli_icon-user-follow"></span>
                                        <b class="up-txt">ADMIN</b>
                                    </div>
                                </div>
                            </div>
                            <div class="tbody">
                                <table>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="td-iner">
                                                    <div class="div">

                                                        <ul class="ls">
                                                            <li class="ls">x3 Magastrol</li>
                                                            <li class="ls">x4 Stomago</li>
                                                        </ul>
                                                    </div>
                                                    <div class="div ws-m-520">
                                                        <span><b>Total</b></span>
                                                        <span><b>Rp320.000</b></span>
                                                    </div>
                                                    <div class="div">
                                                        <div class="div label">
                                                            <span class="bubble">
                                                                <span class="ic sli_icon-note"></span>
                                                                <span class="inbubble" title="note">Catatan</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w180 wh-m-520">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <span class="sli_icon-symbol-female"></span>
                                                        <span><b>Indri</b></span>
                                                    </div>
                                                    <div class="div">
                                                        <span class="label sli_icon-screen-tablet"></span>
                                                        <span>0868688787</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w180 wh-m-520">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <span><b>Bank Mandiri</b></span>
                                                    </div>
                                                    <div class="div">
                                                        <span>Rp320.000</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w210 wh-m-520">
                                                <div class="td-iner">

                                                    <div class="div">

                                                        <div class="div">
                                                            <span class="label">Pengiriman ke:</span>
                                                        </div>
                                                        <div class="div">
                                                            <ul>
                                                                <li>
                                                                    <span>Jl. Cilangkap baru</span>
                                                                </li>
                                                                <li>
                                                                    <span>Kec. Cipayun - Kota Jakarta Timur</span>
                                                                </li>
                                                                <li>
                                                                    <span>DKI Jakarta - 132878</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </td>
                                            <td class="td-center td-w70">
                                                <div class="td-iner disvis">
                                                    <div class="div">

                                                        <div class="dropdown dropleft">
                                                            <button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="fas fa-ellipsis-v"></span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item color-green" href="#">
                                                                    <span>Detail</span>
                                                                    <span class="ic sli_icon-bag"></span>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item color-red" href="#">
                                                                    <span>Batalkan</span>
                                                                    <span class="ic sli_icon-trash"></span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div> -->

                        <div class="tr splash">
                            <div class="thr">
                                <div class="div clr-float">
                                    <div class="spc load splash-tbl">
                                    </div>
                                    <div class="spc load splash-tbl">
                                    </div>
                                    <div class="spcr load splash-tbl">
                                    </div>
                                </div>
                            </div>
                            <div class="tbody">
                                <table>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <div class="div">
                                                            <div class="load w210 splash-tbl"></div>
                                                        </div>
                                                        <div class="div">
                                                            <div class="load splash-tbl"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w260 wh-m-520">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <div class="load splash-tbl"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-right td-w100">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <span class="load w70 splash-tbl"></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tr splash">
                            <div class="thr">
                                <div class="div clr-float">
                                    <div class="spc load splash-tbl">
                                    </div>
                                    <div class="spc load splash-tbl">
                                    </div>
                                    <div class="spcr load splash-tbl">
                                    </div>
                                </div>
                            </div>
                            <div class="tbody">
                                <table>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <div class="div">
                                                            <div class="load w210 splash-tbl"></div>
                                                        </div>
                                                        <div class="div">
                                                            <div class="load splash-tbl"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w260 wh-m-520">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <div class="load splash-tbl"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-right td-w100">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <span class="load w70 splash-tbl"></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tr splash">
                            <div class="thr">
                                <div class="div clr-float">
                                    <div class="spc load splash-tbl">
                                    </div>
                                    <div class="spc load splash-tbl">
                                    </div>
                                    <div class="spcr load splash-tbl">
                                    </div>
                                </div>
                            </div>
                            <div class="tbody">
                                <table>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <div class="div">
                                                            <div class="load w210 splash-tbl"></div>
                                                        </div>
                                                        <div class="div">
                                                            <div class="load splash-tbl"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-w260 wh-m-520">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <div class="load splash-tbl"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-right td-w100">
                                                <div class="td-iner">
                                                    <div class="div">
                                                        <span class="load w70 splash-tbl"></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- footer table -->
            <div class="fot-table table-footer">
                <div class="div clr-float">
                    <div class="fl-left title">
                        Total <span class="value val-page-total">0</span>
                        - Hal <span class="value val-paging">0</span> dari <span class="value val-count-page">0</span>
                    </div>
                    <div class="fl-right">
                        <button class="fas fa-arrow-left cmd-pagination" data-area="back" role="off" disabled="disabled"></button>
                        <button class="fas fa-arrow-right cmd-pagination" data-area="next" role="off" disabled="disabled"></button>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- modal -->
</main>

<!-- template table -->
<div class="div hide">
    <!-- TEMP TABLE -->
    <div class="temp-table">
        <div class="tr" data-id="{id}" data-token="{token}">
            <div class="thr">
                <div class="div clr-float">
                    
                    <div class="spc">
                        <div class="tag">
                            <ul>
                            {status}
                            </ul>
                        </div>
                    </div>

                    <div class="spc">
                        <span class="txt11">Nomor. #{invoice}</span>
                    </div>
                    

                    <div class="spcr">
                        <span class="label sli_icon-calendar"></span>
                        <span class="date">{date}</span>
                    </div>
                </div>
            </div>
            <div class="tbody">
                <table>
                    <tbody>

                        <tr>
                            <td>
                                <div class="td-iner">
                                    <div class="div">
                                        <b>{name}</b>
                                    </div>
                                </div>
                            </td>

                            

                            <td class="td-w210 wh-m-520">
                                <div class="td-iner">
                                    <div class="div">
                                        <div class="div">
                                            <span class="label">Email:</span>
                                            <div class="div">
                                                <span>{email}</span>
                                            </div>
                                            <div class="iner-bts"></div>

                                        </div>
                                        <div class="div">
                                            <span class="label">Catatan:</span>
                                            <div class="div">
                                                <span>{notes}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="td-w210 wh-m-520">
                                <div class="td-iner">

                                    <div class="div">
                                        <div class="div">
                                            <span class="label">Alamat:</span>
                                            <div class="div">
                                                <span>{address}</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </td>

                            <td class="td-w240 wh-m-520">
                                <div class="td-iner">
                                    
                                    <div class="div">
                                        <div class="div">
                                            <span class="label">Total (Rp):</span>
                                        </div>
                                        <span>{total}</span>
                                    </div>
                                    <div class="iner-bts"></div>
                                    <div class="div">
                                        <div class="div">
                                            <span class="label">Bank:</span>
                                        </div>
                                        <span>
                                            {bank}
                                        </span>
                                    </div>
                                </div>
                            </td>

                            <td class="td-center td-w70">
                                <div class="td-iner disvis">
                                    <div class="div">

                                        <!-- THIS AREA FOR BUTTON -->

                                        <div class="dropdown dropleft">

                                            <button type="button" class="btn btn-primary nobr grey s11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fas fa-ellipsis-v"></span>
                                            </button>

                                            <div class="dropdown-menu">

                                                <a class="dropdown-item cmd-modal-widget" data-toggle="modal" data-target="#modal-create-formula" data-type="edit" href="#" role="off">
                                                    <span>Lihat Detail</span>
                                                    <span class="ic sli_icon-pencil"></span>
                                                </a>

                                                @if($account->level == 1)
                                                <div class="dropdown-divider"></div>

                                                <a class="dropdown-item color-orange cmd-modal-widget" data-toggle="modal" msg-type="delete-order" data-target="#modal-update" data-invoice="#" href="#"role="off">
                                                
                                                    <span>Verifikasi</span>
                                                    <span class="ic sli_icon-credit-card"></span>
                                                </a>
                                                @endif


                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<script>
$(document).ready(function(){

    $('#form-table').submit(function(){
        var form = $(this),
        area = $('.area-table'),
        body = area.find('.table-body'),
        footer = area.find('.table-footer'),
        temp = $("body").find(".temp-table").html();
        
        splashtable();
        var $t = ajaxFormRequest(form);
        $t.success(function(n){
            var data = n.data;
            console.log(data);

            body.html('');

            // //body table
            tempTable = temp_table(data.list,temp,body);
            body.html(tempTable);

            // //footer
            footer.find('.val-page-total').html(data.total);
            footer.find('.val-paging').html(data.page);
            footer.find('.val-count-page').html(data.countpage);
            footer.removeClass('hide');

            paginationTable(form,data.countpage);

        });
        $t.error(function(n){
            console.log(n);
            body.html('');

            // function get empty
            var li = tableempty(n.responseJSON.message);
            body.html(li);
            footer.addClass('hide');

            //disabled sort
            CONFIG.TABLE.sort = 0;
            CONFIG.TABLE.countpage = 0;

        });
    });


    function temp_table(e,w,y){
        var data = e,
        temp = w,
        area = y;

        list = '';

        $.each(data, function(i,item){
            var listx = temp;
        
            listx = listx.replace("{status}", '<li class="'+(item.payment.status === 0 ? 'bc-red': (item.payment.status === 1 ? 'bc-green' : (item.payment.status === 2 ? 'bc-orange' :'bc-purple') ) )+'"><span class="fa flaticon2-check-mark ic hide"></span><span class="up-txt">'+ (item.payment.label) +'</span></li>');

            listx = listx.replace("{id}", item.id);
            listx = listx.replace("{invoice}", item.invoice);
            listx = listx.replace("{name}", item.user.name);
            listx = listx.replace("{notes}", item.notes);
            listx = listx.replace("{address}", item.address);
            listx = listx.replace("{date}", item.date);
            listx = listx.replace("{email}", item.user.email);
            listx = listx.replace("{total}", formatRupiah(item.payment.total));
            listx = listx.replace("{bank}", item.payment.bank);

            list += listx;
        });

        y.html(list);

    }

    function loadtable()
    {
        $('#form-table').submit();
    }

    // call load table
    loadtable();

    return false;
})
</script>
@endsection