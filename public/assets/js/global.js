function selectGender(e,n)
{
    e.preventDefault();
    
    var cmd = n,
    dataid = cmd.attr('dataid'),
    role = cmd.attr('data-role'),
    area = cmd.parents('.area-gender'),
    form = cmd.parents('form');


    if( cmd.attr('role') === 'off')
    {
        area.find('.cmd-gender').attr('role', 'off');
        cmd.attr('role', 'on');
        area.attr('data-role', role);
    }

    form.find('input[name="gender"]').val(dataid);
}

function formatRupiah(angka, prefix)
{
    var number_string = parseFloat(angka).toString(),
    split   		= number_string.split(','),
    sisa     		= split[0].length % 3,
    rupiah     		= split[0].substr(0, sisa),
    ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp' + rupiah : '');
}

function formatNumber(angka)
{
    var number_string = angka.toString(),
    split   		= number_string.split(','),
    sisa     		= split[0].length % 3,
    rupiah     		= split[0].substr(0, sisa),
    ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;

    return rupiah;
}


function formatRupiahKeyup(angka)
{
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    sisa     		= number_string.length % 3,
    rupiah     		= number_string.substr(0, sisa),
    ribuan     		= number_string.substr(sisa).match(/\d{3}/gi);

    if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    return rupiah;
}

function cleanJSON(q){
    var text = JSON.parse(q.replace(/&quot;/g,'"'));
    return text;
}

function tnumabjs(q)
{
    var x = q.val();
    var xy = x.replace(/[^0-9a-zA-Z' ']/g,'');
    q.val( xy );
}

function tnumabj(q)
{
    var x = q.val();
    var xy = x.replace(/[^0-9a-zA-Z']/g,'');
    q.val( xy );
}

function tnumber(q)
{
    var x = q.val();
    var xy = x.replace(/[^0-9]/g,'');
    q.val( xy );

}

function cnumber(q)
{
    var y = q.replace(/[^0-9]/g,'');
    return y;
}

function cnumberdot(q)
{
    var y = q.replace(/[^0-9\.]/g,'');
    return y;
}

function numberSingeDot(e){
    var y = e.val();
    var x = y.replace(/[^0-9]*\.?[^0-9]*$/);
    return e.val(x);
}

async function formdatasend(e)
{
    var unindexed_array = e.serializeArray();
    var datasend = {};

    $.map(unindexed_array, function(n, i){
        datasend[n['name']] = n['value'];
    });

    return JSON.stringify(datasend);
}

// e = data,
// t = metode (GET/POST),
// k = type header (key/auth),
// w = type bundle (form),
// u = URL

function FormSending(e,t,k,w,u)
{
    // var $url = CONFIG.APPS.URL.API +  (w === "form" ? e.attr('action') : e);
    var $url = u;
    var $h = {
        "Content-Type": "application/json",
        "key": getaccount().token
    },
    $hx = {
        "Content-Type":"application/json",
        "Authorization": "Bearer " + getToken()
    };
    var $g = {
        type: 'GET',
        url: $url,
        headers: k === "key" ? $h : $hx,
        timeout: 18000,
        cache: false,
        dataType: 'JSON'
    },
    $p = {
        type: 'POST',
        url: $url,
        headers: k === "key" ? $h : $hx,
        timeout: 18000,
        cache: false,
        data: t === "GET" ? "" : formdatasend(e),
        dataType: 'JSON'
    };

    var $x = t === 'GET' ? $g : $p;
    var $te = $.ajax($x);

    return $te;

}

// FORMDATASENDNEW
function FormDataSendNew(e)
{
    var form = e;
    var fd = new FormData();


    var file_data = form.find('*[type="file"]'); // for multiple files

    if( file_data.length > 0){
        for(var i = 0; i < file_data.length; i++){
            fd.append(file_data.attr('name'), file_data[0].files[i]);
        }
    }

    // fd.append(form.find('input[name="file"]').attr('name'), form.find('input[name="file"]')[0].files[0]);

    var other_data = form.serializeArray();
    $.each(other_data,function(key,input){
        fd.append(input.name,input.value);
    });

    return fd;
}

// e = data (form or array)
// m = metode (GET/POST)
// a = authentication (key,auth,token)
// x = "file" or ""
// u = URL

function FormSendingNew(e,m,a,x,u)
{
    var $url = u;
    var $key = typeof getaccount() === 'undefined' ? '' : getaccount().token;
    var $token = typeof getaccount() === 'undefined' ? '' : getToken();
    // header
    var $h = {
        "Content-Type": "application/json",
        "key": $key
    },
    $hx = {
        "Content-Type":"application/json",
        "Authorization": "Bearer " + $token
    },
    $hs = {
        "Content-Type":"application/json",
    };

    //header for file post
    var $hfk = {
        "key": $key
    },
    $hfa = {
        "Authorization": "Bearer " + getToken()
    }

    // body
    var $g = {
        type: 'GET',
        url: $url,
        headers: a === "key" ? $h : ( a === 'token' ? $hx : $hs),
        timeout: 18000,
        cache: false,
        dataType: 'JSON'
    },
    $p = {
        type: 'POST',
        url: $url,
        headers: a === "key" ? $h : ( a === 'token' ? $hx : $hs),
        timeout: 18000,
        cache: false,
        data: FormDataSendNew(e),
        dataType: 'JSON'
    },
    $f = {
        type: 'POST',
        url: $url,
        headers: a === 'auth' ? $hfa : $hfk,
        cache: false,
        contentType: false,
        processData: false,
        data: m === "GET" ? "" : ( x === '' ? formdatasend(e) : FormDataSendNew(e) ),
        dataType:"JSON"
    };

    var $x = m === 'GET' ? $g : ( x === 'file' ? $f : $p);

    // console.log($x);
    var $te = $.ajax($x);
    return $te;

}

function FormSendingMultiple(e,m,a,x,u){
    var $URL = u;
    var $KEY = typeof getaccount() === 'undefined' ? '' : getaccount().token;
    var $TOKEN = typeof getaccount() === 'undefined' ? '' : getToken();

    //create header
    if( m === 'GET'){

        $header = {
            "Content-Type":"application/json",
            "key": ($KEY === '' ? '' : $KEY)
        }
    }else{
        if(a === 'key'){
            $header = {
                "Content-Type": "application/json",
                "key": $KEY
            }
        }else{
            $header = {
                "Content-Type":"application/json",
                "Authorization": "Bearer " + $TOKEN
            }
        }
    }

    //CREATE BODY
    if(m === 'GET'){
        $body = {
            type: 'GET',
            url: $URL,
            headers: $header,
            timeout: 18000,
            cache: false,
            dataType: 'JSON'
        }
    }else{
        if(x === ''){

            $body = {
                type: 'POST',
                url: $URL,
                headers: $header,
                timeout: 18000,
                cache: false,
                // data: formdatasend(e),
                // data: e,
                // processData: false,
                data: FormDataSendNew(e),                
                dataType: 'JSON'
            }
        }else{
            $body = {
                type: 'POST',
                url: $URL,
                headers: $header,
                cache: false,
                contentType: false,
                processData: false,
                data: FormDataSendNew(e),
                dataType:"JSON"
            }
        }
    }


    var $te = $.ajax($body);

    return $te;

}

function FormSendingType(e,m,a,u)
{
    var $token = a === "key" ? getaccount().token : "Bearer " + getToken();
    var $data = e,
    $URL = u,
    $type = m;

    if( a === "key")
    {
        var $h = {
            "Content-Type":"application/json",
            "key":$token
        }
    }
    else
    {
        var $h = {
            "Content-Type":"application/json",
            "Authorization":$token
        }
    }

    $f = {
        type: $type,
        url: $URL,
        headers: $h,
        cache:false,
        contentType:false,
        processData: false,
        dataType:"JSON",
        data: JSON.stringify($data)
    }
    var $te = $.ajax($f);

    return $te;
}

//NEW SENDING FILE OR NOT FILE
function FormDataSendMulti(e,x)
{
    


    if(x === 'file'){

        var form = e;
        var fd = new FormData();

        var file_data = form.find('input[type="file"]'); // for multiple files
        for(var i = 0; i < file_data.length; i++){
            fd.append(file_data.attr('name'), file_data[0].files[i]);
        }

        var other_data = form.serializeArray();

        $.each(other_data,function(key,input){
            fd.append(input.name,input.value);
        });

        return fd;
    }

    

    var unindexed_array = e.serializeArray();
    var datasend = {};

    $.map(unindexed_array, function(n, i){
        datasend[n['name']] = n['value'];
    });

    return JSON.stringify(datasend);
}

// e = data (form or array)
// m = metode (GET/POST)
// a = authentication (key,auth,token)
// x = "file" or ""
// u = URL
function FormSendingMulti(e,m,a,x,u){
    var $url = u;
    var $key = typeof getaccount() === 'undefined' ? '' : getaccount().token;
    var $token = typeof getaccount() === 'undefined' ? '' : getToken();

    // header
    // var $h = {
    //     "Content-Type": "application/json",
    //     "key": $key
    // },
    // $hx = {
    //     "Content-Type":"application/json",
    //     "Authorization": "Bearer " + $token
    // },
    // $hs = {
    //     "Content-Type":"application/json",
    // };

    // //header for file post
    // var $hfk = {
    //     "key": $key
    // },
    // $hfa = {
    //     "Authorization": "Bearer " + getToken()
    // }

    var $headers = "";
    if( a === "key"){
        $headers = {
            "Content-Type": "application/json",
            "key": $key
        }
    }
    else{
        $headers = $hx = {
            "Content-Type":"application/json",
            "Authorization": "Bearer " + $token
        }
    }
    // body
    var $body = "";
    if( m === "GET"){
        $body = {
            type: 'GET',
            url: $url,
            headers: $headers,
            timeout: 18000,
            cache: false,
            dataType: 'JSON'
        }
    }
    else{
        if( x === 'file'){
            $body = {
                type:"POST",
                url: $url,
                headers: $headers,
                cache: false,
                contentType: false,
                processData: false,
                data: m === "GET" ? "" : FormDataSendMulti(e,x),
                dataType:"JSON"
            }
        }
        else{
            $body = {
                type:"POST",
                url: $url,
                headers: $headers,
                timeout: 18000,
                cache: false,
                data: FormDataSendMulti(e,x),
                dataType:"JSON"
            }
        }
    }

    // var $g = {
    //     type: 'GET',
    //     url: $url,
    //     headers: a === "key" ? $h : ( a === 'token' ? $hx : $hs),
    //     timeout: 18000,
    //     cache: false,
    //     dataType: 'JSON'
    // },
    // $p = {
    //     type: 'POST',
    //     url: $url,
    //     headers: a === "key" ? $h : ( a === 'token' ? $hx : $hs),
    //     timeout: 18000,
    //     cache: false,
    //     data: FormDataSendMulti(e,x),
    //     dataType: 'JSON'
    // },
    // $f = {
    //     type: 'POST',
    //     url: $url,
    //     headers: a === 'auth' ? $hfa : $hfk,
    //     cache: false,
    //     contentType: false,
    //     processData: false,
    //     data: m === "GET" ? "" : FormDataSendMulti(e,x),
    //     dataType:"JSON"
    // };

    
    // var $x = m === 'GET' ? $g : ( x === 'file' ? $f : $p);
    
    // return $body;
    var $te = $.ajax($body);

    return $te;
}
// FUNCTION PREVIEW IMG BEFORE UPLOAD  ==>

// BEFORE CHECK
function beforeUploadImg(e)
{

    if( e.attr('role') === 'off')
    {
        e.attr('role', 'on');
        checkUploadImg(e);
    }
}

function FormSendingGet(e){
    var form = e;

    var $body = {
        type: "GET",
        url: CONFIG.APPS.URL.API + form.attr("action"),
        headers:{
            "Content-Type": "application/json",
            "key": getaccount().token
        },
        cache: false,
        dataType: "JSON",
        data: form.serialize(),
    }

    var $t = $.ajax($body);
    return $t;
}

// CHECK PREV IMG
function checkUploadImg(e)
{
    var cmd = e,
    area = cmd.parents('.area-img-upload'),
    file = area.find('input[name="file"]');

    file.click();

    setTimeout(function(){
        area.attr('role', 'false'); area.find('.cmd-img-upload').attr('role', 'off')}, 3000);
}


function changeUploadImg(e,el)
{

    var file = el,
    area = file.parents('.area-img-upload'),
    button = area.find('.cmd-img-upload');


    if( file.val() === '')
    {
        console.log('null');
        button.attr('role', 'off');
        area.attr('aria-upload', 'false');
        return;
    }

    // console.log(el);
    button.attr('role', 'off');
    area.attr('aria-upload', 'false');
    displayPreview(e.files[0],area);
    return;

}

var _URLt = window.URL || window.webkitURL;
function displayPreview(files,el)
{
    var img = new Image();
    fileSize = Math.round(files.size / 1024);
    
    img.onload = function ()
    {
        var width=this.width,
            height=this.height,
            imgsrc=this.src,
            imgX = this.offsetX;

        //cekimage
        cekimage(fileSize,width,height,imgsrc,imgX,el)
        // console.log(imgsrc);

    };

    img.src = _URLt.createObjectURL(files);

}

//ceking preview image
function cekimage(size,width,height,imgsrc,imgX,el)
{
    var area = el,
    file = area.find('*[name="file"]'),
    button = area.find('.cmd-img-upload');
    area.removeClass("br-error");

    if( size > 1999 )
    {
        area.attr('aria-upload', 'false');
        button.attr('role', 'off');
        area.addClass("br-error");
        file.val("");
        flagnotif("error", "Ukuran file maksimal 2 Mb");

        // alert('Ukuran file maksimal 2 Mb');
    }
    else if( width < 220 && height < 220 )
    {
        area.attr('aria-upload', 'false');
        button.attr('role', 'off');
        area.addClass("br-error");
        file.val("");
        flagnotif("error", "Lebar dan tinggi sekurangnya 200 pixel");
        // console.log('Lebar dan tinggi sekurangnya 200 pixel');
    }
    else if( width > 2048 && height > 2048 )
    {
        area.attr('aria-upload', 'false');
        button.attr('role', 'off');
        area.addClass("br-error");
        file.val("");
        flagnotif("error", "Ukuran pixel gambar terlalu besar, maksimal 2048 pixel")
        // console.log('Ukuran pixel gambar terlalu besar, maksimal 2048 pixel');
    }
    else
    {

        area.find('.img-upload').attr('src', imgsrc);
        area.attr('aria-upload', 'true');
        button.attr('role', 'off');

    }

}


// DELETE PREV IMG
function deleteUploadImg(e)
{
    var cmd = e,
    area = cmd.parents('.area-img-upload');

    if( cmd.attr('role') === 'off')
    {
        cmd.attr('role', 'on');
        area.find('input[name="file"]').val('');
        area.find('img.img-upload').attr('src', '');
        area.attr('aria-upload', 'false');
        cmd.attr('role', 'off');
    }

}


//PREVIEW UPLOAD NEW
function btnPreviewUploadNew(w)
{
    var cmd = w,
    area = cmd.parent(".area-preview-upload"),
    file = area.find("input[type='file']");

    if(cmd.attr("role") === "off")
    {
        cmd.attr("role", "on");
        area.find("span.error").remove();
        area.find(".br-error").removeClass("br-error");
        file.click();
        setTimeout(function(){
            cmd.attr("role","off");
        }, 500);
    }
}

function PreviewUploadNew(w)
{
    var file = $(w),
    area = file.parent(".area-preview-upload"),
    button = area.find(".cmd-preview-upload"),
    label = button.find(".label-name");

    if( file.val() === '')
    {
        // button.attr("role", "off");
        label.html(label.attr("aria-label"));
        file.val("");
        return
    }
    checkPreviewUploadNew(w);
}

function checkPreviewUploadNew(w)
{
    var file = $(w),
    files = w.files[0],
    area = file.parent(".area-preview-upload"),
    button = area.find(".cmd-preview-upload"),
    label = button.find(".label-name");

    var fileSize = Math.round(files.size / 1024),
    max = (parseFloat(file.attr("max-size")) * 1000);

    if( fileSize > max)
    {
        label.html(label.attr(".label-name"));
        area.append("<span class='error'>Ukuran file maksimal "+ ( max / 1000) +"Mb</span>");
        button.addClass("br-error");
        file.val("");
        return
    }

    label.html(files.name);
}
// END PREVIEW UPLOAD NEW


// PREVIEW UPLOAD FILE NON IMAGE
function previewBeforeUploadFile(w){
    var file = $(w),
    area = file.parents(".area-upload-file"),
    button = area.find(".cmd-preview-upload"),
    files = w.files[0],
    label = area.find(".label-upload"),
    labelName = label.attr("label-name"),
    dataMax = parseFloat(file.attr("data-max")),
    dataMin = parseFloat(file.attr("data-min"));


    var fileSize = Math.round(files.size / 1024),
    maxSize = (dataMax * 1000),
    minSize = (dataMin * 1000);

    // area.find(".label-upload button").attr("disabled","disabled");

    if(fileSize > maxSize){
        flagnotif("error", "Ukuran file melebihi ketentuan, seharusnya "+dataMax+" MB");
        // button.attr("role","off");

        return false;
    }else if(fileSize < minSize){
        flagnotif("error", "Ukuran file terlalu kecil dari ketenturan ketentuan, seharusnya "+dataMin+" MB");

        // button.attr("role","off");
        return false;
    }else{
        area.find(".label-upload").show();
        area.find(".navi-upload-before").hide();
        // area.find(".label-upload button").removeAttr("disabled");
        area.find(".label-upload .label-upload-name").html(files.name);
        // button.attr("role","off");
    }
    
}

// CANCEL UPLOAD FILE
function cancelUploadFile(w){
    var button = w,
    area = button.parents(".area-upload-file");

    if(button.attr("role") === "off"){
        button.attr("role","on");
        area.find(".label-upload").hide();
        area.find(".navi-upload-before").show();
        // area.find(".label-upload button").attr("disabled","disabled");
        area.find(".label-upload .label-upload-name").html("");
        area.find("*[name='file']").val("");
        button.attr("role","off");

    }
}

// SAVE UPLOAD FILE
function savelUploadFile(w){
    var button = w,
    area = button.parents(".area-upload-file"),
    form = area.find("form");

    if(button.attr("role") === "off"){
        button.attr("role","on");
        area.find(".label-upload button.cmd-upload-cancel").attr("disabled","disabled");

        //
        var $URL = CONFIG.APPS.URL.API + form.attr("action"),
        $t = FormSendingNew(form,"POST","KEY","file",$URL);
        $t.success(function(n){
            console.log(n);
            createTableUpload(n);
        });
        $t.error(function(n){
            console.log(n);
        });
    }
}


//CREATE TABLE UPLOAD
function createTableUpload(w){
    var data = w,
    area = $("body").find(".area-table-content");

    area.find(".modal-area-upload").remove();

    var modal = '<div class="modal-area-upload">';
        modal += '<div class="area-table-form">';
            modal += '<table><tbody>';

                modal += '<tr>';
                // $.each(w.header, function(i, item){
                    modal += '<th class="txt-center td-wno"><div class="td-inner">No</div></th>';
    
                    modal += '<th class="td-wname"><div class="td-inner">Name</div></th>';
                // });
                // HEADER
                modal += '</tr>';

                //LOOP DATA
                $.each(w.items,function(i, item){
                    modal += '<tr>';
                        modal += '<td class="td-wno txt-center"><div class="td-inner">'+ (i + 1) +'</div></td>';
                        modal += '<td class="td-wname" ><div class="td-inner" title="'+item.name+'">'+item.name+'</div></td>';
                    modal += '</tr>';
                });

                
            modal += '</tbody></table>';
        modal += '</div>';
    modal += '</div>';

    area.append(modal);
}

// COURIER
function calcWeightCourier(e,n,m)
{
    var weight = parseFloat(e),
    wgup = parseFloat(n),
    wgtype = m, wgt = 0,
    wg = 0, num = 0, dec = 0,
    wgbagi = wgtype === 'kg' ? 1000 : 1;

    if( wgtype === 'kg')
    {
        wg = ( weight / wgbagi );
        
        //set default 1 kg
        if( weight < wgbagi )
        {
            wg = 1;
        }
        else
        {
            //hitung
            wg = wg;
        
        }

        num = wg % 1 != 0 ? 1 : 0;
    }
    else
    {
       if( weight < 1000)
       {
           wg = 1;
       }
       else
       {
           wg = ( weight / 1000);
           
       }

       num = ( wg / 1000 ) % 1 != 0 ? 1 : 0;
    }


    if( num === 1)
    {
        dec = wg % 1;
        dec = dec;

        if( dec >= wgup )
        {
            dec = 1;

            wgt = Math.floor(wg) + 1;

        }
        else
        {
            dec = dec;
            wgt = Math.floor(wg);
        }

    }
    else
    {

        
        dec = 'x';
        wgt = wg;
    }


 
    var wgv = wgtype === 'kg' ? wgt : (wgt * 1000);

    return wgv;

    // //
    // console.log('(' + wgt + '-'+ wgup + '), ' + weight + ', ' + wg + ' ,' + num + ', ' + dec);
    // console.log(wgt + ' - ' + weight + ' : ' + wgv);


    

}



// COPY

// function copyText(e,n,r)
// {
//     var text = e,
//     type = n,
//     success = r;

//     var area = '<textarea id="textcopy"></textarea>';

//     $('body').find('textarea#textcopy').remove();

//     $('body').append(area);
//     $('body').find('textarea#textcopy').val(text);

//     var copyText = document.getElementById('textcopy');
//     copyText.focus();

//     copyText.select();
//     copyText.setSelectionRange(0,999999);

//     document.execCommand("copy");
//     $('body').find('textarea#textcopy').remove();
    
//     alert(success);

// }

function copyText(e){
    var cmd = e,
    text = cmd.attr("data-value");

    var area = '<textarea id="textcopy"></textarea>';

    $('body').find('textarea#textcopy').remove();

    $('body').append(area);
    $('body').find('textarea#textcopy').val(text);

    var copyText = document.getElementById('textcopy');
    copyText.focus();

    copyText.select();
    copyText.setSelectionRange(0,999999);

    document.execCommand("copy");
    $('body').find('textarea#textcopy').remove();
    
    alert('Berhasil di copy...');
}


function pageNotFound(el)
{

    var content = '<div class="notfound"><div class="div"><div class="div"><img src="'+CONFIG.APPS.URL.URI+'/assets/svg/empty.svg" alt=""></div><div class="div"><h2>Waduh, Alamat yang kamu tuju tidak ditemukan!</h2></div><div class="div"><span class="label">Mungkin kamu salah alamat tujuan. Ayok kembali ke tujuan yang benar.</span></div><div class="div"><a href="'+el+'" class="btnb bc-green w210"><span>Kembali</span></a></div></div></div>';

    return content;
}

function replacequot(e)
{
    return JSON.parse( e.replace(/&quot;/g,'"') );

}

// last segment
function lastSegmen()
{
    var url = window.location.href.replace(/\/$/, '');  /* remove optional end / */ 
    var lastSeg = url.substr(url.lastIndexOf('/') + 1);
    
    console.log(lastSeg);
}



function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}


function validateURL(url) {
    return /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
}


// dropdwon src new
function dropdownNew(n)
{

    var button = n,
    area = button.parent('.area-ddwn');

    if( button.attr('role') === 'off')
    {
        $("body").find(".area-ddwn.open").removeClass("open");
        $("body").find(".area-ddwn button.cddwn").attr("role","off");
        button.attr('role', 'on');
        area.addClass('open');
        area.find('.ddwn-tsrc').val('');
        area.find("ul li.li-append").remove();
        area.find("ul li.empty").remove();
        area.find("ul li.loading").remove();

        // area.find('.ddwn-tsrc').val('xxx');
        area.find('ul li').removeClass('hide');
        setTimeout(function(){
            area.find('.inhd').addClass('br-green-f');
            // area.find('.ddwn-tsrc').val('');
            area.find('input[type="text"]').focus();
        }, 200);
        
    }
    else
    {
        button.attr('role', 'off');
        area.removeClass('open');
        area.find('.inhd').removeClass('br-green-f');
    }

}

function getDataSearchDrowpdown(w){
    var area = w;

    var $URL = CONFIG.APPS.URL.API + area.attr("data-action");

    console.log($URL);
}

//select dropdown
function selectedDDWN(n)
{
    var button = n,
    li = button.parent('li'),
    area = button.parents('.area-ddwn'),
    cmd = area.find('button.cddwn');

    if( button.attr('role') === 'off')
    {
        button.attr('role', 'on');
        
        area.find('ul li').attr('aria-selected','false');
        li.attr('aria-selected','true');
        area.find('input.value-dropdown').val(button.attr('dataid'));
        cmd.find('span').html(button.find('span').html());

        // if(area.attr("data-action") !== undefined){
        //     area.find("ul").html("");
        // }

        if(li.find("button").attr("aria-role") === "true"){
            area.attr("aria-role", "true");
        }else{
            area.attr("aria-role", "false");
        }

        area.find(".ddwn-header input").val("");
        area.find('label.error').remove();
        area.find('span.error').remove();
        area.find('.br-error').removeClass('br-error');
        cmd.click();
        area.find("ul li.li-append").remove();
        button.attr('role', 'off');
    }
}



//default src dropdown
function defaultDDWNSrc(n){

    var area = n,
    button = area.find("button.cddwn"),
    label = area.attr("data-label"),
    value = area.attr("data-value");

    button.find("label span").html(label);
    area.find(".value-dropdown").val(value);
    area.find("ul li").attr("aria-selected","false");
    area.find("ul li button").attr("role","off");
    // button.click();

    // console.log(label);
}

// GET DATA IF DROPDOWN SRC WITH URL GET
var typingTimerSrcDdwn;
var CONFSRCDDWN = {
    "timer" :   0,
    "countHide" : 0,
    "countDef" : 0,
    "countSrc" : 0
}

// SEARCH DROPDOWN
function srcDDWN(n)
{
    var txt = n,
    area = n.parents('.area-ddwn'),
    text = txt.val().toLowerCase(),
    dataURL = txt.attr("data-url");

    area.find('ul li').attr('aria-selected','false');

    // REMOVE EMPTY
    
    area.find("ul li.empty").remove();
    area.find("ul li.loading").remove();
    area.find("ul li.li-append").remove();

    if( $.trim(txt.val()) < 1 )
    {
        area.find('ul li').removeClass('hide');
    }

    if( $.trim( txt.val() ) !== "" )
    {

        
        area.find('ul li').addClass('hide');

        area.find('ul li').filter(function()
        {
            return $(this).find('button span').text().toLowerCase().indexOf(text) !== -1;

        }).removeClass('hide');

        // IF DATA URL TRUE
        CONFSRCDDWN.countDef = area.find("ul li.li-default").length;
        CONFSRCDDWN.countHide = area.find("ul li.hide").length;
        if( dataURL !== undefined){

            if(CONFSRCDDWN.countDef - CONFSRCDDWN.countHide < 1){
                area.find("ul li.li-default").addClass("hide");
                area.find("ul li.li-append").remove();
                getSrcDdwnUrl(txt);
            }

        }else{
            if(CONFSRCDDWN.countDef - CONFSRCDDWN.countHide === 0){

                area.find("ul").append("<li class='empty'>Data tidak ditemukan!</li>");
            }

        }

    }

}

// FUNCTION FOR SRC DROPDOWN
function getSrcDdwnUrl(n){
    var txt = n,
    value = $.trim(txt.val()),
    area = txt.parents(".area-ddwn");

    area.find("ul li.loading").remove();

    if(value.length > 2){

        area.find("ul").append("<li class='loading'><i class='color-grey'>Sedang memuat...</i></li>");

        getSrcDdwnUrlData(txt);

        return;
    }

    area.find("ul").append("<li class='loading'><i class='color-grey'>Ketikan minimal 3 karakter...</i></li>");

}

function getSrcDdwnUrlData(e){
    var txt = e,
    value = $.trim(txt.val()),
    area = txt.parents(".area-ddwn");

    var $URL = CONFIG.APPS.URL.API + txt.attr("data-url");
    $URL += "&src=" + value;
    $URL += "&sort=asc";

    clearTimeout(typingTimerSrcDdwn);
    typingTimerSrcDdwn = setTimeout(function(){
        var $t = FormSending("","GET","key","",$URL);
        $t.success(function(n){
            // console.log(n);
            var $data = n.data;

            // area.find("ul li.li-append").remove();

            if(txt.attr("data-func") === undefined){

                var $list = '';
                $.each($data, function(i, item){
                    $list += '<li aria-selected="false" dataid="'+item.id+'" class="li-append"><button role="off" dataid="'+item.id+'"><span>'+item.name+'</span></button></li>';
                });
                area.find("ul li.loading").remove();
                area.find("ul").append($list);
                return;
            }
            
            eval(txt.attr("data-func") + "($data)");

            area.find("ul li.loading").remove();
        });
        $t.error(function(n){
            console.log(n);
            area.find("ul li.loading").remove();

            if(txt.attr("data-func-error") === undefined){

                area.find("ul").append("<li class='empty'>Data tidak ditemukan!</li>");

                return;
            }

            eval(txt.attr("data-func-error") + "()");
            

        });
    }, 300);

}

$('body').on('keydown', '.ddwn-tsrc', function(e)
{
    if($(this).attr("data-url") !== undefined){
        clearTimeout(typingTimerSrcDdwn);
    }
});

function findSrcDropdown(w)
{
    var txt = w,
    area = txt.parent(".area-src-dropdown"),
    text = txt.val().toLowerCase();

    if( $.trim(txt.val()) !== "")
    {
        area.find("ul li").addClass("hide");
        area.find("ul li").filter(function()
        {
            return $(this).find(".src-label").text().toLowerCase().indexOf(text) !== -1;
        }).removeClass("hide");

        return
    }
    
    if( $.trim(txt.val()) === "")
    {
        area.find("ul li").removeClass("hide");
    }

    // console.log(txt.val());
}

// function splashDisplayIcon()
// {
//     var content = '<div class="splash-dis wth"><div class="tbl"><div class="intbl txt-center"><div class="div"><div class="logo-ctr"></div><div class="div"><b class="color-green">Loading page...</b></div><div class="div"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div></div></div></div></div>';
    
//     $('body').find('.splash-dis').remove();
//     $('body').append(content);
// }

function vspassword(e)
{
    var cmd = e,
    form = cmd.parents('form');

    if( cmd.attr('role') === 'off')
    {
        cmd.attr('role', 'on');
        cmd.html('Sembunyikan');
        form.find('input.password').attr('type', 'text');
        form.find('input.password').eq(0).focus();
    }
    else
    {
        cmd.attr('role', 'off');
        cmd.html('Tampilkan');
        form.find('input.password').attr('type', 'password');
    }
    // form.find('input.password')
    return false;
}

// change Date
function changeDate(start,end)
{

    if( start !== '')
    {
        var xstart = start.split('/'),
        startDate = xstart[2] + '-' + xstart[1] + '-' + xstart[0];
    }
    else
    {
        startDate = '';
    }

    if( end !== '')
    {
        var xend = end.split('/');
        endDate = xend[2] + '-' + xend[1] + '-' + xend[0];
    }
    else
    {
        endDate = '';
    }

    if( start !== '' & end !== '')
    {
        $('body').find('.label-this-date').html( '<span class="fsize12">'+start + '-' +end + '</span>');
        return startDate + '_' + endDate;
    }
    else
    {
        $('body').find('.label-this-date').html('Hari ini');
        return '';
    }
}


// CONVERT DATE
function convertDate(w)
{
    var dt = w.split('/'),
    dt = dt[2] + '-' + dt[1] + '-' + dt[0];

    return dt;
}


// SET DROPDOWN SRC NEW
// SET IF PREVIEW MODAL
function setDropDownSelectedAll(w){
    var modal = w,
    area = modal.find(".area-ddwn");


    $.each(area, function(i, item){
        var list = item,
        value = $(list).find(".value-dropdown").val(),
        label = $(list).find("ul li[dataid='"+value+"'] button span").html();

        $(list).find("button.cddwn label span").html(label);
        $(list).find("ul li[dataid='"+value+"']").attr("aria-selected", "true");
        // console.log(value);
    });
}

function clearEmptyForm(w)
{
    var area = w;

    area.find(".empty").val("");
    area.find(".empty-label").html("");
    area.find(".min1").val("-1");
    area.find(".num1").val("1");
    area.find(".num0").val("0");
    area.find(".se-date").attr("role","off");
    area.find(".br-error").removeClass("br-error");
    area.find("span.error").remove();
    area.find(".area-hidden").addClass("hide");
    area.find(".area-ddwn").removeClass("open");
    area.find(".area-ddwn button.btn").attr("role", "off");
    
    var li = area.find(".ddwn-button-select");

    $.each(li, function(i, item)
    {
        var list = item;
        var value = $(list).attr("data-label");
        $(list).find("button label span").html( value );
        $(list).find("ul li").attr("aria-selected","false");

        if( $(list).attr("aria-select-hide") === 'true')
        {
            $(list).parents(".area-selected-div").addClass("hide");
        }
    });

    var btn = area.find(".button-label");
    $.each(btn, function(i,item)
    {
        var list = item;
        var value = $(list).attr("data-label");
        $(list).find(".label-name").html(value);
        $(list).attr("data-edit","");
        $(list).attr("aria-data","false");
    });

}

function splashDisplayIcon()
{
    var content = '<div class="splash-dis wth"><div class="tbl"><div class="intbl txt-center"><div class="div"><div class="logo-ctr"></div><div class="div"><b class="color-green">Loading page...</b></div><div class="div"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div></div></div></div></div>';
    
    $('body').find('.splash-dis').remove();
    $('body').append(content);
}

function hideSplash()
{
    $('body').find('.splash-dis').remove();
}

function msgerror()
{
    return "Opss... Terjadi kesalahan tidak diketahui, harap refresh kambali";
}

function decimalMax(e,q){
    var txt = e,
    dec = '',
    len = 0;

    var dot = txt.split(".");

    
    if( dot[1] !== undefined){
        var decx = '';

        if(dot[1] !== ''){

            len = dot[1].length
            
            if(len >= q ){
                
                // console.log(limitStr(dot[1],q));
                dec = limitStr(dot[1],q);
            }
            else{
                // console.log(dot[1]);
                dec = dot[1];
            }


        }else{
            dec = '';
        }

    }


    // console.log(dec);
    var num = dot[0] + (dot[1] === undefined ? '' : '.' + dec);
    return num;
}

//check decimal error
function decimalFake(q){
    var txt = q,
    dot = txt.split(".");

    if( dot[1] === '' ){
        
        txt = txt.replace(".","");
        // console.log(txt);
        return txt;
    }

    return txt;
    // console.log(txt);


    // return txt;
}


function limitStr(str, max) {
    str = str.toString();
    

    return str.substring(0, max);
  }


function numberSingleDot(e,q){
    var txt = e;

    if (((q.which !== 46 || (q.which === 46 && txt === '')) ||
            txt.indexOf('.') != -1) && (q.which < 48 || q.which > 57)) {
        q.preventDefault();
    }

    return txt;

}

 // SEARCH DROPDOWN
var typingTimerSearch;
var configSearchDropdown = {
    status:false,
    value:"",
    label:"",
    area:""
}

function searchDropdown(w){
    var text = w;
    area = text.parents('.area-ddwn'),
    value = text.val(),
    timeInterval = parseFloat(area.attr('data-time'));
    
    //
    configSearchDropdown.area = area;
    configSearchDropdown.status = false;
    configSearchDropdown.value = value;
    area.find('input.value-dropdown').val('');
    area.find('ul').html('');

    //
    if( $.trim( text.val() ).length >= 3 && configSearchDropdown.label !== text.val() )
    {
        
        var value = text.val();
        area.attr('role', 'true');

        // configSearchDropdown.value = value;
        // configSearchDropdown.area = area;

        clearTimeout(typingTimerSearch);
        // typingTimerSearch = setTimeout(getDataSearchDrowpdown, timeInterval);

        typingTimerSearch = setTimeout(function(){
            getDataSearchDrowpdown(area,value)
        }, timeInterval);

        return false;
    }

        // configSearchDropdown.area = area;
        area.attr('role', 'false');
        area.find('ul').html('');
        


}

function getDataSearchDrowpdown(w,e){
    var value = e,
    area = w;

    // var value = configSearchDropdown.value,
    // area = configSearchDropdown.area;

    var $URL = CONFIG.APPS.URL.API + area.attr("data-action") + '?search=' + $.trim(value);

    if( area.attr("add-action") !== undefined){
        $URL += area.attr("add-action");
    }
    
    var $t = FormSending("","GET","key","",$URL);
    $t.success(function(n){
        // console.log(n);

        var data = n.data;
        var $list = '';
        $.each(data.list, function(i,item){
            $list += '<li aria-selected="false" dataid="'+item.id+'" class="">';
                $list += '<button role="off" dataid="'+item.id+'">';
                    $list += '<span>'+item.name+'</span>';
                $list +='</button>';
            $list += '</li>';
        });

        area.find("ul").html($list);
    });
    $t.error(function(n){
        console.log(n);
        area.find("ul").html('<li aria-selected="false" class="empty"><span>'+n.responseJSON.message+'</span></li>');
    });

    area.attr("role", "false");
}


// MESSAGE NOTIF
function flagnotif(e,m)
{
    var type = {
        'success' : '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-success animated fadeInDown" role="alert" data-notify-position="top-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; top: 20px; right: 20px; animation-iteration-count: 1;"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button><span data-notify="icon"></span><span class="sli_icon-check"></span> <span data-notify="message">'+m+'</span><a href="#" target="_blank" data-notify="url"></a></div>',
        //
        'error' : '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown alert-error" role="alert" data-notify-position="top-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; top: 20px; right: 20px; animation-iteration-count: 1;"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button><span data-notify="icon"></span> <span class="flaticon-danger"></span> <span data-notify="message">'+m+'</span><a href="#" target="_blank" data-notify="url"></a></div>'
    }


    $('body').append(type[e]);
    fadeoutflag();
}

// OUT MESSAGE NOTIF
function fadeoutflag()
{
    $('body').find('div.alert').fadeOut(5000, function()
    {
        $(this).remove();
    })
}


// lower case
function lowerCase(x){
    return x.toLowerCase();
}


// REPLACE NL2BR
function nl2br(x){
    return x.replace(/\n/g,"<br>");
}


// CREATE URL API
function CREATE_URL_API(e){
    return CONFIG.APPS.URL.API + e.attr("action");
}


// COUNT DOWN TIME
// var timeAtt=0;
// var timeAttLegal=0;
// var setRunTimerAtt;

function runTimerAtt()
{

    var area = $('body').find('.value-estimated');
    var time = timeAtt - 1000;

    //
    timeAtt = time;
    timeAttLegal = timeAttLegal - 1;
        
    var toDay = new Date(timeAtt);
        
    changeTime(toDay,area);
    // var h = toDay.getHours(),
    // m = toDay.getMinutes(),
    // s = toDay.getSeconds();


    // h = h < 10 ? ('0'+ h) : h;
    // m = m < 10 ? ('0' + m) : m;
    // s = s < 10 ? ('0' + s) : s;

    // area.find('.time').html(h +':' + m +':' + s);
}

function changeTime(e,w)
{
    var toDay = new Date(e),
    area = w;

    var h = toDay.getHours(),
    m = toDay.getMinutes(),
    s = toDay.getSeconds();

    //
    h = h < 10 ? ('0'+ h) : h;
    m = m < 10 ? ('0' + m) : m;
    s = s < 10 ? ('0' + s) : s;

    area.html(h +':' + m +':' + s);
}

function exeRunTimerAtt()
{
    setRunTimerAtt = setInterval(runTimerAtt, 1000);
}

// var timeEstimate = 0,
var timeNow = 0;
function countDownDays(w,a,e,ex){
    //w = time, a = area, e = time on serve, ex status
    // 
    var area = a;
    var timeEstimate = parseFloat(w + '000');
    

    var countDownDate = new Date(timeEstimate).getTime(),
    countDownDate = countDownDate + 1000;
    
    timeNow = parseFloat(e+'000');

    // RUN SET INTERVAL
    var x = setInterval(function() {
    
      // Get today's date and time
      timeNow += 1000;
      var now = new Date(timeNow).getTime();


      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
    //   var limits = {
    //       "d": days,
    //       "h": hours,
    //       "m": minutes,
    //       "s": seconds
    //   }
      // Output the result in an element with id="demo"
        var limits = days + "h " + hours + "j " + minutes + "m " + seconds + "d ";

    // console.log(limits);
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        // console.log("EXPIRED");
        limits = ex;
      }

      area.html(limits);
    //   console.log(limits);

    }, 1000);


}

// function for countdown many
var timeServeNow = 0;
function getCountDownMany(){
    var area = $("body");

    $.each(area.find(".run-countdown"), function(i, item){
        var area = $(this);
        var timeThis = parseFloat($(this).attr("data-time") + '000');

        var countDownDate = new Date(timeThis).getTime(),
        countDownDate = countDownDate + 1000;
        
        timeServeNow = parseFloat( CONFIG.APPS.TIME.NOW +'000');

        // RUN INTERVAL
        var x = setInterval(function() {
    
            // Get today's date and time
            timeServeNow += 1000;
            var now = new Date(timeServeNow).getTime();

            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            var limits = "Expired!";

            if (distance < 0) {
                clearInterval(x);
                // console.log("EXPIRED");
                area.html(limits);
                // limits = ex;
            }else{
                limits = days + "h " + hours + "j " + minutes + "m " + seconds + "d";

              area.html(limits);
            }
        
            

        }, 1000);

        // $(this).html(timeThis);
    });

    // console.log("run Countdown many");
}


// CREATE ELEMENT
function createTextInput(w,e){
    var area = w,
    data = e;


    $.each(data, function(i, item){
        
        // remove
        area.find("*[name='"+item.name+"']").remove();

        const element = document.createElement("input");
        element.setAttribute("name", item.name);
        element.setAttribute("type", item.type);
        element.setAttribute("class", item.class);
        element.setAttribute("value", item.value);
        area.append(element);
    });
}


function createSelectDropdown(w,e){
    var modal = w,
    area = modal.find(".body-items"),
    data = e;

    $.each(data, function(i, item){

        // remove 
        area.find("." + item.name).remove();

        //
        const element = document.createElement("div");
        element.setAttribute("class", item.class + " " + item.name);

        // create label area
        const areaLabel = document.createElement("div");
        areaLabel.setAttribute("class", "div");
        const areaLabelName = document.createElement("span");
        areaLabelName.setAttribute("class", "label up-txt fsize11");
        areaLabelName.innerHTML = item.label.name;
        areaLabel.append(areaLabelName);
        

        // create zone
        const zone = document.createElement("div");
        zone.setAttribute("class", "div");

        // zone area
        const zoneArea = document.createElement("div");
        zoneArea.setAttribute("class", "ddwn area-ddwn ar-content keep");
        zoneArea.setAttribute("data-label", item.zone.label);
    
        // zone button
        const buttonDdwn = document.createElement("button");
        buttonDdwn.setAttribute("class", "btn br-rds8 cddwn");
        buttonDdwn.setAttribute("role", item.zone.button.role);
        
        // disabled or enable 
        if(item.zone.button.disabled){
            buttonDdwn.setAttribute("disabled", "disabled");
        }
        

        const buttonDdwnLabel = document.createElement("label");

        const buttonDdwnLabelSpan = document.createElement("span");
        buttonDdwnLabelSpan.setAttribute("class", "fsize14 color-black");
        buttonDdwnLabelSpan.innerHTML = item.zone.label;
        buttonDdwnLabel.append(buttonDdwnLabelSpan);
        buttonDdwn.append(buttonDdwnLabel);
        
        zoneArea.append(buttonDdwn);

        const zoneBody = document.createElement("div");
        zoneBody.setAttribute("class", "ddwn-pg area-ddwn-page");

        const zoneHead = document.createElement("div");
        zoneHead.setAttribute("class", "ddwn-header" + " " + item.zone.head.type);
        const zoneHeadIn = document.createElement("div");
        zoneHeadIn.setAttribute("class", "inhd");

        const zoneHeadInButton = document.createElement("button");
        zoneHeadInButton.setAttribute("type", "button");
        zoneHeadInButton.setAttribute("height", "auto");

        const zoneHeadInText = document.createElement("input");
        zoneHeadInText.setAttribute("type", "text");
        zoneHeadInText.setAttribute("placeholder", "Cari...");
        zoneHeadInText.setAttribute("class", "ddwn-tsrc empty");
        zoneHeadIn.append(zoneHeadInButton);
        zoneHeadIn.append(zoneHeadInText);
        //
        zoneHead.append(zoneHeadIn);
        zoneBody.append(zoneHead);

        // ul
        const zoneBodyUl = document.createElement("ul");

        
        if(item.zone.body.data.value !== ""){

            // var li = '';
            $.each(item.zone.body.data.value, function(x, y){
                const zoneBodyUlLi = document.createElement("li");
                zoneBodyUlLi.setAttribute("aria-selected", "false");
                zoneBodyUlLi.setAttribute("dataid", x);

                const zoneBodyUlLiButton = document.createElement("button");
                zoneBodyUlLiButton.setAttribute("role", "off");
                zoneBodyUlLiButton.setAttribute("dataid", x);
                zoneBodyUlLi.append(zoneBodyUlLiButton);

                const zoneBodyUlLiButtonSpan = document.createElement("span");
                // zoneBodyUlLiButtonSpan.setAttribute("dataid", x);
                zoneBodyUlLiButtonSpan.innerHTML = y;
                zoneBodyUlLiButton.append(zoneBodyUlLiButtonSpan);
                
                zoneBodyUl.append(zoneBodyUlLi);
            })   
        }

        if(item.zone.body.data.URL !== ""){
            getValueDropdown(zoneBodyUl, item.zone.body.data.URL);
            // console.log(buttonLiDdwn);
            // zoneBodyUl.append(zoneBodyUlLi);

        }

        //
        zoneBody.append(zoneBodyUl);
        zoneArea.append(zoneBody);

        const inputValue = document.createElement("input");
        inputValue.setAttribute("type", "hidden");
        inputValue.setAttribute("class", item.zone.inputText.class);
        inputValue.setAttribute("name", item.zone.inputText.name);
        inputValue.setAttribute("value", item.zone.inputText.value);
        //
        zoneArea.append(inputValue);

        zone.append(zoneArea);

        //
        element.append(areaLabel);
        element.append(zone);
        // element.append(buttonDdwn);

        //
        area.append(element);
        // console.log(item.class);
    })
}





function getValueDropdown(w,s){
    // var $URL = s;
    var area = w;
    var $t = FormSending("","GET","key","",s);
    $t.success(function(n){

        // console.log(n);
        var list = n.data.list;
  
        $.each(list, function(i, item){
            
            const zoneBodyUlLi = document.createElement("li");
            zoneBodyUlLi.setAttribute("aria-selected", "false");
            zoneBodyUlLi.setAttribute("dataid", item.id);

            const zoneBodyUlLiButton = document.createElement("button");
            zoneBodyUlLiButton.setAttribute("role", "off");
            zoneBodyUlLiButton.setAttribute("dataid", item.id);
            zoneBodyUlLi.append(zoneBodyUlLiButton);

            const zoneBodyUlLiButtonSpan = document.createElement("span");
            // zoneBodyUlLiButtonSpan.setAttribute("dataid", item.id);
            zoneBodyUlLiButtonSpan.innerHTML = item.name;
            zoneBodyUlLiButton.append(zoneBodyUlLiButtonSpan);
            
            area.append(zoneBodyUlLi);
        });
        
        
    });
    $t.error(function(n){
        console.log(n);
        const zoneBodyUlLi = document.createElement("li");
            zoneBodyUlLi.setAttribute("aria-selected", "false");
            zoneBodyUlLi.setAttribute("class", "empty");
            zoneBodyUlLi.innerHTML = 'Data tidak tersedia';
            
            area.append(zoneBodyUlLi);
    })
}

function createDropdownLi(e,w){
    var area = w,
    data = e;

    // console.log(w);

    area.html("");
    $.each(data, function(i, item){
        const zoneBodyUlLi = document.createElement("li");
        zoneBodyUlLi.setAttribute("aria-selected", "false");
        zoneBodyUlLi.setAttribute("dataid", item.id);

        const zoneBodyUlLiButton = document.createElement("button");
        zoneBodyUlLiButton.setAttribute("role", "off");
        zoneBodyUlLiButton.setAttribute("dataid", item.id);
        zoneBodyUlLi.append(zoneBodyUlLiButton);

        const zoneBodyUlLiButtonSpan = document.createElement("span");
        zoneBodyUlLiButtonSpan.innerHTML = item.name;
        zoneBodyUlLiButton.append(zoneBodyUlLiButtonSpan);
        
        area.append(zoneBodyUlLi);
        // console.log(item.name);
    })
}


function createDropdownLiArray(w){
    var data = w;

    $.each(data, function(i,item){
        const zoneBodyUlLi = document.createElement("li");
        zoneBodyUlLi.setAttribute("aria-selected", "false");
        zoneBodyUlLi.setAttribute("dataid", item.id);

        const zoneBodyUlLiButton = document.createElement("button");
        zoneBodyUlLiButton.setAttribute("role", "off");
        zoneBodyUlLiButton.setAttribute("dataid", item.id);
        zoneBodyUlLi.append(zoneBodyUlLiButton);

        const zoneBodyUlLiButtonSpan = document.createElement("span");
        zoneBodyUlLiButtonSpan.innerHTML = item.name;
        zoneBodyUlLiButton.append(zoneBodyUlLiButtonSpan);

        // list += zoneBodyUlLi;

        $("." + i).find("button.cddwn span").html(item.name);

        if(item.status !== ""){
            $("." + i).find("button.cddwn").attr("disabled","disabled");
        }
        
        $("." + i).find("ul").append(zoneBodyUlLi);
        $("." + i).find(".value-dropdown").val(item.id);

    })

    // setDropDownSelectedAll()

}

// END CREATE ELEMENT


// FILTER CATEGORI
function fieldFilterCategori(w){
    var form = w,
    select = form.find(".selectpicker");

    $.each(select, function(i, item){
        if( $(this).attr("data-field") !== undefined){
            var value = $(this).val();

            console.log($(this).attr("data-field"));

            form.find("*[name='"+( $(this).attr('data-field') )+"']").val( value );

            // var value = $(this).val();
            // console.log(value);

        }
    });

}

// DEFAULT FILTER CATEGORI
function defaultCategori(w){
    var form = w;

    form.find(".val-min1").val("-1");
    form.find(".val-num1").val("1");
    form.find(".val-emoty").val("");
}

function modalPreviewImg()
{
    var modal = '';

    modal += '<div class="m-preview-img area-prev-image"><div class="preview-bck"></div><div class="in-preview"><div class="area-preview">';

        modal += '<div class="l-preview"><div class="img-preview"><div class="arimage-resize prev-img"></div><a href="#" class="xclose close-previmg" role="off"><div class="tbl"><div class="intbl"><div class="span flaticon2-cross"></div></div></div></a></div></div>';

        modal += '<div class="r-preview"><div class="div header"><span><b>Bukti Bayar</b></span> </div>';

        modal += '<div class="div bdy"><div class="div clr-float list-xdp"><div class="fl-left"><span class="label">Invoice</span></div><div class="fl-right prev-invoice">#<b>---</b></div></div><div class="div clr-float list-xdp"><div class="fl-left"><span class="label">Diupload oleh</span></div><div class="fl-right prev-name">---</div></div><div class="div clr-float list-xdp"><div class="fl-left"><span class="label">Tanggal</span></div><div class="fl-right prev-date">---</div></div></div></div>';

    modal += '</div></div></div>';

    return modal;
}
// END FILTER CATEGORI

// DOCUMENT READY
$(document).ready(function(){

    //modal submit
    // SUBMIT FORM SAMPLE
    $("body").on("click", ".new-modal.show button.modal-submit", function(e){
        e.preventDefault();
        $(this).parents(".new-modal.show").find("form#form-submit").submit();
    });


    //
    $('body').on('keyup', '.area-ddwn .src-dropdown', function(e)
    {
        e.stopPropagation();
        searchDropdown($(this));
    });

    $('body').on('keydown', '.area-ddwn .src-dropdown', function(e)
    {
        clearTimeout(typingTimerSearch);
    });


    $("body").on("click", ".cmd-copy", function(e){
        e.preventDefault();
        var cmd = $(this);

        if(cmd.attr("role") === "off"){
            cmd.attr("role", "on");
            copyText($(this));
            cmd.attr("role", "off");
        }
    })

    // PREVIEW IMAGE MODAL
    // preview modal image
    $('body').on('click', '.cmd-previewimg', function(e)
    {
        e.preventDefault();
        var cmd = $(this);

        if( cmd.attr('role') === 'off')
        {

            cmd.attr('role','on');
            $('body').find('.area-prev-img').remove();
            var el = {
                'image' :   cmd.attr('data-img')
            }
            var target = modalPreviewImg();
            $('body').append(target);
            var area = $('body').find('.area-prev-image');

            area.find('.prev-img').html('<img src="'+cmd.attr('data-img')+'" alt="image">');
            area.find('.prev-invoice b').html(cmd.attr("data-invoice"));
            area.find('.prev-name').html(cmd.attr("data-name"));
            area.find('.prev-date').html(cmd.attr("data-date"));

            area.addClass('show');
            cmd.attr('role', 'off');
        }
    });

    // close preview images 
    $('body').on('click', '.close-previmg', function(e)
    {
        e.preventDefault();
        if( $(this).attr('role') === 'off')
        {
            $(this).attr('role', 'on');
            $(this).parents('.area-prev-image').remove();
        }
    });


    //
    $("body").on("click", ".cmd-checkbox-new", function(e){
        e.preventDefault();
        
        var cmd = $(this),
        area = cmd.parent(".area-checkbox-a");

        if(cmd.attr("area-role") === "true" ){

            if( cmd.attr("role") === "off"){
                cmd.attr("role","on");
                area.find(".value-checkbox").val("1");

                return false;
            }
    
            cmd.attr("role", "off");
            area.find(".value-checkbox").val("0");
        }
        //
    })


    //  number and dot keyup
    $('body').on('keyup', '.numberDecimal', function(e)
    {
        // numberSingeDot($(this));
        var val = $(this).val();
        if(isNaN(val)){
            val = val.replace(/[^0-9\.]/g,'');
            if(val.split('.').length>2) 
                val =val.replace(/\.+$/,"");
        }
        $(this).val(val); 

    });

    $('body').on('keyup', '.tnumabj', function(e)
    {
        tnumabj($(this));
    });

    $('body').on('blur', '.tnumabj', function(e)
    {
        tnumabj($(this));
    });


    // CLOSE ALERT
    $('body').on('click', '.alert button.close', function(e)
    {
        e.preventDefault();
        $(this).parents('.alert').remove();
        
    });
    

    // SUBMIT NEW MODAL FOR GLOBAL CLICK
    // $("body").on("click", ".new-modal.show button.modal-submit", function(e){
    // $(".new-modal.show button.modal-submit").click(function(){

    //     // e.preventDefault();

    //     //
    //     var cmd = $(this),
    //     modal = cmd.parents(".new-modal"),
    //     form = modal.find("form");

    //     form.submit();

    //     return false;
    // });


    // BUTTON CLEAR TEXT
    $("body").on("click", ".area-button-clear button", function(e){
        e.stopPropagation();
        e.preventDefault();

        var button = $(this),
        area = button.parent(".area-button-clear"),
        text = area.find("input[type='text']");

        if(button.attr("role") === "off"){
            button.attr("role", "on");
            text.val("");
            area.attr("role", "false");
            button.attr("role", "off");
            text.focus();
        }
    })

    return false;
})

// document click
$(document).click(function()
{

    $('body').on('click', '.area-ddwn.keep', function(e)
    {
        e.stopPropagation();
    });
    
    $('button.cddwn[role="on"]').click();

});



