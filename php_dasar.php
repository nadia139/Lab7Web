<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata dan Pekerjaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #ff006fff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #ff5297ff;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #ffe1efff;
            border-radius: 5px;
            border-left: 4px solid #ff5289ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Biodata dan Pekerjaan</h2>
        
        <form method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required 
                       value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required 
                       value="<?php echo isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan:</label>
                <select id="pekerjaan" name="pekerjaan" required>
                    <option value="">Pilih Pekerjaan</option>
                    <option value="Software Engineer" <?php echo (isset($_POST['pekerjaan']) && $_POST['pekerjaan'] == 'Software Engineer') ? 'selected' : ''; ?>>Software Engineer</option>
                    <option value="Data Analyst" <?php echo (isset($_POST['pekerjaan']) && $_POST['pekerjaan'] == 'Data Analyst') ? 'selected' : ''; ?>>Data Analyst</option>
                    <option value="Web Developer" <?php echo (isset($_POST['pekerjaan']) && $_POST['pekerjaan'] == 'Web Developer') ? 'selected' : ''; ?>>Web Developer</option>
                    <option value="System Administrator" <?php echo (isset($_POST['pekerjaan']) && $_POST['pekerjaan'] == 'System Administrator') ? 'selected' : ''; ?>>System Administrator</option>
                    <option value="UI/UX Designer" <?php echo (isset($_POST['pekerjaan']) && $_POST['pekerjaan'] == 'UI/UX Designer') ? 'selected' : ''; ?>>UI/UX Designer</option>
                </select>
            </div>
            
            <button type="submit">Kirim</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $pekerjaan = $_POST['pekerjaan'];
            
            $tgl_lahir = new DateTime($tanggal_lahir);
            $today = new DateTime();
            $umur = $today->diff($tgl_lahir)->y;
            
            $gaji_pekerjaan = [
                "Software Engineer" => 15000000,
                "Data Analyst" => 12000000,
                "Web Developer" => 10000000,
                "System Administrator" => 11000000,
                "UI/UX Designer" => 9000000
            ];
            
            $gaji = isset($gaji_pekerjaan[$pekerjaan]) ? $gaji_pekerjaan[$pekerjaan] : 0;
            
            echo "<div class='result'>";
            echo "<h3>Hasil Biodata:</h3>";
            echo "<p><strong>Nama:</strong> " . htmlspecialchars($nama) . "</p>";
            echo "<p><strong>Tanggal Lahir:</strong> " . date('d F Y', strtotime($tanggal_lahir)) . "</p>";
            echo "<p><strong>Umur:</strong> " . $umur . " tahun</p>";
            echo "<p><strong>Pekerjaan:</strong> " . htmlspecialchars($pekerjaan) . "</p>";
            echo "<p><strong>Gaji:</strong> Rp " . number_format($gaji, 0, ',', '.') . " per bulan</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>