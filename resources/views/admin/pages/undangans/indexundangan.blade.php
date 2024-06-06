<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitations</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .container-pertama {
        max-width: 1000px;
        margin: 0 auto;
    }
    .invitation-pertama {
        width: 100%;
        height: 100vh;
        position: relative;
        background-size: cover;
        background-position: center;
        color: #fff;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .overlay-pertama {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7); /* Adjusted opacity to 0.3 */
    }
    .content-pertama {
        z-index: 1;
        color: black;
    }
    .content-pertama h1 {
        font-family: "Caveat", cursive;
        font-style: bold;
        font-size: 3.5em;
        margin: 0;
        color: #fff;
    }
    .content-pertama h2 {
        font-size: 1em;
        margin: 10px 0;
        color: #fff;
    }
    .content-pertama p {
        font-size: 0.8em;
        color: #fff;
    }
    .btn-pertama {
      display: inline-flex;
      align-items: center;
      padding: 10px 20px;
      font-size: 16px;
      color: white;
      background-color: #8B4513; /* Brown color */
      text-decoration: none;
      border-radius: 25px; /* Rounded corners */
    }

    .btn-pertama:hover {
      background-color: #5A2D0C; /* Darker brown on hover */
    }

    .btn-pertama i {
      margin-right: 8px; /* Space between icon and text */}

    .container-kedua {
        max-width: 1000px;
        margin: 0 auto;
    }
    .invitation-kedua {
        width: 100%;
        height: 100vh;
        position: relative;
        background-size: cover;
        background-position: center;
        color: #fff;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .overlay-kedua {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7); /* Adjusted opacity to 0.3 */
    }
    .content-kedua {
        z-index: 1;
        color: black;
    }
    .content-kedua h1 {
        font-family: "Caveat", cursive;
        font-style: bold;
        font-size: 3.5em;
        margin: 0;
        color: #fff;
    }
    .content-kedua h2 {
        font-size: 1em;
        margin: 10px 0;
        color: #fff;
    }
    .content-kedua p {
        font-size: 0.8em;
        color: #fff;
    }

    .container-ketiga {
        max-width: 1000px;
        margin: 0 auto;
    }
    .invitation-ketiga {
        width: 100%;
        height: 100vh;
        position: relative;
        background-size: cover;
        background-position: center;
        /* color: #fff; */
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .content-ketiga {
        z-index: 1;
        color: black;
    }
    .content-ketiga h1 {
        font-family: "IBM Plex Serif", serif;
        font-weight: 400;
        font-style: normal;
        font-size: 2,5em;
        margin: 0;
        /* color: #fff; */
    }
    .content-ketiga h2 {
        font-family: "IBM Plex Serif", serif;
        font-weight: 200;
        font-style: normal;
        font-size: 2,5em;
        margin: 10px 0;
       
    }
    .content-ketiga p {
        font-size: 0.8em;
       
    }
  
    .container-keempat {
        max-width: 1000px;
        margin: 0 auto;
    }
    .invitation-keempat {
        width: 100%;
        height: 100vh;
        position: relative;
        background-size: cover;
        background-position: center;
        /* color: #fff; */
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .content-keempat {
        z-index: 1;
        color: black;
    }
    .content-keempat h1 {
        font-family: "IBM Plex Serif", serif;
        font-weight: 400;
        font-style: normal;
        font-size: 2,5em;
        margin: 0;
        /* color: #fff; */
    }
    .content-keempat h2 {
        font-family: "IBM Plex Serif", serif;
        font-weight: 200;
        font-style: normal;
        font-size: 2,5em;
        margin: 10px 0;
       
    }
    .content-keempat p {
        font-size: 0.8em;
       
    }
  
    .countdown {
        display: flex;
        justify-content: flex-end; /* Membuat kotak-kotak countdown tersusun dari kanan */
        padding: 10px; /* Padding untuk memberikan ruang di sekitar kotak countdown */
        border-radius: 5px; /* Membuat sudut-sudut kotak sedikit melengkung */
    }

    .countdown-item-1,
    .countdown-item-2,
    .countdown-item-3,
    .countdown-item-4 {
        background-color: #8B4513; /* Warna coklat */
        padding: 5px 10px; /* Padding untuk memberikan ruang di dalam kotak */
        border-radius: 5px; /* Membuat sudut-sudut kotak sedikit melengkung */
        margin-left: 10px; /* Jarak antara setiap kotak countdown */
        display: flex; /* Mengatur tata letak teks di dalam kotak countdown */
        flex-direction: column; /* Menjadikan teks berada dalam satu kolom */
        align-items: center; /* Pusatkan teks secara horizontal */
        text-align: center; /* Pusatkan teks secara vertikal */
    }

    .countdown-number {
        font-size: 24px; /* Ukuran teks angka */
        color: #FFF; /* Warna teks putih */
    }

    .countdown-label {
        font-size: 14px; /* Ukuran teks label */
        color: #FFF; /* Warna teks putih */
    }
    



.groom-name-1{
    margin-right: 50px;
    font-family: "Caveat", cursive;
        font-style: bold;
        font-size: 2.5em;
       
       
}

.groom-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.name-photo-container {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 20px; /* Menambah jarak antara nama dan foto */
}

.groom-names {
    display: flex;
    flex-direction: column;
    align-items: center; /* Untuk memastikan semua elemen di tengah secara horizontal */
    gap: 20px; /* Menambah jarak antar elemen */
}

.groom-name {
    font-family: "Caveat", cursive;
        font-style: bold;
        font-size: 3.4em;
   
    color: #8B4513; /* Atur warna teks sesuai kebutuhan */
    text-align: center; /* Menjaga teks di tengah */
}

.groom-names h3 {
    margin: 2px; /* Menghapus margin default */
    font-weight: bold; /* Atur sesuai kebutuhan */
    color: #555; /* Warna teks untuk h3 */
    font-size: 0,8em; /* Ukuran font untuk h3 */
    text-align: center;
}

.groom-names h4 {
    margin: 0; /* Menghapus margin default */
    font-weight: bold; /* Atur sesuai kebutuhan */
    color: #8B4513; /* Warna teks untuk h4 */
    font-size: 1em; /* Ukuran font untuk h4 */
    text-align: center;
}



.name-photo-container-1 {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 20px; /* Menambah jarak antara nama dan foto */
}

.groom-photo {
    width: 220px;
    height: 240px;
    border-top-left-radius: 60%;
    border-top-right-radius: 60%;
    object-fit: cover;
    border: 1px solid #fff;
    border-bottom: none;
}
.groom-container-2 {
    display: flex;
    justify-content: center;
    align-items: center;
}

.name-photo-container-2 {
    display: flex;
    flex-direction: row; /* Mengatur elemen dalam urutan normal (foto di kiri, teks di kanan) */
    align-items: center;
   
}

.groom-photo-container-2 {
    margin-right: 20px; /* Menambah jarak antara foto dan nama */
}

.groom-photo {
    width: 220px;
    height: 240px;
    border-top-left-radius: 60%;
    border-top-right-radius: 60%;
    object-fit: cover;
    border: 1px solid #fff;
    border-bottom: none;
    border: 1px solid #8B4513;
}



.groom-name-2 {
    font-family: "Caveat", cursive;
        font-style: bold;
        font-size: 3.4em;
       
    color: #8B4513; /* Atur warna teks sesuai kebutuhan */
    text-align: center; /* Menjaga teks di tengah */
    gap: 20px;
}

.groom-names-2 h3 {
    margin: 2px; /* Menghapus margin default */
    font-weight: bold; /* Atur sesuai kebutuhan */
    color: #555; /* Warna teks untuk h3 */
    font-size: 0,8em;
    text-align: center; /* Ukuran font untuk h3 */
    gap: 20px;
}

.groom-names-2 h4 {
    margin: 0; /* Menghapus margin default */
    font-weight: bold; /* Atur sesuai kebutuhan */
    color: #8B4513; /* Warna teks untuk h4 */
    font-size: 1em; 
    text-align: center;/* Ukuran font untuk h4 */
}



.pita-2{
    background-color: #8B4513; /* Warna coklat */
    color: #FFFFFF; /* Warna putih untuk teks */
    padding: 30px 40px; /* Beri padding untuk menjaga jarak teks dari tepi pita */
    margin-top: -7px; /* Menghilangkan jarak antara pita dan foto */
    border: 50px solid #8B4513;
  
  
   
        font-style: bold;
        font-size: 1.5em;
}

.pita {
    background-color: #8B4513; /* Warna coklat */
    color: #FFFFFF; /* Warna putih untuk teks */
    padding: 30px 40px; /* Beri padding untuk menjaga jarak teks dari tepi pita */
    margin-top: -78px; /* Menghilangkan jarak antara pita dan foto */
  
  
   
        font-style: bold;
        font-size: 1.5em;
}

.pita h2 {
    font-family: "Caveat", cursive;
    margin: 50; /* Menghilangkan margin default */
}


.pita h2 {
    margin: 0; /* Menghilangkan margin default */
}

.images-galery-mini {
    display: flex;
    justify-content: space-between;
    gap: 10px;
}

.images-galery-mini img {
    width: 30%; /* Sesuaikan sesuai kebutuhan */
    max-width: 95px; /* Sesuaikan sesuai kebutuhan */
    border-radius: 10px;
    transition: transform 0.3s ease;
    margin-left: 10px;
    margin-right: 10px;
}

.images-galery-mini img:hover {
    transform: translateX(10px);
}

.event {
    background: #FFFFFF;
    border-top-left-radius: 5%;
    border-top-right-radius: 5%;
    padding: 50px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    position: relative;
    min-height: 700px; /* Sesuaikan sesuai kebutuhan */
}


.event-footer {
    text-align: center;
    background-color: #D2B48C; /* Warna coklat muda */
    padding: 1px;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    margin: 0;
    width: 100%;
    box-sizing: border-box;
    
}

.event-footer h2 {
    font-family: "Caveat", cursive;
            font-style: bold;
}



        .event-title {
            margin: 20px auto;
            font-size: 1.5em;
            font-weight: 400;
            margin-bottom: 15px;
            font-family: "Cactus Classical Serif", serif;
            font-style: normal;
        }
       
        .event-date, .event-time, .event-location {
          
            margin: 10px 0;
            font-size: 1em;
        }
        .map-button {
            background-color: #6B4F4F;
            color: #FFF;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 0.9em;
        }
        .divider {
            
            margin: 20px 0;
            border-bottom: 2px solid #C5B3A7;
        }
        .divider-2 {
    width: 50%;
    margin: 10px auto; /* Changed from '10px 0' to '10px auto' */
    border-bottom: 2px solid #C5B3A7;
}

       
        .header-2 {
            font-family: "Caveat", cursive;
            font-style: bold;
            font-size: 2.5em;
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }






</style>

<style>
    .event-title {
        font-size: 1.5em;
        font-weight: bold;
        text-align: center;
        font-weight: 400;
            margin-bottom: 15px;
            font-family: "Cactus Classical Serif", serif;
            font-style: normal;
    }
    h1 {
        font-size: 3em;
        font-weight: bold;
        text-align: center;
        font-family: "Cactus Classical Serif", serif;
            font-style: normal;
        margin: 0.5em 0;
    }
    h3 {
        font-size: 1.2em;
        font-weight: normal;
        text-align: center;
        font-family: "Cactus Classical Serif", serif;
            font-style: normal;
        margin: 0.2em 0;
    }
    h4 {
    font-size: 1.2em;
    font-weight: 500;
    text-align: center;
    font-family: "Cactus Classical Serif", serif;
    font-style: normal;
    margin: 0.2em 0;
    color: #8B4513; /* Gunakan kode warna hexadecimal #8B4513 */
}

    .divider-2 {
        width: 50%;
        margin: 0.5em auto;
        border-bottom: 2px solid #8B4513; /* Example color, adjust as needed */
    }
    .event-footer {
        text-align: center;
        margin-top: 1em;
    }
    .map-container {
        margin: 1em auto;
        width: 100%;
        max-width: 600px; /* Adjust max-width as needed */
    }
    
</style>

<style>
.quote-container {
    text-align: center;
    background: #fff;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    max-width: 600px;
}

.title {
    font-size: 24px;
    font-weight: bold;
    color: #555;
}

.verse {
    font-size: 18px;
    color: #777;
    margin-top: 10px;
}

.arabic {
    font-size: 22px;
    color: #333;
    margin: 20px 0;
    line-height: 1.6;
}

.translation {
    font-size: 16px;
    color: #555;
    margin-top: 20px;
    line-height: 1.6;
}

.card-container {
    position: relative;
    text-align: center;
    color: white;
    max-width: 600px;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.background-image {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 10px;
}

.text-overlay {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    padding: 20px;
    background: rgba(0, 0, 0, 0.5); /* Added background to improve text visibility */
    border-radius: 0 0 10px 10px;
}

.names {
    font-size: 36px;
    font-weight: bold;
    margin: 0;
}

.line {
    width: 100px;
    height: 2px;
    background-color: white;
    margin: 10px auto;
}

.heart {
    font-size: 24px;
}

.message {
    font-size: 16px;
    margin-top: 10px;
}

.footer-container-1 {
    text-align: center;
    color: #555;
    max-width: 600px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.powered-by {
    font-size: 14px;
    font-style: italic;
}

.logo {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin: 10px 0;
    object-fit: cover;
}

.website {
    display: block;
    color: #555;
    text-decoration: none;
    font-size: 16px;
    margin: 10px 0;
}

.website:hover {
    text-decoration: underline;
}

.copyright {
    font-size: 12px;
    color: #777;
    margin-top: 10px;
    line-height: 1.5;
}


</style>

<style>
    .only-on-large-screen {
        display: none; /* Semua konten dengan kelas ini disembunyikan */
    }

    @media only screen and (min-width: 601px) {
        /* CSS untuk layar lebih besar dari 600px */
        .only-on-large-screen {
            display: block; /* Tampilkan konten dengan kelas ini */
            font-weight: bold; /* Misalnya, tambahkan gaya teks tebal */
        }
        .container-pertama {
            display: none; /* Tampilkan konten undangan pernikahan */
        }
        .container-kedua {
            display: none; /* Tampilkan konten undangan pernikahan */
        }
        .container-ketiga {
            display: none; /* Tampilkan konten undangan pernikahan */
        }
        .pita-2 {
            display: none; /* Tampilkan konten undangan pernikahan */
        }
        .container {
            display: none; /* Tampilkan konten undangan pernikahan */
        }
        .invitation-keempat {
            display: none; /* Tampilkan konten undangan pernikahan */
        }
        .quote-container {
            display: none; /* Tampilkan konten undangan pernikahan */
        }
        .card-container {
            display: none; /* Tampilkan konten undangan pernikahan */
        }
        .footer-container-1{
            display: none; /* Tampilkan konten undangan pernikahan */
        }
    }
</style>
<style>
    /* Tampilkan pesan hanya pada layar besar */
    .only-on-large-screen {
       
        position: fixed; /* Mengunci posisi pesan di layar */
        top: 50%; /* Posisikan pesan di tengah vertikal */
        left: 50%; /* Posisikan pesan di tengah horizontal */
        transform: translate(-50%, -50%); /* Pusatkan pesan */
        z-index: 9999; /* Pastikan pesan ditampilkan di atas konten lain */
        background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang dengan transparansi */
        padding: 20px; /* Ruang di dalam pesan */
        border-radius: 10px; /* Bentuk sudut pesan */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Efek bayangan */
        animation: fadeIn 0.5s ease-in-out; /* Animasi muncul */
    }

    @keyframes fadeIn {
        from {
            opacity: 0; /* Mulai dari tidak terlihat */
        }
        to {
            opacity: 1; /* Akhiri dengan sepenuhnya terlihat */
        }
    }

    /* Menentukan ukuran teks dalam pesan */
    .only-on-large-screen p {
        font-size: 24px; /* Ukuran teks */
        text-align: center; /* Pusatkan teks */
        margin: 0; /* Hapus margin agar tidak ada ruang tambahan */
    }
</style>


</head>


<body>
<div class="only-on-large-screen">
    <p>Maaf, hanya untuk perangkat mobile.</p>
</div>
    <div class="container-pertama" id="invitation1">
        @foreach($undangans as $undangan)
            <div class="invitation-kedua" style="background-image: url('{{ asset('storage/' . $undangan->background_foto) }}');">
                <div class="overlay-pertama"></div>
                <div class="content-pertama">
                <div data-aos="fade-up"
                    data-aos-duration="3000">
                    <h2>The Wedding of</h2> 
                    </div><!-- Moved above -->
                    <div data-aos="fade-up"
                    data-aos-duration="3000">
                    <h1>{{ $undangan->nama_pengantin_pria }} & {{ $undangan->nama_pengantin_wanita }}</h1>
                    </div>
                    <div data-aos="fade-up"
                    data-aos-duration="3000">
                    <p>{{ Carbon\Carbon::parse($undangan->tanggal_pernikahan)->isoFormat('dddd, D MMMM YYYY') }}</p>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p>Kepada Yth.</p>
                    <h2>Rany Renzindia Uwp</h2>
                    <a href="#invitation2" class="btn-pertama" onclick="scrollToSecondInvitation()"> <i class="fas fa-envelope"></i>Open Invitation</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container-kedua" id="invitation2">
        @foreach($undangans as $undangan)
            <div class="invitation-kedua" style="background-image: url('{{ asset('storage/' . $undangan->background_foto_kedua) }}');">
                <div class="overlay-kedua"></div>
                <div class="content-kedua">
                <div data-aos="fade-up"
                    data-aos-duration="3000">
                    <h2>The Wedding of</h2> 
                    </div><!-- Moved above -->
                    <div data-aos="fade-up"
                    data-aos-duration="3000">
                    <h1>{{ $undangan->nama_pengantin_pria }} & {{ $undangan->nama_pengantin_wanita }}</h1>
                    </div>
                    <div data-aos="fade-up"
                    data-aos-duration="3000">
                    <p>{{ Carbon\Carbon::parse($undangan->tanggal_pernikahan)->isoFormat('dddd, D MMMM YYYY') }}</p>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                        <div class="countdown" id="countdown">
                            
                            <div class="countdown-item-1">
                                <span class="countdown-number" id="days">00</span>
                                <span class="countdown-label">Hari</span>
                            </div>

                            <div class="countdown-item-2">
                                <span class="countdown-number" id="hours">00</span>
                                <span class="countdown-label">Jam</span>
                            </div>

                            <div class="countdown-item-3">
                                <span class="countdown-number" id="minutes">00</span>
                                <span class="countdown-label">Menit</span>
                            </div>

                            <div class="countdown-item-4">
                                <span class="countdown-number" id="seconds">00</span>
                                <span class="countdown-label">Detik</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        @endforeach

        <div class="container-ketiga" id="invitation3">
    @foreach($undangans as $undangan)
        <div class="invitation-ketiga" style=>
            <div class="overlay-ketiga"></div>
            <div class="content-ketiga">
                <br>
                <br>
                <br>
                <div data-aos="fade-up" data-aos-duration="3000">
                    <h2>OUR</h2> 
                </div>
                <div data-aos="fade-up" data-aos-duration="3000">
                    <h1>WEDDING</h1>
                </div>
                <br>
                <div data-aos="fade-up" data-aos-duration="3000">
                    <p>Tanpa menggurangi rasa hormat, kami bermaksud mengundang Bapak/ibu/Saudara/I untuk menghadiri acara pernikahan kami</p>
                </div>
                <br>
                <br>
                
                <div class="images-galery-mini">
                    <img src="https://picsum.photos/180/180?random=1" alt="Wedding Image 1">
                    <img src="https://picsum.photos/180/180?random=2" alt="Wedding Image 2">
                    <img src="https://picsum.photos/180/180?random=3" alt="Wedding Image 3">
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                
              
                <div class="groom-container" data-aos="fade-up" data-aos-duration="3000">
                    <div class="name-photo-container">
                        <div class="groom-names">
                            <div class="groom-name">{{ $undangan->nama_pengantin_pria }}</div>
                            <h3> {{ $undangan->nama_pengantin_pria_lengkap }}</h3>
                            <h4> {{ $undangan->nama_ortu_pria }}</h4>
                        </div>
                        <div class="groom-photo-container">
                            <img src="{{ asset('storage/' . $undangan->foto_pengantin_pria) }}" alt="Groom Photo" class="groom-photo">
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="pita">
                    <h2>{{ $undangan->nama_pengantin_pria }} & {{ $undangan->nama_pengantin_wanita }}</h2>
                </div>
            </div>
        </div>
    @endforeach
    <br>
    <br>
    <br>
    <br>
    <div class="container-keempat" id="invitation3">
        </div>
        <div class="groom-container-2" data-aos="fade-up" data-aos-duration="3000">
            <div class="name-photo-container-2">
                <div class="groom-photo-container-2">
                    <img src="{{ asset('storage/' . $undangan->foto_pengantin_wanita) }}" alt="Groom Photo" class="groom-photo">
                </div>
                <br>
                <div class="groom-names-2">
                    <div class="groom-name-2">{{ $undangan->nama_pengantin_wanita }}</div>
                    <br>
                    <h3> {{ $undangan->nama_pengantin_wanita_lengkap }}</h3>
                    <br>
                    <h4> {{ $undangan->nama_ortu_wanita }}</h4>
                </div>
            </div>
        </div>
        <br>
        </div>
            <div class="pita-2"></div>
                <div class="container-keempat" id="invitation3">
                    @foreach($undangans as $undangan)
                        <div class="invitation-keempat" style="background-color: #8B4513;">
                            <div class="overlay-keempat"></div>
                            <div class="content-keempat">
                            <div class="container">
                        <br>
                        <div class="event">
                    <div class="event-title">AKAD DAN RESEPSI</div>
                    <br>
                    <h3>{{ $undangan->nama_hari }}</h3>
                    <div class="divider-2"></div>
                    <h1>{{ Carbon\Carbon::parse($undangan->tanggal_pernikahan)->format('d') }}</h1>
                    <div class="divider-2"></div>
                    <h3>{{ $undangan->nama_bulan }}    {{ Carbon\Carbon::parse($undangan->tanggal_pernikahan)->format('Y') }}</h3>
                    <br>
                    <div class="map-container" id="map-{{ $loop->index }}" style="height: 300px;"></div>
                    <br>
                    <h4>{{ substr($undangan->jam_resepsi, 0, 5) }} - selesai </h4>
                    <p> {{ $undangan->nama_jalan }}</p>
                    <div class="event-footer">
                        <h2>{{ $undangan->nama_pengantin_pria }} & {{ $undangan->nama_pengantin_wanita }}</h2>
                    </div>
                </div>
        <div class="divider"></div>
    </div>
</div>
</div>
@endforeach
</div>

        <div class="quote-container">
            <br>
            <br>
                <h1 class="title">WEDDING QUOTESS</h1>
                <p class="verse">Surat Ar-Rum Ayat 21</p>
                <p class="arabic">وَمِنْ ءَايَـٰتِهِۦٓ أَنْ خَلَقَ لَكُم مِّنْ أَنفُسِكُمْ أَزْوَٰجًۭا لِّتَسْكُنُوٓا۟ إِلَيْهَا وَجَعَلَ بَيْنَكُم مَّوَدَّةًۭ وَرَحْمَةً ۚ إِنَّ فِى ذَٰلِكَ لَءَايَـٰتٍۢ لِّقَوْمٍۢ يَتَفَكَّرُونَ</p>
                <p class="translation">
                    Artinya: Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.
                </p>
            </div>
            <div class="card-container">
                <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88" alt="Wedding Image" class="background-image">
                <div class="text-overlay">
                    <h1 class="names">{{ $undangan->nama_pengantin_pria }} & {{ $undangan->nama_pengantin_wanita }}</h1>
                    <div class="line"></div>
                    <div class="heart">&#10084;</div>
                    <p class="message">Atas kehadiran dan doa restunya kami ucapkan terimakasih.</p>
                </div>
            </div>
            <div class="footer-container-1">
                <p class="powered-by">Powered by:</p>
                <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88"  alt="Momen Kita Logo" class="logo">
                <a href="https://www.momenkita.id" class="website">www.studio.id</a>
                <p class="copyright">
                    Copyright © 2022 studio Kita Invitation - All Rights Reserved.<br>
                    Instagram: @studio.official | Whatsapp: (+62) 85-755-222-785 | Email: halo@studio.id
                </p>
            </div>
    <script>
    // Fungsi untuk menghitung countdown
    function countdown(targetDate, daysElement, hoursElement, minutesElement, secondsElement) {
        // Set interval to update countdown every second
        var countdownInterval = setInterval(function() {
            // Mendapatkan tanggal dan waktu sekarang
            var now = new Date().getTime();

            // Menghitung selisih waktu antara sekarang dan target
            var distance = targetDate - now;

            // Menghitung hari, jam, menit, dan detik dari selisih waktu
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Update countdown elements
            daysElement.innerText = days;
            hoursElement.innerText = hours;
            minutesElement.innerText = minutes;
            secondsElement.innerText = seconds;

            // If the countdown is finished, clear the interval
            if (distance <= 0) {
                clearInterval(countdownInterval);
                daysElement.innerText = '0';
                hoursElement.innerText = '0';
                minutesElement.innerText = '0';
                secondsElement.innerText = '0';
            }
        }, 1000);
    }

    // Panggil countdown saat halaman dimuat
    window.onload = function() {
        // Mengambil tanggal pernikahan dari variabel JavaScript yang disediakan oleh Laravel
        var targetDate = new Date("{{ $undangan->tanggal_pernikahan }}");

        // Mengambil elemen-elemen countdown
        var daysElement = document.getElementById("days");
        var hoursElement = document.getElementById("hours");
        var minutesElement = document.getElementById("minutes");
        var secondsElement = document.getElementById("seconds");

        // Panggil fungsi countdown dengan elemen-elemen countdown yang sesuai
        countdown(targetDate, daysElement, hoursElement, minutesElement, secondsElement);
    };
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        AOS.init();
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        @foreach($undangans as $index => $undangan)
            var lat = {{ $undangan->lokasi_pernikahan_lat }};
            var lng = {{ $undangan->lokasi_pernikahan_lng }};
            var mapId = 'map-{{ $index }}';

            var map = L.map(mapId).setView([lat, lng], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
            }).addTo(map);

            var marker = L.marker([lat, lng]).addTo(map);

            marker.on('click', function() {
                window.open(`https://www.google.com/maps?q=${lat},${lng}`, '_blank');
            });
        @endforeach
    });
</script>
<script>
    // Fungsi untuk melakukan animasi scroll secara lambat
    function scrollToSecondInvitation() {
        var target = document.getElementById('invitation2');
        var startPosition = window.pageYOffset; // Posisi awal scroll
        var targetPosition = target.offsetTop; // Posisi target
        var distance = targetPosition - startPosition; // Jarak antara posisi awal dan target
        var duration = 1000; // Durasi animasi (ms)
        var startTime = null;

        // Fungsi untuk melakukan animasi scroll
        function animation(currentTime) {
            if (startTime === null) startTime = currentTime; // Set waktu awal jika belum diset
            var elapsedTime = currentTime - startTime; // Waktu yang telah berlalu
            var scrollY = ease(elapsedTime, startPosition, distance, duration); // Menggunakan fungsi ease untuk menghitung posisi scroll
            window.scrollTo(0, scrollY); // Lakukan scroll
            if (elapsedTime < duration) requestAnimationFrame(animation); // Lanjutkan animasi sampai durasi selesai
        }

        // Fungsi ease (untuk membuat animasi menjadi lambat saat mendekati tujuan)
        function ease(t, b, c, d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        }

        requestAnimationFrame(animation); // Mulai animasi scroll
    }
</script>


  
</body>
</html>
