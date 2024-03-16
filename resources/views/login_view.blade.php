@extends('layouts.master')

@section('dynamic_section')
    <h1>login form</h1>
    <form action="{{ URL::to('/') }}/form_submit" method="get">
        Enter username: <input type="text" name="un" id="">
        <br>
        Enter Password: <input type="password" name="pwd" id="">
        <br>
        <input type="submit" value="Login">
    </form>
@endsection
