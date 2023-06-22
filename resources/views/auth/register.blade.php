@extends('layout.auth')

@section('content')
    
        <!-- Outer Row -->
        <div class="row justify-content-center">



            <div class="col-xl-5 col-lg-12 col-md-9">

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @error('name')
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    @error('email')
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif


                        @error('password')
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif


                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body p-3">
                                    <!-- Nested Row within Card Body -->
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                                </div>
                                                <form class="user" method="POST" action="/create">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control form-control-user"
                                                            autocomplete="on" placeholder="Enter Name...">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control form-control-user"
                                                            id="exampleInputEmail" aria-describedby="emailHelp" autocomplete="on"
                                                            placeholder="Enter Email Address...">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="password"
                                                            class="form-control form-control-user" id="exampleInputPassword"
                                                            autocomplete="on" placeholder="Password">
                                                    </div>

                                                    <button type="submit" name="submit"
                                                        class="btn btn-primary btn-user btn-block">
                                                        Create
                                                    </button>

                                                    <hr>

                                                </form>
                                                <hr>
                                                <div class="text-center">
                                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                                </div>
                                                <div class="text-center">
                                                    <a class="small" href="login">Login</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

             @endsection