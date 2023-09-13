@extends('pages.layouts.auth')
@section('content')
    <div>
        {{-- Inicio do conteudo da pagina de registro --}}

        <div class="position-fixed top-0 end-0 start-0 bg-img-start"
            style="height: 32rem; background-image: url(assets/svg/components/card-6.svg);">
            <!-- Shape -->
            <div class="shape shape-bottom zi-1">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    viewBox="0 0 1921 273">
                    <polygon fill="#fff" points="0,273 1921,273 1921,0 " />
                </svg>
            </div>
            <!-- End Shape -->
        </div>

        <!-- Content -->
        <div class="container py-5 py-sm-7">
            {{-- <a class="d-flex justify-content-center mb-5" href="index.html">
                        <img class="zi-2" src="assets/svg/logos/logo.svg" alt="Image Description" style="width: 8rem;">
                    </a> --}}

            <div class="mx-auto" style="max-width: 30rem;">
                <!-- Card -->
                <div class="card card-lg mb-5">
                    <div class="card-body">
                        <!-- Form -->
                        <div class="text-center">
                            <div class="mb-5">
                                <h1 class="display-5">Sign Out</h1>
                                <p>Don't have an account ? <a href="#" wire:click="signIn" class="link">Sign in
                                        here</a></p>
                            </div>
                        </div>

                        <form class="js-validate needs-validation" wire:submit="store" novalidate>
                            <!-- Form -->
                            <div class="mb-4">
                                <label class="form-label" for="signinSrEmail">Your name</label>
                                <input type="text" class="form-control form-control-lg" wire:model="name"
                                    id="signinSrEmail" tabindex="1" placeholder="Your name" required>
                                <span class="invalid-feedback">Please enter a valid name.</span>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="signinSrEmail">Your email</label>
                                <input type="email" class="form-control form-control-lg" wire:model="email"
                                    id="signinSrEmail" tabindex="1" placeholder="email@address.com"
                                    aria-label="email@address.com" required>
                                <span class="invalid-feedback">Please enter a valid email address.</span>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="mb-4">
                                <label class="form-label w-100" for="signupSrPassword" tabindex="0">
                                    <span class="d-flex justify-content-between align-items-center">
                                        <span>Password</span>
                                    </span>
                                </label>

                                <div class="input-group input-group-merge" data-hs-validation-validate-class>
                                    <input type="password" class="js-toggle-password form-control form-control-lg"
                                        wire:model="password" id="signupSrPassword" placeholder="8+ characters required"
                                        aria-label="8+ characters required" required minlength="8"
                                        data-hs-toggle-password-options='{
                            "target": "#changePassTarget",
                            "defaultClass": "bi-eye-slash",
                            "showClass": "bi-eye",
                            "classChangeTarget": "#changePassIcon"
                            }'>
                                    <a id="changePassTarget" class="input-group-append input-group-text"
                                        href="javascript:;">
                                        <i id="changePassIcon" class="bi-eye"></i>
                                    </a>
                                </div>

                            </div>
                            <div class="mb-4">
                                <label class="form-label w-100" for="signupSrPassword" tabindex="0">
                                    <span class="d-flex justify-content-between align-items-center">
                                        <span>Password Confirmation</span>
                                    </span>
                                </label>
                                <div class="input-group input-group-merge" data-hs-validation-validate-class>
                                    <input type="password" class="js-toggle-password form-control form-control-lg"
                                        wire:model="password_confirmation" id="signupSrPassword"
                                        placeholder="8+ characters required" aria-label="8+ characters required" required
                                        minlength="8"
                                        data-hs-toggle-password-options='{
                            "target": "#changePassTarget",
                            "defaultClass": "bi-eye-slash",
                            "showClass": "bi-eye",
                            "classChangeTarget": "#changePassIcon"
                            }'>
                                    <a id="changePassTarget" class="input-group-append input-group-text"
                                        href="javascript:;">
                                        <i id="changePassIcon" class="bi-eye"></i>
                                    </a>
                                </div>

                                <span class="invalid-feedback">Please enter a valid password.</span>
                            </div>
                            <!-- End Form -->

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
                <!-- End Card -->

            </div>
        </div>

        {{-- Fim do conteudo da pagina de registro --}}
    </div>
@endsection
