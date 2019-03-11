<!doctype html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .list-group{
            overflow-y: scroll;
            height: 300px;
        }
    </style>
</head>
<body>



<div class="container">
    <div class="row" id="app" style="margin-top: 15px">
        <div class="offset-12 col-sm-12 col-md-12">
            <li class="list-group-item active">Chat Room</li>
            <div class="badge badge-pill badge-primary">@{{typing}}</div>
            <ul class="list-group" v-chat-scroll>
                <message
                        v-for="value,index in chat.message"
                        :key=value.index
                        :color=chat.color[index]
                        :user = chat.user[index]
                        :time = chat.time[index]
                >
                    @{{ value }}
                </message>
            </ul>
            <input type="text" class="form-control" placeholder="Type your message here..." v-model="message" @keyup.enter="send">
        </div>
    </div>
</div>


<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

