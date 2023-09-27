<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/styles-dashboard.css">
</head>

<body>
    <div class="container">
        <h2>DASHBOARD PRESENSI MAHASISWA</h2>
        <div class="form-container">
            <form action="#" method="post">
                <div class="form-group">
                    <label for="courses">Mata Kuliah</label>
                    <select id="courses" name="courses" required>
                        <option value="" disabled selected hidden>Pilih Mata Kuliah</option>
                        <option value="Metodologi Penelitian(MT023)">Metodologi Penelitian(MT023) - Informatika03(Teori)</option>
                        <option value="Metodologi Penelitian(MT023) ">Metodologi Penelitian(MT023) - Informatika03(Praktikum)</option>
                        <option value="Pemrograman Aplikasi(MT032)">Pemrograman Aplikasi(MT032) - Informatika07(Praktikum)</option>
                        <option value="Pemrograman Web(MT051)">Pemrograman Web(MT051) - Informatika07(Teori)</option>
                        <option value="Numerik & Matrix(MT001)">Numerik & Matrix(MT001) - Informatika05(Teori)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="topik">Topik</label>
                    <input type="text" id="topik" name="topik" required>
                </div>
                

                <div class="form-group">
                    <label for="comments">Sub-Topik/Pembahasan</label>
                    <textarea id="comments" name="comments" rows="6"required></textarea>
                </div>
                

                <button type="submit">SUBMIT</button>
            </form>
        </div>
    </div>
</body>

</html>




