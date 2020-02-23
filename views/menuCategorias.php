<?php require_once('header.php'); ?>
    <h1>Menú Categorías</h1>
        <br>

        <form name="form1" method="post" action="./?accion=guardarCategoria">
            <p>Nombre: <input type="text" name="txtnombre"></p>
            <p><input type="submit" name="btnguardarCategoria" value="Guardar Categoría"></p>
        </form>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Modificar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($consulta as $dato):?>
                    <tr>
                        <td><?= $dato['id']?></td>
                        <td><?= $dato['nombre']?></td>
                        <td><a href="./?accion=modificarCategoria&id=<?= $dato['id']?>">Modificar</a></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <br>
        <a href="./">Volver</a>
<?php require_once('footer.php') ?>