<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hallo Form</title>
</head>
<body>

    <form action="/proses-form" method="POST">
        @csrf

        Nama : <input type="text" name="nama">
        @if ($errors->has('nama'))
            <strong style="color:red;"> {{ $errors->first('nama') }} </strong>
        @endif
        <br/>

        Alamat : <textarea name="alamat" id="" cols="30" rows="10"></textarea>
        @if ($errors->has('alamat'))
            <strong style="color:red;"> {{ $errors->first('alamat') }} </strong>
        @endif
        <br/>

        <button type="submit"> Kirim </button> <br/>

        @if(isset($nama))
            Hallo {{ $nama }} beralamat di {{ $alamat }}
        @else
            belum ada data.......
        @endif

    </form>
    
</body>
</html>