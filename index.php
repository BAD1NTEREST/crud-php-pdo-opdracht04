<!DOCTYPE html>
<html>
<head>
	<title>Bling Bling Nail Studio Chantal</title>
</head>
<body>
	<form method="POST" action="submit.php">
		<label>Kies 4 basiskleuren voor uw nagels:</label><br>
		<input type="color" name="kleur1" value="#FF0000">
		<input type="color" name="kleur2" value="#00FF00">
		<input type="color" name="kleur3" value="#0000FF">
		<input type="color" name="kleur4" value="#FFFF00"><br><br>

		<label>Uw telefoonnummer:</label><br>
		<input type="tel" name="telefoonnummer" required pattern="[0-9]{10}" placeholder="0123456789"><br><br>

		<label>Uw e-mailadres:</label><br>
		<input type="email" name="email" required><br><br>

		<label>Afspraak datum</label><br>
    <input type="date" name="afspraakdatum" min="2023-01-01" max="2029-12-31" required><br><br>

		<label>Afspraak tijd:</label><br>
		<input type="time" name="afspraaktijd" required><br><br>

		<label>Soort behandeling:</label><br>
		<input type="checkbox" name="behandeling[]" value="luxe_manicure">Luxe manicure (massage en handpakking) € 30,00<br><br>

		<input type="reset" value="Reset">
		<input type="hidden" name="verzendtijd" value="<?php echo date('Y-m-d H:i:s'); ?>">
		<input type="submit" value="Verzenden">
	</form>
</body>
</html>