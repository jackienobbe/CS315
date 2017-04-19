
$(document).ready(function(){
  $(".row").click(function() {
    $(this).children(".rowDetails").slideToggle();
  });

  $(".delete").click(function() {
    $(this).parents(".row").remove();
  })

  // $("li:odd").css("background-color", "#f2f2f2");
});
