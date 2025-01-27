
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['msg'])) {

        $host = 'localhost'; 
        $username = 'root'; 
        $password = ''; 
        $database = 'mesages';

        $db = new mysqli($host, $username, $password, $database);

        if ($db->connect_error) {
            die('Connection failed: ' . $db->connect_error);
        }

        $full_name = $db->real_escape_string($_POST['full_name']);
        $email = $db->real_escape_string($_POST['email']);
        $msg = $db->real_escape_string($_POST['msg']);

        // Assuming your table name is 'user_data'
        $sql = "INSERT INTO mesages (full_name, email, msg) VALUES ('$full_name', '$email', '$msg')";

        if ($db->query($sql) === true) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }

        $db->close();
    } else {
        echo "Form fields are not set.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/aed89df169.js" crossorigin="anonymous"></script>
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <title>Profile</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <img src="certificates/alas.png">
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>

                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>

                        <li class="nav__item"><img src="moon.png" id="icon"></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hello,<br>I'am  <span id="typewriter" class="home__title-color">></span><span id="cursor">|</span><br>Web Developer</h1>
                
                    <a href="#contact" class="button">Contact</a>
                    <a href="certificates/Ace Cornico Padilla - RESUME .docx" download id="dl">Resume <i class="fa-solid fa-arrow-up-right-from-square"></i> </a>  
                </div>
                <div class="home__social">
                    <a href="" class="home__social-icon"><i class="fa-brands fa-facebook"></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-instagram' ></i></a>
                    <a href="" class="home__social-icon"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="mailto:christiansuarez008@gmail.com" class="home__social-icon"><i class="fa-solid fa-envelope"></i></a>
                </div>
                
                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                            <image class="home__blob-img" x="50" y="60" href="certificates/ace.png"/>
                        </g>
                    </svg>
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="certificates/IMG_7513.JPG" alt="acepicture">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I am Christian</h2>
                        <p class="about__text">Living in Gapan City, Nueva Ecija. I am 19 years old. studying at NEUST in the bachelor's course in science of information technology. My hobbies are playing online games, chess, and watching movies. I also like to go out with my friends and families. My website serves as a platform to showcase my projects, share experiences, and connect with the tech community as I work towards my dream of becoming a full-stack developer.</p>       
  
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text">As a frontend developer, my proficiency in HTML, CSS, and JavaScript forms the bedrock of my ability to craft visually appealing and responsive user interfaces. Additionally, my keen understanding of UI/UX design principles allows me to elevate user experiences, ensuring that each project seamlessly blends functionality with an aesthetically pleasing and intuitive design.</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class="skills__name">UX/UI</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="program.png" alt="" class="skills__img">
               
                    </div>
                    
                </div>
            </section>


            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="text" name="full_name" placeholder="Name" class="contact__input" required>
                        <input type="mail"  name="email" placeholder="Email" class="contact__input" required>
                        <textarea name="msg" id="" cols="0" rows="10" class="contact__input"></textarea>
                        <button>
                            <div class="svg-wrapper-1">
                              <div class="svg-wrapper">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 24 24"
                                  width="24"
                                  height="24"
                                >
                                  <path fill="none" d="M0 0h24v24H0z"></path>
                                  <path
                                    fill="currentColor"
                                    d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                                  ></path>
                                </svg>
                              </div>
                            </div>
                            <span>Send</span>
                          </button>
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <div class="footer__social">
                <a href="" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="" class="footer__icon"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="mailto:christiansuarez008@gmail.com" class="footer__icon"><i class="fa-solid fa-envelope"></i></a>
            </div>
            <p class="footer__copy">&#169; AchieveCodeElevate. All rigths reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
    <script>/*===== MENU SHOW =====*/ 
        const showMenu = (toggleId, navId) =>{
            const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId)
        
            if(toggle && nav){
                toggle.addEventListener('click', ()=>{
                    nav.classList.toggle('show')
                })
            }
        }
        showMenu('nav-toggle','nav-menu')
        
        /*==================== REMOVE MENU MOBILE ====================*/
        const navLink = document.querySelectorAll('.nav__link')
        
        function linkAction(){
            const navMenu = document.getElementById('nav-menu')
            // When we click on each nav__link, we remove the show-menu class
            navMenu.classList.remove('show')
        }
        navLink.forEach(n => n.addEventListener('click', linkAction))
        
        /*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
        const sections = document.querySelectorAll('section[id]')
        
        function scrollActive(){
            const scrollY = window.pageYOffset
        
            sections.forEach(current =>{
                const sectionHeight = current.offsetHeight
                const sectionTop = current.offsetTop - 50;
                sectionId = current.getAttribute('id')
        
                if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
                    document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active')
                }else{
                    document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active')
                }
            })
        }
        window.addEventListener('scroll', scrollActive)
        
        /*===== SCROLL REVEAL ANIMATION =====*/
        const sr = ScrollReveal({
            origin: 'top',
            distance: '60px',
            duration: 2000,
            delay: 200,
        //     reset: true
        });
        
        sr.reveal('.home__data, .about__img, .skills__subtitle, .skills__text',{}); 
        sr.reveal('.home__img, .about__subtitle, .about__text,#contact button, #dl, .button, .skills__img',{delay: 400}); 
        sr.reveal('.home__social-icon',{ interval: 200}); 
        sr.reveal('.skills__data, .work__img, .contact__input',{interval: 200}); 

        </script> 
        <script>
            function sleep(ms) {
            return new Promise((resolve) => setTimeout(resolve, ms));
            }

            const phrases = ["Christian", "Anthony"];
            const el = document.getElementById("typewriter");

            let sleepTime = 140;

            let curPhraseIndex = 0;

            const writeLoop = async () => {
            while (true) {
                let curWord = phrases[curPhraseIndex];

                for (let i = 0; i < curWord.length; i++) {
                el.innerText = curWord.substring(0, i + 1);
                await sleep(sleepTime);
                }

                await sleep(sleepTime * 10);

                for (let i = curWord.length; i > 0; i--) {
                el.innerText = curWord.substring(0, i - 1);
                await sleep(sleepTime);
                }

                await sleep(sleepTime * 5);

                if (curPhraseIndex === phrases.length - 1) {
                curPhraseIndex = 0;
                } else {
                curPhraseIndex++;
                }
            }
            };

            writeLoop();
        </script>
        <script>
            var icon = document.getElementById("icon");

            icon.onclick = function(){
                document.body.classList.toggle("dark-theme");
                if(document.body.classList.contains("dark-theme")){
                    icon.src="sun.png"
                }else{
                    icon.src="moon.png"
                }
            }
        </script>
</html>
