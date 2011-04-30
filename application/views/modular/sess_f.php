<table>
    <thead></thead>
    <tbody>
        <?=form_open('');?>
        <tr> <td><label for="l_unm">Nombre de Usuario</label></td>          <td><label for="l_pwd">Contraseña</label></td>                  <td></td> </tr>
        <tr> <td><?=form_input(array('name'=>'l_unm','id'=>'l_unm'));?></td><td><?=form_input(array('name'=>'l_pwd','id'=>'l_pwd'));?></td> <td><?=  form_submit(array('value'=>'Entrar'));?></td> </tr>
        <tr> <td><?=form_checkbox(array('name'=>'l_rsn', 'id'=>'l_rsn','checked'=>'TRUE'));?><label for="l_rsn">Mantener mi sesión</label></td><td colspan="2">¿No recuerdas tu contraseña?</td></tr>
        <?=form_close(); ?>
    </tbody>
</table>