<?php
    /*
        Descrizione:
        Creare una variabile con un paragrafo di testo a vostra scelta.
        Stampare a schermo il paragrafo e la sua lunghezza.
        Una parola da censurare viene passata dall'utente tramite parametro GET.
        Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    */

$text = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, repudiandae consectetur. Quibusdam, optio nemo beatae unde ipsum soluta voluptatem illo aspernatur deleniti sequi neque quis! Ea laudantium voluptate temporibus molestias! Provident voluptas a cupiditate odit, accusamus voluptate? Unde iste molestias eos alias? In praesentium totam magnam cupiditate explicabo laborum porro voluptatum libero. Alias sit reiciendis harum, iusto ab incidunt rem consequatur. Laborum inventore quo numquam quas voluptatum provident non. Doloremque architecto dolores doloribus! Illum vitae voluptate ducimus nesciunt voluptas accusamus, ullam ut assumenda tenetur libero necessitatibus ratione quae magni alias provident impedit quo maiores esse. Rerum voluptatum exercitationem distinctio. Consequuntur.';

var_dump($text);

$banned_word = $_GET['ban'];
var_dump('hai proibito la parola: ' . $banned_word);
?>