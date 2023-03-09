@extends('layouts.app')

@section('main-comics')

    <main>

        <div class="main-container d-flex f-wrap">

            @foreach ($superHero as $item)
                
            <div class="card">

                <img src="{{ $item["thumb"] }}" alt="">

                <div class="title">

                    <h2>{{ $item["title"] }}</h2>
    
                </div>

            </div>

            @endforeach

            <button>LOAD MORE</button>

        </div>

    </main>

@endsection