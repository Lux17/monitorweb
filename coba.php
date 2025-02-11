<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="2"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

</head>
<body>
    <center>
    <h1>Website Checker WEB TKB</h1>
    </center>
    <br>


<div class="container text-center mb-4">
  <div class="row">
    <div class="col">
    <div class="card">
        <div class="card-header">
        <h1>Tour Travel</h1>
        <p> <span id="time"></span></p>
        </div>
        <div class="card-body">
            <p>Memeriksa status HTTP dari <strong>https://tour.thekeranjangbalicorp.com/tour_travel/login</strong>...</p>
            <div id="status">Menunggu hasil...</div>
        </div>
        </div>
    </div>
    
    <div class="col">
    <div class="card">
        <div class="card-header">
        <h1>Tour Leader</h1>
        <p> <span id="time"></span></p>
        </div>
        <div class="card-body">
        <p>Memeriksa status HTTP dari <strong>https://tour.thekeranjangbalicorp.com/tour_leader/login</strong>...</p>
        <div id="stats">Menunggu hasil...</div>
        </div>
        </div>
    </div>
    
  </div>
</div>


<div class="container text-center mb-4">
  <div class="row">
  <div class="col">
  <div class="card">
        <div class="card-header">
        <h1>Keranjang POS</h1>
        <p> <span id="time"></span></p>
        </div>
        <div class="card-body">
        <p>Memeriksa status HTTP dari <strong>http://10.10.11.82/keranjang_pos/</strong>...</p>

        <div id="pos">Menunggu hasil...</div>
        </div>
        </div>
    </div>
    
    <div class="col">
    <div class="card">
        <div class="card-header">
        <h1>Purchasing</h1>
        <p> <span id="time"></span></p>
        </div>
        <div class="card-body">
        <p>Memeriksa status HTTP dari <strong>http://10.10.11.82/purchasing_new/</strong>...</p>

        <div id="purchasing">Menunggu hasil...</div>
        </div>
        </div>
    </div>
    </div>
  </div>
</div>


<div class="container text-center mb-4">
  <div class="row">
    <div class="col">
    
      <div class="card">
        <div class="card-header">
        <h1>Scanner Harga</h1>
        <p> <span id="time"></span></p>
        </div>
        <div class="card-body">
        <p>Memeriksa status HTTP dari <strong>http://10.10.11.82/pc/</strong>...</p>

        <div id="pc">Menunggu hasil...</div>
        </div>
        </div>

    </div>
    <div class="col">
        
        <div class="card">
        <div class="card-header">
        <h1>Building Maintenance</h1>
        <p> <span id="time"></span></p>
        </div>
        <div class="card-body">
        <p>Memeriksa status HTTP dari <strong>https://btbatikcorp.com/bm/login</strong>...</p>

        <div id="bm">Menunggu hasil...</div>
        </div>
        </div>
        


    </div>
  </div>
</div>


<div class="container text-center">
  <div class="row">
    <div class="col">

        <div class="card">
        <div class="card-header">
        <h1>Kasir Pie Bar</h1>
        <p> <span id="time"></span></p>
        </div>
        <div class="card-body">
        <p>Memeriksa status HTTP dari <strong>http://10.10.11.82/pie_bar/</strong>...</p>

        <div id="pie">Menunggu hasil...</div>
        </div>
        </div>
        
    </div>
    <div class="col">
        

    <div class="card">
        <div class="card-header">
        <h1>Absen Karyawan</h1>
        <p> <span id="time"></span></p>
        </div>
        <div class="card-body">
        <p>Memeriksa status HTTP dari <strong>http://192.168.23.23/apps/</strong>...</p>

        <div id="absen">Menunggu hasil...</div>
        </div>
        </div>
        

    </div>
  </div>
</div>




    <script>
        // Fungsi untuk memeriksa status website setiap 5 detik
        function checkStatus(){
            $.ajax({
                url: 'cek_status.php', // File PHP untuk memeriksa status
                method: 'GET',
                success: function(response) {
                    $('#status').html(response); // Menampilkan status di halaman
                },
                error: function() {
                    $('#status').html('Terjadi kesalahan dalam memeriksa status.');
                }
            });
        }

        // Panggil fungsi checkStatus setiap 5 detik
        setInterval(checkStatus, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
    </script>

<script>
        // Fungsi untuk memeriksa status website setiap 5 detik
        function checkStatus2() {
            $.ajax({
                url: 'cek_status2.php', // File PHP untuk memeriksa status
                method: 'GET',
                success: function(response2) {
                    $('#stats').html(response2); // Menampilkan status di halaman
                },
                error: function() {
                    $('#stats').html('Terjadi kesalahan dalam memeriksa status.');
                }
            });
        }

        // Panggil fungsi checkStatus setiap 5 detik
        setInterval(checkStatus2, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
    </script>

<script>
    // Fungsi untuk memeriksa status website setiap 5 detik
    function checkStatus3() {
            $.ajax({
                url: 'cek_status3.php', // File PHP untuk memeriksa status
                method: 'GET',
                success: function(response3) {
                    $('#pos').html(response3); // Menampilkan status di halaman
                },
                error: function() {
                    $('#pos').html('Terjadi kesalahan dalam memeriksa status.');
                }
            });
        }

        // Panggil fungsi checkStatus setiap 5 detik
        setInterval(checkStatus3, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
        </script>

<script>
    // Fungsi untuk memeriksa status website setiap 5 detik
    function checkStatus4() {
        $.ajax({
            url: 'cek_status4.php', // File PHP untuk memeriksa status
            method: 'GET',
            success: function(response4) {
                $('#purchasing').html(response4); // Menampilkan status di halaman
            },
            error: function() {
                $('#purchasing').html('Terjadi kesalahan dalam memeriksa status.');
            }
        });
    }

    // Panggil fungsi checkStatus setiap 5 detik
    setInterval(checkStatus4, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
</script>
<script>
    // Fungsi untuk memeriksa status website setiap 5 detik
    function checkStatus5() {
        $.ajax({
            url: 'cek_status5.php', // File PHP untuk memeriksa status
            method: 'GET',
            success: function(response5) {
                $('#pc').html(response5); // Menampilkan status di halaman
            },
            error: function() {
                $('#pc').html('Terjadi kesalahan dalam memeriksa status.');
            }
        });
    }

    // Panggil fungsi checkStatus setiap 5 detik
    setInterval(checkStatus5, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
</script>

<script>
    // Fungsi untuk memeriksa status website setiap 5 detik
    function checkStatus6() {
        $.ajax({
            url: 'cek_status6.php', // File PHP untuk memeriksa status
            method: 'GET',
            success: function(response6) {
                $('#bm').html(response6); // Menampilkan status di halaman
            },
            error: function() {
                $('#bm').html('Terjadi kesalahan dalam memeriksa status.');
            }
        });
    }

    // Panggil fungsi checkStatus setiap 5 detik
    setInterval(checkStatus6, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
</script>

<script>
    // Fungsi untuk memeriksa status website setiap 5 detik
    function checkStatus7() {
        $.ajax({
            url: 'cek_status7.php', // File PHP untuk memeriksa status
            method: 'GET',
            success: function(response7) {
                $('#pie').html(response7); // Menampilkan status di halaman
            },
            error: function() {
                $('#pie').html('Terjadi kesalahan dalam memeriksa status.');
            }
        });
    }

    // Panggil fungsi checkStatus setiap 5 detik
    setInterval(checkStatus7, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
</script>

<script>
    // Fungsi untuk memeriksa status website setiap 5 detik
    function checkStatus8() {
        $.ajax({
            url: 'cek_status8.php', // File PHP untuk memeriksa status
            method: 'GET',
            success: function(response8) {
                $('#absen').html(response8); // Menampilkan status di halaman
            },
            error: function() {
                $('#absen').html('Terjadi kesalahan dalam memeriksa status.');
            }
        });
    }

    // Panggil fungsi checkStatus setiap 5 detik
    setInterval(checkStatus8, 1000); // Menunggu 5 detik untuk pengecekan berikutnya
</script>


<script>
    function updateTime() {
        var now = new Date();
        var timeString = now.toLocaleTimeString();
        document.getElementById("time").innerText = timeString;
    }

    // Update waktu setiap detik
    setInterval(updateTime, 5000);
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


