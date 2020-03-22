<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	protected $games;
	protected $emailFrom;
	protected $emailTo;
	protected $games_order;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->games = [
			'1'  => [
				'title'  => 'Desert Shark',
				'img'    => asset('game-images/Desert-shark.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&amp;gameid=desertshark&amp;moneymode=fun&amp;jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'2'  => [
				'title'  => 'Lil Devil',
				'img'    => asset('game-images/lil-devil.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&amp;gameid=lildevil&amp;moneymode=fun&amp;jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'3'  => [
				'title'  => 'Sugar Cubes',
				'img'    => asset('game-images/sugar-cubes.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&amp;gameid=sugarcubes&amp;moneymode=fun&amp;jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'4'  => [
				'title'  => 'Wild Joker',
				'img'    => asset('game-images/wild-joker.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=wildjokerstacks&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'5'  => [
				'title'  => 'Crystal Cavern',
				'img'    => asset('game-images/crystal-cavern.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=crystalcavern&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'6'  => [
				'title'  => 'Heroes’ Gathering',
				'img'    => asset('game-images/heroes-gathering.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=heroesgathering&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'7'  => [
				'title'  => 'Snake Arena',
				'img'    => asset('game-images/snake-arena.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=snakearena&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'8'  => [
				'title'  => 'Trail Blazer',
				'img'    => asset('game-images/trail-blazer.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=trailblazer&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'9'  => [
				'title'  => 'Ricky Riches',
				'img'    => asset('game-images/ricky-riches.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=rickyrichesboosterreel&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'10' => [
				'title'  => 'Pyro Pixie',
				'img'    => asset('game-images/pyro-pixie.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=pyropixie&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'11' => [
				'title'  => 'El Dorado',
				'img'    => asset('game-images/el-dorado.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=eldorado&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'12' => [
				'title'  => 'Millionaire',
				'img'    => asset('game-images/millionaire.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=millionaire&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'13' => [
				'title'  => 'Wildchemy',
				'img'    => asset('game-images/wildchemy.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=wildchemy&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'14' => [
				'title'  => 'White Rabbit',
				'img'    => asset('game-images/white-rabbit.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=whiterabbit&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'15' => [
				'title'  => 'Joker Jackpots',
				'img'    => asset('game-images/joker-jackpots.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=jokerjackpot&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'16' => [
				'title'  => 'Big Bounty Bill',
				'img'    => asset('game-images/big-bounty-bill.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=bigbountybill&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'17' => [
				'title'  => 'Tower Tumble',
				'img'    => asset('game-images/tower-tumble.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=towertumble&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'18' => [
				'title'  => 'Kingmaker',
				'img'    => asset('game-images/kingmaker.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=kingmaker&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'19' => [
				'title'  => '100 Bit Dice',
				'img'    => asset('game-images/100-bit-dice.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=100bitdice&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'20' => [
				'title'  => 'Rockys Gold',
				'img'    => asset('game-images/rockys-gold.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=rockysgold&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'21' => [
				'title'  => 'Diamond Hunt',
				'img'    => asset('game-images/diamond-hunt.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=operationdiamondhunt&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'22' => [
				'title'  => 'Its Time!!',
				'img'    => asset('game-images/its-time.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=itstime&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'23' => [
				'title'  => 'Rumble',
				'img'    => asset('game-images/rumble.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=rumble&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'24' => [
				'title'  => 'Casino On the House',
				'img'    => asset('game-images/casino-on-the-house.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=onthehouse&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'25' => [
				'title'  => 'Zombie Queen',
				'img'    => asset('game-images/zombie-queen.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=zombiequeen&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'26' => [
				'title'  => 'Hypernova Megaways',
				'img'    => asset('game-images/hypernova-megaways.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=hypernovamegaways&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'27' => [
				'title'  => 'Splendour Forest',
				'img'    => asset('game-images/splendour-forest.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=splendourforest&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'28' => [
				'title'  => 'Caribbean Anne',
				'img'    => asset('game-images/caribbean-anne.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=caribbeananne&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'29' => [
				'title'  => 'Dragon 50000',
				'img'    => asset('game-images/dragon-50000.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=dragon50000&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'30' => [
				'title'  => 'Money Train',
				'img'    => asset('game-images/money-train.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=moneytrain&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'31' => [
				'title'  => 'Extra Chilli',
				'img'    => asset('game-images/extra-chilli.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=extrachilli&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'32' => [
				'title'  => 'Opal Fruits',
				'img'    => asset('game-images/opal-fruits.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=opalfruits&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'33' => [
				'title'  => 'Fruit Strike',
				'img'    => asset('game-images/fruit-strike.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=fruitstrike&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'34' => [
				'title'  => 'Powerspin',
				'img'    => asset('game-images/powerspin.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=powerspin&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'35' => [
				'title'  => 'Midas Treasure',
				'img'    => asset('game-images/midas-treasure.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=midastreasure&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'36' => [
				'title'  => 'The Golden Chase',
				'img'    => asset('game-images/the-golden-chase.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=chase&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'37' => [
				'title'  => 'Ignite the Night',
				'img'    => asset('game-images/ignite-the-night.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=ignitethenight&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'38' => [
				'title'  => 'Doctor Electro',
				'img'    => asset('game-images/doctor-electro.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=cavemanbob&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'39' => [
				'title'  => 'Caveman Bob',
				'img'    => asset('game-images/caveman-bob.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=drelectro&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'40' => [
				'title'  => 'Bonanza',
				'img'    => asset('game-images/bonanza.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=bonanza&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'41' => [
				'title'  => 'Jupiter\'s Choice',
				'img'    => asset('game-images/jupiters-choice.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=jupiterschoice&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'42' => [
				'title'  => 'Danger High Voltage',
				'img'    => asset('game-images/danger-high-voltage.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=highvoltage&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'43' => [
				'title'  => 'King of Kings',
				'img'    => asset('game-images/king-of-kings.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=kingofkings&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'44' => [
				'title'  => 'The Final Countdown',
				'img'    => asset('game-images/the-final-countdown.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=finalcountdown&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'45' => [
				'title'  => 'Perfect Catch',
				'img'    => asset('game-images/perfect-catch.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=perfectcatch&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'46' => [
				'title'  => 'Hong Bao',
				'img'    => asset('game-images/hong-bao.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=hongbao&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'47' => [
				'title'  => 'Dragons\' Awakening',
				'img'    => asset('game-images/dragons-awakening.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=dragonsawakening&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'48' => [
				'title'  => 'Boost It',
				'img'    => asset('game-images/boost-it.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=boostit&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'49' => [
				'title'  => 'Temple Tumble',
				'img'    => asset('game-images/temple-tumble.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=templetumble&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'50' => [
				'title'  => 'Slotdice',
				'img'    => asset('game-images/slotdice.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=slotdice&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'51' => [
				'title'  => 'Machina',
				'img'    => asset('game-images/machina.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=machina&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'52' => [
				'title'  => 'The Great Pigsby',
				'img'    => asset('game-images/the-great-pigsby.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=thegreatpigsby&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'53' => [
				'title'  => 'Sunset',
				'img'    => asset('game-images/sunset.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=sunset&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'54' => [
				'title'  => 'Monkey God',
				'img'    => asset('game-images/monkey-god.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=monkeygod&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'55' => [
				'title'  => 'Epic Joker',
				'img'    => asset('game-images/epic-joker.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=epicjoker&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'56' => [
				'title'  => 'Zombie Circus',
				'img'    => asset('game-images/zombie-circus.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=zombiecircus&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'57' => [
				'title'  => 'Van Gogh',
				'img'    => asset('game-images/van-gogh.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=vangogh&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'58' => [
				'title'  => 'Erik the Red',
				'img'    => asset('game-images/erik-the-red.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=erikthered&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'59' => [
				'title'  => 'Relax Blackjack',
				'img'    => asset('game-images/relax-blackjack.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=blackjackneo&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
			'60' => [
				'title'  => 'Relax Roulette',
				'img'    => asset('game-images/relax-roulette.png'),
				'iframe' => '<iframe src="https://d3nsdzdtjbr5ml.cloudfront.net/casino/launcher.html?channel=web&gameid=roulettenouveau&moneymode=fun&jurisdiction=MT" width="100%" height="600px" frameborder="0" allowfullscreen=""></iframe>'
			],
		];

		// TODO change FROM and TO emails
		$this->emailFrom = 'admin@spielenest.com';
		$this->emailTo   = 'mailbettermedia@gmail.com';
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		return view('home', ['games' => $this->games]);
	}

	public function viewGame($gameId)
	{
		if (!isset($this->games[$gameId])) {
			return abort(404);
		}

		return view('pages.view-game', ['game' => $this->games[$gameId]]);
	}

	public function faq()
	{
		return view('pages.faq');
	}

	public function games()
	{
		return view('pages.games', ['games' => $this->games]);
	}

	public function aboutUs()
	{
		return view('pages.about');
	}

	public function howToPlay()
	{
		return view('pages.how-to-play');
	}

	public function contact()
	{
		return view('pages.contact');
	}

	public function cookiePolicy() {
		return view( 'pages.cookie-policy' );
	}

	public function privacyPolicy() {
		return view( 'pages.privacy-policy' );
	}

	public function submitContact(Request $request)
	{
		$this->validate($request, [
			'name'    => 'required',
			'subject' => 'required',
			'email'   => 'required|email',
			'message' => 'required'
		]);

		\Mail::send('emails.contact-us',
			[
				'name'         => $request->get('name'),
				'email'        => $request->get('email'),
				'subject'      => $request->get('subject'),
				'user_message' => $request->get('message')
			], function ($message) use ($request) {
				$message->from($this->emailFrom);
				$message->to($this->emailTo, 'Admin')->subject($request->get('subject'));
			});


		return back()->with('success', 'Thanks for contacting us!');
	}
}
