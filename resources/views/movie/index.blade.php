<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
</head>
<body>
    <h1>Movies</h1>

    <div>
        @foreach($movies as $movie)
            <div>
                <h3>{{ $movie->title }}</h3>
                <p>{{ $movie->description }}</p>
                <p>Year: {{ $movie->year }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
