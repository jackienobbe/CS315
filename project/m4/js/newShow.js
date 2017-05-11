$(document).ready(function() {
    var bandsToAdd = 1;
    $(".addAnother").click(function(){
        $(this).prev().clone().insertBefore(this);
        bandsToAdd++;
    });
});
