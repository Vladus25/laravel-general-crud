@extends('layouts.main-layout')
@section('content')

  <main>
    {{-- Tabella fake di Matches --}}
    <ul>

      {{-- Numero di Match --}}
      <li>
        <h2>Number</h2>
        @for ($i = 1; $i <= 50; $i++)
          <div>
            {{ $i }}
          </div>
        @endfor
      </li>

      {{-- Team 1 --}}
      <li>
        <h2>Team-1</h2>
        @foreach ($matches as $match)
          <div>
            {{ $match -> team1 }}
          </div>
        @endforeach
      </li>

      {{-- Team 2 --}}
      <li>
        <h2>Team-2</h2>
        @foreach ($matches as $match)
          <div>
            {{ $match -> team2 }}
          </div>
        @endforeach
      </li>

      {{-- Clicare per sapere di piu sul Match --}}
      <li>
        <h2>Information</h2>
        @foreach ($matches as $match)
          <div>
            <a href="{{route('match', $match -> id)}}">
              <i class="fas fa-info-circle"></i>
            </a>
          </div>
        @endforeach
      </li>

      {{-- Clicare per Modificare un Match --}}
      <li>
        <h2>Edit</h2>
        @foreach ($matches as $match)
          <div>
            <a href="{{route('edit', $match -> id)}}">
              <i class="edit fas fa-user-edit"></i>
            </a>
          </div>
        @endforeach
      </li>

      {{-- Clicare per Eliminare un Match --}}
      <li>
        <h2>Delete</h2>
        @foreach ($matches as $match)
          <div>
            <a href="{{route('destroy', $match -> id)}}">
              <i class="delete fas fa-user-slash"></i>
            </a>
          </div>
        @endforeach
      </li>

    </ul>

    <div class="new-match">
      <a href="{{route('create')}}">New Match</a>
    </div>

  </main>
@endsection
