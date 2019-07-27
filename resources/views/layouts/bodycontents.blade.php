<!--MainBody-->
<div class="container1">
    <!--Section1, About-->
    <div id="section1" class="container-fluid bg-success" style="padding-top:20px;padding-bottom:70px;">
        <h1 style="font-weight:bold;" align="center">About</h1>
        <h2 align="center">Any Title</h2>
        <p align="center">Any Paragraph</p>
    </div>

    <!--Section2-->
    <div id="section2" class="container-fluid bg-warning" style="padding-top:20px;padding-bottom:70px;background-color:whitesmoke;">
        <h1 style="font-weight:bold;" align="center">Section 2</h1>
        <div class="container mt-3">
            <h2>Dynamic Tabs with jQuery</h2>
            <p>Click on the Tabs to display the active and previous tab.</p>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#home1">Home 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu11">Menu 11</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu12">Menu 12</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content border mb-3">
                <div id="home1" class="container tab-pane active"><br>
                    <h3>HOME</h3>
                    <p>Text1</p>
                    <p>Text2</p>
                </div>
                <div id="menu11" class="container tab-pane fade"><br>
                    <h3>Menu 1</h3>
                    <p>Text1</p>
                    <p>Text2</p>
                </div>
                <div id="menu12" class="container tab-pane fade"><br>
                    <h3>Menu 2</h3>
                    <p>Text1</p>
                    <p>Text2</p>
                </div>
            </div>
            <p class="act"><b>Active Tab</b>: <span></span></p>
            <p class="prev"><b>Previous Tab</b>: <span></span></p>
        </div>
    </div>

    <!--Section3-->
    <div id="section3" class="container-fluid bg-danger" style="padding-top:20px;padding-bottom:70px;">
        <h1 style="font-weight:bold;" align="center">Section 3</h1>
        <div class="container mt-3">
            <h2>Toggleable Tabs</h2>
            <br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                    <h3>HOME</h3>
                    <p>Text1</p>
                    <p>Text2</p>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <h3>Menu 1</h3>
                    <p>Text1</p>
                    <p>Text2</p>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                    <h3>Menu 2</h3>
                    <p>Text1</p>
                    <p>Text2</p>
                </div>
            </div>
        </div>
    </div>
    <div id="section42" class="container-fluid bg-info" style="padding-top:20px;padding-bottom:70px">
        <h1 align="center" style="font-weight:bold;">Section 4 Submenu 2</h1>
        <h3 align="center">Text1</h3>
        <p align="center">Text2</p>
    </div>
</div>
