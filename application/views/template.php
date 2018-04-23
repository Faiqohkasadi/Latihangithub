<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/dataTables.bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/js/vendor/popper.min.js"></script>
        <script src="<?= base_url() ?>assets/dist/js/bootstrap.min.js"></script>
        <title><?= $title ?></title>

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <!-- <link href="<?= base_url() ?>asset/css/starter-template.css" rel="stylesheet">-->
    </head>

    <body>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">API PKL</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
              <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
                <li class="<?= $this->uri->segment(1)=='kecamatan'?'active':'' ?>"><a href="<?= site_url('kecamatan') ?>">Kecamatan</a></li>
                <li  class="<?= $this->uri->segment(1)=='kelurahan'?'active':'' ?>"><a href="<?= site_url('kelurahan') ?>">Kelurahan</a></li>
                <li  class="<?= $this->uri->segment(1)=='sekolah'?'active':'' ?>"><a href="<?= site_url('sekolah') ?>">Sekolah</a></li>
                
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <div role="main" class="container">
            <br>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <?=$card_header?>
                        </div>
                        <div class="card-body">
                            <?=$card_body?>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3>  <?=$table_title?></h3>
                        </div>
                        <div class="card-body">
                            <?= $content ?>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.container -->
        <script>
            // $('#myTable').DataTable();
        </script>
        </body>
    </html>


