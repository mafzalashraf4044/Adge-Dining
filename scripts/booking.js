$(
    function(){


        $("div.option").on('click',function(){
            $("div.option").not($(this)).removeClass('option-selected');
            $("div.option").not($(this)).find('i').css('visibility','hidden');
            $(this).addClass('option-selected');
            $(this).find('i').css('visibility','visible');

            if($(this).find('.total-person').text() == "custom"){
              $("input#no-of-person").val("");
            }else{
              $("input#no-of-person").val($(this).find('.total-person').text());

            }
        });
    }
);



//Form Validation for Subscription Form In footer

$('input').on("invalid", function(e) {
    e.preventDefault();
    console.log(e.target);
    $(e.target).next().next().removeClass('hidden');
    $(e.target).next().next().addClass('error');
});


$(document).ready(function(){
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal-trigger').leanModal();
});
