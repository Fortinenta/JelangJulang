<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>JelangJulang</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
  body {
    font-family: 'Nunito';
  }

  </style>

</head>

<body class="body bg-white">

<div class="content">
<div class="col mb-2">
<label>Syarat dan Ketentuan</label><br>
<label>...........</label><br>

<label>Jam Buka</label><br>
<label>...............</label><br>

<label>Harga Tiket</label><br>
<label>............................</label><br>



</div>

<div class="p-3">
<form onsubmit="return validateForm(this)" action="/daftar" method="get">
  @csrf
  <div>
  <input type="checkbox" name="agree" id="agree" value="yes" />
  <label for="agree">Saya sudah membaca dan menyetujui syarat dan ketentuan yang telah dibuat</label>
  <div style="visibility:hidden; color:red" id="agree_chk_error">
  Tidak bisa melanjutkan karena belum menyetujui syarat dan ketentuan
  </div>
  </div>
    <div>
    <input type="submit" name="submit" value="Submit"/>
    </div>
  </form>
</div>

</body>

<script  type="text/javascript">
function validateForm(form)
{
    console.log("checkbox checked is ", form.agree.checked);
    if(!form.agree.checked)
    {
        document.getElementById('agree_chk_error').style.visibility='visible';
        return false;
    }
    else
    {
        document.getElementById('agree_chk_error').style.visibility='hidden';
        return true;
    }
}

</script>

</html>

