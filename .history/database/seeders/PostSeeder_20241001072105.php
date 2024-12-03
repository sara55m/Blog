<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newspost1=Post::create([
            'user_id'=>'1',
            'category_id'=>'1',
            'title'=>'Proton VPN is Browser Extension Is Now Free for Everyone',
            'thumbnail'=>'/thumbnails/newspost.webp',
            'excerpt'=>'It works in Firefox, Chrome, Edge, Brave, and other browsers',
            'body'=>'Once available only to paying customers, Proton VPN now lets anyone with a user account turn on the VPN in their browser at no cost. This announcement, shared in an email to Lifewire, follows the recent anti-censorship updates rolled out to Android and Windows users.

This is not a full-fledged VPN app and there are some features blocked for free users. It runs as a Chrome extension or Firefox extension, so it should be available even if traditional app stores are blocked in your country. All you need is a free Proton user account.
This VPN browser extension is not useful just because it is free. It provides a whole different technique for privacy protection. Since it runs in a web browser, it only encrypts that traffic, not the other things you do on your computer. This means it will mask your IP address only for the websites you visit, such as streaming sites, and not for other things like games you play on your desktop.

When you open the extension, free users are given one connection option called Fastest free server. Clicking it auto-selects a server closest to you from the available free servers, which are located in the US and a few other countries. Paying subscribers can pick from over 6,000 servers across 100+ countries.

Non-paying users are not  without options, though. The browser extension has a few settings that can be toggled on and off, including one to auto-connect to Proton VPN when you open the browser and another to switch on WebRTC leak protection. Advanced options like split tunneling are reserved for paying users.

According to Proton website, the company keeps "no logs that can compromise your privacy," as the law in Switzerland, where the company is based, "prevents us from being forced to log user activity."

The Proton VPN browser extension works with all Firefox and Chromium browsers, which includes not only Firefox and Chrome but also Brave, Microsoft Edge, LibreWolf, and others. If you want all the features available in the browser extension, plus desktop access and more, Proton VPN can be purchased for about $5 /month if you pay for a year upfront.'
        ]);


        $newspost2=Post::create([
            'user_id'=>'1',
            'category_id'=>'2',
            'title'=>'Why are travel blogging and travel media STILL so WHITE? Not only a rant, but also solutions',
            'thumbnail'=>'/thumbnails/travelpost.jpg',
            'excerpt'=>'The fact that travel media is STILL so white in this day and age is disappointing.  But here are my suggestions for how to increase diversity and inclusion.',
            'body'=>'In the last week, I’ve been tagged in a number of conversations on social media about the lack of diversity in travel media (thanks Fidel from My Leiover for the most recent tag on Instagram yesterday).  Most of the dialogues appear to be sparked by an article making its rounds on the internet that asks whether the travel community is “too white”.  In it, Australian journalist Ben Groundwater writes:

Think about it: the vast majority of successful travel bloggers and influencers out there, the ones you probably follow on social media and draw inspiration from on a daily basis are skinny, good-looking white people. The travel presenters you see on TV are skinny, good-looking white people. And even the vast majority of successful writers in traditional media are also – well, white people.

There’s a noticeable homogeneity to the voices of travel throughout the world. The majority of the people who document and analyse the globe from a travellers’ perspective are white, and privileged. They see the planet from a certain standpoint. They move through the world in a certain way.

But here’s the thing.  This discussion is far from new– it’s been on the hearts, minds, and tongues of POC travellers for years (POC = people of colour, by the way).

And those who have been following me for some time will know that I’ve been very vocal about the inherent whiteness of the travel industry, penning a number of articles decrying the paucity of “melanin-blessed” folks in the travel space.'
        ]);

        $sportspost=Post::create([
            'user_id'=>'1',
            'category_id'=>'3',
            'title'=>'How To Maximize Your Pull-Up Trainings',
            'thumbnail'=>'/thumbnails/sportspost.webp',
            'excerpt'=>'Pull-ups are the most commonly practiced training exercise for climbing, yet how much do we really know about them?',
            'body'=>'Pull-ups are the most commonly practiced training exercise for climbing, yet how much do we really know about them from a biomechanical perspective? It is common for climbers to discuss different strength protocols for pull-ups, as well as supportive exercises for preventing injury, but the fundamental requirement is to understand the nuances of form, so that we’re performing the exercise correctly. So let’s take a look under the hood.

Basic anatomy
The pull-up is a closed-chain movement, which in the case of the upper body, means that the hands can’t move. The body is suspended by the hands and as we pull-up, the elbows flex (bend) and the shoulders adduct (move downward toward the mid-line of the body) and extend to bring the elbows to the torso. Pull-ups use the latissimus dorsi, the wing-like muscles that originate below your shoulder-blades and extend to your lower back. The “lats” are the largest muscles in the upper body and are the prime-movers in a pull-up, meaning that they provide most of the power to raise your body. Other muscles utilised are the biceps, deltoids (shoulders), rhomboids, and core.

Pull-ups vs chin-ups
Pull ups are commonly confused with chin-ups. Pull-ups are performed with a pronated grip (overhand, with palms forwards) with arms slightly-wider than shoulders, whereas chin-ups use a supinated (underhand) grip with arms closer together at approximately shoulder width. Both exercises are comparable because although the shoulder movements are different, the muscles responsible for those movements are the same. As stated, in pull-ups the shoulders are adducted, whereas in chin-ups, the shoulders extend (as the arms are pulled down and backwards). Ultimately, both types of shoulder motion are powered by the lats.

Many climbers who are new to both exercises will find chin-ups to be easier. This is because the biceps are in a mechanically disadvantageous position when you use a pronated grip. Conversely, when your palms face toward you, your biceps are in a stronger position and able to generate more force. Of course, for climbing an overhand grip is more relevant and thus, you should prioritize the pull-up when you train.'

        ]);

        $foodpost=Post::create([
            'user_id'=>'1',
            'category_id'=>'4',
            'title'=>'Easy No-Bake Granola Bars',
            'thumbnail'=>'/thumbnails/foodpost.jpg',
            'excerpt'=>'Meet my favorite granola bar recipe. These granola bars are delicious and easy to make with basic pantry ingredients. You don’t even have to bake them!',
            'body'=>'Our cookbook, Love Real Food, is here! Get your copy ↣Love Real Food
Easy No-Bake Granola Bars
515 Comments
Jump to Recipe
best granola bars recipe

Meet my favorite granola bar recipe. These granola bars are delicious and easy to make with basic pantry ingredients. You don’t even have to bake them!

These granola bars can pass as a quick breakfast, and they make a perfect snack. I love to pack these bars for road trips and flights, and I love hearing from moms who make these granola bars regularly for their kids. They’re a big hit with all ages.
As you’ll see, the recipe is versatile, so you can easily incorporate your favorite flavors, like nuts, chocolate and dried fruit. You’ll find my go-to flavorings in the recipe below if you want to follow my lead.

These granola bars have spared me from some hangry moments lately. They’re satisfying, just sweet enough, and stick with me for a few hours. Granola bars to the rescue!

et your copy ↣Love Real Food
Easy No-Bake Granola Bars
515 Comments
Jump to Recipe
best granola bars recipe

Meet my favorite granola bar recipe. These granola bars are delicious and easy to make with basic pantry ingredients. You don’t even have to bake them!

These granola bars can pass as a quick breakfast, and they make a perfect snack. I love to pack these bars for road trips and flights, and I love hearing from moms who make these granola bars regularly for their kids. They’re a big hit with all ages.

granola bar ingredients

As you’ll see, the recipe is versatile, so you can easily incorporate your favorite flavors, like nuts, chocolate and dried fruit. You’ll find my go-to flavorings in the recipe below if you want to follow my lead.

These granola bars have spared me from some hangry moments lately. They’re satisfying, just sweet enough, and stick with me for a few hours. Granola bars to the rescue!

chopped oats and nuts


Granola Bar Ingredients
Oats
Old-fashioned oats or quick-cooking oats will work here (steel-cut oats will not). Old-fashioned oats lend a more chewy, “rustic” texture. Quick-cooking oats disappear more into the bars. If desired, you can briefly blitz old-fashioned oats in the food processor to achieve the texture of quick-cooking oats.

Mix-ins of your choice
Here’s where we add more flavor! See below for options.

Nut butter
Nut butter helps hold these bars together, and offers protein, healthy fat and fiber.  You could use peanut butter, almond butter, or even pecan butter. For a nut-free option, sunflower butter will work.

Honey or maple syrup
These natural sweeteners also help bind the bars together, and make these bars deliciously sweet (though not too sweet). Or, make date paste from fresh Medjool dates. Dates offer additional fiber, while honey or maple syrup do not. See the recipe notes for details.

Cinnamon, salt and vanilla extract
These add extra flavor to your bars. Technically, you could omit any or all of these, but the bars are more enticing with them. Salt enhances the flavor of all the other ingredients—cut it in half if you’re sensitive to salt.
Our cookbook, Love Real Food, is here! Get your copy ↣Love Real Food
Easy No-Bake Granola Bars
515 Comments
Jump to Recipe
best granola bars recipe

Meet my favorite granola bar recipe. These granola bars are delicious and easy to make with basic pantry ingredients. You don’t even have to bake them!

These granola bars can pass as a quick breakfast, and they make a perfect snack. I love to pack these bars for road trips and flights, and I love hearing from moms who make these granola bars regularly for their kids. They’re a big hit with all ages.

granola bar ingredients

As you’ll see, the recipe is versatile, so you can easily incorporate your favorite flavors, like nuts, chocolate and dried fruit. You’ll find my go-to flavorings in the recipe below if you want to follow my lead.

These granola bars have spared me from some hangry moments lately. They’re satisfying, just sweet enough, and stick with me for a few hours. Granola bars to the rescue!

chopped oats and nuts


Granola Bar Ingredients
Oats
Old-fashioned oats or quick-cooking oats will work here (steel-cut oats will not). Old-fashioned oats lend a more chewy, “rustic” texture. Quick-cooking oats disappear more into the bars. If desired, you can briefly blitz old-fashioned oats in the food processor to achieve the texture of quick-cooking oats.

Mix-ins of your choice
Here’s where we add more flavor! See below for options.

Nut butter
Nut butter helps hold these bars together, and offers protein, healthy fat and fiber.  You could use peanut butter, almond butter, or even pecan butter. For a nut-free option, sunflower butter will work.

Honey or maple syrup
These natural sweeteners also help bind the bars together, and make these bars deliciously sweet (though not too sweet). Or, make date paste from fresh Medjool dates. Dates offer additional fiber, while honey or maple syrup do not. See the recipe notes for details.

Cinnamon, salt and vanilla extract
These add extra flavor to your bars. Technically, you could omit any or all of these, but the bars are more enticing with them. Salt enhances the flavor of all the other ingredients—cut it in half if you’re sensitive to salt.

Watch How to Make Granola Bars
Mix-In Options
Two cups of mix-ins add flavor, texture and more nutrients. Choose from any combination of the following:

Nuts: Pecans, walnuts, almonds, or peanuts would all work well.
Seeds: Pepitas (green pumpkin seeds) or sunflower seeds are good options. You could use up to 1/4 cup flax seeds or chia seeds—these seeds absorb moisture, which is why I suggest limiting the quantity.
Chocolate: Mini chocolate chips are cute. If using regular chocolate chips or roughly chopped chocolate, blitz them for a few seconds in the food processor to break them into smaller pieces. Since chocolate is sweet, limit it to 3/4 cup or less.
Coconut: Shredded or flaked coconut will work here. Unsweetened is best, since these are bars are sweet enough as is.
Dried fruit: Dried cranberries, cherries, raisins, apricots, etc. Since these are sweet, limit them to 3/4 cup or less. Any fruit larger than a raisin will need to be broken up a bit more—either in the food processor or chopped by hand.'
        ]);

    }
}
