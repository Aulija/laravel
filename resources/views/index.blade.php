<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Horizon</title>
    <link rel="stylesheet" href="{{asset('/styles.css')}}">
    <script defer src="{{asset('/script.js')}}"></script>
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <!-- Icon Burger -->
            <div class="burger">
                <img src="assets/burger.png" alt="Menu" class="burger-icon" id="burger-icon">
            </div>

            <div class="logo">
                <img src="assets/logo.png" alt="Logo">
                <h1>BookHorizon</h1>
            </div>

            <!-- Search Bar -->
            <div class="midsec">
                <a href="categories.php" class="category-link">Category</a>
                <input type="text" placeholder="Search..." id="search-bar">
                <button class="search-icon"><img src="assets/search.png" alt="Search" id="search-button"></button>
                <img src="assets/cart.png" alt="Cart" class="cart-icon" id="cart-icon">
            </div>

            <!-- Cart Icon and Links -->
            <div class="right-menu">
                
            </div>
        </nav>
    </header>

       <!-- Slideshow Section -->
       <section class="slideshow">
        <div class="slideshow-container">
             <!-- Navigation buttons -->
            <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
            <!-- Main Slideshow Image -->
            <div class="slide" id="slide-1">
                <img src="assets/slide1.jpg" alt="Slide 1" style="width: 100%; height: 100%; object-fit: cover; border-radius: 20px;">
            </div>
            <!-- Slide 2 -->
            <div class="slide">
                <img src="assets/slide2.jpg" alt="Slide 2" style="width: 100%; height: 100%; object-fit: cover; border-radius: 20px;">
            </div>
            <!-- Slide 3 -->
            <div class="slide">
                <img src="assets/slide3.jpg" alt="Slide 3" style="width: 100%; height: 100%; object-fit: cover; border-radius: 20px;">
            </div>  

            <!-- Navigation buttons -->
            <a class="next" onclick="changeSlide(1)">&#10095;</a>
        </div>
            <!-- Additional Photos -->
            <section class="photos">
                <div class="photo" style="background-image: url('assets/porsche.jpg');"></div>
                <div class="photo" style="background-image: url('assets/slide1.jpg');"></div>
            </section>
    </section>

    <!-- Best Selling Books Section -->
    <section class="best-sellers">
        <h2>Best Selling Books Ever</h2>
        <div class="book-container" id="books-container">
            <!-- Buku akan dimuat di sini menggunakan JavaScript -->
        </div>
    </section>

    <!-- Popup Box -->
    <!-- Popup content here -->

    

    <!-- Snack Bar -->
    <div id="snackbar">Anda harus login</div>

    <!-- Tombol untuk menghapus Local Storage -->
    <button id="clear-storage-btn">Hapus Semua Data di Local Storage</button>
</body>
</html>
