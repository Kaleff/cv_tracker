@extends('layout')
@section('content')
<div class="mainInfo">
    <h1 class="title">{{ $listingData['mainInfo']->fullname }}</h1>
    <h3>Phone: +{{ $listingData['mainInfo']->phone }}</h3>
    <h3>Email: {{ $listingData['mainInfo']->email }}</h3>
    <h3>Adress: {{ $listingData['mainInfo']->location }}. {{ $listingData['mainInfo']->address }}</h3>
    <h3>Past Index: {{ $listingData['mainInfo']->pastindex }}</h3>
</div>
<a href='/' class='🔗'>Edit main information</a>
<h1>Education:</h1>
@foreach($listingData['education'] as $academia)
    <div class='entry'>
        <h2>{{ $academia->title }}</h2>
        <h3>Course: {{ $academia->course }}</h3>
        <h3>Status: {{ $academia->status }}</h3>
        <h3>Starting date: {{ $academia->startdate }}</h3>
        <h3>End date: {{ $academia->enddate }}</h3>
        <a href='/cv/{{ $listingData['mainInfo']->id }}/edit/academy/{{ $academia->id }}' class='🔗'>Edit entry</a>
    </div>
@endforeach

<a href='/cv/{{ $listingData['mainInfo']->id }}/add/academy' class='🔗'>Add education entry</a>
<h1>Work experience:</h1>
@foreach($listingData['workExp'] as $workExp)
    <div class='entry'>
        <h2>Company: {{ $workExp->company }}</h2>
        <h3>Role: {{ $workExp->role }}</h3>
        <h3>{{ $workExp->startdate }} - {{ $workExp->enddate }}</h3>
        <a href='/cv/{{ $listingData['mainInfo']->id }}/edit/exp/{{ $workExp->id }}' class='🔗'>Edit entry</a>
    </div>
@endforeach

<a href='/cv/{{ $listingData['mainInfo']->id }}/add/exp' class='🔗'>Add working experience entry</a>
<h1>Achievments:</h1>
@foreach($listingData['achievments'] as $achievment)
    <div class='entry'>
        <h2>{{ $achievment->title }}</h2>
        <h3>{{ $achievment->description }}</h3>
        <a href='/cv/{{ $listingData['mainInfo']->id }}/edit/achievment/{{ $achievment->id }}' class='🔗'>Edit entry</a>
    </div>
@endforeach

<a href='/cv/{{ $listingData['mainInfo']->id }}/edit/achievment' class='🔗'>Add achievment entry</a>
@endsection