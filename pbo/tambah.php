<?php
require '../inven/koneksi/koneksi.php';
// merupakan class barang

class Barang{

    // property dari class barang
    var string $namabarang;
    var string $deskripsi;
    var int $stokbarang;

     // buat Constructor 
    //  public function __construct($namabarang, $deskripsi, $stokbarang)
    //  {
    //      $this->namabarang = $namabarang;
    //      $this->deskripsi = $deskripsi;
    //      $this->stokbarang = $stokbarang;
    //  }

    // tambah kan function jika di perlukan
    function tambahBarang(){
        global $koneksi;
        // masukan perintah tambah barang
        $namabarang = $_POST['namabarang'];
        $deskripsi = $_POST['deskripsi'];
        $stokbarang = $_POST['stok'];

        $addtotable = mysqli_query($koneksi, "INSERT INTO stock (namabarang, keterangan, stock) VALUES ('$namabarang', '$deskripsi', '$stokbarang')");
        if($addtotable){
            header('Location: /inven/');
        }
        else{
            echo "GAGAL";
            header('Location: ../inven/');
        }
    }

    // tambahkan function lain seperti hapus atau edit dll jika di perlukan
    // contoh function untuk menampilkan informasi barang
    function tambahMasuk()
    {
        global $koneksi;
        $barang = $_POST['barang'];
        $penerima = $_POST['penerima'];
        $qty = $_POST['qty'];

        $cek = mysqli_query($koneksi, "SELECT * FROM stock WHERE idbarang='$barang'");
        $getdata = mysqli_fetch_array($cek);

        $stok = $getdata['stock'];
        $updatestok = $stok+$qty;

        $addtomasuk = mysqli_query($koneksi, "INSERT INTO masuk (idbarang, penerima, qty) VALUES ('$barang', '$penerima', '$qty')");
        $updatetomasuk = mysqli_query($koneksi, "UPDATE stock set stock = '$updatestok' WHERE idbarang = '$barang'");
        if($addtomasuk && $updatetomasuk){
            header('Location: ../inven/masuk.php');
        }
        else{
            echo "Gagal";
            header('Location: ../inven/masuk.php');
        }
    }

    function tambahKeluar()
    {
        global $koneksi;
        $barang = $_POST['barang'];
        $penerima = $_POST['penerima'];
        $qty = $_POST['qty'];

        $cek = mysqli_query($koneksi, "SELECT * FROM stock WHERE idbarang='$barang'");
        $getdata = mysqli_fetch_array($cek);

        $stok = $getdata['stock'];
        $updatestok = $stok-$qty;

        $addtomasuk = mysqli_query($koneksi, "INSERT INTO keluar (idbarang, penerima, qty) VALUES ('$barang', '$penerima', '$qty')");
        $updatetomasuk = mysqli_query($koneksi, "UPDATE stock set stock = '$updatestok' WHERE idbarang = '$barang'");
        if($addtomasuk && $updatetomasuk){
            header('Location: ../inven/keluar.php');
        }
        else{
            echo "Gagal";
            header('Location: ../inven/keluar.php');
        }
    }

    // Tambah UPDATE barang stock
    function updateBarang(){
        global $koneksi;
        $idb = $_POST['idb'];
        $namabarang = $_POST['namabarang'];
        $deskripsi = $_POST['deskripsi'];

        $update = mysqli_query($koneksi, "UPDATE stock SET namabarang = '$namabarang', keterangan = '$deskripsi' WHERE idbarang = '$idb'");
        if($update){
            header('Location: ../inven/index.php');
        }
    }
    // Tambah Update barang stock 
    function deleteBarang(){
        global $koneksi;
        $idb = $_POST['idb'];

        $update = mysqli_query($koneksi, "DELETE FROM stock WHERE stock.idbarang = '$idb'");
        if($update){
            header('Location: /inventarisbarang/inven/index.php');
        }
    }

    function deleteMasuk(){
        global $koneksi;
        $idb = $_POST['idb'];
        $idm = $_POST['idm'];

        $view = mysqli_query($koneksi, "SELECT * FROM stock WHERE stock.idbarang = '$idb'");
        $stocknya = mysqli_fetch_array($view);
        $stocknow = $stocknya['stock'];

        $viewquery = mysqli_query($koneksi, "SELECT * FROM masuk WHERE masuk.idmasuk = '$idm'");
        $qtyidm = mysqli_fetch_array($viewquery);
        $qtynow = $qtyidm['qty'];

        $delete = mysqli_query($koneksi, "DELETE FROM masuk WHERE masuk.idmasuk = '$idm'");
        $qtynew = $stocknow - $qtynow;
        $updatestok = mysqli_query($koneksi, "UPDATE stock SET stock = '$qtynew' WHERE idbarang = '$idb'");

        
        if($delete && $updatestok){
            header('Location: /inventarisbarang/inven/index.php');
        }
    }

    function deleteKeluar(){
        global $koneksi;
        $idb = $_POST['idb'];
        $idk = $_POST['idk'];

        $view = mysqli_query($koneksi, "SELECT * FROM stock WHERE stock.idbarang = '$idb'");
        $stocknya = mysqli_fetch_array($view);
        $stocknow = $stocknya['stock'];

        $viewquery = mysqli_query($koneksi, "SELECT * FROM keluar WHERE keluar.idkeluar = '$idk'");
        $qtyidm = mysqli_fetch_array($viewquery);
        $qtynow = $qtyidm['qty'];

        $delete = mysqli_query($koneksi, "DELETE FROM keluar WHERE keluar.idkeluar = '$idk'");
        $qtynew = $stocknow + $qtynow;
        $updatestok = mysqli_query($koneksi, "UPDATE stock SET stock = '$qtynew' WHERE idbarang = '$idb'");

        
        if($delete && $updatestok){
            header('Location: /inventarisbarang/inven/index.php');
        }
    }
}