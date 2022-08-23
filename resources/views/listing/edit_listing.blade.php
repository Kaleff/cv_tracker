@extends('layout')
@section('content')
<div class="mainInfo">
    <h1 class="title">{{ $listingData['mainInfo']->fullname }}</h1>
    <h3>Phone: +{{ $listingData['mainInfo']->phone }}</h3>
    <h3>Email: {{ $listingData['mainInfo']->email }}</h3>
    <h3>Adress: {{ $listingData['mainInfo']->location }}. {{ $listingData['mainInfo']->address }}</h3>
    <h3>Past Index: {{ $listingData['mainInfo']->pastindex }}</h3>
</div>
<a href='{{ url("cv/".$listingData['mainInfo']->id."/edit_info") }}' class='🔗'><button>Edit main information</button></a>
<h1>Education:</h1>
@foreach($listingData['education'] as $academia)
    <div class='entry'>
        <h2>{{ $academia->title }}</h2>
        <h3>Course: {{ $academia->course }}</h3>
        <h3>Status: {{ $academia->status }}</h3>
        <h3>Starting date: {{ $academia->startdate }}</h3>
        <h3>End date: {{ $academia->enddate }}</h3>
        <a href='{{ url("cv/".$academia->cvid."/edit/academy/".$academia->id) }}' class='🔗'>
            <button>Edit entry</button>
        </a>
        <br>
        <a href='{{ url("cv/".$academia->cvid."/delete/academy/".$academia->id) }}' class='🔗'>
            <button>Delete entry</button>
        </a>
    </div>
@endforeach

<a href='{{ url("cv/".$listingData['mainInfo']->id."/add/academy/") }}' class='🔗'>
    <button>Add education entry</button>
</a>
<h1>Work experience:</h1>
@foreach($listingData['workExp'] as $workExp)
    <div class='entry'>
        <h2>Company: {{ $workExp->company }}</h2>
        <h3>Role: {{ $workExp->role }}</h3>
        <h3>{{ $workExp->startdate }} - {{ $workExp->enddate }}</h3>
        <a href='{{ url("cv/".$workExp->cvid."/edit/exp/".$workExp->id) }}' class='🔗'>
            <button>Edit entry</button>
        </a>
        <br>
        <a href='{{ url("cv/".$workExp->cvid."/delete/exp/".$workExp->id) }}' class='🔗'>
            <button>Delete entry</button>
        </a>
    </div>
@endforeach

<a href='{{ url("cv/".$listingData['mainInfo']->id."/add/exp/") }}' class='🔗'>
    <button>Add working experience entry</button>
</a>
<h1>Achievments:</h1>
@foreach($listingData['achievments'] as $achievment)
    <div class='entry'>
        <h2>{{ $achievment->title }}</h2>
        <h3>{{ $achievment->description }}</h3>
        <a href='{{ url("cv/".$achievment->cvid."/edit/achievment/".$achievment->id) }}' class='🔗'>
            <button>Edit entry</button>
        </a>
        <br>
        <a href='{{ url("cv/".$achievment->cvid."/delete/achievment/".$achievment->id) }}' class='🔗'>
            <button>Delete entry</button>
        </a>
    </div>
@endforeach

<a href='{{ url("cv/".$listingData['mainInfo']->id."/add/achievment/") }}' class='🔗'>
    <button>Add achievment entry</button>
</a>
@endsection