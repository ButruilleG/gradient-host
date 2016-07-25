$(document).ready(floatFunction());

function floatFunction(){
  var wide = $(window).width();

  if(wide < 800){
    $(".floaty").css({"float": "none"});

    $(".resizeMiddle").css({"padding-left": "1%"});
    $(".resizeMiddle").css({"padding-right": "1%"});
  }
  else{
    $(".floaty").css({"float": "right"});

    $(".resizeMiddle").css({"padding-left": "15%"});
    $(".resizeMiddle").css({"padding-right": "15%"});
  }
}
