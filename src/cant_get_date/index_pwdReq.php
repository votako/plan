<?php
$Password = $_REQUEST['password'];
if ($Password == '1'){
    header("Location: it/"); 
 
}elseif($Password == '2'){
	header("Location: sh/"); 
}else { ?>
    <html>
        <body>
            <form name="form" action="index.php">
                pwd: <input name="password" value="">
                <input type="submit" name="button" value="OK" />
            </form>
        </body>
    </html>

 
<?php } ?>
