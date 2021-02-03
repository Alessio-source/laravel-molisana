@extends("layouts.main")

@section("main")
    <div class="cards">

        <h2>Le lunghe</h2>
        @foreach ($lunga as $value)
        <div class="card">
            <img src="{{ $value['src'] }}" alt="">
        </div>
        @endforeach

        <h2>Le corte</h2>
        @foreach ($corta as $value)
        <div class="card">
            <img src="{{ $value['src'] }}" alt="">
        </div>
        @endforeach

        <h2>Le cortissime</h2>
        @foreach ($cortissima as $value)
        <div class="card">
            <img src="{{ $value['src'] }}" alt="">
        </div>
        @endforeach

    </div>
@endsection