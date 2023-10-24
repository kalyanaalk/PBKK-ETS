<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>

    <div class="box">
        <div class="container">

            <div class="top-header">
                <h5>Laundry Dar</h5>
                <p>Cepat bersih dan wangi</p>
            </div>

            <form action="/form" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" placeholder="...">
                    @error('nama')
                    <div class="alert alert-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" class="form-control" name="notelp" placeholder="...">
                    @error('notelp')
                    <div class="alert alert-danger"> {{ $message }} </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Berat laundry (minimal 2.5 kg, maksimal 99.99 kg)</label>
                    <input class="form-control" type="text" name="berat" placeholder="...">
                    @error('berat')
                    <div class="alert alert-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="layanan">Layanan</label>
                    <div class="select-wrapper">
                        <select id="layanan" name="layanan" class="form-control">
                            <option selected value="0">Cuci kilat (Rp9000/kg)</option>
                            <option value="1">Cuci basah (Rp3000/kg)</option>
                            <option value="2">Cuci kering (Rp4000/kg)</option>
                            <option value="3">Cuci lipat (Rp5000/kg)</option>
                            <option value="4">Cuci setrika (Rp6000/kg)</option>
                            <option value="5">Setrika (Rp4000/kg)</option>
                            <option value="6">Penghilangan noda (Rp15000/kg)</option>
                        </select>
                        <div class="select-icon"></div>
                    </div>
                    @error('layanan')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Bukti Pembayaran (transfer ke ovo/gopay/dana 089371623991)</label>
                    <input class="form-control" type="file" name="bukti">
                    @error('bukti')
                    <div class="alert alert-danger"> {{ $message }} </div>
                    @enderror
                </div>

        </div>
    </div>

    <div class="submit">
        <button type="submit" class="btn btn-dark">Submit</button>
    </div>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #c3d4e8;
        }

        .container {
            background-color: #d3e2f4;
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(33, 31, 43, 0.2);
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
            font-size: 20px;
            color: #4c617b;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .form-control {
            width: 100%;
            padding: 15px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .select-wrapper {
            position: relative;
        }

        .select-icon {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 40px; /* Adjust the width as needed */
            background: #fff; /* Background color for the icon container */
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: none; /* Allows clicking through the icon */
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .select-icon::before {
            content: '\25BC'; /* Unicode arrow-down character */
            font-size: 16px; /* Adjust the size as needed */
        }

        .submit {
            text-align: center;
            padding-bottom: 30px;
        }

        .alert-danger {
            background-color: #9d2323;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            margin-top: 5px;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" `integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>