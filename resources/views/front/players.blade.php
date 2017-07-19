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
                        @foreach($aZRange as $letter)
                            <a href="#m{{strtolower($letter)}}">{{$letter}}</a>
                        @endforeach
                        </span>
                    </div>
                      @foreach($aZRange as $letter)
                        @foreach($malePlayers as $male)
                         @if (starts_with($male->first_name,$letter))
                    <table id="m{{ strtolower($letter)}}" class="table table-striped">
                        <caption>{{ $letter }}</caption>
                        <tbody class="players-list-men">                     
                            <tr>
                                <td class="player-name"><span><a href="{{route('single.player',['id'=>$male->id])}}">{{$male->first_name}}</a></span>, {{$male->last_name}}</td>
                                <td class="country">{{$male->residence}}</td>
                            </tr>    
                        </tbody>
                    </table>
                    @endif
                    @endforeach

                @endforeach
                </div>
                <div role="tabpanel" class="tab-pane fade table-responsive" id="women">
                    <div class="well player-nav">
                        <span>
                        @foreach($aZRange as $letter)
                            <a href="#w{{strtolower($letter)}}">{{$letter}}</a>
                        @endforeach
                        </span>
                    </div>
                    @foreach($aZRange as $letter)
                        @foreach($femalePlayers as $female)
                                @if (starts_with($female->first_name,$letter))
                    <table id="w{{ strtolower($letter)}}" class="table table-striped">
                        <caption>{{ $letter}}</caption>
                        <tbody class="players-list-men">
                            <tr>
                                <td class="player-name"><span><a href="{{route('single.player',['id'=>$female->id])}}">{{$female->first_name}}</a>{{$female->first_name}}</span>, {{$female->last_name}}</td>
                                <td class="country">{{$female->residence}}</td>
                            </tr>
                        </tbody>
                    </table>
                        @endif
                    @endforeach
                @endforeach
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