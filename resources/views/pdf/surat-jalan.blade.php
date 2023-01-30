<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nota Pembelian</title>
    <style type="text/css">
        @page { 
              size: 9.5cm 11cm potrait; 
              margin-top: 0.20cm;
              margin-bottom: 0cm;
            }
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-family:Arial, sans-serif;font-size:12px;
        overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg th{font-family:Arial, sans-serif;font-size:12px;
        font-weight:normal;overflow:hidden;}
        .tg .tg-wp8o{border-color:#000000;text-align:center;vertical-align:top}
        .tg .tg-73oq{border-color:#000000;text-align:left;vertical-align:top}
        .tg .tg-q44m{background-color:#ffffff;border-color:#000000;font-style:italic;text-align:left;vertical-align:top}
        .border {border-color:black;border-style:solid;border-width:1px;}
    </style>
</head>
<body>
    <table class="tg" style="undefined;width: 100%">
        <tbody>
          <tr>
            <th class="tg-wp8o" colspan="3">SURAT JALAN TBS</th>
          </tr>
          <tr>
            <td class="tg-wp8o" colspan="3">CV. TUNAS ALAM PERKASA</td>
          </tr>
          <tr>
            <td class="tg-73oq" colspan="3">Tanggal/Jam : {{$data->tanggal}} {{$data->jam}}</td>
          </tr>
          <tr>
            <td class="tg-73oq"></td>
            <td class="tg-73oq">Sopir</td>
            <td class="tg-73oq">: {{$data->sopir->nama}}</td>
          </tr>
          <tr>
            <td class="tg-wp8o border" rowspan="4" style="vertical-align: middle; font: 20px, Bold; ">{{$data->no_surat_jalan}}</td>
            <td class="tg-73oq">Plat Kendaraan</td>
            <td class="tg-73oq">: {{$data->sopir->no_plat}}</td>
          </tr>
          <tr>
            <td class="tg-73oq border">Tara</td>
            <td class="tg-73oq border">{{$data->tara}}</td>
          </tr>
          <tr>
            <td class="tg-73oq border">Gross</td>
            <td class="tg-73oq border">{{$data->gross}}</td>
          </tr>
          <tr>
            <td class="tg-73oq border">Netto</td>
            <td class="tg-73oq border">{{$data->netto}}</td>
          </tr>
          <tr>
            <td class="tg-wp8o"></td>
            <td class="tg-73oq"></td>
            <td class="tg-wp8o">
              <p>Kasir</p>
              <br>
              <p>Kasir</p>
            </td>
          </tr>
        </tbody>
    </table>
</body>
</html>

