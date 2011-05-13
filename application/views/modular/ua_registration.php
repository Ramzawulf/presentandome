    <?=form_open('user/registration',array('id'=>'reg_form'));?>
    <table>
        <tr>
            <td>
                <label for="r_nm">Nombre(s)</label>
            </td>
            <td>
                <?=form_input(array(    'name'  =>  'r_nm',
                                        'id'    =>  'r_nm',
                                        'class' =>  'required'));?>

            </td>
        </tr>
        <tr>
            <td>
                <label for="r_ln">Apellidos</label>
            </td>
            <td>
                <?=form_input(array(    'name'  =>  'r_l_n',
                                        'id'    =>  'r_l_n',
                                        'class' =>  'required'));?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="r_eml">Correo Electrónico</label>
            </td>
            <td>
                <?=form_input(array(    'name'  =>  'r_eml',
                                        'id'    =>  'r_eml',
                                        'class' =>  'required email'));?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="r_usr">Nombre de usuario</label>
            </td>
            <td>
                <?=form_input(array(    'name'  =>  'r_usr',
                                        'id'    =>  'r_usr',
                                        'class' =>  'required'));?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="r_pwd">Contraseña</label>
            </td>
            <td>
                <?=form_password(array( 'name'  =>  'r_pwd',
                                        'id'    =>  'r_pwd',
                                        'class' =>  'required'));?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Adelante" class="button" id="reg_submit" />
                <span id="err_mess"></span>
            </td>
        </tr>
    </table>
    <?=form_close();?>
        


