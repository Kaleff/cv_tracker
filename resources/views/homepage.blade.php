@extends('layout')
@section('content')

<h1>CV listings</h1>
<div class="gridTable">
    @foreach($listingsArray as $listing)
        <div class="📃">
            <a href="cv/{{ $listing->id }}" class="🔗">{{ $listing->fullname }}</a>
            <h4>+{{ $listing->phone }}</h4>
            <h4>{{ $listing->email }}</h4>
            <a href={{ url("cv/".$listing->id."/edit") }}><button>Edit listing</button></a>
            <a href={{ url("cv/".$listing->id."/delete") }}><button>Delete listing</button></a>
        </div>
    @endforeach
</div>
<a href='cv/addlisting'><button>Add CV listing</button></a>

@endsection