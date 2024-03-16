@extends('layouts.master')

@section('dynamic_section')
<h1> Gallery Page</h1>
<img src="{{ URL::to('/') }}/images/" alt="">
@endsection