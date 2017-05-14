<?php
session_start();

if (isset ($_POST['json-resume']) ){
    $resume=$_POST['json-resume'];
    echo $resume;
}
