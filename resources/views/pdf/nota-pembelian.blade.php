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
        }
        .tg th{font-family:Arial, sans-serif;font-size:12px;
        font-weight:normal;}
        .tg .tg-wp8o{border-color:#000000;text-align:center;vertical-align:top}
        .tg .tg-73oq{border-color:#000000;text-align:left;vertical-align:top}
        .tg .tg-q44m{background-color:#ffffff;border-color:#000000;font-style:italic;text-align:left;vertical-align:top}
        .border {border-color:black;border-style:solid;border-width:1px;}
    </style>
</head>
<body>
    <table class="tg" style="undefined; width: 100%;">
        <tbody>
          <tr>
            <th class="tg-wp8o" colspan="3">NOTA PEMBELIAN TBS</th>
          </tr>
          <tr>
            <td class="tg-wp8o" colspan="3">CV. TUNAS ALAM PERKASA</td>
          </tr>
          <tr>
            <td class="tg-73oq" colspan="3">Tanggal/Jam   : {{$data->tanggal}} {{$data->jam}}</td>
          </tr>
          <tr>
            <td class="tg-73oq"></td>
            <td class="tg-73oq">Plat Kendaraan</td>
            <td class="tg-73oq">: {{$data->sopir->no_plat}}</td>
          </tr>
          <tr>
            <td class="tg-wp8o border" rowspan="7" style="vertical-align: middle; font: 10px, Bold; ">{{$data->nota_id}}</td>
            <td class="tg-73oq">Sopir</td>
            <td class="tg-73oq">: {{$data->sopir->nama}}</td>
          </tr>
          <tr>
            <td class="tg-73oq border">Gross</td>
            <td class="tg-73oq border">{{$data->gross}}</td>
          </tr>
          <tr>
            <td class="tg-73oq border">Tara</td>
            <td class="tg-73oq border">{{$data->tara}}</td>
          </tr>
          <tr>
            <td class="tg-73oq border">Netto</td>
            <td class="tg-73oq border">{{$data->netto_1}}</td>
          </tr>
          <tr>
            <td class="tg-73oq border">POT</td>
            <td class="tg-73oq border">{{$data->potongan}}</td>
          </tr>
          <tr>
            <td class="tg-73oq border"></td>
            <td class="tg-73oq border">{{$data->netto_1*$data->potongan/100}}</td>
          </tr>
          <tr>
            <td class="tg-73oq border">Netto 2</td>
            <td class="tg-73oq border">{{$data->netto_2}}</td>
          </tr>
          <tr>
            <td class="tg-73oq">PAYMENT</td>
            <td class="tg-73oq">TUNAI</td>
            <td class="tg-73oq"></td>
          </tr>
          <tr>
            <td class="tg-73oq border">Jumlah</td>
            <td class="tg-73oq border">Harga/Kg</td>
            <td class="tg-73oq border">Total</td>
          </tr>
          <tr>
            <td class="tg-73oq border">{{$data->netto_2}}</td>
            <td class="tg-73oq border">{{ number_format($data->harga, 0, ',', '.') }}</td>
            <td class="tg-73oq border">{{ number_format($data->total_biaya, 0, ',', '.') }}</td>
          </tr>
          <tr>
            <td class="tg-73oq border">Bongkar</td>
            <td class="tg-73oq border">{{ number_format($data->biaya_bongkar, 0, ',', '.') ."/ton" }}</td>
            <td class="tg-73oq border">{{ number_format($data->total_biaya_bongkar, 0, ',', '.') }}</td>
          </tr>
          <tr>
            <td class="tg-73oq border" colspan="2">Total</td>
            <td class="tg-73oq border">{{ number_format($data->total_akhir, 0, ',', '.') }}</td>
          </tr>
          <tr>
            <td class="tg-wp8o" rowspan="2">
              <p>Petani</p>
              <br>
              <p>{{$data->sopir->nama}}</p>
            </td>
            <td class="tg-72oq" rowspan="2"></td>
            <td class="tg-wp8o" rowspan="2">
              <p>Kasir</p>
              <br>
              <p>Kasir</p>
            </td>
          </tr>
        </tbody>
    </table>
</body>
</html>

