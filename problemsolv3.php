<?php
function to_24_hour($hours,$minutes,$seconds,$meridiem){
	$hours = sprintf('%02d',(int) $hours);
	$minutes = sprintf('%02d',(int) $minutes);
	$seconds = sprintf('%02d',(int) $seconds);
	$meridiem = (strtolower($meridiem)=='am') ? 'am' : 'pm';
	return date('H:i:s', strtotime("{$hours}:{$minutes}:{$seconds} {$meridiem}"));
}
 
echo to_24_hour( 1, 2, 3, 'pm' ); // Returns 13:02:03
echo to_24_hour( '02', '30', '00', 'pm' ); // Returns 14:30:00
?>