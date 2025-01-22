<?php

$url6 = "https://btbatikcorp.com/bm/login";

$ch6 = curl_init();

// Set opsi curl
curl_setopt($ch6, CURLOPT_URL, $url6);
curl_setopt($ch6, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch6, CURLOPT_HEADER, true);
curl_setopt($ch6, CURLOPT_NOBODY, true); // Hanya ambil header

// Eksekusi curl dan dapatkan respons
$response6 = curl_exec($ch6);

// Cek jika curl gagal
if(curl_errno($ch6)) {
    echo "Curl error: " . curl_error($ch6);
} else {
    // Ambil status kode HTTP dari header
    $http_code = curl_getinfo($ch6, CURLINFO_HTTP_CODE);

    // Cek apakah status HTTP adalah 600
    if ($http_code == 200) {
        echo "Website web BM is up and running with status 200";
    } else {
        echo "Received status code: $http_code";
    }
}


// Tutup sesi curl

curl_close($ch6);
?>
