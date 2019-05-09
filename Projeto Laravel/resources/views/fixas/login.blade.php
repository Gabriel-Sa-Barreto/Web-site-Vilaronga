@extends('layout.fixas')
    @section('conteudo')
        <div class="row text-justify d-inline mx-auto" style="width: 985;height: 450;">
            <div style="background-image: url(&quot;/img/login.jpg&quot;);height: 650px;background-position: center;background-size: cover;background-repeat: no-repeat;">
                <div class="d-flex justify-content-center align-items-center" style="height: inherit;min-height: initial;width: 100%;position: absolute;left: 0;background-color: rgba(30,41,99,0.25);">
                    <div class="d-flex align-items-center order-12" style="height:200px; width: 400px;">
                        <div class="container">
                            <div class="login-clean">
                                <form method="post">
                                    <h2 class="sr-only">Login Form</h2>
                                    <div class="illustration">
                                        <ion-icon name="contact"></ion-icon>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop