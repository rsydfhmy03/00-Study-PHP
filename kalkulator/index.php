<form method="post">
<input type="text" name="bilangan1"> &nbsp;
<select name="operasi">
  <option value="tambah">+</option>
  <option value="kali">x</option>
  <option value="kurang">-</option>
  <option value="bagi">/</option>
</select> &nbsp;
<input type="text" name="bilangan2"> &nbsp;
<label>=</label> &nbsp;
<input type="submit" name="submit" value="Hitung">
</form>

<?php
include "kalkulator.php";
 
$kalkulator = new Kalkulator;
 
 if(isset($_POST['submit'])){
	$kalkulator->setOperasi($_POST['bilangan1'],$_POST['bilangan2'], $_POST['operasi']);
	echo $kalkulator->getOperasi();
 }
 ?>