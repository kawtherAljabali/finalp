@extends('dashboard_layouts.admin_main_login')

@section('content')

    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                           <h3 style="color: orange"> kabe shop</h3>
                        </div>
                        <div class="login-form">
                            <form action="/dashboard/adminlogin" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email"
                                           placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password"
                                           placeholder="Password" required>
                                </div>

                                <button style="background: orange !important" class="au-btn au-btn--block au-btn--green m-b-20"  type="submit">sign in</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
