@extends('layout.layout')
@section('getTitle')
    Welcome user! Please register.
    @endsection
@section('body')
    <h1 class="main-heading">Hello Human, please register.</h1>
    <div class="container register">
        <form method="POST" action="/users">
            {{csrf_field()}}
            <p>USERNAME:</p>
            <input type="text" class="input-register" name="username">
            <p>E-MAIL:</p>
            <input type="email" class="input-register" name="email">
            <p>PASSWORD:</p>
            <input type="password" class="input-register" name="password">
            <p>CONFIRM PASSWORD:</p>
            <input type="password" class="input-register" name="confirmpass">
            <br />
            <button type="submit" class="btn-primary btn-home" style="margin: 0;">SUBMIT</button>
        </form>
    </div>
    @endsection