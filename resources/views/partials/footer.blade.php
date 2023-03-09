<footer>

    <div class="header-footer">

        <div class="main-container d-flex jc-space-b ai-center">

            <a href="#">

                <div class="item-bar-footer d-flex ai-center">
        
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
    
                    <h3>DIGITAL COMICS</h3>
        
                </div>

            </a>

            <a href="#">

                <div class="item-bar-footer d-flex ai-center">
        
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">

                    <h3>merchandise</h3>
        
                </div>

            </a>

            <a href="#">

                <div class="item-bar-footer d-flex ai-center">
        
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="" style="width: 40px">

                    <h3>shop locator</h3>
        
                </div>

            </a>

            <a href="#">

                <div class="item-bar-footer d-flex ai-center">
        
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">

                    <h3>subscriptions</h3>
        
                </div>

            </a>

            <a href="#">

                <div class="item-bar-footer d-flex ai-center">
        
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">

                    <h3>power visa</h3>
        
                </div>

            </a>

        </div>

    </div>

    <div class="main-footer">

        <div class="main-container d-flex jc-space-b">

            <div class="links d-flex">

                <div class="link-left">

                    <h2>DC COMICS</h2>

                    <nav>

                        <ul>

                            @for ($i = 0; $i < 7; $i++)

                            <li>

                                <a href="#">Link</a>

                            </li>

                            @endfor

                        </ul>

                    </nav>

                    <h2 class="shop-title">SHOP</h2>

                    <nav>

                        <ul>

                            @for ($i = 0; $i < 2; $i++)

                            <li>

                                <a href="#">Link</a>

                            </li>

                            @endfor

                        </ul>

                    </nav>

                </div>

                <div class="link-center">

                    <h2>DC </h2>

                    <nav>

                        <ul>

                            @for ($i = 0; $i < 10; $i++)

                            <li>

                                <a href="#">Link</a>

                            </li>

                            @endfor

                        </ul>

                    </nav>

                </div>

                <div class="link-rigth">

                    <h2>SITES </h2>

                    <nav>

                        <ul>

                            @for ($i = 0; $i < 5; $i++)

                            <li>

                                <a href="#">Link</a>

                            </li>

                            @endfor

                        </ul>

                    </nav>

                </div>

            </div>

            <div class="img-footer">


            </div>

        </div>

    </div>

</footer>