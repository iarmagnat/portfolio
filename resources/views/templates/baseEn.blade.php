<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Front awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--bootstrap: Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <link href="{{ asset('css/base.css') }}" rel="stylesheet">

</head>

<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/home/en">Ivan Armagnat</a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="{{ $active == 'home' ? 'active' : '' }}"><a href="/home/en"><i class="fa fa-home"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="{{ $active == 'presentation' ? 'active' : '' }}"><a href="/presentation/en">About</a></li>
                        <li class="{{ $active == 'resume' ? 'active' : '' }}"><a href="/resume/en">Resume</a></li>
                        <li class="{{ $active == 'contact' ? 'active' : '' }}"><a href="/contact/en">Contact</a></li>
                        


                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Languages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/{{ $active }}/fr">Français</a></li>
                            <li><a href="/{{ $active }}/en">English</a></li>
                        </ul>
                        </li>


                    </ul>
                </div> <!--/.nav-collapse -->
            </div>
        </nav>
    </header>

    <div id="content">
        <main>@yield('content')</main>
    </div>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-7 col-sm-9 col-lg-10" id="footerMail">
                    <p id="footContactLarge">Reach me: <a href="mailto:ivan.armagnat@gmail.com">ivan.armagnat@gmail.com</a>.</p>
                    <p id="footContactSmall"><a href="mailto:ivan.armagnat@gmail.com">ivan.armagnat@gmail.com</a></p>
                </div>
                <div class="col-xs-5 col-sm-3 col-lg-2">
                    <div class="row" id="footerLinks">
                        <div class="col-xs-4">
                            <a href="https://github.com/iarmagnat"><i class="fa fa-github-square fa-3x"></i></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="https://fr.linkedin.com/in/ivan-armagnat-0b40bb133"><i class="fa fa-linkedin-square fa-3x"></i></a>
                        </div>
                        <div class="col-xs-4">
                            <a href="http://www.viadeo.com/p/0022cx2fztumvq0c"><i class="fa fa-viadeo-square fa-3x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>