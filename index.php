<?php
	require __DIR__ . '/app/src/app.php';
?>
<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bluerent</title>
        <link rel="stylesheet" href="app/css/styles.css" type="text/css">
		<link rel="icon" href="app/images/favicon.ico">
    </head>
    <body>

<!-- Header -->

		<?php
			include('app/views/header.php');
		?>

<!-- Article -->

		<main id="main-window">
			<article id="search-form-and-banner" class="search-form-and-banner">
				<div class="car-search-window">
					<h3>Automobilio nuomos paieška</h3>
					<form class="form-section" action="car-list.php">
						<span>Pėmimas</span>
						<div class="select-date-and-time">
							<select id="select-pickup-place" class="select-pickup-place" name="pickup-place">
								<option value="nothing-choose" hidden>Paėmimo vieta</option>
								<option value="Vilniaus ofisas, Priegliaus 17">Vilniaus ofisas, Priegliaus 17</option>
								<option value="Vilniaus Oro Uostas (VNO)">Vilniaus Oro Uostas (VNO)</option>
								<option value="Kauno Oro Uostas (KUN)">Kauno Oro Uostas (KUN)</option>
								<option value="Palangos Oro Uostas (PLQ)">Palangos Oro Uostas (PLQ)</option>
								<option value="Kita vieta">Kita vieta</option>
							</select>
							<input id="pickup-date-input" class="date-input" type="date" name="pickup-date">
							<select id="pickup-time-input" class="select-time" name="pickup-time">
								<option value="" hidden>Laikas</option>
								<option>00:00</option>
								<option>00:30</option>
								<option>01:00</option>
								<option>01:30</option>
								<option>02:00</option>
								<option>02:30</option>
								<option>03:00</option>
								<option>03:30</option>
								<option>04:00</option>
								<option>04:30</option>
								<option>05:00</option>
								<option>05:30</option>
								<option>06:00</option>
								<option>06:30</option>
								<option>07:00</option>
								<option>07:30</option>
								<option>08:00</option>
								<option>08:30</option>
								<option>09:00</option>
								<option>09:30</option>
								<option>10:00</option>
								<option>10:30</option>
								<option>11:00</option>
								<option>11:30</option>
								<option>12:00</option>
								<option>12:30</option>
								<option>13:00</option>
								<option>13:30</option>
								<option>14:00</option>
								<option>14:30</option>
								<option>15:00</option>
								<option>15:30</option>
								<option>16:00</option>
								<option>16:30</option>
								<option>17:00</option>
								<option>17:30</option>
								<option>18:00</option>
								<option>18:30</option>
								<option>19:00</option>
								<option>19:30</option>
								<option>20:00</option>
								<option>20:30</option>
								<option>21:00</option>
								<option>21:30</option>
								<option>22:00</option>
								<option>22:30</option>
								<option>23:00</option>
								<option>23:30</option>
							</select>
						</div>
						<span>Grąžinimas</span>
						<div class="select-date-and-time">
							<select id="select-return-place" class="select-return-place" name="return-place">
								<option value="nothing-choose" hidden>Grąžinimo vieta</option>
								<option value="Vilniaus ofisas, Priegliaus 17">Vilniaus ofisas, Priegliaus 17</option>
								<option value="Vilniaus Oro Uostas (VNO)">Vilniaus Oro Uostas (VNO)</option>
								<option value="Kauno Oro Uostas (KUN)">Kauno Oro Uostas (KUN)</option>
								<option value="Palangos Oro Uostas (PLQ)">Palangos Oro Uostas (PLQ)</option>
								<option value="Kita vieta">Kita vieta</option>
							</select>
							<input id="return-date-input" class="date-input" type="date" name="return-date" required pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}">
							<select id="return-time-input" class="select-time" name="return-time">
								<option value="" hidden>Laikas</option>
								<option>00:00</option>
								<option>00:30</option>
								<option>01:00</option>
								<option>01:30</option>
								<option>02:00</option>
								<option>02:30</option>
								<option>03:00</option>
								<option>03:30</option>
								<option>04:00</option>
								<option>04:30</option>
								<option>05:00</option>
								<option>05:30</option>
								<option>06:00</option>
								<option>06:30</option>
								<option>07:00</option>
								<option>07:30</option>
								<option>08:00</option>
								<option>08:30</option>
								<option>09:00</option>
								<option>09:30</option>
								<option>10:00</option>
								<option>10:30</option>
								<option>11:00</option>
								<option>11:30</option>
								<option>12:00</option>
								<option>12:30</option>
								<option>13:00</option>
								<option>13:30</option>
								<option>14:00</option>
								<option>14:30</option>
								<option>15:00</option>
								<option>15:30</option>
								<option>16:00</option>
								<option>16:30</option>
								<option>17:00</option>
								<option>17:30</option>
								<option>18:00</option>
								<option>18:30</option>
								<option>19:00</option>
								<option>19:30</option>
								<option>20:00</option>
								<option>20:30</option>
								<option>21:00</option>
								<option>21:30</option>
								<option>22:00</option>
								<option>22:30</option>
								<option>23:00</option>
								<option>23:30</option>
							</select>
						</div>
						<div>
							<button class="button" type="submit" onclick="saveValuesToCookies();">Ieškoti pasiūlymo</button>
						</div>
					</form>
				</div>

<!-- Aside -->

				<aside class="banner-window">
					<div class="slideshow-container">
						<div class="mySlides fade">
							<img src="app/images/hybrid-car-1.jpg" alt="hybrid-cars">
							<div class="text">Platus hibridinių automobilių pasirinkimas</div>
						</div>
						<div class="mySlides fade">
							<img src="app/images/hybrid-car-2.jpg" alt="hybrid-cars-free-extra" >
							<div class="text">Gausi komplektacija ir nemokama papildoma įranga</div>
						</div>
						<div class="mySlides fade">
							<img src="app/images/hybrid-car-3.jpg" alt="hybrid-cars-crossover">
							<div class="text">Taupūs bei stilingi krosoveriai ir visureigiai </div>
						</div>
<!--
  						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  						<a class="next" onclick="plusSlides(1)">&#10095;</a>
-->
					</div>
				</aside>
			</article>
			<div class="benefits">
				<div>
					<img src="app/images/eco-label.svg" alt="eco-label"><br>
					<span>Ekologiški ir taupūs automobiliai</span>
				</div>
				<div>
					<img src="app/images/ecommerce.svg" alt="ecomerce-label"><br>
					<span>Paprastas ir greitas užsakymas</span>
				</div>
				<div>
					<img src="app/images/hand-shake.svg" alt="hand-shake-label"><br>
					<span>Profesionalumas, lankstumas, lojalumas</span>
				</div>
        	</div>
		</main>

<!--Section1 About us-->

		<section id="about">
			<div class="about-us">
				<div>
					<h3>Apie mus</h3>
					<p><b>Bluerent</b> – įmonė, teikianti trumpalaikę bei igalaikę hibridinių ir elektrinių automobilių nuomą. Išanalizavome rinką, dabartinę situaciją ir klientų lūkesčius todėl Jums pasiūlysime profesionalias, aukštos kokybės paslaugas bei modernius, naujos kartos automobilius. Su Bluerent automobiliais ne tik sutaupysite, bet ir tausosite gamtą.</p>
				</div>
				<div>
					<p><b>Mūsų vertybės:</b> patikimumas, lojalumas, lankstumas, darbuotojų profesionalumas, bei kliento šypsena.</p>
				</div>
			</div>
			<div class="advantages-list">
				<h4>Mus verta rinktis nes:</h4>
				<div class="tooltip">Automobiliai
					<span class="tooltiptext">Nauji, patikimi bei taupūs automobiliai. Gera automobilių komplektacija. Civilinis ir Kasko draudimas</span>
				</div>
				<div class="tooltip">Rezervacija
					<span class="tooltiptext">Greita ir patogi rezervacija. Rezervacijos keitimas/atšaukimas</span>
				</div>
				<div class="tooltip">Aptarnavimas
					<span class="tooltiptext">Profesionalus ir greitas aptarnavimas</span>
				</div>
				<div class="tooltip">Nauda
					<span class="tooltiptext">Nemokamas automobilio pristatymas bei papildoma įranga</span>
				</div>
				<div class="tooltip">Lojalumas
					<span class="tooltiptext">Lojalumo sistema bei lanksčios sąlygos klientams</span>
				</div>
				<div class="tooltip">Atsiskaitymas
					<span class="tooltiptext">Patogus ir greitas atsiskaitymas. Depozitas tik 150Eur</span>
				</div>
				<div class="tooltip">Pagalba
					<span class="tooltiptext">Informacija ir pagalba kelyje 24/7.Pakaitinis automobilis</span>
				</div>
			</div>
		</section>

<!--Section2 Services-->

		<section id="services" class="services">
				<h3>Paslaugos</h3>
			<div class="accordion-block">
				<button class="accordion"><b>Trumpalaikė nuoma</b></button>
					<div class="panel">
						<ul>
							<li>Nuo 1 paros iki mėnesio</li>
							<li>Nemokamas pristatymas mieste</li>
							<li>Nemokamas parkavimas mieste (elektromobiliai)</li>
							<li>Pakaitinis automobilis darudiminio įykio atveju</li>
							<li>Pagalba ir informacija visą parą</li>
						</ul>
					</div>
			</div>
			<hr>
			<div class="accordion-block">
				<button class="accordion"><b>Ilgalaikė nuoma</b></button>
					<div class="panel">
						<ul>
							<li>Nuo 1 mėnesio</li>
							<li>Periodiniai techniniai aptarnavimai</li>
							<li>Draudiminių įvykių administravimas</li>
							<li>Pakaitinis automobilis draudiminio įvykio atveju</li>
							<li>Sezoninių padangų keitimas</li>
							<li>Kartą į mėnesį - automobilio vidaus ir išorės valymas</li>
							<li>Pagalba ir informacija visą parą</li>
						</ul>
					</div>
			</div>
			<hr>
			<div class="accordion-block">
				<button class="accordion"><b>Nuoma su vairuotoju</b></button>
					<div class="panel">
						<ul>
							<li>Automobilis su vairuotoju</li>
							<li>Jūsų pasirinktas automobilis, maršrutas ir laikas</li>
							<li>Galimos kelionės į užsienį</li>
							<li>Patyrę, mandagūs ir paslaugūs vairuotojai</li>
						</ul>
					</div>
			</div>
			<hr>
			<div class="accordion-block">
				<button class="accordion"><b>Keleivių pervežimas</b></button>
					<div class="panel">
						<ul>
							<li>Jūsų pasirinktas automobilis, maršrutas ir laikas</li>
							<li>Keleivių pasitikimas oro uoste</li>
							<li>Patyrę, mandagūs ir paslaugūs vairuotojai</li>
							<li>Fizinė klientų apsauga</li>
						</ul>
					</div>
			</div>
		</section>

<!-- Section3 Contacts -->

		<section id="contacts">
			<div>
				<h3>Kontaktai</h3>
			</div>
			<div class="company-details">
				<div>
					<p>
						Įmonės rekvizitai:<br><br>
						UAB „Evelpa“, įm. kodas - 302781013<br>
						Adresas: J.Savickio g. 4, Vilnius <br>
						Telefonas: +37068663132<br>
						El. paštas: info@bluerent.lt
					</p>
				</div>
				<div>
					<a href="https://www.vilnius-airport.lt/" target="_blank">
					<img class="vno-logo" src="app/images/vno-logo.png" alt="vilnius-airport" title="vilniaus-oro-uostas">
					</a>
					<p>Rodūnios kelias 10a, Vilnius, LT-02189, Lietuva</p>
				</div>
				<div>
					<a href="https://www.kaunas-airport.lt/" target="_blank">
					<img src="app/images/kun-logo.png" alt="kaunas-airport" title="kauno-oro-uostas">
					</a>
					<p>Oro uosto g. 4, Karmėlava, LT-54460, Lietuva</p>
				</div>
				<div>
					<a href="https://www.palanga-airport.lt/" target="_blank">
					<img class="plq-logo" src="app/images/plq-logo.png" alt="palanga-airport" title="palangos-oro-uostas">
					</a>
					<p>Liepojos pl. 1, Palanga, LT-00169, Lietuva</p>
				</div>
			</div>
		</section>

<!--Footer-->

		<?php
			include('app/views/footer.php');
		?>

<!--script-->

		<script src="app/scripts/indexScript.js"></script>
		<script>
			var modal = document.getElementById("form-in-modal");
			var btn = document.getElementById("open-form");
			var span = document.getElementsByClassName("close-modal")[0];

			btn.onclick = function() {
				modal.style.display = "block";
			}

			span.onclick = function() {
				modal.style.display = "none";
			}

			window.onclick = function(event) {
				if (event.target == modal) {
				modal.style.display = "none";
				}
			}
		</script>
	</body>
</html>
