<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="assets/icon.png" />
    <link rel="stylesheet" href="{{asset('/styles.css')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BookHorizon | Categories</title>
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <!-- Icon Burger -->
            <div class="burger">
                <img src="assets/burger.png" alt="Menu" class="burger-icon">
            </div>

            <div class="logo">
                <img src="assets/logo.png" alt="Logo">
                <h1>BookHorizon</h1>
            </div>

            <!-- Search Bar -->
            <div class="midsec">
                <a href="#" class="category-link">Category</a>
                <input type="text" placeholder="Search...">
                <button class="search-icon"><img src="assets/search.png" alt="Search"></button>
                <img src="assets/cart.png" alt="Cart" class="cart-icon">
            </div>

            <!-- Cart Icon and Links -->
            <div class="right-menu">
             
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <section class="home-section">
        <div class="home-content">
            <h3>Categories</h3>
            <button type="button" class="btn btn-tambah">
                <a href="/categories-entry">Tambah Data</a>
            </button>
            <button type="button" class="btn btn-tambah">
                <a href="/cetak">Cetak</a>
            </button>
            <table class="table-data">
                <thead>
                    <tr>
                        
                        <th>Categories</th>
                        <th scope="col" style="width: 20%">Description</th>
                        <th scope="col" style="width: 15%">Price</th>
                        <th scope="col" style="width: 30%">Action</th>
                    </tr>
                </thead>
                @foreach($categories as $ct)

                <tbody>
                   <td>{{$ct->name}}</td>
                   <td>{{$ct->description}}</td>
                   <td>{{$ct->price}}</td>
                   <td>
                                <a href="categories-edit/{{$ct->id}}" class="btn-edit">Edit</a>
                                <a href="delete/{{$ct->id}}" class="btn-delete" onclick="return confirm('Are you sure you want to delete this category?')">Hapus</a>
                            </td>
                </tbody>
                @endforeach

            </table>
        </div>
    </section>
</body>
</html>
