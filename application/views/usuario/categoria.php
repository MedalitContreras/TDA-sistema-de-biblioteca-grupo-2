<div class=container>
<h2 align="center" class="display-4" class="text-info"><p><u>CATEGORÍA</u></p></h2>     
       
<table class="table-bordered">
    <thead>
        <tr class="table-active">
        <th scope="col">ID</th>
        <th scope="col"> Nombre del libro</th>
        <th>Resumen</th>
        <th>Categoria</th> 
        <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($registros as $reg): ?>
        <tr>
        <th><?php echo $reg->ejem_id; ?></th>
        <th><?php echo $reg->ejem_titulo; ?></th>
        <th><?php echo $reg->ejem_resumen; ?></th>
        <th><?php echo $reg->cate_nombre; ?></th>
            <td>               
                <form method="DELETE" action="<?php echo base_url('usuario/delete/'.$reg->cate_id);?>">
                 <a class="btn btn-success" href="<?php echo base_url('usuario/edit_cate/'.$reg->cate_id) ?>"> Editar</a>
                 <button class="btn btn-danger" type="submit"> Eliminar</button>
                </form>
            </td>    
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>