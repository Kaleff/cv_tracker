@extends('layout')
@section('content')
<form action="{{ url('update/academy') }}" method="POST">
    @csrf 
    <p>Academia title:</p>
    <input type="text" name="title" required value="{{ $listingInfo->title }}">
    @error('title')
        <p>{{ $message }}</p>
    @enderror
    <p>Course:</p>
    <input type="text" name="course" required value="{{ $listingInfo->course }}">
    @error('course')
        <p>{{ $message }}</p>
    @enderror
    <p>Status:</p>
    <select name="status" value="{{ $listingInfo->status }}">
        <option value="Completed">Completed</option>
        <option value="In progress">In progress</option>
        <option value="Terminated">Terminated</option>
    </select>
    @error('status')
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
    @error('cvid')
        <p>{{ $message }}</p>
    @enderror
    <input type="hidden" name='id' value="{{ $listingInfo->id }}">
    <br>
    <button type="submit">Submit</button>
</form>
@endsection