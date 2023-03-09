<header>

    <section class="first-section-header">

        <div class="main-container">

            <span>DC POWER VISA®</span>

            <span>ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i></span>

        </div>

    </section>

    <section class="second-section-header">

        <div class="main-container d-flex jc-space-b ai-center">

            <a href="{{ route('home') }}">

                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">

            </a>

            <nav>

                <ul class="d-flex">

                    @foreach ($links as $link)
                        
                    <li>

                        <a href="#">{{ $link }}</a>

                    </li>

                    @endforeach

                </ul>

            </nav>

            <input type="search" name="search-bar" id="search-bar" placeholder="Search">

        </div>
        
    </section>

    <section class="jumbo-section-header d-flex jc-center ai-center">

        
    </section>
</header>