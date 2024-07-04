
//FORM SENDING

//e = form or null
//m = method
//a = authentication
//f = file or not
//u = url


function FormSendingNew(e,m,a,f,u){
    var $form = e;
    var $URL = u;
    var $key = typeof getaccount() === 'undefined' ? CONFIG.APPS.KEY : getaccount().token;
    var $token = typeof getaccount() === 'undefined' ? CONFIG.APPS.KEY : getToken();

    if( a === 'key'){
        $header = {
            "Content-Type":"application/json",
            "key":$key
        }
    }else{
        $header = {
            "Content-Type":"application/json",
            "Authorization": "Bearer " + $token
        }
    }

    if(m === 'GET'){
        $body = {
            type:"GET",
            url:$URL,
            headers: $header,
            timeout: 18000,
            cache: false,
            dataType:'JSON'
        }
    }
    else{

        // if(f === ''){
            $body = {
                type: 'POST',
                url: $URL,
                headers: $header,
                timeout: 18000,
                cache: false,
                data: DataSendingFile($form,f),
                dataType: 'JSON'
            }
        // }else{
        //     $body = {
        //         type: 'POST',
        //         url: $URL,
        //         headers: $header,
        //         cache: false,
        //         contentType: false,
        //         processData: false,
        //         data: DataSendingFile($form),
        //         dataType:"JSON"
        //     }
        // }
    }

    var $te = $.ajax($body);

    return $te;
    return $body;
}


function DataSendingFile(e,f){
    var form = e;

    if( f === ''){
        var unindexed_array = e.serializeArray();
        var datasend = {};

        $.map(unindexed_array, function(n, i){
            datasend[n['name']] = n['value'];
        });

        return JSON.stringify(datasend);
    }else{

        var fd = new FormData();
        var file_data = form.find('*[type="file"]'); // for multiple files
        for(var i = 0; i < file_data.length; i++){
            fd.append(file_data.attr('name'), file_data[0].files[i]);
        }
    
        var other_data = form.serializeArray();
        $.each(other_data,function(key,input){
            fd.append(input.name,input.value);
        });
    
        return fd;
    }
}


function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

$(document).ready(function()
{

    // NEW
    $("body").on("submit", ".submit-false", function(){
        return false;
    });


    $("body").on("click", ".preview-password", function(e){
        // e.preventDefault();

        var cmd = $(this),
        area = cmd.parents(".validate-input");

        if( cmd.attr("role") === "off"){
            cmd.attr("role", "on");
            area.find("input[type='password']").attr("type", "text");
            return false;
        }

        cmd.attr("role", "off");
            area.find("input[type='text']").attr("type", "password");
    });
    // END NEW

    //
    $('.fcs').focus(function(e){
        var text = $(this),
        area = text.parents('.are-hov');


        area.attr('data-role', 'on');
        
    });


    $('.fcs').blur(function(e){
        var text = $(this),
        area = text.parents('.are-hov');

        if( $.trim( text.val() ).length === 0 )
        {
            area.attr('data-role', 'off');
        }
        else
        {
            area.attr('data-role', 'on');
        }
    
    });

    //validate
    $("body").on("keyup", ".fcs", function()
    {
        var text = $(this),
        area = text.parent("div"),
        form = text.parents("form"),
        type = form.find('input[name="type"]').val(),
        email = form.find("input[name='email']");
        
        area.find(".btn-txt-r").hide();
        
        form.find('.fcs').removeClass('txt-error-s');
        text.parents('.error').removeClass('error');
        // form.find('.f-error').css({'display':'none'});

        if( $.trim(text.val()) !== ''){
            text.parents(".ar-content").find("label.error").remove();
            text.removeClass("error");
            text.parent(".are-hov").find(".btn-txt-r").show();
        }else{
            text.parent(".are-hov").find(".btn-txt-r").hide();
        }
        //
        // if( type === 'changepassword')
        // {  
        //     var password = form.find('input[name="password"]'),
        //     repassword = form.find('input[name="repassword"]');

        //     if( $.trim(password.val()).length < 8 )
        //     {
        //         password.parent('.are-hov').addClass('error');
        //         password.parent('.are-hov').find('.label-error').html('Password sekurangnya 8 karakter');
        //         return;
        //     }
        //     else if( $.trim(repassword.val() ) !== $.trim(password.val()) )
        //     {
        //         repassword.parent('.are-hov').addClass('error');
        //         repassword.parent('.are-hov').find('.label-error').html('Re-Password harus sama dangan Password');
        //         return;
        //     }
        //     else
        //     {
        //         validateForm();
        //         return;
        //     }
        //     // console.log('change');
        //     // return;
        // }

        // if( $.trim( text.val() ) !== '' && validateEmail(email.val()) )
        // {
        //     validateForm();
        //     area.find(".btn-txt-r").show();
        // }
        // else
        // {
        //     // form.find("button").attr("disabled", "disabled");
        // }

        // area.find(".btn-txt-r").show();


    });

    function validateForm()
    {
        var isValid = true;
        
        $('.fcs').each(function()
        {
            if ( $.trim($(this).val()) === '' )
                isValid = false;
        });

        if( isValid == true)
        {
            // $("form").find("button").removeAttr("disabled");
        }
        else
        {
            // $("form").find("button").attr("disabled", "disabled");
        }
        
    }

    //clear
    $("body").on("click", "a[class*='clear']", function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        area = cmd.parent("div"),
        form = cmd.parents("form"),
        text = area.find("input[class*='fcs']");

        if( cmd.attr("role") === "off" )
        {
            cmd.attr("role", "on");
            // form.find('.fcs').removeClass('txt-error');
            // form.find('.f-error').css({'display':'none'});
            // form.find('.fcs').val("");
            // form.find('.are-hov').attr('data-role', 'off');

            // text.focus();
            cmd.parent(".are-hov").find("input").val("");
            cmd.hide();
            cmd.attr("role", "off");
            cmd.parent(".are-hov").find("input").focus();

            


            // form.find('.btn-txt-r').hide();
            
            // // form.find("button").attr("disabled", "disabled");
            // form.find("button").attr("role", "off");
            // cmd.attr("role", "off");

            // ///
            // form.find('.fcs1').focus();
            // form.find('input[name="password"]').attr('type','password');
            // form.find(".btn-txt-r.eye").attr("role","off");
            
        }

    });

    //keyup password
    $("body").on("keyup", "input[name='password']", function()
    {
        var text = $(this),
        area = text.parent("div"),
        a = area.find("a[class*='eye']");

        if( $.trim(text.val() ) === '' )
        {
            a.attr("role", "off");
            a.removeClass("focus");
            text.attr("type", "password");   
        }
    });



    $("body").on("keyup", "input[name='repassword']", function()
    {
        var text = $(this),
        area = text.parent("div"),
        form = text.parents('form'),
        a = area.find("a[class*='eye']");

        if( $.trim( form.find('input[name="password"]').val() ) !== '' && $.trim( form.find('input[name="repassword"]').val() ) !== '')
        {
            a.show();
        }
        else
        {
            form.find('input[name="password"]').attr('type', 'password');
            form.find('input[name="repassword"]').attr('type', 'password');
            a.hide();
            a.attr('role', 'off');
        }

    });

    //eye
    $("body").on("click", "a[class*='eye']", function(e)
    {
        e.preventDefault();
        var cmd = $(this),
        form = cmd.parents("form"),
        area = cmd.parent("div"),
        text = form.find("input[name='password']"),
        text2 = form.find("input[name='repassword']");

        if( cmd.attr("role") === "off" )
        {
            cmd.attr("role", "on");
            cmd.addClass("focus");
            text.attr('type', 'text');
            text2.attr('type', 'text');
            area.find("input").focus();
            
        }
        else
        {
            cmd.attr("role", "off");
            cmd.removeClass("focus");
            text.attr('type', 'password');
            text2.attr('type', 'password');
            area.find("input").focus();
        }
    });

    

    $('body').find('.fcs1').focus();

    return false;
});
