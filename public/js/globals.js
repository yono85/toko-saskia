$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': CONFIG.TOKEN
    }
});


function ajaxFormRequest(e){
    var $FORM = e,
    $URL = $FORM.attr("action"),
    $METHOD = e.attr("method");

    var $BODY = {
            type: $METHOD,
            url: $URL,
            data: $FORM.serialize(),
            // headers: {
            //     "Content-Type": "application/json",
            // },
            cache:false,
            timeout:18000,
            dataType: "JSON",
            // processData: $METHOD === "GET" ? false : true,
        }

    var $t = $.ajax($BODY);
    return $t;
}

function ajaxRequestGet(u){
    var $URL = u

    var $BODY = {
            type: "GET",
            url: $URL,
            // data: $FORM.serialize(),
            // headers: {
            //     "Content-Type": "application/json",
            // },
            cache:false,
            timeout:18000,
            dataType: "JSON",
            // processData: $METHOD === "GET" ? false : true,
        }

    var $t = $.ajax($BODY);
    return $t;
}

function ajaxFormPostFile(e){
    var $FORM = e,
    $URL = $FORM.attr("action"),
    $METHOD = e.attr("method");

    var $BODY = {
        type: $METHOD,
        url: $URL,

        contentType: false,
        processData: false,
        data: FormDataFile($FORM),
        dataType:"JSON"
    }

    var $t = $.ajax($BODY);
    return $t;
}

function FormDataFile(e)
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

function selectFieldError(){

}


// TABLE
//table empty
function tableempty(e)
{
    var li = '<div class="tr empty"><div class="tbody"><div class="div"><div class="div"><span class="icon flaticon2-warning"></span></div><div class="div">'+e+'</div></div></div></div>';

    return li;
}
function splashtable(){
    
    var area = $('.area-table'),
    body = area.find('.table-body'),
    footer = area.find('.table-footer');


    body.html('');
    var li = '';

    //
    for(i=1;i<CONFIG.TABLE.splash_max;i++)
    {

        li += '<div class="tr splash">';
        li += '<div class="thr"><div class="div clr-float"><div class="spc load splash-tbl"></div><div class="spc load splash-tbl"></div><div class="spcr load splash-tbl"></div></div></div>';

        li += '<div class="tbody">';
            
        li +=' <table><tbody><tr>';
        
        li += '<td><div class="td-iner"><div class="div"><div class="div"><div class="load w210 splash-tbl"></div></div><div class="div"><div class="load splash-tbl"></div></div></div></div></td>';

        li += '<td class="td-w260 wh-m-520"><div class="td-iner"><div class="div"><div class="load splash-tbl"></div></div></div></td>';

        li +='<td class="td-right td-w100"><div class="td-iner"><div class="div"><span class="load w70 splash-tbl"></span></div></div></td>';
        
        li += '</tr></tbody></table>';

        li += '</div></div>';

    }

    body.html(li);
    // footer.find('.value').html('0');

    // footer.find('button').attr('disabled','disabled');
    

}

// PAGINATION
function paginationTable(a,c){
    var form = a,
    table = $(".area-table"),
    page = parseFloat(form.find("*[name='page']").val()),
    countPage = parseFloat(c);

    CONFIG.TABLE.countpage = parseFloat(countPage);
    // button next
    if( countPage > 1 ){

        if(page === countPage){
            table.find('.cmd-pagination[data-area="next"]').attr('disabled','disabled');
        }
        else{
            table.find('.cmd-pagination[data-area="next"]').removeAttr('disabled');
        }
    }else{
        table.find('.cmd-pagination[data-area="next"]').attr('disabled','disabled');
    }


    if( page < 2)
    {
        table.find('.cmd-pagination[data-area="back"]').attr('disabled','disabled');
    }

    CONFIG.TABLE.sort = 1;
}

function callPagination(e){
    var cmd = e,
    type = cmd.attr("data-area"),
    table = $('.area-table'),
    form = $('#form-table'),
    page = parseFloat( form.find('*[name="page"]').val() ),
    countPage = CONFIG.TABLE.countpage;

    // console.log("oke");
    //next
    if( type === 'next')
    {

        if( page < countPage )
        {
            page += 1;

            form.find('*[name="page"]').val(page)
            form.submit();

        }
        
        if( page > 1 )
        {
            table.find('.cmd-pagination[data-area="back"]').removeAttr("disabled");
        }

    }
    else
    {
        if( page > 1)
        {
            page -= 1;
            form.find('*[name="page"]').val(page);
            form.submit();

        }

        if( page === 1 )
        {
            table.find('.cmd-pagination[data-area="back"]').attr("disabled", "disabled");
        }
        if( page < countPage )
        {
            table.find('.cmd-pagination[data-area="next"]').removeAttr("disabled");
        }
    }

    // console.log(page);
    cmd.attr("role", "off");
}
// END TABLE

$(document).ready(function(){


    $("form").submit(function(){
        return false;
    });

    $("body .format-rupiah").each(function(i, item){

        var num = formatRupiah(parseFloat($(this).html()),"Rp");

        $(this).html(num);


    })

    $("body form .form-control").eq(0).focus();

    return false;
})