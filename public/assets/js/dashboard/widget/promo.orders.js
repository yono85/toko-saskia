$(document).ready(function()
{

    $('.PK_nominal').keypress(function()
    {
        var num = $.trim(this.value);

        
        var numx = cnumber(num);
        var maxv = parseFloat($(this).attr('max-value'));

        if( numx > maxv)
        {
           this.value = maxv;
           this.value = formatRupiahKeyup(this.value);
           PK_calcTotal($(this));
           return false;
        }

    });

    $('.PK_nominal').keyup(function()
    {
        var num = $.trim(this.value);
        var sb = num.slice(0,1);

        //
        var numx = cnumber(num);
        var maxv = parseFloat($(this).attr('max-value'));

        if( numx > maxv)
        {
           this.value = maxv;
           this.value = formatRupiahKeyup(this.value);
           PK_calcTotal($(this));
           return false;
        }
        
        if( sb === '0')
        {
            var x = num.substring(1);
            this.value = x;
        }

        this.value = formatRupiahKeyup(this.value);
        PK_calcTotal($(this));

    });

    function PK_calcTotal(e)
    {
        var text = e,
        num = cnumber(text.val()),
        form = text.parents('form'),
        total = parseFloat(form.find('input[name="total"]').val());

        var calc = 0;

        num = num === '' ? 0 : num;
        calc = (total - num);
        
        form.find('input[name="total_calc"]').val(calc);
        form.find('input[name="potongan"]').val(num);

        var label = form.find('input[name="total_calc"]').val();
        form.find('.vlabel-total').html( formatRupiahKeyup(label) );
    }

    //
    return false;
})


