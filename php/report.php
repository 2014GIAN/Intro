<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>untitled</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="generator" content="Geany 1.23.1" />
</head>
<body>
	<?php
	$name=$_POST['firstname'];
	$when_it_happened = $_POST['whenithappened'];
	$First_name = $_POST ['firstname'];
	$Last_name = $_POST ['lastname'];
	$how_long = $_POST['howlong'];
	$alien_description = $_POST['aliendescription'];
	$fang_spotted = $_POST['fangspotted'];
	$email = $_POST['email'];
	$msg = $name . 'was abducted' . $when_it_happened . 'and was gone for' . $how_long . '.' .
	'numbers of aliens:' . $how_many . 'Alien description:' . 'what_they_did:' .
	 $what_they_did . 'fang_spotted:' . $fang_spotted . 'other comments' . $other;
	
	?>
	<p>First name <?php echo $first_name;?></p>
	<p>Last name <?php echo $last_name;?></p>
	<p>You where adducted <?php echo $when_it_happened;?> and where gone for <?php echo $how_long;?><p/>
	<p>Describe them:<?php echo $alien_description;?></p>
	<p>Was fang there? <?php echo $fang_spotted;?></p>
    <p>Your email address is <?php echo $email;?></p>
    <p>What did the do you? <?php echo $what_they_did;?></p>
    <p>How many did you see? <?php echo $how_many;?></p>
    
    $dbc = mysqli_connect('172.16.1.7 ', 'debian', 'debian', 'aliendatabase')
or die('Error connecting to MySQL server.');
$query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_happened, how_long, " .
"how_many, alien_description, what_they_did, fang_spotted, other, email) " .
"VALUES ('$first_name', '$last_name', 'what', '1 day', 'four', 'green with six tentacles', " .
"'We just talked and played with a dog', 'yes', 'I may have seen your dog. Contact me.', " .
"'sally@gregs-list.net')";
$result = mysqli_query($dbc, $query)
or die('Error querying database.');
mysqli_close($dbc);
?>
    
    

</body>
</html>

    


