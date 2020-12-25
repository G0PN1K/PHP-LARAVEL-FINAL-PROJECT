@extends('layout.layout')

@section('title')
    О Нас
@endsection

@section('main_content')


<form action="userLogin" method="post">
    @csrf

    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please sign ip <small></small></h3>
                    </div>
                    <div class="panel-body">

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                            </div>

                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                    </div>
                                </div>


                            <button type="submit" value="Register" class="btn btn-info btn-block">log in</button>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</form>
{{--    <h1>About Us</h1>--}}
{{--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto aspernatur beatae blanditiis corporis cupiditate delectus eaque earum eos esse excepturi laboriosam laborum maiores molestiae necessitatibus nemo nulla officia praesentium quaerat quasi sapiente similique, sunt unde voluptas, voluptatem? Necessitatibus, sint.</p>--}}
@endsection
