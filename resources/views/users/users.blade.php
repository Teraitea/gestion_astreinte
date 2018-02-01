@extends('layouts.table')

@if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
    @endif
    
@section('content')
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>E-mail</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ url('/home/user/' .$user->id) }}"><span class="fa fa-eye"></span></a>
                <a href="{{ url('/home/user/' .$user->id). '/edit'}}"><span class="fa fa-pencil"></span></a>
                <a href="{{ url('/home/user/' .$user->id). '/delete'}}"><span class="fa fa-trash"></span></a>
            </td>
        </tr>
    @endforeach
    </tbody>
@stop
@section('links')
<a href="{{ url('/home/') }}"><button class="btn btn-success"> Accueil <i class="fa fa-home" style="font-size:25px;"></i></button></a>
@stop