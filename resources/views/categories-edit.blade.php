
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="{{asset('/assets/icon.png')}}" />
    <link rel="stylesheet" href="{{asset('/styles.css')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BookHorizon | Edit Category</title>
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <div class="burger">
                <img src="{{asset('assets/burger.png')}}" alt="Menu" class="burger-icon">
            </div>

            <div class="logo">
                <img src="{{asset('/assets/logo.png')}}" alt="Logo">
                <h1>BookHorizon</h1>
            </div>

            <!-- Search Bar -->
            <div class="midsec">
                <a href="#" class="category-link">Category</a>
                <input type="text" placeholder="Search...">
                <button class="search-icon"><img src="{{asset('assets/search.png')}}" alt="Search"></button>
                <img src="{{asset('assets/cart.png')}}" alt="Cart" class="cart-icon">
            </div>

            <!-- Cart Icon and Links -->
          
        </nav>
    </header>
    <!-- Edit Category Form -->
    <section class="form-section">
        <div class="form-container">
            <h3>Edit Category</h3>
            <form action="/update/{{$data->id}}" method="POST" enctype="multipart/form-data">
              @csrf
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name" value="{{$data->name}}" required>
                <label for="description">Description</label>
                <textarea name="description" id="description" required>{{$data->description}}</textarea>

                <label for="price">Price</label>
                <input type="number" name="price" id="price" value="{{$data->price}}" required>


                <button type="submit">Update Category</button>
            </form>
        </div>
    </section>
</body>
</html>
