@extends('layout')
@section('content')
<form action="{{ url('update/exp') }}" method="POST">
    @csrf 
    <p>Company:</p>
    <input type="text" name="company" required value="{{ $listingInfo->company }}">
    @error('company')
        <p>{{ $message }}</p>
    @enderror
    <p>Role:</p>
    <input type="text" name="role" required value="{{ $listingInfo->role }}">
    @error('role')
        <p>{{ $message }}</p>
    @enderror
    <p>Start date:</p>
    <input type="date" name="startdate" required value="{{ $listingInfo->startdate }}">
    @error('startdate')
        <p>{{ $message }}</p>
    @enderror
    <p>End date:</p>
    <input type="date" name="enddate" required value="{{ $listingInfo->enddate }}">
    @error('enddate')
        <p>{{ $message }}</p>
    @enderror
    <input type="hidden" name="cvid" value="{{ $listingInfo->cvid }}">
    <input type="hidden" name="id" value="{{ $listingInfo->id }}">
    @error('cvid')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <button type="submit">Submit</button>
</form>
@endsection