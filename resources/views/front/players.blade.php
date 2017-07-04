@extends('layouts.front')
@section('title', 'Players')
@section('content')
<!-- page banner -->
<div class="row">
    <div class="col-md-12">
        <div class="overlay">
            <h1>Players</h1>
        </div>
    </div>
</div>
<!-- breadcrumbs -->
<div class="row">
	<div class="col-md-12">
		<div class="breadcrumb">
			<a href="#"><i class="fa fa-home"></i></a>&nbsp; > &nbsp;<span>Players</span>
		</div>
	</div>
</div>
<!-- main content -->
<div class="container">
	<div class="row">
		<div class="col-md-8 content players" id="myScrollspy">
			<!-- tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a href="#men" aria-controls="men" role="tab" data-toggle="tab">Men</a></li>
                <li role="presentation"><a href="#women" aria-controls="female" role="tab" data-toggle="tab">Women</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content players-list">
                <div role="tabpanel" class="tab-pane fade active in table-responsive" id="men">
                    <div class="well player-nav">
                        <span>
                            <a href="#ma">a</a><a href="#mb">b</a><a href="#mc">c</a><a href="#md">d</a><a href="#me">e</a>
                            <a href="#mf">f</a><a href="#mg">g</a><a href="#mh">h</a><a href="#mi">i</a><a href="#mj">j</a>
                            <a href="#mk">k</a><a href="#ml">l</a><a href="#mm">m</a><a href="#mn">n</a><a href="#mo">o</a>
                            <a href="#mp">p</a><a href="#mq">q</a><a href="#mr">r</a><a href="#ms">s</a><a href="#mt">t</a>
                            <a href="#mu">u</a><a href="#mv">v</a><a href="#mw">w</a><a href="#mx">x</a><a href="#my">y</a>
                            <a href="#mz">z</a>
                        </span>
                    </div>
                    <table id="ma" class="table table-striped">
                        <caption>A</caption>
                        <tbody class="players-list-men">
                            <tr>
                                <td class="player-name"><span>Abdul</span>, Mohammed</td>
                                <td class="country">Lagos</td>
                            </tr>
                            <tr>
                                <td class="player-name"><span>Abdullahi</span>, sadiq</td>
                                <td class="country">Lagos</td>
                            </tr>
                            <tr>
                                <td class="player-name"><span>abiodun</span>, paul</td>
                                <td class="country">Lagos</td>
                            </tr>
                            <tr>
                                <td class="player-name"><span>adamu</span>, sanni</td>
                                <td class="country">Lagos</td>
                            </tr>
                            <tr>
                                <td class="player-name"><span>adebisi</span>, abidemi olanrewaju</td>
                                <td class="country">Lagos</td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="mb" class="table table-striped">
                        <caption>b</caption>
                        <tbody class="players-list-men">
                            <tr>
                                <td class="player-name"><span>balami</span>, umaru</td>
                                <td class="country">ogun</td>
                            </tr>
                            <tr>
                                <td class="player-name"><span>balogun</span>, sheriff</td>
                                <td class="country">oyo</td>
                            </tr>
                            <tr>
                                <td class="player-name"><span>basssey</span>, richard</td>
                                <td class="country">imo</td>
                            </tr>
                            <tr>
                                <td class="player-name"><span>benson</span>, azuka junior</td>
                                <td class="country">delta</td>
                            </tr>
                            <tr>
                                <td class="player-name"><span>bulus</span>, chrisropher</td>
                                <td class="country">edo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane fade table-responsive" id="women">
                    <div class="well player-nav">
                        <span>
                            <a href="#wa">a</a><a href="#wb">b</a><a href="#wc">c</a><a href="#wd">d</a><a href="#we">e</a>
                            <a href="#wf">f</a><a href="#wg">g</a><a href="#wh">h</a><a href="#wi">i</a><a href="#wj">j</a>
                            <a href="#wk">k</a><a href="#wl">l</a><a href="#wm">w</a><a href="#wn">n</a><a href="#wo">o</a>
                            <a href="#wp">p</a><a href="#wq">q</a><a href="#wr">r</a><a href="#ws">s</a><a href="#wt">t</a>
                            <a href="#wu">u</a><a href="#wv">v</a><a href="#ww">w</a><a href="#wx">x</a><a href="#wy">y</a>
                            <a href="#wz">z</a>
                        </span>
                    </div>
                    <table id="wa" class="table table-striped">
                        <caption>A</caption>
                        <tbody class="players-list-men">
                            <tr>
                                <td class="player-name"><span>abass</span>, olakunbi</td>
                                <td class="country">Lagos</td>
                            </tr>
                            <tr>
                                <td class="player-name"><span>adedigba</span>, bukkoy</td>
                                <td class="country">Lagos</td>
                            </tr>
                            <tr>
                                <td class="player-name"><span>adegoke</span>, sarah</td>
                                <td class="country">Lagos</td>
                            </tr>
                            <tr>
                                <td class="player-name"><span>ajawuihe</span>, peace</td>
                                <td class="country">Lagos</td>
                            </tr>
                            <tr>
                                <td class="player-name"><span>ama</span>, ndidi</td>
                                <td class="country">Lagos</td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="wb" class="table table-striped">
                        <caption>b</caption>
                        <tbody class="players-list-men">
                            <tr>
                                <td class="player-name"><span>balogun</span>, aminat</td>
                                <td class="country">ogun</td>
                            </tr>
                            <tr>
                                <td class="player-name"><span>bamigbade</span>, abiodun</td>
                                <td class="country">oyo</td>
                            </tr>
                            <tr>
                                <td class="player-name"><span>ben</span>, uju</td>
                                <td class="country">imo</td>
                            </tr>
                            <tr>
                                <td class="player-name"><span>bamidele</span>, temitope</td>
                                <td class="country">delta</td>
                            </tr>
                        </tbody>
                    </table>
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