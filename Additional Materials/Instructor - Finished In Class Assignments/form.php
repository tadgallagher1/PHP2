<?

if (
	sizeof( $_GET ) > 0
) {
?>
	<p>Your name is: <?php echo $_GET[ 'fname' ] ?> <?php echo $_GET[ 'lname' ] ?></p>
	<p>Your email address is: <?= $_GET[ 'email' ] ?></p>
	<p>Your country is: <?= $_GET[ 'country' ] ?></p>
<?
} else {
?>
	<p>Would you please fill out this form already????</p>
<?php
}
?>

<form action="form.php" method="get">

	First name: <input type="text" name="fname" /><br />
	Last name: <input type="text" name="lname" /><br />
	Email: <input type="text" name="email" /><br />
	Country:
	<select name="country">
		<option value="US">United States</option>
		<option value="CA">Canada</option>
	</select>
	<br />

	<input type="submit" value="Submit it already!!!" />

</form>