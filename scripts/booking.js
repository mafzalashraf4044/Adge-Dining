$(
    function(){


        $("div.option").on('click',function(){
            $("div.option").not($(this)).removeClass('option-selected');
            $("div.option").not($(this)).find('i').css('visibility','hidden');
            $(this).addClass('option-selected');
            $(this).find('i').css('visibility','visible');
            $("input#no-of-person").val($(this).find('.total-person').text());
        });
    }
)