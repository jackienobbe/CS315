<!DOCTYPE html>
<html>
  <head>
    <title> CS315 // A3 </title>
  </head>

  <body>
    <h1>Can you answer 5 Qs about Truman State Univeristy?!?!</h1>
    <h2>Let's see whatcha got!</h2>

    <?php

      function print_form()
      {
        echo <<<END
            <form action="$_SERVER[PHP_SELF]" method="post" name="Truman">
              <h3>Question 1</h3>
              <h4>Truman's library is called </h4>
                <input type="radio" name="library" value="Mohammed VI Library" />Mohammed VI Library<br/>
                <input type="radio" name="library" value="Pickler Memorial Library" />Pickler Memorial Library<br/> <!--CORRECT ANSWER -->
                <input type="radio" name="library" value="Ellis Library" />Ellis Library<br/>
                <input type="radio" name="library" value="McCain Library" />McCain Library<br/>
                <input type="radio" name="library" value="Burling Library" />Burling Library<br/>
              <hr/>
              <h3>Question 2</h3>
              <h4>Tuman's mascot is</h4>
                <input type="radio" name="mascot" value="a marker" />A Marker<br/>
                <input type="radio" name="mascot" value="a lion" />A Lion<br/>
                <input type="radio" name="mascot" value="a scottie" />A Scottie<br/>
                <input type="radio" name="mascot" value="a bulldog" />A Bulldog<br/> <!--CORRECT ANSWER -->
                <input type="radio" name="mascot" value="tiger" />A Tiger<br/>

              <hr/>
              <h3>Question 3</h3>
              <h4>Campus food is supplied by which international food service?</h4>
                  <input type="radio" name="food" value="Sodexo" />Sodexo<br/> <!--CORRECT ANSWER -->
                  <input type="radio" name="food" value="Newrest" />Newrest<br/>
                  <input type="radio" name="food" value="Sysco" />Sysco<br/>
                  <input type="radio" name="food" value="Bon Appetit" />Bon Appetit<br/>
                </select>

              <hr/>
              <h3>Question 4 </h3>
              <h4>What are Trumans colors? </h4>
                <input type="text" name="color" /> </br> <!-- correct answers include: "white and purple", "purple and white", "purple & white", "white & purple" -->
              <hr/>
              <h3>Question 5 </h3>
              <h4>Where is Truman located? </h4>
                <input type="text" name="location" /> </br> <!-- correct answers include: "Kirksville", "Kirksville, MO", "Kirksville, Missouri", "Missouri", "MO", "KV" -->

              <input type="hidden" name="go" value="go" />
              <input type="submit" />
            </form>
END;

  }

  function process_form()
  {
    $library = $_POST['library'];
    $mascot = $_POST['mascot'];
    $color = $_POST['color'];
    $food = $_POST['food'];
    $location = $_POST['location'];
    $score = 0;

    print "<hr/>\n";
    print "<h3>Question 1</h3>\n";
    print "<h4>Truman's library is called </h4> \n";
    print "<p>You said $library </p>\n";

    // QUESTION 1
    if($library == "Pickler Memorial Library")
    {
      print "<p>You are correct!</p>\n";
      $score++;
    }
    else {
      print "<p>Oops! The correct answer is Pickler Memorial Library.</p>\n";
    }

    print "<hr/>\n";
    print "<h3>Question 2</h3>\n";
    print "<h4>Tumans mascot is</h4>\n";
    print "<p>You said $mascot.</p>\n";

    //QUESTION 2
    if($mascot == "a bulldog")
    {
      print "<p>You are correct!</p>\n";
      $score++;
    }
    else {
      print "<p>Oh no! Truman's mascot is the bulldog!</p>\n";
    }

    print "<hr/>\n";
    print "<h3>Question 3</h3>\n";
    print "<h4>Campus food is supplied by which international food service?</h4>\n";
    print "<p>You said $food.</p>\n";

    // QUESTION 3
    if($food == "Sodexo")
    {
      print "<p>You are correct!</p>\n";
      $score++;
    }
    else {
      print "<p>Oye~ Truman serves only the finest... Sodexo!</p>\n";
    }

    print "<hr/>\n";
    print "<h3>Question 4</h3>\n";
    print "<h4>What are Trumans colors? </h4>\n";
    print "<p>You said $color.</p>\n";

    // QUESTION 4
    if(preg_match("/white/i", $color) && preg_match("/purple/i", $color))
    {
      print "<p>You are correct!</p>\n";
      $score++;
    }
    else {
      print "<p>Nope, Truman reps purple and white!</p>\n";
    }

    print "<hr/>\n";
    print "<h3>Question 5</h3>\n";
    print "<h4>Where is Truman located?</h4>\n";
    print "<p>You said $location.</p>\n";

    // QUESTION 5
    if(preg_match("/^Kirksville$|^Kirksville, MO$|^MO$|^Kirksville, Missouri$|^Missouri$|^Adair County$|^KV$/i", $location))
    {
      print "<p>You are correct!</p>\n";
      $score++;
    }
    else {
      print "<p>Hmmm...Truman is located in the beautiful Adair County, in the town of Kirksville, MO.</p> \n";
    }

    print "<h2>You answered $score out of 5 questions correctly. ";
      if($score == 5 || $score == 4)
      {
        print "Nice work!</h2>\n";
      }
      if($score <= 2)
      {
        print "</h2>\n<h3>Check <a href='https://en.wikipedia.org/wiki/Truman_State_University' target='_blank'>this</a> out and try again.</h3>\n";
      }
      else print "</h2>\n";


  }

  if (isset($_POST['go']) && ('go' == $_POST['go']))
  {
    process_form();
  }
  else
  {
    print_form();
  }
?>

  </body>

</html>
