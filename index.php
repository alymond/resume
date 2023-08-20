<!DOCTYPE html>
<html lang="en" data-theme='dark'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <title>Document</title>
</head>
<body>
    <header class='grid'>
        <div class='container-fluid'>
            <h1>Alysstair Renhee Nikolai Y. Morales</h1>
            <h2>Web Developer</h2>
            <p>alymond.business@outlook.com</p>
            <p>09763202113</p>  
        </div>
        <div class='container-fluid'>
            <p>
            Results-driven and ever-curious, I am a passionate person who thrives on collaboration, technology, and business. With an insatiable drive for perfection. My dedication and versatility make me a valuable asset in delivering impact to any team
            </p>
            <button id="themeButton">Switch</button>
        </div>
    </header>

    <section class='container-fluid'>
        <h3>Skills</h3>
        <div class='grid'>
            <div>
                <ul>
                    <li>React JS</li>
                    <li>Next JS</li>
                    <li>Node JS</li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>Typescript</li>
                    <li>Javascript</li>
                    <li>MongoDB</li>
                </ul>
            </div>
        </div>
    </section>

    <section class='container-fluid'>
        <div class='grid'>
            <div>
                <h3>Experience</h3>
                <p>Freelance Web Developer</p>
                <p>April 2021 - Present</p>
            </div>
            <div>
                <h3>Education</h3>
                <p>BA Political Science</p>
                <p>Universidad de Manila</p>
                <p>2019 - 2023</p>
            </div>
        </div>
    </section>

    <section class='container-fluid'>
        <div class='grid'>
            <div>
                <h3>Amiel Jeremy Reyes</h3>
                <p>Application Systems Engineer</p>
                <p>WeServ Systems International</p>
                <p>09210475652</p>
            </div>
            <div>
                <h3>Emmanuel Keith Villanueva</h3>
                <p>SAP CRM Functional Lead</p>
                <p>DXC Technology</p>
                <p>e.villanueva@dxe.com</p>
                <p>09394070189</p>
            </div>
            <div>
                <h3>Francis Miguel R. Agravante</h3>
                <p>Mortgage Associate</p>
                <p>HSBC Canada</p>
                <p>09175602351</p>
            </div>
        </div>
    </section>

    <script>
        const themeButton = document.getElementById('themeButton');
        const html = document.documentElement;

        themeButton.addEventListener('click', () => {
        const currentTheme = html.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        html.setAttribute('data-theme', newTheme);
        });
    </script>
</body>
</html>