<h1>Salajane info</h1>
<p>Salainfo</p>



<!-- Loo leht administraatori jaoks ja kaitse seda parooliga
Default login on admin - admin
!--->
<form action="ul6logout.php" method="post">
	<input type="submit" value="Logi välja" name="logout"><a href="ul6login.php"></a>
	
</form>

<form action="ul6register.php" method="post">
	<input type="text" name="kasutajanimi" placeholder="Kasutajanimi"><br>
	<input type="password" name="parool" placeholder="Parool"><br>
	<input type="submit" value="Registreeri kasutaja" name="register">
</form>



<?php
#Loo adminni lehele vorm, mille abil saab registreerida uus kasutajaid andmebaasi
#Vorm on kaitstud lolluste eest ning lisatavad paroolid krüpteeritakse
#Kasutaja nimi ei tohi korduda (SQL count) ning sea parooli pikkuse kontroll (strlen)

?>