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

function selectFieldError(){

}

$(document).ready(function(){


    $("form").submit(function(){
        return false;
    });


    $("body form .form-control").eq(0).focus();

    return false;
})