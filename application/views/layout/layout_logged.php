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

<style>
   
    .parallax { 
  /* The image used */
  background-image: url('<?php echo base_url('assets/images/got3.jpg')?>');

}
 .parallax2 { 
  /* The image used */
  background-image: url('<?php echo base_url('assets/images/got4.jpg')?>');

}
 .parallax3 { 
  /* The image used */
  background-image: url('<?php echo base_url('assets/images/got2.jpg')?>');

}
 .parallax4 { 
  /* The image used */
  background-image: url('<?php echo base_url('assets/images/got3.jpg')?>');

}
.parallax3-btn { 
  /* The image used */
  background-image: url('<?php echo base_url('assets/images/got2.jpg')?>');

}
.parallax4-btn { 
  /* The image used */
  background-image: url('<?php echo base_url('assets/images/got3.jpg')?>');

}
</style>
  

</head>
<body>
    
    <div >
        <nav class="navbar navbar-fixed-top navbar-default" style="border: none " >
            <div class="container-fluid" >
                <div class="navbar-header" >
                    <a class="navbar-brand logo" href="<?php echo base_url('administrace/dashboard'); ?>"> <img width="300px" class="img-responsive" style="margin-top: -10px" src="<?php echo base_url('assets/images/got-logo.png')?>"></a>
                </div>
              
        <?php
            $this->load->view('layout/menu_logged');
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

        
        
        