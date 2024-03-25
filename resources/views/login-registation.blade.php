@extends('layouts.app')
@section('title', 'E-Commerce | Home')
@section('login')
<section class="container pt-12 mx-auto">
    <div class="">
        <div class="max-w-sm mx-auto">
            <ul class="flex space-x-4" id="">
                <li><button class="px-20 py-1 bg-white focus:border-b-2 focus:border-red-600 focus:text-red-600" id="" type="button" aria-controls="dropdown-login" data-collapse-toggle="dropdown-login">Login</button>
                </li>
                <li><button class="px-12 py-1 bg-white focus:border-b-2 focus:border-red-600 focus:text-red-600" id="" type="button" aria-controls="dropdown-registration" data-collapse-toggle="dropdown-registration">Registration</button></li>
            </ul>
        </div>

        <div class="pt-8">
            <ul id="dropdown-login">
                <form class="max-w-sm mx-auto">
                    <div class="mb-5">

                        <input type="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Enter email/phone number" required />
                    </div>
                    <div class="mb-5">

                        <input type="password" id="password"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Password"
                            required />
                    </div>

                    <div class="flex items-start mb-5">
                        <div class="flex items-center h-5">
                            <input id="terms" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                required />
                        </div>
                        <label for="terms" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Keep me logged in</label>
                    </div>
                    <button type="submit" class="text-white w-full bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login Now</button>

                    <div class="text-sm text-center text-gray-500 py-2.5">
                        <a href="#" class="border-b border-gray-300">Forgot your password?</a>
                    </div>
                </form>
        </div>
        <div class="">
            <ul id="dropdown-registration">
            <form class="max-w-sm mx-auto">
                <div class="mb-5">

                    <input type="text" id="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Ener Your Name" required />
                </div>
                <div class="mb-5">

                    <input type="text" id="number"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="01xxxxxxxxx" required />
                </div>
                <div class="mb-5">

                    <input type="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Enter email address (example@example.com)" required />
                </div>
                <div class="mb-5">

                    <input type="password" id="password"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Enter Password (Minimum 8 Charectar)"
                        required />
                </div>
                <div class="mb-5">

                    <input type="password" id="repeat-password"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Enter confirm-password"
                        required />
                </div>

                <button type="submit" class="text-white w-full bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">CREATE ACCOUNT</button>
            </form>
        </ul>
        </div>
    </div>
    </div>
    {{-- <div class="row">

        <div class="col-12">
            <div class="login-reg-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation"><button class="nav-link active" id="login-tab"
                            data-bs-toggle="tab" data-bs-target="#login-tab-pane" type="button" role="tab"
                            aria-controls="login-tab-pane" aria-selected="true">login</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="reg-tab" data-bs-toggle="tab"
                            data-bs-target="#reg-tab-pane" type="button" role="tab" aria-controls="reg-tab-pane"
                            aria-selected="false" tabindex="-1">registration</button></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="login-tab-pane" role="tabpanel"
                        aria-labelledby="login-tab" tabindex="0">
                        <form action="https://www.fashion.softitglobal.xyz/login" method="POST">
                            <input type="hidden" name="_token" value="fTZSTCaozC3CVedU9AMGvGtzZqQMvvUtoZZDlhbc">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control"
                                    placeholder="Enter email / phone number">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="psw" name="password" required="">
                            </div>
                            <input type="checkbox" name="remember" id="remember" class=""> &nbsp; Keep me logged in
                            <button type="submit" class="btn btn-primary login-btn">Login Now</button>
                            <div class="text-center w-100">
                                <a class="forget-pass" data-bs-toggle="modal" href="#forget-pass">Forgot your
                                    password?</a>

                            </div>
                        </form>
                        <div class="modal fade" id="forget-pass" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"
                            style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Forgot Password</h1>
                                    </div>
                                    <div class="modal-body" id="forgot_modal_body">
                                        <label for="">Email/Phone</label><input type="text" name="email_or_phone"
                                            class="form-control" placeholder="Enter email / phone number">
                                        <div class="text-danger"></div>
                                        <small>please enter the email/phone that register here.</small>
                                    </div>
                                    <div class="modal-footer" id="forgot_modal_footer"><button type="button"
                                            class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button><button
                                            type="button" class="btn btn-outline-dark">Send Code</button></div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav social-login-nav">
                            <li class="nav-item"></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="reg-tab-pane" role="tabpanel" aria-labelledby="reg-tab" tabindex="0">
                        <form action="https://www.fashion.softitglobal.xyz/register" method="POST">
                            <input type="hidden" name="_token" value="fTZSTCaozC3CVedU9AMGvGtzZqQMvvUtoZZDlhbc">
                            <div class="row g-0">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <input type="text" class="mb-0 form-control" placeholder="Enter Your name"
                                        name="name">
                                    <div class="mb-3 text-danger"></div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 " id="phone-code">
                                    <input type="text" class="mb-0 form-control" placeholder="01XXXXXXXXX" name="phone">
                                    <div class="mb-3 text-danger"></div>
                                </div>
                                <div class="col-md-12 " id="email">
                                    <input type="email" name="email" class="form-control "
                                        placeholder="Enter email address (example@example.com)">
                                </div>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="psw"
                                    placeholder="Enter Password (Minimum 8 Charactar)"
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                    required="">

                                <div class="mb-3 text-danger"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control" id="psw"
                                    placeholder="Enter confirm-password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                    required="">
                            </div>
                            <button type="submit" class="mt-0 btn btn-primary login-btn">create account</button>
                        </form>
                        <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Verification Code</h1>
                                    </div>
                                    <div class="modal-body">
                                        <label for="">Code</label><input type="text" class="form-control"
                                            placeholder="verification code">
                                        <div class="text-danger"></div>
                                        <small>please check your number for the verification code.</small>
                                    </div> --}}

<div>

</div>
</section>
@endsection
