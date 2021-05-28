@extends('layouts.main-layout')
@section('content')
  <main>
    <div>

      {{-- Il form serve per inviare le modifiche alla tabella nella database. In questo caso creriamo nuovo oggetto--}}
      <form method="POST" action="{{ route('store') }}">
        @csrf
        @method('POST')

        <ul>

          <li>
            <h2>Team-1</h2>
            <div>
              <input type="text" name="team1" placeholder="team1">
            </div>
          </li>

          <li>
            <h2>Team-2</h2>
            <div>
              <input type="text" name="team2" placeholder="team2">
            </div>
          </li>

          <li>
            <h2>Point-1</h2>
            <div>
              <input type="number" name="point1" placeholder="point1">
            </div>
          </li>

          <li>
            <h2>Point-2</h2>
            <div>
              <input type="number" name="point2" placeholder="point2">
            </div>
          </li>

          <li>
            <h2>Winer</h2>
            <div>
              <select name="result">
                <option value="0">Team-1</option>
                <option value="1">Team-2</option>
              </select>
            </div>
          </li>

        </ul>

        <div class="new-match">
          <button type="submit">Ad Match</button>
        </div>

      </form>
    </div>
  </main>
@endsection
