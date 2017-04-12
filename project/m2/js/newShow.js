function validateNewShowForm() {
  name = document.getElementById("showName").value;
  date = document.getElementById("showDate").value;
  location = document.getElementById("location").value;
  doorPrice = document.getElementById("doorPrice").value;
  crowdSize = document.getElementById("crowdSize").value;
  profit = document.getElementById("profit").value;
  fbevent = document.getElementById("fbevent").value;
  potluck = document.getElementById("potluck").value;
  plannedBy = document.getElementById("plannedBy").value;
  cohesivness = document.getElementById("cohesivness").value;
  advertisment = document.getElementById("advertisment").value;
  wentWell = document.getElementById("wentWell").value;

  if(name.toString() == ""){
    document.getElementById("showName").style.color = "red"; 
  }


}
