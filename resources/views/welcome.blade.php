<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Welcome to MyBookHub</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        header {
            background: linear-gradient(90deg, #007bff, #00bfff);
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        header h1 {
            font-size: 2.8em;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2em;
        }

        .btn-primary {
            background-color: white;
            color: #007bff;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 20px;
            text-decoration: none;
        }

        .features {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 40px 20px;
            background-color: #ffffff;
        }

        .feature {
            width: 280px;
            padding: 25px;
            background-color: #f1f1f1;
            margin: 15px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        .feature h3 {
            margin-bottom: 10px;
            font-size: 1.3em;
        }

        .btn-action {
            display: inline-block;
            margin-top: 15px;
            background-color: #007bff;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.9em;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #343a40;
            color: white;
        }

        .why-choose-us {
            background-color: #f0f8ff;
            padding: 50px 20px;
            text-align: center;
        }

        .why-choose-us h2 {
            font-size: 2em;
            margin-bottom: 30px;
            color: #007bff;
        }

        .reasons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
        }

        .reason {
            width: 260px;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .reason h3 {
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        .reason p {
            font-size: 0.95em;
            color: #444;
        }

    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di <span style="color: #ffe600;">MyBookHub</span></h1>
        <p>Temukan buku favoritmu & penulis inspiratif di satu tempat!</p>
        <a href="/books" class="btn-primary">Jelajahi Koleksi</a>
    </header>

        <section class="why-choose-us">
        <h2>Mengapa Memilih MyBookHub?</h2>
        <div class="reasons">
            <div class="reason">
                <h3>📖 Pilihan Luas</h3>
                <p>Ribuan buku dari penulis lokal dan internasional.</p>
            </div>
            <div class="reason">
                <h3>⭐ Rekomendasi Cerdas</h3>
                <p>Temukan buku yang cocok berdasarkan minatmu.</p>
            </div>
            <div class="reason">
                <h3>💬 Komunitas Aktif</h3>
                <p>Bergabung dengan komunitas pembaca dan berdiskusi.</p>
            </div>
        </div>
    </section>

    <section class="features">
        <!-- Author Section -->
        <div class="feature">
            <h3>Author</h3>
            <a href="/authors" class="btn-action">Lihat Penulis</a>
        </div>

        <!-- Book Section -->
        <div class="feature">
            <h3>Book</h3>
            <a href="/books" class="btn-action">Lihat Buku</a>
        </div>

        <div class="feature">
            <h3>Genre</h3>
            <a href="/genres" class="btn-action">Lihat Buku</a>
        </div>
    </section>


    <footer>
        &copy; {{ date('Y') }} MyBookHub. All rights reserved.
    </footer>
</body>
</html>
