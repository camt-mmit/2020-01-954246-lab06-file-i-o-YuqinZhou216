<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/
$fin=fopen($_SERVER['argv'][1], 'r');
fscanf($fin,"%d",$n);
echo"number of data ",$n,"\n";
for($i=0;$i<$n;$i++){
    fscanf($fin,"%s %f",$name,$score);
    printf("%-11s:%11.6f\n",$name,$score);
    $sum=$sum+$score;
}printf("Average score =%11.6f",$sum/$n);
fclose($fin);
?>