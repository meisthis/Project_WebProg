<?php
/**
 * Created by PhpStorm.
 * User: Joseph Marcel
 * Date: 11/3/2018
 * Time: 9:01 PM
 */

class recipeSeeder extends DatabaseSeeder
{
    public function run(){
        \App\Recipe::insert([
            'RecipeName' => 'Spaghetti Bolognaise',
            'RecipeDescription' => 'A creamy texture with a combination of mushroom, sliced beef, and a tomato sauce made in italy',
            'UserId' => '1',
            'RecipeImageName' => 'Spaghetti bolognese.jpg',
            'RecipeHyperlink' => 'https://www.youtube.com/',
            'RecipeInstruction' => "Heat a large saucepan over a medium heat. Add a tablespoon of olive oil and once hot add the beef mince and a pinch of salt and pepper. Cook the mince until well browned over a medium-high heat (be careful not to burn the mince.
        Add another tablespoon of oil to the saucepan you browned the mince in and turn the heat to medium. Add the onions and a pinch of salt and fry gently for 5-6 minutes, or until softened and translucent. Add the garlic and cook for another 2 minutes. Add the grated carrot then pour the mince and any juices in the bowl back into the saucepan.
        Add the tomatoes to the pan and stir well to mix. Pour in the stock, bring to a simmer and then reduce the temperature to simmer gently for 45 minutes, or until the sauce is thick and rich. Taste and adjust the seasoning as necessary.
        When ready to cook the spaghetti, heat a large saucepan of water and add a pinch of salt. Cook according to the packet instructions. Once the spaghetti is cooked through, drain and add to the pan with the bolognese sauce. Mix well and serve."
        ]);
        \App\Recipe::insert([
            'RecipeName' => 'Nasi Tim Ayam Jamur',
            'RecipeDescription' => 'A delicious tim rice with a special seasoned chicken and also mushroom',
            'UserId' => '2',
            'RecipeImageName' => 'Nasi tim ayam jamur.Jpeg',
            'RecipeHyperlink' => 'https://www.youtube.com/',
            'RecipeInstruction' => "Daging ayam yg sdh di cuci, di potong2 kecil, lalu tumis bumbu halus hingga harum
Setelah bumbu harum masukan ayam aduk hingga kelihatan matang, masukan kecap manis, kecap asin, tambahkan air, biarkan meresap, tes rasa klw kurang rasa bisa tambakan kaldu bubuk. Masak Jangan sampai kuah kering sisakan kuah nya. 
Panaskan kukusan, masukan ayam kecap beserta kuah, minyak wijen dan daun bawang ke dlm mangkuk cetakan nasi tim, lalu msukan nasi putih diatas ayam kecap sambil ditekan2, lalu kukus krg lbh 15 -20 mnt.
            
            "
        ]);
    }
}