$(document).ready(function() {
    $('.blocking').keyup(function(e){
        if(e.keyCode == 32) {
            var words = $(".blocking").val().split(" ");
            $.each(words, function(words){
                $(".blocking").append("<div class='word'>" + this.words + "</div>\n");
            });
        }
    });
});
