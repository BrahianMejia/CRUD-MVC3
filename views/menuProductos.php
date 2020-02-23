<?php require_once('header.php'); ?>
    <h1>Menú Categorías</h1>
        <br>

        <form name="form1" method="post" action="./?accion=guardarProducto">
            <p>Categoria: 
                <select name="selcategoria">
                    <option value="">Seleccione...</option>

                   <?php foreach($consultaCategorias as $datos):?>
                        <option value="<?= $datos['id']?>"><?= $datos['nombre']?></option>
                   <?php endforeach;?>
                </select>
            </p>
            <p>Nombre producto: <input type="text" name="txtnombre"></p>
            <p>Precio: <input type="text" name="txtprecio"></p>
            <p><input type="submit" name="btnguardarProducto" value="Guardar Producto"></p>
        </form>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoría</th>
                    <th>Nombre Producto</th>
                    <th>Precio</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($consultarProductos as $dato):?>
                    <tr>
                        <td><?= $dato['id']?></td>
                        <td><?= $dato['categoria']?></td>
                        <td><?= $dato['nombre']?></td>
                        <td><?= $dato['precio']?></td>
                        <td><a href="./?accion=modificarProducto&id=<?= $dato['id']?>">Modificar</a></td>
                        <td><a href="./?accion=eliminarProducto&id=<?= $dato['id']?>">Modificar</a></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <br>
        <a href="./">Volver</a>
<?php require_once('footer.php') ?>