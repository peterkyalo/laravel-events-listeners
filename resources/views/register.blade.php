<!doctype html>
<html lang="en">

<head>
    <title>Regiter Form with Events</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://unpkg.com/bs-brain@2.0.4/components/contacts/contact-1/assets/css/contact-1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <!-- Contact 1 - Bootstrap Brain Component -->
        <section class="bg-light py-3 py-md-5">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                        <h2 class="mb-4 display-5 text-center">Register Form</h2>
                        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-12 col-lg-9">
                        @session('success')
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endsession
                        <div class="bg-white border rounded shadow-sm overflow-hidden">
                           

                            <form action="{{ route('user.store') }}" method="POST">
                                @csrf
                                <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                                    <div class="col-12 col-md-6">
                                        <label for="first_name" class="form-label">First Name <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12" cy="6" r="4" fill="#1C274C" />
                                                    <path
                                                        d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z"
                                                        fill="#1C274C" />
                                                </svg>
                                            </span>
                                            <input type="text"
                                                class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}"
                                                name="first_name">
                                            @error('first_name')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="last_name" class="form-label">Last Name <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12" cy="6" r="4" fill="#1C274C" />
                                                    <path
                                                        d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z"
                                                        fill="#1C274C" />
                                                </svg>
                                            </span>
                                            <input type="text"
                                                class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}"
                                                name="last_name">
                                            @error('last_name')
                                                <span class="invalid-feedback">
                                                    {{ $message }}

                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="email" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                </svg>
                                            </span>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                                name="email">
                                            @error('email')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>

                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="email" class="form-label">Phone Number <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                </svg>
                                            </span>
                                            <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                                value="{{ old('phone') }}" name="phone">
                                            @error('phone')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="password" class="form-label">Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <svg width="16px" height="16px" viewBox="0 0 48 48"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <defs>
                                                        <style>
                                                            .a,
                                                            .b {
                                                                fill: none;
                                                                stroke: #000000;
                                                            }

                                                            .a {
                                                                stroke-linecap: round;
                                                                stroke-linejoin: round;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <circle class="a" cx="33.4" cy="14.8" r="3.9" />
                                                    <path class="a"
                                                        d="M20.4,20.4A11.47,11.47,0,0,1,25.6,7.1,11.31,11.31,0,0,1,39.7,9.4a11.32,11.32,0,0,1-13,17.9" />
                                                    <path class="b"
                                                        d="M20.4,20.4,5.5,37v5.4h6.1l.7-4.2,6.5-.4.5-5.5,5.5-.1,1.8-4.8" />
                                                </svg>
                                            </span>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" value="{{ old('password') }}">
                                            @error('password')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="password_confirmation" class="form-label">Confirm Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <svg width="16px" height="16px" viewBox="0 0 48 48"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <defs>
                                                        <style>
                                                            .a,
                                                            .b {
                                                                fill: none;
                                                                stroke: #000000;
                                                            }

                                                            .a {
                                                                stroke-linecap: round;
                                                                stroke-linejoin: round;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <circle class="a" cx="33.4" cy="14.8" r="3.9" />
                                                    <path class="a"
                                                        d="M20.4,20.4A11.47,11.47,0,0,1,25.6,7.1,11.31,11.31,0,0,1,39.7,9.4a11.32,11.32,0,0,1-13,17.9" />
                                                    <path class="b"
                                                        d="M20.4,20.4,5.5,37v5.4h6.1l.7-4.2,6.5-.4.5-5.5,5.5-.1,1.8-4.8" />
                                                </svg>
                                            </span>
                                            <input type="password"
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                name="password_confirmation" value="{{ old('password_confirmation') }}">

                                            @error('password_confirmation')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control @error('message') is-invalid @enderror"
                                            placeholder="Write your message here" name="message" value="">{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>