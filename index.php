<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #126;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #126;
    font-size: 50px;
  }
  .logo {
    color: #126;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #126;
  }
  .carousel-indicators li {
    border-color: #126;
  }
  .carousel-indicators li.active {
    background-color: #126;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #126; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #126;
    background-color: #fff !important;
    color: #126;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #126 !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #126;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #126;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #126 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #126;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">ALFASAT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">О НАС</a></li>
        <li><a href="#services">НОВОСТИ</a></li>
        <li><a href="#portfolio">ПРОЕКТЫ</a></li>
        <li><a href="#pricing">ОБРАЗОВАНИЕ</a></li>
        <li><a href="#contact">КОНТАКТЫ</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>ALFA-SAT</h1> 
  <p>Первый казахстанский студенческий наноспутник</p> 
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h4>Первый казахстанский наноспутник Al-Farabi</h4>
      <p>Основной целью проекта является научно-образовательная составляющая, формирование научной школы по созданию малых космических аппаратов и соответствующей наземной инфраструктуры, подготовка для страны высококвалифицированных специалистов в области космических технологий.</p>
      <h4>О проекта</h4>   
      <p>Запуск успешно осуществлен 4 декабря в 00 ч. 32 мин. по времени Астаны с космодрома в штате Калифорния (США) с военно-воздушной базы Ванденберг на ракетоносителе «Falcon 9». Наноспутник работает в штатном режиме. Наноспутник «Аl-Farabi-2» объединяет в себе лучшие инновационные технологии, основные компоненты и узлы аппарата защищены казахстанскими патентами. Он предназначен для решения оригинальных научных, технологических и образовательных задач, а также позволит провести испытание разработанных учеными КазНУ электронных компонентов бортового компьютера для малых космических аппаратов. Результаты научно-исследовательских работ и экспериментов представляют ценность и актуальность для аэрокосмической отрасли Казахстана и зарубежных партнеров университета.</p>
      <p>«Запуск казахстанского наноспутника в открытый космос в канун Дня Независимости Республики Казахстан, знаменует еще один важный этап в истории казахстанской науки и спутникостроения. Это уже второй наноспутник КазНУ выведенный в космос. Первый «Аl-Farabi-1» был успешно запущен в космос 15 февраля 2017 года с космодрома им. Сатиша Дхавана в Индии. Он был назван в честь выдающегося учёного тюркского мира Аль-Фараби, имя которого достойно носит наш университет», – отметил руководитель проекта академик Галым Мутанов. Масштабный проект по созданию национальной научной школы в области космических технологий, проектирования, сборки и запуска наноспутников, подготовки высококвалифицированных специалистов в этой сфере реализуется в КазНУ с 2013 года в рамках международного консорциума «UNIFORM». КазНУ им. аль-Фараби проводит целенаправленную работу по реализации задач, поставленных Главой государства в Послании народу Казахстана «Новые возможности развития в условиях четвертой промышленной революции» по вхождению Казахстана в «цифровую эпоху». Создание новых наукоёмких технологий и технических средств, в том числе и в космической сфере, являются приоритетными направлениями в деятельности университета.</p>
     
    </div>
    <div class="col-sm-4">
      <img src="images/team.jpg" class="w3-image w3-greyscale-min" style="width:100%"/>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Наши цели</h2><br>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Проекты</h2><br>
  <h4>Наши продукты</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/screen1.png" alt="Paris" width="400" height="300">
        <p><strong>Alfasat</strong></p>
        <p>xfbxfb</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/screen2.png" alt="New York" width="400" height="300">
        <p><strong>Наноспутник</strong></p>
        <p>xfbxfb</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/screen3.png" alt="San Francisco" width="400" height="300">
        <p><strong>Yfyjcgenybr</strong></p>
        <p>xfxdfb</p>
      </div>
    </div>
  </div><br>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">КОНТАКТЫ</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Отавьте свои отзывы</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Алматы</p>
      <p><span class="glyphicon glyphicon-phone"></span> +7077077077</p>
      <p><span class="glyphicon glyphicon-envelope"></span> info@alfasat.kz</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Имя" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Комментарий" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Отправить</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<img src="images/maps.png" class="w3-image w3-greyscale-min" style="width:60%">

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Alfasat <a href="https://www.alfasat.kz" title="Visit alfasat">www.alfasat.kz</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
