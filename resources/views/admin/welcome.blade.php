@extends ("admin.layouts.registro")
@section("contenido")

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0">
                                <div class="text-center mb-1">
                                    <img src="admin/images/logo/logo.png" alt="branding logo">
                                </div>
                                <div class="font-large-1  text-center">
                                    Ingresa tu registro
                                </div>
                            </div>
                            <div class="card-content">

                                <div class="card-body">
                                    <form class="form-horizontal" action="index.html" novalidate>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control round" id="user-name"
                                                placeholder="Usuario" required>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control round" id="user-password"
                                                placeholder="Contraseña" required>
                                            <div class="form-control-position">
                                                <i class="ft-lock"></i>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-sm-left">

                                            </div>
                                            <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a
                                                    href="recover-password.html" class="card-link">¿Olvidaste contraseña?</a>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit"
                                                class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Ingresar</button>
                                        </div>

                                    </form>
                                </div>
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-2 ">
                                    <span>iniciar seccion con redes sociales</span></p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-facebook"><span
                                            class="ft-facebook"></span></a>
                                    <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-twitter"><span
                                            class="ft-twitter"></span></a>
                                    <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-instagram"><span
                                            class="ft-instagram"></span></a>
                                </div>

                                <p class="card-subtitle text-muted text-right font-small-3 mx-2 my-1"><span>No tienes cuenta? <a href="register.html" class="card-link">Registrate</a></span></p>
                            </div>
                        </div>
                    </div>
                </div>

                @endsection