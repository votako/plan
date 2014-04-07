<?php
setcookie('OK_AUTH',$_SERVER['REQUEST_TIME'],time()+60);
  require_once('config.php');
  require_once('db.php');

function delcheck($check) {
$db = new db();
$db->exec_query("DELETE FROM ok_check_list WHERE id='$check';");
}

function deleteselected($check) {
$db = new db();
$db->exec_query("DELETE FROM event WHERE cid='$check';");
}



function crcheck($check) {
$db = new db();
$db->exec_query("INSERT INTO ok_check_list values ('$check', '1');");
}

function getchecked($check) {
$db = new db();
$db->exec_query("SELECT * FROM ok_check_list WHERE id=$check;");
        while($row = $db->get_data()) {
        $checked=$row['check_id'];
        }
        
        if ($checked==1) {return 'checked';}


}



  
function getsignature($sig) {           
	$db = new db();        
	$db->exec_query("SELECT * from signature where sig_id='$sig';");
        while($row = $db->get_data()) {
        $sig_name=$row['sig_name'];
        }
        return $sig_name;
   }

function get_from_signature($sig_name) {           
	$db = new db();        
	$db->exec_query("SELECT * from signature where sig_name='$sig_name';");
        while($row = $db->get_data()) {
        $sig_id=$row['sig_id'];
        }
        return $sig_id;
   }

  
function getlogin($userid) {           
	$db = new db();        
	$db->exec_query("SELECT * from ok_users where id='$userid';");
        while($row = $db->get_data()) {
        $loginname=$row[login];
        }
	 if (!$loginname) {$loginname="System";}	
        return $loginname;
   }

   // for log user action
  
   function logtxt($text) {
                  
	$db = new db();        
	$date=date("d M Y, H:i:s");
	$ip=getenv("REMOTE_ADDR");
	$host = gethostbyaddr($ip);
        $text = "User&nbsp;".$_SESSION['uid']."-".getlogin($_SESSION['uid'])."&nbsp;".$text;
	$db->exec_query("Insert into log VALUES ('', NOW(), '$host', '$text');");

   }

   function saveprdata($uid,$prfield,$pf,$newf){
        $db = new db();   
        $db->exec_query("SELECT * FROM ok_profiles WHERE user_id='$uid' and field_id=$prfield");
        while($row = $db->get_data()) {
        $tfield = $row['data'];
        }
        if ($tfield!=$newf) {$pdata= "<br> $pf from $tfield to $newf";}
        return $pdata;
   }
    function saveprlogin($uid,$login){
            $db = new db();
        $db->exec_query("SELECT * FROM ok_users WHERE id='$uid'");
        while($row = $db->get_data()) {
        $logino = $row['login'];
        }
        if ($logino!=$login){
        $db->exec_query("update ok_users set login='$login' where id='$uid'");
        $plogin="<br> login from $logino to $login";
        }
        return $plogin;
   }

       function savepramail($uid,$amail){
            $db = new db();
        $db->exec_query("SELECT * FROM ok_users WHERE id='$uid'");
        while($row = $db->get_data()) {
        $amailo = $row['amail'];
        }
        if ($amailo!=$amail){
        $db->exec_query("update ok_users set amail='$amail' where id='$uid'");
        $pamail="<br> Auto Email from $amailo to $amail";
        }
        return $pamail;
   }


  // is required function allowed for user ?
  function is_allowed($uid,$function) {
    $allowed = 0;
    $function_id = 0;

    $db = new db();

    // find the function id by function name
    $db->exec_query("select id from ok_functions where name='$function'");

    if($db->num_rows == 1) {

    // if function name found get function id

      $row = $db->get_data();
      $function_id = $row[id];
    } else  {

    // if function name unknown functon is disabled

      return $allowed;
    }



    // find the function in personal access list
    $db->exec_query('select * from ok_personal_acl where user_id=' . $uid . ' and func_id=' .$function_id);

    if($db->num_rows == 1) {

    // if function found get set alowed status and return to main program

      $row = $db->get_data();
      $allowed = $row[is_allowed];
      return $allowed;
    }
    $db->exec_query('select * from ok_acl a left join ok_user_roles r on r.role_id=a.role_id where a.func_id=' . $function_id . ' and r.user_id='. $uid);
    if($db->num_rows > 0) {
      $allowed = 1;
    }
    return $allowed;
  }

  function login($user, $pass) {
    $user = str_replace("'","`",$user);
    $pass = str_replace("'","`",$pass);
    $db = new db();
    $db->exec_query("select * from ok_users where login='$user' and password=password('$pass') and active=1");
    $uid = 0;
    if($db->num_rows < 1) {
      set_error('Access Denied');
    } else {
      $row = $db->get_data();
      $uid = $row[id];
    }
    return $uid;
  }
  
  function check_for_member() {
    if(!$_SESSION['uid']) {
      require_once('lib/system.php');

      $t = new Template('tmpl');
      $t->set('title','Secoore Networks');
      $t->set('site_name',$site_name);
      $t->set('content',$t->fetch('auth-required.tpl.php'));
      echo $t->fetch('page.tpl.php');
      exit();
     }
     return True;
  }

  function get_params() {
    return split('/',$_SERVER["PATH_INFO"]);
  }

  function get_param_pairs() {
    $args = split('/',$_SERVER["PATH_INFO"]);
    $pairs = array();
    for($i=1; $i<count($args); $i++) {
      $pairs[$args[$i]] = $args[$i+1];
      $i++;
    }
    return $pairs;
  }

  function set_error($str) {
    $err_str = $str;
  }

  function get_error() {
    return $err_str;
  }

  function clean_error() {
    $err_str = '';
  }

  function get_count_today_alerts() {
          $db = new db();
  $today=date("Y-m-d");
    $db->exec_query("select count(cid) from event where left(timestamp,10)='$today'");
  while($row = $db->get_data()) {
  $countt=$row['count(cid)'];
  }
  return $countt;
  }


  function get_count_total_alerts(){
          $db = new db();
    $db->exec_query("select count(cid) from event;");
  while($row = $db->get_data()) {
  $countt=$row['count(cid)'];
  }
  return $countt;
  }


  function get_countu_today_alerts(){
          $db = new db();
          $today=date("Y-m-d");
  $db->exec_query("SELECT count(DISTINCT (signature)) as cnt FROM event WHERE left(timestamp,10)='$today'");
  while($row = $db->get_data()) {
  $countut=$row['cnt'];
 
  }
  return $countut;
  }
  
  function roleid_to_roletext($rid){
        $db = new db();
        $db->exec_query("SELECT * from ok_roles where id='$rid'");
        while($row = $db->get_data()) {
        $rname=$row['name'];
        }
        return $rname;
  }

   function logdeleted($uid){
        $db = new db();   
        $db->exec_query("SELECT * FROM ok_users WHERE id='$uid'");
        while($row = $db->get_data()) {
        $logino = $row['login'];
        }
        $olddata.="<br> login $logino";
        
        $db->exec_query("SELECT * FROM ok_profiles WHERE user_id='$uid' and field_id=1");
        while($row = $db->get_data()) {
        $tfield1 = $row['data'];
        }
        $olddata.= "<br> First Name $tfield1";
        
        $db->exec_query("SELECT * FROM ok_profiles WHERE user_id='$uid' and field_id=2");
        while($row = $db->get_data()) {
        $tfield2 = $row['data'];
        }
        $olddata.= "<br> Last Name $tfield2";
        
        $db->exec_query("SELECT * FROM ok_profiles WHERE user_id='$uid' and field_id=3");
        while($row = $db->get_data()) {
        $tfield3 = $row['data'];
        }
        $olddata.= "<br> e-mail $tfield3";
        
        $db->exec_query("SELECT * from ok_user_roles where user_id='$uid'");
        while($row = $db->get_data()) {
        $roleid=$row['role_id'];
        }
        $olddata.= "<br> Role ".roleid_to_roletext($roleid);
        return $olddata;
        
        }

function sigtoat($sig){
  $file_array = file("/usr/local/apache/htdocs/rules/local.rules");
  if(!$file_array)
  {
    $at="Error reading file";
  }
  else
  {
    for($i=0; $i < count($file_array); $i++)
    {
      if (strstr(($file_array[$i]),(strtolower($sig)))) {
               $file_array[$i]=strtolower($file_array[$i]);
               $sig=strtolower($sig);
               if (strstr($file_array[$i],$sig)) {
        $at=$file_array[$i];        
        $at=split("react:", $at);
	 $at=$at{1};
        if (rtrim($at)==' block;)'){$at='Blocked';}
	 if (rtrim($at)==' block,msg;)'){$at='Blocked and Logged';}

        }
    }
  }
if (!$at){$at='Logged';}
}
        return $at;
}

        
function sigtoat1($sig){
  $file_array = file("/usr/local/apache/htdocs/rules/local.rules");
  if(!$file_array)
  {
    $at="Error reading file";
  }
  else
  {
    for($i=0; $i < count($file_array); $i++)
    {
        $string=strtolower($file_array[$i]);
        
        while (strpos($string,' ')!==false )
        {
        $string = str_replace(' ','',$string);
        }
       print $string; 
       $at=strpos($string,$sig);
       //$at = strstr("$sig",$string);
       if ($pos = strpos($sig,$string)){ 
        //$at=$file_array[$i];        
        $at=$i;
	//$at=$at{1};
        //$at=$sig;
        if (rtrim($at)==' block;)'){$at='Blocked';}
	 if (rtrim($at)==' block,msg;)'){$at='Blocked and Logged';}
        //$at=$string;
        }
    }
  }
        return $at;
}

function ip_to_alias($ip){
	$db = new db();        
	$db->exec_query("SELECT alias FROM aliases where ip=INET_ATON('$ip');");
        while($row = $db->get_data()) {
        $alias=$row['alias'];
        }
        if (!$alias) {$alias=$ip;}
        return $alias;
}


function getallitems($colname, $where, $table){
	$db = new db();        
	$db->exec_query("SELECT count(cid) from event where $where;");
        while($row = $db->get_data()) {
        $countt=$row['count(cid)'];
        }
        return $countt;



}



function email_u($body_m,$mail1,$mail2,$subject){
  $file_array = file("/usr/local/apache/htdocs/tmp/".$body_m.".html");
  if(!$file_array)
  {
    echo("Error reading file");
  }
  else
  {
    for($i=0; $i < count($file_array); $i++)
    {

      
            #printf("%s<br>", $file_array[$i]);
      $body.=$file_array[$i];
    }
  }
$body=str_replace('"logo.jpg"', '"cid:my-attach"', $body);
if ($comments) {$body=str_replace("<!--%-->", "<br><b>Comments:</b>$comments<br>", $body);}
$mail = new PHPMailer();
$mail->IsSMTP();                                      // set mailer to use SMTP
$db = new db();
$db->exec_query("SELECT * FROM ok_sc_data;");
        while($row = $db->get_data()) {      
$mail->Host = $row['smtp'];  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = $row['smtpu'];  // SMTP username
$mail->Password = $row['smtpp']; // SMTP password
}
$mail->From = "AIPS@secoore.net";
$mail->FromName = "AIPS@secoore.net";

if ($mail1) {$mail->AddAddress("$mail1");}
if ($mail2) {$mail->AddAddress("$mail2");}                  // name is optional
$mail->AddReplyTo("daemon@aips003.secoore.net", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->AddAttachment("/usr/local/apache/htdocs/tmp/".$body_m.".html");         // add attachments
$mail->AddAttachment("/usr/local/apache/htdocs/logo.jpg");         // add attachments
//$mail->AddAttachment("/usr/local/apache/htdocs/img/logo.jpg", "logo.jpg");    // optional name
$mail->AddEmbeddedImage("/usr/local/apache/htdocs/logo.jpg", "my-attach", "logo.jpg","base64", "image/jpeg");
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $body;
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
echo "
Email successfully sent";
unlink ("/usr/local/apache/htdocs/tmp/".$body_m.".html");
}


function odt($rule_id){
$lines = file('/usr/local/apache/htdocs/rules/local.rules');
$line=$lines[$rule_id];
$tok = strtok($line,' ');
        if($tok == '#'){
        $line = substr($line,2);}
list($alert,$proto,$ips,$pos,$con,$ipd,$pod) = split('[ ]',$line);
    $cond = $con;
    $con = preg_replace('/</','&lt;',$con);
    $con = preg_replace('/>/','&gt;',$con);
    preg_match('/\((.+)\)/',$line,$matches);
    $line = $matches[1];
    preg_match('/content: "(.+?)"/',$line,$matches);
    $cnt = $matches[1];
    preg_match('/msg: "(.+?)"/',$line,$matches);
    $msg = $matches[1];
    preg_match('/react:\s+([^\s]+?);/',$line,$matches);
    $act = $matches[1];
if ($con=="&lt;&gt;"){$con='Both';}
if ($con=="&lt;-"){$con='Outbound';}
if ($con=="-&gt;"){$con='Inbound';}
    $time=split('%',$lines[$rule_id+1]);
    $string="<br>Source:$ips<br>Port:$proto<br>Condition:$con<br>Destination:$ipd<br>Port:$pod<br>Content:$cnt<br>Message:$msg<br>Action:$act<br>From:".$time[1]."<br>To:".$time[2]."<br>Notify:".$time[4]."";
return $string;
}


    function getsortlink ($date1,$date2,$order,$getsortlink) {
      if ($order){  
     if ($getsortlink!=$order){        
     $vlink="/rep.php?go=1&date1=$date1&date2=$date2&min=0&order=$getsortlink";
            }else{
     $vlink="/rep.php?go=1&date1=$date1&date2=$date2&min=0&order=".$getsortlink."1\"><img border=\"0\" src=\"img/uparrow.gif\" width=\"10\" height=\"10\"";
            }

       if ($getsortlink."1"==$order){
$vlink="/rep.php?go=1&date1=$date1&date2=$date2&min=0&order=".$getsortlink."1\"><img border=\"0\" src=\"img/downarrow.gif\" width=\"10\" height=\"10\"";}


            
          }else{
     $vlink="/rep.php?go=1&date1=$date1&date2=$date2&min=0&order=$getsortlink";
            }
            
    return $vlink;
    }
//if (substr($order, -1)=="1" and $getsortlink!=$order){
?>
