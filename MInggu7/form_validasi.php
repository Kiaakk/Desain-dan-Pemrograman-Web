<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myForm" method="post" action="proses_validasi1.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;"></span><br><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red;"></span><br><br>

            <input type="submit" value="Submit">
        </form>

        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(event) {
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var valid = true;

                    if (nama == "") {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }

                    if (email == "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

                    if (!valid) {
                        event.preventDefault();
                    }
                });
            });
        </script>
    </body>
</html> -->

<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myForm" method="post" action="proses_validasi1.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;"></span><br><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red;"></span><br><br>

            <input type="submit" value="Submit">
        </form>

        <div id="response-message" style="color: green;"></div>

        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(event) {
                    event.preventDefault(); // Mencegah pengiriman form secara default

                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var valid = true;

                    // Validasi nama
                    if (nama == "") {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }

                    // Validasi email
                    if (email == "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

                    if (valid) {
                        // Jika valid, kirim form menggunakan AJAX
                        $.ajax({
                            url: "proses_validasi1.php", // URL file PHP untuk memproses form
                            type: "POST",
                            data: {
                                nama: nama,
                                email: email
                            },
                            success: function(response) {
                                // Tampilkan respon dari server di div #response-message
                                $("#response-message").html(response);
                            },
                            error: function() {
                                // Jika terjadi kesalahan
                                $("#response-message").html("Terjadi kesalahan saat mengirim data.");
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html> -->

<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myForm" method="post" action="proses_validasi1.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;"></span><br><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red;"></span><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span id="password-error" style="color: red;"></span><br><br>

            <input type="submit" value="Submit">
        </form>

        <div id="response-message" style="color: green;"></div>

        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(event) {
                    event.preventDefault(); // Mencegah pengiriman form secara default

                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var valid = true;

                    // Validasi nama
                    if (nama == "") {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }

                    // Validasi email
                    if (email == "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

                    // Validasi password
                    if (password.length < 8) {
                        $("#password-error").text("Password harus minimal 8 karakter.");
                        valid = false;
                    } else {
                        $("#password-error").text("");
                    }

                    if (valid) {
                        // Jika valid, kirim form menggunakan AJAX
                        $.ajax({
                            url: "proses_validasi1.php", // URL file PHP untuk memproses form
                            type: "POST",
                            data: {
                                nama: nama,
                                email: email,
                                password: password
                            },
                            success: function(response) {
                                // Tampilkan respon dari server di div #response-message
                                $("#response-message").html(response);
                            },
                            error: function() {
                                // Jika terjadi kesalahan
                                $("#response-message").html("Terjadi kesalahan saat mengirim data.");
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>
