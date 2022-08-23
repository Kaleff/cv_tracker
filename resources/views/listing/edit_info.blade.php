@extends('layout')
@section('content')
<h1>Edit main information</h1>
<form action="{{ url('cv/updatelisting') }}" method="POST">
    @csrf 
    <p>Name:</p>
    <input type="text" name="fullname" required value="{{ $listingInfo->fullname }}">
    <p>Phone:</p>
    +<input type="tel" name="phone"  pattern="[0-9]{11}" placeholder="371xxxxxxxx" required value="{{ $listingInfo->phone }}">
    <p>Email:</p>
    <input type="email" name="email" required value="{{ $listingInfo->email }}">
    <p>Location, City & Country:</p>
    <input type=text name="location" required value="{{ $listingInfo->location }}">
    <p>Address:</p>
    <input type=text name="address" required value="{{ $listingInfo->address }}">
    <p>Past Index:</p>
    <input type="text" name="pastindex" placeholder="LV-xxxx" required value="{{ $listingInfo->pastindex }}">
    <input hidden name='id' value="{{ $listingInfo->id }}">
    <br>
    <button type="submit">Submit</button>
</form>
@endsection