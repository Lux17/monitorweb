<?php

$url2 = "https://tour.thekeranjangbalicorp.com/tour_leader/login";

$ch2 = curl_init();

// Set opsi curl
curl_setopt($ch2, CURLOPT_URL, $url2);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_HEADER, true);
curl_setopt($ch2, CURLOPT_NOBODY, true); // Hanya ambil header

// Eksekusi curl dan dapatkan respons
$response2 = curl_exec($ch2);

// Cek jika curl gagal
if(curl_errno($ch2)) {
    echo "Curl error: " . curl_error($ch2);
} else {
    // Ambil status kode HTTP dari header
    $http_code2 = curl_getinfo($ch2, CURLINFO_HTTP_CODE);

    // Cek apakah status HTTP adalah 200
    if ($http_code2 == 200) {
        echo "Website tour leader is up and running with status 200";
    } else {
        echo "Received status code: $http_code2";
    }
}


// Tutup sesi curl

curl_close($ch2);
?>
