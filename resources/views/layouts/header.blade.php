<header class="bg-[#199724;]">
    <div class="container grid items-center grid-cols-12 p-4 px-6 mx-auto">

        <div class="col-span-4 lg:hidden">
            <button
                class="px-4 py-2 mb-2 text-sm font-medium bg-white rounded-lg focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button" data-drawer-target="drawer-top-example" data-drawer-show="drawer-top-example"
                data-drawer-placement="top" aria-controls="drawer-top-example">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                        clip-rule="evenodd" />
                </svg>

            </button>
        </div>


        <!-- drawer component -->
        <div id="drawer-top-example"
            class="fixed top-0 left-0 right-0 z-40 w-full p-4 transition-transform -translate-y-full bg-white dark:bg-gray-800"
            tabindex="-1" aria-labelledby="drawer-top-label">
            <h5 id="drawer-top-label"
                class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg
                    class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>Menu</h5>
            <button type="button" data-drawer-hide="drawer-top-example" aria-controls="drawer-top-example"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <ul class="flex flex-col mt-0 space-x-10 text-sm font-medium rtl:space-x-reverse">
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Windbreaker</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Men Jeans</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Women's Gown</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Shoes</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Jewelry</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Sharee</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Kids Zone</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Men T-shirt</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Women's Tunic</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Grocery</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Formal Shirt</a>
                </li>
            </ul>
        </div>



        <div class="order-2 col-span-4 lg:order-1">
            <span class="inline-block">
                <a href="{{ route('homepage') }}">
                    <img src="{{ asset('img/curlwarelogo.png') }}" class="w-48 h-auto" alt="">
                </a>
            </span>
        </div>
        <form class="flex items-center order-4 col-span-12 bg-white rounded-md lg:order-2 lg:col-span-4" action=""
            method="get">
            <input type="text" class="w-full border-0 rounded-md focus:outline-0 focus:border-0 focus:ring-0"
                placeholder="Search your products ...">
            <span class="px-2">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </span>

        </form>
        <div class="order-3 col-span-4">
            <div class="flex items-center justify-end space-x-4">
                <div class="items-center hidden space-x-2 lg:flex">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-red-600">
                        <path fill-rule="evenodd"
                            d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                            clip-rule="evenodd" />
                    </svg>
                    <div class="text-white ">
                        <h4 class="text-sm ">Call Us Now</h4>
                        <p>01615597820</p>
                    </div>
                </div>
                <div class="items-center hidden space-x-2 lg:flex">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-red-600">
                        <path fill-rule="evenodd"
                            d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                            clip-rule="evenodd" />
                    </svg>
                    <div class="text-white">
                        <a href="{{ route('loginpage') }}">
                            <h2 class="text-base font-semibold">Account</h2>
                        </a>
                        <p><a href="{{ route('loginpage') }}" class="text-xs">Login</a> Or <a href="{{ route('loginpage') }}" class="text-xs">Register</a></p>
                    </div>
                </div>
                <a href="#" class="flex space-x-1 text-white">

                    <button type="button"
                        class="relative inline-flex items-center p-3 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6">
                            <path
                                d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                        </svg>

                        <span class="sr-only">Notifications</span>
                        <div
                            class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-white rounded-md -top-2 -end-2 dark:border-gray-900">
                            0</div>
                    </button>

                </a>
            </div>
        </div>
    </div>
</header>
<nav class="container mx-auto ">
    <div class="flex-col hidden py-3 text-lg font-semibold bg-white shadow-lg lg:flex px-14 dark:bg-gray-700">
        <ul class="flex flex-row mt-0 space-x-10 text-sm font-medium rtl:space-x-reverse">
            <li>
                <a href="#" class="text-gray-900 dark:text-white hover:text-red-600"
                    aria-current="page">Windbreaker</a>
            </li>
            <li>
                <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Men Jeans</a>
            </li>
            <li>
                <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Women's Gown</a>
            </li>
            <li>
                <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Shoes</a>
            </li>
            <li>
                <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Jewelry</a>
            </li>
            <li>
                <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Sharee</a>
            </li>
            <li>
                <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Kids Zone</a>
            </li>
            <li>
                <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Men T-shirt</a>
            </li>
            <li>
                <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Women's Tunic</a>
            </li>
            <li>
                <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Grocery</a>
            </li>
            <li>
                <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Formal Shirt</a>
            </li>
        </ul>
    </div>
</nav>
