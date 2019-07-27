<!--Navbar-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{ url('/') }}" class="navbar-brand">Logo</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-primary active" href="{{ url('/') }}"><i class="fa fa-fw fa-home"></i> <b>Home</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="#section1">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section2">Section 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section3">Section 3</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Section 4
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('/freq_ques') }}">Questions</a>
                        <a class="dropdown-item" href="#section42">Link 2</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="{{ url('/contact') }}"><i class="fa fa-fw fa-envelope"></i> Contact</a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li class="nav-item">
                <form class="navbar-form navbar-left" action="/action.php">
                    <div class="input-group">
                        <input type='text' class='form-control' placeholder="Search">
                        <div class="input-group-btn">
                            <button type='submit' class="btn btn-success"><i class="fa fa-fw fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a class="nav-link" href="#">
                    <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-user"></i> <b>Sign Up</b>
                        <span class="glyphicon glyphicon-user"></span>
                    </button>
                </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#login" data-toggle="modal">
                    <button type="button" class="btn btn-primary"><i class="fa fa-fw fa-sign-in"></i> Log In
                        <span class="glyphicon glyphicon-log-in"></span>
                    </button>
                </a>
            </li>
        </ul>
    </div>
</nav>
<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/action.php">
                    <div class="form-group">
                        <label for="email" class="control-label col-sm-2">Email: </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pwd" class="control-label col-sm-2">Password: </label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="pwd">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label><input type="checkbox"> Remember Me</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>
