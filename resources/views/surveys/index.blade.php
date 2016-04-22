@extends('layouts.app')

@section('content')
    
    @if($responses->isEmpty())

        <div class="container">

		    <div class="row">

			<div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">

                    <div class="panel-heading">

                        <h3 class="panel-title">Roommate Survey</h3>

                    </div>


                    <div class="panel-body">

        
                            <div class="page-header">

                                <h3 class="page-title">Are you ready to find your next roommate?</h3>

                            </div>
        
                            <p>

                                We require every user to take this survey. At the end of the survey you will receive your College Roommate score. This score will be used to match you up with a roommate of a similar score.

                            </p>
        
                            <p>

                                <a href="{{ url('survey/start') }}" class="btn btn-primary">Start Survey</a>

                            </p>



                    </div>

                </div>

            </div>

		</div>

        </div>

    @else

        <div class="jumbotron" style="margin-top: -20px">

            <div class="container">

                @if($responses->count() == 18)
                    {{--*/ $score = 0 /*--}}
                    @foreach($responses as $response)

                        {{--*/  $score += $response->answer->score /*--}}
                    @endforeach

                @endif
                <h1>Roommate App Score</h1>

                <p>You scored {{ $score or '0' }} out of a possible 180 points.</p>

                {{--*/ $percent = ($score/180)*100 /*--}}

                {{--*/ $css = 'warning' /*--}}
                @if($score > 125)
                    {{--*/ $css = 'success' /*--}}
                @elseif($score < 85)

                    {{--*/ $css = 'danger' /*--}}

                @endif
                <div class="col-sm-12">

                    <div class="progress">

                        <div class="progress-bar progress-bar-{{ $css }} progress-bar-striped active"
                             style="width: {{ $percent }}%">

                            <span class="sr-only">{{ $percent }}% Complete (success)</span>

                            {{ $score }} Points
                        </div>

                    </div>

                    <span class="text-left">0</span>
                    <span class="text-right pull-right">180</span>

                </div>

                <p>

                    <a href="{{ route('schools::roommates::index', [Auth::user()->school]) }}"
                       class="btn btn-primary btn-lg">Find Roommates</a>

                </p>

            </div>

        </div>

        <div class="container">

            <div class="row">

                <div class="col-md-10 col-md-offset-1">

                    <div class="panel panel-default">

                        <div class="panel-heading">

                            <h3 class="panel-title">

                                Your Answers

                            </h3>

                        </div>

                        <ul class="list-group">

                            @foreach(Auth::user()->responses as $response)

                                <li class="list-group-item">

                                    <strong>{{ $response->answer->question->position }}.
                                        {{ $response->answer->question->name }}</strong> - <em>{{ $response->answer->name }}</em>
                                </li>

                            @endforeach


                        </ul>

                    </div>

                </div>

            </div>
        </div>

    @endif

@endsection