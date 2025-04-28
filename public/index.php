<!DOCTYPE html>
<html>
    <head>
        <title>LAMP con Docker</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php
                echo '<h1>PROYECTO EN DESARROLLO PARA EVALUACIÓN 1</h1>';
                echo '<br>';
                echo '<br>';
                echo '<h2>Presentado para Integración Continua (Desarrollo del producto)</h2>';
                echo '<br>';
                echo '<br>';
                echo '<h2>Entorno de desarrollo designado: LAMP/DOCKER/VS</h2>';
                echo '<br>';
                echo '<br>';
                echo '<h3>Presentado por los estudiantes</h3>';
                echo '<br>';
                echo '<br>';
                $conn = mysqli_connect('db','root','root.pa55');
                $database = mysqli_select_db($conn, 'db_ejm1');
                $query = 'SELECT * FROM Usuarios';
                $result = mysqli_query($conn, $query);
                echo '<table class="table table-striped">';
                echo '<thead><tr><th>ID</th><th>Nombre del Usuario</th></tr></thead>';
                while($value = $result->fetch_array(MYSQLI_ASSOC)){
                    echo '<tr>';
                    foreach($value as $element){
                        echo '<td>'.$element.'</td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';
                $result->close();
                mysqli_close($conn);
            ?>
        </div>
    </body>
</html>