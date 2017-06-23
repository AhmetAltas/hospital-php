<?php	
function getClient($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients WHERE client_id = :client_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function GetAllClients()
{

	$db = openDatabaseConnection();	$sql = "SELECT * FROM patients		
		JOIN clients ON clients.client_id = patients.client_id
		JOIN species ON species.species_id = patients.species_id";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();


}