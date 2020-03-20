<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php get_template_part('inc/meta'); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrap">

<?php get_template_part('inc/header'); ?>

<div id="content">
	<?php get_template_part('inc/menu'); ?>

	<section id="home_eyecatch">
		<div id="home_eyecatch_inbox">
			<p><span>Solve <span>problems</span><br />with <span>technology</span> and<br />make people <span>happy</span>.</span></p>
			<h1>株式会社キキバーブは課題と技術と人に寄り添うWeb制作会社です。</h1>
		</div>
	</section>

	<section id="home_about" class="content_sectionBox">
		<h2 class="headlineSecond">ビジネス課題を技術の力で解決に導き<br />関わる全ての人と幸せを分かち合うために。</h2>
		<p>株式会社キキバーブは東京都調布市を拠点に活動するWeb制作会社です。<br />
		2011年の創業から数多くのクライアントとご縁を頂き、多種多様な課題解決に携わるなかで、真に効果的なソリューションをご提案するためには、「課題の本質を深く知り抜くこと」「取捨選択できるだけの知識と技術力」「率直に、でも心配りを忘れないコミュニケーション」が必要であると強く感じます。<br />
		自分たちだけに都合の良いフォーマットに課題を無理やり当てはめてみても、根本の解決にはたどり着けません。<br />
		適切な解法が見つからなかったり、見つかってもそれを実装する技術力がなければ、ただの理想論となってしまいます。<br />
		お互いの顔色を伺いすぎてしまったり、逆に一方的なコミュニケーションになってしまったら満足な結果を得ることは絶対に出来ません。<br />
		私たちは「人には優しく、技術には貪欲に、課題には丁寧に」寄り添うことを命題に掲げ、クライアント、ステークホルダー、株主、従業員、ユーザー、そして私たち自身も、関係するすべての人に幸せを提供し、それを分かち合える会社でありたいと願っています。</p>
		<ul>
			<li class="verticalTwoBox verticalTwoBox-imageRight wow fadeInUp">
				<p class="verticalTwoBox_picture">
					<picture>
						<img src="<?php echo get_template_directory_uri(); ?>/img/img_services_website.png" alt="">
					</picture>
				</p>
				<div class="verticalTwoBox_content">
					<h3 class="headlineThird">ウェブサイト制作</h3>
					<p>一言で「ウェブサイト制作」と言っても、そこに至るまでの想いや、抱えている問題は様々です。<br /><br />
					株式会社キキバーブでは、現状の解析や競合他社の調査といったリサーチを重点的に行い、見た目の美しさや派手な動きのインパクトだけで無く、効果を重視した制作をご提案致します。<br /><br />
					特にWordPressを活用したサイト制作は、多くの実績に基づいた確かな知識と経験がございます。<br /><br />
					また、数々の制作経験と情報収集で蓄積した「検索エンジンに愛されるマークアップ」の技術で、月極契約による外部リンクの獲得に頼らない、本質的なSEO対策をご提供致します。<br /><br />
					小手先の技術と形ばかりの外部リンク獲得に依存せず、検索エンジンが求めるコンテンツと、検索エンジンが目指す先を逆算して行う、最も正攻法なSEO対策をご提供致します。</p>
					<p class="verticalTwoBox_link"><a href="<?php echo home_url(); ?>/service/#service_website">ウェブサイト制作について もっと知る</a></p>
				</div>
			</li>

			<li class="verticalTwoBox verticalTwoBox-imageLeft wow fadeInUp">
				<p class="verticalTwoBox_picture">
					<picture>
						<img src="<?php echo get_template_directory_uri(); ?>/img/img_services_system.png" alt="">
					</picture>
				</p>
				<div class="verticalTwoBox_content">
					<h3 class="headlineThird">システム開発</h3>
					<p>お客様のウェブビジネスを加速・促進させるITシステムを開発致します。<br /><br />
					問い合わせフォームや掲示板といった小規模なものから、特殊な計算式や条件付けが必要な業務管理アプリケーション、細やかなご要望に沿ったお客様専用のコンテンツマネージメントシステムまで、規模感やご予算に合わせて柔軟に対応させて頂きます。<br /><br />
					また、WordPressを基幹システムとした会員制サイトやB2C/C2Cサービス、ECサイトなどの構築や、フルオーダーメイドのプラグイン開発も得意としています。<br /><br />
					丁寧なヒアリングを重ねて課題の本質をあぶり出し、要件定義、設計から構築・運用・保守まで一貫体制でのサポートをご提供致します。
					</p>
					<p class="verticalTwoBox_link"><a href="<?php echo home_url(); ?>/service/#service_system">システム開発について もっと知る</a></p>
				</div>
			</li>

			<li class="verticalTwoBox verticalTwoBox-imageRight wow fadeInUp">
				<p class="verticalTwoBox_picture">
					<picture>
						<img src="<?php echo get_template_directory_uri(); ?>/img/img_services_webservice.png" alt="">
					</picture>
				</p>
				<div class="verticalTwoBox_content">
					<h3 class="headlineThird">ウェブサービス企画開発</h3>
					<p>実際に自社で数々のウェブサービスを企画・開発・運営しているからこそ、出来るご提案があります。<br /><br />
					これからウェブサービスでの起業をお考えの場合、最初から全てのアイディアを備えた大掛かりなサービスを構築するのではなく、ビジネスの仮説を検証するために実用最小限となる製品「MVP(minimum viable product)」から踏み出し始めて、そこで得た検証結果や取り巻く環境などから段階的に発展させていくモデルのご提供も行っております。<br /><br />
					また、詳細の決まっていない企画段階からのアサインや、ご要望に適うサービス案の概要ご提案も承っております。</p>
					<p class="verticalTwoBox_link"><a href="<?php echo home_url(); ?>/service/#service_webservice">ウェブサービス企画開発について もっと知る</a></p>
				</div>
			</li>

			<li class="verticalTwoBox verticalTwoBox-imageLeft wow fadeInUp">
				<p class="verticalTwoBox_picture">
					<picture>
						<img src="<?php echo get_template_directory_uri(); ?>/img/img_services_advisory.png" alt="">
					</picture>
				</p>
				<div class="verticalTwoBox_content">
					<h3 class="headlineThird">技術顧問・アドバイザリー</h3>
					<p>Web制作における企画、制作、運用、マーケティングなどの各フェーズで発生する課題について、これまでに数多くの実務を行い様々なお客様と直接対話を重ねてきた弊社代表が、技術的な視野と経営側の視点を持ってノウハウをご提供致します。<br /><br />
					専門用語はなるべく使わず、親身になって寄り添う姿勢を心がけておりますので、生粋のIT企業はもちろん、これからの事業のWeb戦略について「何をどうしたら良いか分からない」「課題感はあるけれど解決の糸口が見つからない」といった場合でも効果的なお力添えを致します。<br /><br />
					最先端の技術知見と経営的観点の両方を持って、「技術的には正しいが経営的には正しくない選択」、あるいはその逆といった難しい場面でも、現実に即した最適解的ソリューションをご提案していきます。<br /><br />
					メールや電話での比較的簡易なサポートのご提供から、常駐や半常駐といった継続的かつ包括的な参画まで、最も効果的なかたちで携われるよう柔軟にご対応致します。</p>
					<p class="verticalTwoBox_link"><a href="<?php echo home_url(); ?>/service/#service_advisory">技術顧問・アドバイザリーについて もっと知る</a></p>
				</div>
			</li>
		</ul>

		<p class="readmore"><a href="<?php echo home_url(); ?>/about/" class="no-link-effect">株式会社キキバーブについて 詳しく知る</a></p>
	</section>

	<section id="home_works" class="content_sectionBox wow fadeInUp">
		<h2 class="headlineFirst">Works<span>WordPressを活用した企業サイトやウェブサービスの制作を中心に、ECサイトやLPなど多様な実績がございます</span></h2>

		<ul class="cardListBox">
	<?php $the_query = new WP_Query(array('posts_per_page' => 9, 'post_type' => 'works', 'orderby' => 'post_date', 'order' => 'DESC')); ?>
	<?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
			<li class="cardListBox_list"><a href="<?php the_permalink(); ?>" class="no-link-effect">
				<p class="cardListBox_list_pattern cardListBox_list_pattern_<?php echo get_the_terms( $post->ID, 'pattern' )[0]->slug; ?>"><?php echo get_the_terms( $post->ID, 'pattern' )[0]->name; ?></p>

				<p class="cardListBox_list_picture">
					<picture>
						<?php the_post_thumbnail('thumb_square'); ?>
					</picture>
				</p>

				<div class="cardListBox_list_content">
					<h3 class="headlineThird"><?php echo get_the_title(); ?></h3>
					<ul class="tagListBox">
		<?php foreach(get_the_terms( $post->ID, 'part' ) as $v) : ?>
						<li class="tagListBox_list"><?php echo $v->name; ?></li>
		<?php endforeach; ?>
					</ul>
				</div>
			</a></li>
	<?php endwhile; endif; wp_reset_postdata(); ?>
		</ul>
		<p class="readmore"><a href="<?php echo home_url(); ?>/works/" class="no-link-effect">実績について もっと知る</a></p>
	</section>

	<section id="home_news" class="content_sectionBox wow fadeInUp">
		<h2 class="headlineFirst">Topics<span>株式会社キキバーブの提供サービスに関するニュースや各種お知らせなどを掲載しています。</span></h2>
		<ul class="newsListBox">
	<?php $the_query = new WP_Query(array('posts_per_page' => 5, 'post_type' => 'topics', 'orderby' => 'post_date', 'order' => 'DESC')); ?>
	<?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
			<li class="newsListBox_list"><time><?php the_time("Y.m.d"); ?></time><div><?php the_content(); ?></div></li>
	<?php endwhile; endif; wp_reset_postdata(); ?>
		</ul>
	</section>

	<?php get_template_part('inc/contactlink'); ?>
</div>

</div>
<?php get_template_part('inc/footer'); ?>

<script>
const throttleFunc = (() => {
	const interval = 100;
	let lastTime = new Date().getTime() - interval;
	return () => {
		if ((lastTime + interval) <= new Date().getTime()) {
			lastTime = new Date().getTime();
			if(window.pageYOffset < 610){
				document.getElementById('menu').classList.add('no-bg')
			} else {
				document.getElementById('menu').classList.remove('no-bg')
			}
		}
	};
})();
window.addEventListener('DOMContentLoaded', throttleFunc, false);
window.addEventListener('scroll', throttleFunc, false);
</script>
</body>
</html>
