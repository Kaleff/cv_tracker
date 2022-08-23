@extends('layout')
@section('content')
<form action="{{ url('store/achievment') }}" method="POST">
    @csrf 
    <p>Title:</p>
    <input type="text" name="title" required>
    @error('title')
        <p>{{ $message }}</p>
    @enderror
    <p>Description:</p>
    <input type="text" name="description" required>
    @error('description')
        <p>{{ $message }}</p>
    @enderror
    <p>Type:</p>
    <select name="type">
        <option value="Achievment">Achievment</option>
        <option value="Skill in practice">Skill in practice</option>
        <option value="Project">Project</option>
    </select>
    @error('type')
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