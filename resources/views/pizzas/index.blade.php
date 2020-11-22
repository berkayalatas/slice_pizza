@extends('layouts.app')

<style>
  :root {
    --background-dark: #191f2c;
    --text-light: rgba(0, 0, 0, 0.6);
    --text-lighter: rgba(0, 0, 0, 0.9);
    --spacing-s: 8px;
    --spacing-m: 16px;
    --spacing-l: 24px;
    --spacing-xl: 32px;
    --spacing-xxl: 64px;
    --width-container: 1200px;
  }


  .hero-section {
    align-items: flex-start;
    display: flex;
    min-height: 100%;
    justify-content: center;
    padding: var(--spacing-xxl) var(--spacing-l);
  }

  .card-grid {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-column-gap: var(--spacing-l);
    grid-row-gap: var(--spacing-l);
    max-width: var(--width-container);
    width: 100%;
  }

  @media (min-width: 540px) {
    .card-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (min-width: 960px) {
    .card-grid {
      grid-template-columns: repeat(4, 1fr);
    }
  }

  .card {
    list-style: none;
    position: relative;
  }

  .card:before {
    content: "";
    display: block;
    padding-bottom: 150%;
    width: 100%;
  }

  .card__background {
    background-size: cover;
    background-position: center;
    border-radius: var(--spacing-l);
    bottom: 0;
    filter: brightness(0.75) saturate(1.2) contrast(0.85);
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform-origin: center;
    transform: scale(1) translateZ(0);
    transition: filter 200ms linear, transform 200ms linear;
    background-color: dimgray;
    opacity: 0.6;
  }


  .card__content {
    left: 0;
    padding: var(--spacing-l);
    position: absolute;
    top: 0;
  }

  .card__category {
    color: var(--text-light);
    font-size: 0.9rem;
    margin-bottom: var(--spacing-s);
    text-transform: uppercase;
  }

  .card__heading {
    color: var(--background-dark);
    font-size: 1.9rem;
    text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.2);
    line-height: 1.4;
    word-spacing: 100vw;
    text-transform: uppercase;
  }

  .textt {
    font-weight: 600;
    color: black;
    font-size: 17px;
    padding: 5px;
    text-transform: capitalize;
  }
</style>

@section('content')

<section class="hero-section">

  <div class="card-grid">
    @foreach($pizzas as $pizza)
    <a class="card" href="/pizzas/{{ $pizza->id }}">
      <div class="card__background" style="background-image: url(assets/img/slide_pizza.svg)"></div>
      <div class="card__content">
        <p class="card__category">{{ $pizza->id }}</p>
        <h3 class="card__heading">{{ $pizza->name }}</h3>

        <p class="textt">TYPE:{{ $pizza->type }}</p>
        <p class="textt">BASE: {{ $pizza->base }}</p>
        <p class="textt">Extra Toppings:
          @foreach($pizza->toppings as $topping)
            {{ $topping }}
          @endforeach
        </p>
        <p class="textt">ADDRESS: {{ $pizza->address }}</p>


      </div>
    </a>
    @endforeach
    <div>

</section>


@endsection