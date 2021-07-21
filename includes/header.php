<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <style>
            .btn1,
            .btn2,
            .btn3 {

                color: green;
            }

            .btn4,
            .btn5,
            .btn6 {

                color: green;
            }

            .btn1:hover,
            .btn2:hover,
            .btn3:hover {
                color: blue;
            }

            .btn4:hover,
            .btn5:hover,
            .btn6:hover {
                color: blue;
            }


         .btn::before{
          content:"";
          position:absolute;
          left:0;
          width:100%;
          height:100%;
          background:Violet;
          z-index:-1;
          transition:0.8s;
      } 
        </style>
        <div class="container">
            <a class="navbar-brand" href="home.php">HIV/AIDS Club Control System with BBDMS</a>
            <div class="collapse navbar-collapse " id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="">
                        <a class="btn btn1" href="member-login.php">login as Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn2" href="whybecome.php">Why Become Donor</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn3" href="become-donar.php">Become a Donar</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn4" href="search-donor.php">Search Blood</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>