<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Genres List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 10px 15px;
            margin-bottom: 8px;
            background-color: #f1f1f1;
            border-radius: 8px;
            font-size: 16px;
            color: #444;
            transition: background-color 0.3s ease;
        }

        li:hover {
            background-color: #e0e0e0;
        }

        .genre-name {
            font-weight: bold;
            color: #2c3e50;
        }

        .genre-desc {
            display: block;
            font-size: 14px;
            color: #666;
            margin-top: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📂 List of Genres</h1>
        <ul>
            @foreach($genres as $genre)
                <li>
                    <span class="genre-name">{{ $genre->name }}</span>
                    <span class="genre-desc">{{ $genre->description }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
