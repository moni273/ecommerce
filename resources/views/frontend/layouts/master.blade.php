@include('frontend.layouts.header')
        <!--############################            NAVIGATION          ###############################-->
@include('frontend.layouts.sidebar')
        <!--############################            POPUPACC            ###############################-->
        <div class="popupacc">
            <div class="popupacc__joinbox">
                <h4 class="popupacc__heading">
                    Join Agastiya
                </h4>
                <!-- <p class="popupacc__paragraph">
                    Follow your favorite god, promote their artwork and sell your own.
                </p> -->
                <a href="createaccount.html" class="popupacc__button">
                    Sign up
                </a>
            </div>
            <div class="popupacc__loginbox">
                <h4 class="popupacc__heading">
                    Login
                </h4>
                <p class="popupacc__paragraph">
                    Email Address
                </p>
                <input type="email" name="#" id="" class="popupacc__text">
                <p class="popupacc__paragraph">
                    Password
                </p>
                <input type="password" name="#" id="" class="popupacc__text">
                <!-- <div class="popupacc__checkboxcontainer">
                    <input type="checkbox" name="" id="" class="popupacc__checkbox">
                    <p class="popupacc__paragraph">
                        Remember me on this device
                    </p>
                </div> -->
                <button class="popupacc__button">Sign in</button>
            </div>
        </div>

        <!--###########################             MENU                ##############################-->
        <div class="menu">

            <div class="menu__close">
                <svg>
                    <use href="svg/sprite.svg#icon-x"></use>
                </svg>
            </div>

            <div class="menu__container">
                <!-- <div class="menu__container--searchbox">
                    <input type="text" id="searchbar" class="menu__container--searchbar" placeholder="find something better">
                    <button type="submit" class="menu__container--searchbutton">
                        <svg class="menu__container--searchsvg">
                            <use href="svg/sprite.svg#icon-search"></use>
                        </svg>
                    </button>
                </div> -->
                <a href="login.html" class="menu__container--superitem">
                    Login
                </a>
                <!-- <p class="menu__container--superitem sub">
                    Home
                </p>
                <div class="menu__container--subitembox">
                    <a href="index.html" class="menu__container--sub">Home</a>
                    <a href="shop.html" class="menu__container--sub">Subvategory 2</a>
                    <a href="shop.html" class="menu__container--sub">Subvategory 3</a>
                    <a href="shop.html" class="menu__container--sub">Subvategory 4</a>
                    <a href="shop.html" class="menu__container--sub">Subvategory 5</a>
                </div> -->
                <a href="index.html" class="menu__container--superitem">
                   Home
                </a>
                <a href="/about-us" class="menu__container--superitem">
                     About us
                </a>
                <a href="news-blog.html" class="menu__container--superitem">
                    News /Blog 
                </a>
                <a href="temple-of-love.html" class="menu__container--superitem">
                  Temple of love
                </a>
                <p class="menu__container--superitem sub">
                    <span>+</span> Our Services
                </p>
                <div class="menu__container--subitembox">
                    <a href="services1.html" class="menu__container--sub">Reading of the Agastya leaf </a>
                    <a href="services2.html" class="menu__container--sub"> Interpretation for reading</a>
                    <a href="services3.html" class="menu__container--sub">Spiritual ceremony</a>
                    <a href="services4.html" class="menu__container--sub">Spiritual travel</a>
                </div>
                <p class="menu__container--superitem sub">
                    <span>+</span> My Account
                </p>

                <div class="menu__container--subitembox">
                    <a href="info.html" class="menu__container--sub">My Information</a>
                    <a href="history.html" class="menu__container--sub">Order History</a>
                    <a href="wishlist.html" class="menu__container--sub">  My Wishlist
                    </a>
                    <a href="voucher.html" class="menu__container--sub"> Vouchers
                    </a>
                    <a href="" class="menu__container--sub"> Logout
                    </a>
    
                </div>

                <a href="/contact-us" class="menu__container--superitem">
                 Contact us
                </a>
                <a href="cart.html" class="menu__container--superitem">
                   Cart
                </a>

            </div>
        </div>
       
        @yield('content')
