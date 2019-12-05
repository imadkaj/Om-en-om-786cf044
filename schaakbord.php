<!DOCTYPE HTML>
<html>
    <head>
        <title>Schaak</title>
    </head>
    <body>
        <h1>Schaakbord</h1>
        <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
<?php
for($a=1;$a<=8;$a++) {
    echo "<tr>";
    for($b=1;$b<=8;$b++) {
        $total=$a+$b;
        if($total%2==0){
        echo "<td height=50px width=80px bgcolor=#FFFFFF></td>";
    }else {
    echo "<td height=50px width=80px bgcolor=#000000></td>";
    }
}
echo "</tr>";
}
?>
        </table>
    </body>
</html>