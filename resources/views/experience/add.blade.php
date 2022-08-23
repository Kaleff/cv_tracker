@extends('layout')
@section('content')
<form action="{{ url('store/exp') }}" method="POST">
    @csrf 
    <p>Company:</p>
    <input type="text" name="company" required>
    @error('company')
        <p>{{ $message }}</p>
    @enderror
    <p>Role:</p>
    <input type="text" name="role" required>
    @error('role')
        <p>{{ $message }}</p>
    @enderror
    <p>Start date:</p>
    <input type="date" name="startdate" required>
    @error('startdate')
        <p>{{ $message }}</p>
    @enderror
    <p>End date:</p>
    <input type="date" name="enddate" required>
    @error('enddate')
        <p>{{ $message }}</p>
    @enderror
    <input type="hidden" name="cvid" value="{{ $cvid }}">
    @error('cvid')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <button type="submit">Submit</button>
</form>
@endsection