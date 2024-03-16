@extends('layouts.master')

@section('dynamic_section')
    <form action="{{ URL::to('/') }}/register_submit" method="post" enctype="multipart/form-data">
        @csrf
        Enter name: <input type="text" name="fn" />
        <br>
        Enter Passsword: <input type="password" name="password" />
        <br>
        Enter email: <input type="email" name="email" />
        <br>
        select profile Picture : <input type="file" name="picture" />
        <br>
        <input type="submit" value="Register">
    </form>
@endsection
