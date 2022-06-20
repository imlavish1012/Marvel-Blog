@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 m-auto h-screen" style="
    background-image: url('https://wallpapercave.com/wp/wp4679593.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height:700px;
    ">
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 h-screen">
    <div class="m-auto">
        <img src="https://images.hdqwalls.com/wallpapers/avengers-infinity-war-minimal-art-2q.jpg" width="700" alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-4xl font-extrabold text-black">
            Interested in Marvel's Blog?
        </h2>

        <p class="py-8 text-gray-500 text-s">
            As we have observed from the past few years, People are loving and appreciating the marvel
            superheroes,movies,comic.
            They want to know more about superheroes history,
            origin and their powers.
        </p>

        <p class="font-extrabold text-gray-600 text-s pb-9">
            In these blogs you will find many stories, history and powers of superheroes. I hope that you'll also
            feel the love hidden behind Marvel .
        </p>

        <a href="/myblogproject/public/blog" class="uppercase" style="  background-color: #e62429;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 18px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;">
            Find Out More
        </a>
    </div>
</div>

<div class="text-center p-15 bg-black text-white h-screen" style="
    background-image: url('https://wallpapersmug.com/large/f42f33/spider-man-minimal-art-2020-bc.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height:700px;
    " id="about">
    <h2 class="font-extrabold text-2xl pb-5 text-xl pt-20">
        Are you interested in...
    </h2>

    <a href="{{route('char')}}"
        class="font-extrabold block text-6xl py-5 hover:text-red-700 text-gray-100">
        Characters
    </a>
    <a href="{{route('movies')}}"
        class="font-extrabold block text-6xl py-5 hover:text-red-700 text-gray-100">
        Movies
    </a>
    <a href="{{route('comics')}}"
        class="font-extrabold block text-6xl py-5 hover:text-red-700 text-gray-100">
        Comics
    </a>
    <a href="{{route('webShows')}}"
        class="font-extrabold block text-6xl py-5 hover:text-red-700 text-gray-100">
        Web Shows
    </a>
</div>
<div class="h-screen">
    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Marvel's Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-black">
            I know it has been fun till now and I hope that you loved my work however witout taking more of your time
            , Let's jump into my blog posts. Here are some recents that I've posted on the website. Check it out!</p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-transparent text-black pt-10 border border-red-600">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Marvel
                </span>

                <h3 class="text-xl font-bold py-10">
                    Get ready to lose yourself in the magic of the Marvel's world.</h3>

                <a href="/myblogproject/public/blog" class="uppercase" style="background-color: #e62429;
                           border: none;
                           color: white;
                           padding: 15px 32px;
                           text-align: center;
                           text-decoration: none;
                           display: inline-block;
                           border-radius: 18px;
                           font-size: 16px;
                           margin: 4px 2px;
                           cursor: pointer;">
                    Read more
                </a>
            </div>
        </div>
        <div>
            <img src="https://wallpapercave.com/wp/wp4676059.jpg" alt="Marvel">
        </div>
    </div>
</div>

@endsection