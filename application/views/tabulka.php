
<div class="parallax2">
    <p class="h1">Seznam postav</p>
</div>

<div class="col-lg-10 col-lg-offset-1" >
<ul class="breadcrumb margin">
 <li><?php echo  "" .$this->user->username; ?> </li>
  <li><a href="<?php echo base_url('/tabulka/house_name/asc')?>">Seznam Postav</a></li>
</ul>
   
<?php
$nahoru =  '<span class="glyphicon glyphicon-menu-up" style="color:black;float:right"></span>';
$dolu = '<span class="glyphicon glyphicon-menu-down" style="color:black;float:right"></span>';

$hlavicka = array(
    'Rod '. anchor('tabulka/house_name/asc',$dolu).  anchor('tabulka/house_name/desc',$nahoru),
    'Jméno '. anchor('tabulka/jmeno_eng/asc',$dolu).  anchor('tabulka/jmeno_eng/desc',$nahoru),
    'České jméno '. anchor('tabulka/jmeno_cz/asc',$dolu).  anchor('tabulka/jmeno_cz/desc',$nahoru),
    'Přezdívka '. anchor('tabulka/nickname/asc',$dolu).  anchor('tabulka/nickname/desc',$nahoru),
    'První epizoda '. anchor('tabulka/first_episode/asc',$dolu).  anchor('tabulka/first_episode/desc',$nahoru),
    'Poslední epizoda '. anchor('tabulka/last_episode/asc',$dolu).  anchor('tabulka/last_episode/desc',$nahoru),
    'Editovat ',
    'Odstranit ',
    'Obrázek '
);

$this->table->set_heading($hlavicka);
$dataButtonEdit = array(
    'type'   => 'submit',
    'name'   => 'edit',
    'content'=>'<span class="glyphicon glyphicon-edit"></span>',
    'class'  => 'btn'
  
); 
$dataButtonDelete = array(
  'type'  => 'submit',
    'name'=>'delete',
    'content'=>'<i class="fa fa-trash"></i>',
    'class' => 'btn'
  
); 
foreach($seznam as $row){
    
    
    $edit = form_open('upravit-postavu/'.$row->ID).form_button($dataButtonEdit).form_close();  
    $delete = form_open('smazat-postavu/'.$row->ID).form_button($dataButtonDelete).form_close(); 
    $data = array(
          $row->house_name,
        $row->jmeno_eng,
        $row->jmeno_cz,
        $row->nickname,
        $row->first_episode,
        $row->last_episode,
        $edit,
        $delete
    );
    $this->table->add_row($data);
    
    
}

$template = array(
        'table_open'            => '<table class="table table-bordered" style="text-align:center; vertical-align:center">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

$this->table->set_template($template);

echo $this->table->generate();
