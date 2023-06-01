<?php include 'koneksi.php';

$query = mysqli_query($link, "SELECT Peminjaman.peminjaman_id, Books.title, Members.name, Peminjaman.tgl_pinjam
FROM Peminjaman JOIN Books ON Peminjaman.book_id = Books.book_id
JOIN Members ON Peminjaman.member_id = Members.member_id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peminjaman Buku</title>
</head>
<body>
    <h1>Daftar Peminjaman Buku</h1>
    <table border="1px">
        <th>Id Peminjaman</th>
        <th>Judul Buku</th>
        <th>Nama Siswa</th>
        <th>Tanggal Pinjam</th>
        <th></th>

    <?php while ($data = mysqli_fetch_array($query)) :?>
        <tr>
            <td><?php echo $data['peminjaman_id']; ?></td>
            <td><?php echo $data['title']; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['tgl_pinjam']; ?></td>
        </tr>
        <?php endwhile ?>
    </table>
</body>
</html>
