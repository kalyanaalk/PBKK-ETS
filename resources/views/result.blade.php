<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/result.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    @if (session('status'))
    <div class="alert alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <!-- <div class="title">
        <div class="top-header">
            <h5>Laundry Dar</h5>
            <p>Terima kasih telah melakukan pembayaran.<br>Silakan cetak nota dan bawa laundry anda ke kasir.</p>
        </div>
    </div> -->

        

        @foreach($results as $result)

        <div class="receipt">
            <div class="card-body">
                <p class="card-text" style="font-size: 14px">Nama: <?php echo $result['nama']; ?></p>
                <p class="card-text" style="font-size: 14px">Nomor telepon: <?php echo $result['notelp']; ?></p>
                <p class="card-text" style="font-size: 14px">Berat: <?php echo $result['berat']; ?></p>
                <p class="card-text" style="font-size: 14px">Layanan yang dipilih:
                    <?php
                    if ($result['layanan'] == 0) echo 'Cuci kilat';
                    else if ($result['layanan'] == 1) echo 'Cuci kering';
                    else if ($result['layanan'] == 2) echo 'Cuci basah';
                    else if ($result['layanan'] == 3) echo 'Cuci lipat';
                    else if ($result['layanan'] == 4) echo 'Cuci setrika';
                    else if ($result['layanan'] == 5) echo 'Setrika';
                    else if ($result['layanan'] == 6) echo 'Penghilangan noda';
                    ?></p>
                <p class="card-text" style="font-size: 14px">Bukti pembayaran: </p>
                <img class="img-fluid" style="display: block; width: 80%; margin: 0 auto;" src="{{ url('img').'/'.$result['bukti'] }}">
            </div>

            <div class="print">
                <button class="btn btn-dark"><a style="text-decoration: none; color: white;" href="/result/{{ $result->id }}/edit">Edit</a></button>
            </div>

            <div class="print">

            <form method="POST" action="/result/{{ $result->id }}" onsubmit="return confirm('Are you sure you want to delete this?');">
                @csrf 
                @method('DELETE')
                    <button type="submit" class="btn btn-dark"><a style="text-decoration: none; color: white;">Hapus</a></button>
            </form>
            </div>
            </div>
        @endforeach
        
    
    <style>
        body {
        font-family: 'Roboto', sans-serif;
        background-color: #c3d4e8;
    }

    .alert {
        border-radius: 0;
        text-align: center;
    }

    .top-header {
        margin: 20px 0;
        text-align: center;
    }

    .top-header h5 {
        font-size: 50px;
        font-weight: bold;
        color: #333;
    }

    .top-header p {
        font-size: 16px;
        color: #4c617b;
    }

    .title {
        padding: 20px 0;
    }

    .receipt {
        width: 400px;
        margin: 20px auto;
        padding: 20px;
        box-shadow: 0 0 10px rgba(33, 31, 43, 0.2);
        background-color: #d3e2f4;
        border-radius: 5px;
    }

    .card {
        width: 80%;
        margin: 20px auto;
        padding: 20px;
        box-shadow: 0 0 10px rgba(33, 31, 43, 0.2);
        background-color: #d3e2f4;
        border-radius: 5px;
    }

    .card-title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    .card-text {
        font-size: 20px;
        color: #333;
        margin-bottom: 10px;
    }

    .print {
        text-align: center;
        margin-top: 20px;
        padding-bottom: 30px;
    }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" `integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>