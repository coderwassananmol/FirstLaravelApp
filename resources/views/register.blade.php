@extends('layout.layout')
@section('getTitle')
    Welcome user! Please register.
    @endsection
@section('heading')
    Hello Human, please register.
@endsection
@section('body')
    <div class="errors"></div>
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
    @if(count($errors)>0)
        <script>
            $('.main-heading').html('Sorry, there are some errors.');
            $('.errors').html('<div class="alert alert-danger"> <ul class="list-alert"> @foreach($errors->all() as $err) <li> {{!! $err !!}} </li> @endforeach </ul> </div>');
        </script>

    @endif
    @endsection