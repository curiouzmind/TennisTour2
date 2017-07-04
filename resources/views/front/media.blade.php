@extends('layouts.front')
@section('title', 'Media')
@section('content')
<!-- page banner -->
<div class="row">
    <div class="col-md-12">
        <div class="overlay">
            <h1>media</h1>
        </div>
    </div>
</div>
<!-- breadcrumbs -->
<div class="row">
	<div class="col-md-12">
		<div class="breadcrumb text-capitalize">
			<a href="#"><i class="fa fa-home"></i></a>&nbsp; > &nbsp;<span>media</span>
		</div>
	</div>
</div>
<!-- main content -->
<div class="container">
	<div class="row">
		<div class="col-md-8" id="myScrollspy">
			<!-- tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a href="#articles" aria-controls="articles" role="tab" data-toggle="tab">Articles</a></li>
                <li role="presentation"><a href="#videos" aria-controls="videos" role="tab" data-toggle="tab">Videos</a></li>
                <li role="presentation"><a href="#pictures" aria-controls="pictures" role="tab" data-toggle="tab">Pictures</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="articles">
                    <div class="row">  
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">News</span>
                                    <span class="card-title-icon"><i class="fa fa-newspaper-o"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">News</span>
                                    <span class="card-title-icon"><i class="fa fa-newspaper-o"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">News</span>
                                    <span class="card-title-icon"><i class="fa fa-newspaper-o"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>  
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">News</span>
                                    <span class="card-title-icon"><i class="fa fa-newspaper-o"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">News</span>
                                    <span class="card-title-icon"><i class="fa fa-newspaper-o"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">News</span>
                                    <span class="card-title-icon"><i class="fa fa-newspaper-o"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>                      
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">News</span>
                                    <span class="card-title-icon"><i class="fa fa-newspaper-o"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">News</span>
                                    <span class="card-title-icon"><i class="fa fa-newspaper-o"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">News</span>
                                    <span class="card-title-icon"><i class="fa fa-newspaper-o"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <nav aria-label="...">
                          <ul class="pager">
                            <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
                            <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
                          </ul>
                        </nav>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="videos">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Videos</span>
                                    <span class="card-title-icon"><i class="fa fa-video-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Videos</span>
                                    <span class="card-title-icon"><i class="fa fa-video-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Videos</span>
                                    <span class="card-title-icon"><i class="fa fa-video-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Videos</span>
                                    <span class="card-title-icon"><i class="fa fa-video-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Videos</span>
                                    <span class="card-title-icon"><i class="fa fa-video-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Videos</span>
                                    <span class="card-title-icon"><i class="fa fa-video-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Videos</span>
                                    <span class="card-title-icon"><i class="fa fa-video-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Videos</span>
                                    <span class="card-title-icon"><i class="fa fa-video-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Videos</span>
                                    <span class="card-title-icon"><i class="fa fa-video-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <nav aria-label="...">
                          <ul class="pager">
                            <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
                            <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
                          </ul>
                        </nav>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="pictures">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Photos</span>
                                    <span class="card-title-icon"><i class="fa fa-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Photos</span>
                                    <span class="card-title-icon"><i class="fa fa-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Photos</span>
                                    <span class="card-title-icon"><i class="fa fa-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Photos</span>
                                    <span class="card-title-icon"><i class="fa fa-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Photos</span>
                                    <span class="card-title-icon"><i class="fa fa-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Photos</span>
                                    <span class="card-title-icon"><i class="fa fa-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Photos</span>
                                    <span class="card-title-icon"><i class="fa fa-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Photos</span>
                                    <span class="card-title-icon"><i class="fa fa-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-responsive" src="http://placekitten.com/400/250">
                                    <span class="card-title">Photos</span>
                                    <span class="card-title-icon"><i class="fa fa-camera"></i></span>
                                </div>
                                <div class="card-content"><span>Cards for display</span></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <nav aria-label="...">
                          <ul class="pager">
                            <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
                            <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
		</div>
		<div class="col-md-4 sidebar">
            <div class="player1"></div>
			<span class="placeholder">
				sidebar
			</span>
		</div>
	</div>
</div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.player-nav').affix({offset: {top:205}});
        });
    </script>
@endsection