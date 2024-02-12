<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>AdminLTE | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
</head>

<body class="skin-blue">
    <!-- header logo: style can be found in header.less -->
    <header class="header" style="margin: 40px 80px">

        <!-- Main content -->
        <section class="content">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Laundry Hemat</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="/form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" name="nama" placeholder="...">
                            @error('nama')
                            <div class="alert alert-danger"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>No telepon</label>
                            <input type="text" class="form-control" name="notelp" placeholder="...">
                            @error('notelp')
                            <div class="alert alert-danger"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Berat</label>
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
                            <label>Parfum</label>
                            <input class="form-control" name="kondisi" placeholder="...">
                            @error('kondisi')
                            <div class="alert alert-danger"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Bukti Pembayaran (transfer ke ovo/gopay/dana 089371623991)</label>
                            <input class="form-control" type="file" name="bukti">
                            @error('bukti')
                            <div class="alert alert-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div><!-- /.box -->
        </section><!-- /.content -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../js/AdminLTE/demo.js" type="text/javascript"></script>
</body>

</html>