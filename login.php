
    <head>
        <title>Авторизация</title>
 
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="custom.css" />
 
        <jQuery & Bootstrap 4 JavaScript libraries -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="login.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>        
    </head>
 
<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a href="#">Вход в систему Alfasat</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="#" id='home'>Главная</a>
            <a class="nav-item nav-link" href="#" id='update_account'>Профиль</a>
            <a class="nav-item nav-link" href="#" id='logout'>Выход</a>
            <a class="nav-item nav-link" href="#" id='login'>Вход</a>
            <a class="nav-item nav-link" href="#" id='sign_up'>Регистрация</a>
        </div>
    </div>
</nav>
 <br>
 <br>
 <br>
<main role="main" class="container starter-template">
 
    <div class="row">
        <div class="col">
 
            <!-- where prompt / messages will appear -->
            <div id="response"></div>
 
            <!-- where main content will appear -->
            <div id="content"></div>
        </div>
    </div>
 
</main>
