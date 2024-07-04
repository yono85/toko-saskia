function modalinwidget(e)
{
    var cmd = e,
    box = cmd.parents(e.attr('data-area'));
    

    if( cmd.attr('role') === 'off')
    {
        cmd.attr('role', 'on');
        box.find('.inmodal').remove();

        // if( cmd.attr('data-get') !== '')
        // {
            var func = cmd.attr('data-get');
            var $content = eval(func + "(cmd)");
        // }

        box.append($content);
    }
    
}

//PROMO KHUSUS ==== >
function boxPromoCash(e)
{
    var cmd = e,
    content = $('body').find('.area-inmodal-wgnew #'+cmd.attr('data-content')).html();

    cmd.attr('role','off');
    return content;
}

