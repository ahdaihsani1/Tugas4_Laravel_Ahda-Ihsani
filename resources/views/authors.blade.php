<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authors List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
        }

        ul {
            list-style: none;
            padding-left: 0;
        }

        li {
            padding: 12px 16px;
            margin-bottom: 10px;
            background-color: #e9ecef;
            border-left: 5px solid #3498db;
            border-radius: 6px;
            font-size: 16px;
            color: #2f2f2f;
            transition: background-color 0.2s;
        }

        li:hover {
            background-color: #d6d8db;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>✍️ List of Authors</h1>
        <ul>
            @foreach($authors as $author)
                <li>{{ $author->name }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
