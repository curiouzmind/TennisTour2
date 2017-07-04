@extends('layouts.front')
@section('title', 'Matches')
@section('content')
<!-- page banner -->
<div class="row">
    <div class="col-md-12">
        <div class="overlay">
            <h1>Matches</h1>
        </div>
    </div>
</div>
<!-- breadcrumbs -->
<div class="row">
	<div class="col-md-12">
		<div class="breadcrumb">
			<a href="#"><i class="fa fa-home"></i></a>&nbsp; > &nbsp;<span>Matches</span>
		</div>
	</div>
</div>
<!-- main content -->
<div class="container">
	<div class="row">
		<div class="col-md-8 content">
			<!-- tabs -->
			<ul class="nav nav-tabs" role="tablist">
	            <li role="presentation" class="active"><a href="#scores" aria-controls="scores" role="tab" data-toggle="tab">Scores & Stats</a></li>
	            <li role="presentation"><a href="#draws" aria-controls="draws" role="tab" data-toggle="tab">Draws</a></li>
	            <li role="presentation"><a href="#schedule" aria-controls="schedule" role="tab" data-toggle="tab">Schedules</a></li>
	        </ul>
	        <!-- Tab panes -->
	        <div class="tab-content">
	        	<!-- scores & stats -->
	            <div role="tabpanel" class="tab-pane fade active in" id="scores">
	            	<!-- filters -->
            		<ul class="list-inline">
            			<li>
            				<select>
            					<option>Men's Singles</option>
            					<option>Men's Doubles</option>
            					<option>Women's Singles</option>
            					<option>Women's Doubles</option>
            				</select>
            			</li>
            			<li class="btn btn-default "> Apply filter</li>
            		</ul>
            		<!-- content -->
            		<div id="scores" class="scores"><!-- Default panel contents --></div>
	            </div>
	            <div role="tabpanel" class="tab-pane fade" id="draws">
	            	<!-- filters -->
            		<ul class="list-inline">
            			<li>
            				<select class="text-uppercase">
            					<option>Men's Singles</option>
            					<option>Men's Doubles</option>
            					<option>Women's Singles</option>
            					<option>Women's Doubles</option>
            				</select>
        				</li>
            			<li class="btn btn-default"> Apply filter</li>
            		</ul>
            		<div class="row">
            			<div class="col-md-12">
            				<ul class="nav nav-tabs nav-justified" role="tablist">
					            <li role="presentation" class="active"><a href="#r1" aria-controls="r1" role="tab" data-toggle="tab">Round 1</a></li>
					            <li role="presentation"><a href="#r2" aria-controls="r2" role="tab" data-toggle="tab">Round 2</a></li>
					            <li role="presentation"><a href="#r3" aria-controls="r3" role="tab" data-toggle="tab">Round 3</a></li>
					            <li role="presentation"><a href="#r4" aria-controls="r4" role="tab" data-toggle="tab">Round 4</a></li>
					            <li role="presentation"><a href="#qf" aria-controls="qf" role="tab" data-toggle="tab">QuarterFinals</a></li>
					            <li role="presentation"><a href="#sf" aria-controls="sf" role="tab" data-toggle="tab">SemiFinals</a></li>
					            <li role="presentation"><a href="#final" aria-controls="final" role="tab" data-toggle="tab">Finals</a></li>
					        </ul>
					        <!-- Tab panes -->
					        <div class="tab-content">
					        	<!-- round 1 -->
					            <div role="tabpanel" class="tab-pane fade active in" id="r1">
					            	<!-- content -->
	            					<div id="round1" class="scores"></div>
            					</div>
            					<!-- round 2 -->
					            <div role="tabpanel" class="tab-pane fade" id="r2">
					            	<!-- content -->
	            					<div id="round2" class="scores"></div>
            					</div>
            					<!-- round 3 -->
					            <div role="tabpanel" class="tab-pane fade" id="r3">
					            	<!-- content -->
	            					<div id="round3" class="scores"></div>
            					</div>
            					<!-- round 4 -->
					            <div role="tabpanel" class="tab-pane fade" id="r4">
					            	<!-- content -->
	            					<div id="round4" class="scores"></div>
            					</div>
            					<!-- q finals -->
					            <div role="tabpanel" class="tab-pane fade" id="qf">
					            	<!-- content -->
	            					<div id="qfinals" class="scores"></div>
            					</div>
            					<!-- s finals -->
					            <div role="tabpanel" class="tab-pane fade" id="sf">
					            	<!-- content -->
	            					<div id="sfinals" class="scores"></div>
            					</div>
            					<!-- finals -->
					            <div role="tabpanel" class="tab-pane fade" id="final">
					            	<!-- content -->
	            					<div id="finals" class="scores"></div>
            					</div>
        					</div>
            			</div>
            		</div>
	            </div>
	            <div role="tabpanel" class="tab-pane fade" id="schedule">
	            	<!-- filters -->
            		<ul class="list-inline">
            			<li>
            				<select class="text-uppercase">
            					<option>Day 1: Sunday, 22 May</option>
            					<option>Day 2: Sunday, 22 May</option>
            					<option>Day 3: Sunday, 22 May</option>
            					<option>Day 4: Sunday, 22 May</option>
            				</select>
        				</li>
        				<li class="btn btn-default"> Apply filter</li>
            		</ul>
	            	<div class="court media">
                        <a class="pull-left courtName" href="#">
                            <span>Center Court</span><br>
                            <span>1:00 pm</span>
                        </a>
                        <div class="media-body matches">
                            <div class="panel panel-primary match">
                            	<div class="panel-heading text-uppercase">
                            		<span class="text-left">
                            			men's singles - first round
                            		</span>
                            		<span class="pull-right">
                            			6-4 &nbsp; 6-3 &nbsp; 7-5
                            		</span>
                            	</div>
                            	<div class="panel-body">
                            		<div class="names">
                            			<a href="#">Player 1</a>
                            			<span class="country">(ngn)</span>
                            		</div>
                            		<div class="versus text-capitalize">Defeated</div>
                            		<div class="names">
                            			<a href="#">Player 2</a>
                            			<span class="country">(gbr)</span>
                            		</div>
                            		<div class="matchScore">Completed</div>
                            	</div>
                            </div>
                            <div class="panel panel-primary match">
                            	<div class="panel-heading text-uppercase">
                            		<span class="text-left">
                            			ladies' singles - first round
                            		</span>
                            		<span class="pull-right">
                            			6-4 &nbsp; 6-3 &nbsp; 7-5
                            		</span>
                            	</div>
                            	<div class="panel-body">
                            		<div class="names">
                            			<a href="#">Player 1</a>
                            			<span class="country">(usa)</span>
                            		</div>
                            		<div class="versus text-capitalize">Defeated</div>
                            		<div class="names">
                            			<a href="#">Player 2</a>
                            			<span class="country">(jpn)</span>
                            		</div>
                            		<div class="matchScore">Completed</div>
                            	</div>
                            </div>
                            <div class="panel panel-primary match">
                            	<div class="panel-heading text-uppercase">
                            		<span class="text-left">
                            			men's singles - first round
                            		</span>
                            		<span class="pull-right">
                            			6-4 &nbsp; 6-3 &nbsp; 7-5
                            		</span>
                            	</div>
                            	<div class="panel-body">
                            		<div class="names">
                            			<a href="#">Player 3</a>
                            			<span class="country">(sbr)</span>
                            		</div>
                            		<div class="versus text-capitalize">Defeated</div>
                            		<div class="names">
                            			<a href="#">Player 4</a>
                            			<span class="country">(fra)</span>
                            		</div>
                            		<div class="matchScore">Completed</div>
                            	</div>
                            </div>
                        </div>
                	</div>
                	<div class="court media">
                        <a class="pull-left courtName" href="#">
                            <span>Left-wing Court</span><br>
                            <span>4:00 pm</span>
                        </a>
                        <div class="media-body matches">
                            <div class="panel panel-primary match">
                            	<div class="panel-heading text-uppercase">
                            		<span class="text-left">
                            			men's singles - first round
                            		</span>
                            		<span class="pull-right">
                            			6-4 &nbsp; 6-3 &nbsp; 7-5
                            		</span>
                            	</div>
                            	<div class="panel-body">
                            		<div class="names">
                            			<a href="#">Player 5</a>
                            			<span class="country">(bra)</span>
                            		</div>
                            		<div class="versus text-capitalize">Defeated</div>
                            		<div class="names">
                            			<a href="#">Player 6</a>
                            			<span class="country">(ita)</span>
                            		</div>
                            		<div class="matchScore">Completed</div>
                            	</div>
                            </div>
                            <div class="panel panel-primary match">
                            	<div class="panel-heading text-uppercase">
                            		<span class="text-left">
                            			ladies' singles - first round
                            		</span>
                            		<span class="pull-right">
                            			6-4 &nbsp; 6-3 &nbsp; 7-5
                            		</span>
                            	</div>
                            	<div class="panel-body">
                            		<div class="names">
                            			<a href="#">Player 1</a>
                            			<span class="country">(usa)</span>
                            		</div>
                            		<div class="versus text-capitalize">Defeated</div>
                            		<div class="names">
                            			<a href="#">Player 2</a>
                            			<span class="country">(jpn)</span>
                            		</div>
                            		<div class="matchScore">Completed</div>
                            	</div>
                            </div>
                            <div class="panel panel-primary match">
                            	<div class="panel-heading text-uppercase">
                            		<span class="text-left">
                            			men's singles - first round
                            		</span>
                            		<span class="pull-right">
                            			6-4 &nbsp; 6-3 &nbsp; 7-5
                            		</span>
                            	</div>
                            	<div class="panel-body">
                            		<div class="names">
                            			<a href="#">Player 3</a>
                            			<span class="country">(sbr)</span>
                            		</div>
                            		<div class="versus text-capitalize">Defeated</div>
                            		<div class="names">
                            			<a href="#">Player 4</a>
                            			<span class="country">(fra)</span>
                            		</div>
                            		<div class="matchScore">Completed</div>
                            	</div>
                            </div>
                        </div>
                	</div>
	            </div>
	        </div>
		</div>
		<div class="col-md-4 sidebar">
			<span class="placeholder">
				sidebar
			</span>
		</div>
	</div>
</div>
@endsection
@section('scripts')
	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.2.0/list.min.js async defer"></script> -->
	<!-- json data -->
	<script type="text/javascript">
		var xmlhttp = new XMLHttpRequest();
		var src = "/data/tennisdata.txt";

		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var myData = JSON.parse(this.responseText);
				tScores(myData);
				tDraws(myData);
			}
		};
		xmlhttp.open("GET", src, true);
		xmlhttp.send();

		function tDraws(arr) {
			var round1 = "";
			for(i = 0; i < arr.rnd1.length; i++) {
				round1 += 	'<div class="panel panel-primary">' +
							'<div class="panel-heading text-uppercase">' 
								+ '<span>' + arr.rnd1[i].location + '</span>' + '&nbsp;' + " > " + '&nbsp;' + 
								'<span>' + arr.rnd1[i].tournament + '</span>' + '&nbsp;' + " > " + '&nbsp;' + '<span>' 
								+ arr.rnd1[i].stage + '</span>' + 
							'</div>' +
							'<div class="panel-body text-capitalize table-responsive">' 
							+ 	'<table class="table table-striped m0-down">'
								+	'<thead>' + '<tr>' + '<th>' + ' ' + '</th>' + '<th>' + 'Pts' + '</th>' + '<th>' + '1' + '</th>' + '<th>' + '2' +
									'</th>' + '<th>' + 3 + '</th>' + '<th>' + 4 + '</th>' + '<th>' + 5 + '</th>' + '</tr>' + '</thead>' + 
									'<tfoot>' + '<tr>' + '<td>' + '<button class="btn btn-primary">' + 'view stats' + '</button>' + '</td>' + '</tr>' + '</tfoot>' + 
									'<tbody>' +
										'<tr>' + '<td>' + arr.rnd1[i].player + ' ' + '(' + arr.rnd1[i].country + ')' + '<span class="pull-right">' + '<i class="fa fa-check"></i>' + '</span>' + '</td>' + '<td></td>' + '<td>' + 6 + '</td>' + '<td>' + 7 + '</td>' + '<td>' + 3 + '</td>' + '<td>' + 6 + '</td>' + '<td>' + '</td>' + '</tr>'+
										'<tr>' + '<td>' + arr.rnd1[i].player + ' ' + '(' + arr.rnd1[i].country + ')' + '<span class="pull-right">' + '<i class="fa fa-check"></i>' + '</span>' + '</td>' + '<td></td>' + '<td>' + 6 + '</td>' + '<td>' + 7 + '</td>' + '<td>' + 3 + '</td>' + '<td>' + 6 + '</td>' + '<td>' + '</td>' + '</tr>' + '</tbody>'
							+	'</table>' + 
							'</div>' +
							'</div>';
			}
			// console.log(arr.rnd1[1].player);
			document.getElementById("round2").innerHTML = round1;
			document.getElementById("round2").innerHTML = round1;
			document.getElementById("round3").innerHTML = round1;
			document.getElementById("round4").innerHTML = round1;
			document.getElementById("qfinals").innerHTML = round1;
			document.getElementById("sfinals").innerHTML = round1;
			document.getElementById("finals").innerHTML = round1;
		}
		function tScores(arr) {
			var draws = "";
			var scores = "";
			var round1 = "";
			var i,j,k;
			for(i = 0; i < arr.score.length; i++) {
				draws += arr.score[i].player + " " + arr.score[i].country + '<br>';
				scores += 	'<div class="panel panel-primary">' +
							'<div class="panel-heading text-uppercase">' 
								+ '<span>' + arr.score[i].location + '</span>' + '&nbsp;' + " > " + '&nbsp;' + 
								'<span>' + arr.score[i].tournament + '</span>' + '&nbsp;' + " > " + '&nbsp;' + '<span>' 
								+ arr.score[i].stage + '</span>' + 
							'</div>' +
							'<div class="panel-body text-capitalize">' 
							+ 	'<table class="table table-striped m0-down">'
								+	'<thead>' + '<tr>' + '<th>' + ' ' + '</th>' + '<th>' + 'Pts' + '</th>' + '<th>' + '1' + '</th>' + '<th>' + '2' +
									'</th>' + '<th>' + 3 + '</th>' + '<th>' + 4 + '</th>' + '<th>' + 5 + '</th>' + '</tr>' + '</thead>' + 
									'<tfoot>' + '<tr>' + '<td>' + '<button class="btn btn-primary">' + 'view stats' + '</button>' + '</td>' + '</tr>' + '</tfoot>' + 
									'<tbody>' +
										'<tr>' + '<td>' + arr.score[i].player + ' ' + '(' + arr.score[i].country + ')' + '<span class="pull-right">' + '<i class="fa fa-check"></i>' + '</span>' + '</td>' + '<td></td>' + '<td>' + 6 + '</td>' + '<td>' + 7 + '</td>' + '<td>' + 3 + '</td>' + '<td>' + 6 + '</td>' + '<td>' + '</td>' + '</tr>'+
										'<tr>' + '<td>' + arr.score[i].player + ' ' + '(' + arr.score[i].country + ')' + '<span class="pull-right">' + '<i class="fa fa-check"></i>' + '</span>' + '</td>' + '<td></td>' + '<td>' + 6 + '</td>' + '<td>' + 7 + '</td>' + '<td>' + 3 + '</td>' + '<td>' + 6 + '</td>' + '<td>' + '</td>' + '</tr>' + '</tbody>'
							+	'</table>' + 
							'</div>' +
							'</div>';
			}
			
			// console.log(arr.score[2].player);
			document.getElementById("scores").innerHTML = scores;
		}
	</script>
    <script>
        
    </script>
@endsection