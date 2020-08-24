<?php include'v_header.php' ?>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>E-library</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/usn.png' ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/bootstrap.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/style.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/animate.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/icomoon.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/flexslider.css' ?>">
<script type="text/javascript" src="<?php echo base_url() . 'theme/js/jquery.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'theme/js/bootstrap.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/jquery.waypoints.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>

<div class="container">
    <div class="jumbotron text-center">
        <div class="col-sm-15 mx-auto">
            <h1>Selamat datang!</h1>
            <p>Ini merupakan website <b>Elektronik Library</b> Fakultas Teknologi Informasi <br> Universitas Sembilanbelas November Kolaka.</p> </br>
            <p>Anda telah login sebagai <b><?php echo $this->session->userdata('username'); ?></b> [admin].
            </p>
        </div>
    </div>

    <div class="album py-5 bg-light">
<!--        <form>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category" id="category" required>
                    <?php
//                    $no = 0;
//                    foreach ($kat->result_array() as $i) :
//                        $no++;
//                        $kategori_id = $i['kategori_id'];
//                        $kategori_nama = $i['kategori_nama'];
                        ?>
                        <option value="<?php //echo $kategori_id; ?>"><?php //echo $kategori_nama; ?></option>
                    <?php //endforeach; ?>
                </select>
            </div>

        </form>-->
        <div class="container">
            <div class="row">
                <?php
                foreach ($data->result_array() as $j) :
                    $post_id = $j['tulisan_id'];
                    $post_judul = $j['tulisan_judul'];
                    $post_isi = $j['tulisan_isi'];
                    $post_author = $j['tulisan_author'];
                    $post_image = $j['tulisan_gambar'];
                    $post_tglpost = $j['tanggal'];
                    $post_slug = $j['tulisan_slug'];
                    ?>


                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="thumbnail">
                                <img src="<?php echo base_url() . 'assets/images/' . $post_image; ?>" alt="" class="img-responsive">
                                <div class="card-body">
                                    <p><b> <center> Judul : <?php echo $post_judul ?></center></b></p>  
                                    <p><?php echo $post_isi ?></em></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="<?php echo $post_slug; ?>" class="btn btn-primary" role="button">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
            <!--               <nav aria-label="Page navigation">
                               
                           </nav>-->
        </div>
    </div>
</div>
</main>
<br/>
<div class="clearfix"></div>
<?php include'v_footer.php' ?>
