<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Estilo.css">
    <title></title>
</head>
<body>
    <?php 
        $alumnos = array(
            "Paola"=>array("nota1"=>"8","nota2"=>"10","nota3"=>"8"),
            "Samuel"=>array("nota1"=>"9","nota2"=>"9","nota3"=>"5"),
            "Lucia"=>array("nota1"=>"9","nota2"=>"8","nota3"=>"7"),
            "Gerardo"=>array("nota1"=>"10","nota2"=>"8","nota3"=>"9"),
            "Angela"=>array("nota1"=>"7","nota2"=>"9","nota3"=>"7")
        );
    ?>

    <div class="titulo">
        Promedio de alumnos
    </div>
    <div class="resultados">
        <?php
                CalcularPromedio($alumnos);
        ?>
    </div>
</body>
</html>














<?php
    function CalcularPromedio($arreglo)
    {
        $NotaPromGrupo = array();
        $Contador=0;
        ?>

    <div class="divTabla">
        <table border="1"
                bordercolor=olive
                bgcolor=white
                cellspacing=0
                cellpadding=20
                
                class="tabla"
        >
            <tr>
                <th>Alumno</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Nota promedio</th>
                <th>Nota promedio grupo</th>
            </tr>

            <?php
                foreach($arreglo as $key => $value)
                {
                    $Ganancia1 = $arreglo[$key]["nota1"] * 0.50;
                    $Ganancia2 = $arreglo[$key]["nota2"] * 0.30;
                    $Ganancia3 = $arreglo[$key]["nota3"] * 0.20;
                    $notaProm = $Ganancia1 + $Ganancia2 + $Ganancia3;
                    $NotaPromGrupo[]=$notaProm;
                    $Contador++;
                }    
                

                $NotaGrupal=0;

                foreach($NotaPromGrupo as $Nota)
                { $NotaGrupal += $Nota; }
                $NotaFinal= ($NotaGrupal / $Contador);
                



                $Contador2 = 0;
                foreach($arreglo as $key => $value)
                { 
                    $Ganancia1 = $arreglo[$key]["nota1"] * 0.50;
                    $Ganancia2 = $arreglo[$key]["nota2"] * 0.30;
                    $Ganancia3 = $arreglo[$key]["nota3"] * 0.20;
                    $notaProm = $Ganancia1 + $Ganancia2 + $Ganancia3;
                    $NotaPromGrupo[]=$notaProm; ?>

                <tr>
                    <td><?php echo $key ?></td>
                    <td><?php echo $arreglo[$key]["nota1"] ?></td>
                    <td><?php echo $arreglo[$key]["nota2"] ?></td>
                    <td><?php echo $arreglo[$key]["nota3"] ?></td>
                    <td><?php echo $notaProm ?></td>

                    <?php 
                        if($Contador2 == 0)
                        { ?>
                            <td rowspan= <?php echo $Contador ?>><?php echo $NotaFinal;
                            $Contador2++; ?></td>
                    <?php }
                    ?>
                </tr>


                <?php 
                    }
                ?>
        </table>
    </div>




    <?php
    
    }
?>