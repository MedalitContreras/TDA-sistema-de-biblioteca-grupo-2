<div class="container">

<h2 align="center" class="display-4"><P ><u>EJEMPLARES</u></P></h2>  
<br>
<div class="table-responsive">

<table class="table-bordered" id="ejemplar">
    <thead >
        <tr class="table-active">
        <th scope="col">ID</th>
            <th scope="col"><div class="text-center"> Titulo</div></th>
            <th scope="col"><div class=" text-center"> Editorial</div></th>
            <th scope="col"><div class=" text-center"> Paginas</div></th>
            <th scope="col"><div class=" text-center"> isbn</div></th>
            <th scope="col"><div class=" text-center"> Idioma</div></th>
            <th scope="col"><div class=" text-center"> Portada</div></th>
            <th  scope="col"><div class=" text-center"> Digital</div></th>
            <th  scope="col"><div class="text-center"> Resumen</div></th>
            <th  scope="col"><div class=" text-center"> Tipo</div></th>
            <th  scope="col"><div class=" text-center"> Categoria</div></th>
            <th  scope="col"><div class= "text-center"> Valoracion</div></th>
            <th  scope="col"><div class=" text-center"> Año</div></th>
            <th  scope="col"><div class=" text-center"> Préstamos</div></th>
            <th  scope="col"><div class=" text-center"> Opciones</div></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($registros as $reg): ?>
        <tr>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_id; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_titulo; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_editorial; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_paginas; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_isbn; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_idioma; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_portada; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_digital; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_resumen; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_tipo_id; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_cate_id; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_valoracion; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_anio; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_nprestamos; ?></div></th> 

            <td class=" text-center">  <a class="btn btn-success btn-xs" href="<?php echo base_url('usuario/edit');?>/<?php echo $reg->ejem_id;?>"><i class="far fa-edit"></i>Editar</a> 
            <a class="btn btn-danger btn-xs" href="<?php echo base_url('usuario/eliminar');?>/<?php echo $reg->ejem_id;?>"><i class="fas fa-trash-alt"></i>Eliminar</td>
                
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>  
</div>
