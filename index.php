<?php
include 'koneksi.php';	
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Menampilkan Data Tabel MySQL</title>
      <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
         }
         h1{
            text-align: center;
            color: #4CAF50;
         }
         h3 {
            text-align: left;
            color: #4CAF50;
         }
         .container {
            width: 80%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
         }
         table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
         }
         th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
         }
         th {
            background-color: #4CAF50;
            color: white;
         }
         tr:nth-child(even) {
            background-color: #f2f2f2;
         }
         tr:hover {
            background-color: #ddd;
         }
         thead {
            background-color: #4CAF50;
            color: white;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <h1>Sistem Penjualan Buku</h1>
         
         <!-- Pelanggan -->
         <h3>Tabel Pelanggan</h3>
         <table>
            <thead>
               <tr>
                  <th>ID Pelanggan</th>
                  <th>Nama</th>
                  <th>Tanggal Lahir</th>
                  <th>Nomor Telepon</th>
                  <th>Status Keanggotaan</th>
                  <th>Tanggal Bergabung</th>
               </tr>
            </thead>
            <tbody>
            <?php
               $sql = 'SELECT * FROM pelanggan';
               $query = mysqli_query($koneksi, $sql);		
               while ($row = mysqli_fetch_array($query)) {
                   echo "<tr>
                           <td>{$row['id_pelanggan']}</td>
                           <td>{$row['nama']}</td>
                           <td>{$row['tanggal_lahir']}</td>
                           <td>{$row['nomer_telephon']}</td>
                           <td>{$row['status_keanggotaan']}</td>
                           <td>{$row['tanggal_bergabung']}</td>
                         </tr>";
               }
            ?>
            </tbody>
         </table>
         
         <!-- Pegawai -->
         <h3>Tabel Pegawai</h3>
         <table>
            <thead>
               <tr>
                  <th>ID Pegawai</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Nomor Telepon</th>
               </tr>
            </thead>
            <tbody>
            <?php
               $sql = 'SELECT * FROM pegawai';
               $query = mysqli_query($koneksi, $sql);		
               while ($row = mysqli_fetch_array($query)) {
                   echo "<tr>
                           <td>{$row['id_pegawai']}</td>
                           <td>{$row['nama']}</td>
                           <td>{$row['jabatan']}</td>
                           <td>{$row['nomer_telephon']}</td>
                         </tr>";
               }
            ?>
            </tbody>
         </table>
         
         <!-- Pemasok -->
         <h3>Tabel Pemasok</h3>
         <table>
            <thead>
               <tr>
                  <th>ID Pemasok</th>
                  <th>Nama Pemasok</th>
                  <th>Alamat</th>
                  <th>Nomor Telepon</th>
               </tr>
            </thead>
            <tbody>
            <?php
               $sql = 'SELECT * FROM pemasok';
               $query = mysqli_query($koneksi, $sql);		
               while ($row = mysqli_fetch_array($query)) {
                   echo "<tr>
                           <td>{$row['id_pemasok']}</td>
                           <td>{$row['nama_pemasok']}</td>
                           <td>{$row['alamat']}</td>
                           <td>{$row['nomer_telephon']}</td>
                         </tr>";
               }
            ?>
            </tbody>
         </table>
         
         <!-- Transaksi -->
         <h3>Tabel Transaksi</h3>
         <table>
            <thead>
               <tr>
                  <th>ID Transaksi</th>
                  <th>ID Pelanggan</th>
                  <th>ID Pegawai</th>
                  <th>Tanggal Transaksi</th>
                  <th>Total Biaya</th>
               </tr>
            </thead>
            <tbody>
            <?php
               $sql = 'SELECT * FROM transaksi';
               $query = mysqli_query($koneksi, $sql);		
               while ($row = mysqli_fetch_array($query)) {
                   echo "<tr>
                           <td>{$row['id_transaksi']}</td>
                           <td>{$row['id_pelanggan']}</td>
                           <td>{$row['id_pegawai']}</td>
                           <td>{$row['tanggal_transaksi']}</td>
                           <td>{$row['total_biaya']}</td>
                         </tr>";
               }
            ?>
            </tbody>
         </table>
         
         <!-- Detail Transaksi -->
         <h3>Tabel Detail Transaksi</h3>
         <table>
            <thead>
               <tr>
                  <th>ID Detail Transaksi</th>
                  <th>ID Transaksi</th>
                  <th>ID Buku</th>
                  <th>Jumlah</th>
               </tr>
            </thead>
            <tbody>
            <?php
               $sql = 'SELECT * FROM detail_transaksi';
               $query = mysqli_query($koneksi, $sql);		
               while ($row = mysqli_fetch_array($query)) {
                   echo "<tr>
                           <td>{$row['id_detail_transaksi']}</td>
                           <td>{$row['id_transaksi']}</td>
                           <td>{$row['id_buku']}</td>
                           <td>{$row['jumlah']}</td>
                         </tr>";
               }
            ?>
            </tbody>
         </table>
         
         <!-- Buku -->
         <h3>Tabel Buku</h3>
         <table>
            <thead>
               <tr>
                  <th>ID Buku</th>
                  <th>Judul</th>
                  <th>Pengarang</th>
                  <th>Penerbit</th>
                  <th>Harga</th>
                  <th>Stok</th>
               </tr>
            </thead>
            <tbody>
            <?php
               $sql = 'SELECT * FROM buku';
               $query = mysqli_query($koneksi, $sql);		
               while ($row = mysqli_fetch_array($query)) {
                   echo "<tr>
                           <td>{$row['id_buku']}</td>
                           <td>{$row['judul']}</td>
                           <td>{$row['pengarang']}</td>
                           <td>{$row['penerbit']}</td>
                           <td>{$row['harga']}</td>
                           <td>{$row['stok']}</td>
                         </tr>";
               }
            ?>
            </tbody>
         </table>
      </div>
   </body>
</html>
