<?php
$code=$_POST['code'];
$nom=$_POST['nom'];
$coef=$_POST['coef'];
$semestre=$_POST['semestre'];
$prof=$_POST['prof'];

include('DAO.php');
$dao=new DAO();
if($dao->AddModule($code,$nom,$coef,$semestre,$prof)) 
{
    header("location:../liste.php?type=module&res=success");
}
else
{
    header("location:../liste.php?type=module&res=error");
}
?>