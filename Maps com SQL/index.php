<?php
include('conexao.php');
?>

<style>
    #map {
        height: 400px;
        width: 100%;
    }
</style>



<!DOCTYPE html>
<html>

<head>
    <title>Localização de Mercados</title>
</head>

<body>
    <h1>Selecione um supermercado:</h1>
    <form action="" method="post">
        <select name="mercado">
            <?php
            $servername = "localhost";
            $dbname = "db_supermercados";
            $username = "root";
            $password = "";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT nome_fantasia FROM supermercados WHERE status = 'ativo'";
                $stmt = $conn->query($sql);

                while ($row = $stmt->fetch()) {
                    echo '<option value="' . $row['nome_fantasia'] . '">' . $row['nome_fantasia'] . '</option>';
                }
            } catch (PDOException $e) {
                echo "Conexão falhou: " . $e->getMessage();
            }
            ?>
        </select>
        <input type="submit" value="Mostrar no Mapa">
    </form>

    <div id="map"></div>

    <script>
        function initMap() {
            //VALOR INICIAL MAPA
            var map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: -22.00138051516493, lng: -47.43459097569256 },
                zoom: 14
            });

            var marker = new google.maps.Marker({
                position: { lat: -22.00138051516493, lng: -47.43459097569256 },
                map: map,
                title: ['nome_fantasia']
            });
        }
    </script>

    <!-- Substitua "API_KEY" pela sua própria chave da API do Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDY1mHxLkYc0psl3uDlSxBw624MNaSVD0&callback=initMap"
        async defer></script>
</body>

</html>