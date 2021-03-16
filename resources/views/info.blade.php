<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Diri Pelanggan</title>
</head>
<body>
    @foreach($pelanggan as $data)
        <h3>{{ucwords($data->no_pendaftaran)}}</h3>
        <h3>{{ucwords($data->nama)}}</h3>
        <h3>{{ucwords($data->email)}}</h3>
        <h3>{{ucwords($data->nomor)}}</h3>
        <h3>{{ucwords($data->pekerjaan)}}</h3>
        <h3>{{ucwords($data->usia)}}</h3>
        <h3>{{ucwords($data->jeniskelamin)}}</h3>
        <h3>{{ucwords($data->pendidikan)}}</h3>
        <h3>{{ucwords($data->komunitas)}}</h3>
        <h3>{{ucwords($data->sesi)}}</h3>
        <h3>{{ucwords($data->statuskehadiran)}}</h3>
        <img source="public/datadiri/{{$data->datadiri}}">
    @endforeach
</body>
</html>