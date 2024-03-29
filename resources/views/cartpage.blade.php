@extends('layouts.app')
@section('title', 'E-Commerce | Home')
@section('order')

    <section class="container pt-12 mx-auto">
        <div class="grid grid-cols-12 lg:gap-8">
            <div class="col-span-12 lg:col-span-6 lg:justify-self-end">


                <form class="border-2 border-gray-300 rounded-md w-auto lg:w-[650px]">
                    <h4 class="px-12 font-bold text-center border-b">অর্ডার কনফার্ম করতে আপনার নাম, ঠিকানা, মোবাইল নাম্বার
                        লিখে অর্ডার কনফার্ম করুন বাটনে ক্লিক করুন</h4>
                    <div class="p-4 bg-white rounded-md">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="email" name="floating_email" id="floating_email"
                                class="block w-full px-2 py-4 text-sm text-gray-900 bg-transparent border-gray-300 rounded-md appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="floating_email"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-6 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 px-2 font-bold">আপনার
                                নাম</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="password" name="floating_password" id="floating_password"
                                class="block w-full px-2 py-4 text-sm text-gray-900 bg-transparent border-gray-300 rounded-md appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="floating_password"
                                class="peer-focus:font-medium px-2 absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-6 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-bold">আপনার
                                মোবাইল নাম্বার</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="password" name="floating_password" id="floating_password"
                                class="block w-full px-2 py-4 text-sm text-gray-900 bg-transparent border-gray-300 rounded-md appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="floating_password"
                                class="peer-focus:font-medium px-2 absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-6 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 font-bold">আপনার
                                সম্পূর্ন ঠিকানা</label>
                        </div>

                        <div>
                            <div class="mb-3 form-floating">
                                <div class="input-group" style="margin-bottom: 25px;">
                                    <input selected="" type="radio" value="21"
                                        class="charge_radio delivery_charge_id" id="ship_21" data-shippingid="21"
                                        name="shipping_method" data-shipping="60">
                                    &nbsp;&nbsp;
                                    <label for="ship_21" class="font-bold ">ঢাকার ভিতরে - 60৳</label>
                                </div>
                                <div class="input-group" style="margin-bottom: 25px;">
                                    <input selected="" type="radio" value="22"
                                        class="charge_radio delivery_charge_id" id="ship_22" data-shippingid="22"
                                        name="shipping_method" data-shipping="120">
                                    &nbsp;&nbsp;
                                    <label for="ship_22" class="font-bold ">ঢাকার বাইরে - 120৳</label>
                                </div>

                            </div>


                        </div>

                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>

                </form>

            </div>
            <div class="col-span-12 lg:col-span-6 lg:justify-self-start">
                <div class="border-2 w-auto lg:w-[650px] rounded-md overflow-auto">
                    <h4 class="px-12 font-bold text-center border-b">অর্ডার ইনফরমেশন</h4>


                    <div class="relative p-3 overflow-x-auto bg-white">
                        <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 border">
                                        <span class="sr-only"></span>
                                    </th>
                                    <th scope="col" class="px-2 py-3 border">
                                        Image
                                    </th>
                                    <th scope="col" class="px-2 py-3 border">
                                        Product Name
                                    </th>
                                    <th scope="col" class="px-2 py-3 border">
                                        Size
                                    </th>
                                    <th scope="col" class="px-2 py-3 border">
                                        Color
                                    </th>
                                    <th scope="col" class="px-2 py-3 border">
                                        Quantity
                                    </th>
                                    <th scope="col" class="px-2 py-3 border">
                                        Product Price
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <template x-for="item in $store.cart.items" :key="item.id">
                                    <tr
                                        class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="p-4 text-center border">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-6 h-6">
                                                <path fill-rule="evenodd"
                                                    d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                                                    clip-rule="evenodd" />
                                            </svg>

                                        </td>
                                        <td class="p-2 border">
                                            <img src="{{ asset('uploads/products/womens-saree-s6.jpg') }}"
                                                class="w-6 max-w-full max-h-full md:w-24" alt="">
                                        </td>
                                        <td x-text="item.name" class="px-2 py-4 font-semibold text-gray-900 border dark:text-white">

                                        </td>
                                        <td class="px-2 py-4 font-semibold text-gray-900 border dark:text-white">

                                        </td>
                                        <td class="px-2 py-4 font-semibold text-gray-900 border dark:text-white">
                                            default
                                        </td>
                                        <td class="px-2 py-4 border">
                                            <div class="flex items-center">
                                                <button
                                                    class="inline-flex items-center justify-center w-6 h-6 p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full me-3 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                                    type="button">
                                                    <span class="sr-only">Quantity button</span>
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 18 2">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                    </svg>
                                                </button>
                                                <div>
                                                    <input x-model="item.quantity" type="number" id="first_product"
                                                        class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        placeholder="1" required />
                                                </div>
                                                <button
                                                    class="inline-flex items-center justify-center w-6 h-6 p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full ms-3 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                                    type="button">
                                                    <span class="sr-only">Quantity button</span>
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 18 18">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                        <td x-text="item.price" class="px-2 py-4 font-semibold text-gray-900 border dark:text-white"></td>
                                    </tr>
                                </template>

                                <tr
                                    class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="p-4 text-center border">


                                    </td>
                                    <td class="p-2 border">

                                    </td>
                                    <td class="px-2 py-3 font-semibold text-gray-900 border dark:text-white">

                                    </td>
                                    <td class="px-2 py-4 font-semibold text-gray-900 border dark:text-white">

                                    </td>
                                    <td class="px-2 py-4 font-semibold text-gray-900 border dark:text-white">

                                    </td>
                                    <td class="px-2 py-4 font-semibold border">
                                        Subtotal
                                    </td>
                                    <td class="px-2 py-4 font-semibold text-gray-900 border dark:text-white">3250 ৳</td>
                                </tr>
                                <tr
                                    class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="p-4 text-center border">


                                    </td>
                                    <td class="p-2 border">

                                    </td>
                                    <td class="px-2 py-3 font-semibold text-gray-900 border dark:text-white">

                                    </td>
                                    <td class="px-2 py-4 font-semibold text-gray-900 border dark:text-white">

                                    </td>
                                    <td class="px-2 py-4 font-semibold text-gray-900 border dark:text-white">

                                    </td>
                                    <td class="px-2 py-4 font-semibold border">
                                        Shipping
                                    </td>
                                    <td class="px-2 py-4 font-semibold text-gray-900 border dark:text-white">60 ৳</td>
                                </tr>
                                <tr
                                    class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="p-4 text-center border">


                                    </td>
                                    <td class="p-2 border">

                                    </td>
                                    <td class="px-2 py-3 font-bold text-gray-900 border dark:text-white">

                                    </td>
                                    <td class="px-2 py-4 font-bold text-gray-900 border dark:text-white">

                                    </td>
                                    <td class="px-2 py-4 font-bold text-gray-900 border dark:text-white">

                                    </td>
                                    <td class="px-2 py-4 font-bold border">
                                        Total
                                    </td>
                                    <td class="px-2 py-4 font-bold text-gray-900 border dark:text-white">3310 ৳</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="border">

                        <div class="grid grid-cols-5 p-4">
                            <div class="col-span-3 ">
                                <div class="p-3 border border-gray-300">
                                    <span>অ্যাকাউন্ট থাকলে লগিন করুন</span>
                                    <a href="#"
                                        class="px-2 py-1 text-sm text-white bg-green-600 rounded-md">Login</a>
                                </div>
                            </div>
                            <div class="col-span-2 ">
                                <div class="p-3 border border-gray-300">
                                    <a href="#" class="px-2 py-1 text-white bg-blue-600 rounded-md">কূপন থাকলে
                                        এপ্লাই করুন</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
