@extends('layouts.app')

<style>
    .black{
        color: black;
    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header black">{{ __('Dashboard') }}</div>

                <div class="card-body black">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <p><a href="/pizzas">View All Pizza Orders</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
