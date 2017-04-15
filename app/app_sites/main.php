<div english-navbar></div>


<div id="main" ng-controller="mainController">
    <div class="container">

        <div class="row" id="say_hello">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Hello user!
                        <small>
                            Ready for study?
                        </small>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-3 col-xs-6" id="user_avatar">
                <div class="thumbnail">
                    <img src="images/default_avatar.jpg"/>
                </div>
            </div>
            <div class="col-md-6 col-xs-6" id="user_data">
                <div class="h3">
                    Kot student
                </div>
                <div class="h4">
                    Your score:
                </div>
                <div class="h4">
                    Last visit:
                </div>
            </div>
            <div class="col-md-3 col-xs-12" id="user_buttons">
                <a class="btn btn-default btn-block btn-pink"><span class="glyphicon glyphicon-cog"></span> Account
                    Settings</a>
                <a class="btn btn-default btn-block btn-pink"><span class="glyphicon glyphicon-picture"></span> Change
                    your avatar</a>
                <a class="btn btn-default btn-block btn-pink"><span class="glyphicon glyphicon-lock"></span> Change
                    password</a>
            </div>
        </div>

        <div class="row" id="sections">
            <div class="col-md-4 col-xs-12">
                <a class="thumbnail" id="section_words" href="#/words">
                    <span class="glyphicon glyphicon-list-alt"></span>
                    <p>
                        words
                    </p>
                </a>
            </div>
            <div class="col-md-4 col-xs-12">
                <a class="thumbnail" id="section_tests" href="#/tests">
                    <span class="glyphicon glyphicon-blackboard"></span>
                    <p>
                        tests
                    </p>
                </a>
            </div>
            <div class="col-md-4 col-xs-12">
                <a class="thumbnail" id="section_stats" href="#/stats">
                    <span class="glyphicon glyphicon-stats"></span>
                    <p>
                        stats
                    </p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="thumbnail" id="section_about">
                    <div data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
                         aria-controls="collapseExample">
                        <span>about this app</span>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <p class="text-justify">
                            Hi, I'm Iwona and I created this app. I hope you will increase your language skills thorough
                            using this app. It's hard to remember all words, sometimes they run away from our head, even
                            if we've known already. But when they are in one place, it's much
                            easier to find interested us word. This app also give opportunity to mark with special tags,
                            which you can define at your own. You can also test your skills by generate and solve tests
                            from words you've added.
                            <br/>
                        <p style="text-align:center;font-size:16px;">So, have a nice learning :) Enjoy!</p>

                        </p>


                    </div>
                </div>
            </div>
        </div>

        <div style="height: 200px;"></div>

        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary" ng-click="vm.doSomething()">click me</button>
            </div>
            <div class="col-md-12">
                 <span id="areaForSomething">
                     dfddf
                 </span>
                <table class="table">
                    <tr>
                        <td>imie</td>
                        <td>nazwisko</td>
                        <td>numer</td>
                    </tr>
                    <tr ng-repeat="user in vm.users">
                        <td>{{user.firstname}}</td>
                        <td>{{user.surname}}</td>
                        <td>{{user.number}}</td>
                    </tr>
                </table>
            </div>
        </div>


        <div style="height: 200px"></div>

        <div class="row">
            <div class="col-md-12">
                <a ng-click="changeSection('sekcja1')">1</a>
                <a ng-click="changeSection('sekcja2')">2</a>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div ng-show="currentSection=='sekcja1'">
                    sekcja1
                </div>
                <div ng-show="currentSection=='sekcja2'">
                    sekcja2
                </div>
            </div>
        </div>


        <div style="height: 200px"></div>


    </div>
</div>


<div english-footer></div>