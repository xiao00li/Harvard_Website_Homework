<!--make a variable called Article-->
<?php $article = "Article VII";?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>The United States Constitution:
            <?php echo ($article); ?>
        </title>
        <meta charset="utf-8" />
        <meta name=viewport content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />
        <link rel="stylesheet" href="css/constitution.css" />
    </head>

    <body id="body7">
        <div class="container">
            <div class="row">
                <div class="twelve columns">
                    <?php include("includes/header.php"); ?>
                </div>
            </div>
            <div class="row">
                <div class="three columns">
                    <?php include("includes/navigation.php"); ?>
                </div>
                <div class="nine columns">
                    <main role="main">
                        <h2><?php echo ($article); ?></h2> The Ratification of the Conventions of nine States, shall be sufficient for the Establishment of this Constitution between the States so ratifying the Same.
                        <p>done in Convention by the Unanimous Consent of the States present the Seventeenth Day of September in the Year of our Lord one thousand seven hundred and Eighty seven and of the Independence of the United States of America the Twelfth In witness whereof We have hereunto subscribed our Names,</p>
                        <p>G. WASHINGTON &mdash; Presidt. and deputy from <strong>Virginia</strong></p>
                        <p>[Signed also by the deputies of twelve States.]</p>
                        <p><strong>Delaware</strong></p>
                        <p>Geo: Read
                            <br /> Gunning Bedford jun
                            <br /> John Dickinson
                            <br /> Richard Bassett
                            <br /> Jaco: Broom</p>
                        <p><strong>Maryland</strong></p>
                        <p>James MCHenry
                            <br /> Dan of ST ThoS. Jenifer
                            <br /> DanL Carroll.</p>
                        <p><strong>Virginia</strong></p>
                        <p>John Blair--
                            <br /> James Madison Jr.</p>
                        <p><strong>North Carolina</strong></p>
                        <p>WM Blount
                            <br /> RichD. Dobbs Spaight.
                            <br /> Hu Williamson</p>
                        <p><strong>South Carolina</strong></p>
                        <p>J. Rutledge
                            <br /> Charles 1ACotesworth Pinckney
                            <br /> Charles Pinckney
                            <br /> Pierce Butler.</p>
                        <p><strong>Georgia</strong></p>
                        <p>William Few
                            <br /> Abr Baldwin</p>
                        <p><strong>New Hampshire</strong></p>
                        <p>John Langdon
                            <br /> Nicholas Gilman</p>
                        <p><strong>Massachusetts</strong></p>
                        <p>Nathaniel Gorham
                            <br /> Rufus King</p>
                        <p><strong>Connecticut</strong>
                            <br /> WM. SamL. Johnson
                            <br /> Roger Sherman</p>
                        <p><strong>New York</strong></p>
                        <p>Alexander Hamilton</p>
                        <p><strong>New Jersey</strong></p>
                        <p>Wil: Livingston
                            <br /> David Brearley.
                            <br /> WM. Paterson.
                            <br /> Jona: Dayton</p>
                        <p><strong>Pennsylvania</strong></p>
                        <p>B Franklin
                            <br /> Thomas Mifflin
                            <br /> RobT Morris
                            <br /> Geo. Clymer
                            <br /> ThoS. FitzSimons
                            <br /> Jared Ingersoll
                            <br /> James Wilson.
                            <br /> Gouv Morris</p>
                        <p>Attest William Jackson Secretary</p>
                    </main>
                </div>
            </div>

            <div class="row">
                <div class="twelve columns">
                    <?php include("includes/footer.php"); ?>
                </div>
            </div>

        </div>
    </body>

    </html>
