@extends('layouts.app')

@section('content')

    <div class="jumbotron" style="margin-top: -20px">

    	<div class="container">

            <div class="row">

                <div class="col-sm-6">

                    <h1>College Roommate</h1>

                    <p>Find your next roommate.</p>

                    <p>

                        <a href="{{ url('/login') }}" class="btn btn-primary btn-lg">Sign up Today</a>

                    </p>


                </div>

                <div class="col-sm-6">

                    <div class="panel panel-default">

                        <div class="panel-heading">

                            <h3 class="panel-title">Who's using College Roommate?</h3>

                        </div>

                        <ul class="list-group">

                            <li class="list-group-item">
                                <div class="badge">{{ App\Users\School::count() }}</div> Universities
                            </li>

                            <li class="list-group-item">
                                <div class="badge">{{ App\Users\User::count() }}</div> Students
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
