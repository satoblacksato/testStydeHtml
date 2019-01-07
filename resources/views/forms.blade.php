@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Dashboard
                        </p>
                    </header>

                    <div class="card-content">

                        @if ($errors->any())
                            <div class="message is-danger">
                               <div class="message-body">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                               </div>
                            </div>
                        @endif

                        {!! Form::open(['route'=>'postForm','method'=>'POST'])!!}
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="control">
                                {!! Form::text('name',null,['required'=>true,'class'=>'input']) !!}
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">LastName</label>
                            <div class="control">
                                {!! Form::text('lastname','Liberio',['required'=>true,'disabled','class'=>'input']) !!}
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Estado</label>
                                {!! Form::radios('status_inline', ['a' => 'Active', 'i' => 'Inactive'],[],['inline']) !!}
                        </div>
                        <div class="field">
                            <label class="label">Estado</label>
                            {!! Form::radios('status', ['a' => 'Active', 'i' => 'Inactive']) !!}
                        </div>

                        <div class="field">
                            <label class="label">Preferencias</label>
                            {!! Form::radios('preferencias_inline', ['video' => 'VIDEOS', 'manuales' => 'MANUALES'],[],['inline']) !!}
                        </div>
                        <div class="field">
                            <label class="label">Preferencias</label>
                            {!! Form::radios('preferencias', ['video' => 'VIDEOS', 'manuales' => 'MANUALES']) !!}
                        </div>
                        {!! Form::submit('ENVIAR',['class'=>'button is-primary']) !!}
                        {!! Form::close()!!}
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
