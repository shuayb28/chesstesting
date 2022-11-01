<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="chess.css">
</head>
<body>
    <form method="post">
        <table>
            <h1>Registration</h1>
            <tr>
                <td>
                    Name :
                </td>
                <td>
                    <input type="text" placeholder="Name" name="pame" id="name">
                </td>
            </tr>
            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="password" placeholder="Password" name="password" id="password">
                </td>
            </tr>
            <tr>
                <td>
                    Gender :
                </td>
                <td>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="submit" name="">
                </td>
            </tr>
        </table>
    </form>
    <div id="right">
    <div id="highscoreOmraade" class="content">
            <h2>Her er de ti beste resultatene, straight from your DB:</h2>
            <?php
                include('php/showTopTen.php');
           ?>

        </div>
        <div id="lagreScoreOmraade" class="content">
           <?php
                include('php/lagreScore.php');
           ?>
        </div>
    </div>
    <div class="chessboard">
        <!-- 1st -->
        <div id="a1" class="white square">&#9820;</div>
        <div id="a2" class="black square">&#9822;</div>
        <div id="a3" class="white square">&#9821;</div>
        <div id="a4" class="black square">&#9819;</div>
        <div id="a5" class="white square">&#9818;</div>
        <div id="a6" class="black square">&#9821;</div>
        <div id="a7" class="white square">&#9822;</div>
        <div id="a8" class="black square">&#9820;</div>
        <!-- 2nd -->
        <div id="b1" class="black square">&#9823;</div>
        <div id="b2" class="white square">&#9823;</div>
        <div id="b3" class="black square">&#9823;</div>
        <div id="b4" class="white square">&#9823;</div>
        <div id="b5" class="black square">&#9823;</div>
        <div id="b6" class="white square">&#9823;</div>
        <div id="b7" class="black square">&#9823;</div>
        <div id="b8" class="white square">&#9823;</div>
        <!-- 3th -->
        <div id="c1" class="white square"></div>
        <div id="c2" class="black square"></div>
        <div id="c3" class="white square"></div>
        <div id="c4" class="black square"></div>
        <div id="c5" class="white square"></div>
        <div id="c6" class="black square"></div>
        <div id="c7" class="white square"></div>
        <div id="c8" class="black square"></div>
        <!-- 4st -->
        <div id="d1" class="black square"></div>
        <div id="d2" class="white square"></div>
        <div id="d3" class="black square"></div>
        <div id="d4" class="white square"></div>
        <div id="d5" class="black square"></div>
        <div id="d6" class="white square"></div>
        <div id="d7" class="black square"></div>
        <div id="d8" class="white square"></div>
        <!-- 5th -->
        <div id="e1" class="white square"></div>
        <div id="e2" class="black square"></div>
        <div id="e3" class="white square"></div>
        <div id="e4" class="black square"></div>
        <div id="e5" class="white square"></div>
        <div id="e6" class="black square"></div>
        <div id="e7" class="white square"></div>
        <div id="e8" class="black square"></div>
        <!-- 6th -->
        <div id="f1" class="black square"></div>
        <div id="f2" class="white square"></div>
        <div id="f3" class="black square"></div>
        <div id="f4" class="white square"></div>
        <div id="f5" class="black square"></div>
        <div id="f6" class="white square"></div>
        <div id="f7" class="black square"></div>
        <div id="f8" class="white square"></div>
        <!-- 7th -->
        <div id="g1" class="white square">&#9817;</div>
        <div id="g2" class="black square">&#9817;</div>
        <div id="g3" class="white square">&#9817;</div>
        <div id="g4" class="black square">&#9817;</div>
        <div id="g5" class="white square">&#9817;</div>
        <div id="g6" class="black square">&#9817;</div>
        <div id="g7" class="white square">&#9817;</div>
        <div id="g8" class="black square">&#9817;</div>
        <!-- 8th -->
        <div id="h1" class="black square">&#9814;</div>
        <div id="h2" class="white square">&#9816;</div>
        <div id="h3" class="black square">&#9815;</div>
        <div id="h4" class="white square">&#9813;</div>
        <div id="h5" class="black square">&#9812;</div>
        <div id="h6" class="white square">&#9815;</div>
        <div id="h7" class="black square">&#9816;</div>
        <div id="h8" class="white square">&#9814;</div>
        </div>
        
    <script src="chess.js"></script>
</body>
</html>
