@extends('layouts.app', ['title' => 'Fortify App - Dashboard'])

@section('content')
<div class="col-md-8">
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            Selamat Datang <strong>{{ Auth::user()->name }}</strong>
            <hr>
            <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="btn btn-md btn-primary">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection