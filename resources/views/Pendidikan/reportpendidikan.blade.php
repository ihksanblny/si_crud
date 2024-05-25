<!DOCTYPE html>
<html>
<head>
    <title>Report</title>
    <style>
        /* CSS styling untuk PDF */
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Report</h1>
    <table>
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Institusi</th>
            <th>Jenjang</th>
            <th>Jurusan</th>
            <th>Tahun Masuk</th>
            <th>Tahun Lulus</th>
        </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_institusi }}</td>
                    <td>{{ $item->jenjang }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->tahun_masuk }}</td>
                    <td>{{ $item->tahun_lulus }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
