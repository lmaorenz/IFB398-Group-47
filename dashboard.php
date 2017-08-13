<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <title>Notespool</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        
    </head>
    <body>
        <header>
            <div class="lowPad"><img src="img/logo.png" width="50"></div>
            <div class="centerWrap">
                <nav>
                    <ul>
                        <li><a href="dashboard.html"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></li>
                        <li><a href="admin.html">ADMIN</a></li>
                        <li><a href="quiz.html">QUIZ</a></li>
                        <li><a href="account.html">MY ACCOUNT</a></li>
                        <li><a href="index.html">LOGOUT</a></li>
                        <?php
                            echo "<li>logged in as ",$_SESSION['name'],"</li>";
                        ?>
                    </ul>
                </nav>
            </div>
        </header>
        <div id="sidePane">
        
        </div>
        <div id="container">
            <div class="centerWrap" style="margin:10px;">
                
                <form>
                    <label>Show posts from: </label>
                    <select>
                        <option>Beginning of time</option>
                        <option>This Week</option>
                        <option>Today</option>
                    </select>
                    <label>Subject: </label>
                    <select>
                        <option>All</option>
                        <option>IFB101</option>
                        <option>IFB102</option>
                        <option>IFB103</option>
                        <option>IFB104</option>
                    </select>
                    <label>Topic: </label>
                    <select>
                        <option>All</option>
                        <option>Assignment 1</option>
                        <option>Assignment 2</option>
                        <option>General</option>
                    </select>
                    <button>
                        New Post <i class="fa fa-file-text" aria-hidden="true"></i>
                    </button>
                </form>
                
            </div>
            <div class="content">
                <span class="score"><i class="fa fa-plus fa-3x" aria-hidden="true"></i><br>600</span>
                <a href="posts.html"><div class="details">
                    <h1><i class="fa fa-picture-o" aria-hidden="true"></i> Photo of my work!</h1><h2>by Alex</h2>
                    </div></a>
            </div>
            <div class="content">
                <span class="score"><i class="fa fa-plus fa-3x" aria-hidden="true"></i><br>356</span>
                <a href="posts.html"><div class="details">
                    <h1><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF of all my notes</h1><h2>by Parker</h2>
                    </div></a>
            </div>
            <div class="content">
                <span class="score"><i class="fa fa-plus fa-3x" aria-hidden="true"></i><br>254</span>
                <a href="posts.html"><div class="details">
                    <h1><i class="fa fa-file-text" aria-hidden="true"></i> Tips and tricks</h1><h2>by Lorenz</h2>
                    </div></a>
            </div>
            <div class="content">
                <span class="score"><i class="fa fa-minus fa-3x" aria-hidden="true" style="color:#db6f7c;"></i><br>-69</span>
                <a href="posts.html"><div class="details">
                    <h1><i class="fa fa-file-text" aria-hidden="true"></i> NOTESPOOL SUCKS BOO</h1><h2>by Trump</h2>
                    </div></a>
            </div>
        </div>
        <footer>
            <div class="centerWrap">
                <p>Social Notespool, all rights reserved.</p>
            </div>
        </footer>
        
        
    </body>
</html>