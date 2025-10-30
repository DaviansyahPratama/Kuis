<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f2f7ff;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #0d6efd;
            font-weight: bold;
        }
        .list-group-item {
            font-size: 16px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card p-4">
        <h1 class="text-center mb-4">📋 Data Mahasiswa</h1>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Nama:</b> {{ $name }}</li>
            <li class="list-group-item"><b>Umur:</b> {{ $my_age }} tahun</li>
            <li class="list-group-item"><b>Hobi:</b> 
                <ul>
                    @foreach($hobbies as $hobi)
                        <li>{{ $hobi }}</li>
                    @endforeach
                </ul>
            </li>
            <li class="list-group-item"><b>Tanggal Harus Wisuda:</b> {{ $tgl_harus_wisuda }}</li>
            <li class="list-group-item"><b>Waktu Tersisa Menuju Wisuda:</b> {{ $time_to_study_left }} hari lagi</li>
            <li class="list-group-item"><b>Semester Saat Ini:</b> {{ $current_semester }}</li>
            <li class="list-group-item"><b>Pesan:</b> <em>{{ $message }}</em></li>
            <li class="list-group-item"><b>Cita-cita:</b> {{ $future_goal }}</li>
        </ul>
    </div>
</div>
</body>
</html>

