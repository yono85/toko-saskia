// form function
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': CONFIG.APPS.X_CSRF_TOKEN
    }
});

var currentURL = (document.URL),
partURL = currentURL.split("/")[3],
partURL = partURL.split('?'),
partURL = partURL[0],
blockPage = ['','login','signup','forgetpassword','resetpassword'];
pageIn = ['dashboard'];

function setCookie(cname,cvalue,exdays)
{
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000) );
    // d.setTime(d.getTime() + (exdays*60*1000) );
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname)
{
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');

    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
        c = c.substring(1);
        }
        if (c.indexOf(name) == 0) 
        {
            // JSON.parse(e, true);
            return JSON.parse(c.substring(name.length, c.length));
        
        // return decodedCookie;
        }
    }

    return "";
}


// check login
function checkLogin()
{

    var token = getCookie(CONFIG.APPS.COOKIE_NAME);
    // document.title = CONFIG.APPS.name;
    document.title = CONFIG.PAGE.TITLE;

    if (token !== "" && $.inArray(partURL,blockPage) >= 0)
    {
        location.href = '/dashboard';
        // document.title = CONFIG.APPS.name;
        
    }

}


function checkLogout()
{
    var token=getCookie(CONFIG.APPS.COOKIE_NAME);
    document.title = CONFIG.PAGE.TITLE;

    if (token === "" && $.inArray(partURL,pageIn) >= 0)
    {
        deleteCookies();
        location.href = CONFIG.PAGE.URL + '/login';

    }

}



function deleteCookies()
{ 
    var d = new Date();
    d.setTime(d.getTime() + 0);
    var expires = "expires=" + d.toGMTString();

    //
    document.cookie = CONFIG.APPS.COOKIE_NAME + "=;" + expires + ";path=/";
}


function infologin(e)
{

    // console.log(e);
    
    var response = e; //JSON.parse(e, true);
    $('#account-image').attr('src', response.account.image);
    $('#account-logout').attr('href', CONFIG.APPS.URL.API + '/api/logout?token=' + response.token);
    $('#account-name span').html(response.account.name);
    $('#account-email span').html(response.account.email);

    //replace name level in header 
    // cleanApp(e.)
    // var levelname = cleanJSON(CONFIG.APPS.levelApp);
    // $("body").find(".label-bar-header b").html(levelname[response.account.level - 1]);
}


function getaccount()
{

    var cookie = getCookie(CONFIG.APPS.COOKIE_NAME);

    return cookie.account;
}

// get token
function getToken()
{

    if( getCookie(CONFIG.APPS.COOKIE_NAME) !== "" )
    {
        var token = getCookie(CONFIG.APPS.COOKIE_NAME);
        return token.token;
    }

    return "";
}


// session login
function setsessionlogin()
{
    var token = getToken();
    deleteCookies();
    $.ajax({
        type: 'POST',
        url:  CONFIG.PAGE.URL + '/createsessionlogin',
        timeout: 18000,
        data:{
            'token':token
        },
        dataType: 'JSON',
        success: function(e)
        {
            location.href = CONFIG.PAGE.URL + e.response
            // console.log(e);
        },
        error: function(e)
        {
            console.log(e);
        }

    });
}


function refreshCookie(e)
{

    if( getToken() !== e.refresh.token)
    {
        // console.log(e.refresh);
        deleteCookies();
        setCookie(CONFIG.APPS.COOKIE_NAME,JSON.stringify(e.refresh),1);
        infologin(e.refresh);
    }

}

function UpdateCookie(e)
{
    deleteCookies();
    setCookie(CONFIG.APPS.COOKIE_NAME,JSON.stringify(e.refresh),1);
    infologin(e.refresh);
}


function getRefreshCookie(e)
{
    $.ajax({
        type:"GET",
        url: CONFIG.APPS.URL.API + '/api/account/refreshtoken',
        headers:{
            "Content-Type":"application/json",
            "Authorization": "Bearer " + e
        },
        cache: false,
        timeout:18000,
        success: function(n)
        {
            
            // console.log(n.refresh.token);
            // var response = n.refresh;
            // console.log(response.refresh.token);
            refreshCookie(n);



        },
        error: function(n)
        {
            // console.log(n);
            // deleteCookies();
            // location.href = CONFIG.PAGE.URL + '/login';

            setsessionlogin();
        }
    });

}

