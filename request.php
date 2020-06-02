<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+12028049573"><?php  echo $_POST['To'];?></Dial>
</Response>