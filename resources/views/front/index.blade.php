@extends('layouts.front')
@section('title', 'Home')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- page banner -->
        <div class="row">
            <div class="col-md-12 home-banner">
                <div class="intro-message">
                    <h1 class="text-right hidden">Welcome to Tennis Tour</h1>
                </div>
            </div>
        </div>
        <!-- main content -->
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <section class="row">
                        {{--featured--}}
                        <div class="col-md-6">
                            <h3 class="text-uppercase m0-top">Featured</h3>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="http://placekitten.com/100/100">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Post Title</h4>
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
                                    <ul class="list-inline list-unstyled">
                                        <li><i class="fa fa-video-camera"></i></li>
                                        <li><a href="#">Tournament</a> / <a href="#">Category</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="http://placekitten.com/100/100">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Post Title</h4>
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
                                    <ul class="list-inline list-unstyled">
                                        <li><i class="fa fa-newspaper-o"></i></li>
                                        <li><a href="#">Tournament</a> / <a href="#">Category</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="http://placekitten.com/100/100">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Post Title</h4>
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
                                    <ul class="list-inline list-unstyled">
                                        <li><i class="fa fa-camera"></i></li>
                                        <li><a href="#">Tournament</a> / <a href="#">Category</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{--latest resutls table --}}
                        <div class="col-md-6 latest-data">
                            <h3 class="text-uppercase m0-top">Latest</h3>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#scores" aria-controls="home" role="tab" data-toggle="tab">Scores</a></li>
                                <li role="presentation"><a href="#schedule" aria-controls="profile" role="tab" data-toggle="tab">Schedule</a></li>
                                <li role="presentation"><a href="#ranking" aria-controls="messages" role="tab" data-toggle="tab">Ranking</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                {{--scores--}}
                                <div role="tabpanel" class="tab-pane active" id="scores">
                                    <div class="data-box">
                                        {{--table 1--}}
                                        <div class="panel panel-primary">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading">
                                                <span>Location</span> > <span>Tournament</span> > <span>Stage</span>
                                            </div>
                                            <div class="panel-body">
                                                <!-- Table-->
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Pts</th>
                                                            <th>1</th>
                                                            <th>2</th>
                                                            <th>3</th>
                                                            <th>4</th>
                                                            <th>5</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <td>
                                                                <button class="btn btn-primary">view stats</button>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>Player 1 (Country) <span class="pull-right"><i class="fa fa-check"></i></span></td>
                                                            <td></td>
                                                            <td>6</td>
                                                            <td>7</td>
                                                            <td>3</td>
                                                            <td>6</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Player 2 (Country)</td>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td>5</td>
                                                            <td>6</td>
                                                            <td>7</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        {{--table 2--}}
                                        <div class="panel panel-primary hidden">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading">
                                                <span>Location</span> > <span>Tournament</span> > <span>Stage</span>
                                            </div>
                                            <div class="panel-body">
                                                <!-- Table-->
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Pts</th>
                                                        <th>1</th>
                                                        <th>2</th>
                                                        <th>3</th>
                                                        <th>4</th>
                                                        <th>5</th>
                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-primary">view stats</button>
                                                        </td>
                                                    </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    <tr>
                                                        <td>Player 1 (Country) <span class="pull-right"><i class="fa fa-check"></i></span></td>
                                                        <td></td>
                                                        <td>6</td>
                                                        <td>7</td>
                                                        <td>3</td>
                                                        <td>6</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Player 2 (Country)</td>
                                                        <td></td>
                                                        <td>3</td>
                                                        <td>5</td>
                                                        <td>6</td>
                                                        <td>7</td>
                                                        <td></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        {{--table 3--}}
                                        <div class="panel panel-primary hidden">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading">
                                                <span>Location</span> > <span>Tournament</span> > <span>Stage</span>
                                            </div>
                                            <div class="panel-body">
                                                <!-- Table-->
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Pts</th>
                                                        <th>1</th>
                                                        <th>2</th>
                                                        <th>3</th>
                                                        <th>4</th>
                                                        <th>5</th>
                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-primary">view stats</button>
                                                        </td>
                                                    </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    <tr>
                                                        <td>Player 1 (Country) <span class="pull-right"><i class="fa fa-check"></i></span></td>
                                                        <td></td>
                                                        <td>6</td>
                                                        <td>7</td>
                                                        <td>3</td>
                                                        <td>6</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Player 2 (Country)</td>
                                                        <td></td>
                                                        <td>3</td>
                                                        <td>5</td>
                                                        <td>6</td>
                                                        <td>7</td>
                                                        <td></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--schedule--}}
                                <div role="tabpanel" class="tab-pane" id="schedule">
                                    <div class="data-box">
                                        <div class="panel panel-primary schedule text-center">
                                            <div class="panel-heading text-center">
                                                <span class="text-capitalize">Men's singles - round 1</span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <p>Player 1 <span>(country)</span></p>
                                                    </div>
                                                    <div class="col-md-2">vs</div>
                                                    <div class="col-md-5">
                                                        <p>Player 2 <span>(country)</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary schedule text-center">
                                            <div class="panel-heading text-center">
                                                <span class="text-capitalize">Women's singles - round 1</span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <p>Player 1 <span>(country)</span></p>
                                                    </div>
                                                    <div class="col-md-2">vs</div>
                                                    <div class="col-md-5">
                                                        <p>Player 2 <span>(country)</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--ranking--}}
                                <div role="tabpanel" class="tab-pane" id="ranking">...</div>
                            </div>
                        </div>
                    </section>
                </div>
                {{--adbar 1--}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="adbar-1">
                            <img src="http://placehold.it/1600x120/ffffff/333333/?text=Advertisement" class="img-responsive center-block" alt="Advert banner 1">
                        </div>
                    </div>
                </div>
                {{--recent updates--}}
                <div class="container">
                    <section class="">
                        <h3 class="text-uppercase text-center">Recent Updates</h3>
                        <div class="row">
                            {{--news--}}
                            <div class="col-md-4 col-sm-6 col-xs-12 recent-updates">
                                <div class="card">
                                    <div class="card-image">
                                        <img class="img-responsive" src="http://placekitten.com/400/250">
                                        <span class="card-title">News</span>
                                        <span class="card-title-icon"><i class="fa fa-newspaper-o"></i></span>
                                    </div>

                                    <div class="card-content p0-left">
                                        {{--<p>Cards for display in portfolio style material design by Google.</p>--}}
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-play"></i> <a href="#">Baseline: Tennis Nigeria</a></li>
                                            <li><i class="fa fa-play"></i> <a href="#">Post title 1</a></li>
                                            <li><i class="fa fa-play"></i> <a href="#">Post title 1</a></li>
                                            <li><i class="fa fa-play"></i> <a href="#">Post title 1</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-action">
                                        <a href="#" target="new_blank">more...</a>
                                    </div>
                                </div>
                            </div>
                            {{--videos--}}
                            <div class="col-md-4 col-sm-6 col-xs-12 recent-updates">
                                <div class="card">
                                    <div class="card-image">
                                        <img class="img-responsive" src="http://placekitten.com/400/250">
                                        <span class="card-title">Videos</span>
                                        <span class="card-title-icon"><i class="fa fa-video-camera"></i></span>
                                    </div>

                                    <div class="card-content p0-left">
                                        {{--<p>Cards for display in portfolio style material design by Google.</p>--}}
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-play"></i> <a href="#">Baseline: Tennis Nigeria</a></li>
                                            <li><i class="fa fa-play"></i> <a href="#">Post title 1</a></li>
                                            <li><i class="fa fa-play"></i> <a href="#">Post title 1</a></li>
                                            <li><i class="fa fa-play"></i> <a href="#">Post title 1</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-action">
                                        <a href="#" target="new_blank">more...</a>
                                    </div>
                                </div>
                            </div>
                            {{--photos--}}
                            <div class="col-md-4 col-sm-6 col-xs-12 recent-updates">
                                <div class="card">
                                    <div class="card-image">
                                        <img class="img-responsive" src="http://placekitten.com/400/250">
                                        <span class="card-title">Photos</span>
                                        <span class="card-title-icon"><i class="fa fa-camera"></i></span>
                                    </div>

                                    <div class="card-content p0-left">
                                        {{--<p>Cards for display in portfolio style material design by Google.</p>--}}
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-play"></i> <a href="#">Baseline: Tennis Nigeria</a></li>
                                            <li><i class="fa fa-play"></i> <a href="#">Post title 1</a></li>
                                            <li><i class="fa fa-play"></i> <a href="#">Post title 1</a></li>
                                            <li><i class="fa fa-play"></i> <a href="#">Post title 1</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-action">
                                        <a href="#" target="new_blank">more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                {{--subscription--}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="newsletter m0-down m0-top">
                            <form action="#" class="form-inline text-center">
                                <label for="newsletter">
                                    Join our newsletter for latest updates on tournaments, players and more.
                                </label> <br>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="newsletter" placeholder="you@yourdomain.com">
                                </div>
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                {{--adbar 2--}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="adbar-2">
                            <img src="http://placehold.it/1600x120/ffffff/333333/?text=Advertisement" class="img-responsive center-block" alt="Advert banner 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection