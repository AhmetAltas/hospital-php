<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hospital</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<h1>Hospital</h1>
	<ul>
		<li><a href="patients.html">Patiënts</a></li>
		<li><a href="clients.html">Clients</a></li>
		<li><a href="species.html">Species</a></li>
	</ul>

	<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<tr>
			<<?php foreach ($clients as $client): ?>
				
			<?php endforeach ?>
				<td><? $Client['client_id']; ?></td>
				<td><? $Client['client_firstname']; ?></td>
				<td><? $Client['client_lastname']; ?></td>
				<td><? $Client['species_description']; ?></td>
				<td><? $Client['patient_status']; ?></td>
				<td><? $Client['patient_name']; ?></td>
			</tr>
		</tbody>
	</table>
		<p><a href="#">Create</a></p>
		<p><a href="index.html">Home</a></p>
	</body>
</html>