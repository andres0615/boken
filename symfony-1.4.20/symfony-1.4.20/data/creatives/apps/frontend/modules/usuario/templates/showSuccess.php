<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $usuario->getId() ?></td>
    </tr>
    <tr>
      <th>Usuario codigo:</th>
      <td><?php echo $usuario->getUsuarioCodigo() ?></td>
    </tr>
    <tr>
      <th>Usuario nombre:</th>
      <td><?php echo $usuario->getUsuarioNombre() ?></td>
    </tr>
    <tr>
      <th>Usuario apellido:</th>
      <td><?php echo $usuario->getUsuarioApellido() ?></td>
    </tr>
    <tr>
      <th>Foto:</th>
      <td><?php echo $usuario->getFoto() ?></td>
    </tr>
    <tr>
      <th>Fechanacimiento:</th>
      <td><?php echo $usuario->getFechanacimiento() ?></td>
    </tr>
    <tr>
      <th>Genero:</th>
      <td><?php echo $usuario->getGenero() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('usuario/edit?id='.$usuario->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('usuario/index') ?>">List</a>
