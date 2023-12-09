<?php
    require_once('required/database.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tambah User</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />

    <!-- colors -->
    <link href="css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />
  </head>
  <body>
    

    <div class="admin-container py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Tambah <span class="text-primary"> User</span></h3>
                    <a href="manajemen-user.php" class="btn btn-outline-primary">kembali</a>
                    
                    <form
                        autocomplete="off"
                        action="user-save.php"
                        method="post"
                        class="needs-validation mt-4"
                        novalidate
                      >
                        <div class="row mb-4">
                          <div class="col-lg-8">
                            <input
                              class="form-control"
                              type="text"
                              id="username"
                              name="username"
                              placeholder="Username"
                              required
                            />
                            <div class="invalid-feedback">Please input your username</div>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-lg-8">
                            <input
                              class="form-control"
                              type="password"
                              id="password"
                              name="password"
                              placeholder="Password"
                              required
                            />
                            <div class="invalid-feedback">Please input your password</div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                          Tambah
                        </button>
                      </form>
                </div>
            </div>
        </div>  
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
        <?php 
        if (isset($_GET['delete'])) {
            $statusBukutamu = $_GET['delete'];
            if ($statusBukutamu == 'sukses') : ?>
                alert('Sukses menghapus bukutamu');
            <?php elseif ($statusBukutamu == 'gagal') : ?>
                alert('Gagal menghapus bukutamu');
            <?php endif;
        }
        ?>
        ;(() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach((form) => {
          form.addEventListener(
            'submit',
            (event) => {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            },
            false
          )
        })
      })()
    </script>
    
    
  </body>
</html>
<?php 
    mysqli_close($connectDb);
