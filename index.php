<html>

<head>

    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="./css/pokedex.css">

    <script>
        function showMyAccount(navName) {
            var div = document.getElementsByClassName(navName)[0];
            if (div.style.display == "inherit") {
                return;
            } else {
                let navNames = [
                    "welcome",
                    "myaccount",
                    "mypokemon",
                    "storage",
                    "pokedex"
                ];
                for (let i = 0, n = navNames.length; i < n; i++) {
                    let div = document.getElementsByClassName(navNames[i])[0];
                    if (navNames[i] == navName) {
                        div.style.display = "inherit";
                    } else {
                        div.style.display = "none";
                    }
                }
            }
        }
    </script>

</head>

<body>

    <div id="container">

        <!-- HEADER -->
        <div id="header">
            <p>CPSC304-G13's PC</p>
        </div>

        <!-- NAVIGATION -->
        <div id="nav">
            <div class="user_container">
                <div>test</div>
            </div>
            <div onclick="showMyAccount('myaccount')" class="nav-item">
                <p>MY ACCOUNT</p>
            </div>
            <div onclick="showMyAccount('mypokemon')" class="nav-item">
                <p>MY POKEMON</p>
            </div>
            <div onclick="showMyAccount('storage')" class="nav-item">
                <p>STORAGE</p>
            </div>
            <div onclick="showMyAccount('pokedex')" class="nav-item">
                <p>POKEDEX</p>
            </div>
        </div>

        <!-- CONTENT -->
        <div id="content">
            <div class="welcome">
                <p>Welcome trainer.</p>
            </div>
            <div class="myaccount"> 
                <form method="POST" action="./php/signup.php" target="proxy"> <!-- LOGIN -->
                    <font>USERNAME</font>
                    <input type="text" name="accUsername" size="10">
                    <br />
                    <font>PASSWORD</font>
                    <input type="text" name="accPassword" size="10">
                    <br /><br />
                    <input type="submit" value="Login" name="login">&nbsp;&nbsp; &nbsp; &nbsp; 
                    <input type="submit" value="Sign up" name="signup">
                </form>
                
                <br />
                <p id="loginresult"></p>
            </div>
            <div class="mypokemon">
                <p>MYPOKEMON STUB</p>
            </div>
            <div class="storage">
                <p>STORAGE STUB</p>
            </div>
            <div class="pokedex">
                <div id="pokedex-container">
                    <div id="pokedex-left">
                        test
                    </div>
                    <div id="pokedex-right">
                        test   
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="hidden"><iframe name="proxy" src="" ></iframe></div>

</body>

</html>