
<?php include "scripts/begin.php"; ?>
<?php
    $valid = false;
	$feedback = "<p>Hieronder kan je je opmerkingen kwijt over deze website. Heb je nog tips of suggesties of heb je verkeerde informatie gevonden op deze pagina's? Laat het weten!<br />Geef liefst een geldig e-mailadres zodat ik je eventueel nog kan contacteren in verband met je berichtje.</p>";
	$formulier = "<form method=\"POST\" action=\"feedback.php\">
     <input type=\"hidden\" name=\"contact\" value=\"1\">
     <!--
     	de reden dat dit hidden is, is om te zien of het formulier ingevuld is. Als we die check straks zouden doen op één van de andere velden, en de gebruiker heeft dat veld toevallig niet ingevuld, gaan we niet weten dat ons formulier gesubmit werd.
     -->
    Naam: <input type=\"text\" name=\"naam\" maxlength=\"200\" size=\"50\" value=\"" . $_POST['naam'] . "\"><br /><br />
    E-mailadres: <input type=\"text\" name=\"mail\" maxlength=\"200\" size=\"50\" value=\"" . $_POST['mail'] . "\"><br /><br />
    Bericht:<br /><textarea name=\"bericht\" cols=\"50\" rows=\"5\">" . $_POST['bericht'] . "</textarea><br /><br />
		<input type=\"submit\" value=\"Verzenden\">
	</form>";
       if(isset($_POST['contact']))
       {
               if ($_POST['naam'] && $_POST['mail'] && $_POST['bericht'])
               {

               $naam = $_POST['naam'];
               $mail = $_POST['mail'];
               $bericht = htmlspecialchars($_POST['bericht']); //dit maakt van evt. html-code gewone tekst, zodat ze geen scripts/afbeeldingen/... knn toevoegen
               $to      = 'vertalerinfo@gmail.com';
               $subject = "Berichtje van de website";
               $message = "\"".$naam."\" contacteerde Karen met de volgende boodschap \n\n\n". $bericht;
               $headers = "From: " . $mail . "\r\n" .
                       'X-Mailer: PHP/' . phpversion();
               mail($to, $subject, $message, $headers);
                $feedback = "<p>Bericht succesvol verstuurd.</p>";
				$valid = true;
               }
               else $feedback = $feedback . "<p class=\"error\">Je hebt niet alle velden ingevuld. Je bericht werd niet verstuurd.</p>";


       }
	if (!$valid) {
		$feedback = $feedback . $formulier;
	}	


  ?>
  
 
 

<table border="0">
	<tr> 
		<td style="vertical-align:top">
			<table id="subnavigatie" width="180px" border="0">
			<tr><td height="180px"> &nbsp </td></tr>
			<tr><td> &nbsp </td></tr>
			<tr><td> &nbsp </td></tr>
			</table>
		</td>
		<td style="vertical-align:text-top">
			<table width="750px" border="0">
				<tr>
				<td><img src="img/banner.jpg" alt="Vertaalinfo" /></td>
				</tr>
				<tr>
				<td>
					<table id="hoofdnavigatie" border="0" cellpadding="3">
					<tr>
						<td><a href="home_intro.php">Home</a></td>
						<td><a href="freelance_kennismaking.php">Freelance</a></td>
						<td><a href="vertaler_intro.php">Vertaler</a></td>
						<td><a href="duitsland_intro.php">Duitsland</a></td>
						<td class="active"><a href="feedback.php">Feedback</a></td>
					</tr>
					</table>
				</td>
				</tr>
				<tr>
				<td>
				
				<br />
				<h1>Feedback</h1>

				<?php echo $feedback; ?>
 
				</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<?php include "scripts/einde.php"; ?>