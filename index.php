<?php 
include ("login.php"); 
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">

        <title>Secret Diary</title>

        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/slate/bootstrap.min.css" rel="stylesheet" integrity="sha256-JcgoO7qVianjbv43Z5KinReHzk9/rEZg5m6z/ZZy3DI= sha512-rYMbEYJa5+7VkGdfAypdYHqwIdCNEBKh8lhKUNIv58tgHQuHHzXC/Bzf66BFDkTjq970Lc6OIEpgllKINGDCKQ==" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
		queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></ script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/ respond.min.js"></script> <![endif]-->

        <style>
            .navbar-brand {
                font-size: 1.8em;
            }
            
            #topContainer {
                background-color:#272B30;
                height: 400px;
                width: 100%;
                background-size: cover;
            }
            
            #topRow {
                margin-top: 100px;
                text-align: center;
            }
            
            #topRow h1 {
                font-size: 300%;
            }
            
            #emailSignup {
                margin-top: 50px;
            }
            
            .bold {
                font-weight: bold;
            }
            
            .marginTop {
                margin-top: 30px;
            }
            
            .center {
                text-align: center;
            }
            
            .title {
                margin-top: 100px;
                font-size: 300%;
            }
                    
            .marginBottom {
                margin-bottom: 30px;
            }
            

        </style>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">

        <div class="navbar navbar-inverse navbar-fixed-top">

            <div class="container">

                <div class="navbar-header">

                    <button class="navbar-toggle" data-target=".navbar-collapse"
                        data-toggle="collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Secret Diary</a>
		
                </div>

                <div class="collapse navbar-collapse">

                    <form class="navbar-form navbar-right" method="post">
                        <div class="form-group">
                            <input class="form-control" name="loginemail" placeholder="Email" type="email"
                                value="<?php echo addslashes($_POST['loginemail']); ?>"/>
                        </div>

                        <div class="form-group">
                            <input class="form-control" name="loginpassword" placeholder="Password"
                                type="password" value="<?php echo addslashes($_POST['loginpassword']); ?>"/>
                        </div>
                        <input class="btn btn-default" name="submit" type="submit" value="Log In"/>
                    </form>
                </div>
            </div>
        </div>

        <div class="container contentContainer" id="topContainer">

            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="topRow">

                    <h1 class="marginTop">Secret Diary</h1>

                    <p class="lead">Your own private diary, with you wherever you go</p>

                    <?php 
							if ($error){
								
								echo '<div class="alert alert-warning">'.addslashes($error).'</div>';
							}
							if ($message){
								
								echo '<div class="alert alert-success">'.addslashes($message).'</div>';
							}
						
						?>

                    <p class="bold marginTop">Interested? Sign Up Below!</p>

                    <form class="marginTop" method="post">

                        <div class="form-group">

                            <label for="email">
                                Email Address
                            </label>
                            <input class="form-control" name="email" placeholder="Your email" type="email"
                                value="<? echo addslashes($_POST['email']); ?>"/>

                        </div>

                        <div class="form-group">

                            <label for="password">
                                Password
                            </label>
                            <input class="form-control" name="password" placeholder="Password"
                                type="password" value="<? echo addslashes($_POST['password']); ?>"/>
                        </div>

                        <input class="btn btn-primary btn-lg marginTop" name="submit" type="submit"
                            value="Sign Up"/>

                    </form>

                </div>

            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <script>
            $(".contentContainer").css("min-height", $(window).height());
        </script>

    </body>
</html>