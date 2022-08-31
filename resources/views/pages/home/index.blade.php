@extends('layout.index')
@section('content')
<div class="home__container">
    <h2>EAT'S GOOD <br> PRET A VOUS AIDER</h2>
    <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit Dicta ratione. <br> harum aspernatur repellat nesciunt? <br> Illo quis consequatur!</p>
    <br>
    <button>DEMARREZ <br> GRATUITEMENT</button>
</div>
<div class="newsLetter__container">
    <h2>INSCRIS TOI  A LA NEWSLETTER</h2>
    <div class="div_main_newsLetter">
        <div class="div1_input_NewsLetter">
            <input class="input_NewsLetter" type="text" placeholder="Prénom *">
            <input class="input_NewsLetter" type="text" placeholder="Email *">
            <button type="submit">JE M'ABONNE</button>
        </div>
        
        
        {{-- <div id="carousel" class="div2_input_NewsLetter">
            <p class="arrow_carousel">
                <x-zondicon-arrow-thick-left />
            </p>
            <p>
                La newsletter va vous permettre de communiquer <br>
                sur un nouveau produit, d'informer les internautes <br>
                au sujet d'une actualité dans votre secteur d'activité, <br> 
                mais aussi de garder un contact régulier avec vos abonnés.
            </p>
            <p class="arrow_carousel">
                <x-zondicon-arrow-thick-right />
            </p>
        </div> --}}
        <div id="carousel">
            <div id="container">
            </div>
            <p class="button" id="gauche"><x-zondicon-arrow-thick-left /></p>
            <p class="button" id="droit"><x-zondicon-arrow-thick-right /></p>
        </div>
    </div>
</div>
@endsection