﻿<?php
include("blocks/db.php");// Соединяемся с БД
// Если переменная существует в массиве POST, то она
// присваивается простой переменной, 
if (isset($_POST['id']))   {$id=$_POST['id'];}

?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Обработчик</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>	
	<table width="694"  align="center" cellpadding="0" cellspacing="0" class="main_border">
			  <tbody>
			  <?php include ("blocks/header.php"); ?>
			  <tr bgcolor="#FFFFFF">
			  <td>
				<table width="690" cellpadding="0" cellspacing="0" >
				  <tbody>
					<tr >
					<?php include ("blocks/lefttd.php"); ?>        
					<td valign="top">
				 		<?php 

//	Проверяем нажата ли была радиокнопка
	 if (isset($id))
	{ 	
//Удаляем урок из базы данных
$result=mysqli_query($db, "DELETE FROM lessons WHERE id='$id'");						
												
											 
//	Выводим сообщение о результате удаления урока из БД
		if ($result==true)
		{
			echo "<p> Урок успешно удален</p>";
		}
		else {
			echo "<p> Урок не удален</p>";
		 }
	}
			else {
				echo "Урок не может быть удален, потому что не передан id, возможно не нажата радиокнопка.";
			}
	
						?>					 			 
				  </td>
				</tr>
				</tbody>
			  </table>
			  </td>
			  <?php include("blocks/footer.php"); ?>
			 </tbody>
	 </table>
</body>

</html>