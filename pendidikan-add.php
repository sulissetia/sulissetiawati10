<?php
session_start();
require_once('required/database.php');
require_once('required/auth.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tambah pendidikan</title>
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
    <?php include('admin-layout/navbar.php'); ?>

    <div class="admin-container my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Tambah <span class="text-primary"> pendidikan</span></h3>
                    <a href="manajemen-pendidikan.php" class="btn btn-outline-primary">kembali</a>
                    
                    <form
                        autocomplete="off"
                        action="pendidikan-save.php"
                        method="post"
                        class="needs-validation mt-4"
                        novalidate
                      >
                        <div class="row mb-4">
                          <div class="col-lg-6">
                            <input
                              class="form-control"
                              type="text"
                              id="nama"
                              name="nama"
                              placeholder="nama Job"
                              required
                            />
                            <div class="invalid-feedback">Please input your nama job</div>
                          </div>
                        </div>
                        
                        <div class="row mb-4">
                          <div class="col-lg-6">
                            <input
                              class="form-control start-datepicker"
                              type="text"
                              id="mulai"
                              name="mulai"
                              placeholder="Date Start"
                              required
                            />
                            <div class="invalid-feedback">Please input Date Start</div>
                          </div>
                          <div class="col-lg-6">
                            <input
                              class="form-control end-datepicker"
                              type="text"
                              id="selesai"
                              name="selesai"
                              placeholder="Date End"
                              required
                            />
                            <div class="invalid-feedback">Please input Date End</div>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col">
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" placeholder="deskripsi" required></textarea>
                            <div class="invalid-feedback">Please input your deskripsi</div>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-lg-6">
                            <input
                              class="form-control"
                              type="text"
                              id="alamat"
                              name="alamat"
                              placeholder="alamat"
                              required
                            />
                            <div class="invalid-feedback">Please input your alamat</div>
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
    <script src="datepicker/datepicker.min.js"></script>
    <script src="datepicker/dayjs.min.js"></script>
    <script type="text/javascript">
        const startPicker = datepicker('.start-datepicker', {
            formatter: (input, date, instance) => {
                const value = dayjs(date)
                input.value = value.format('YYYY-MM-DD') // => '1/1/2099'
            }
        })
        const endPicker = datepicker('.end-datepicker',  {
            formatter: (input, date, instance) => {
                const value = dayjs(date)
                input.value = value.format('YYYY-MM-DD') // => '1/1/2099'
            }
        })
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
