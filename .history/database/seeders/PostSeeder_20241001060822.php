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
    }
}
