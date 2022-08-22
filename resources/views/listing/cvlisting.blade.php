@extends('layout')
@section('content')
<div>
    <h1 class="title">{{ $listingData['mainInfo']->fullname }}</h1>
    <h3>Phone: +{{ $listingData['mainInfo']->phone }}</h3>
    <h3>Email: {{ $listingData['mainInfo']->email }}</h3>
    <h3>Adress: {{ $listingData['mainInfo']->location }}. {{ $listingData['mainInfo']->address }}</h3>
    <h3>Past Index: {{ $listingData['mainInfo']->pastindex }}</h3>
</div>
<h1>Education:</h1>
@foreach($listingData['education'] as $academia)
    <h2>{{ $academia->title }}</h2>
    <h3>Course: {{ $academia->course }}</h3>
    <h3>Status: {{ $academia->status }}</h3>
    <h3>Starting date: {{ $academia->startdate }}</h3>
    <h3>End date: {{ $academia->enddate }}</h3>
@endforeach
<h1>Work experience:</h1>
@foreach($listingData['workExp'] as $workExp)
    <h2>Company: {{ $workExp->company }}</h2>
    <h3>Role: {{ $workExp->role }}</h3>
    <h3>{{ $workExp->startdate }} - {{ $workExp->enddate }}</h3>
@endforeach
<h1>Achievments:</h1>
@foreach($listingData['achievments'] as $achievment)
    <h2>{{ $achievment->title }}</h2>
    <h3>{{ $achievment->description }}</h3>
@endforeach

@endsection