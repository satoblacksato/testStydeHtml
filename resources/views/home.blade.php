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
                        {!! Form::open(['route'=>'postFormField','method'=>'POST'])!!}
                        {!! Field::text('name',['required'=>true]) !!}
                            {!! Field::text('lastname','Liberio',['required'=>true,'disabled']) !!}

                        {!! Field::file('avatar') !!}
                            {!! Field::textarea('description') !!}
                            {!! Field::select('edad',['0'=>1]) !!}
                            {!! Field::radios('status', ['a' => 'Active', 'i' => 'Inactive']) !!}

                               @php $tags = [
                                'php' => 'PHP',
                                'python' => 'Python',
                                'js' => 'JS',
                                'ruby' => 'Ruby on Rails'
                                ];

                                $checked = ['php', 'js']; @endphp

                                {!! Field::checkboxes('tags', $tags, $checked) !!}
                             {!! Form::submit('ENVIAR',['class'=>'button is-primary']) !!}
                        {!! Form::close()!!}
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
