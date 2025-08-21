<!doctype html>
<html>
<head lang="sv"></head>
<body>
	<?php include 'eval.html'; ?>
<h2>Resultat</h2>
<?php
     	$ans1 = $_POST['q1'];
     	$ans2 = $_POST['q2'];
        $name = $_POST['name'];
     	$points = 0;
     	
     	if($ans1 == 10)
           $points++;
     	if($ans2 == 15)
           $points++;
     	
     	echo("<p>" . $name . " fick " . $points . " av 2 möjliga</p>");
?>
</body>
</html>