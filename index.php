<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>THE SUNSET</title>
    <link rel="stylesheet" href="web.css">
    <style>
        /* Tambahkan gaya CSS di sini jika diperlukan */
    </style>
</head>
<body background="piww.jpg" link="#000" alink="#017bf5" vlink="#000">
    <div class="main" id="home">
        <br />
        <h3 align="center">
            <font face="sans-serif" size="6" color="#2c3e50">Ssy</font>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <font face="sans" size="4">
                <a href="#home">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp; 
                <a href="#about">ABOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#galeri">GALLERY</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#kontak">CONTACT US</a>
            </font>
        </h3>
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        <?php
            $query = "SELECT * FROM home";
            $result = mysqli_query($conn, $query);

            $no = 1;

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($no >=0) {
            ?>
        <h1 cla align="center" id="about">
            <font face="sans-serif" color="#2980b9" size="7">
            <?= $row["judul"] ?>
            </font>
        </h1>
        <br /><br /><br /><br /><br />
        <h1 align="center">
            <font face="sans-serif" color="#2980b9" size="5">
            <?= $row["keterangan"] ?>
            </font>
        </h1>
        <?php } 
            $no++;
            }
            } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);}
            ?>
        <br /><br /><br /><br /><br /><br />
        <h3 align="center">
            <a href="#" class="btn" style="text-decoration: none;">
                <font face="Lato" color="#000">GET STARTED</font>
            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </h3>
    </div>

    <!-- Gallery -->
    <br><br><br><br><br><br><br><br>
    <!-- <hr> -->
    <br><br><br><br><br><br>
    <div class="gallery-container" id="galeri">
        <h2>Gallery</h2>
        <div class="gallery-item">
            <img src="2.jpeg" alt="Image 1" width="300" height="200">
        </div>
        <div class="gallery-item">
            <img src="3.jpeg" alt="Image 2" width="300" height="200">
        </div>
        <div class="gallery-item">
            <img src="4.jpeg" alt="Image 3" width="300" height="200">
        </div>
        <div class="gallery-item">
            <img src="5.jpeg" alt="Image 4" width="300" height="200">
        </div>
        <div class="gallery-item">
            <img src="6.jpeg" alt="Image 5" width="300" height="200">
        </div>
        <div class="gallery-item">
            <img src="7.jpeg" alt="Image 6" width="300" height="200">
        </div>
        <a href="#" class="btn">LOAD MORE</a>
    </div>

    <!-- contact us -->
    
    <br><br><br><br><br><br><br>
    <div class="contact-info" id="kontak">
        <h2>CONTACT US</h2>
        <ul class="social-links">
            <li>Email: <a href="mailto:blessytangkuman026@student.unsrat.ac.id">blessytangkuman026@student.unsrat.ac.id</a></li>
            <li>Contact: <a href="https://wa.link/b39ddv">WhatsApp</a></li>
            <li>Instagram: <a href="https://www.instagram.com/blessytangkuman/">Instagram</a></li>
        </ul>
    </div>

    <footer class="footer">
        <p>Ssy</p>
        <p>Enjoy the beautiful things, called it SUNSET!</p>
    </footer>

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

        function loadMoreImages() {
            var loadMoreButton = document.querySelector('.btn');
            loadMoreButton.addEventListener('click', function() {
                var galleryContainer = document.getElementById('galeri');
                var firstImage = galleryContainer.querySelector('.gallery-item img');
                firstImage.src = '9.jpeg';
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            changeColorOnHover();
            loadMoreImages();
        });
    </script>
</body>
</html>
