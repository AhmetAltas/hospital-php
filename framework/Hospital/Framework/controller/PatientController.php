<?php

	require(ROOT . "model/PatientModel.php");



function index() {
	$Patients = getAllPatients();                           

	render('Patients/index', array("Patients"=>getAllPatients()
		));

}