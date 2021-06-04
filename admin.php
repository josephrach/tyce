<?php 
    // menghubungkan dengan kerumitan dunia
    require 'php/function.php';

    // if(isset($_POST["submit"])){
        // if(tambahData($_POST)){
        //     echo"data berhasil dimasukan";
        // }else {
            
        // }

    //     tambahData($_POST,0);
    // }else {
    //     echo"gagal";
    // }

    while (isset($_POST["submit"])) {
        tambahData($_POST,0);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin Tyce</title>
    </head>
    <body>
        <form><!--  -->
            <ul><!-- untuk judul, tanggal terbit,  -->
                <li><!-- judul -->
                <label for="judul">Judul </label><input type="text" name="judul" id="judul">
                </li>
                <li><!-- tanggal terbit -->
                <label for="tgl_terbit">Tanggal Terbit </label><input type="text" name="tgl_terbit" id="tgl_terbit">
                </li>
            </ul>
            <ul><!-- untuk basa basi, header, isi, link toko, penutup -->
                <li><!-- basa basi -->
                <label for="basa_basi">Pembuka </label><input type="text" name="basa_basi" id="basa_basi">
                </li>
                <li><!-- header, isi, link toko -->
                    <ul>
                        <li><label for="header">Header </label><input type="text" name="header" id="header"></li>
                        <li><label for="isi">Penjelasan </label><input type="text" name="isi" id="isi"></li>
                        <li><label for="link_ref_toko_1">Link Referensi Toko 1 </label><input type="text" name="link_ref_toko_1" id="link_ref_toko_1"></li>
                        <li><label for="link_ref_toko_2">Link Referensi Toko 2 </label><input type="text" name="link_ref_toko_2" id="link_ref_toko_2"></li>
                        <li><label for="link_ref_toko_3">Link Ref erensi Toko 3 </label><input type="text" name="link_ref_toko_3" id="link_ref_toko_3"></li>
                        <li><label for="link_ref_toko_lain">Link Referensi Toko Lainnya </label><input type="text" name="link_ref_toko_lain" id="link_ref_toko_lain"></a></li>
                    </ul>
                </li>
                <li><!-- penutup -->

                </li>               
            </ul>
            <button type="submit" name="submit">tambah</button>
        </form>
    </body>
</html>