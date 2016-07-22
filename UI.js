$(document).ready(floatFunction());

function floatFunction(){
  var wide = $(window).width();

  if(wide < 800){
    $(".floaty").css({"display": "block"});
    $(".floaty").css({"text-align": "center"});

    $(".resizeMiddle").css({"margin-left": "1%"});
    $(".resizeMiddle").css({"margin-right": "1%"});
  }
  else{
    $(".floaty").css({"display": "table-cell"});
    $(".floaty").css({"text-align": "left"});

    $(".resizeMiddle").css({"margin-left": "15%"});
    $(".resizeMiddle").css({"margin-right": "15%"});
  }
}
