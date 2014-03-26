<?php

  require_once('config.php');
  require_once('db.php');

//delete selected from database
$but_del= "<p align=\"center\"><input type=\"image\" src=\"img/delete.gif\" name=\"b1\" title=\"Delete Selected Records From Database\" alt=\"Delete Selected Records From Database\" align=\"middle\" border=\"0\">";                
//save selected into database
$but_save= "&nbsp;&nbsp;&nbsp;<input type=\"image\" src=\"img/save.gif\" name=\"b2\" title=\"Save Selected Into Database\" alt=\"Save Selected Into Database\" align=\"middle\" border=\"0\">";
//select all button
$but_sel= "&nbsp;&nbsp;&nbsp;<a href=\"javascript:void(0)\" onclick=\"check_checkbox('test');\" title=\"Select All\"><img src=\"img/selectall.gif\" alt=\"Select All\" align=\"middle\" name=\"Select All\" border=\"0\"/></a>";
//unselect all button
$but_unsel= "&nbsp;&nbsp;&nbsp;<a href=\"javascript:void(0)\" onclick=\"ucheck_checkbox('test');\" title=\"Release All\"><img src=\"img/rall.gif\" alt=\"Release All\" align=\"middle\" name=\"Release All\" border=\"0\"/></a>";
//print button		
$but_prn= "&nbsp;&nbsp;&nbsp;<a href=\"javascript:void(0)\" onclick=\"window.open('$url&print=1','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no');\" title=\"Print Version\"><img src=\"img/print.png\" alt=\"Print Version\" align=\"middle\" name=\"Print Version\" border=\"0\"/></a>";
//email button
$but_email= "&nbsp;&nbsp;&nbsp;<a href=\"javascript:void(0)\" onclick=\"window.open('$url&print=2','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no');\" title=\"Email Report\"><img src=\"img/mail.png\" alt=\"Email Report\" align=\"middle\" name=\"Email Report\" border=\"0\" /></a>";
//unique alerts button
$but_unique= "&nbsp;&nbsp;&nbsp;<a href='$url&un=1' title=\"Unique alerts\"><img src=\"img/unique.gif\" alt=\"Unique alerts\" align=\"middle\" name=\"Unique alerts\" border=\"0\" /></a>";      
//send to expert button
$but_emaile= "&nbsp;&nbsp;&nbsp;<a href=\"javascript:void(0)\" onclick=\"window.open('$url&print=3','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no');\" title=\"Email Report\"><img src=\"img/mail.png\" alt=\"Email Report\" align=\"middle\" name=\"Email Report\" border=\"0\" /></a></p>";


?>