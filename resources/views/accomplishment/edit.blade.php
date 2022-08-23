@extends('layout')
@section('content')
<form action="{{ url('update/achievment') }}" method="POST">
    @csrf 
    <p>Title:</p>
    <input type="text" name="title" required value="{{ $listingInfo->title }}">
    @error('title')
        <p>{{ $message }}</p>
    @enderror
    <p>Description:</p>
    <input type="text" name="description" required value="{{ $listingInfo->description }}">
    @error('description')
        <p>{{ $message }}</p>
    @enderror
    <p>Type:</p>
    <select name="type" value="{{ $listingInfo->type }}">
        <option value="Achievment">Achievment</option>
        <option value="Skill in practice">Skill in practice</option>
        <option value="Project">Project</option>
    </select>
    @error('type')
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