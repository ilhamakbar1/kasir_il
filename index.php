<!DOCTYPE html>
<html>
<link href="../image/tu.jpg" rel="shortcut icon">

<head>
    <title>UKK KASIR</title>
    <link href="../assets/tu.jpg" rel="shortcut icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="datatebles/datatables.css">
    <script type="text/javascript" src="datatebles/datatables.js"></script>
</head>
<script type="text/javascript">
    $(document).ready(function() {
        $('#taruna').DataTable();
    });
</script>

<body style="background-color: blue;">
    <div class="container" style="margin-top: 4rem;">
        <div class="content">
            <div class="card mt-5">
                <div class="row">
                    <div class="col-6">
                        <div class="card-body" style="margin-top: 5rem; margin-left:7%">
                            <p class="text-center mt-5">Silahkan Masukan Username dan Password</p>
                            <?php
                            if (isset($_GET['pesan'])) {
                                if ($_GET['pesan'] == "gagal") {
                                    echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
                                }
                            }
                            ?>
                            <form method="post" action="cek_login.php">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group mt-3">
                                    <button class="btn btn-primary form-control" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <img src="image/tu.jpg" width="500">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/javascript" src="
    https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>


</html>