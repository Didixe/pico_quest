<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discovering Pico.css</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
    <nav data-theme="light" style="padding-top: 0px;padding-bottom:5px;">
        <ul>
                <li class="discovering">
                    <strong>Discovering Pico</strong>
                </li>
            </ul>
            <ul>
                <li><a class="home" href="#">Home</a></li>
                <li><a class="about" href="#">About</a></li>
                <li>
                    <details role="list" dir="rtl">
                        <summary aria-haspopup="listbox" role="link" class="contrast" >Categories</summary>
                        <ul role="listbox" class="listbox">
                            <li><a href="#" data-theme-switcher="photos">Photos</a></li>
                            <li><a href="#" data-theme-switcher="articles">Articles</a></li>
                            <li><a href="#" data-theme-switcher="projects">Projects</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </nav>
    <header >
        <div class="Title">
            <h1>Journey into Pico.css</h1>
            <a href="https://picocss.com">https://picocss.com</a>
        </div>
    </header>
    <main >
        <div class="grid">
            <div class="section">
                <img src="assets\image\femme-tenue-pagaie-kayak-riviere_1153-4358.jpg" alt="photo d'une femme faisant du canoe">
                <h2>Visit Components classless</h2>
                <p>Some quick example text to build on th card titleand make up the bulk of the card's content.
                </p>
                <a href="#" role="button">Read more</a>
            </div>
            <div class="section">
                <img src="assets\image\personne-debout-sac-dos-au-bord-falaise-genere-par-ia.jpg" alt="homme debout face à une cascade">
                <h2>Facing Cascade style sheet</h2>
                <p>Some quick example text.</p>
                <a href="#" role="button">Read more</a>
            </div>
            <div class="section">
                <img src="assets\image\calanques-port-pin-cassis-france-pres-marseille.jpg" alt="paysage calanques">
                <h2>Contemplate Form Inputs river</h2>
                <p>Make up the bulk of the card's content.</p>
                <a href="#" role="button">Read more</a>
            </div>
            <div class="section">
                <img src="assets\image\gros-plan-pieds-personne-portant-bottes-marchant-dans-champ-herbe-doree-automne_877015-1236.jpg" alt="homme alongé dans un champ ">
                <h2>Enjoy no Javascript</h2>
                <p>Build on the card title and make up the bulk of the card's content.</p>
                <a href="#" role="button">Read more</a>
            </div>
        </div>
    </main>
    <footer data-theme="light" style="padding-top: 0px;padding-bottom:0px;">
    <div class="end">
        <h1>The css frameworks are very useful</h1>
        <p>Learning them comes with practice</p>
    </div>
        <div class="copyright">
            <p>© 2023 wilders | images @picsum</p>
        </div>
    </footer>
</body>
</html>