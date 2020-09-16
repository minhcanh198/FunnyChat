<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatroom</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container" id="app">
        <div class="row">
            <ul class="list-group offset-4 col-md-4 col-xl-4">
                <li class="list-group-item active">Chat room</li>
                <message></message>
                <input type="text" class="form-control" placeholder="Type message here" v-model="message" @keyup.enter="send"> 
            </ul>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>