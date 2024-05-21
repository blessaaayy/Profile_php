<head>
    <meta charset="utf-8">
    <title>THE SUNSET</title>
    <link rel="stylesheet" href="web.css">
    <script>
        function changeColorOnHover() {
            var button = document.querySelector('.btn');
            button.addEventListener('mouseover', function() {
                button.style.backgroundColor = '#333';
                button.style.color = '#fff';
            });
            button.addEventListener('mouseout', function() {
                button.style.backgroundColor = 'transparent';
                button.style.color = '#000';
            });
        }

        // Script untuk mengganti gambar galeri saat tombol "LOAD MORE" ditekan
        function loadMoreImages() {
            var loadMoreButton = document.querySelector('.btn');
            loadMoreButton.addEventListener('click', function() {
                var galleryContainer = document.getElementById('galeri');
                // Mengganti gambar-gambar dengan gambar baru atau menambahkan gambar baru
                // Contoh sederhana: memperbarui src gambar pertama
                var firstImage = galleryContainer.querySelector('.gallery-item img');
                firstImage.src = 'new_image.jpg'; // Ganti dengan URL gambar baru
            });
        }

        // Panggil fungsi-fungsi di atas saat halaman selesai dimuat
        document.addEventListener('DOMContentLoaded', function() {
            changeColorOnHover();
            loadMoreImages();
        });
    </script>
</head>
<body background="piww.jpg" link="#000" alink="#017bf5" vlink="#000">
    <div class="main" id="home">
        <!-- Konten lainnya -->
        <h3 align="center">
            <!-- Tombol "GET STARTED" -->
            <a href="#" class="btn" style="text-decoration: none;">
                <font face="Lato" color="#000">GET STARTED</font>
            </a>
        </h3>
    </div>
    <!-- Konten lainnya -->
</body>
</html>
