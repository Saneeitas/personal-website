<!-- @format -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sanee Itas</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap"
        rel="stylesheet" />
</head>

<body>
    <?php include("header.php"); ?>

    <div class="middle-container">
        <div class="profile">
            <img src="images/saneeitas.gif" alt="saneeitas's pic" />
            <h2>Hi.</h2>
            <p class="intro">
                I am a Web Application Developer based in Kano, Nigeria. I'm
                Co-founder and CTO at Northino. I specialized in Backend Development.
            </p>
        </div>
        <hr />
        <div class="skills">
            <h2>My Skills.</h2>
            <div class="skill-row">
                <img class="code-img" src="images/coding.png" alt="pic" />
                <h3>Front-end</h3>
                <table cellspacing="10">
                    <thead>
                        <tr>
                            <td>HTML</td>
                            <td>★★★★</td>
                            <td>CSS</td>
                            <td>★★★★</td>
                        </tr>
                        <tr>
                            <td>JavaScript</td>
                            <td>★★★</td>
                            <td>Material UI</td>
                            <td>★★★★</td>
                        </tr>
                        <tr>
                            <td>Bootstrap</td>
                            <td>★★★★</td>
                            <td>ReactJS</td>
                            <td>★★★</td>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="skill-row">
                <img class="code-image" src="images/web-development.png" alt="" />
                <h3>Back-end</h3>
                <table cellspacing="10">
                    <thead>
                        <tr>
                            <td>PHP</td>
                            <td>★★★★</td>
                            <td>NodeJS</td>
                            <td>★★★★</td>
                        </tr>
                        <tr>
                            <td>PrismaJS</td>
                            <td>★★★★</td>
                            <td>ExpressJS</td>
                            <td>★★★★</td>
                        </tr>
                        <tr>
                            <td>MySQL</td>
                            <td>★★★</td>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="skill-row">
                <img class="code-img" src="images/fro.png" alt="" />
                <h3>Others</h3>
                <table cellspacing="10">
                    <thead>
                        <tr>
                            <td>Adobe Photoshop</td>
                            <td>★★★★</td>
                        </tr>
                        <tr>
                            <td>MicroSoft Word</td>
                            <td>★★★★</td>
                        </tr>
                        <tr>
                            <td>MicroSoft Excel</td>
                            <td>★★★★</td>
                        </tr>
                        <tr>
                            <td>MicroSoft Powerpoint</td>
                            <td>★★★★</td>
                        </tr>
                    </thead>
                </table>
            </div>
            <hr />

            <div class="skill-row">
                <h2>Education and Certificate</h2>
                <ul>
                    <li>Diploma in ICT at CyberSpace Info Tech 2018</li>
                    <li>
                        Certificate in Front-end Web Development (HTML, CSS & JavaScript)
                        2022
                    </li>
                    <li>Certificate in Backend Web Development (PHP & MySQL) 2022</li>
                    <li>The Complete Web Development Bootcamp by Dr. Angela Yu 2022</li>
                    <li>BSc. Software Engineering 2023</li>
                </ul>
            </div>
        </div>

        <hr />
        <div class="contact-me">
            <h2>Get In Touch.</h2>
            <h3>I am currently available for freelance work.</h3>
            <p class="contact-message">
                If you have a project that you want to get started, think you need my
                help with something, then get in touch.
            </p>
            <a class="btn" href="mailto:name@email.com">CONTACT ME</a>
        </div>
    </div>

    <?php include("footer.php"); ?>
</body>

</html>