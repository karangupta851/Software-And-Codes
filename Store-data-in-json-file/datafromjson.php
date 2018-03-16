<script src="https://code.jquery.com/jquery-2.1.4.js"></script>

<?php

$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

echo $characters[0]->firstName;  //

foreach ($characters as $character) {
	echo $character->firstName . '<br>';//
}
?>
<table>
	<tbody>
		<tr>
			<th>firstName</th>
			<th>lastName</th>
			<th>email</th>
			<th>mobile</th>
		</tr>
			<?php	
			foreach ($characters as $character) {
				echo '<tr>';
				echo '<td>' . $character->firstName . '</td>';
				echo '<td>' . $character->lastName . '</td>';
				echo '<td>' . $character->email . '</td>';
				echo '<td>' . $character->mobile . '</td>';
				echo '</tr>';
			}
			?>
	</tbody>
</table>