@extends('layout.layout')

@section('title')
    О Нас
@endsection

@section('main_content')

<a href="/logout"> logout</a>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="span3 well">
        <center>
            <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="{{$data->photoUrl}}" name="aboutme" width="140" height="140" class="img-circle"></a>
            <h3>{{$data->name}}</h3>
            
        </center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">More About Joe</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="{{$data->photoUrl}}" name="aboutme" width="140" height="140" border="0" class="img-circle">
                        <h3 class="media-heading">{{$data->name}} <small>USA</small></h3>
                        <span><strong>Skills: </strong></span>
                        <span class="label label-warning">HTML5/CSS</span>
                        <span class="label label-info">Adobe CS 5.5</span>
                        <span class="label label-info">Microsoft Office</span>
                        <span class="label label-success">Windows XP, Vista, 7</span>
                    </center>
                    <hr>
                    <center>
                        <p class="text-left"><strong>Bio: </strong><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                        <br>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                        <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about Joe</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
    {{--    <h1>About Us</h1>--}}
    {{--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto aspernatur beatae blanditiis corporis cupiditate delectus eaque earum eos esse excepturi laboriosam laborum maiores molestiae necessitatibus nemo nulla officia praesentium quaerat quasi sapiente similique, sunt unde voluptas, voluptatem? Necessitatibus, sint.</p>--}}
@endsection
