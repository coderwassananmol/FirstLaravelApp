@extends('layout.layout')
@section('getTitle')
    Welcome User
@endsection
@section('body')
    <h1 class="main-heading">Hello Human, please login.</h1>
    <div class="container big-circle">
        <form method="POST" action="/getUser">
            {{csrf_field()}}
            <div class="username">
                <p>USERNAME:</p>
                <input type="text" class="input-login" name="username">
                <br /><br />
                <input type="submit" class="login-submit" value="Submit">
            </div>
            <div class="password noshow">
                <p>PASSWORD:</p>
                <input type="password" class="input-login" name="password">
                <br /><br />
                <input type="submit" class="login-submit" value="Submit">
            </div>
        </form>
    </div>
    <script>
        @if(isset($status))
            @if($status == false)
                $('.main-heading').html('Sorry, <strong>username</strong> not found.');
            @endif
            @if($status == true)
                $('.main-heading').html('Great! You just need to enter your <strong>password</strong> to continue.');
                $('.username').fadeOut(100);
                $('.password').fadeIn(700);
            @endif
        @endif
    </script>
    @endsection