<html>
    <head>
        <title>Chess</title>
        <style>
            td{
                width: 80px;
                height: 80px;
            }
            .wit{
                background-color: oldlace;
            }
            .rood{
                
                background-color: darkred;
            }
            table,th,tr,td {
                text-align: center;
            }
        </style>
    </head>
    <body>
<?php

// echo "1<br>2<br>3<br>4<br>5<br>6<br>7<br>8 ";

echo "<table>";
echo "<tr><td>1</td></tr>";
echo "<tr><td>2</td></tr>";
echo "<tr><td>3</td></tr>";
echo "<tr><td>4</td></tr>";
echo "<tr><td>5</td></tr>";
echo "<tr><td>6</td></tr>";
echo "<tr><td>7</td></tr>";
echo "<tr><td>8</td></tr>";
echo "</table>";

tabelmaken();
function tabelmaken(){
    $hb = 8;
    echo "<table>";
    for($x=0;$x<$hb;$x++){
        echo "<tr>";
        for($y=0; $y<$hb;$y++){
            if($x % 2){
                echo bepaalkleur($y,$x);
            }else{
                echo bepaalkleur($y, $x, true);
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
function bepaalkleur($posy, $posx, $omgekeerd = false){
    if($omgekeerd){
        $posy++;
    }
    if($posy % 2 == 0){
        return "<td class=wit id=vakje".$posx.",".$posy."></td>";
    }else{
        return "<td class=rood id=vakje".$posx.",".$posy."></td>";
    }
}

echo "<table>";
echo "<tr>";
echo "<td>A</td>";
echo "<td>B</td>";
echo "<td>C</td>";
echo "<td>D</td>";
echo "<td>E</td>";
echo "<td>F</td>";
echo "<td>G</td>";
echo "<td>H</td>";
echo "</tr>";
echo "</table>";

?>
        
        <br>
        <input type="button" onclick="" value="Nieuw spel">
    </body>
</html>

