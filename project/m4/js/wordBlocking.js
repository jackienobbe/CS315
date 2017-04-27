$(document).ready(function() {
    var characterPosition =0;
    $(".blocking").keyup(function(e){
        if(e.keyCode == 32) {
            var words = $(".blockingInput").text().substring(0,characterPosition);
            $(".blockingInput").text("");
            $(".insertedBlocks").append("<div class='word'>" + words + "</div>\n");
            characterPosition = 0;
        }
        else {
            characterPosition++;
        }
    });
    $(".blocking").keydown(function(e){
        if(e.keyCode == 8) {
             //.remove();
            $(".insertedBlocks").last("div .word").css("background-color","red" );
        }
    });

});

// document.addEventListener("keydown", KeyCheck);  //or however you are calling your method
// function KeyCheck(event)
// {
//    var KeyID = event.keyCode;
//    switch(KeyID)
//    {
//       case 8:
//       alert("backspace");
//       break;
//       case 46:
//       alert("delete");
//       break;
//       default:
//       break;
//    }
// }
