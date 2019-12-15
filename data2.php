<!DOCTYPE html>
<html>
    <head>
        <title>Kelompok 6</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/css/uikit.min.css" />
        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/js/uikit-icons.min.js"></script>
    </head>
    <body>
      <br><a href="index.php"><button class="uk-text-center uk-button uk-button-primary">Kembali</button></a> <a href="data1.php"><button class="uk-text-center uk-button uk-button-primary">Gempa Terkini</button></a>
      <h1 class="uk-text-center uk-margin-top"><span>60 Gempa Bumi M 5.0+</span></h1>
      <table class="uk-table uk-table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Magnitude</th>
            <th>Kedalaman</th>
            <th>Wilayah</th>
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
        $xml = new SimpleXMLElement('http://data.bmkg.go.id/gempaterkini.xml',0, TRUE);

        foreach ($xml->children() as $gempa) { ?>
          <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $gempa->Tanggal; ?></td>
          <td><?php echo $gempa->Jam; ?></td>
          <td><?php echo $gempa->Magnitude; ?></td>
          <td><?php echo $gempa->Kedalaman; ?></td>
          <td><?php echo $gempa->Wilayah; ?></td>
          <td><?php echo $gempa->Lintang; ?></td>
          <td><?php echo $gempa->Bujur; ?></td>
          <?php foreach ($gempa->children() as $coordinates) {
                echo "<td>".$coordinates->coordinates; ?></td>
          <?php } ?>
        <?php } ?>
        </tr>
      </table>
  </body>
</html>
