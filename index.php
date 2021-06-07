<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Inner Join</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h4>Table Operator</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id Operator</th>
                        <th scope="col">Kode Operator </th>
                        <th scope="col">Nama Operator </th>

                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $sql = 'SELECT * FROM operator';
                $query = mysqli_query($tersambung,$sql);
                while ($row = mysqli_fetch_array($query)){
                ?>

                <tbody>

                    <tr>
                        <td><?php echo $row['id_operator']?></td>
                        <td><?php echo $row['kode_operator']?></td>
                        <td><?php echo $row['nama_operator']?></td>
                    </tr>

                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h4>Table Pelanggan</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id Pelanggan</th>
                        <th scope="col">Kode Pelanggan </th>
                        <th scope="col">Nama Pelanggan</th>

                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $sql = 'SELECT * FROM pelanggan';
                $query = mysqli_query($tersambung,$sql);
                while ($row = mysqli_fetch_array($query)){
                ?>

                <tbody>

                    <tr>
                        <td><?php echo $row['id_pelanggan']?></td>
                        <td><?php echo $row['kode_pelanggan']?></td>
                        <td><?php echo $row['nama_pelanggan']?></td>
                    </tr>

                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h4>Table Inner Join - Transaksi</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id Transaksi</th>
                        <th scope="col">Kode Operator </th>
                        <th scope="col">Kode Pelanggan</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Bensin </th>
                        <th scope="col">Timestamp </th>

                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $sql = ' SELECT br.id_pelanggan, br.nama_pelanggan, tr.id_transaksi, tr.kode_pelanggan, tr.kode_operator, tr.bensin, timestamp
                FROM pelanggan br
                INNER JOIN transaksi tr
                ON br.id_pelanggan = tr.id_transaksi';
                $query = mysqli_query($tersambung, $sql);
                while ($row = mysqli_fetch_array($query)){
                ?>

                <tbody>

                    <tr>
                        <td><?php echo $row['id_transaksi']?></td>
                        <td><?php echo $row['kode_operator']?></td>
                        <td><?php echo $row['kode_pelanggan']?></td>
                        <td><?php echo $row['nama_pelanggan']?></td>
                        <td><?php echo $row['bensin']?></td>
                        <td><?php echo date('d/m/y : H:i:s', strtotime($row['timestamp']))?></td>
                    </tr>

                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h4>Table Left Join - Transaksi</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id Transaksi</th>
                        <th scope="col">Kode Operator </th>
                        <th scope="col">Kode Pelanggan</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Bensin </th>
                        <th scope="col">Timestamp </th>

                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $sql = ' SELECT br.id_pelanggan, br.nama_pelanggan, tr.id_transaksi, tr.kode_pelanggan, tr.kode_operator, tr.bensin, timestamp
                FROM pelanggan br
                LEFT JOIN transaksi tr
                ON br.id_pelanggan = tr.id_transaksi';
                $query = mysqli_query($tersambung, $sql);
                while ($row = mysqli_fetch_array($query)){
                ?>

                <tbody>

                    <tr>
                        <td><?php echo $row['id_transaksi']?></td>
                        <td><?php echo $row['kode_operator']?></td>
                        <td><?php echo $row['kode_pelanggan']?></td>
                        <td><?php echo $row['nama_pelanggan']?></td>
                        <td><?php echo $row['bensin']?></td>
                        <td><?php echo date('d/m/y : H:i:s', strtotime($row['timestamp']))?></td>
                    </tr>

                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>