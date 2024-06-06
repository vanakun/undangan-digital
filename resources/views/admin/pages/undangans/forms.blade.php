@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Form Data Pengantin
    </h2>

    <!-- General elements -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Tambah Data Pengantin
    </h4>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <form action="{{ route('admin.page.undangans.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="nama_pengantin_pria_lengkap" class="my-6 text-2sm font-semibold text-gray-700 dark:text-gray-200">Nama Pengantin Pria</label>
                <input type="text" name="nama_pengantin_pria_lengkap" id="nama_pengantin_pria_lengkap" required class="w-full px-3 py-2 mt-1 text-sm leading-tight text-gray-700 border rounded-md focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="nama_pengantin_pria" class="my-6 text-2sm font-semibold text-gray-700 dark:text-gray-200">Nama Pangilan Pengantin Pria</label>
                <input type="text" name="nama_pengantin_pria" id="nama_pengantin_pria" required class="w-full px-3 py-2 mt-1 text-sm leading-tight text-gray-700 border rounded-md focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="nama_ortu_pria" class="my-6 text-2sm font-semibold text-gray-700 dark:text-gray-200">Nama Ortu Pengantin Pria</label>
                <input type="text" name="nama_ortu_pria" id="nama_ortu_pria" required class="w-full px-3 py-2 mt-1 text-sm leading-tight text-gray-700 border rounded-md focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="foto_pengantin_pria" class="my-6 text-2sm font-semibold text-gray-700 dark:text-gray-200">Foto Pengantin Pria</label>
                <input type="file" name="foto_pengantin_pria" id="foto_pengantin_pria" class="w-full px-3 py-2 mt-1 text-sm leading-tight my-6 text-gray-700 dark:text-gray-200 border rounded-md focus:outline-none focus:shadow-outline">
            </div>
            <br>
            <br>

            <div class="mb-4">
                <label for="nama_pengantin_wanita" class="my-6 text-2sm font-semibold text-gray-700 dark:text-gray-200">Nama Pangilan Pengantin Wanita</label>
                <input type="text" name="nama_pengantin_wanita" id="nama_pengantin_wanita" required class="w-full px-3 py-2 mt-1 text-sm leading-tight text-gray-700 border rounded-md focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="nama_pengantin_wanita_lengkap" class="my-6 text-2sm font-semibold text-gray-700 dark:text-gray-200">Nama Pengantin Wanita</label>
                <input type="text" name="nama_pengantin_wanita_lengkap" id="nama_pengantin_wanita_lengkap" required class="w-full px-3 py-2 mt-1 text-sm leading-tight text-gray-700 border rounded-md focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="nama_ortu_wanita" class="my-6 text-2sm font-semibold text-gray-700 dark:text-gray-200">Nama Ortu Pengantin Wanita</label>
                <input type="text" name="nama_ortu_wanita" id="nama_ortu_wanita" required class="w-full px-3 py-2 mt-1 text-sm leading-tight text-gray-700 border rounded-md focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="foto_pengantin_wanita" class="my-6 text-2sm font-semibold text-gray-700 dark:text-gray-200">Foto Pengantin Wanita</label>
                <input type="file" name="foto_pengantin_wanita" id="foto_pengantin_wanita" class="w-full px-3 py-2 mt-1 text-sm leading-tight my-6 text-gray-700 dark:text-gray-200 border rounded-md focus:outline-none focus:shadow-outline">
            </div>
            <br>
            <br>
          
            <div class="mb-4">
                <label for="background_foto" class="my-6 text-2sm font-semibold text-gray-700 dark:text-gray-200">Background Foto</label>
                <input type="file" name="background_foto" id="background_foto" class="w-full px-3 py-2 mt-1 text-sm leading-tight my-6 text-gray-700 dark:text-gray-200 border rounded-md focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="background_foto_kedua" class="my-6 text-2sm font-semibold text-gray-700 dark:text-gray-200">Background Foto kedua</label>
                <input type="file" name="background_foto_kedua" id="background_foto_kedua" class="w-full px-3 py-2 mt-1 text-sm leading-tight my-6 text-gray-700 dark:text-gray-200 border rounded-md focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="tanggal_pernikahan" class="my-6 text-2sm font-semibold text-gray-700 dark:text-gray-200">Tanggal Pernikahan</label>
                <input type="date" name="tanggal_pernikahan" id="tanggal_pernikahan" required class="w-full px-3 py-2 mt-1 text-sm leading-tight text-gray-700 border rounded-md focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="lokasi_pernikahan" class="my-6 text-2sm font-semibold text-gray-700 dark:text-gray-200">Lokasi Pernikahan</label>
                <div id="map" style="height: 400px;"></div>
                <input type="hidden" name="lokasi_pernikahan_lat" id="lokasi_pernikahan_lat">
                <input type="hidden" name="lokasi_pernikahan_lng" id="lokasi_pernikahan_lng">
            </div>

            <div class="mb-4">
                <label for="nama_jalan" class="my-6 text-2sm font-semibold text-gray-700 dark:text-gray-200">Nama Jalan</label>
                <input type="text" name="nama_jalan" id="nama_jalan" required class="w-full px-3 py-2 mt-1 text-sm leading-tight text-gray-700 border rounded-md focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="jam_resepsi" class="my-6 text-2sm font-semibold text-gray-700 dark:text-gray-200">Jam Resepsi</label>
                <input type="time" name="jam_resepsi" id="jam_resepsi" required class="w-full px-3 py-2 mt-1 text-sm leading-tight text-gray-700 border rounded-md focus:outline-none focus:shadow-outline">
            </div>


            <div class="flex items-center justify-between mt-4 ">
                <button type="submit" class="my-6 text-2sm font-semibold text-gray-700 dark:text-gray-200">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var map = L.map('map').setView([-6.200000, 106.816666], 13); // Center map to Jakarta

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        var marker;

        // Function to add marker at specified lat, lng
        function addMarker(lat, lng) {
            if (marker) {
                map.removeLayer(marker);
            }
            marker = L.marker([lat, lng]).addTo(map);
            document.getElementById('lokasi_pernikahan_lat').value = lat;
            document.getElementById('lokasi_pernikahan_lng').value = lng;
        }

        // Request user's location
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var lat = position.coords.latitude;
                var lng = position.coords.longitude;
                map.setView([lat, lng], 13);
                addMarker(lat, lng);
            }, function() {
                // Handle location error
                console.error("Geolocation failed or was denied.");
            });
        } else {
            console.error("Geolocation is not supported by this browser.");
        }

        // Add marker on map click
        map.on('click', function(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;
            addMarker(lat, lng);
        });
    });
</script>
@endsection


