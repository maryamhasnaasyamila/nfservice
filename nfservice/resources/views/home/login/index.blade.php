@extends('home.layout.login')
@section('content')
    <main>
        <div class="container">
            <div class="login-box">
                <div class="profile">
                    <div class="btn-back">
                        <div class="btn-back">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <img src="/home/assets/logo.png" alt="logo" />
                </div>
                <div class="details">
                    <img src="/home/assets/pict-login.png" alt="GAMBAR" />
                    <div class="detail-box">
                        <div class="greeting-msg">
                            <h1>Hello!</h1>
                            <h2>Welcome Back :)</h2>
                            <p>
                                To keep connected with us please login with your personal
                                information by email address and password
                            </p>
                        </div>
                        <div class="form">
                            <form>
                                <div class="form-login">
                                    <div class="form-group email-box">
                                        <!-- <i class="bi bi-envelope"></i> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                                        </svg>

                                        <div class="field">
                                            <label for="inputEmail">Email Address</label>
                                            <input type="email" class="form-control" id="inputEmail"
                                                placeholder="example@gmail.com" />
                                        </div>
                                    </div>
                                    <div class="form-group password-box">
                                        <!-- <i class="bi bi-lock"></i> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                            <path
                                                d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1" />
                                        </svg>
                                        <div class="field">
                                            <label for="inputPassword">Password</label>
                                            <input type="password" class="form-control" id="inputPassword"
                                                placeholder="example123" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-check check-box">
                                    <div class="remember">
                                        <input type="checkbox" class="form-check-input" id="rememberMe" />
                                        <label class="form-check-label" for="rememberMe">Remember Me</label>
                                    </div>
                                    <a href="#" id="forgotPassword">Forgot Password?</a>
                                </div>
                                <div class="button">
                                    <button type="submit" class="btn-login">Login Now</button>
                                    <button type="submit" class="btn-create">
                                        Create Account
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </main>
@endsection
