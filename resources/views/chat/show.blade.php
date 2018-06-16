{{--@extends ('layouts.sidenav')

@section('title', 'Connections')

@section('content')
    <main>
        <div class="container">
            Hello
            @foreach($connections as $connection)
                <p>{{ $connection->User_FirstName }}</p>
            @endforeach
        </div>
    </main>
@endsection--}}

@extends ('layouts.sidenav')

@section('title', 'Conversation')

@section('content')
    <head>
        <meta name="friendId" content="{{ $friend->User_Id }}">
    </head>
    <main xmlns:v-bind="http://www.w3.org/1999/xhtml">
        <div class="card grey lighten-3 chat-room" id="app">
            <div class="card-body">

                <!-- Grid row -->
                <div class="row px-lg-2 px-2">

                    <!-- Grid column -->
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-xl-8 pl-md-3 px-lg-auto px-0">

                        <div class="chat-message">
                            <ul class="list-unstyled chat">
                                <strong class="primary-font">{{ $friend->User_FirstName }}</strong>

                                <chat v-bind:chats="chats" v-bind:userid="{{ Auth::user()->User_Id }}"
                                      v-bind:friendid="{{ $friend->User_Id }}"></chat>
                            </ul>

                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
        </div>
    </main>
@endsection