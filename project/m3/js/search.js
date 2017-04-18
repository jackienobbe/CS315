// Allows for a case-insensitive :contains selector. Taken from http://stackoverflow.com/a/4936066
$(document).extend($.expr[':'], {
  'containsi': function(elem, i, match, array)
  {
    return (elem.textContent || elem.innerText || '').toLowerCase()
    .indexOf((match[3] || "").toLowerCase()) >= 0;
  }
});

$(document).ready(function(){
    $("#search").keyup(function(e) {
        var query = $("#search").val();
        if( query !== "" ){
            $(".row h3:not(:containsi('" + query.toString() +"'))").parents(".row").hide();
        }
        else {
            $(".row").show();
        }
    });
});
