<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan TBS Masuk</title>
    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .header{
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <div class="header">
            <h3>LAPORAN TBS MASUK</h3>
        </div>
        <div>
            <table style="undefined;width: 100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Nama / Plat Mobil</th>
                        <th>Harga(Rp)</th>
                        <th>Potongan</th>
                        <th>Gross</th>
                        <th>Tara</th>
                        <th>Netto 1</th>
                        <th>Netto 2</th>
                        <th>Biaya</th>
                    </tr>
                </thead>
                @php
                $total_biaya = 0;
                $total_netto2 = 0;
                $total_netto1 = 0;
                @endphp
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->jam }}</td>
                        <td>{{ $item->sopir->nama }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->potongan }}</td>
                        <td>{{ $item->gross }}</td>
                        <td>{{ $item->tara }}</td>
                        <td>{{ $item->netto_1 }}</td>
                        <td>{{ $item->netto_2 }}</td>
                        <td>Rp {{ number_format($item->total_akhir, 0, ',', '.') }}</td>
                    </tr>
                    @php
                        $total_netto1 = $total_netto1+$item->netto_1;
                        $total_netto2 = $total_biaya+$item->netto_2;
                        $total_biaya = $total_biaya+$item->total_akhir;
                    @endphp
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="8" style="text-align: center">Total</td>
                        <td>{{$total_netto1}}</td>
                        <td>{{$total_netto2}}</td>
                        <td>Rp {{ number_format($total_biaya, 0, ',', '.') }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>
</html>