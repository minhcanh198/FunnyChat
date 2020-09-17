<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatroom</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .list-group {
            overflow-y: scroll;
            height: 300px;
        }
    </style>
</head>

<body>
    <div class="container" id="app">
        <div class="row">
            <div class="offset-4 col-md-4 col-xl-4">
                <li class="list-group-item active">My crush</li>
                <ul class="list-group" v-chat-scroll >
                    <message v-for="value in chat.messages" :key=value.index color='success'>
                        @{{value}}
                    </message>
                </ul>
                <input type="text" class="form-control" placeholder="Type message here" v-model="message" @keyup.enter="send"> 
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>