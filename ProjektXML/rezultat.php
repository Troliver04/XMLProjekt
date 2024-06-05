<?php
    $xml_file = $_FILES['xml_file'];
    $xml = simplexml_load_file($xml_file['tmp_name']);
?>

<!doctype html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProjektRezultat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>

    <body>

        <header class="bg-danger text-white py-3" onclick="window.location.href='pocetna.php'" style="cursor: pointer;">
            <div class="container d-flex justify-content-between">
                <h3 class="mb-0 fst-italic">Generator tablica</h3>
                <h3 class="mb-0 fst-italic">by Oliver Smoljanović</h3>
            </div>
        </header>

        <table class="table">

            <thead>
                <tr style="background-color: black; color: white;">
                <?php
                    if ($xml->children()->count() > 0) {
                        foreach ($xml->children()->children() as $child) {
                            echo '<th>' . htmlspecialchars($child->getName()) . '</th>';
                        }
                    }
                ?>
                </tr>
            </thead>

            <tbody>
            <?php
                foreach ($xml->children() as $row) {
                    echo '<tr class="table-secondary">';
                    foreach ($row->children() as $cell) {
                        echo '<td>' . htmlspecialchars($cell) . '</td>';
                    }
                    echo '</tr>';
                }
            ?>
            </tbody>

        </table>

    </body>
</html>