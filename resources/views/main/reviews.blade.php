@php $page = "reviews" @endphp

@extends('master')

@section('content')

<div class="content-banner p-4">
	<h1 class="text-xl">Reviews</h1>
</div>
<hr>
<div class="m-4">
	<x-ReviewSection img="images-persistent/icons/factorio.jpg" handle="factorio" name="Factorio" desc="Addictive gameplay loop and very satisfying seeing the work you've put into a working factory. Great developers and mods are great as well. Spearheading the automation game genre."/>

	<x-ReviewSection img="images-persistent/icons/celeste.jpg" handle="celeste" name="Celeste" desc="Awesome platformer but very hard. Probably the first game I have played that was specifically designed to be hard, and I got really hooked into it. Also the speedrunnning scene around this game is great."/>

	<x-ReviewSection img="images-persistent/icons/dq9.png" handle="dq9" name="Dragon Quest IX" desc="Best RPG on the planet, come back to it every now and again, just love the overall style / gameplay of it. Can be a bit grindy if you don't use gold mail trick to make money."/>

	<x-ReviewSection img="images-persistent/icons/ultrakill.jpg" handle="ultrakill" name="Ultrakill" desc="Best shooter i've played. There are so many cool details and mechanics that work well together. Fast paced difficult shooter with lots of character mobility, cool weapons (Such as The Marksman Revolver which launches a coin that redirects any shots into nearest enemy). Couldnt reccommend enough for people who like shooters or even people who don't like traditional shooters."/>
	
	<x-ReviewSection img="images-persistent/icons/portal.jpg" handle="portal" name="Portal" desc="A classic, most of my playtime on this game is from speedrunning, as the game is pretty short. So many cool, brain melting speedrunning mechanics."/>

	<x-ReviewSection img="images-persistent/icons/ror2.jpg" handle="ror2" name="Risk Of Rain 2" desc="Awesome rougelike (lite?). I like this game alot because of the really unique items you get throughout the run, very much binding of isaac-esque. You unlock new items and characters throughout the game, and you scale in knowledge of what items are good / bad. Makes for one of the most satisfying games i've played."/>

	<x-ReviewSection img="images-persistent/icons/outer.jpg" handle="outer" name="Outer Wilds" desc="AWESOME. Space exploration - Discovering information about a long lost species - Cool mechanics. Great game and if you play it, go into it without any knowledge and don't look stuff up. If you can't figure out something, go somewhere else. Great display of knowledge is power as most of the puzzles you can do if you know something"/>

	<x-ReviewSection img="images-persistent/icons/minecraft.png" handle="minecraft" name="Minecraft" desc="Great game, probably the game i've put the most hours into, can't complain about anything because the game is all about what you make of it."/>

	<x-ReviewSection img="images-persistent/icons/satisfactory.jpg" handle="satisfactory" name="Satsifactory" desc="Lets be honest, factorio will always be the OG in this style of game. But satisfactory, while more limiting in some aspects of pure efficiency and scalability that factorio handles well, satisfactory puts a nice twist and its own personality into this style of game. It focuses a lot more on a well rounded experience of automation, exploration, factory design and story."/>

	<x-ReviewSection img="images-persistent/icons/firewatch.jpg" handle="firewatch" name="Firewatch" desc="Great and (fairly) short game, with a good story. The character dynamics and interactions are fun. People complain about the ending but I think its a great ending."/>

	<x-ReviewSection img="images-persistent/icons/randc.png" handle="randc" name="Ratchet & Clank" desc="AMAZING run and gun 3rd person shooter game series, my favourite part being the cool variety in weapons you can get and the story / style. Rift Apart is maybe the best looking game i've ever seen. First r&c game is really difficult."/>

	<x-ReviewSection img="images-persistent/icons/omori.jpg" handle="omori" name="Omori" desc="Amazing story, awesome rpg elements and battling system. Worth a play through and don't look up spoilers."/>

	<x-ReviewSection img="images-persistent/icons/baba.jpg" handle="baba" name="Baba Is You" desc="Great programming style puzzle game, where moving text instructions around effects the rules of the game. e.g disconnecting the 'baba is you' instruction will make it so you can't play."/>

	<x-ReviewSection img="images-persistent/icons/balatro.jpg" handle="balatro" name="Balatro" desc="Poker Rougelike, awesome game and made in my favourite game engine (Love2d). Addictive and in depth, deffo worth a play."/>

	<x-ReviewSection img="images-persistent/icons/civ6.jpg" handle="civ6" name="Civilization 6" desc="Fun game to play with friends, games can be very long with a steep learning curve getting into it 0_0"/>

	<x-ReviewSection img="images-persistent/icons/terraria.jpg" handle="terraria" name="Terraria" desc="Amazing game where you progressively beat parts of the game, getting better gear and beating harder bosses, some of the coolest items and stuff you can get that i've ever seen in a game."/>

	<x-ReviewSection img="images-persistent/icons/eldenring.jpg" handle="eldenring" name="Elden Ring" desc="First souls like game i've played, very difficult but rewarding completing a hard section. Only as hard as you make it really, as you can use summons / over level yourself to beat bosses."/>

	<x-ReviewSection img="images-persistent/icons/beforeyoureyes.jpg" handle="beforeyoureyes" name="Before Your Eyes" desc="Cool short story game, very sad :(. Main mechanic where blinking in real life progresses the game makes it so you are forced to keep yourself realy immersed in the game, very smart."/>

	<x-ReviewSection img="images-persistent/icons/beginnersguide.jpg" handle="beginnersguide" name="The Beginners Guide" desc="Amazing game by the guy who made stanley parable (Davey Wreden). Big commentary around game development and their creators, as well as talking about creator intent when making a game. REALLY COOL, PLAY"/>
</div>

@endsection