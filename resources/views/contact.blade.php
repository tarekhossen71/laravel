@extends('home')

@section('css_style')
    h1{
        background: #000;
        color:#fff;
    }
@endsection

@section('main-content')
    <form>
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="Doe">
    </form>
@endsection
