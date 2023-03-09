<header>

    <section class="first-section-header">

        <div class="main-container">

            <span>DC POWER VISA®</span>

            <span>ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i></span>

        </div>

    </section>

    <section class="second-section-header">

        <div class="main-container">

            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">

            <nav>

                <ul>

                    @foreach ($navBar as $link)
                        
                    <li>

                        <a href="#">{{ $link }}</a>

                    </li>

                    @endforeach

                </ul>

            </nav>

        </div>
        
    </section>

    <section class="jumbo-section-header">


        
    </section>
</header>