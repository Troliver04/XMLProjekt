<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ProjektPocetna</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <header class="bg-danger text-white py-3" onclick="window.location.href='pocetna.php'" style="cursor: pointer;"> 
        <div class="container d-flex justify-content-between">
            <h3 class="mb-0 fst-italic">Generator tablica</h3>
            <h3 class="mb-0 fst-italic">by Oliver Smoljanović</h3>
        </div>
    </header>

    <div class="container mt-5 col-4">
        <div class="alert alert-secondary mb-4" role="alert">
            <p>Ovaj generator napravljen je u svrhu projektnog zadatka predmeta XML Programiranje. Potrebno je samo prenijeti XML datoteku te pritisnuti tipku, a zatim će se <strong>automatski generirati</strong> tablica s podacima iz datoteke.</p>
            <br>
            <strong>Zašto je student TVZ-a koristio generator tablice za svoj izlazni projekt?</strong>
            <p style="font-style: italic;">Jer je shvatio da mu je lakše stvoriti tablicu s generičkim podacima nego napisati seminarski rad!</p>
        </div>
        <form action="rezultat.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="xmlFile" class="form-label">XML File</label>
                <input class="form-control" type="file" id="xmlFile" name="xml_file">
            </div>
            <button type="submit" class="btn btn-danger">Generiraj tablicu</button>
        </form>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>