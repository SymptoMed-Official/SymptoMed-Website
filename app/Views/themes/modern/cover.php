<div class="card">
  <div class="card-header">
    <h5 class="card-title"><?= $current_module['judul_module'] ?></h5>
  </div>
  <div class="card-body">
    <?php
    // Default untuk alert
    if (!empty($message)) {
      show_message($message);
    } ?>
    <!-- Kode untuk ada button diatas garis/ tag HR -->

    <!-- Tambahkan kode Disini -->
    <p class="textBorder"><?php echo "version: " . $api['version'] ?></p>
    <br>
    <?php echo '<img src="' . $api['url'] . '" width="auto" height="200">'; ?><br><br>

    <form method="post" action="" enctype="multipart/form-data" id="coverForm">
      <input type="file" id="cover" name="cover" accept="image/png, image/jpeg">
      <button type="submit" class="btn btn-primary" value="upload">submit</button>
    </form>

    <script>
      const form = document.getElementById("coverForm")
      form.addEventListener("submit", function(event) {
        console.log("form submitted");
        // POST to New Cover API : Using AJAX ke button
        $.ajax({
          type: "POST",
          // Header authorization
          // headers: {
          //   "Authorization": "Bearer "
          // },
          url: "<?= $actionURL ?>",
          data: new FormData(form),
          processData: false,
          contentType: false,
          success: function(data) {
            console.log(data);
            swal.fire({
              icon: 'success',
              title: 'Success',
              text: 'Cover has been uploaded successfully',
              confirmButtonText: 'OK'
            }).then((result) => {
              if (result.isConfirmed) {
                location.reload();
              }
            })
          }
        })
        const file = document.getElementById("cover")
        console.log("selected file: " + file.value)
      });
    </script>
  </div>
</div>
<style>
  img {
    border: 5px solid #555;
  }

  .textBorder {
    padding: 10px;
    /* Adjust padding as needed */
    border: 1px solid #1976d2;
    width: fit-content;
    border-width: 5px;
    font-weight: bold;
    background-color: #1976d2;
    border-radius: 0.375rem;
    color: white;

  }
</style>