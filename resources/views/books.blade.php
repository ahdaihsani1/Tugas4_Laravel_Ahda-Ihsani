<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books List</title>
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
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 List of Books</h1>
        <ul>
            @foreach($books as $book)
                <li>
                    <strong>{{ $book->title }}</strong> — {{ $book->author?->name ?? 'Unknown Author' }}
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
