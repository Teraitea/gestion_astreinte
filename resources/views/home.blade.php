@extends('layouts.app')

@section('title', 'Home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('home/users') }}"><span class="fa fa-users"></span> Infos utilisateur </a> 
                    <br /> 
                    <br />
                    <a href="{{ url('home/news') }}" class="mt-5" ><span class="fa fa-users"></span> Infos des news </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
