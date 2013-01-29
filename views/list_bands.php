<h2>All Bands</h2>
<table class='table table-striped'>
	<tr>
		<th>Name</th>
		<th>Genre</th>
		<th>Number of Albums</th>
		<th>Edit / Delete</th>
	</tr>
<?php 
// read all line of csv file into an array
// the file function in php makes an array
$lines = file('data/bands.csv',FILE_IGNORE_NEW_LINES);
// iterate over the array of lines
//counter variable for line number
$i = 0;

foreach($lines as $line) {
	$parts = explode(',',$line);
	$name = $parts[0];	
	$genre = $parts[1];
	$num_albums = $parts[2];
	echo '<tr>';
	echo "<td>$name</td>";
	echo "<td>$genre</td>";
	echo "<td>$num_albums</td>";
	echo "<td><a class='btn btn-warning' href=\"./?p=form_edit_band&band=$i\"> <i class='icon-wrench icon-white'></i> </a> <a class='btn btn-danger' href=\"actions/delete_band.php?linenum=$i\"><i class='icon-trash icon-white'></i></a></td>";
	echo '</tr>';
	
	$i++; // increment line number
}
?>
</table>