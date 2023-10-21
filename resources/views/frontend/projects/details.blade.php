@extends('frontend.master')
@section('content')

<div class="p-5" >
    <a style="text-decoration: none;"  >  <h2 class="fw-bolder">{{ $projects['name'] }}</h2> </a>
        <p style="margin-left:15%;">{{ $projects['description'] }}</p>
    </div>
    {{-- @dd($projects['image']) --}}
    <img style="margin-left:15%;" class="img-fluid" src="{{ asset($projects ['image'])}}" alt="..." />
@endsection
