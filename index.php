<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Form PHP</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      transition: 0.3s all;
    }

    body {
      background-color: #fff;
      color: #000;
      display: flex;
      flex-direction: column;
      align-items: center;
      font-family: "Open Sans", Arial, sans-serif;
      min-height: 100vh;
      padding: 30px;
    }

    h2 {
      margin-bottom: 15px;
    }

    .input, .output {
      width: 100%;
      max-width: 400px;
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
    }

    .form-input {
      display: flex;
      flex-direction: column;
      margin-bottom: 15px;
    }

    label {
      margin-bottom: 5px;
      font-weight: 600;
    }

    input[type="text"] {
      padding: 8px;
      border: 1px solid #aaa;
      border-radius: 4px;
      font-size: 14px;
    }

    button[type="submit"] {
      padding: 10px;
      background-color: #000;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 15px;
    }

    button[type="submit"]:hover {
      background-color: #333;
    }

    p {
      margin: 5px 0;
    }
  </style>
</head>
<body>

  <div class="input">
    <h2>Input Data</h2>
    <form action="" method="POST">
      <div class="form-input">
        <label for="nl">Nama Lengkap</label>
        <input type="text" id="nl" name="nl" placeholder="Masukkan nama lengkap anda">
      </div>
      <div class="form-input">
        <label for="np">Nama Panggilan</label>
        <input type="text" id="np" name="np" placeholder="Masukkan nama panggilan anda">
      </div>
      <div class="form-input">
        <label for="umur">Umur</label>
        <input type="text" id="umur" name="umur" placeholder="Masukkan umur anda">
      </div>
      <div class="form-input">
        <label for="ttl">Tempat Tanggal Lahir</label>
        <input type="text" id="ttl" name="ttl" placeholder="Masukkan tempat tanggal lahir anda">
      </div>
      <button type="submit">Simpan</button>
    </form>
  </div>

  <div class="output">
    <h2>Output Data</h2>
    <?php
    if (isset($_POST["nl"]) || isset($_POST["np"]) || isset($_POST["umur"]) || isset($_POST["ttl"])) {
        $nlengkap = trim($_POST["nl"]);
        $npanggilan = trim($_POST["np"]);
        $umur = trim($_POST["umur"]);
        $ttlahir = trim($_POST["ttl"]);

        if (empty($nlengkap) || empty($npanggilan) || empty($umur) || empty($ttlahir)) {
            echo "<p style='color:red;'>Isi semua field yang diminta!</p>";
        } else {
            echo "<p>Halo, <strong>" . htmlspecialchars($nlengkap) . "</strong>!</p>";
            echo "<p>Nama panggilan: " . htmlspecialchars($npanggilan) . "</p>";
            echo "<p>Umur kamu: " . htmlspecialchars($umur) . "</p>";
            echo "<p>Tempat tanggal lahir: " . htmlspecialchars($ttlahir) . "</p>";
        }
    }
    ?>
  </div>

</body>
</html>
