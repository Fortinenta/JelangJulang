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
        <h3>{{(20210320+$data->no_pendaftaran)}}</h3>
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
        <img src="{{ URL::asset("images/datadiri/$data->datadiri") }}" height="120" width="130">
            <a href="{{route('checkin',['id'=>$data->no_pendaftaran])}}">
                <input type="button" class="button" value="Check In">
            </a>
            <a href="{{route('checkout',['id'=>$data->no_pendaftaran])}}">
                <input type="button" class="button" value="Check Out">
            </a>
    @endforeach
</body>
</html>