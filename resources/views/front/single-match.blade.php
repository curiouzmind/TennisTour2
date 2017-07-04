@extends('layouts.front')
@section('title', 'Single Match')
@section('content')
<!-- page banner -->
<div class="row">
    <div class="col-md-12">
        <div class="overlay">
            <h1>Match Statistics</h1>
        </div>
    </div>
</div>
<!-- breadcrumbs -->
<div class="row">
	<div class="col-md-12">
		<div class="breadcrumb">
			<a href="#"><i class="fa fa-home"></i></a>&nbsp; > &nbsp;<span><a href="#">Matches</a></span>&nbsp; > &nbsp;<span>Single Match</span>
		</div>
	</div>
</div>
<!-- main content -->
<div class="container">
	<div class="row">
		<div class="col-md-8 content">
			<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <span>abuja</span><span>interstate championships</span><span>Round 2</span>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2"><i class="fa fa-user"></i></div>
                                <div class="col-md-8">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Winner</th>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="p1-scores"></tr>
                                            <tr id="p2-scores"></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2"><i class="fa fa-user"></i></div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr class="text-center">
                                        <th></th>
                                        <th>Player 1</th>
                                        <th>Player 2</th>
                                    </tr>
                                </thead>
                                <tbody class="text-uppercase">
                                    <tr>
                                        <td>Aces</td>
                                        <td>4</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Double Faults</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>First Serve % In</td>
                                        <td>73/114</td>
                                        <td>69/103</td>
                                    </tr>
                                    <tr>
                                        <td>Win % on first serve</td>
                                        <td>49/73</td>
                                        <td>60/69</td>
                                    </tr>
                                    <tr>
                                        <td>Win % on second serve</td>
                                        <td>29/41</td>
                                        <td>19/34</td>
                                    </tr>
                                    <tr>
                                        <td>Net points won</td>
                                        <td>46/74</td>
                                        <td>17/22</td>
                                    </tr>
                                    <tr>
                                        <td>break points won</td>
                                        <td>0/2</td>
                                        <td>1/7</td>
                                    </tr>
                                    <tr>
                                        <td>receiving points won</td>
                                        <td>24/103</td>
                                        <td>36/114</td>
                                    </tr>
                                    <tr>
                                        <td>winners</td>
                                        <td>39</td>
                                        <td>39</td>
                                    </tr>
                                    <tr>
                                        <td>unforced errors</td>
                                        <td>29</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Total points won</td>
                                        <td>102</td>
                                        <td>115</td>
                                    </tr>
                                    <tr>
                                        <td>distance covered (m)</td>
                                        <td>2430.3</td>
                                        <td>2367.9</td>
                                    </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    
                </div>
            </div>
		</div>
		<div class="col-md-4 sidebar">
            <div id="player1"></div>
            <div id="player2"></div>
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
        var playerScores = {
            "player1": ["Player 1", "<i class='fa fa-check'></i>",6,5,6,6,""],
            "player2": ["Player 2", " ",4,7,4,4,""]
        }
        var p1 = "";
        var p2 = "";
        var set1,set2;

        for (set1=0;set1<playerScores.player1.length;set1++) {
            console.log("<td>" + playerScores.player1[set1] + "</td>");
            p1 += "<td>" + playerScores.player1[set1] + "</td>";
        }
        for (set2=0;set2<playerScores.player2.length;set2++) {
            console.log("<td>" + playerScores.player2[set2] + "</td>");
            p2 += "<td>" + playerScores.player2[set2] + "</td>";
        }
        document.getElementById("p1-scores").innerHTML = p1;
        document.getElementById("p2-scores").innerHTML = p2;        
    </script>
    <script>
        function Player(firstName, lastName, profilePic){
            this.firstName = firstName;
            this.lastName = lastName;
            this.profilePic = profilePic;
        }

        Player.prototype.showPlayerName = function() {
            return this.firstName + " " + this.lastName;
        }
        var player1 = new Player("Raphael", "Nadal");
        var player2 = new Player("Andy", "Murray");

        var p1 = player1.showPlayerName();
        var p2 = player2.showPlayerName();
        document.getElementById("player1").innerHTML = p1;
        document.getElementById("player2").innerHTML = p2;
    </script>
@endsection