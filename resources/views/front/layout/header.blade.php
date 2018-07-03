<div class="d-flex flex-row mt-2 align-items-center">
    <div class="col-6 d-flex justify-content-end text-secondary p-0 text-dark h1">FUN</div>
    <div class="col-6 d-flex justify-content-end text-secondary align-items-center p-0">
        <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#login-submit">Sign in</button>
        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#register-submit">Sign up</button>
    </div>
</div>
{{-- Modal sign up --}}
<div class="modal fade" id="register-submit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="#" method="post">
                    <div class="form-group">
                        <label for="exampleInputUsername">UserName</label>
                        <input type="text" class="form-control" id="reg-user" placeholder="Username">
                        <small id="error-user" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="reg-email" aria-describedby="emailHelp" placeholder="Email">
                        <small id="error-email" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="reg-pass" placeholder="Password">
                        <small id="error-pass" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="reg-repass" placeholder="Password">
                        <small id="error-repass" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-primary reg-alert">SIGN UP</button>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Modal Sign in --}}
<div class="modal fade" id="login-submit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="#" method="post">
                    <div class="form-group">
                        <label for="exampleInputUsername">UserName</label>
                        <input type="text" class="form-control" id="login-user" placeholder="Username">
                        <small id="login-user-alert" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="login-pass" placeholder="Password">
                        <small id="login-pass-alert" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remenber Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary login-alert">SIGN IN</button>
                </form>
            </div>
        </div>
    </div>
</div>