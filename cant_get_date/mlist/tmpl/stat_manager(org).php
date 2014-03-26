<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Статистика Менеджеры</title>
</head>

<body>
<?php
  extract($_POST);
  extract($_GET);
  /*error_reporting(E_ALL);
  ini_set('display_errors', '1');*/
  require_once('lib/system.php');
  $db = new db();

$dMih='Мыхно';
$dMak='Максимович';
$dMir='Мирошникова';
$dBok='Бокша';
$dDov='Довгаль';
$dDor='Дорофеева';
$dPan='Панкова';

$mnarray[1]="Мыхно:0660107471";
$mnarray[2]="Максимович:0952563814";
$mnarray[3]="Мирошникова:0506835361";
$mnarray[4]="Бокша:0667731333";
$mnarray[5]="Довгаль:0509136561";
$mnarray[6]="Дорофеева:0993410111";
$mnarray[7]="Панкова:0508501745";
$mnmonth[13];

for ($d=1;$d<13;$d++)
{
    if ($d<10)
    {
        $datearray[$d]="0$d.13";
    }
    else $datearray[$d]="$d.13";
}
for ($j=1;$j<8;$j++)
{

    for ($i=1;$i<13;$i++)
    {
        #echo "Дата:$datearray[$i] Менеджер:$mnarray[$j]<br />";
        $db->exec_query("SELECT * FROM m_list WHERE RIGHT( date_to, 5 ) =  '$datearray[$i]' AND  `manager` = '$mnarray[$j]'");
        while($row = $db->get_data()){
        $datadim["$j"]["$i"]=$datadim["$j"]["$i"]+1;
        #echo "{$datadim[$j][$i]}<br />";
        $all++;

        }
    }
}

?>
<center><table align="center" cellspacing="1" cellpadding="1" border="1">
  <tr>
    <td><b>Месяц</b></td>
    <td><b>Мыхно</b></td>
    <td><b>Максимович</b></td>
    <td><b>Мирошникова</b></td>
    <td><b>Бокша</b></td>
    <td><b>Довгаль</b></td>
    <td><b>Дорофеева</b></td>
	<td><b>Панкова</b></td>
<td><b>Итого</b></td>
  </tr>
  <tr>
    <td>Январь</td>
    <td><?php print "{$datadim[1][1]}" ?></td>
    <td><?php print "{$datadim[2][1]}" ?></td>
    <td><?php print "{$datadim[3][1]}" ?></td>
    <td><?php print "{$datadim[4][1]}" ?></td>
    <td><?php print "{$datadim[5][1]}" ?></td>
    <td><?php print "{$datadim[6][1]}" ?></td>
	<td><?php print "{$datadim[7][1]}" ?></td>
<td><b>
    <?php
    $mnallpm1=$datadim[1][1]+$datadim[2][1]+$datadim[3][1]+$datadim[4][1]+$datadim[5][1]+$datadim[6][1]+$datadim[7][1];
    print "$mnallpm1" ?>
    </b></td>
  </tr>
  <tr>
    <td>Февраль</td>
    <td><?php print "{$datadim[1][2]}" ?></td>
    <td><?php print "{$datadim[2][2]}" ?></td>
    <td><?php print "{$datadim[3][2]}" ?></td>
    <td><?php print "{$datadim[4][2]}" ?></td>
    <td><?php print "{$datadim[5][2]}" ?></td>
    <td><?php print "{$datadim[6][2]}" ?></td>
<td><?php print "{$datadim[7][2]}" ?></td>
<td><b>
    <?php
    $mnallpm2=$datadim[1][2]+$datadim[2][2]+$datadim[3][2]+$datadim[4][2]+$datadim[5][2]+$datadim[6][2]+$datadim[7][2];
    print "$mnallpm2" ?>
    </b></td>
  </tr>
  <tr>
    <td>Март</td>
    <td><?php print "{$datadim[1][3]}" ?></td>
    <td><?php print "{$datadim[2][3]}" ?></td>
    <td><?php print "{$datadim[3][3]}" ?></td>
    <td><?php print "{$datadim[4][3]}" ?></td>
    <td><?php print "{$datadim[5][3]}" ?></td>
    <td><?php print "{$datadim[6][3]}" ?></td>
<td><?php print "{$datadim[7][3]}" ?></td>
<td><b>
    <?php
    $mnallpm3=$datadim[1][3]+$datadim[2][3]+$datadim[3][3]+$datadim[4][3]+$datadim[5][3]+$datadim[6][3];
    print "$mnallpm3" ?>
    </b></td>
  </tr>
  <tr>
    <td>Апрель</td>
    <td><?php print "{$datadim[1][4]}" ?></td>
    <td><?php print "{$datadim[2][4]}" ?></td>
    <td><?php print "{$datadim[3][4]}" ?></td>
    <td><?php print "{$datadim[4][4]}" ?></td>
    <td><?php print "{$datadim[5][4]}" ?></td>
    <td><?php print "{$datadim[6][4]}" ?></td>
<td><?php print "{$datadim[7][4]}" ?></td>
<td><b>
    <?php
    $mnallpm4=$datadim[1][4]+$datadim[2][4]+$datadim[3][4]+$datadim[4][4]+$datadim[5][4]+$datadim[6][4];
    print "$mnallpm4" ?>
    </b></td>
  </tr>
  <tr>
    <td>Май</td>
    <td><?php print "{$datadim[1][5]}" ?></td>
    <td><?php print "{$datadim[2][5]}" ?></td>
    <td><?php print "{$datadim[3][5]}" ?></td>
    <td><?php print "{$datadim[4][5]}" ?></td>
    <td><?php print "{$datadim[5][5]}" ?></td>
    <td><?php print "{$datadim[6][5]}" ?></td>
<td><?php print "{$datadim[7][5]}" ?></td>
<td><b>
    <?php
    $mnallpm5=$datadim[1][5]+$datadim[2][5]+$datadim[3][5]+$datadim[4][5]+$datadim[5][5]+$datadim[6][5];
    print "$mnallpm5" ?>
    </b></td>
  </tr>
  <tr>
    <td>Июнь</td>
    <td><?php print "{$datadim[1][6]}" ?></td>
    <td><?php print "{$datadim[2][6]}" ?></td>
    <td><?php print "{$datadim[3][6]}" ?></td>
    <td><?php print "{$datadim[4][6]}" ?></td>
    <td><?php print "{$datadim[5][6]}" ?></td>
    <td><?php print "{$datadim[6][6]}" ?></td>
<td><?php print "{$datadim[7][6]}" ?></td>
<td><b>
    <?php
    $mnallpm6=$datadim[1][6]+$datadim[2][6]+$datadim[3][6]+$datadim[4][6]+$datadim[5][6]+$datadim[6][6];
    print "$mnallpm6" ?>
    </b></td>
  </tr>
  <tr>
    <td>Июль</td>
    <td><?php print "{$datadim[1][7]}" ?></td>
    <td><?php print "{$datadim[2][7]}" ?></td>
    <td><?php print "{$datadim[3][7]}" ?></td>
    <td><?php print "{$datadim[4][7]}" ?></td>
    <td><?php print "{$datadim[5][7]}" ?></td>
    <td><?php print "{$datadim[6][7]}" ?></td>
<td><?php print "{$datadim[7][7]}" ?></td>
<td><b>
    <?php
    $mnallpm7=$datadim[1][7]+$datadim[2][7]+$datadim[3][7]+$datadim[4][7]+$datadim[5][7]+$datadim[6][7]+$datadim[7][7];
    print "$mnallpm7" ?>
    </b></td>
  </tr>
  <tr>
    <td>Август</td>
    <td><?php print "{$datadim[1][8]}" ?></td>
    <td><?php print "{$datadim[2][8]}" ?></td>
    <td><?php print "{$datadim[3][8]}" ?></td>
    <td><?php print "{$datadim[4][8]}" ?></td>
    <td><?php print "{$datadim[5][8]}" ?></td>
    <td><?php print "{$datadim[6][8]}" ?></td>
<td><?php print "{$datadim[7][8]}" ?></td>
<td><b>
    <?php
    $mnallpm8=$datadim[1][8]+$datadim[2][8]+$datadim[3][8]+$datadim[4][8]+$datadim[5][8]+$datadim[6][8]+$datadim[7][8];
    print "$mnallpm8" ?>
    </b></td>
  </tr>
  <tr>
    <td>Сентябрь</td>
    <td><?php print "{$datadim[1][9]}" ?></td>
    <td><?php print "{$datadim[2][9]}" ?></td>
    <td><?php print "{$datadim[3][9]}" ?></td>
    <td><?php print "{$datadim[4][9]}" ?></td>
    <td><?php print "{$datadim[5][9]}" ?></td>
    <td><?php print "{$datadim[6][9]}" ?></td>
<td><?php print "{$datadim[7][9]}" ?></td>
<td><b>
    <?php
    $mnallpm9=$datadim[1][9]+$datadim[2][9]+$datadim[3][9]+$datadim[4][9]+$datadim[5][9]+$datadim[6][9]+$datadim[7][9];
    print "$mnallpm9" ?>
    </b></td>
  </tr>
  <tr>
    <td>Октябрь</td>
    <td><?php print "{$datadim[1][10]}" ?></td>
    <td><?php print "{$datadim[2][10]}" ?></td>
    <td><?php print "{$datadim[3][10]}" ?></td>
    <td><?php print "{$datadim[4][10]}" ?></td>
    <td><?php print "{$datadim[5][10]}" ?></td>
    <td><?php print "{$datadim[6][10]}" ?></td>
<td><?php print "{$datadim[7][10]}" ?></td>
<td><b>
    <?php
    $mnallpm10=$datadim[1][10]+$datadim[2][10]+$datadim[3][10]+$datadim[4][10]+$datadim[5][10]+$datadim[6][10]+$datadim[7][10];
    print "$mnallpm10" ?>
    </b></td>
  </tr>
  <tr>
    <td>Ноябрь</td>
    <td><?php print "{$datadim[1][11]}" ?></td>
    <td><?php print "{$datadim[2][11]}" ?></td>
    <td><?php print "{$datadim[3][11]}" ?></td>
    <td><?php print "{$datadim[4][11]}" ?></td>
    <td><?php print "{$datadim[5][11]}" ?></td>
    <td><?php print "{$datadim[6][11]}" ?></td>
<td><?php print "{$datadim[7][11]}" ?></td>
<td><b>
    <?php
    $mnallpm11=$datadim[1][11]+$datadim[2][11]+$datadim[3][11]+$datadim[4][11]+$datadim[5][11]+$datadim[6][11]+$datadim[7][11];
    print "$mnallpm11" ?>
    </b></td>
  </tr>
  <tr>
    <td>Декабрь</td>
    <td><?php print "{$datadim[1][12]}" ?></td>
    <td><?php print "{$datadim[2][12]}" ?></td>
    <td><?php print "{$datadim[3][12]}" ?></td>
    <td><?php print "{$datadim[4][12]}" ?></td>
    <td><?php print "{$datadim[5][12]}" ?></td>
    <td><?php print "{$datadim[6][12]}" ?></td>
<td><?php print "{$datadim[7][12]}" ?></td>
<td><b>
    <?php
    $mnallpm12=$datadim[1][12]+$datadim[2][12]+$datadim[3][12]+$datadim[4][12]+$datadim[5][12]+$datadim[6][12]+$datadim[7][12];
    print "$mnallpm12" ?>
    </b></td>
  </tr>
  <tr>
    <td><b>Итого за год</b></td>
    <td><b>
    <?php
    $mn1y=$datadim[1][1]+$datadim[1][2]+$datadim[1][3]+$datadim[1][4]+$datadim[1][5]+$datadim[1][6]+$datadim[1][7]+$datadim[1][8]+$datadim[1][9]+$datadim[1][10]+$datadim[1][11]+$datadim[1][12];
    print "$mn1y" ?>
    </b></td>
    <td><b>
    <?php
    $mn2y=$datadim[2][1]+$datadim[2][2]+$datadim[2][3]+$datadim[2][4]+$datadim[2][5]+$datadim[2][6]+$datadim[2][7]+$datadim[2][8]+$datadim[2][9]+$datadim[2][10]+$datadim[2][11]+$datadim[2][12];
    print "$mn2y" ?>
    </b></td>
    <td><b>
    <?php
    $mn3y=$datadim[3][1]+$datadim[3][2]+$datadim[3][3]+$datadim[3][4]+$datadim[3][5]+$datadim[3][6]+$datadim[3][7]+$datadim[3][8]+$datadim[3][9]+$datadim[3][10]+$datadim[3][11]+$datadim[3][12];
    print "$mn3y" ?>
    </b></td>
    <td><b>
    <?php
    $mn4y=$datadim[4][1]+$datadim[4][2]+$datadim[4][3]+$datadim[4][4]+$datadim[4][5]+$datadim[4][6]+$datadim[4][7]+$datadim[4][8]+$datadim[4][9]+$datadim[4][10]+$datadim[4][11]+$datadim[4][12];
    print "$mn4y" ?>
    </b></td>
    <td><b>
    <?php
    $mn5y=$datadim[5][1]+$datadim[5][2]+$datadim[5][3]+$datadim[5][4]+$datadim[5][5]+$datadim[5][6]+$datadim[5][7]+$datadim[5][8]+$datadim[5][9]+$datadim[5][10]+$datadim[5][11]+$datadim[5][12];
    print "$mn5y" ?>
    </b></td>
    <td><b>
    <?php
    $mn6y=$datadim[6][1]+$datadim[6][2]+$datadim[6][3]+$datadim[6][4]+$datadim[6][5]+$datadim[6][6]+$datadim[6][7]+$datadim[6][8]+$datadim[6][9]+$datadim[6][10]+$datadim[6][11]+$datadim[6][12];
    print "$mn6y" ?>
    </b></td>
    <td><b>
    <?php
    $mn2y=$datadim[7][1]+$datadim[7][2]+$datadim[7][3]+$datadim[7][4]+$datadim[7][5]+$datadim[7][6]+$datadim[7][7]+$datadim[7][8]+$datadim[7][9]+$datadim[7][10]+$datadim[7][11]+$datadim[7][12];
    print "$mn2y" ?>
	</b></td>
    <td><b><?php print "$all" ?></b></td>
  </tr>
</table></center>
</body>
</html>