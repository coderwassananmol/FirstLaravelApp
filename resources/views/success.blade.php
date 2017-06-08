@extends('layout.users');
@section('getTitle')
    Congratulations!
    @endsection
@section('body')
    <h1 class="main-heading">CONGRATULATIONS! YOU HAVE BEEN SUCCESSFULLY REGISTERED. CLICK BELOW TO LOGIN.</h1>
    <br />
    <a href="login" style="text-align: center;">
        <button type="button" class="btn-primary btn-home">LOGIN</button>
    </a>
    @endsection