@extends('layout.layout')
@section('getTitle')
    Welcome User
@endsection
@section('body')
    <h1 class="main-heading">Hello Human, please login.</h1>
    <div class="container big-circle">
        <form>
            <p>USERNAME:</p>
            <input type="text" class="input-login">
        </form>
    </div>
    @endsection