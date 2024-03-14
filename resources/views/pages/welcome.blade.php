@extends('layouts.basic')

@section('title', 'Benvenuto | Home')


@section('main')
    <main>
        <h1>main welcome</h1>

{{-- {{dd ($movies)}} --}}

<div class="container">
    <div class="row">

        @foreach ($movies as $item)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$item['title']}}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{$item['original_title']}}</h6>
              <h6>{{$item['vote']}}</h6>
            </div>
          </div>
        @endforeach
    </div>
</div>

    </main>
@endsection
