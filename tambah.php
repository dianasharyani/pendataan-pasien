<html>
    <head>
    
    </head>
    <body>
        <h3>Form Pendaftaran Pasien Baru</h3>
        <form action="proses-pendaftaran.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama Lengkap :</label>
                    <input type="text" name="nama" />
                </p>
                <p>
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" row="5"></textarea>
                </p>
                <p>
                    <label for="jk">Jenis kelamin :</label>
                    <input type="radio" name="jk" value="laki-laki"/>Laki-laki 
                    <input type="radio" name="jk" value="perempuan"/>Perempuan
                </P>
                <p>
                    <label for="notelp">No. Telepon :</label>
                    <input type="number" name="notelp" />
                </P>
                <p>
                    <label for="agama">Agama :</label>
                    <select name="agama">
                    <option value="islam">Islam </option>
                    <option value="kristen">Kristen </option>
                    <option value="hindu">Hindu </option>
                    <option value="buddha">Buddha </option>
                    <option value="katolik">Katolik </option>
                    <option value="konghucu">Konghucu </option>
                    </select> 
                </P>
                <p>
                    <label for="tanggal_masuk">Tanggal Masuk :</label>
                    <input type="date" name="tanggal_masuk" />
                </P>
                <p>
                    <label for="gejala">Gejala :</label>
                    <input type="text" name="gejala" />
                </P>
                <p>
                    <label for="tempat_lahir">Tempat lahir :</label>
                    <input type="text" name="tempat_lahir" />
                </P>
                <p>
                    <label for="tanggal_lahir">Tanggal Lahir :</label>
                    <input type="date" name="tanggal_lahir" />
                </P>
                <p>
                    <label for="no_kamar">No. Kamar :</label>
                    <input type="number" name="no_kamar" />
                </P>
                <p>
                    <input type="submit" value="Tambah Pasien" name="tambah" />
                </p>
            </fieldset>
        </form>
    </body>
</html>