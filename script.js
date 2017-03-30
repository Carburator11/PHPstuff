$(document).ready(function(){

$('.contentList').find("input").css( "display", "none") ;

$('[id^=chose]').hover(
    function(){$(this).css("color", "green")},
    function(){$(this).css("color", "black")}
    );



var deleteBtn = $('input[type = submit]');

$('[id^=chose]').hover(
  function(){$(this).find('input[type = submit]').css( "display", "initial" );
  $(this).find("input[type=radio]").prop("checked", true)
  },
  function(){$(this).find('input[type = submit]').css( "display", "none")     }
  );




});


//
  //just return the class atribute of the truc     $classChose =  ( $(this).attr("id")  );
