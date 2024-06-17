<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Remedy;

class RemediesTableSeeder extends Seeder
{
    public function run()
    {
        $remedies = [
            ['name' => 'Agrimony', 'description' => 'Helps you communicate your true feelings rather than hide them behind a cheerful face.', 'price' => 9.50, 'image_url' => 'bach_img/agrimony.png'],
            ['name' => 'Aspen', 'description' => 'Helps you feel secure and fearless.', 'price' => 8.50, 'image_url' => 'bach_img/aspen.png'],
            ['name' => 'Beech', 'description' => 'Helps you be more tolerant and see the good in others despite their imperfections.', 'price' => 10.00, 'image_url' => 'bach_img/beech.png'],
            ['name' => 'Centaury', 'description' => 'Helps you say no and act according to your own wishes rather than always submitting to the demands of others.', 'price' => 9.00, 'image_url' => 'bach_img/centaury.png'],
            ['name' => 'Cerato', 'description' => 'Helps you trust your own judgment in decision-making.', 'price' => 9.75, 'image_url' => 'bach_img/cerato.png'],
            ['name' => 'Cherry Plum', 'description' => 'Helps you act rationally and think clearly with a calm and balanced mind when you fear losing control.', 'price' => 8.75, 'image_url' => 'bach_img/cherry_plum.png'],
            ['name' => 'Chestnut Bud', 'description' => 'Helps you observe your mistakes objectively so you can learn from them and move on.', 'price' => 9.25, 'image_url' => 'bach_img/chestnut_bud.png'],
            ['name' => 'Chicory', 'description' => 'Helps you let go of those you care for, allowing them to lead their own lives.', 'price' => 10.50, 'image_url' => 'bach_img/chicory.png'],
            ['name' => 'Clematis', 'description' => 'Helps you live more actively in the present rather than in the future or your own dream world.', 'price' => 8.99, 'image_url' => 'bach_img/clematis.png'],
            ['name' => 'Crab Apple', 'description' => 'Helps you accept your physical imperfections and feel better about the way you are.', 'price' => 8.00, 'image_url' => 'bach_img/crab_apple.png'],
            ['name' => 'Elm', 'description' => 'Helps you cope with overwhelm from responsibilities.', 'price' => 9.50, 'image_url' => 'bach_img/elm.png'],
            ['name' => 'Gentian', 'description' => 'Helps you overcome feelings of discouragement or despondency.', 'price' => 9.25, 'image_url' => 'bach_img/gentian.png'],
            ['name' => 'Gorse', 'description' => 'Helps you feel a sense of hope and optimism.', 'price' => 9.75, 'image_url' => 'bach_img/gorse.png'],
            ['name' => 'Heather', 'description' => 'Helps you listen to and empathize with others rather than being overly concerned with your own needs.', 'price' => 9.50, 'image_url' => 'bach_img/heather.png'],
            ['name' => 'Holly', 'description' => 'Helps you feel compassion and love towards others.', 'price' => 9.25, 'image_url' => 'bach_img/holly.png'],
            ['name' => 'Honeysuckle', 'description' => 'Helps you let go of the past and live in the present.', 'price' => 8.99, 'image_url' => 'bach_img/honeysuckle.png'],
            ['name' => 'Hornbeam', 'description' => 'Helps you feel revitalized and able to face your daily tasks with energy.', 'price' => 9.00, 'image_url' => 'bach_img/hornbeam.png'],
            ['name' => 'Impatiens', 'description' => 'Helps you feel patient with others and less irritable.', 'price' => 9.50, 'image_url' => 'bach_img/impatiens.png'],
            ['name' => 'Larch', 'description' => 'Helps you feel confident in your ability to succeed.', 'price' => 9.75, 'image_url' => 'bach_img/larch.png'],
            ['name' => 'Mimulus', 'description' => 'Helps you deal with known fears and anxieties.', 'price' => 9.99, 'image_url' => 'bach_img/mimulus.png'],
            ['name' => 'Mustard', 'description' => 'Helps you lift the gloom and feel more joy.', 'price' => 9.00, 'image_url' => 'bach_img/mustard.png'],
            ['name' => 'Oak', 'description' => 'Helps you restore strength and endurance when you feel overworked and exhausted.', 'price' => 9.50, 'image_url' => 'bach_img/oak.png'],
            ['name' => 'Olive', 'description' => 'Helps you restore energy when you feel physically and mentally exhausted.', 'price' => 9.25, 'image_url' => 'bach_img/olive.png'],
            ['name' => 'Pine', 'description' => 'Helps you accept and forgive yourself rather than feeling guilty or blaming yourself.', 'price' => 9.00, 'image_url' => 'bach_img/pine.png'],
            ['name' => 'Red Chestnut', 'description' => 'Helps you feel less worried about the well-being of loved ones.', 'price' => 9.50, 'image_url' => 'bach_img/red_chestnut.png'],
            ['name' => 'Rock Rose', 'description' => 'Helps you feel courage and presence of mind.', 'price' => 9.75, 'image_url' => 'bach_img/rock_rose.png'],
            ['name' => 'Rock Water', 'description' => 'Helps you be more flexible and less critical of yourself.', 'price' => 8.99, 'image_url' => 'bach_img/rock_water.png'],
            ['name' => 'Scleranthus', 'description' => 'Helps you make decisions more easily when you cannot choose between two options.', 'price' => 9.50, 'image_url' => 'bach_img/scleranthus.png'],
            ['name' => 'Star of Bethlehem', 'description' => 'Helps you deal with grief and sadness.', 'price' => 9.75, 'image_url' => 'bach_img/star_of_bethlehem.png'],
            ['name' => 'Sweet Chestnut', 'description' => 'Helps you feel optimistic even in the darkest moments.', 'price' => 9.25, 'image_url' => 'bach_img/sweet_chestnut.png'],
            ['name' => 'Vervain', 'description' => 'Helps you calm your mind and body when you are overly enthusiastic or agitated.', 'price' => 9.50, 'image_url' => 'bach_img/vervain.png'],
            ['name' => 'Vine', 'description' => 'Helps you respect others’ views and lead without being domineering.', 'price' => 9.75, 'image_url' => 'bach_img/vine.png'],
            ['name' => 'Walnut', 'description' => 'Helps you adapt to change and move forward.', 'price' => 9.25, 'image_url' => 'bach_img/walnut.png'],
            ['name' => 'Water Violet', 'description' => 'Helps you build warmer relationships with others.', 'price' => 9.50, 'image_url' => 'bach_img/water_violet.png'],
            ['name' => 'White Chestnut', 'description' => 'Helps you find peace of mind and clear thinking.', 'price' => 9.00, 'image_url' => 'bach_img/white_chestnut.png'],
            ['name' => 'Wild Oat', 'description' => 'Helps you find clarity and direction in your life.', 'price' => 9.75, 'image_url' => 'bach_img/wild_oat.png'],
            ['name' => 'Wild Rose', 'description' => 'Helps you feel a lively interest in life.', 'price' => 9.00, 'image_url' => 'bach_img/wild_rose.png'],
            ['name' => 'Willow', 'description' => 'Helps you forgive and forget past injustices and move on when you feel resentful and bitter.', 'price' => 9.50, 'image_url' => 'bach_img/willow.png']
        ];

        foreach ($remedies as $remedy) {
            Remedy::create($remedy);
        }
    }
}
