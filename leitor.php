<style>

    table {
        background-color: #ccc;
    }

</style>

<table border="1" width="100%">
<?php
    $row = 1;

    $f = fopen("addresses.csv", "r");

    if ($f !== FALSE) {

        $data = fgetcsv($f, 1000, ",");
        echo "<th>Nome</th></th><th>Sobrenome</th><th>Endereço</th><th>Cidade</th><th>Estado</th><th>Codigo Postal</th>";
        while ($data !== FALSE) {
            echo "<tr>";

            foreach($data as $valor) {
                echo "<td>$valor</td>";
            }
            echo "</tr>";
            $data = fgetcsv($f, 1000, ",");  
            $row++;
        }

        fclose($f);
    }

?>
</table>
