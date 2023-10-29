<!DOCTYPE html>
<html>
<head>
    <title>Irena.org</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/registration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/carusel.css">
</head>
<body>
<header>

    <div>
        <a href="index.php"><img src="img/LOGO.png" alt="site logo" height="50" style="cursor: pointer"></a>
    </div>
    <a href="{{ route('index') }}" style="color: black"><p class="smooth-scale">{{ __('words.home') }}</p></a>
    <a href="{{ route('news') }}" style="color: black"><p class="smooth-scale">{{ __('words.news') }}</p></a>
    <a href="about_us.php" style="color: black"><p class="smooth-scale">{{ __('words.about') }}</p></a>
    <a href="contacts.php" style="color: black"><p class="smooth-scale">{{ __('words.contact') }}</p> </a>
    <p class="smooth-scale"><a href="user_form.php" style="color: black">{{ __('words.appeals') }}</a></p>
    <div class="language-switch">
        <a href="{{ route('uz') }}" class="language-btn">Uz</a>
        <a href="{{ route('ru') }}" class="language-btn">Ru</a>
        <a href="{{ route('en') }}" class="language-btn">En</a>
    </div>
</header>


@yield('main')



<footer>
    <div class="footer">
        <div class="footer-part1">
            <h1>
                IRENA ESSENTIALS
            </h1>
            <div class="footer-spans">
                <div class="footer-span1">
                    <h5>{{ __('words.about_isea') }}</h5>
                    <h5>{{ __('words.career') }}</h5>
                    <h5><a href="user_form.php" style="color: black">{{ __('words.register') }}</a></h5>
                </div>
                <div class="footer-span2">
                    <h5><a href="contacts.php" style="color: black">{{ __('words.contact1') }}</a></h5>
                    <h5>{{ __('words.events') }}</h5>
                    <h5>{{ __('words.collab') }}</h5>
                </div>
            </div>
        </div>
        <div class="footer-part2">
            <h1>
                NEWSLETTER
            </h1>
            <div class="email-input">
                <form>
                    <div class="container">
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" id="email" style="width: 400px" required>
                    </div>
                </form>
            </div>
            <div class="footer-icons">
                <i class="fa-brands fa-facebook-f" style="color: #3772d7;"></i>
                <i class="fa-brands fa-twitter" style="color: #3772d7;"></i>
                <i class="fa-brands fa-youtube" style="color: #3772d7;"></i>
                <i class="fa-brands fa-instagram" style="color: #3772d7;"></i>
                <i class="fa-regular fa-envelope" style="color: #3772d7"></i>
                <i class="fa-brands fa-telegram" style="color: #3772d7;"></i>
            </div>
        </div>
    </div>
    <div class="rights-statement-block">
        <div class="rights-statement">
            <div class="rights-statement-part1">
                <h5>
                    {{ __('words.isea_solar_panels_assoc') }}
                </h5>
            </div>
        </div>
    </div>
    <!-- <script src="//code.jivo.ru/widget/ApF9FxnUc2" async></script> -->
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="./js/carusel.js"></script>
</body>
</html>
