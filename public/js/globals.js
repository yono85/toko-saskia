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