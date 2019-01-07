<!DOCTYPE html>

<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<title><?php echo $title ?></title>
<link href=<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?> rel="stylesheet" type="text/css"/>
<link href=<?php echo base_url('assets/bootstrap/css/bootstrap-theme.min.css');?> rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
<link href=<?php echo base_url('assets/css/style.css');?> rel="stylesheet" type="text/css"/>
<script src='<?php echo base_url('assets/jquery/jquery-3.2.1.min.js');?>'></script>
<script src='<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>'></script>
<script src='<?php echo base_url('assets/bootstrap/js/js-tab.js');?>'></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>


<style>
   
    .parallax { 
  /* The image used */
  background-image: url(<?php echo base_url('assets/images/got.jpg')?>);

}
</style>
  

</head>
<body>
    
    <div >
        <nav class="navbar navbar-fixed-top navbar-default" style="border: none " >
            <div class="container-fluid" >
                <div class="navbar-header" >
                    <a class="navbar-brand logo" href="<?php echo base_url(); ?>"> <img width="500px" class="img-responsive" style="margin-top: -35px" src="<?php echo base_url('assets/images/got-logo.png')?>"></a>
                </div>
              
        <?php
            $this->load->view('layout/menu');
        ?>
             
                  </div>
 </nav>
    <article>
        
                <?php
            echo $content;
                ?>
                
        
        
 </article>
<script src='<?php echo base_url('resources/jquery/jquery.js');?>' type="text/javascript"></script>
<script src='<?php echo base_url('resources/boostrap/js/bootstrap.min.js');?>' type="text/javascript"></script>
</body>
</html>

        
        
        