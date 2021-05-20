<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
<body>
	
	<div id="page-wrap">
<h1>Result Of Quiz</h1>
<?php
   $answer1=$_POST['question-1-answers'];
   $answer2=$_POST['question-2-answers'];
   $answer3=$_POST['question-3-answers'];
   $answer4=$_POST['question-4-answers'];

$totalcorrect=0;
if($answer1=="C")
{
	$totalcorrect++;
}

if($answer2="D")
	{$totalcorrect++; 

	}

if($answer3="A")
	{$totalcorrect++; 

	}
	if($answer4="B")
	{$totalcorrect++; 

	}
   echo "<div id='results'>$totalcorrect / 4 correct</div>";

?>


	</div>
</body>


</html>