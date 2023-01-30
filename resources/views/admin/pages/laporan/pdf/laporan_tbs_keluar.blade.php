<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
    .tg .tg-baqh{text-align:center;vertical-align:top}
    .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
    .tg .tg-0lax{text-align:left;vertical-align:top}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
  </style>
</head>
<body>

  
    <table class="tg" width="100%">
      <thead>
        <tr>
          <th class="tg-9wq8" colspan="15">CV TUNAS ALAM PERKASA</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="tg-c3ow" colspan="6">LAPORAN TBS KELUAR</td>
          <td class="tg-0lax"></td>
          <td class="tg-baqh" colspan="8">LAPORAN NP TBS</td>
        </tr>
        <tr>
          <td class="tg-c3ow">No</td>
          <td class="tg-0pky">Tanggal Keluar</td>
          <td class="tg-0pky">Supir/Plat</td>
          <td class="tg-0pky">Tara</td>
          <td class="tg-0pky">Gross</td>
          <td class="tg-0lax">Netto Keluar</td>
          <td class="tg-0lax"></td>
          <td class="tg-baqh">No</td>
          <td class="tg-0lax">Tanggal NP</td>
          <td class="tg-0lax">Pembeli</td>
          <td class="tg-0lax">Harga(Rp)</td>
          <td class="tg-0lax">Tara</td>
          <td class="tg-0lax">Gross</td>
          <td class="tg-0lax">Netto NP/ton</td>
          <td class="tg-0lax">Pendapatan</td>
        </tr>
        @foreach($items as $item)
          <tr>
            <td class="tg-c3ow">{{$loop->iteration}}</td>
            <td class="tg-0pky">{{$item->tanggal}}</td>
            <td class="tg-0pky">{{$item->sopir->nama}}</td>
            <td class="tg-0pky">{{$item->tara}}</td>
            <td class="tg-0pky">{{$item->gross}}</td>
            <td class="tg-0lax">{{$item->netto}}</td>
            <td class="tg-0lax"></td>
            <td class="tg-baqh">{{$loop->iteration}}</td>
            <td class="tg-0lax">{{$item->notaPenimbanganTbs->tgl}}</td>
            <td class="tg-0lax">{{$item->notaPenimbanganTbs->pembeli}}</td>
            <td class="tg-0lax">{{$item->notaPenimbanganTbs->harga}}</td>
            <td class="tg-0lax">{{$item->notaPenimbanganTbs->tara}}</td>
            <td class="tg-0lax">{{$item->notaPenimbanganTbs->gross}}</td>
            <td class="tg-0lax">{{$item->notaPenimbanganTbs->netto}}</td>
            <td class="tg-0lax">{{$item->notaPenimbanganTbs->pendapatan}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
</body>
</html>
