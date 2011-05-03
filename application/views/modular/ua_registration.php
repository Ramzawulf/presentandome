    <?=form_open();?>
    <table>
        <tr>
            <td>
                <label for="r_nm">Nombre(s)</label>
            </td>
            <td>
                <?=form_input(array(    'name'  =>  'r_nm',
                                        'id'    =>  'r_nm',));?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="r_ln">Apellidos</label>
            </td>
            <td>
                <?=form_input(array(    'name'  =>  'r_l_n',
                                        'id'    =>  'r_l_n',));?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="r_eml">Correo Electrónico</label>
            </td>
            <td>
                <?=form_input(array(    'name'  =>  'r_eml',
                                        'id'    =>  'r_eml',));?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="r_usr">Nombre de usuario</label>
            </td>
            <td>
                <?=form_input(array(    'name'  =>  'r_usr',
                                        'id'    =>  'r_usr',));?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="r_pwd">Contraseña</label>
            </td>
            <td>
                <?=form_password(array( 'name'  =>  'r_pwd',
                                        'id'    =>  'r_pwd',));?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="r_pwd_c">Confirma tu Contraseña</label>
            </td>
            <td>
                <?=form_password(array( 'name'  =>  'r_pwd_c',
                                        'id'    =>  'r_pwd_c',));?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?=form_submit("r_sub","Adelante");?>
            </td>
        </tr>
    </table>
    <?=form_close();?>
        


