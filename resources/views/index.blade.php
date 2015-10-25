<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:500' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    </head>
    <body>

        <header>
            <div class="wrap">
                <nav class="menu">
                    <ul>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#experience">Experience</a></li>
                        <li><a href="#stack">My Dev Stack</a></li>
                    </ul>
                </nav>
                <nav class="external">
                    <ul>
                        <li class="github"><a href="#"><span>Github</span></a></li>
                        <li class="linkedin"><a href="#"><span>Linkedin</span></a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>

            <section id="hero">
                <div class="wrap">
                    <div class="title-wrap">
                        <div class="title">
                            <h1 data-content="Thomas Andreo"><span>Thomas Andreo</span></h1>
                            <strong class="subtitle">Front-End Engineer</strong>
                        </div>
                    </div>
                    <div id="thomas">
                        <div id="thomas-shadow"></div>
                        <div id="thomas-head"></div>
                        <div class="eye left"></div>
                        <div class="eye right"></div>
                        <div class="iris left"></div>
                        <div class="iris right"></div>
                    </div>
                </div>
            </section>

            <section id="skills">
                <div class="wrap">
                    <h1 data-content="Skills"><span>Skills</span></h1>
                    <div class="content">
                        <ul>
                            <li>
                                <h2>Laravel Development</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem animi quos fugiat ratione perspiciatis voluptatum, unde quasi.</p>
                            </li>
                            <li>
                                <h2>Modular Javascript</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem animi quos fugiat ratione perspiciatis voluptatum, unde quasi.</p>
                            </li>
                            <li>
                                <h2>Sustainable CSS</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem animi quos fugiat ratione perspiciatis voluptatum, unde quasi.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section id="projects">
                <div class="wrap">
                    <h1 data-content="Projects"><span>Projects</span></h1>
                    <div class="content">
                        <ul>
                            <li>
                                <h2>Project #1</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem animi quos fugiat ratione perspiciatis voluptatum, unde quasi.</p>
                            </li>
                            <li>
                                <h2>Project #2</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem animi quos fugiat ratione perspiciatis voluptatum, unde quasi.</p>
                            </li>
                            <li>
                                <h2>Project #3</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem animi quos fugiat ratione perspiciatis voluptatum, unde quasi.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section id="experience">
                <div class="wrap">
                    <h1 data-content="Experience"><span>Experience</span></h1>
                    <div class="content">
                        <ul>
                            <li>
                                <h2>Lead Frontend Developer, Le Site Inc.</h2>
                                <p><strong>June 2015 - Today</strong></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem animi quos fugiat ratione perspiciatis voluptatum, unde quasi.</p>
                            </li>
                            <li>
                                <h2>Frontend Developer, Le Site Inc.</h2>
                                <p><strong>May 2012 - June 2015</strong></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem animi quos fugiat ratione perspiciatis voluptatum, unde quasi.</p>
                            </li>
                            <li>
                                <h2>Web Designer, Frontend Developer, Mentel Inc.</h2>
                                <p><strong>May 2008 - April 2012</strong></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem animi quos fugiat ratione perspiciatis voluptatum, unde quasi.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section id="stack">
                <div class="wrap">
                    <h1 data-content="My Dev Stack"><span>My Dev Stack</span></h1>
                    <div class="content">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </section>

        </main>

        <footer>2015</footer>

        <script src="{{ asset('js/scripts.js') }}"></script>

    </body>
</html>