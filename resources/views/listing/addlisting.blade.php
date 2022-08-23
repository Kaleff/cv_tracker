@extends('layout')
@section('content')
<h1>Input main information</h1>
<form action="{{ url('cv/storelisting') }}" method="POST">
    @csrf 
    <p>Name:</p>
    <input type="text" name="fullname" required>
    <p>Phone:</p>
    +<input type="tel" name="phone"  pattern="[0-9]{11}" placeholder="371xxxxxxxx" required>
    <p>Email:</p>
    <input type="email" name="email" required>
    <p>Location, City & Country:</p>
    <input type=text name="location">
    <p>Address:</p>
    <input type=text name="address">
    <p>Past Index:</p>
    <input type="text" name="pastindex" placeholder="LV-xxxx">
    <br>
    <button type="submit">Submit</button>
</form>
@endsection