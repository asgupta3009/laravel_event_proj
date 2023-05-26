<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Mirrored from www.kri8thm.in/html/listen/theme/demo/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2023 04:39:52 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <title>Event</title>
    <link href="{{asset('assets/images/logos/favicon.png')}}" rel="icon">
    <link rel="apple-touch-icon" href="{{asset('assets/images/logos/touch-icon-iphone.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/images/logos/touch-icon-ipad.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/logos/touch-icon-iphone-retina.png')}}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{asset('assets/images/logos/touch-icon-ipad-retina.png')}}">
    <link href="{{asset('assets/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/styles.bundle.css')}}" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet"><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <div id="wrapper">
        <aside id="sidebar">
            <div class="sidebar-head d-flex align-items-center justify-content-between"><a href="index.html"
                    class="brand external"><img src="{{asset('assets/images/logos/logo.svg')}}" alt="Listen app"> </a><a
                    href="javascript:void(0);" role="button" class="sidebar-toggler" aria-label="Sidebar toggler">
                    <div class="d-none d-lg-block"><i class="ri-menu-3-line sidebar-menu-1"></i> <i
                            class="ri-menu-line sidebar-menu-2"></i></div><i class="ri-menu-fold-line d-lg-none"></i>
                </a></div>
            <div class="sidebar-body" data-scroll="true">
                <nav class="navbar d-block p-0">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="home.html" class="nav-link d-flex align-items-center active"><i
                                    class="ri-home-4-line fs-5"></i> <span class="ps-3">Home</span></a></li>
                        <li class="nav-item"><a href="genres.html" class="nav-link d-flex align-items-center"><i
                                    class="ri-disc-line fs-5"></i> <span class="ps-3">Genres</span></a></li>
                        <li class="nav-item"><a href="music.html" class="nav-link d-flex align-items-center"><i
                                    class="ri-music-2-line fs-5"></i> <span class="ps-3">Free Music</span></a></li>
                        <li class="nav-item"><a href="albums.html" class="nav-link d-flex align-items-center"><i
                                    class="ri-album-line fs-5"></i> <span class="ps-3">Albums</span></a></li>
                        <li class="nav-item"><a href="artists.html" class="nav-link d-flex align-items-center"><i
                                    class="ri-mic-line fs-5"></i> <span class="ps-3">Artists</span></a></li>
                        <li class="nav-item"><a href="stations.html" class="nav-link d-flex align-items-center"><i
                                    class="ri-radio-2-line fs-5"></i> <span class="ps-3">Stations</span></a></li>
                        <li class="nav-item nav-item--head"><span class="nav-item--head__text">Music</span> <span
                                class="nav-item--head__dots">...</span></li>
                        <li class="nav-item"><a href="analytics.html" class="nav-link d-flex align-items-center"><i
                                    class="ri-pie-chart-line fs-5"></i> <span class="ps-3">Analytics</span></a></li>
                        <li class="nav-item"><a href="favorites.html" class="nav-link d-flex align-items-center"><i
                                    class="ri-heart-line fs-5"></i> <span class="ps-3">Favorites</span></a></li>
                        <li class="nav-item"><a href="history.html" class="nav-link d-flex align-items-center"><i
                                    class="ri-history-line fs-5"></i> <span class="ps-3">History</span></a></li>
                        
                        
                    </ul>
                </nav>
            </div>
            
        </aside>
        
        <header id="header">
            <div class="container">
                <div class="header-container">
                    <div class="d-flex align-items-center"><a href="javascript:void(0);" role="button"
                            class="header-text sidebar-toggler d-lg-none me-3" aria-label="Sidebar toggler"><i
                                class="ri-menu-3-line"></i></a>
                        <form action="#" id="search_form" class="me-3"><label for="search_input"><i
                                    class="ri-search-2-line"></i></label> <input type="text"
                                placeholder="Type anything to get result..." id="search_input"
                                class="form-control form-control-sm"></form>
                        <div id="search_results" class="search pb-3">
                            <div class="search__head">
                                <div class="search__head__filter"><button type="button"
                                        class="btn btn-sm btn-light-primary active">Trending</button> <button
                                        type="button" class="btn btn-sm btn-light-primary">Artists</button> <button
                                        type="button" class="btn btn-sm btn-light-primary">Songs</button> <button
                                        type="button" class="btn btn-sm btn-light-primary">Albums</button></div>
                            </div>
                            <div class="search__body" data-scroll="true">
                                <div class="mb-4">
                                    <div class="d-flex align-items-center justify-content-between mb-3"><span
                                            class="search__title">Artists</span> <a href="artists.html"
                                            class="btn btn-link">View All</a></div>
                                    <div class="row g-4 list">
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item"><a href="artist-details.html"
                                                    class="list__cover"><img src="{{asset('assets/images/cover/large/5.jpg')}}"
                                                        alt="Jina Moore"></a>
                                                <div class="list__content"><a href="artist-details.html"
                                                        class="list__title text-truncate">Jina Moore</a></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item"><a href="artist-details.html"
                                                    class="list__cover"><img src="{{asset('assets/images/cover/large/6.jpg')}}"
                                                        alt="Rasomi Pelina"></a>
                                                <div class="list__content"><a href="artist-details.html"
                                                        class="list__title text-truncate">Rasomi Pelina</a></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item"><a href="artist-details.html"
                                                    class="list__cover"><img src="{{asset('assets/images/cover/large/7.jpg')}}"
                                                        alt="Pimila Holliwy"></a>
                                                <div class="list__content"><a href="artist-details.html"
                                                        class="list__title text-truncate">Pimila Holliwy</a></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item"><a href="artist-details.html"
                                                    class="list__cover"><img src="{{asset('assets/images/cover/large/8.jpg')}}"
                                                        alt="Karen Jennings"></a>
                                                <div class="list__content"><a href="artist-details.html"
                                                        class="list__title text-truncate">Karen Jennings</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex align-items-center justify-content-between mb-3"><span
                                            class="search__title">Songs</span> <a href="songs.html"
                                            class="btn btn-link">View All</a></div>
                                    <div class="row g-4 list">
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item"><a href="song-details.html" class="list__cover"><img
                                                        src="{{asset('assets/images/cover/small/6.jpg')}}" alt="Hey not me"></a>
                                                <div class="list__content"><a href="song-details.html"
                                                        class="list__title text-truncate">Hey not me</a>
                                                    <p class="list__subtitle text-truncate"><a
                                                            href="artist-details.html">Rasomi Pelina</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item"><a href="song-details.html" class="list__cover"><img
                                                        src="{{asset('assets/images/cover/small/7.jpg')}}" alt="Deep inside"></a>
                                                <div class="list__content"><a href="song-details.html"
                                                        class="list__title text-truncate">Deep inside</a>
                                                    <p class="list__subtitle text-truncate"><a
                                                            href="artist-details.html">Pimila Holliwy</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item"><a href="song-details.html" class="list__cover"><img
                                                        src="{{asset('assets/images/cover/small/8.jpg')}}" alt="Sadness"></a>
                                                <div class="list__content"><a href="song-details.html"
                                                        class="list__title text-truncate">Sadness</a>
                                                    <p class="list__subtitle text-truncate"><a
                                                            href="artist-details.html">Karen Jennings</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item"><a href="song-details.html" class="list__cover"><img
                                                        src="{{asset('assets/images/cover/small/9.jpg')}}" alt="Electric wave"></a>
                                                <div class="list__content"><a href="song-details.html"
                                                        class="list__title text-truncate">Electric wave</a>
                                                    <p class="list__subtitle text-truncate"><a
                                                            href="artist-details.html">Lenisa Gory</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center justify-content-between mb-3"><span
                                            class="search__title">Albums</span> <a href="albums.html"
                                            class="btn btn-link">View All</a></div>
                                    <div class="row g-4 list">
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item"><a href="album-details.html"
                                                    class="list__cover"><img src="{{asset('assets/images/cover/small/1.jpg')}}"
                                                        alt="Mummy"></a>
                                                <div class="list__content"><a href="album-details.html"
                                                        class="list__title text-truncate">Mummy</a>
                                                    <p class="list__subtitle text-truncate"><a
                                                            href="artist-details.html">Arebica Luna</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item"><a href="album-details.html"
                                                    class="list__cover"><img src="{{asset('assets/images/cover/small/2.jpg')}}"
                                                        alt="Hot shot"></a>
                                                <div class="list__content"><a href="album-details.html"
                                                        class="list__title text-truncate">Hot shot</a>
                                                    <p class="list__subtitle text-truncate"><a
                                                            href="artist-details.html">Gerrina Linda</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item"><a href="album-details.html"
                                                    class="list__cover"><img src="{{asset('assets/images/cover/small/3.jpg')}}"
                                                        alt="Own way"></a>
                                                <div class="list__content"><a href="album-details.html"
                                                        class="list__title text-truncate">Own way</a>
                                                    <p class="list__subtitle text-truncate"><a
                                                            href="artist-details.html">Zunira Willy & Nutty Nina</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item"><a href="album-details.html"
                                                    class="list__cover"><img src="{{asset('assets/images/cover/small/4.jpg')}}"
                                                        alt="Say yes"></a>
                                                <div class="list__content"><a href="album-details.html"
                                                        class="list__title text-truncate">Say yes</a>
                                                    <p class="list__subtitle text-truncate"><a
                                                            href="artist-details.html">Johnny Marro</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (Route::has('login'))
                            <div>
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                    <a href="{{ url('login') }}" target="_blank">Log in</a> | 
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"  target="_blank">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </header>
        <main id="page_content">
            <div class="hero" style="background-image: url({{asset('assets/images/banner/home.jpg')}});"></div>
            <div class="under-hero container">
                
                <div class="row">
                    <div class="section col-xl-12">
                        <div class="section__head">
                            <div class="flex-grow-1">
                                <h3 class="mb-0">Upcoming <span class="text-primary">Events</span></h3>
                            </div><a href="events.html" class="btn btn-link">Explore More</a>
                        </div>
                        
                   
                        <div class="mat-tabs">
                            <ul class="nav nav-tabs" id="songs_list" role="tablist">
                                <li class="nav-item" role="presentation"><button class="nav-link active" id="recent"
                                        data-bs-toggle="tab" data-bs-target="#recent_pane" type="button" role="tab"
                                        aria-controls="recent_pane" aria-selected="true">Recent</button></li>
                                
                            </ul>
                        </div>
                        <div class="tab-content mt-12" id="songs_list_content">
                            <div class="tab-pane fade show active" id="recent_pane" role="tabpanel"
                                aria-labelledby="recent" tabindex="0">
                                <div class="list">

                                   
                                    <table border="1" width="100%">
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Genre</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                            <th>Event Date</th>
                                            <th>Venue</th>
                                        </tr>
                                        
                                        @foreach ($eventdata as $i=>$item)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->genre_id}}</td>
                                            <td><img src="{{ URL::to('/public/photo/'.$item->photo) }}" height="50" width="50"></td>
                                            <td>{{$item->desc}}</td>
                                            <td>{{$item->amount}}</td>
                                            <td>{{$item->event_date}}</td>
                                            <td>{{$item->venue_id}}</td>
                                            <!--<td><a href="{{-- route('editartist', ['id'=>Crypt::encryptString($item->id)]) --}}">Edit</a> | <a href="{{-- route('deleteartist', ['id'=>Crypt::encryptString($item->id)]) --}}">Delete</a></td>-->
                                        </tr>    
                                        @endforeach
                                    </table>

                                    
                                    {!! $eventdata->links() !!}
                                    
                                    
                                    
                                </div>

                                
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                
                
                
                
                
            </div>
            <footer id="footer">
                <div class="container">
                  
                    <div class="app-btn-group pt-2"></div>
                </div>
            </footer>
        </main>
    </div>
    <div id="player">
        <div class="container">
            <div class="player-container">
                <div class="player-progress"><progress class="amplitude-buffered-progress player-progress__bar"
                        value="0"></progress><progress
                        class="amplitude-song-played-progress player-progress__bar"></progress><input type="range"
                        class="amplitude-song-slider player-progress__slider" aria-label="Progress slider"></div>
                <div class="cover d-flex align-items-center">
                    <div class="cover__image"><img data-amplitude-song-info="cover_art_url"
                            src="images/cover/small/1.jpg" alt=""></div>
                    <div class="cover__content ps-3 d-none d-sm-block"><a href="song-details.html"
                            class="cover__title text-truncate" data-amplitude-song-info="name"></a> <a
                            href="artist-details.html" class="cover__subtitle text-truncate"
                            data-amplitude-song-info="artist"></a></div>
                </div>
                <div class="player-control"><button type="button"
                        class="amplitude-repeat btn btn-icon me-4 d-none d-md-block" aria-label="Repeat"><i
                            class="ri-repeat-2-fill fs-5"></i></button> <button type="button"
                        class="amplitude-prev btn btn-icon" aria-label="Backward"><i
                            class="ri-skip-back-mini-fill"></i></button> <button type="button"
                        class="amplitude-play-pause btn btn-icon btn-default rounded-pill" aria-label="Play pause"><i
                            class="ri-play-fill icon-play"></i> <i class="ri-pause-fill icon-pause"></i></button>
                    <button type="button" class="amplitude-next btn btn-icon" aria-label="Forward"><i
                            class="ri-skip-forward-mini-fill"></i></button> <button type="button"
                        class="amplitude-shuffle amplitude-shuffle-off btn btn-icon ms-4 d-none d-md-block"
                        aria-label="Shuffle"><i class="ri-shuffle-fill fs-5"></i></button></div>
                <div class="player-info">
                    <div class="me-4 d-none d-xl-block"><span class="amplitude-current-minutes"></span>:<span
                            class="amplitude-current-seconds"></span> / <span
                            class="amplitude-duration-minutes"></span>:<span class="amplitude-duration-seconds"></span>
                    </div>
                    <div class="player-volume dropdown d-none d-md-block"><button class="btn btn-icon"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-label="Volume"
                            aria-expanded="false"><i class="ri-volume-mute-fill fs-5 d-none"></i> <i
                                class="ri-volume-down-fill fs-5"></i> <i
                                class="ri-volume-up-fill fs-5 d-none"></i></button>
                        <div class="dropdown-menu prevent-click"><input type="range" class="amplitude-volume-slider"
                                value="50" min="0" max="100" aria-label="Volume slider"></div>
                    </div>
                    <div class="dropstart d-none d-md-block"><button class="btn btn-icon" data-bs-toggle="dropdown"
                            aria-label="Song options" aria-expanded="false"><i class="ri-more-2-fill fs-5"></i></button>
                        <ul class="dropdown-menu dropdown-menu-sm" id="player_options">
                            <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                    data-favorite-id="1">Favorite</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                    data-playlist-id="1">Add to playlist</a></li>
                            <li><a class="dropdown-item" href="audio/ringtone-1.mp3" download>Download</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="song-details.html">View details</a></li>
                        </ul>
                    </div>
                    <div class="playlist dropstart me-3"><button class="btn btn-icon" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" aria-label="Playlist" aria-expanded="false"><i
                                class="ri-play-list-fill fs-5"></i></button>
                        <div class="dropdown-menu playlist__dropdown">
                            <div class="playlist__head d-flex align-items-center justify-content-between">
                                <h6 class="mb-0">Next Lineup</h6><a href="javascript:void(0);" role="button"
                                    id="clear_playlist" class="btn btn-link">Clear</a>
                            </div>
                            <div id="playlist" class="list playlist__body" data-scroll="true">
                                <div class="col-sm-8 col-10 mx-auto mt-5 text-center"><i
                                        class="ri-music-2-line mb-3"></i>
                                    <p>No songs, album or playlist are added on lineup.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{asset('assets/js/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
</body>
<!-- Mirrored from www.kri8thm.in/html/listen/theme/demo/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2023 04:40:12 GMT -->

</html>