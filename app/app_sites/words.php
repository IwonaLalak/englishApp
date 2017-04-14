<?php
/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 21.03.17
 * Time: 11:46
 */

?>

<div id="words">
    <div class="container">

        <!-- space -->
        <div style="height: 100px"></div>

        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-2 col-lg-2 col-xs-12">
                            <label>English:</label>
                        </div>
                        <div class="col-md-10 col-lg-10 col-xs-12">
                            <input type="text" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2 col-lg-2 col-xs-12">
                            <label>Translation:
                                <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip"
                                      data-placement="bottom"
                                      title="you can add a few translations seperated them by a sign ;">
                            </span>
                            </label>
                        </div>
                        <div class="col-md-10 col-lg-10 col-xs-12">
                            <input type="text" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2 col-lg-2 col-xs-12">
                            <label>Tags:
                                <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip"
                                      data-placement="bottom"
                                      title="choose maching tags if you want">
                            </span>
                            </label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-xs-12">
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> jedzenie
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> czasowniki
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> sport i zdrowie
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> rozrywka
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> przymiotniki
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> wyrażenia
                            </div>

                        </div>
                        <div class="col-md-1 col-xs-12 col-lg-1">
                            <button type="button" class="btn btn-success btn-block">
                                Add word
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- space -->
        <div style="height: 30px"></div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-responsive">
                    <thead>
                    <tr>
                        <td class="col-lg-1 col-md-1 col-xs-2">
                            <span class="glyphicon glyphicon-option-vertical"></span>
                        </td>
                        <td>
                            <span class="flag-icon flag-icon-gb"></span>
                            ENG
                        </td>
                        <td>
                            <span class="flag-icon flag-icon-pl"></span>
                            TRANSLATION
                        </td>
                        <td>
                            <span class="glyphicon glyphicon-tags"></span>
                            TAGS
                        </td>
                        <td>
                            <span class="glyphicon glyphicon-check"></span>
                        </td>
                        <td>
                            <span class="glyphicon glyphicon-pencil"></span>
                            EDIT
                        </td>
                        <td>
                            <span class="glyphicon glyphicon-remove"></span>
                            REMOVE
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            1.
                        </td>
                        <td>
                            tea
                        </td>
                        <td>
                            herbata
                        </td>
                        <td>
                            jedzenie
                        </td>
                        <td>
                            <span class="glyphicon glyphicon-ok-circle"></span>
                        </td>
                        <td>
                            <button class="btn btn-warning">
                                edit
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger">
                                remove
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2.
                        </td>
                        <td>
                            tea
                        </td>
                        <td>
                            herbata
                        </td>
                        <td>
                            jedzenie
                        </td>
                        <td>
                            <span class="glyphicon glyphicon-remove-circle"></span>
                        </td>
                        <td>
                            <button class="btn btn-warning">
                                edit
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger">
                                remove
                            </button>
                        </td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
