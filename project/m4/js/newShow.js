$(document).ready(function() {
    var characterPosition = 0;
    $(".addAnother").click(function(){
        // $(".addAnother").prepend("\<div class='form-group'\> \<label\>Who played at the show? \</label\> \<?php populate_bands_available(); ?\> \</div\>"
        // );

        $(".addAnother").prev().clone().after($(".addAnother"));
    });
});
