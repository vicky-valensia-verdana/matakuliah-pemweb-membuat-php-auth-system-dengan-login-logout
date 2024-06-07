<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    // Memeriksa input saat halaman dimuat
    checkInputs();

    // Fungsi untuk memeriksa input
    function checkInputs() {
      var usernameValue = $("#username").val().trim();
      var passwordValue = $("#password").val().trim();

      // Jika kedua input telah diisi, aktifkan tombol login
      if (usernameValue !== '' && passwordValue !== '') {
        $("#loginButton").prop("disabled", false);
      } else {
        // Jika salah satu atau kedua input kosong, nonaktifkan tombol login
        $("#loginButton").prop("disabled", true);
      }
    }

    // Menambahkan event listener ke input username
    $("#username").on("input", checkInputs);

    // Menambahkan event listener ke input password
    $("#password").on("input", checkInputs);
  });

  // Fungsi untuk mengirim data
  function submitData() {
    var data = {
      name: $("#name").val(),
      username: $("#username").val(),
      password: $("#password").val(),
      action: $("#action").val(),
    };

// Mengirim permintaan AJAX
   $.ajax({
      url: 'function.php',  // URL dari file PHP yang akan menerima permintaan
      type: 'post',          // Metode HTTP yang digunakan (POST)
      data: data,            // Data yang akan dikirim ke server
      success: function(response) {  // Fungsi yang akan dijalankan ketika permintaan berhasil
        // Menangani respons dari server
        alert(response);
        if (response == "Login Successful") {
          window.location.reload();  // Memuat ulang halaman jika login berhasil
        }
      },
      error: function(xhr, status, error) {  // Fungsi yang akan dijalankan jika terjadi kesalahan
        // Menangani kesalahan
        alert("Error: " + error);
      }
    });
  }
</script>
