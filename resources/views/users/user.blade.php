@extends('layouts.table')

@section('content')
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>E-mail</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->email }}</td>
        </tr>
    </tbody>

@stop


@section('links')
        <a href="{{ url('/home/users') }}"><button class="btn btn-success"> Retour <i class="fa fa-arrow-circle-left" style="font-size:25px;"></i></button></a>
@stop