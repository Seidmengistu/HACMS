<?php
SESSION_START();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Mirrored from preview.cruip.com/splash/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jul 2020 17:13:36 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Member-Login</title>
    <script>
        console.log("%cImportant!", "color: blue; font-size: x-large");
        console.log(
            "%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉",
            "font-size: large");
    </script>
    <link rel="stylesheet" href="css-member/style.css">
</head>

<body class="t">
    <div class="rt">
        <header class="ny reveal-from-top">
            <div class="tcontainern">
                <div class="nk">
                    <div class="nx">

                    </div><button id="tc" class="tc" aria-controls="primary-menu" aria-expanded="false"><span
                            class="iz">Menu</span> <span class="th"><span class="tp"></span></span></button>
                    <nav id="n_" class="n_">
                        <div class="nj">

                           
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <main class="nb">
            <section class="ip nw rillustration-section-i">
                <div class="scontainero">
                    <div class="signin-inner rp">
                        <div class="rd sk">
                            <h1 class="sq">Welcome Member.</h1>
                        </div>
                        <div class="tiles-wrap">
                            <div class="nm">
                                <div class="ng">
                                    <form action='loginm-code.php' method="POST">
                                        <fieldset>
                                            <div class="om"><label class="w iz" for="name">Full name</label> <input
                                                   name="fullname" id="name" class="_" type="name" placeholder="Full Name" required="">
                                            </div>
                                            <div class="om"><label class="w iz">Id Number</label> <input
                                                     name='id' id="email" class="_"  placeholder="Id" required="">
                                            </div>
                                            
                                            <div class="oj ui"><button type='submit' name="register"  class="tbuttonn fbuttonl pbuttond">Sign
                                                   up</button></div>
                                        </fieldset>
                                    </form>
                                    <div class="signin-bottom sw">
                                        <div class="al c sk sl">Don't  have an account? <a class="func-link"
                                                href="signup.php">Sign UP Here</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </section>
            <section class="ie nw sillustration-section-o">

            </section>

        </main>
        <footer class="py-5 bg-inverse" style="text-align:center">
            <div class="containerr">
                <p style="color:green" class="m-0 text-center text-white">Copyright &copy;2021 HACMS||BBDMS</p>
            </div>
            <!-- /.container -->
        </footer>
    </div>
    <script src="includes/js/sweetalert.min.js"></script>
    <?php require_once('notify.php');?>
    <script src="css-member/js/main.min.js"></script>
</body>
<!-- Mirrored from preview.cruip.com/splash/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jul 2020 17:19:05 GMT -->

</html>