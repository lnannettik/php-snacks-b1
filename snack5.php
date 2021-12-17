<?php

// Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aut natus accusantium assumenda facilis molestiae saepe cum, perferendis, ullam quos explicabo eaque ab? Labore esse similique libero? Voluptatum, pariatur. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, ea laudantium, ad alias magnam consequatur eos nemo quo amet sequi perferendis excepturi nobis nam sapiente optio praesentium error iure tenetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero accusantium sint qui ipsa iure. Atque rem repudiandae expedita a quod beatae reprehenderit vitae, suscipit delectus eum modi consectetur dolore ipsam.';

echo $paragrafo;
echo '<br>';
echo '<br>';

$newParagrafo = explode('.', $paragrafo);

for ($i=0; $i < count($newParagrafo); $i++) {
    echo $newParagrafo[$i].'<br>';
}

echo '<br>';
 




?>