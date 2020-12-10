
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>REGISTRATION FORM</h1>
    <div class="form">
    <form action="halaman2.php" method="post">
    <input type="hidden" name="date2" >
        <ul>
            <li>
                <label for="nama1">FIRSTNAME</label>
                <input type="text" name="nama1" id="nama1">
            </li>
            <li>
                <label for="nama2">SURNAME</label>
                <input type="text" name="nama2" id="nama2">
            </li>
            <li>
                <label for="nama3">ADDRESS</label>
                <input type="text" name="alamat" id="nama3">
            </li>
            <li>
                <label for="nama4">POSTCODE</label>
                <input type="text" name="kdpos" id="nama4">
            </li>
            <li>
                <label for="nama5">DATE OF BIRTH</label>
                <input type="date" name="date" id="nama5">
            </li>
            <li>
                <label for="nama6">TELEPHONE(Day)</label>
                <input type="text" name="tlp1" id="nama6">
            </li>
            <li>
                <label for="nama7">TELEPHONE(evening)</label>
                <input type="text" name="tlp2" id="nama7">
            </li>
            <li>
                <label for="nama8">EMAIL ADDRESS</label>
                <input type="text" name="email" id="nama8">
            </li>
            <li>
                <button type="submit" name="proses" id="proses">Proses</button>
            </li>
        </ul>
    
    </form>
    </div>

    <div class="copy">
        Copyright&copy;|| WAHYU ANDRE LUCKYANTO
    </div>
    
</body>
</html>