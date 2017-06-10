@extends('layout.users')
@section('getTitle')
    This is user: {{$getUserName}}
    @endsection
@section('body')
    <div class="container">
        <div class="showUser">USERNAME:</div>
        <div class="showUserInfo">{{$getUserName}}</div>
        <br />
        <div class="showUser">E-MAIL:</div>
        <div class="showUserInfo">{{$getUserID}}</div>
        <br />
        <div class="showUser">CREATED AT:</div>
        <div class="showUserInfo">{{$getUserCreated}}</div>
    </div>
    @endsection