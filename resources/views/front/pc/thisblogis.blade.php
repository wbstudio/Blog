@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/front/pc/fixedpages.css') }}">
@endsection

@section('content')
<div class="container">
<div id="fixed_page">
<section id="this_blog_is">
<h2 class="ja">{{ config('siteconfig.SITE_NAME') }}とは？</h2>

<div class="sub_title">
<span class="pink">{{ config('siteconfig.SITE_NAME') }}</span>とは、「<span class="pink">かっこいい大人の男</span>」になりたいという
〇人の男たちが集まって、<br>
自分の「<span class="pink">偏愛</span>」をツラツラと綴っていくblogです。
</div>
<div class="block_mass">
<h4>「かっこいい大人の男」ってなに？</h4>
<p>
「かっこいい大人の男」ってなに？となったときに、<br>
月並みな答えになってしまいますが、
</p>
<p>
やはり<br>
<span class="pink">好きなこと</span>に取り組み、<br>
そして<span class="pink">挑戦している姿</span>は<br>
「輝いているし、かっこいい」
</p>
<p>
という答えにたどり着きました。
</p>
<p>
ただ、<br>
輝けるくらいことって、何だろう？<br>
なんでもかんでも挑戦することがかっこいいことなのか？
</p>
<p>
と思ったときに、<br>
「それは違うな...」となりました。
</p>
<p>
輝けるくらいの事って、
</p>
<p class="pink">
そのことが好きで好きでたまらなくて、<br>
勝手に体が動いてしまう、<br>
勝手に手が動いて調べてしまう、
</p>
<p>
「1」しか聞かれてないのに、<br>
「10」も「20」も答えてしまって<br>
聞かれた人に引かれてしまうような...
</p>
<p>
所謂、<span class="pink big_font">「偏愛」</span>。
</p>
<p>
その「偏愛」を大切にし、<br>
突き詰めていくことこそが、<br>
現時点での〇人の男たちの<br>
「かっこいい大人の男」の答えです。
</p>
<p>
さて...では、なぜblogという形で世に出すかというと、
</p>
</div>
<div class="block_mass">
    <h4>なぜblogという形でやっているの？</h4>
    <p>
        なぜblogという形でやっているかというと、<br>
        理由は3つ。
    </p>
    <div class="inner_block_mass">
        <h5>1.自分の頭を整理するため</h5>
        <p>
        これに関しては説明不要かなと思いますが、<br>
        簡単に言わせてもらいますと、
        </p>
        <p>
        書くことによって<br>
        その日の復習をしたり、
        </p>
        <p>
        書くことで<br>
        <span class="pink">自分の成長過程</span>だったり、<br>
        <span class="pink">その時に考えていたこと</span>を、<br>
        日記的に記しておくになるので、
        </p>
        <p>
        備忘録的に使ったり、<br>
        後で思い返して忘れていた気持ちを思い出せたらいいな<br>
        と思ったからです。
        </p>
    </div>

    <div class="inner_block_mass">
        <h5>2.同じ「偏愛」を持った人とのつながりを持ちたいため</h5>
        <p>
        何か「偏愛」があったとしても、<br>
        同じものを「偏愛」にしている人はたくさんいますし、<br>
        それ関して自分より優れている人なんて本当にいっぱいいます。
        </p>
        <p>
        <span class="pink">同じものを「偏愛」にしている人と関われるのは、<br>
        幸せ</span>ですし、違う人の意見を聞けるというのは、<br>
        <span class="pink">とても勉強になります</span>。
        </p>
        <p>
        その人たちとつながるための1つのツールとして、<br>
        このblogを立ち上げました。
        </p>
        <p>
        また、<br>
        ブログって閲覧数を稼ぐためだけにやるのであれば、<br>
        一般的に考えて<br>
        とにかく<span class="pink">「1つのことを突き詰めて書く」というのが、<br>
        セオリー</span>とされていると思います。
        </p>
        <p>
        私は飲食店で10年近く働いていて、<br>
        料理を作ることはとても好きです。
        </p>
        <p>
        ただ、料理以外でも、<br>
        音楽、競馬、プログラミング、コピーライティング...等<br>
        たくさん好きで好きでしょうがないものがあります。
        </p>
        <p>
        「閲覧数を稼ぐため」に料理に対してのみのblogを書いてしまうと、<br>
        他の多くを「偏愛」にもつ人との関わりが絶たれてしまいます。
        </p>
        <p>
        あえてblogを書く上での<span class="pink">セオリーに逆行したのは、<br>
        自分の「偏愛」についていろんな分野のことを語ることで、<br>
        同じ「偏愛」を持つ人とのかかわりを持ったり、<br>
        学ばせてもらえたらうれしい</span>なと考えたからです。
        </p>
        <p>
        ですので、<br>
        本当に<span class="pink">お友達にLINEするくらい気軽にお問い合わせ</span>とかをもらえると、<br>
        うれしいです。
        </p>
    </div>
    <div class="inner_block_mass">
        <h5>3.あなたのアクションを起こす「きっかけ」になれたら嬉しい</h5>
        <p>
        以前、you tubeで俣野成敏さんと武井壮さんの対談を見たのですが、<br>
        その中でとても心に残るワードが出てきました。<br>
        <span class="small_caution">
        ※俣野成敏さん:「プロフェッショナルサラリーマン」等の著者<br>
        ※武井壮さん:百獣の王の人
        </span>
        </p>
        <p>
        そのワードというのが<br>
        <span class="pink big_font">「小さな違和感」</span>
        </p>
        <p>
        これだけ聞いても何のことかわからないかもしれませんが、
        </p>
        <p>
        武井壮さんから、<br>
        対談当時44歳だった俣野成敏さんへの質問の中で<br>
        <span class="pink">「もう一回20歳に戻るとしたら、今の自分に持っているなんでもいいからプレゼントしたいものは何ですか？」</span><br>
        という答えの中に出てきたワードなのですが、
        </p>
        <p>
        日常生活において<span class="pink">「小さな違和感」</span>を感じるとき<br>
        → <span class="pink">「つまらない」とか「ほんとにこのままでいいのかな」という違和感</span>が心に生じているとき。
        </p>
        <p>
        つまり<br>
        「ここじゃないよ！このままでいいの？」っていう<span class="pink">神様からのノック</span>。
        </p>
        <p>
        別にこれは<br>
        「今すぐ起業しましょう」とか<br>
        「この場所から出ていきましょう」とかいう話ではないです。
        </p>
        <p>
        この「小さな違和感」は<br>
        もしかしたら只の遊びたい心で社会人としてはよくないのかもしれないと思ってる人が、<br>
        たくさんいると思うのですが、
        </p>
        <p>
        この<span class="pink">違和感にはもしかすると本当の自分が隠れていて</span>、<br>
        それをただ遊びたい心として出すのではなく、
        </p>
        <p>
        <span class="pink">会社や今自分のいる場所の中で情報をゲットして、<br>
        その場所にとってプラスになって自分も楽しむ形</span>として提案できたら、
        </p>
        <p>
        それは<span class="pink">大きな武器になるし「個性」というものになっていく</span>。<br>
        だから「小さな違和感」を無視しないで育てていきたい。<br>
        という内容のことをおっしゃっていました。
        </p>
        <p>
        これを聞いて本当に衝撃が走ったといいますか、<br>
        <span class="big_font">「うおぉぉぉぉ～！」</span>となりましたね。
        </p>
        <p>
        私にはこれほどの衝撃は与えられないかもしれませんが、
        </p>
        <p>
        このblogを見てあなたが<br>
        「この人たちいつもバカみたいにくだらないことをやって楽しそうだな」と思って、<br>
        <span class="pink big_font">「偏愛の道の一歩を踏み出すきっかけ」</span>や<br>
        <span class="pink big_font">「大きな興味と小さな違和感を育てるきっかけ」</span>になったら<br>
        うれしいなと思います。
        </p>
    </div>
</div>
<div class="block_mass">
    <p>
        長々と書いてしまいましたが、<br>
        こんな思いではじめた「{{ config('siteconfig.SITE_NAME') }}」です。
    </p>
    <p class="bold">
        あなたの応援が励みになります。<br>
        どうぞよろしくお願いします。
    </p>
    <p>
        また、2021年5月（blog開設）現在、<br>
        blog記事とお問い合わせの機能くらいしかありませんが、<br>
        その他のコンテンツも思案しておりますので、<br>
        楽しみにしていてください。
    </p>
    <p>
        それでは末永くよろしくお願いします。
    </p>
</div>
<div class="name">
    wb-studio代表 K-suke
</div>


</section>
</div>
</div>
@endsection