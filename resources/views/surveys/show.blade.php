@extends('layouts.app')

@section('content')


    <div class="container">

		<div class="row">

			<div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default survey-panel">

                    <div class="panel-heading">

                        <h3 class="panel-title">Roommate Survey</h3>

                    </div>

                    {!! Form::open(['url' => 'survey', 'class' => 'survey-form']) !!}

                    <div class="panel-body">

                        @foreach($questions as $question)

                            <div class="question">

                                <div class="form-group{{ $errors->has("question_{$question->id}") ? ' has-error' : '' }}">

                                {!! Form::label("question_{$question->id}", "{$question->position}. {$question->name}", ['class' => 'control-label']) !!}


                                @foreach($question->answers as $answer)

                                    <div class="radio">

                                    <label>


                                            {!! Form::radio("question_{$question->id}", $answer->id, old("question_{$question->id}"), ['class' => '']) !!}

                                        {{ $answer->name }}

                                    </label>


                                        </div>



                                @endforeach

                                @if ($errors->has("question_{$question->id}"))
                                    <span class="help-block">
                                            <strong>{{ $errors->first("question_{$question->id}") }}</strong>
                                        </span>
                                @endif

                            </div>
                            </div>

                        @endforeach

                        </div>

                    <div class="panel-footer">

                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>



                    </div>

                        {!! Form::close() !!}

                </div>

            </div>

		</div>

	</div>

@endsection