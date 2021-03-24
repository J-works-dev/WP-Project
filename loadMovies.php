<!DOCTYPE html>
<html>
    <head>
        <title>Web Programing Project</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div class="content">
            <div class="title">
                <a href="index.php">SMT Movie Rental</a>
            </div>
            <ul class="nav">
                <li class="nav-index"><a href="index.php">HOT 50</a></li>
                <li class="nav-index"><a href="movies.php">Movies</a></li>
                <li class="nav-index active"><a href="loadMovies.php">Load Movies</a></li>
                <!-- <li class="nav-index"><a href="activity2.php">Activity 2</a></li>
                <li class="nav-index"><a href="activity3.php">Activity 3</a></li>
                <li class="nav-index"><a href="activity4.php">Activity 4</a></li>
                <li class="nav-index"><a href="activity5.php">Activity 5</a></li>
                <li class="nav-index"><a href="activity6.php">Activity 6</a></li> -->
            </ul>
            <main>
                <section>
                    <article id="home"class="col-lg-12">
                        <form action="getCSV.php" enctype="multipart/form-data" method="post" role="form">
                            <button type="submit" class="btn btn-default" name="submit" value="submit">Load Movies</button>
                        </form>
                    </article>
                </section>
            </main>
            <div class="footer">
                Web Programming Project | Sang Joon Lee | 30024165 | <a href="mailto:30024165@tafe.wa.edu.au">30024165@tafe.wa.edu.au</a>
            </div>
        </div>
    </body>
</html>