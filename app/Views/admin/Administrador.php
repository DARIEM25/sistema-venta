<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trajes Chumbivilcas</title>
    <link rel="stylesheet" href="<?=base_url();?>public/Dashboard/vendors/typicons.font/font/typicons.css">
    <link rel="stylesheet" href="<?=base_url();?>public/Dashboard/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?=base_url();?>public/Dashboard/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="<?=base_url();?>public/Dashboard/images/favicon.png" />

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    </head>
    <body>
    
    <?=$this->include('admin/MenuArriba');?>
    <?=$this->include('admin/MenuLateral');?>
    <?=$this->renderSection('contenido');?>

    <script src="<?=base_url();?>public/Dashboard/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?=base_url();?>public/Dashboard/js/off-canvas.js"></script>
    <script src="<?=base_url();?>public/Dashboard/js/hoverable-collapse.js"></script>
    <script src="<?=base_url();?>public/Dashboard/js/template.js"></script>
    <script src="<?=base_url();?>public/Dashboard/js/settings.js"></script>
    <script src="<?=base_url();?>public/Dashboard/js/todolist.js"></script>
    <script src="<?=base_url();?>public/Dashboard/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="<?=base_url();?>public/Dashboard/vendors/chart.js/Chart.min.js"></script>
    <script src="<?=base_url();?>public/Dashboard/js/dashboard.js"></script>
    </body>
</html>