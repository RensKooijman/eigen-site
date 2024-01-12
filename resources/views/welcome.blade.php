<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .alert{
                margin-bottom: 0 !important;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favico1.png') }}">
    </head>
    <body class="antialiased">
        @if ($message = Session::get('failure'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="page-holder">
            <div class="popup-container">
                <div class="popup-arrow"></div>
                <div class="popup-content">Description will be shown here</div>
            </div>
            <div class="row content">
                <div class="col-lg-6 col-sm-12 persenol">
                    <nav>
                        <div><a href="#second"><p>Projects</p></a></div>
                        <div><a href="#third"><p>Experience</p></a></div>
                        <div><a href="#fourth"><p>Contact</p></a></div>
                    </nav>
                    <div class="about pt-4">
                        <h1>Rens Kooijman</h1>
                        <p>
                            Hello, I'm Rens Kooijman, an 18-year-old with a profound passion for web development and a relentless pursuit of knowledge. My journey revolves around mastering the art of coding and crafting outstanding digital experiences.
                            <br>
                            <br>
                            I'm excited to connect with fellow developers, designers, and industry experts. Collaboration is the breeding ground for innovation, and  actively seeking compelling opportunities, internships, and networking connections that can propel my growth in this field.
                        </p>
                    </div>
                </div>
                <div class="circleholder col-lg-6 col-sm-12">
                    <div class="outer-circle">
                        @for($i = 1; $i <=  12; $i++)
                            <div class="inner-circle move-option" value="{{$i}}"><img src="{{ asset('images/image' . $i . '.png')  }}" alt="img"></div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="next jump">
                <a href="#second" class="material-symbols-outlined">keyboard_double_arrow_down</a>
            </div>
        </div>
        <div class="page-holder px-4">
            <div id="second" class="header"><h1>Projects</h1></div>
            <div class="carousel-holder my-4">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="20000">
                            <div class="holder">
                                <div class="info">
                                    <div class="img"></div>
                                    <div class="inner-info">
                                        <div class="left">
                                            <h2>krashosting</h2>
                                            <a href="https://krashosting-lite.tobiasvandeven.nl/home/" target="_blank">krashosting-lite.tobiasvandeven.nl</a>
                                            <a href="https://krashosting-lite.tobiasvandeven.nl/home/" target="_blank" class="button">Visit</a>
                                        </div>
                                        <div class="right">
                                            <div class="labels ">
                                                <img src="{{ asset('images/image4.png')  }}" alt="emblem">
                                                <img src="{{ asset('images/image8.png')  }}" alt="emblem">
                                                <img src="{{ asset('images/image3.png')  }}" alt="emblem">
                                            </div>
                                            <h3>description:</h3>
                                            <p class="description">In the collaborative effort of a school project, our dedicated team successfully designed and developed Krashosting within a timeframe of 30 work hours. This platform facilitates the effortless exploration and purchase of hosting packages, complemented by insightful articles. A key highlight is the integration of the Spring Boot API, providing a robust backend for a seamless user experience. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="20000">
                            <div class="holder">
                                <div class="info">
                                    <div class="img"></div>
                                    <div class="inner-info">
                                        <div class="left">
                                            <h2>attendence system</h2>
                                            <a href="" target="_blank">URL not available</a>
                                            <div class="button-holder">
                                                <a href="" target="_blank" class="button">Visit</a>
                                                <a href="https://github.com/RensKooijman/crud" target="_blank" class="button">Github</a>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="labels">
                                                <img src="{{ asset('images/image6.png')  }}" alt="emblem">
                                                <img src="{{ asset('images/image5.png')  }}" alt="emblem">
                                                <img src="{{ asset('images/image9.png')  }}" alt="emblem">
                                                <img src="{{ asset('images/image10.png') }}" alt="emblem">
                                            </div>
                                            <h3>description:</h3>
                                            <p class="description">Embarking on a solo school assignment, I crafted an Abscent System using Laravel and Bootstrap. This project was a deep dive into CRUD operations, enhancing my skills in data management. The system, designed for attendance tracking, showcases the synergy of Laravel's backend efficiency and Bootstrap's responsive frontend. This endeavor marks my dedication to learning and applying modern web technologies in practical projects.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="20000">
                            <div class="holder">
                                <div class="info">
                                <div class="img"></div>
                                <div class="inner-info">
                                        <div class="left">
                                            <h2>dice</h2>
                                            <a href="{{ url('dice') }}" target="_blank">{{ url("dice") }}</a>
                                            <div class="button-holder">
                                                <a href="{{ url('dice') }}" target="_blank" class="button">Visit</a>
                                                <a href="https://github.com/RensKooijman/dice" target="_blank" class="button">Github</a>
                                            </div>      
                                        </div>
                                        <div class="right">
                                            <div class="labels">
                                                <img src="{{ asset('images/image8.png')  }}" alt="emblem">
                                                <img src="{{ asset('images/image3.png')  }}" alt="emblem">
                                            </div>
                                            <h3>description:</h3>
                                            <p class="description">For a solo school project, I created a digital dice application. This endeavor focused on honing my programming skills in user interface design and logic implementation. The project aimed to simulate traditional dice rolls, showcasing my ability to independently conceptualize and execute coding tasks. This hands-on experience reinforced my commitment to practical learning and contributed to my growth as a developer.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="next">
                <a href="#third" class="material-symbols-outlined">keyboard_double_arrow_down</a>
            </div>
        </div>
        <div class="page-holder px-4">
            <div class="header" id="third"><h1>Experience</h1></div>
            <div class="life-holder px-5 row">
                <div class="life-experiences col-lg col-sm-6">
                    <h2>Events</h2>
                    <div class="experiences">
                        <h3 class="subject">Hackathon</h3>
                        <h3 class="time-stamps">2023:</h3>
                        <p class="experience-text">A web development hackathon featuring multiple schools in a friendly competition. Students from various institutions come together to showcase their coding and design skills by creating innovative websites within a limited timeframe. This event fosters collaboration, creativity, and problem-solving as teams race against the clock to develop functional and aesthetically pleasing websites, with judges awarding prizes for the most impressive projects.</p>
                        <div class="pointer"></div>
                    </div>
                </div>
                <div class="life-experiences col-lg col-sm-6">
                    <h2>Education</h2>
                    <div class="experiences">
                        <h3 class="subject">Webdevelopment</h3>
                        <h3 class="time-stamps">2021-now:</h3>
                        <p class="experience-text">web development that delves deep into the intricacies of both front-end and back-end development.While I appreciate the importance of creating visually appealing and user-friendly front-end experiences, my true passion lies in back-end development. I thrive on architecting the invisible backbone of web applications, ensuring data integrity, security, and seamless functionality.</p>
                        <div class="pointer"></div>
                    </div>
                </div>
                <div class="life-experiences col-lg col-sm-6">
                    <h2>Work</h2>
                    <div class="experiences">
                        <h3 class="subject">Domino’s pizza</h3>
                        <h3 class="time-stamps">2022-now:</h3>
                        <p class="experience-text">As a part-time Domino's bicycle courier, I successfully delivered pizzas to customers, prioritizing punctuality and service quality. This role improved my time management, customer service, and multitasking skills.</p>
                        <div class="pointer"></div>
                    </div>
                </div>
                <div class="life-experiences col-lg col-sm-6">
                    <h2>Hobbies</h2>
                    <div class="experiences">
                        <h3 class="subject">Basketbal</h3>
                        <h3 class="time-stamps">2018-now:</h3>
                        <p class="experience-text">Engaging in basketball as a player and as a trainer has strengthened my teamwork, leadership, and adaptability skills. As a basketball trainer, I've honed my ability to convey complex ideas and motivate individuals, showcasing my dedication to personal growth and mentorship.</p>
                        <div class="pointer"></div>
                    </div>
                </div>
            </div>
            <div class="next">
                <a href="#fourth" class="material-symbols-outlined">keyboard_double_arrow_down</a>
            </div>
        </div>
        <div class="page-holder px-4">
            <div class="header" id="fourth"><h1>Contact</h1></div>
            <div class="contact">
                <div class="contact-form">
                    <div class="contact-left px-3">
                        <form action="{{ route('message') }}" method="POST">
                            @csrf
                            <label for="name">Name:</label>
                            <input name="name" placeholder="Name..." type="text">
                            <label for="email">E-mail:</label>
                            <input name="email" placeholder="E-mail..." type="text">
                            <label for="message">Message:</label>
                            <textarea name="message" placeholder="Message..." type="text-area"></textarea>
                            <button>send</button>
                        </form>
                    </div>
                    <div class="contact-right px-3">
                        <p class="pt-lg-4 pt-3">Info:</p>
                        <div class="icon-holder">
                            <a href="https://www.linkedin.com/in/rens-kooijman-1130a9189/"  target="_blank" class="icons"><img src="{{ asset('images/ico1.png')  }}" alt="link"></a>
                            <a href="https://github.com/RensKooijman"  target="_blank" class="icons"><img src="{{ asset('images/ico2.png')  }}" alt="link"></a>
                            <a href="mailto:someone@example.com" class="icons"><img src="{{ asset('images/ico3.png')  }}" alt="link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
