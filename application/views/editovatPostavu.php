

<div class="parallax3">
    <p class="h1">Upravit postavu</p>
</div>

<div class="col-lg-10 col-lg-offset-1" >
<ul class="breadcrumb margin">
    <li><?php echo  "" .$this->user->username; ?> </li>
     <li><a href="<?php echo base_url('/tabulka/house_name/asc')?>">Seznam Postav</a></li>
    <li>Upravit postavu: <?php echo "". $stav ->jmeno_eng ." ". $stav ->house_name  ?> </li>
</ul>
</div>

<?php

$attributes = array(
        'class' => 'form-horizontal'
);
echo form_open('upravit-postavu-done/'.$id, $attributes);
?>

<!------- název stanice ------>
<div class="form-group">
    <label class="control-label col-sm-4" for="id">ID postavy</label>
    <div class="col-sm-5">
        <input name="id" type="text" class="form-control" id="id" value="<?php echo $stav ->ID  ?>" disabled>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-4" for="house_name">Rod</label>
    <div class="col-sm-5 ">
        <input name="house_name" type="text" class="form-control" id="house_name" value="<?php echo $stav ->house_name  ?>">
    </div>
</div>

<!------- zem. šířka ------>
<div class="form-group">
    <label class="control-label col-sm-4" for="jmeno_eng">Jméno</label>
    <div class="col-sm-5">
        <input name="jmeno_eng" type="text"  class="form-control" id="jmeno_eng"value="<?php echo $stav ->jmeno_eng  ?>">
    </div>
</div>

<!------- zem. délka ------>
<div class="form-group">
    <label class="control-label col-sm-4" for="nickname">Přezdívka</label>
    <div class="col-sm-5">
        <input name="nickname" type="text" class="form-control" id="nickname" value="<?php echo $stav ->nickname  ?>">
    </div>
</div>

<!------- nadmořská výška ------>
<div class="form-group">
        <label class="control-label col-sm-4" for="jmeno_cz">České jméno</label>
    <div class="col-sm-5">
        <input name="jmeno_cz" type="text" class="form-control" id="jmeno_cz" value="<?php echo $stav ->jmeno_cz  ?>">
    </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-4" for="first_episode">První epizoda</label>
    <div class="col-sm-5">
        <input name="first_episode" type="text" class="form-control" id="first_episode" value="<?php echo $stav ->first_episode  ?>">
    </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-4" for="last_episode">Poslední epizoda</label>
    <div class="col-sm-5">
        <input name="last_episode" type="text" class="form-control" id="last_episode" value="<?php echo $stav ->last_episode  ?>">
    </div>
</div>

   <div class="parallax3-btn">
<div class="form-group"> 
    <div class="col-sm-offset-3 col-sm-6">
      <button type="submit" class="btn-pridat">Upravit</button>
    </div>
  </div>

   </div>
<?php
echo form_close();
?>