@extends('layouts.main-layout')
@section('content')
  <main>
    <div>
      <ul class="match">

        <li>
          <h2>ID</h2>
          <div>
            {{ $match -> id }}
          </div>
        </li>

        <li>
          <h2>Team-1</h2>
          <div>
            {{ $match -> team1 }}
          </div>
        </li>

        <li>
          <h2>Team-2</h2>
          <div>
            {{ $match -> team2 }}
          </div>
        </li>

        <li>
          <h2>Point-1</h2>
          <div>
            {{ $match -> point1 }}
          </div>
        </li>

        <li>
          <h2>Point-2</h2>
          <div>
            {{ $match -> point2 }}
          </div>
        </li>

        <li>
          <h2>Result</h2>
          <div>
            {{ $match -> result }}
          </div>
        </li>

        <li>
          <h2>Win</h2>
          <div>
            @if ($match -> point1 > $match -> point2)

              {{ $match -> team1 }}

            @elseif ($match -> point1 < $match -> point2)

              {{ $match -> team2 }}

            @else

              Draw

            @endif
          </div>
        </li>

      </ul>
    </div>

    <div class="button-center">
      <a class="home" href="{{route('home')}}">List Matches</a>
    </div>

  </main>
@endsection
