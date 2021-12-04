<form enctype="multipart/form-data" method="POST">

    <input type="file" name="arquivo" id="arquivo">
    <input type="submit" value="Enviar">

</form>

<?php
// require_once('./core/includer.php');
// includeControllerBase();
// init();

session_start();

echo'<pre>';

var_dump($_POST);

echo '<br>';


var_dump($_FILES);

if (isset($_FILES["arquivo"]["tmp_name"])) {
    var_dump(file($_FILES["arquivo"]["tmp_name"]));
}
if ($_FILES["arquivo"]["type"] == 'image/png') {
    move_uploaded_file($_FILES["arquivo"]["tmp_name"] , './img/'.$_FILES["arquivo"]["name"]);
}
else {
    echo 'não jogou';
}

echo'</pre>';


