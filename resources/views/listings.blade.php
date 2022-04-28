@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')
<div
class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>

{{-- <h1>{{ $heading }} </h1> --}}

@unless (count($listings) == 0)



@foreach ($listings as $listing)

    {{-- <h2>
        <a href="/listings/{{$listing['id']}}">
        {{$listing['title']}} </a>
    </h2>
    <p>
        {{$listing['description']}}

    </p> --}}

      {{-- acces for (listing-card) component --}}
      <x-listing-card :listing="$listing"/>
    


@endforeach
@else
    <p>No listings Found !!!!!!!!!!</p>
@endunless
</div>

@endsection

