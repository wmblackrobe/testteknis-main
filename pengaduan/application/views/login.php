<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan | Login</title>
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
        
            <h3>Welcome to Pengaduan</h3>

            <!-- Form Login -->
            <form class="m-t" role="form" method='post' action="<?php echo site_url('login/aksi_login');?>">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username" required="Username harus diisi">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="Password harus diisi">
                </div>
                <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                    </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            </form>
            <!-- End Form Login -->

             <!-- Notifikasi -->
             <?php if($this->session->flashdata('gagal')): ?>
                <div class="alert alert-warning">
                <strong>Gagal Login!</strong> <?php echo $this->session->flashdata('gagal'); ?>
                </div>
            <?php endif; ?>
            <?php if($this->session->flashdata('akses')): ?>
                <div class="alert alert-danger">
                <strong>Gagal Akses!</strong> <?php echo $this->session->flashdata('akses'); ?>
                </div>
            <?php endif; ?>
           
            <!-- End Notifikasi -->


            <!-- Footer Login -->
            <p class="m-t"> <small>Poppy Lestari &copy; 2022</small> </p>
            <!-- End footer Login -->

        </div>
    </div>

     <!-- Mainly scripts -->
     <script src="<?php echo base_url(); ?>assets/admin/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo/peity-demo.js"></script>


    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/dataTables/datatables.min.js"></script>

    


</body>
</html>
