<?php
  extract($_POST);
  extract($_GET);
  /*error_reporting(E_ALL);
  ini_set('display_errors', '1');*/
  require_once('lib/system.php');
  $t = new Template('tmpl');
  $t->set('title','Тополёк >> Маршрутный лист');
  $t->set('site_name',"Тополёк");
  $t->set('bgcolor', '4b709');
  $t->set('pagename','Суммы выторгов');
  $db = new db();
  if (!$date_add) $date_add=date('d.m.y');
  if (!$date_to) $date_to=date('d.m.y', mktime()+86400);
  
if ($action=="add") {
$db->exec_query("INSERT INTO m_list VALUES ('', '', '', '', '$podr', '$to_firm', '$to_time', '$docs', '$address', '$to_face', '$todo', '$num_dec', '$doc_num', '$doc_pkg', '$doc_num1', '$doc_pkg1', '$doc_num2', '$doc_pkg2', '$place_num', '$manager', '$d_mon', '$sum', '$date_add', '$d_to', '$invnum')");
}

//if ($action=="addpts") {
//$db->exec_query("INSERT INTO m_list VALUES ('', '', '', '', 'Офис-Сервис', 'ПромТехСнаб', 'до 10.00', 'счет', 'ул. Данилевского, 17 3й под., кв. 32, код 247', 'Лариса Владимировна 714-23-77', 'поставить печати', '', '', '', '', '', '', '', 'счет', 'Дорофеева(0677312051)', '', '', '', '$d_to', '')");
//}

if ($action=="delete") {
#$db->exec_query("Delete from m_list where id=$delid");
}
  #$db->exec_query("SELECT DISTINCT date_to FROM m_list");
  //$db->exec_query("SELECT DISTINCT date_to FROM m_list WHERE RIGHT( date_to, 2 )=13");
  $db->exec_query("SELECT DISTINCT date_to FROM m_list WHERE RIGHT( date_to, 2 )=14");
  $i=0;
  $e=1;
  $print_arr.= "<br>";
  while($row = $db->get_data()) {
          $print_arr.= "<a target=new href=index.php?print=1&date_to=".$row[date_to].">".$row[date_to]."</a>&nbsp;&nbsp;&nbsp;";
  //$print_arr.=is_int($e/10);
  if (is_int($e/10)==1) {$print_arr.="<br>";}
  $e++;
  }



  //$content .= '';
  //echo date('d.m.y', mktime()+86400);
  if (!$order) {$order='id';}
  if ($desc!=1) {$de='DESC';}
  #if (!$orderd) {$orderd='id';}
  #if ($descd!=1) {$ded='DESC';}
  if ($action=='update'){
  $db->exec_query("UPDATE `m_list` SET  `driver` =  '$driver_d' WHERE  `m_list`.`id` = $id_d2 LIMIT 1");
  header('Location: '.$_SERVER['HTTP_REFERER']);

  }else{
  $db->exec_query("select * from m_list where date_to='$date_to' order by $order $de");
  #$db->exec_query("select * from m_list where date_to='$date_to' order by $orderd $ded");
  }
  
  if ($action=='search'){
        $search="%"."$to_firm"."%";
        $search_d="$month"."."."$year";
        echo ("$search_d");
        if ($search_d=='.'){
        $db->exec_query("select * from m_list where to_firm LIKE '$search' order by $order $de");
        }
        else{
        $db->exec_query("select * from m_list where to_firm LIKE '$search' and RIGHT( date_to, 5 )='$search_d' order by $order $de");
        }
        //("SELECT DISTINCT date_to FROM m_list WHERE RIGHT( date_to, 2 )=13");
  }

  $i=0;
  while($row = $db->get_data()) {
    $i++;
    $t->set('even_odd',($i%2) ? 'odd' : 'even');
    $t->set('driver',$row[driver]);
    $t->set('driver_doc',$row[driver_doc]);
    $t->set('driver_doc2',$row[driver_doc2]);
    $t->set('id',$i);
    $t->set('del_id', "<a href=index.php?action=delete&delid=".$row[id]."&print=$print&date_to=$date_to><img border=0 src=img/b_drop.png></a>");
    $t->set('edit_id', "<a href=index.php?action=edit&editid=".$row[id]."&print=$print&date_to=$date_to><img border=0 src=img/b_drop.png></a>");
    $t->set('podr',$row[podr]);
    $t->set('to_firm',$row[to_firm]);
    $t->set('to_time',$row[to_time]);
    $t->set('docs',$row[docs]);
    $t->set('address',$row[address]);
    $t->set('to_face',$row[to_face]);
    $t->set('todo',$row[todo]);
    $t->set('doc_num',$row[doc_num]);
    $t->set('doc_pkg',$row[doc_pkg]);
    $t->set('doc_num1',$row[doc_num1]);
    $t->set('doc_pkg1',$row[doc_pkg1]);
    $t->set('doc_num2',$row[doc_num2]);
    $t->set('doc_pkg2',$row[doc_pkg2]);
    $t->set('place_num',$row[place_num]);
    $t->set('manager',$row[manager]);
    $t->set('d_mon',$row[d_mon]);
    $t->set('sum',$row[sum]);
    $t->set('invnum',$row[invnum]);
    $t->set('datem',$row[date_to]);
    $content .= $t->fetch('m-list-item.tpl.php');
  }

  //print $print_arr;
  $t->set('print_arr',$print_arr); 
  if (!$print) $content1 = $t->fetch('select-formmlist.tpl.php');
              
//$content.="Ура";
if ($desc!=1){
$t->set('sortorder',"index.php?print=$print&order=podr&desc=1&date_to=$date_to");
}else{
$t->set('sortorder',"index.php?print=$print&order=podr&desc=&date_to=$date_to");
}
/*if ($descd!=1){
$t->set('sortorderd',"mlist.php?print=$print&orderd=driver&descd=1&date_to=$date_to");
}else{
$t->set('sortorderd',"mlist.php?print=$print&orderd=driver&descd=&date_to=$date_to");
}*/
// $t->set('content',$content);
// $content1 .= $t->fetch('mlist.tpl.php');  
$t->set('content',$content1);
echo $t->fetch('page.tpl.php');
  
?>
