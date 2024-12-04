<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/colors/color-1.css" />
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <header class="header" id="header">
            <nav class="nav container">
                <a href="{{ route('index')}}" class="nav__logo">
                    <i class="bx bxs-shopping-bags nav__logo-icon"></i> Bowlier
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ route('index')}}" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="shop.html" class="nav__link active-link">Shop</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Cart</a>
                        </li>
                        <li class="nav__item">
                            <a href="blog.html" class="nav__link">Blog</a>
                        </li>
                        <li class="nav__item">
                            <a href="faq.html" class="nav__link">FAQ</a>
                        </li>
                        <li class="nav__item">
                            <a href="contact.html" class="nav__link">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="mt-5">
            <h1 class="text-4xl font-bold mb-6">Product List</h1>

            <form method="GET" action="{{ route('index') }}" class="mb-6">
                <label for="category" class="text-lg font-semibold mr-2">Filter by Category:</label>
                <select name="category" id="category" class="border rounded py-2 px-4">
                    <option value="">All Categories</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
                <button type="submit" class="bg-[hsl(336,88%,61%)] text-white py-2 px-4 rounded ml-2 hover:bg-[hsl(336,88%,51%)]">
                    Filter
                </button>
            </form>

            <!-- Display each product in a card-like layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($products as $product)
                <div class="bg-white p-6 rounded-lg shadow-lg justify-center items-center">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-48 h-48 object-cover rounded-md mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $product->name }}</h2>
                    <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                    <p class="text-gray-800"><strong>Price:</strong> IDR {{ number_format($product->price, 0, ',', '.') }}</p>
                    <p class="text-gray-800"><strong>Stock:</strong> {{ $product->stock }}</p>
                    <p class="text-gray-800"><strong>Category:</strong> {{ $product->category->name }}</p>

                    <!-- Quantity input -->
                    <label for="quantity" class="text-gray-800 font-semibold">Quantity:</label>
                    <input type="number" id="quantity-{{ $product->id }}" name="quantity" class="border rounded py-2 px-4 mb-4" min="1" max="{{ $product->stock }}" value="1">

                    <button onclick="addToCart('{{ $product->name }}', document.getElementById('quantity-{{ $product->id }}').value)" class="bg-[hsl(336,88%,61%)] text-white py-2 px-4 rounded mt-5 hover:bg-[hsl(336,88%,51%)]">
                        Add to Cart
                    </button>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        function addToCart(productName, quantity) {
            const message = `Hello, I would like to purchase the following product:\n\nProduct: ${productName}\nQuantity: ${quantity}\nPlease provide further details.`;
            const phoneNumber = '+6281325257711';
            const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            window.location.href = url;
        }
    </script>
</body>

</html>
