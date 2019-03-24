<?php if($_GET['lang']=='en') { ?>
<h2>Contacts</h2>
<?php } elseif($_GET['lang']=='kz') { ?>
<h2>Байланыс</h2>
<?php }else { ?>
<h2>Контакты</h2><?php }; ?>

<?php if($_GET['lang']=='en') { ?>
<p>Kazakh National University</p>
<p>Kazakhstan, Almaty, 050040 al-Farabi ave., 71</p>
	<img src="images/maps.png" align="middle" width="70%"><br>
<?php } elseif($_GET['lang']=='kz') { ?>
<p>Қазақ Ұлттық Университеті</p>
<p>Республика Казахстан, Алматы, 050040 пр. аль-Фараби, 71</p>
	<img src="images/maps.png" align="middle" width="70%"><br>
<?php } else { ?>
<p>Казахский национальный университет им. аль-Фараби</p>
<p>Республика Казахстан, Алматы, 050040 пр. аль-Фараби, 71</p>
	<img src="images/maps.png" align="middle" width="70%"><br>
<?php }; ?>
