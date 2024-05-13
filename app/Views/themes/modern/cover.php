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

    <!-- Menampilkan versi API -->
    <p class="textBorder"><?php echo "version: " . $api['version'] ?></p>
    <br>

    <!-- Menampilkan gambar dari URL API -->
    <?php echo '<img src="' . $api['url'] . '" width="auto" height="200">'; ?><br><br>

    <!-- Form untuk mengunggah gambar -->
    <form method="post" action="<?= $actionURL ?>" enctype="multipart/form-data" id="coverForm">
      <input type="file" id="cover" name="cover" accept="image/png, image/jpeg">
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Script untuk menangani pengiriman form menggunakan AJAX -->
    <script>
      const form = document.getElementById("coverForm")
      form.addEventListener("submit", function(event) {
        event.preventDefault();
        const formData = new FormData(form);
        console.log(formData);
        // Kirim permintaan AJAX
        $.ajax({
          type: "POST",
          url: form.action,
          beforeSend: function(xhr) {
            xhr.setRequestHeader('Authorization', 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6InN1cGVydXNlckBzeW1wdG9tZWQuaWQiLCJyb2xlIjoic3VwZXJ1c2VyIiwiaWF0IjoxNzE1NTg5MTI3fQ.__Z3yF05HAu_7nXfkk0kEbMaAHVUiiC4EEp0QcDeDFw');
          },
          data: formData,
          processData: false,
          contentType: false,
          success: function(data) {
            console.log(data); // Log respons dari server
            if (data) {
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
            } else {
              swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Failed. No response from server.',
                confirmButtonText: 'OK'
              })
            }
          },
          error: function(xhr, status, error) {
            console.error(xhr.responseText); // Tampilkan pesan kesalahan jika terjadi
            swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Failed to upload cover. Please try again later.',
              confirmButtonText: 'OK'
            })
          }
        });
      });
    </script>


  </div>
</div>

<!-- Gaya CSS untuk menambahkan border pada gambar -->
<style>
  img {
    border: 5px solid #555;
  }

  .textBorder {
    padding: 10px;
    border: 1px solid #1976d2;
    width: fit-content;
    border-width: 5px;
    font-weight: bold;
    background-color: #1976d2;
    border-radius: 0.375rem;
    color: white;
  }
</style>