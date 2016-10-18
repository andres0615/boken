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
      <td><a href="<?php echo url_for('usuario/show?
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362
id='.$usuario->getId()) ?>"><?php echo $usuario->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362
Id() ?></a></td>
      <td><?php echo $usuario->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362
UsuarioCodigo() ?></td>
      <td><?php echo $usuario->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362
UsuarioNombre() ?></td>
      <td><?php echo $usuario->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362
UsuarioApellido() ?></td>
      <td><?php echo $usuario->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362
Foto() ?></td>
      <td><?php echo $usuario->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362
Fechanacimiento() ?></td>
      <td><?php echo $usuario->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/html/boken/symfony-1.4.20/symfony-1.4.20/lib/util/sfToolkit.class.php on line 362
Genero() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('usuario/new') ?>">New</a>
