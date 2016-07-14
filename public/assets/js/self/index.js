$(function(){
  $(".rsditu-box .box-li .tb").mouseover(function(){
    $(this).siblings(".box").show();
  });
   $(".rsditu-box .box-li .tb").mouseleave(function(){
    $(this).siblings(".box").hide();
  });
});