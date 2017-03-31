function processDates() {
    document.getElementById('result').innerHTML = "";
    document.getElementById('errors').innerHTML = "";

    //get inputs from form
    input1 = document.getElementById("date1").value;
    input2 = document.getElementById("date2").value;

    //process input 1
    var date1 = verifyInputFormat(input1);
    var date2 = verifyInputFormat(input2);

    var isErrorsEmpty = document.getElementById('errors').innerHTML === "";
    if(isErrorsEmpty){
      var dateDiff = calcDateDistance(date1, date2);

      place = document.getElementById("result");

      if(dateDiff != null && (dateDiff > 1 || dateDiff == 0) ) {
        place.innerHTML += "<p>There are " + dateDiff + " days between " + makeDate(date1) + " and " + makeDate(date2) + "</p>";
      }
      else {
        place.innerHTML += "<p>There is " + dateDiff + " day between " + makeDate(date1) + " and " + makeDate(date2) + "</p>";
      }
    }
}

function verifyInputFormat(inputDateString) {
  try {
      //check format of input MM/DD/(YY)YY
      var dateForm = /^\d?\d\/\d?\d\/(\d\d)?\d\d$/;

      // check if empty
      if(inputDateString == "" || inputDateString == null) {
        throw "Please input some dates.";
      }
      if(dateForm.test(inputDateString)) {
        //parse into separate vars
        dateArray = inputDateString.split("/");
      }
      else {
        throw "Hmm... one of your dates does not follow the acceptable formats.";
      }
      return formatDateArray(dateArray);
  }
  catch(err) {
    document.getElementById("errors").innerHTML += "<p> " + err + " </p>";
  }
}

function formatDateArray(dateArray) {
  try {
    //get elements from date array
    var month = dateArray[0];
    var day = dateArray[1];
    var year = dateArray[2];

    //format the year
    year = processYear(year);
    day = processDay(day);

    // check if month and days in range
    if((month <= 12 && month >= 1)){
      if (day >= 1 && day <= getMonthLength(month, year)) {
          dateArray = [month, day, year];
          return dateArray;
      }
      else {
        throw "Oops! There are " + getMonthLength(month) + " days in " +
          getMonthName(month) + " in " + year + ", you should choose one of those.";
      }
    }
    else {
      throw "Oye, there are 12 months in the Gregorian calendar. Perhaps " +
      "pick on of those, or a different calendar :/ ";
    }
  }
  catch(err) {
    document.getElementById("errors").innerHTML += "<p> " + err + " </p>";
  }
}

//calcuate and return number of days in month
function getMonthLength(month, year) {
  if (month == 2)
  {
    if (year % 4 == 0) {
      return monthLength = 29;
    }
    return monthLength = 28;
  }
  if ((month <= 7 && month % 2 != 0 ) || (month >= 8 && month % 2 == 0))
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

// formats the day to 1 digit, if applicable
function processDay(day) {
  dayFormat = /^0\d/;
  if(dayFormat.test(day)) {
    day = day.charAt(1);
    return day;
  }
  else return day;
}

// checks if year in range, and translates to 4 digit format
function processYear(year){
    try {
      if(year < 100 && (year >= 0 && year <= 49)) {
        return "20" + year;
      }
      if(year < 100 && (year >= 50 && year <= 99)) {
        return "19" + year;
      }
      if(year < 1950 || year > 2049) {
        throw "Enter a year between 1950 and 2049, please.";
      }
      else {
        return year;
      }
    }
    catch(err) {
      document.getElementById("errors").innerHTML += "<p> " + err + " </p>";
    }
}
function makeDate(date) {
  try{
    if(date == undefined){
      throw "Enter some dates.";
    }
    return getMonthName(date[0]) + " " + date[1] + ", " + date[2];
  }
  catch(err) {
    document.getElementById("errors").innerHTML += "<p> " + err + " </p>";
  }
}

function getDaysSince1950(dateArray) {
  try {

    var month = dateArray[0];
    var day = dateArray[1];
    var year = dateArray[2];

    var baseYear = 1950;
    var daysSinceBaseDate = 0;
    var daysInYearToDate = 0;
    var daysSinceJan1 = 0;

    // sum days of wholes years (excludes the partial year)
    for(var j = year - 1 ; j >= baseYear; j--) {
      for(var i = 12; i > 0; i--) {
        daysInYearToDate = daysInYearToDate + getMonthLength(i, year);
      }
      daysSinceBaseDate += daysInYearToDate;
      daysInYearToDate = 0;
    }
    // sum days in partial year
    for(var k = month - 1; k > 0; k--) {
      daysSinceJan1 += getMonthLength(k, year);
    }

    // add all together
    return daysSinceBaseDate = daysSinceBaseDate + daysSinceJan1 + day;
  }
  catch(err) {
    document.getElementById("errors").innerHTML += "<p> calc days" + err + " </p>";
  }
}

function calcDateDistance(date1, date2) {
  dateDiff = getDaysSince1950(date1) - getDaysSince1950(date2);
  return Math.abs(dateDiff);
}

window.onload = function() {
    thebutton = document.getElementById("process");
    thebutton.onclick = processDates;
}
