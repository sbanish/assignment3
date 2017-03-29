<?php 
spl_autoload_register(function($class_name){
	include $class_name . '.php';
});

$playerModel= new ChildClass("James Harden", "Rockets", "Houston");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name "viewport" content="width=device-width, initial-scale=1">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<h1>Who do you hope will win this year?</h1>	
	<p class="hardenEx"> This third CS 1520 assignment is dedicated to:  <?=$playerModel; ?></p>
		
	<div class="hardenStats">
		<p> James Harden is on a quest to become the MVP this year in the NBA. </p>
		<p> He has sacrificed a lot for this opportunity. Some of his current achievements are: </p>
			<li>5x NBA All-Star</li>
			<li>2x All-NBA First Team</li>
			<li>NBA Sixth Man of the Year</li>
			<li>Consensus first-team All-American in College</li>
			<li>No. 13 retired by Arizona State</li>
			<li>Having one hell of a beard</li>
		<p> As you can see, he is one awesome dude. And I hope he wins a championship this year.</p>	
	</div>
	
		<p class="lebronEx">But, if he wasn't able to win a championship this year. I hope that <?=$playerModel->updatePlayer("LeBron James"); ?> will win.</p>
		
	<div class="lebronStats">
		<p> If James Harden can't win, then I'm rooting for:  <?=$playerModel; ?></p>
		<p> Lebron James is one of the greatest athletes of my generation. </p>
		<p> After growing up as a kid in Akron, he's now since accomplished: 
			<li>13x NBA All-Star</li>
			<li>10x All-NBA First Team</li>
			<li>4x NBA MVP</li>
			<li>3x NBA Champion</li>
			<li>2x AP Athlete of the Year</li>
			<li>2x Olympic Gold Medalist</li>
		</p>
		<p>LeBron is great on the court, and is very charitable off the court. If James Harden doesn't win, I hope LeBron does.</p>	
	</div>
</body>
</html>