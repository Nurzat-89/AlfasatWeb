<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 
        <title>Авторизация</title>
 
        <!-- jQuery & Bootstrap 4 JavaScript libraries -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        
    </head>
<body>
 
<!-- container -->
 
<main class="main-content" id="MainContent" role="main">
            <div class="page-width">
                <div class="grid">
                    <div class="grid__item medium-up--five-sixths medium-up--push-one-twelfth">
                        <!-- where prompt / messages will appear -->
                        <div id="response"></div>
                        
                        <!-- where main content will appear -->
                        <div id="content">
                        <div class="section-header text-left">
                        <h2>Логин</h2>
                        </div>
                                <form id='login_form'>
                                    <div class='form-group'>
                                        <label for='email'>Email</label>
                                        <input type='email' class='form-control' id='email' name='email' placeholder='Введите email'>
                                    </div>

                                    <div class='form-group'>
                                        <label for='password'>Пароль</label>
                                        <input type='password' class='form-control' id='password' name='password' placeholder='Пароль'>
                                    </div>

                                    <button type='submit' class='btn btn-primary'>Вход</button>
                                    <div id='sign_up' class='btn btn-primary'>Регистрация</div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
</main>
 
<!-- /container -->
 
<!-- script links will be here -->
 
</body>
</html>