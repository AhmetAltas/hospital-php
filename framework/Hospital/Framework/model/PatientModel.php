<?php

function getPatient($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients WHERE patient_id = :patient_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}


function getAllPatients() 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients
		JOIN clients ON clients.client_id = patients.client_id
		JOIN species ON species.species_id = patients.species_id";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}
