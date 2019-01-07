<div class="col-lg-10 col-lg-offset-1" >
    <ul class="breadcrumb margin" style="margin-top: 100px">
  <li>Home</li>
  <li><a href="<?php echo base_url('/register')?>">Registrovat se</a></li>
</ul>
</div>
<h1 class="reg" style="margin-top: 0px">Registrace</h1>
			 <?php
            $attributes = array(
             
                'class' => 'form-horizontal'
            );


            echo form_open('register-finish', $attributes);
            ?>


<div class="col-sm-8 col-sm-offset-2">
            <div class="form-group <?php echo $this->session->data['name']->status;?>">
                <label for="name" class="control-label">Jméno</label>
                <p class="text-warning"><?php echo $this->session->data['name']->message; ?> </p>
                
                    
                    <input data-toggle="tooltip" title="Povinná položka" type="text" class="form-control" name="name" id="name"  placeholder="Vlož křestní jméno" value="<?php echo $this->session->data['name']->value; ?>" />
             
              
            </div>

            <div class="form-group <?php echo $this->session->data['surname']->status;?>">
                <label for="surname" class="control-label">Příjmení </label>
                <p class="text-warning"><?php echo $this->session->data['surname']->message; ?> </p>
                                
                      
                        <input type="text" class="form-control" name="surname" id="name"  placeholder="Vlož příjmení" value="<?php echo $this->session->data['surname']->value; ?>"/>
                    
               
            </div>  

         
            <div class="form-group <?php echo $this->session->data['username']->status;?>">
                <label for="username" class=" control-label">Uživatelské jméno </label>
                <p class="text-warning"><?php echo $this->session->data['username']->message; ?> </p>
              
                   
                        <input type="text" class="form-control" name="username" id="username"  placeholder="Vlož uživatelské jméno" value="<?php echo $this->session->data['username']->value; ?>"/>
                    
              
            </div>

            <div class="form-group <?php echo $this->session->data['password']->status;?>">
                <label for="password" class=" control-label">Heslo</label>
                <p class="text-warning"><?php echo $this->session->data['password']->message; ?> </p>
               
                 
                        <input type="password" class="form-control" name="password" id="password"  placeholder="Vlož heslo" value="<?php echo $this->session->data['password']->value; ?>"/>
                   
                    <span id="helpBlockPassword" class="help-block">Heslo musí mít minimálně <?php echo $omezeni[0]; ?> a maximálně <?php echo $omezeni[1]; ?> znaků.</span>
                
            </div>

            <div class="form-group <?php echo $this->session->data['confirm']->status;?>">
                <label for="confirm" class="control-label">Potvrzení hesla</label>
                <p class="text-warning"><?php echo $this->session->data['confirm']->message; ?> </p>
              
                  
                        <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Heslo ještě jednou" value="<?php echo $this->session->data['confirm']->value; ?>"/>
                    
              
            </div>

            <div class="form-group ">
                <input class="btn btn-lg btn-primary btn-block" type="submit" id="register" value="Registrovat">	
            </div>
					<?php
echo form_close();
?>
				</div>
			</div>
		

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>