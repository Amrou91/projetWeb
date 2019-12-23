<?php
try
{
    $db=new PDO('mysql:host=localhost;dbname=projetWeb', 'root', 'root');
}
catch(PDOException $e)
{
    echo 'Error', $e->GetMessage();
}
?>