<?php

$url7 = "http://10.10.11.82/pie_bar/login";

$ch7 = curl_init();

// Set opsi curl
curl_setopt($ch7, CURLOPT_URL, $url7);
curl_setopt($ch7, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch7, CURLOPT_HEADER, true);
curl_setopt($ch7, CURLOPT_NOBODY, true); // Hanya ambil header

// Eksekusi curl dan dapatkan respons
$response7 = curl_exec($ch7);

// Cek jika curl gagal
if(curl_errno($ch7)) {
    echo "Curl error: " . curl_error($ch7);
} else {
    // Ambil status kode HTTP dari header
    $http_code = curl_getinfo($ch7, CURLINFO_HTTP_CODE);

    // Cek apakah status HTTP adalah 700
    if ($http_code == 200) {
        echo "Website web Pie Bar is up and running with status 200";
    } else {
        echo "Received status code: $http_code";
    }
}


// Tutup sesi curl

curl_close($ch7);
?>
