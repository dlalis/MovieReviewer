<!DOCTYPE html>
<?php
if (session_status() == PHP_SESSION_NONE) 
  session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/home.css?rnd=23">
    <script type='text/javascript' src='config.js'></script>
</head>
<body>
    <main>
        <section class="sidenav">
            <div class="sidebar_wrapper">
                <div class="profile">
                    <div>
                        <svg viewBox="-42 0 512 512.001" xmlns="http://www.w3.org/2000/svg">
                            <path d="m210.351562 246.632812c33.882813 0 63.21875-12.152343 87.195313-36.128906 23.96875-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.128906 87.195312 23.980469 23.96875 53.316406 36.125 87.191406 36.125zm-65.972656-189.292968c18.394532-18.394532 39.972656-27.335938 65.972656-27.335938 25.996094 0 47.578126 8.941406 65.976563 27.335938 18.394531 18.398437 27.339844 39.980468 27.339844 65.972656 0 26-8.945313 47.578125-27.339844 65.976562-18.398437 18.398438-39.980469 27.339844-65.976563 27.339844-25.992187 0-47.570312-8.945312-65.972656-27.339844-18.398437-18.394531-27.34375-39.976562-27.34375-65.976562 0-25.992188 8.945313-47.574219 27.34375-65.972656zm0 0" fill="white"/>
                            <path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.3125-10.339844-7.808594-20.550781-13.375-30.335938-5.769532-10.15625-12.550782-19-20.160157-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.042969 5.339844-10.96875 0-22.085937-1.796876-33.042968-5.339844-11.210938-3.621094-20.300782-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.753906-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.609375 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.0625 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.777344-1.023438 19.953125-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.4375 23.730469 65.066406 23.730469h246.53125c26.621094 0 48.511719-7.984375 65.0625-23.730469 16.757813-15.945312 25.253906-37.589843 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm-44.90625 72.828125c-10.933594 10.40625-25.449218 15.464844-44.378906 15.464844h-246.527344c-18.933594 0-33.449218-5.058594-44.378906-15.460938-10.722656-10.207031-15.933594-24.140625-15.933594-42.585937 0-9.59375.316406-19.066407.949219-28.160157.617187-8.921874 1.878906-18.722656 3.75-29.136718 1.847656-10.285156 4.199219-19.9375 6.996094-28.675782 2.683593-8.378906 6.34375-16.675781 10.882812-24.667968 4.332031-7.617188 9.316407-14.152344 14.816407-19.417969 5.144531-4.925781 11.628906-8.957031 19.269531-11.980469 7.066406-2.796875 15.007812-4.328125 23.628906-4.558594 1.050781.558594 2.921875 1.625 5.953125 3.601563 6.167969 4.019531 13.277344 8.605469 21.136719 13.625 8.859375 5.648437 20.273437 10.75 33.910156 15.152344 13.941406 4.507812 28.160156 6.796875 42.273437 6.796875 14.113282 0 28.335938-2.289063 42.269532-6.792969 13.648437-4.410156 25.058594-9.507813 33.929687-15.164063 8.042969-5.140624 14.953125-9.59375 21.121094-13.617187 3.03125-1.972656 4.902344-3.042969 5.953125-3.601563 8.625.230469 16.566406 1.761719 23.636719 4.558594 7.636719 3.023438 14.121093 7.058594 19.265625 11.980469 5.5 5.261719 10.484375 11.796875 14.816406 19.421875 4.542969 7.988281 8.207031 16.289062 10.886719 24.660156 2.800781 8.75 5.15625 18.398438 7 28.675782 1.867187 10.433593 3.132812 20.238281 3.75 29.144531v.007812c.636719 9.058594.957031 18.527344.960937 28.148438-.003906 18.449219-5.214844 32.378906-15.9375 42.582031zm0 0" fill="white"/>
                        </svg>
                    </div>
                </div>
                <div class="user_info">
                    <?php 
					if(isset($_SESSION['user']))
						echo "<p> Username: " . $_SESSION['user'] ."</p>";
					
					if(isset($_SESSION['role']))
						if($_SESSION['role'] === 0)
							echo "<p>Role: User </p>";
						else
							echo "<p>Role: Administrator </p>";
						
					?>
                </div>
                <div class="user_options">
                    <button>Button1</button>
                    <button>Button2</button>
                    <button>Button3</button>
					<?php 
						echo "<button> <a href=\"includes/logout_inc.php\"> Log Out </a></button>";
					?>
                </div>
            </div>  
            </section>
        <section class="content">
            <div class="content_wrapper">
                <div class="flex">
                    <div class="search_bar">
                        <div id="clear" onclick="clear_bar()"/></div>
                        <input id="input_field" type="text" oninput="call_api(this.value)" placeholder="Search for a movie, series or an episode.."/>
                    </div>
                    <button onclick="toggle_sidebar()">
                        <div></div>
                        <div></div>
                        <div></div>
                    </button>
                </div>

                <script type="text/javascript">
                    let isItOpen = false

                    const toggle_sidebar = () => {
                        isItOpen = !isItOpen
                        document.querySelector('.sidenav').style.left = isItOpen ? "0" : "-250px"
                    }

                    const clear_bar = () => {
                        document.getElementById('input_field').value = ''
                        document.getElementById('clear').style.visibility = "hidden"
                        document.getElementById('search_results').style.display = "none"
                    }

                    const call_api = search_term => {
                        if (search_term === "") {
                            clear_bar()
                            return
                        }
                        fetch(`http://www.omdbapi.com/?s=${search_term}&apikey=${config.omdb_key}`)
                        .then(x => x.json() )
                        .then(y => {
                            console.log(y)
                            
                            document.getElementById('clear').style.visibility = "visible"
                            document.getElementById('search_results').innerHTML = ""
                            
                            if(y.Response === "True"){
                                document.getElementById('search_results').style.display = "block"

                                y.Search.map(movie => {
                                    const p = document.createElement('p')
                                    p.innerHTML = `${movie.Title} - ${movie.Year}`

                                    const div = document.createElement('div')
                                    div.appendChild(p)

                                    document.getElementById('search_results').appendChild(div)
                                })
                            }else {
                                document.getElementById('search_results').style.display = "none"
                            }
                        }).catch(error => {
                            console.log(error);
                        })
                    }
                </script>

                <div style="width: 100%; position: relative;">
                    <div id="search_results"></div>
                </div>

                <div class="user_movie_list">
                    <div class="movie">
                        <div class="movie_poster"></div>
                        <div class="movie_info">
                            <h4>Movie Title</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus minima autem eius sit laudantium enim suscipit, nobis nisi maiores rem, consequuntur culpa cumque dignissimos iste ratione, voluptas nesciunt aperiam porro?</p>
                            <button>see more</button>
                            <hr/>
                        </div>
                    </div>
                </div>

                <div class="user_movie_list">
                    <div class="movie">
                        <div class="movie_poster"></div>
                        <div class="movie_info">
                            <h4>Movie Title</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus minima autem eius sit laudantium enim suscipit, nobis nisi maiores rem, consequuntur culpa cumque dignissimos iste ratione, voluptas nesciunt aperiam porro?</p>
                            <button>see more</button>
                            <hr/>
                        </div>
                    </div>
                </div>

                <div class="user_movie_list">
                    <div class="movie">
                        <div class="movie_poster"></div>
                        <div class="movie_info">
                            <h4>Movie Title</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus minima autem eius sit laudantium enim suscipit, nobis nisi maiores rem, consequuntur culpa cumque dignissimos iste ratione, voluptas nesciunt aperiam porro?</p>
                            <button>see more</button>
                            <hr/>
                        </div>
                    </div>
                </div>

                <div class="user_movie_list">
                    <div class="movie">
                        <div class="movie_poster"></div>
                        <div class="movie_info">
                            <h4>Movie Title</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus minima autem eius sit laudantium enim suscipit, nobis nisi maiores rem, consequuntur culpa cumque dignissimos iste ratione, voluptas nesciunt aperiam porro?</p>
                            <button>see more</button>
                            <hr/>
                        </div>
                    </div>
                </div>

                <div class="user_movie_list">
                    <div class="movie">
                        <div class="movie_poster"></div>
                        <div class="movie_info">
                            <h4>Movie Title</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus minima autem eius sit laudantium enim suscipit, nobis nisi maiores rem, consequuntur culpa cumque dignissimos iste ratione, voluptas nesciunt aperiam porro?</p>
                            <button>see more</button>
                            <hr/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>