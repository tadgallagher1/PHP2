<?php

// Connect to DB:
$mysqli = new mysqli( "localhost", "USER", "PASSWORD", "DATABASE" );
if ( $mysqli->connect_errno ) {
	die( "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error );
}

// If a sku was submitted, retrieve it into $row:
if ( strlen( $_REQUEST[ 'sku' ] ) > 0 ) {
	$result = $mysqli->query( "SELECT * FROM inventory WHERE sku='" . $_REQUEST[ 'sku' ] . "'" );
	if ( $result ) {
		$row = $result->fetch_assoc();
		echo $row[ 'sku' ] . ' ' . $row[ 'name' ] . ' ' . $row[ 'description' ] . ' ' . $row[ 'instock' ] . "<br />";
	}
}

// If old_sku was submitted it means they submitted the form, so update that record:
if ( strlen( $_REQUEST[ 'old_sku' ] > 0 ) {
	// Update the record (try to figure this out yourself)
	// On Thursday, Danny will go over how to do this!
}

?>
<form....>
<!-- Remember the old sku: -->
<input type="hidden" name="old_sku" value="<?php echo $row[ 'sku' ] ?>" />

SKU: <input type="text" name="sku" value="<?php echo $row[ 'sku' ] ?>" /> <br />
Name: <input type="text" name="name" value="<?php echo $row[ 'name' ] ?>" /> <br />
...
...
...


