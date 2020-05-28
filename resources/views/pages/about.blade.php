@extends('layouts/default', ['title'=>"About"])

@section('content')
   <div class="container mt-5">
        <h2>What is Laracarte </h2>
        <p>Laracast is a clone app of <a href="" target="blank">Laramap,com</a></p>  
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-warning">
                        <strong><i class="fas fa-exclamation-triangle"></i> | This app has been built by <a href="http://twitter.com " class="alert-link">@etsmo</a> for learning purpuses</strong>
                </div>
            </div>
        </div>
        <p>Fell free to help improve the <a href="https://github.com/Segma02/Laracarte-Tp.git">source code</a></p>
        <hr class="my-auto">
        <h2>What is Laramap</h2>
        <p>Laramap is the webaite by which Laracarte was inspired</p>
        <p>More info <a href="https://laramap.com/p/about">here</a>.</p>
        <hr class="my-auto">

        <h2 class="text-justify">Which tools and services are used in Laracarte ?</h2>
        <p>Basically it's built on Laravel &amp; Bootstrap. But there's a bunch service used for email and other sections.</p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocalisation Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
            
        </ul>
   </div>
@stop