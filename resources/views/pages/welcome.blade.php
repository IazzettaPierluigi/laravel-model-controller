@extends('layouts.basic')

@section('title', 'Benvenuto | Home')


@section('main')
    <main>
        <h1>main welcome</h1>

{{-- {{dd ($movies)}} --}}

<ul>
    @foreach ($movies as $item)
        <li>
        {{$item['title']}}
        </li>
    @endforeach
</ul>
    </main>
@endsection
