<h1>Usuarios List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Usuario codigo</th>
      <th>Usuario nombre</th>
      <th>Usuario apellido</th>
      <th>Foto</th>
      <th>Fechanacimiento</th>
      <th>Genero</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
      <td><a href="<?php echo url_for('usuario/show?id='.$usuario->getId()) ?>"><?php echo $usuario->getId() ?></a></td>
      <td><?php echo $usuario->getUsuarioCodigo() ?></td>
      <td><?php echo $usuario->getUsuarioNombre() ?></td>
      <td><?php echo $usuario->getUsuarioApellido() ?></td>
      <td><?php echo $usuario->getFoto() ?></td>
      <td><?php echo $usuario->getFechanacimiento() ?></td>
      <td><?php echo $usuario->getGenero() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('usuario/new') ?>">New</a>
