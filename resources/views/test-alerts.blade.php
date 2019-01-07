@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            ALERTAS
                        </p>
                    </header>

                    <div class="card-content">
                        {!! Alert::render() !!}
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
