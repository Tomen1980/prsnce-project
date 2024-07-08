<!DOCTYPE html>
<html>
<head>
    <title>PDF Report Magang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        p {
            margin-bottom: 10px;
        }
        .content {
            margin-top: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .table th {
            background-color: #f2f2f2;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p> Dicetak pada tanggal : {{ $date }}</p>
    <div class="content">
        <p>Berikut adalah hasil dari presensi <strong>{{ $users }}</strong> selama melakukan magang. Kami berharap dari pengalaman magang ini, setiap individu dapat menemukan inspirasi dan kebijaksanaan yang diperlukan untuk mengarungi lautan karier mereka dengan penuh percaya diri. Di sini, kami percaya bahwa setiap langkah kecil dan pengetahuan baru akan menjadi pijakan yang kuat menuju kesuksesan yang gemilang di masa depan.</p>
        <table class="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Tanggal</th>
                    <th>Waktu Masuk</th>
                    <th>Waktu Pulang</th>
                    <th>Keterangan</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($absenData as $index => $item)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->absenMasuk }}</td>
                    <td>{{ $item->absenPulang }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->keterangan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
