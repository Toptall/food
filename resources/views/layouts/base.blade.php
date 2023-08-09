<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/bundle.js')}}"></script>
</head>
<body>
    <header class="header">
        <div class="header__left-block">
            <a href="/">
                <img src="{{asset('icons/logo.svg')}}" alt= NATURE>
            </a>
            <!-- <div class="header__logo">
                <img src="icons/c:\Users\USER\Desktop\depositphotos_267302498-stock-illustration-abstract-nature-logo-icon-vector.jpg alt= NATURE>
            </div> -->
            <nav class="header__links">
                <a href="{{asset('glavnay')}}" class="header__link">Главная</a>
                <a href="{{asset('about')}}" class="header__link">О нас</a>
                <a href="{{asset('contacts')}}" class="header__link">Контакты</a>
                <div class="dropdown">
                    <a href="#" class="header__link role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"">Планы питания <span class="dropdown-toggle">&nbsp;</span></a>
                    
                    <?php
                    $plans = \App\Models\Plan::get();
                    ?>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach($plans as $plan) 
                            <li><a class="dropdown-item" href="{{asset('plan/'.$plan->id)}}">{{$plan->name}}</a></li>
                        @endforeach 
                    </ul>
                </div>
                           
                <a href=""></a>
                <a href="{{asset('menus')}}" class="header__link">Меню</a>
                <a href="{{asset('shop')}}" class="header__link">Магазин</a>  
            </nav>
        </div>
        <!-- <div class="header__right-block">
            <button class="btn btn_white" data-modal>Связаться с нами</button>
        </div> -->
        @auth
 
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="{{asset('dashboard')}}">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                                <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            <span>Dashboard</span>
                                        </a>
 
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="{{asset('logout')}}">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                                <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                            </svg>
                                            Logout
                                        </a>
 
                    @else
 
                            <a href="{{ route('login') }}" class="w-full">Login</a>
                    
                    @endauth
    </header>
 

    @yield('content')
    <footer class="footer">
        <div class="container">
            <div class="social">
                <div class="subtitle">Мы в социальных сетях:</div>
                <a href="#" class="link">instagram</a>
                <a href="#" class="link">facebook</a>
            </div>
            <div class="pepper">
                <img src="icons/veg.svg" alt="pepper">
            </div>
            <div class="call">
                <div class="subtitle">Или позвоните нам</div>
                <a href="#" class="link">+380678341034</a>
                <a href="#" class="link">+380500941356</a>
            </div>
        </div>
    </footer>

    <div class="modal">
        <div class="modal__dialog">
            <div class="modal__content">
                <form action="#">
                    <div class="modal__close" data-close>&times;</div>
                    <div class="modal__title">Мы свяжемся с вами как можно быстрее!</div>
                    <input required placeholder="Ваше имя" name="name" type="text" class="modal__input">
                    <input required placeholder="Ваш номер телефона" name="phone" type="phone" class="modal__input">
                    <button class="btn btn_dark btn_min">Перезвонить мне</button>
                </form>
            </div>
        </div>
    </div>

    <!-- <script src="{{asset('js/bundle.js')}}"></script> -->
</body>
</html>
