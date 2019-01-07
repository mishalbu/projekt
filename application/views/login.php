<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<head>
    <link href=<?php echo base_url('assets/css/style-login.css');?> rel="stylesheet" type="text/css"/>

</head>
<body>
    
<div class="col-lg-10 col-lg-offset-1" >
    <ul class="breadcrumb margin" style="margin-top: 100px">
  <li>Home</li>
  <li><a href="<?php echo base_url('/admin/login')?>">Přihlásit se</a></li>
</ul>
</div>
    
    <div class="row" >
        <div class="col-sm-4 col-sm-offset-4 ">
            
          
            <div class="form-login">
           <h1 class="reg" style="margin-top: 0px">Přihlášení</h1>
            <p style="">   <?php echo $this->session->message ?>  </p>
            <?php
             echo form_open('login-finish');
             ?>
            <input name="name" type="text" id="userName" class="form-control input-sm chat-input" placeholder="username" />
            </br>
            <input name="password" type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
                <button type="submit"  class="btn btn-primary btn-md"> login <i class="fa fa-sign-in"></i></button>
            </span>
            </div>
            
<?php
echo form_close();
?>
            </div>
        
        </div>
    </div>
