<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);



$db=mysqli_connect ("localhost", "sittingm_newadmn", "Ru5T7gaT0r", "sittingm_thedb") or die ('I cannot connect to the database because: ' . mysqli_error($db));
global $db;


$check = $_GET['k'];



$linksql = mysqli_query($db,"SELECT * FROM auto_logins WHERE unique_key = '$check' ");
$linkrow=mysqli_fetch_array($linksql);

$key = $linkrow['unique_key'];
$p_id = $linkrow['provider_id'];
$is_active = $linkrow['is_active'];
$f_id = $linkrow['fanchise_id'];
$a_id= $linkrow['a_id'];

echo $key.'<p>';
echo $p_id.'<p>';
echo $is_active.'<p>';
echo $f_id.'<p>';
echo $a_id.'<p>';



echo "CHECK THIS";



echo "<form action=provider/index.php method='post' name='frm'>".
    "<input type='hidden' name='p_id' value='".$p_id."'>".
    "<input type='hidden' name='f_id' value='".$f_id."'>".
    "<input type='hidden' name='a_id' value='".$a_id."'>".
    "<input type='hidden' name='is_active' value='".$is_active."'>".
    "</form>".
    '<script type="text/javascript">
      document.frm.submit();
      </script>';

?>


