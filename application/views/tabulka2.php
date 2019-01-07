
<div class="parallax">
    <p class="h1">Seznam postav</p>
</div>

<div class="col-lg-10 col-lg-offset-1" >
<ul class="breadcrumb margin">
  <li>Home</li>
  <li><a href="<?php echo base_url('/seznam-postav')?>">Seznam Postav</a></li>
</ul>
    <div style="text-align: center">
<?php


$hlavicka = array(
    'Rod',  'Jméno',  'České jméno', 'Přezdívka', 'První epizoda', 'Poslední epizoda'
);

$this->table->set_heading($hlavicka);

foreach($seznam as $row){
    $data = array(
          $row->house_name,
        $row->jmeno_eng,
      
        $row->jmeno_cz,
        $row->nickname,
        $row->first_episode,
        $row->last_episode
    );
    $this->table->add_row($data);
    
    
}

$template = array(
        'table_open'            => '<table  id="example"  class="display table table-bordered" style="text-align:center; vertical-align:center">',

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
