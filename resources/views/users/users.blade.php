@extends('layout.users')
@section('getTitle')
    Welcome, <?php echo $_POST['username'] ?>
    @endsection
@section('body')
        <h1 class="main-heading" style="font-size: 42px;">
            HELLO HUMAN, <b><?php if(empty($_POST['username'])) echo 'Alien'; else echo $_POST['username']; ?></b>
        </h1>
    @endsection
