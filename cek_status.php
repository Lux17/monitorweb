<?php
// URL yang ingin diperiksa
$url = "https://tour.thekeranjangbalicorp.com/tour_travel/login";


// Inisialisasi sesi curl
$ch = curl_init();

// Set opsi curl
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_NOBODY, true); // Hanya ambil header

// Eksekusi curl dan dapatkan respons
$response = curl_exec($ch);

// Cek jika curl gagal
if(curl_errno($ch)) {
    echo "Curl error: " . curl_error($ch);
} else {
    // Ambil status kode HTTP dari header
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Cek apakah status HTTP adalah 200
    if ($http_code == 200) {
        echo "Website tour travel is up and running with status 200";
    } else {
        echo "Received status code: $http_code";
    }
}


// Tutup sesi curl
curl_close($ch);

?>
