<?php
$player = $_POST["player"];
$per = $_POST["per"];
$rank = $_POST["rank"];
$berries = $_POST["berries"];
$sleep = $_POST["sleep"];

$userScore = 0;

echo "<h2>Questions: </h2>";
echo "Question 1: Who is the best basketball player on the current Kansas team?  <br>";
echo "  You answered: " . $player . "<br>";
echo "  Right answer: DOK <br><br>";
echo "Question 2: What is Dok's current field goal percentage? <br>";
echo "  You answered: " . $per . "<br>";
echo "  Right answer: 77.1 <br><br>";
echo "Question 3: What national rank is Dok's FG percentage among other NCAA Division 1 players?<br>";
echo "  You answered: " . $rank . "<br>";
echo "  Right answer: 1<br><br>";
echo "Question 4: How many strawberries does Svi eat before each home game?<br>";
echo "  You answered: " . $berries . "<br>";
echo "  Right answer: 5<br><br>";
echo "Question 5: How often does Mitch Lightfoot sleep in class?<br>";
echo "  You answered: " . $sleep . "<br>";
echo "  Right answer: ALL THE F****** TIME<br><br>";

if($player == "DOK") $score += 20;
if($per== "77.1") $score += 20;
if($rank == "1") $score += 20;
if($berries == "5") $score += 20;
if($sleep == "ALL THE FUCKING TIME") $score += 20;
echo "<h2>Your score: " . $score/20 . " out of 5 right! Rock Chalk!</h2>";
echo "<h2>Your score: </h2><h1>{$score}%</h1>";
?>
