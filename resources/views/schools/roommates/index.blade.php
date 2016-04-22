@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">

                <div class="panel-heading">

                    <h3 class="panel-title">Possible Roommates</h3>

                </div>

                <div class="panel-body">

                    <div class="row">

                        @foreach($users as $user)

                            <div class="col-sm-3">

                                <img class="img-responsive" src="{{ url('/img/avatar.png') }}">
                                <h4 class="text-center">{{ $user->name }}</h4>
                                <h5 class="text-center">
                                    {{ $user->gender->name }} -
                                    {{ date('Y') - $user->dob->year }}
                                    years old
                                </h5>

                                <h5 class="text-center">Score: {{ $user->score }}</h5>

                                <p class="text-center">

                                    <a href="{{ route('schools::roommates::show', [$user->school, $user]) }}" class="btn btn-primary btn-block">Inquire</a>

                                </p>

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

            </div>

        </div>

    </div>

@endsection