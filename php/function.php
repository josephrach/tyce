<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root","","tyce");
// ambil data dari tabel data konten dan info akun
 $result1 = mysqli_query($conn,"SELECT * FROM data_konten");
 $result2 = mysqli_query($conn,"SELECT * FROM info_akun");

// tes eror koneksi
// if (!$result) {
//   echo mysqli_eror($conn);
// }

// membuat function masukin data
function tambahData($post,$konten_ke){
    // buat variabel untuk tampung hasil inputan
    $judul = $post["judul"];
    $tgl_terbit = $post["tgl_terbit"];
    $basa_basi = $post["basa_basi"];
    $penutup = $post["penutup"];
    $konten_ke = $post["konten_ke"];
    $header = $post["header"];
    $isi = $post["isi"];
    $link_ref_toko_1 = $post["link_ref_toko_1"];
    $link_ref_toko_2 = $post["link_ref_toko_2"];
    $link_ref_toko_3 = $post["link_ref_toko_3"];
    $link_ref_toko_lain = $post["link_ref_toko_lain"];

    // query insert data ke tabel
    // $query_data_konten = "INSERT INTO  data_konten
    //                         VALUES
    //                       ('','$judul','$tgl_terbit','$basa_basi','$penutup',$konten_ke','$header','$isi',$link_ref_toko_1','$link_ref_toko_2','$link_ref_toko_3','$link_ref_toko_lain')"}
    
    // mysqli_query($conn,$query_data_konten);

    var_dump($judul,$tgl_terbit ,$basa_basi ,$penutup ,$konten_ke ,$header ,$isi ,$link_ref_toko_1 ,$link_ref_toko_2 ,$link_ref_toko_3 ,$link_ref_toko_lain);

    // mereturn nilai row affected
    // return mysqli_affected_rows($conn);
}
?>