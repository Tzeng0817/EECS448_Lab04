<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$Q1 = $_POST["Q1"];
$Q2 = $_POST["Q2"];
$Q3 = $_POST["Q3"];
$Q4 = $_POST["Q4"];
$Q5 = $_POST["Q5"];
$score = 0;

if($Q1 == "German Shepherd")
{
  $score += 20;
}

if($Q2 == "100")
{
  $score += 20;
}

if($Q3 == "Pedro Álvares Cabral")
{
  $score += 20;
}

if($Q4 == "Neil Armstrong")
{
  $score += 20;
}

if($Q5 == "Snoopy Dog")
{
  $score += 20;
}


echo "Question 1: What is the Best Dog in the world? <br>";
echo "You answered: " . $Q1 . "<br>";
echo "Correct answer: German Shepherd <br>";
echo "<br>";


echo "Question 2: 10*10 = ? <br>";
echo "You answered: " . $Q2 . "<br>";
echo "Correct answer: 100 <br>";
echo "<br>";


echo "Question 3: Who is the first person discovered Brazil on April 22, 1500? <br>";
echo "You answered: " . $Q3 . "<br>";
echo "Correct answer: Pedro Álvares Cabral <br>";
echo "<br>";


echo "Question 4: Who is the first person to the moon? <br>";
echo "You answered: " . $Q4 . "<br>";
echo "Correct answer: Neil Armstrong <br>";
echo "<br>";


echo "Question 5:  Which of the following is NOT Marvel character? <br>";
echo "You answered: " . $Q5 . "<br>";
echo "Correct answer: Snoopy Dog <br>";
echo "<br>";
echo "Your score is: " . $score. "<br>";


?>
