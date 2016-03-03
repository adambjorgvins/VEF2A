<?php

/**
 * Created by PhpStorm.
 * User: AdamB
 * Date: 20.1.2016
 * Time: 21:16
 */
class database
{
    function getRandomImageUrl(){
        $images = $this->getImages(); //get random image :)
        $ix = rand(0, count($images)-1);
        return $images[$ix];
    }

    function getImages(){
        return ["http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg",
                "http://www.wallpapereast.com/static/images/Wallpapers-HD-46DF.jpg",
                "http://www.wallpapereast.com/static/images/3D-Wallpaper-HD-35.jpg",
                "http://www.wallpapereast.com/static/images/Ferrari-458-Italia-Wallpaper-HD.jpg",
                "http://www.wallpapereast.com/static/images/Seabed_hd_wallpaper.jpg",
                "http://www.wallpapereast.com/static/images/3242c3dae93c72a1d8a6391cc6e5fe06_large.jpeg",
                "http://www.wallpapereast.com/static/images/HD-Wallpapers-395.jpg",
                "http://www.wallpapereast.com/static/images/HD-Wallpaper-A38.jpg",
                "http://www.wallpapereast.com/static/images/Wallpaper-HD-D23_xxvxPvO.jpg"
                ];
    }

    function currentUserName(){
        return "Jón Jónsson";
    }
}
