<?php
/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 16.03.17
 * Time: 15:37
 */
?>
<div english-navbar></div>

<div id="test">
    <div class="container">

        <!-- space -->
        <div style="height: 100px"></div>

        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12 col-lg-6">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-xs-5">
                                    <label>
                                        Choose type of words
                                    </label>
                                </div>
                                <div class="col-md-8 col-lg-8 col-xs-5">
                                    <!--<select class="form-control">
                                        <option>unknow</option>
                                        <option>know</option>
                                        <option>both</option>
                                    </select>-->
                                    <div class="radio-inline">
                                        <input type="radio" class="radio" name="type_of_words" checked="checked"/>
                                        <span>unknow</span>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" class="radio" name="type_of_words"/> <span>know</span>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" class="radio" name="type_of_words"/> <span>both</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 col-lg-6">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-xs-5">
                                    <label>
                                        Choose quantity
                                    </label>
                                </div>
                                <div class="col-md-8 col-lg-8 col-xs-5">
                                    <!--<div class="radio-inline">
                                        <input type="radio" class="radio" name="type_of_words" checked="checked"/>
                                        <span>low</span>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" class="radio" name="type_of_words"/> <span>medium</span>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" class="radio" name="type_of_words"/> <span>high</span>
                                    </div>-->
                                    <input type="number" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2 col-lg-2 col-xs-3">
                            <label>
                                Choose categories
                            </label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-xs-8" id="place_for_tags">
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>jedzenie</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>czasowniki</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>sport i zdrowie</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>rozrywka</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>przymiotniki</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>wyrażenia</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>jedzenie</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>czasowniki</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>sport i zdrowie</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>rozrywka</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>przymiotniki</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>wyrażenia</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>jedzenie</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>czasowniki</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>sport i zdrowie</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>rozrywka</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>przymiotniki</span>
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" class="checkbox "/> <span>wyrażenia</span>
                            </div>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xs-1">
                            <button id="selectAllTags" type="button" class="btn btn-default btn-block btn-xs btn-navy" ng-click="vm.selectAllTags()">
                                Select all
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-pink btn-block">
                                Generate test
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

            </div>
        </div>

    </div>
</div>

<div english-footer></div>