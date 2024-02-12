<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>AdminLTE | Simple Tables</title>
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
    @if (session('status'))
    <div class="alert alert alert-success">
        {{ session('status') }}
    </div>
    @endif



    <!-- Main content -->
    <section class="content" style="margin: 40px 100px;">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Transaksi</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Nama</th>
                        <th>No telp</th>
                        <th>Berat</th>
                        <th>Layanan</th>
                        <th>Parfum</th>
                        <th>Bukti</th>
                    </tr>

                    @foreach($results as $result)
                    <tr>
                        <th style="width: 10px"><?php echo $result['id']; ?></th>
                        <td><?php echo $result['nama']; ?></td>
                        <td><?php echo $result['notelp']; ?></td>
                        <td><?php echo $result['berat']; ?></td>
                        <td><?php
                            if ($result['layanan'] == 0) echo 'Cuci kilat';
                            else if ($result['layanan'] == 1) echo 'Cuci kering';
                            else if ($result['layanan'] == 2) echo 'Cuci basah';
                            else if ($result['layanan'] == 3) echo 'Cuci lipat';
                            else if ($result['layanan'] == 4) echo 'Cuci setrika';
                            else if ($result['layanan'] == 5) echo 'Setrika';
                            else if ($result['layanan'] == 6) echo 'Penghilangan noda';
                            ?></p>
                        </td>
                        <td><?php echo $result['kondisi']; ?></td>
                        <td><img class="img-fluid" style="display: block; width: 80px; height: auto; margin: 0 auto;" src="{{ url('img').'/'.$result['bukti'] }}"></td>
                    </tr>
                    @endforeach
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.row -->

    </section><!-- /.content -->
    </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../js/AdminLTE/demo.js" type="text/javascript"></script>
</body>

</html>