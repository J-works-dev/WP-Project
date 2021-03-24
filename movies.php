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
                <li class="nav-index active"><a href="movies.php">Movies</a></li>
                <li class="nav-index"><a href="loadMovies.php">Load Movies</a></li>
                <!-- <li class="nav-index"><a href="activity2.php">Activity 2</a></li>
                <li class="nav-index"><a href="activity3.php">Activity 3</a></li>
                <li class="nav-index"><a href="activity4.php">Activity 4</a></li>
                <li class="nav-index"><a href="activity5.php">Activity 5</a></li>
                <li class="nav-index"><a href="activity6.php">Activity 6</a></li> -->
            </ul>
            <main>
                <section>
                    <h3>Hot 50s!!</h3>
                    <article id="home"class="col-lg-12">
                        <h3>Member List</h3>
                        <!-- <?php include 'hot50.php'; ?> -->
                        <form action="getCSV.php" enctype="multipart/form-data" method="post" role="form">
                            <div class="form-group">
                                <label for="exampleInputFile">File Upload</label>
                                <input type="file" name="file" id="file" size="200000">
                                <p class="help-block">Only Excel/CSV File Import.</p>
                            </div>
                            <button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
                        </form>
                        <?php include 'getCSV.php'; ?>
                    </article>
                </section>
            </main>
            <div class="footer">
                <p>Web Programming Project | Sang Joon Lee | 30024165 | <a href="mailto:30024165@tafe.wa.edu.au">30024165@tafe.wa.edu.au</a></p>
            </div>
        </div>
    </body>
</html>