<?php
/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 18.02.17
 * Time: 18:42
 */
?>

<div id="home">
    <div class="container">
        <div class="space_row"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="h1 text-center heading_font sansita_font">
                    hi! do you want to learn english?
                </div>
            </div>
        </div>
        <div class="space_row"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="h4 text-center">
                    Do you have an account? Log in!
                </div>
            </div>
            <div class="col-md-12 button_area">
                <!--<a href="#/login" class="btn btn-primary btn-block btn-lg home_button sansita_font" id="login_button">
                    Log in
                </a>-->
                <button type="button" class="btn btn-primary btn-block btn-lg home_button sansita_font" data-toggle="modal" data-target="#loginModalArea">
                    Log in
                </button>
            </div>
        </div>
        <div class="space_row"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="h4 text-center">
                    Are you new? Join us!
                </div>
            </div>
            <div class="col-md-12">
                <!--<a href="#/register" class="btn btn-primary btn-block btn-lg home_button sansita_font">
                    Register now
                </a>-->
                <button type="button" class="btn btn-primary btn-block btn-lg home_button sansita_font" data-toggle="modal" data-target="#registerModalArea">
                    Register now
                </button>
            </div>
        </div>
    </div>
    <div id="home_footer">
        English App 2017 &copy; | created by Iwona 'SZEFOW4' Lalak
    </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModalArea" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="loginModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Log in existing account</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>
                                Login:
                            </label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" ng-model="vm.user_login" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>
                                Password:
                            </label>
                        </div>
                        <div class="col-md-8">
                            <input type="password" class="form-control" ng-model="vm.user_password"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <a href="" id="forgot_pass">I forgot my pass</a>
                    </div>
                    <div class="col-md-3 col-md-offset-3 col-xs-6 col-xs-5 col-xs-offset-1">
                        <button type="submit" class="btn btn-pink btn-block" ng-click="vm.logIn(vm.user_login,vm.user_password)">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModalArea" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="registerModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Create new account</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>
                                Login:
                            </label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>
                                Password:
                            </label>
                        </div>
                        <div class="col-md-8">
                            <input type="password" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>
                                E-mail:
                            </label>
                        </div>
                        <div class="col-md-8">
                            <input type="email" class="form-control" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-6 col-xs-6">

                    </div>
                    <div class="col-md-3 col-md-offset-3 col-xs-6 col-xs-5 col-xs-offset-1">
                        <button type="button" class="btn btn-pink btn-block">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>