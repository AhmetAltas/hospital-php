<form action=" <?= URL ?>birthday/editSave/ " method="POST">
		
		<input type="hidden" name="id" value="<?= $birthday['id'] ?>"><br>

	<h2>Pas hier je gegevens aan.</h2>

	Person:<input type="text" name="person" value="<?= $birthday['person'] ?>"><br>

	Day: <input type="text" name="day" value="<?= $birthday['day'] ?>"><br>

	Month: <input type="text" name="month" value="<?= $birthday['month'] ?>"><br>

	Year: <input type="text" name="year" value="<?= $birthday['year'] ?>"><br>






	<button type="submit">Opslaan</button>
</form>