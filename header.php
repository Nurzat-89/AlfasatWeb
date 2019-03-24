



<div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1 class="color-main-header"><a href="index.php">
			  <?php if($_GET['lang']=='kz'){ echo 'Наножерсерік';}
			  else if($_GET['lang']=='en') { echo 'Nanosatelite';} 			  
			  else { echo 'Наноспутник';}; ?>
			  
			  <span class="logo_colour">Al-Farabi</span></a>
		  </h1>
          <h2 style="color:#fff;">Kazakh National University</h2>
        </div>
      </div>
	
	
      <div id="menubar">
		  <ul id="menu">
           
			
			
           
		  <?php if($_GET['lang'] == 'en'): ?>
			<li class="main selected"><a href="index.php?lang=en&page=main">Main</a></li>	
			<li class="aboutus"><a href="index.php?lang=en&page=aboutus">About us</a></li>		  
		  	<li class="projects"><a href="index.php?lang=en&page=projects">Projects</a></li>	
			<li class="eduqation"><a href="index.php?lang=en&page=eduqation">Eduqation</a></li>
			<li class="news"><a href="index.php?lang=en&page=news">News</a></li>
          	<li class="contacts"><a href="index.php?lang=en&page=contacts">Contacts</a></li>
		   <?php  elseif($_GET['lang'] == 'kz'): ?>
			<li class="main selected"><a href="index.php?lang=kz&page=main">Басты</a></li>	
			<li class="aboutus"><a href="index.php?lang=kz&page=aboutus">Біз жайлы</a></li>		  
		  	<li class="projects"><a href="index.php?lang=kz&page=projects">Жобалар</a></li>	
			<li class="eduqation"><a href="index.php?lang=kz&page=eduqation">Оқыту</a></li>
			<li class="news"><a href="index.php?lang=kz&page=news">Жаңалық</a></li>
          	<li class="contacts"><a href="index.php?lang=kz&page=contacts">Байланыс</a></li>
		   <?php else: ?>
			<li class="main selected"><a href="index.php?lang=ru&page=main">Главная</a></li>	
			<li class="aboutus"><a href="index.php?lang=ru&page=aboutus">О нас</a></li>		  
		  	<li class="projects"><a href="index.php?lang=ru&page=projects">Проекты</a></li>	
			<li class="eduqation"><a href="index.php?lang=ru&page=eduqation">Образование</a></li>
			<li class="news"><a href="index.php?lang=ru&page=news">Новости</a></li>
          	<li class="contacts"><a href="index.php?lang=ru&page=contacts">Контакты</a></li>
		   <?php endif;?>
			          
        </ul>
		  	<div class="topright">
				<a href = "index.php?lang=kz"> <img width="20px" height="20px" src = "images/kaz.png"></a>
				<a href = "index.php?lang=ru"> <img width="20px" height="20px" src = "images/ru.png"></a>
		  		<a href = "index.php?lang=en"> <img width="20px" height="20px" src = "images/eng.png"></a>
		  </div>
      </div>
    </div>