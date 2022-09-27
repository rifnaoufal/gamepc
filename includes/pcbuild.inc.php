<!DOCTYPE HTML>
<html>
<head>
    <style>
        #div1, #div2 {
            float: left;
            width: 100px;
            height: 35px;
            margin: 10px;
            padding: 10px;
            border: 1px solid black;
        }
    </style>
    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
    </script>
</head>
<body>

<h2 style="color: #ffffff">Drag and Drop</h2>
<p style="color: #ffffff">maak een keuze</p>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="https://tweakers.net/ext/i/2004415700.jpeg" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
</div>

<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

</body>
</html>