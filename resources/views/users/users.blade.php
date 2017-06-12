@extends('layout.users')
@section('getTitle')
    Welcome, <?php echo $_POST['username'] ?>
    @endsection
@section('heading')
    HELLO HUMAN, <b><?php if(empty($_POST['username'])) echo 'Alien'; else echo $_POST['username']; ?></b>
@endsection
@section('body')
@endsection
