<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BookaBuku - Rating Buku</title>
  <link rel="stylesheet" href="style2.css"/>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<nav>
  <div class="nav-brand">📚 BookaBuku</div>
  <div class="nav-search">
    <input type="text" placeholder="Temukan buku yang anda inginkan"/>
  </div>
  <div class="nav-right">
    <button class="btn-login">Masuk/Daftar</button>
  </div>
</nav>

<div class="hero">
  <h1>TEMUKAN BUKU BARU<br>TUKAR CERITAMU</h1>
  <button class="btn-hero">Mulai Cari Buku</button>
</div>

<div class="tab-bar">
  <a href="#" class="active">Beranda</a>
  <a href="#">Katalog</a>
  <a href="#">Jual</a>
</div>

<div class="main">

  <div>
    <div class="section-title">Rekomendasi Hari Ini</div>
    <div class="book-list">

      <div class="book-card">
        <img class="book-cover" src="https://covers.openlibrary.org/b/id/8739161-M.jpg" alt="Tan Malaka"/>
        <div class="book-info">
          <div class="book-title">Tan Malaka - Menuju Republik Indonesia</div>
          <div class="book-author">Tan Malaka</div>
          <div class="book-badge">Bisa tukar tambah</div>
          <div class="book-price">Rp. 25.000</div>
          <div class="rating-label">Beri rating buku ini:</div>
          <div class="star-input" data-book-id="1">
            <span class="star" data-value="1">★</span>
            <span class="star" data-value="2">★</span>
            <span class="star" data-value="3">★</span>
            <span class="star" data-value="4">★</span>
            <span class="star" data-value="5">★</span>
          </div>
          <button class="btn-submit-rating" data-book-id="1">Kirim Rating</button>
          <div class="rating-success" id="success-1">Rating berhasil dikirim!</div>
        </div>
      </div>

      <div class="book-card">
        <img class="book-cover" src="https://covers.openlibrary.org/b/id/12547413-M.jpg" alt="Fihi Ma Fihi"/>
        <div class="book-info">
          <div class="book-title">Jalaluddin Rumi - Fihi Ma Fihi</div>
          <div class="book-author">Jalaluddin Rumi</div>
          <div class="book-badge">Tersedia</div>
          <div class="book-price">Rp. 35.000</div>
          <div class="rating-label">Beri rating buku ini:</div>
          <div class="star-input" data-book-id="2">
            <span class="star" data-value="1">★</span>
            <span class="star" data-value="2">★</span>
            <span class="star" data-value="3">★</span>
            <span class="star" data-value="4">★</span>
            <span class="star" data-value="5">★</span>
          </div>
          <button class="btn-submit-rating" data-book-id="2">Kirim Rating</button>
          <div class="rating-success" id="success-2">Rating berhasil dikirim!</div>
        </div>
      </div>

      <div class="book-card">
        <img class="book-cover" src="https://covers.openlibrary.org/b/id/8231856-M.jpg" alt="Bumi Manusia"/>
        <div class="book-info">
          <div class="book-title">Pramoedya Ananta Toer - Bumi Manusia</div>
          <div class="book-author">Pramoedya Ananta Toer</div>
          <div class="book-badge">Bisa tukar tambah</div>
          <div class="book-price">Rp. 45.000</div>
          <div class="rating-label">Beri rating buku ini:</div>
          <div class="star-input" data-book-id="3">
            <span class="star" data-value="1">★</span>
            <span class="star" data-value="2">★</span>
            <span class="star" data-value="3">★</span>
            <span class="star" data-value="4">★</span>
            <span class="star" data-value="5">★</span>
          </div>
          <button class="btn-submit-rating" data-book-id="3">Kirim Rating</button>
          <div class="rating-success" id="success-3">Rating berhasil dikirim!</div>
        </div>
      </div>

      <div class="book-card">
        <img class="book-cover" src="https://covers.openlibrary.org/b/id/8945509-M.jpg" alt="Laskar Pelangi"/>
        <div class="book-info">
          <div class="book-title">Andrea Hirata - Laskar Pelangi</div>
          <div class="book-author">Andrea Hirata</div>
          <div class="book-badge">Tersedia</div>
          <div class="book-price">Rp. 30.000</div>
          <div class="rating-label">Beri rating buku ini:</div>
          <div class="star-input" data-book-id="4">
            <span class="star" data-value="1">★</span>
            <span class="star" data-value="2">★</span>
            <span class="star" data-value="3">★</span>
            <span class="star" data-value="4">★</span>
            <span class="star" data-value="5">★</span>
          </div>
          <button class="btn-submit-rating" data-book-id="4">Kirim Rating</button>
          <div class="rating-success" id="success-4">Rating berhasil dikirim!</div>
        </div>
      </div>

    </div>
  </div>

  <div class="sidebar">

    <div class="overall-card">
      <h3>Overall Rating Buku</h3>
      <div id="overallRatingList">
        <div style="font-size:13px;color:#888;">Belum ada rating.</div>
      </div>
    </div>

    <div class="recent-card">
      <h3>Terakhir Dilihat</h3>
      <div class="recent-item">
        <img class="recent-icon" src="https://covers.openlibrary.org/b/id/12547413-S.jpg" alt="Fihi Ma Fihi"/>
        <div>
          <div class="recent-title">Jalaluddin Rumi</div>
          <div class="recent-author">Fihi Ma Fihi</div>
        </div>
      </div>
      <div class="recent-item">
        <img class="recent-icon" src="https://covers.openlibrary.org/b/id/8739161-S.jpg" alt="Tan Malaka"/>
        <div>
          <div class="recent-title">Tan Malaka</div>
          <div class="recent-author">Menuju Republik Indonesia</div>
        </div>
      </div>
      <div class="recent-item">
        <img class="recent-icon" src="https://covers.openlibrary.org/b/id/8231856-S.jpg" alt="Bumi Manusia"/>
        <div>
          <div class="recent-title">Pramoedya A. Toer</div>
          <div class="recent-author">Bumi Manusia</div>
        </div>
      </div>
    </div>

  </div>
</div>

<div id="toast"></div>

<script src="script2.js"></script>
</body>
</html>