<?php
wp_enqueue_script( 'ebck_functions_dashboard', plugin_dir_url( __FILE__ ) . 'js/functions.js', array ( 'jquery' ), 1.1, true);
?>

<div>Efectos</div>
<select name="" id="efectos">
<option value="estrellas">Estrellas</option>
<option value="burbujas">Burbujas</option>
<option value="explosion">Explosión</option>
</select>
<button id="btn_myplugin" class="button button-primary">Guardar</button>