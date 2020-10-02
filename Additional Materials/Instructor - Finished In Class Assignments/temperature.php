<?php

// In class exercise: temperature converter

function fahrenheit_to_celsius( $fah ) {
	return ( $fah - 32 ) * 0.5556;
}

?>

<form>

	The temperature in Fahrenheit is: <input type="text" name="fahrenheit" />
	<input type="submit" value="Submit" />

</form>

<?php
	if ( sizeof( $_GET ) > 0 ) {
?>
<p>
	One way:
	
	<?= $_REQUEST[ 'fahrenheit' ] ?> degrees Fahrenheit is equivalent to <?= ( $_REQUEST[ 'fahrenheit' ] - 32 ) * 0.5556  ?> degrees celsius.
</p>

<p>
	Or:

	<?= $_REQUEST[ 'fahrenheit' ] ?> degrees Fahrenheit is equivalent to <?= fahrenheit_to_celsius( $_REQUEST[ 'fahrenheit' ] ) ?> degrees celsius.
</p>

<p>
	Or:

	<?= $_REQUEST[ 'fahrenheit' ] ?> degrees Fahrenheit is equivalent to <?php
	
		$fah = $_REQUEST[ 'fahrenheit' ];
		$cel = fahrenheit_to_celsius( $fah );
		echo $cel;
	
	?> degrees celsius.
</p>

<p>
	Or:

	<?= $_REQUEST[ 'fahrenheit' ] ?> degrees Fahrenheit is equivalent to <?php
	
		$cel = fahrenheit_to_celsius( $_REQUEST[ 'fahrenheit' ] );

		echo $cel;
	
	?> degrees celsius.
</p>
<?php
		if ( $cel < 0 ) {
			echo "Brrr, it's freezing!";
		} else if ( $cel >= 0 && $cel <= 10 ) {
			echo "Wow, it's cold!";
		} else if ( $cel > 10 && $cel <= 24 ) {
			echo "It's quite comfortable!";
		} else if ( $cel > 24 ) {
			echo "Ouch, it's hot!";
		}

	}
?>
