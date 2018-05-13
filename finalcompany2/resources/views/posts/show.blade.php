
@section('title','| Create New Post')



@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-8 col-md-offset-2 ">
                    <h1 class="title">Posts</h1>

                </div>
                <hr>



                <br>
                <br><br><br>
                <div class="col-md-5 col-md-offset-1 ">


                    <hr>
                   <h1> {{ $post->title }}</h1>
                    <br>
                 <p class="lead"> {{$post->body}}</p>

                </div>

                <div class="col-md-4 pull-right">
                    <div class="well">
                        <dl class="dl-horizontal">
                            <dt> create At:</dt>
                            <dd> {{ date('M j, Y H:ia',strtotime($post->created_at))}}</dd>

                        </dl>
                        <dl class="dl-horizontal">
                            <dt> Last updated:</dt>
                            <dd> {{date('M j, Y H:ia',strtotime($post->updated_at))}}</dd>

                        </dl>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                {!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block')) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Html::linkRoute('posts.destroy','Delete',array($post->id),array('class'=>'btn btn-danger btn-block')) !!}

                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>










@endsection



