@extends('layout')
@section('content')
<h1>Input education information:</h1>
<form action="{{ url('store/academy') }}" method="POST">
    @csrf 
    <p>Academia title:</p>
    <input type="text" name="title" required>
    @error('title')
        <p>{{ $message }}</p>
    @enderror
    <p>Course:</p>
    <input type="text" name="course" required>
    @error('course')
        <p>{{ $message }}</p>
    @enderror
    <p>Status:</p>
    <select name="status">
        <option value="Completed">Completed</option>
        <option value="In progress">In progress</option>
        <option value="Terminated">Terminated</option>
    </select>
    @error('status')
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