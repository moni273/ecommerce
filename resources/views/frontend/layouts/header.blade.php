<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" href="css/index.css">
</head>
<body>

<div class="body">
<!--############################            HEADER              ################################-->
<header class="header">
    
    <a href="#" class="header__logobox">
        <img src="{{asset('images/ecommerce.png')}}" alt="" class="header__logobox--logo">
    </a>

    <div class="header__accountbox">
        <div class="header__accountbox--account">
            <a href="login.html" class="header__accountbox--login">Signup | Login</a>
            <p class="header__accountbox--icon">
                <a href="wishlist.html">
                    <svg class="header__accountbox--svg">
                        <use href="svg/sprite.svg#icon-star"></use>
                    </svg>

                </a>

            </p>

            <p class="header__accountbox--icon">
                <a href="" class="navigation__menu--item navigation__menu--dropdown" id="user-logo">
            <svg class="header__accountbox--svg" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
            </svg>
            </a>
            </p>

            <a href="cart.html" class="header__accountbox--icon">
                <svg class="header__accountbox--svg">
                    <use href="svg/sprite.svg#icon-shopping-cart"></use>
                </svg>
            </a>
        </div>
    </div>
</header>
