<html>
    <head>
    </head>

    <body>
        <p id="text1">Hello JavaScript!! 
        <button onclick="myfunction()">size</button>
        </p>

        <button onclick='document.getElementById("doorimg").src ="door2.jpg"'>Open</button>
        <img id="doorimg" src="door1.jpg">
        <button onclick='document.getElementById("doorimg").src ="door1.jpg"'>Close</button>


        <p id="text2"></p>

    </body>



    <script>

            function myfunction(){
                document.getElementById("text1").style.fontSize="60px";
            }

            document.getElementById("text2").innerHTML= "5+4";
            document.write("writejavascript");

            console.log("Hello")

    </script>

</html>
