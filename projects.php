<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
  <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
  <style>
    #mapAf2{ width: 700px; height: 400px; }
	  #mapAf1{ width: 700px; height: 400px; }
  </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!----Англииский----->
<?php if($_GET['lang']=='en'){?>
<h2>Satellite control software - Alfasat</h2>
<h4>Brief description</h4>
<p>
The ALFASAT program consists of three main functions: tracking a satellite via TLE (Two Line Interface), receiving and transmitting commands to an aircraft using a TNC (Terminal Node Controller) and changing ICOM parameters (frequencies, transmission modes, Doppler effect). ALFASAT allows you to automatically download and update TLE satellites from the NORAD database. TLE update period of thirty days. In the control panel, you can change the parameters of the map and the satellite, i.e. the color of the map, the terminator, the track and the satellite coverage area, and there is also a function to display the satellite in three-dimensional form. The locations of ground stations are also added from the database and all cities and towns of the Republic of Kazakhstan are included there. The program uses the open library SGP4 to calculate satellite trajectories. SGP4 is a mathematical model used to calculate satellite orbital parameters in a geocentric coordinate system.   	
</p>
<h4>Application area</h4>
<p>
Space technology. Satellite connection. Astronomy. Satellite tracking system.   	
</p>
<h4>Purpose</h4>
<p>
Tracking and installation of radio communications with satellites.
</p>
<h4>Functionality:</h4>
	<ul>
	<li> Visual observation, two-dimensional and three-dimensional animation of a satellite’s flight </ li>
<li> Update TLE data via the Internet </ li>
<li> Antenna rotor control </ li>
<li> TNC connectivity for command transmission </ li>
<li> Satellite testing using CAN bus </ li>
<li> Control of the ICOM radio station </ li>
	</ul>

<!----Казахский----->
<?php } elseif($_GET['lang']=='kz'){?>
<h2>Програмное обеспечение - Alfasat</h2>
<h4>Краткое описание </h4>
<p>
Программа ALFASAT состоит из трех основных функций: отслеживание спутника по TLE (Two Line Interface), прием и передача команд летательному аппарату с помощью TNC (Terminal Node Controller) и изменение параметров ICOM (частоты, режимы передачи, эффект Доплера). ALFASAT позволяет автоматический загружать и обновлять TLE спутников из базы данных NORAD. Период обновление TLE тридцать дней. В панели управления можно изменять параметры карты и спутника, т.е. цвет карты, терминатор, трассу и зону покрытия спутника, а также имеется функция для отображения спутника в трехмерном виде. Местоположение наземной станции тоже добавляется из базы данных и туда включены все города и населенные пункты РК. Для расчетов траекторий спутника в программе использовалась открытая библиотека SGP4. SGP4 – это математическая модель, используемая для расчетов орбитальных параметров спутника в геоцентрической системе координат.       	
</p>
<h4>Область применения</h4>
<p>
Космическая технология. Спутниковая связь. Астрономия. Система спутникового слежения.     	
</p>
<h4>Назначение</h4>
<p>
Слежение и установка радиосвязи со спутниками.     	
</p>
<h4>Функциональные возможности:</h4>
	<ul>
		<li>Визуальное наблюдение, двухмерная и трехмерная анимация полета спутника</li>
		<li>Обновление данных TLE через интернет</li>
		<li>Управление ротором антенной</li>
		<li>Возможность подключения TNC для передачи команды</li>
		<li>Тестирование спутника с помощью CAN шины</li>
		<li>Управление радиоcстанцией ICOM</li>
	</ul>

<!----Русский----->
<?php } else {?>
<h2>Програмное обеспечение - Alfasat</h2>
<h4>Краткое описание </h4>
<p>
Программа ALFASAT состоит из трех основных функций: отслеживание спутника по TLE (Two Line Interface), прием и передача команд летательному аппарату с помощью TNC (Terminal Node Controller) и изменение параметров ICOM (частоты, режимы передачи, эффект Доплера). ALFASAT позволяет автоматический загружать и обновлять TLE спутников из базы данных NORAD. Период обновление TLE тридцать дней. В панели управления можно изменять параметры карты и спутника, т.е. цвет карты, терминатор, трассу и зону покрытия спутника, а также имеется функция для отображения спутника в трехмерном виде. Местоположение наземной станции тоже добавляется из базы данных и туда включены все города и населенные пункты РК. Для расчетов траекторий спутника в программе использовалась открытая библиотека SGP4. SGP4 – это математическая модель, используемая для расчетов орбитальных параметров спутника в геоцентрической системе координат.       	
</p>
<h4>Область применения</h4>
<p>
Космическая технология. Спутниковая связь. Астрономия. Система спутникового слежения.     	
</p>
<h4>Назначение</h4>
<p>
Слежение и установка радиосвязи со спутниками.     	
</p>
<h4>Функциональные возможности:</h4>
	<ul>
		<li>Визуальное наблюдение, двухмерная и трехмерная анимация полета спутника</li>
		<li>Обновление данных TLE через интернет</li>
		<li>Управление ротором антенной</li>
		<li>Возможность подключения TNC для передачи команды</li>
		<li>Тестирование спутника с помощью CAN шины</li>
		<li>Управление радиоcстанцией ICOM</li>
	</ul>
<?php };?>

<h1>Tle (Two Line Element Set)</h1>
<h4>Al-Farabi 1</h4>
<div style="font-family: monospace;font-size:12px; background:#fff;">
<p style="padding=10px;margin=10px;">1 42016U 17008BW  19045.65480810  .00001409  00000-0  59144-4 0  9991</p>
<p>2 42016  97.4191 113.9522 0004920 237.7344 122.3418 15.25112219110994</p>
</div><br>
<div id="mapAf1"></div>


<h4>Al-Farabi 2</h4>
<div style="font-family: monospace;font-size:12px;padding=0px;margin=0px; background:#fff;">
<p>1 43805U 18099AZ  19045.76469610  .00000325  00000-0  34753-4 0  9991</p>
<p>2 43805  97.7563 119.1721 0015937  28.1240 332.0838 14.95210096 10918</p>
</div><br>
<div id="mapAf2"></div>
<!----Англииский----->
<?php if($_GET['lang']=='en'){?>
<h1>Tracking</h1>
<!----Kazakh----->
<?php } elseif($_GET['lang']=='kz'){?>
<h1>Бақылау</h1>
<!----Russian----->
<?php } else{?>
<h1>Отслеживание</h1>
<?php };?>



 <script>
	 $.ajax({
        url: 'https://www.n2yo.com/rest/v1/satellite/positions/42016/43.238949/76.889709/0/2/&apiKey=3NENWV-2J2UL9-S3Z4L8-3YF1',
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            //var len = response.length;
            for (i in response.positions){
  				  // initialize the map
				                
				var lat1 = response.positions[i].satlatitude;
				var longt1 = response.positions[i].satlongitude;
				  var mapAf1 = L.map('mapAf1').setView([lat1, longt1], 4);

				  // load a tile layer
				  L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
						maxZoom: 19,
						attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">Humanitarian OpenStreetMap Team</a> hosted by <a href="https://openstreetmap.fr/" target="_blank">OpenStreetMap France</a>'
					}).addTo(mapAf1);
				var center1 = [lat1-5, longt1-6];
				var imageBounds1 = [center1, [lat1, longt1]];
				var imageUrl1 = "images/miniSat.png";
				L.imageOverlay(imageUrl1, imageBounds1).addTo(mapAf1);
				L.imageOverlay(imageUrl1, imageBounds1).bringToFront();
				//alert(username );
            }
        }
    });
	 
	 
	 function myTimer()
	 {
				 $.ajax({
				url: 'https://www.n2yo.com/rest/v1/satellite/positions/43805/43.238949/76.889709/0/2/&apiKey=3NENWV-2J2UL9-S3Z4L8-3YF1',
				type: 'get',
				dataType: 'JSON',
				success: function(response){
					//var len = response.length;
					for (i in response.positions){
						var lat = response.positions[i].satlatitude;
						var longt = response.positions[i].satlongitude;
						  // initialize the map
						 var mapAf2 = L.map('mapAf2').setView([lat, longt], 4);
						   // load a tile layer
						  L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
								maxZoom: 19,
								attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">Humanitarian OpenStreetMap Team</a> hosted by <a href="https://openstreetmap.fr/" target="_blank">OpenStreetMap France</a>'
							}).addTo(mapAf2);
						var center = [lat-1, longt-6];
						var imageBounds = [center, [lat, longt]];
						var imageUrl = "images/miniSat.png";
						L.imageOverlay(imageUrl, imageBounds).addTo(mapAf2);
						L.imageOverlay(imageUrl, imageBounds).bringToFront();
						//alert(username );
					}
				}
			});
	 }
	 
	 var myVar = setInterval(myTimer, 1000);
	 	 
  </script>


<!----Англииский----->
<?php if($_GET['lang']=='en'){?>
<h1>Softwares</h1>
<h2>Alfasat</h2>
<!----Kazakh----->
<?php } elseif($_GET['lang']=='kz'){?>
<h1>Программалар</h1>
<h2>Alfasat</h2>
<!----Russian----->
<?php } else{?>
<h1>Программы</h1>
<h2>Alfasat</h2>
<?php };?>
<a href="http://kazps.kz/GS/Setup.exe">Alfasat v1.3</a><br>
<a href="">Alfasat v1.2</a><br>
<a href="">Alfasat v1.1</a><br>
	<h2>Orbitron</h2>
<p><a href="https://satsputnik.ru/wp-content/uploads/2014/11/orbitron.rar">Orbitron</a>
	
	<?php if($_GET['lang']=='en'){?> 
<h2>Screenshots</h2>
<?php } elseif($_GET['lang']=='kz'){?> 
<h2>Скриншоттар</h2>
<?php } else{?> 
<h2>Скриншоты</h2>
<?php };?>
<p>
<img src="images/screen1.png" width = "600"><br><br>
<img src="images/screen2.png" width = "600"><br><br>
<img src="images/screen3.png" width = "600"><br><br>
<img src="images/screen4.png" width = "600"><br><br>
</p>