<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Curriculum about Estarlyn Hernandez">
    @vite('resources/css/app.css')
    {{-- @vite('resources/css/desktop.css') --}}
    @vite('resources/js/app.js')
    <title>Document</title>.
</head>

<body>
    <main class="main">
        <section>
            <div class="user">
                <div class="user__img"></div>
                <div class="user__info">
                    <div class="user__personal">
                        <h2 class="user__name">Estarlyn Hernandez</h2>
                        <p class="user__profession">Web developer</p>
                    </div>
                    <h2 class="user__title">Info</h2>
                    <div class="personal">
                        <p class="personal__text">Name: <span class="personal__info">Estarlyn</span> <span
                                class="personal__info">Francisco</span></p>
                        <p class="personal__text">Last Name: <span class="personal__info">Hernandez</span> <span
                                class="personal__info">Ulloa</span></p>
                        <p class="personal__text">Nationality: <span class="personal__info">Dominiacan</span></p>
                        <p class="personal__text">Languages: <span class="personal__info" title="Native">Spanish</span>
                            <span class="personal__info" title="School">Italian</span>
                            <span class="personal__info" title="A2">English</span>
                        </p>
                        <p class="personal__text">Live: <span class="personal__info">Naples, Italy</span></p>
                        <p class="personal__text">Birstday: <span class="personal__info"
                                title="{{ date_diff(new datetime(), new datetime('1998-04-21'))->y }} years old">21/4/1998</span>
                        </p>
                        <p class="personal__text">Gender: <span class="personal__info">Male</span></p>
                    </div>
                    <div class="user__info">
                        <h2 class="user__title">Contact</h2>
                        <p class="personal__text">E-Mail: <a class="personal__info" target="blank"
                                href="mailto:estarlynhernandez@hotmail.com">Estarlyn Hernandez</a></p>
                        <p class="personal__text">LinkedIn: <a class="personal__info" target="blank"
                                href="https://www.linkedin.com/in/estarlyn-francisco-hernandez-ulloa-aa029a208/">Estarlyn
                                Hernandez</a></p>
                        <p class="personal__text">Github: <a class="personal__info" target="blank"
                                href="https://github.com/EstarlynHernandez">Estarlyn Hernandez</a></p>
                        <p class="personal__text">Telegram: <a class="personal__info" target="blank"
                                href="http://t.me/estarlyn">Estarlyn Hernandez</a></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="info">
            <div class="open">
                <svg width='5rem' height='10rem'>
                    <line stroke='black' x1='65%' y1='30%' x2='20%' y2='50%' stroke-width='10' stroke-linecap="round" />
                    <line stroke='black' x1='65%' y1='75%' x2='20%' y2='50%' stroke-width='10' stroke-linecap="round" />
                </svg>
            </div>
            <div class="content">
                <div class="change">
                    <p>Loading...</p>
                </div>
                <h2 class="content__title">Projects</h2>
                <div class="content--container">
                    <div class="projects">
                    </div>
                </div>
            </div>
            <ul class="menu">
                <li class="menu__link" id="about">About</li>
                <li class="menu__link" id='contact'>Contact</li>
                <li class="menu__link" id='home'>Home</li>
                <li class="menu__link" id='skill'>Skills</li>
                <li class="menu__link" id='project'>Projects</li>
            </ul>
        </section>
    </main>
</body>

</html>
