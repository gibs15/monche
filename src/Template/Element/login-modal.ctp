

    <!-- Modal Login-->
    <div class="modal fade" id="modal-login">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title text-white" id="modal-title"></h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card">
                    <ul class="nav nav-tabs nav-tabs-card">
                        <li class="nav-item">
                            <a class="nav-link active" href="#login-tab" data-toggle="tab">Ingresar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#resgister-tab" data-toggle="tab">Registrarse</a>
                        </li>
                    </ul>
                    
                    <div class="card-body tab-content">
                        <!--first tab-->
                        <div class="tab-pane active" id="login-tab">
                            <div class="modal-body">
                                <div class="card navbar-shadow">
                                    <div class="card-header text-center">
                                        <h4 class="card-title">Ingreso</h4>
                                        <p class="card-subtitle">Accede a tu cuenta </p>
                                    </div>
                                    <div class="card-body">

                                        <?= $this->Form->create(null,['id' => 'login-form']) ?>
                                        <fieldset>
                                            <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                    <input id="username" name="username" type="email" required="required" class="form-control form-control-prepended" placeholder="Correo Electrónico" pattern="\S+@\w+\.\w+">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <span class="far fa-envelope"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                    <input id="password" name="password" type="password" required="required" class="form-control form-control-prepended" placeholder="Contraseña">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <span class="far fa-key"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <button id="login" name="login" type="submit" class="btn btn-primary btn-block">Ingresar</button>
                                            </div>
             
                                        </fieldset>
                                        <?= $this->Form->end() ?>
                                    </div>
                                    <div class="card-footer text-center text-black-50">
                                        ¿No tienes cuenta? <a href="#resgister-tab" data-toggle="tab">Regístrate</a>
                                    </div>
                                </div>    
                            </div>
                
                        </div>

                        <!--second tab-->
                        <div class="tab-pane" id="resgister-tab">
                            <div class="modal-body">
                                <div class="card navbar-shadow">
                                    <div class="card-header text-center">
                                        <h4 class="card-title">Registro</h4>
                                        <p class="card-subtitle">Crea una cuenta </p>
                                    </div>
                                    <div class="card-body">

                             

                                        <?= $this->Form->create(null,['id' => 'register-form']) ?>
                                        <fieldset>
                                            <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                    <input id="name" name="name" type="text" required="" class="form-control form-control-prepended" placeholder="Nombre Completo">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <span class="far fa-user"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                    <input id="email" name="email" type="email" required="required" class="form-control form-control-prepended" placeholder="Correo Electrónico" pattern="\w+@\w+.\w{3}">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <span class="far fa-envelope"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                    <input id="passwd" name="password" type="password" required="required" class="form-control form-control-prepended" placeholder="Escoja su contraseña">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <span class="far fa-key"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                    <input id="passwd2" name="password2" type="password" required="required" class="form-control form-control-prepended" placeholder="Confirme su contraseña">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <span class="far fa-key"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                    <input id="phone" name="phone" type="text" required="" class="form-control form-control-prepended" placeholder="Teléfono">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <span class="far fa-briefcase"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                    <select id="role" name="role" required="" class="form-control form-control-prepended">

                                                    <option disabled selected value> -- Tipo de usuario -- </option>
                                                    <option value="Voluntario">Voluntario</option>
                                                    <option value="Proveedor">Proveedor</option>

                                                    </select>
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <span class="far fa-briefcase"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <button id="resgister" name="resgister" type="submit" class="btn btn-primary btn-block">Crear Cuenta</button>
                                            </div>
                                            <div class="form-group text-center mb-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input id="terms" type="checkbox" class="custom-control-input" checked required="">
                                                    <label for="terms" class="custom-control-label text-black-70">Acepto los <a href="#" class="text-black-70" style="text-decoration: underline;">Términos y condiciones de uso</a></label>
                                                </div>
                                            </div>
                                            
                                        </fieldset>
                                        <?= $this->Form->end() ?>
                                    </div>
                                    <div class="card-footer text-center text-black-50">
                                        ¿Ya tienes una cuenta? <a href="#login-tab" data-toggle="tab">Ingresar</a>
                                    </div>
                                </div>    
                            </div>
                  
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>

