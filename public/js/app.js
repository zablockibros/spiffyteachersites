$(document).foundation();

$(document).ready(function(){
   $(".click-to-show").click(function(e) {
       e.preventDefault();
       $(this).parent().find(".answer").toggleClass("hide");
   });
});