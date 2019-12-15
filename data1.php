<!DOCTYPE html>
<html class='uk-height-1-1'>
    <head>
      <title>Kelompok 6</title>
      <meta charset="utf-8">
      <meta name="viewport" content="initial-scale=1">
      <link rel="stylesheet" href="css/uikit.min.css" />
      <script src="js/uikit.min.js"></script>
      <script src="js/uikit-icons.min.js"></script>
      <!-- UIkit CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/css/uikit.min.css" />
      <!-- UIkit JS -->
      <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/js/uikit.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/js/uikit-icons.min.js"></script>
    </head>
    <body class='uk-height-1-1' style="background-image: url(img/index.png);">
    <br>
    <a href="index.php"><button class="uk-text-center uk-button uk-button-primary">Kembali</button></a> <a href="data2.php"><button class="uk-button uk-button-primary">60 Gempa M 5.0+</button></a><h1><center>Gempa Terkini</center></h1></div>
    <table class="uk-table uk-table-striped uk-margin-small-left uk-margin-small-right">
      <thead>
        <tr>
          <th>Tanggal</th>
          <th>Jam</th>
          <th>Magnitude</th>
          <th>Kedalaman</th>
          <th>Lintang</th>
          <th>Bujur</th>
          <th></th>
          <th></th>
          <th>Kordinat</th>
        </tr>
      </thead>
      <?php
      $no=1;
      //simple xml
      $xml = new SimpleXMLElement('http://data.bmkg.go.id/autogempa.xml',0, TRUE);

      foreach ($xml->children() as $gempa) { ?>
        <tr>
        <td><?php echo $gempa->Tanggal; ?></td>
        <td><?php echo $gempa->Jam; ?></td>
        <td><?php echo $gempa->Magnitude; ?></td>
        <td><?php echo $gempa->Kedalaman; ?></td>
        <td><?php echo $gempa->Lintang; ?></td>
        <td><?php echo $gempa->Bujur; ?></td>
        <?php foreach ($gempa->children() as $coordinates) {
              echo "<td>".$coordinates->coordinates; ?></td>
        <?php } ?>
      <?php } ?>
    </table>

    <table class="uk-table uk-table-striped uk-margin-small-left uk-margin-small-right">
      <thead>
        <tr>
          <th>Wilayah 1</th>
          <th>Wilayah 2</th>
          <th>Wilayah 3</th>
          <th>Wilayah 4</th>
          <th>Wilayah 5</th>
        </tr>
      </thead>
      <?php
      $no=1;
      //simple xml
      $xml = new SimpleXMLElement('http://data.bmkg.go.id/autogempa.xml',0, TRUE);

      foreach ($xml->children() as $gempa) { ?>
        <tr>
        <td><?php echo $gempa->Wilayah1; ?></td>
        <td><?php echo $gempa->Wilayah2; ?></td>
        <td><?php echo $gempa->Wilayah3; ?></td>
        <td><?php echo $gempa->Wilayah4; ?></td>
        <td><?php echo $gempa->Wilayah5; ?></td>
      <?php } ?>
    </table>

    <table class="uk-table uk-table-striped uk-margin-small-left uk-margin-small-right">
      <thead>
        <tr>
          <th>Potensi</th>
          <th>Gambar</th>
        </tr>
      </thead>
      <?php
      $no=1;
      //simple xml
      $xml = new SimpleXMLElement('http://data.bmkg.go.id/autogempa.xml',0, TRUE);

      foreach ($xml->children() as $gempa) { ?>
        <tr>
        <td><?php echo $gempa->Potensi; ?></td>
        <td><img src="http://data.bmkg.go.id/eqmap.gif"></td>
      <?php } ?>
    </table>

    </div>
    </body>
</html>
