@extends('layouts.main-layout')
@section('content')
  <main>
    <div>

      {{-- Il form serve per inviare le modifiche alla tabella nella database. In questo caso modifichiamo un oggetto--}}
      <form method="POST" action="{{ route('update', $match -> id) }}">
        @csrf
        @method('POST')

        <ul class="edit">

          <li>
            <h2>Team-1</h2>
            <div>
              <input type="text" name="team1" placeholder="team1" value="{{ $match -> team1 }}">
            </div>
          </li>

          <li>
            <h2>Team-2</h2>
            <div>
              <input type="text" name="team2" placeholder="team2" value="{{ $match -> team2 }}">
            </div>
          </li>

          <li>
            <h2>Point-1</h2>
            <div>
              <input type="number" name="point1" placeholder="point1" value="{{ $match -> point1 }}">
            </div>
          </li>

          <li>
            <h2>Point-2</h2>
            <div>
              <input type="number" name="point2" placeholder="point2" value="{{ $match -> point2 }}">
            </div>
          </li>

          <li>
            <h2>Result</h2>
            <div>
              <select name="result">
                <option value="0"
                  @if ($match -> result == 0)
                    selected
                  @endif
                >Team-1</option>
                <option value="1"
                  @if ($match -> result == 1)
                    selected
                  @endif
                >Team-2</option>
              </select>
            </div>
          </li>

        </ul>

        <div class="button-center">
          <button type="submit" class="home">Update Match</button>
          <a class="home" href="{{route('home')}}">List Matches</a>
        </div>

      </form>
    </div>
  </main>
@endsection
