<?php
    require_once('required/database.php');

    $id = $_GET['id'];
    $query = "SELECT * FROM pendidikan WHERE id='{$id}'";
    $result = mysqli_query($connectDb, $query);
    $data = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edit pendidikan</title>
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
                    <h3>Edit <span class="text-primary"> pendidikan</span></h3>
                    <a href="manajemen-pendidikan.php" class="btn btn-outline-primary">kembali</a>
                    
                    <form
                        autocomplete="off"
                        action="pendidikan-update.php"
                        method="post"
                        class="needs-validation mt-4"
                        novalidate
                      >
                      <input type="hidden" name="id" value="<?= $data['id']; ?>" />
                        <div class="row mb-4">
                          <div class="col-lg-8">
                            <input
                              class="form-control"
                              type="text"
                              id="name"
                              name="name"
                              placeholder="name"
                              value="<?= $data['name']; ?>"
                              required
                            />
                            <div class="invalid-feedback">Please input your name</div>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-lg-8">
                            <input
                              class="form-control"
                              type="text"
                              id="mulai"
                              name="mulai"
                              placeholder="mulai"
                              value="<?= $data['mulai']; ?>"
                              required
                            />
                            <div class="invalid-feedback">Please input your mulai</div>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-lg-8">
                            <input
                              class="form-control"
                              type="text"
                              id="selesai"
                              name="selesai"
                              placeholder="selesai"
                              value="<?= $data['selesai']; ?>"
                              required
                            />
                            <div class="invalid-feedback">Please input your selesai</div>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-lg-8">
                            <input
                              class="form-control"
                              type="text"
                              id="deskripsi"
                              name="deskripsi"
                              placeholder="deskripsi"
                              value="<?= $data['deskripsi']; ?>"
                              required
                            />
                            <div class="invalid-feedback">Please input your deskripsi</div>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-lg-8">
                            <input
                              class="form-control"
                              type="text"
                              id="alamat"
                              name="alamat"
                              placeholder="alamat"
                              value="<?= $data['alamat']; ?>"
                              required
                            />
                            <div class="invalid-feedback">Please input your alamat</div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                          Edit
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
