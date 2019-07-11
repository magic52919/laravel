<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab</title>
    <style>
        body>div {
            font-family: sans-serif;
            font-size: 1.25em;
            border: 1px solid gray;
            padding: 20px;
            margin: 20px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body>
    <div id="app1">
            <!-- v-model 雙向 -->
        <input v-model="message"><br>
        <span v-if="seen">{{ message }}</span><br>
        <button v-on:click="reverseMessage">Reverse Message</button>
    </div>
    <div id="app2">
        <span :title="message">
            請將滑鼠移到本段文字上方
        </span>
    </div>
    <div id="app3">
        <span v-if="seen">Now you see me</span>
    </div>
    <div id="app4">
        <ul>
            <li v-for="(todoItem,index) in todoList">
                {{  todoItem.text }}
            </li>
        </ul>
    </div>

</body>
<script>

    var app1 = new Vue({
        el: "#app1",
        data: {

            message: 'hello.yo',
            seen: true,
            
        },
        methods: {
                reverseMessage() {
                    this.message = 'xxxx';
                }
            }
    });
    var app2 = new Vue({
        el: '#app2',
        data: {
            message: '載入時間: ' + new Date().toLocaleString()
        }
    });
    var app3 = new Vue({
        el: '#app3',
        data: {
            seen: true
        }
    });
    var app4 = new Vue({
        el: '#app4',
        data: {
            todoList: [
                { id: 1, text: 'Learn JavaScript' },
                { id: 2, text: 'Learn Vue' },
                { id: 3, text: 'Build something awesome' }
            ]
        }
    });


</script>

</html>