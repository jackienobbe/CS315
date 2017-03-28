function processDates() {

    //get inputs from form
    input1 = document.getElementById("date1").value;
    input2 = document.getElementById("date2").value;

    //process input 1
    splitDate = parseDateInput(input1);

    validatedInput = validateInput(splitDate);
    monthLength = getMonthLength(validatedInput);

    place = document.getElementById("result");
    // place.innerHTML = validatedInput + " " + splitDate; // + "This is where the result would go based on input1: " + input1 + " and input2: " + input2;
    place.innerHTML = monthLength + " " + validatedInput;

}

function parseDateInput(inputDateString) {
    //check format of input MM/DD/(YY)YY
    dateForm = /^([0]|[1])?[0-9]\/[0-3]?[0-9]\/([1]|[2])?([9]|[0])?[0-9][0-9]$/;

    if(dateForm.test(inputDateString)) {
      //parse into separate vars
      return inputDateString.split("/");
    }
    else return false;
}

function validateInput(splitDate) {
  month = splitDate[0];
  day = splitDate[1];
  year = splitDate[2];

  // return splitDate;
  // monthRegEx = /^[0-9]$/;
  // return month;
  if((month <= 12 && month >= 1) ){
    if (day >= 1 && day <= getMonthLength(month)) {
      if()
      return month + " " day + " ," + year;
    }
    else return "Oops! There are only " + getMonthLength(month) + " days in " + getMonthName(month);
  }
  else return "Oye, there are only 12 months in the Gregorian calendar. Perhaps try a different month or a different calendar :/ "
  // else return false;
  // getMonth(month);
}

//calcuate and return number of days in month
function getMonthLength(month) {
  if ( month == 2 )
  {
    return monthLength = 28;
  }
  if ( (month <= 7 && month % 2 != 0 ) || ( month >= 8 && month % 2 == 0 ))
  {
    return monthLength = 31;
  }
  else return monthLength = 30;
}

// translates number in to nominal month
function getMonthName(month) {
    if(month == 1) {
      return monthName = "January";
    }
    if(month == 2) {
      return monthName = "February";
    }
    if(month == 3) {
      return monthName = "March";
    }
    if(month == 4) {
      return monthName = "April";
    }
    if(month == 5) {
      return monthName = "May";
    }
    if(month == 6) {
      return monthName = "June";
    }
    if(month == 7) {
      return monthName = "July";
    }
    if(month == 8) {
      return monthName = "August";
    }
    if(month == 9) {
      return monthName = "September";
    }
    if(month == 10) {
      return monthName = "October";
    }
    if(month == 11) {
      return monthName = "November";
    }
    if(month == 12) {
      return monthName = "December";
    }
}

function calculateDate(){}

window.onload = function() {
    thebutton = document.getElementById("process");
    thebutton.onclick = processDates;
}
