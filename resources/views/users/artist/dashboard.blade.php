@extends('layouts.artist_layout')

@section('content')
<div class="ms_main_wrapper">
    <div class="ms_content_wrapper padder_top80">
        <div class="ms_top_artist">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                    <p style="color:aliceblue;">Create Album</p>
                    <br>
                        <form method="post" action="/createalbum" enctype="multipart/form-data" files="true">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Album Name">
                            </div>
                            <div class="form-group">
                                <input type="file" name="album_art" id="album_art" class="form-control" placeholder="Upload Picture">
                                <p><small>Required Size: 240 x 240</small></p> 
                            </div>
                            <div class="form-group">
                                <button type="submit" class="save_btn">Create</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-9">
                        @if(isset($albums) && $albums != NULL && count($album) <= 3)
                        <div class="ms_rcnt_box marger_bottom30">
                            <div class="ms_rcnt_box_img">
                                <img src="images/music/r_music1.jpg" alt="" class="img-fluid">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="artist_single.html">Claire Hudson</a></h3>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next1 slider_nav_next"></div>
                        <div class="swiper-button-prev1 slider_nav_prev"></div>
                        @elseif(isset($albums) && $albums != NULL && count($albums) > 3)
                        <div class="ms_featured_slider">
                            <div class="ms_feature_slider swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!----Copyright---->
@endsection