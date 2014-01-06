<?php

const teste = 1;
include 'bootstrap/app_start.php';



$tmp = new Graphic();



$props = array(
    array('JAN', 300),
    array('FEV', 400),
    array('MAR', 500),
    array('ABR', 100),
    array('MAI', 900),
    array('JUN', 600),
    array('JUL', 700),
    array('AGO', 500),
    array('SET', 600),
    array('OUT', 800),
    array('NOV', 200),
    array('DEZ', 800),
);
$tmp->sample($props);

class Graphic
{
    function sample($props)
    {
        foreach ($props as $v) {

        }
    }
}




?>

<html>
<head>
    <style type="text/css">
        .legends {
            text-align: right;
            padding-right: 5px;
            margin-right: 12px;
        }
        .legend {
            padding-left: 5px;
            padding-top: 2px;
            padding-bottom: 2px;
            margin-top: 2px;
            margin-bottom: 2px;
            margin-right: 2px;
            text-align: right;
        }
        .values {
            margin-left: 100px;
            margin-top: -30px;
            border-bottom: 1px solid cornflowerblue;
            border-left: 1px solid cornflowerblue;
            width: 100%;
        }
        .value {
            padding-right: 2px;
            padding-top: 2px;
            padding-bottom: 2px;
            margin-top: 2px;
            margin-bottom: 2px;
            margin-left: 2px;
            text-align: right;
        }
    </style>
</head>
<body>
<h4>Demonstração das OS-m do ano de 2013</h4>
<div style="background-color: #e1f5ff">
    <br>
    <table>
        <tr>
            <td class="legends">
                <div class="legend">Jan</div>
                <div class="legend">Fev</div>
                <div class="legend">Mar</div>
                <div class="legend">Abr</div>
            </td>
            <td class="values">
                <div style="width: 35%;" class="value btn-primary">3500</div>
                <div style="width: 70%;" class="value btn-warning">7000</div>
                <div style="width: 25%;" class="value btn-info">2500</div>
                <div style="width: 20%;" class="value btn-success">2000</div>
            </td>
        </tr>
        <tr style="width: 100%">
            <td></td>
            <td>
                <table style="width: 100%; margin-left: 8px;">
                    <tr style="text-align: right;">
                        <td style="width: 10%;">1000╵</td>
                        <td style="width: 10%;">2000╵</td>
                        <td style="width: 10%;">3000╵</td>
                        <td style="width: 10%;">4000╵</td>
                        <td style="width: 10%;">5000╵</td>
                        <td style="width: 10%;">6000╵</td>
                        <td style="width: 10%;">7000╵</td>
                        <td style="width: 10%;">8000╵</td>
                        <td style="width: 10%;">9000╵</td>
                        <td style="width: 10%; padding-right: 2px;">10000╵</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
