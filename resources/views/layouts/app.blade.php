<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'E-Commerce')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <script src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script> --}}
    @stack('styles')
</head>

<body class="bg-gray-100" x-data>
    @include('layouts.header')
    <main>
        @yield('breadcrumb')
        @yield('content')
    </main>
    @yield('single')
    @yield('order')
    @yield('login')
    @include('layouts.footer')

    @stack('scripts')
</body>

<script>
    // Cart Item Model
    const product = {
        id: 1,
        name: "T-short",
        price: 100,
        quantity: 1,
        thumbnail: "1.png",
    }
    document.addEventListener('alpine:init', () => {
        Alpine.store('cart', {
            items: Alpine.$persist([]),
            addItem(item) {
                const newItem = {
                    id: item.id,
                    name: item.title,
                    price: item.price,
                    quantity: item.quantity ?? 1,
                    thumbnail: item.thumbnail,
                    total: item.price,
                };

                const index = this.items.findIndex(item => item.id === newItem
                    .id); // Assuming 'id' is unique
                if (index !== -1) {
                    // If the object with the same id exists, Updat it
                    // this.items.splice(index, 1);
                    this.items[index].quantity++;
                    this.items[index].total = this.items[index].price * this.items[index].quantity;
                } else {
                    // Push the new object into the array
                    this.items.push(newItem);
                }
            },

        })
    })
</script>

</html>
