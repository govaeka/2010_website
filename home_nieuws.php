<?php include "scripts/begin.php"; ?>






<table border="0">
	<tr> 
		<td style="vertical-align:top">
			<table id="subnavigatie" width="180px" border="0">
				<tr><td height="180px"> &nbsp </td></tr>
				<tr><td class="active"><a href="home_nieuws.php">Nieuws</a></td></tr>
				<tr><td><a href="home_about.php">About</a></td></tr>
				<tr><td><a href="home_contact.php">Contact</a></td></tr>
				<tr><td><a href="home_sitemap.php">Sitemap</a></td></tr>
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
						<td class="active"><a href="home_intro.php">Home</a></td>
						<td><a href="freelance_kennismaking.php">Freelance</a></td>
						<td><a href="vertaler_intro.php">Vertaler</a></td>
						<td><a href="duitsland_intro.php">Duitsland</a></td>
						<td><a href="feedback.php">Feedback</a></td>
					</tr>
					</table>
				</td>
				</tr>
				<tr>
				<td>

<h1>Nieuws</h1>

<h2>4 juni 2010 - Website in een nieuw kleedje! CSS en scripts</h2>

<p>
Gisteren heb ik eindelijk met het CSS-bestandje kunnen spelen! Via FireBug hebben we kleurtjes uitgetest en de lay-out wat opgefrist. Dit CSS-bestandje vervangt de normale opmaakcodes en is veel gemakkelijker in gebruik. Een link naar het CSS-bestand is opgenomen in een script dat het begin bepaalt van elke pagina van mijn website. In zo'n script kunnen nog andere dingen gedefinieerd worden zoals de titel van de site of trefwoorden en een korte inhoud voor zoekrobots. Doordat ook het CSS-bestand hierin gedefinieerd wordt, worden de wijzigingen direct doorgevoerd op elke pagina waarop het script "afgespeeld" wordt. Daarnaast staat er nu ook nog een banner bovenaan site. Daarvoor hebben we nog een heuse fotoshoot gehouden met "onzen dikke Van Dale" zodat het er allemaal weer een beetje professioneler uitziet!<br />
Spijtig genoeg loopt het script maar tot aan de tabel omdat het subnavigatiemenu telkens verandert. Aangezien de cel met de banner pas daarna gedefinieerd wordt, kon die dus niet mee opgenomen worden en heb ik handmatig de banner naar elke pagina moeten kopiëren. Een eventuele oplossing is om per onderdeel van de site (Home, Freelance, Vertaler, Duitsland, Feedback) een apart beginscript te maken, maar dan wordt het weer wat ingewikkelder allemaal.<br /><br />

Wat de structuur van mijn website betreft, had mijn zus me oorspronkelijk aangeraden om breadcrumbs te voorzien, want dat is tegenwoordig ook een "best practice" bij het maken van websites blijkbaar. Dit vond ik echter niet nodig omdat het ten eerste nogal ingewikkeld is en ik het allemaal al ingewikkeld genoeg vind! En ten tweede omdat mijn structuur toch altijd maar twee niveaus diep gaat, dus in zowel de hoofd- als de subnavigatie aanduiden in welk onderdeel je zit, is volgens mij wel genoeg. Dat wordt trouwens ook via het CSS-bestand gedaan. Op elke pagina heb ik handmatig aangeduid welke link in hoofd- en subnavigatie op dat moment bezocht werd en die heb ik de "class" "active" gegeven. Daarna moest ik enkel nog in het CSS-bestand aanduiden welke opmaak ik wilde voor links met die "class".<br />
Een overzicht van de volledige structuur van de site vind je onder "sitemap". Ik heb er ook nog een opmerking aan toegevoegd over het zoeken binnen een website via google, aangezien ik ervaren heb dat die oplossing meestal doeltreffender is dan de "eigen" zoekvenstertjes die je dikwijls op websites ziet. Probleempje bij mijn site is dat Google mijn website nog niet vindt. Dat komt omdat ik nog geen trefwoorden in mijn heads gezet heb en dit stukje van het Web voorlopig dus nog "onzichtbaar" is voor de Googlespinnetjes. Het zal misschien wat met mijn dekselse perfectionisme te maken hebben, maar ik zet niet graag een product in de spotlights waar ik nog niet 100% tevreden over ben. Dat zal ik dus wel doen als de site qua inhoud verder geëvolueerd is.<br /><br />

De inhoud van de website is dus niet zo ver geraakt als ik graag gewild had. Ik heb onder andere het hele stuk over Duitsland moeten uitstellen. Het onderdeel "Vertaler" is ook wat beperkter uitgevallen, maar naast de online resources die nu op de pagina staan, zal ik binnenkort nog een pagina toevoegen over CAT-tools. Of TenT zoals dat tegenwoordig heet, sinds <a href="http://www.translatorscafe.com/cafe/article79.htm"target="_blank">Jost Zetzsche</a> het in zijn <a href="http://www.internationalwriters.com/toolkit/"target="_blank">nieuwsbrief</a> over Translation Environment Tools had. Bij "Freelance" komt bovendien nog een pagina met externe links, want alleen al de vele vertaalblogs die je kan vinden, vormen een schat aan informatie die ik jullie niet wil onthouden! Wat de verdere ontwikkelingen van de inhoud betreft, kan ik dus alleen maar ten zeerste aanraden om deze website in het oog te houden en je absoluut in te schrijven via RSS! <br /><br />


</p>


<h2>30 april 2010 - Wat technologische vooruitgang - RSS, formulier, FTP, index - en een beetje inhoud</h2>

<p>

Sinds het laatste nieuwsbericht heb ik al veel bijgeleerd. De RSS is nu in orde! Het RSS-regeltje dat je normaal op elke pagina moet toevoegen, kon gelukkig via een scriptje gedaan worden, maar daar vertel ik later nog wel iets over. De RSS-pagina maken, bleek eigenlijk helemaal niet moeilijk. Enkele regeltjes in het begin en twee op het einde, en verder de tags item, title, link en description. Wil je dan een RSS uitsturen, moet je gewoon zo'n nieuw item toevoegen door te copy-pasten. And that's it. Nooit gedacht dat het zo gemakkelijk zou zijn eigenlijk.<br /><br />

Voor het suggestieformulier moet ik bekennen: ik heb valsgespeeld. Mijn zus heeft het formulier gemaakt. Ze heeft me namelijk uitgelegd dat het beter is om een zekerheid in te bouwen dat het formulier juist ingevuld is. Als je op submit klikt, zal de browser checken of het formulier correct is ingevuld. Is dat het geval, geeft hij de pagina weer om je te bedanken voor het bericht. Is het formulier leeg of niet correct ingevuld, dan verschijnt de pagina opnieuw. Aangezien je de eerste keer dat je op de pagina komt, nog niets ingevuld kan hebben, verschijnt het formulier gewoon. Dus eigenlijk werkt het zo dat je blijft in lussen gaan zo lang je formulier niet verzonden is. Uiteraard kan je wel gewoon op een andere link klikken om de pagina te verlaten. Door het formulier te gebruiken moest wel de extensie van de pagina veranderd worden naar php. En voor de eenvormigheid heb ik de extensies van de andere pagina's dan ook maar aangepast.<br /><br />

Voor het updaten van de pagina's, gebruik ik nu de FTP-toepassing FileZilla om via mijn pc toegang te hebben tot de server van mijn zus. Andere toepassingen waar ik ondertussen al vertrouwd mee ben, zijn notepad++ (gewone notepad, maar dan met kleurtjes en zo. Superhandig!) en FireBug, waarmee je de code van elke website kan bekijken en ook "in real time" het effect kan zien van veranderingen die je in de code aanbrengt. Heel handig om te spelen met marges bijvoorbeeld.<br /><br />

Tot slot heeft mijn zus me ook nog laten weten dat de homepage van de website altijd "index" moet heten, zodat je browser weet naar welke pagina op je website hij moet verwijzen. In eerste instantie vond ik dat vervelend, aangezien ik mijn homepage al anders genoemd had en dus op elke pagina weer die naam moest veranderen, want overal staat een link naar home natuurlijk. Maar tegelijkertijd bleek dit een goeie oplossing voor een andere zorg die ik had. Ik wilde eigenlijk - aangezien de site nu al online staat - een soort van disclaimer op de site zetten dat dit een project is binnen mijn opleiding en dat alles nog lang niet in orde is en zo. Een regeltje tekst op elke pagina is zo lelijk en een popup leek me ook niet ideaal, zeker omdat zowat iedereen ondertussen wel popupblockers heeft. Dus nu heb ik de index.php gebruikt als een soort van welkomstscherm waarop die info staat, plus een link naar de homepage. Of hoe twee problemen samen een oplossing vormen!<br /><br />

Wat de inhoud van de site betreft, is er eigenlijk nog steeds evenveel te doen aangezien ik vooral met de technische kant bezig geweest ben. Ik denk dan ook dat ik het stuk over Duitsland voorlopig ga laten vallen of ga beperken tot wat links naar nuttige websites. Het gedeelte "vertaler" gaat sowieso een verzameling van links worden met wat uitleg, opgedeeld in categorieën. Aangezien dat minder werk is dan zelf teksten schrijven, kan ik dat luik misschien ook nog afmaken voor de examens. En zo niet, dan doe ik het zeker in de zomermaanden, want ik begin dit allemaal hoe langer hoe leuker te vinden!<br /><br />


</p>


<h2>18 april 2010  -  Website!</h2>

<p>

Na lang zwoegen begint de site vorm te krijgen. Niet slecht voor een html-noob als mezelf! Al moet ik wel zeggen dat een webmaster in de familie hebben zeker geholpen heeft!<br /><br />

Het gedeelte over freelance is zo goed als af. Nu moet ik enkel nog heel wat tijd steken in de stukken Vertalen en Duitsland. Dat eerste zal waarschijnlijk bestaan uit een verzameling links met een woordje uitleg bij. Hoe het stuk over Duitsland er zal uitzien, weet ik nog niet. Ik moet al mijn vergaarde info nog eens doornemen en dan zien we wel hoe het uitdraait.<br /><br />

Ik heb ook met mijn IT-zus overlegd over het interactieve gedeelte van de website. Een nieuwsbrief of gastenboek is blijkbaar niet echt haalbaar omdat je daarvoor over een database moet beschikken en dat gaat écht mijn petje te boven. Maar ik heb wel nog twee opties waarvoor zo'n systeem niet hoeft: een suggestiefunctie en RSS. De eerste is echt superhandig omdat heel de site juist draait rond informatie en vooral het aanvullen daarvan! Het is de bedoeling dat er op elke pagina een "suggestiegelegenheid" komt. En RSS is de ideale vervanger van een nieuwsbrief. De gebruiker is veel geruster dat zijn e-mailadres niet doorverkocht zal worden voor spam en dergelijke en ik heb geen database met gebruikers nodig. Win-win noemen we dat! In de contactsectie zal ik wel mijn e-mailadres vermelden, maar waarschijnlijk verwerkt in een afbeelding of zo, zodat ik zelf niet het slachtoffer word van spammers.<br /><br />

Tot slot kan de site zelfs online! Ik kan een subdomain gebruiken van de domeinnaam van mijn zus, wat zeer handig is als voorlopige oplossing. Binnenkort wordt er voor deze site wel een eigen domeinnaam aangevraagd en zal hij waarschijnlijk nog uitgebreid worden met een blog, maar dat is allemaal een beetje afhankelijk van mijn avonturen natuurlijk. Tegen dat het zo ver is, laat ik zeker iets weten via RSS en deze nieuwspagina!

</p>





				
				</td>
				</tr>
			</table>
		</td>
	</tr>
</table>



<?php include "scripts/einde.php"; ?>