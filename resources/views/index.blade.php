<!DOCTYPE html>
<html>
    <head>
        <title>Thomas Andreo : Frontend Engineer</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:500' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <header>
            <div class="wrap">
                <nav class="external">
                    <ul>
                        <li class="github">
                            <a href="#"><span>Github</span></a>
                        </li>
                        <li class="codepen">
                            <a href="http://codepen.io/petate/"><span>Codepen</a></span>
                        </li>
                        <li class="linkedin">
                            <a href="#"><span>Linkedin</span></a>
                        </li>
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
                    <div id="quote" data-endpoint="{{ url() . '/quote/get' }}" data-token="{{ csrf_token() }}">
                        <p>Insert quote here</p>
                    </div>
                </div>
            </section>

            <section id="intro">
                <div class="wrap">
                    <div class="content">
                        <p>I'm a self-taught frontend developer with 12 years of experience in web development. I believe that well-designed, efficient and handcrafted code makes a difference.</p>
                    </div>
                </div>
            </section>

        </main>

        <footer>
            <p>2015</p>
        </footer>

        <script src="{{ asset('js/scripts.js') }}"></script>

    </body>
</html>