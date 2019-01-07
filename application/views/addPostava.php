
 <div class="parallax4">
    <p class="h1">Přidat postavu</p>
</div>
<div class="col-lg-10 col-lg-offset-1" >
<ul class="breadcrumb margin">
    <li><?php echo  "" .$this->user->username; ?> </li>
    
    <li><a href="<?php echo base_url('/addPostavu')?>">Přidat postavu</a></li>
</ul>
</div>

<?php




$attributes = array(
        'class' => 'form-horizontal'
);
echo form_open('add-character-done', $attributes);
?>
<!------- název stanice ------>
<div class="form-group">
    <label class="control-label col-sm-4" for="house_name">Rod</label>
    <div class="col-sm-5 ">
        <input name="house_name" type="text" class="form-control" id="house_name" placeholder="Název rodu">
    </div>
</div>

<!------- zem. šířka ------>
<div class="form-group">
    <label class="control-label col-sm-4" for="jmeno_eng">Jméno</label>
    <div class="col-sm-5">
        <input name="jmeno_eng" type="text"  class="form-control" id="jmeno_eng" placeholder="Jméno">
    </div>
</div>

<!------- zem. délka ------>
<div class="form-group">
    <label class="control-label col-sm-4" for="nickname">Přezdívka</label>
    <div class="col-sm-5">
        <input name="nickname" type="text" class="form-control" id="nickname" placeholder="">
    </div>
</div>

<!------- nadmořská výška ------>
<div class="form-group">
        <label class="control-label col-sm-4" for="jmeno_cz">České jméno</label>
    <div class="col-sm-5">
        <input name="jmeno_cz" type="text" class="form-control" id="jmeno_cz" placeholder="">
    </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-4" for="first_episode">První epizoda</label>
    <div class="col-sm-5">
        <input name="first_episode" type="text" class="form-control" id="first_episode" placeholder="Epizoda, ve které se postava objevila poprvé">
    </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-4" for="last_episode">Poslední epizoda</label>
    <div class="col-sm-5">
        <input name="last_episode" type="text" class="form-control" id="last_episode" placeholder="Epizoda, ve které postavu zabili">
    </div>
</div>

   <div class="parallax4-btn">
<div class="form-group"> 
    <div class="col-sm-offset-3 col-sm-6">
      <button type="submit" class="btn-pridat">Přidat</button>
    </div>
  </div>

   </div>
<?php
echo form_close();
?>
