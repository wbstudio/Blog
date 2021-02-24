@extends('front.pc.include.layout')
@section('title', 'topページ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--変更--><link rel="stylesheet" href="{{ asset('css/front/pc/list.css') }}"><!--変更-->
@endsection

@section('content')
<div class="container">
	<div id="article_list">
		<section id="category">
			<h2 class="ja">Categoryの記事一覧</h2>
			<div class="section_inner">
            <div class="article_list_mass">
					<div class="article_list_image_area"> <a href=""><img src="{{ asset('images/front/top_link/image_190_150.png') }}"></a>
						<div class="article_list_base">
							<div class="article_list_auther">著者:<a href="">テスト名前</a></div>
							<div class="article_list_category">カテゴリー:<a href="">テスト名前</a></div>
							<div class="article_list_update">更新日時:0000/00/00</div>
						</div>
					</div>
					<div class="article_list_explain_area">
						<div class="article_list_title"><a href="">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトル</a></div>
						<div class="article_list_explain"> <a href="">記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明</a> </div>
						<div class="article_list_tag_list">
                            <a href=""><div class="tag_single">:00000</div></a>
                            <a href=""><div class="tag_single">:00000</div></a>
                        </div>
						<div class="article_list_view_count">閲覧数:00000</div>
                    </div>
                </div>



				<div class="article_list_mass">
					<div class="article_list_image_area"> <a href=""><img src="{{ asset('images/front/top_link/image_190_150.png') }}"></a>
						<div class="article_list_base">
							<div class="article_list_auther">著者:<a href="">テスト名前</a></div>
							<div class="article_list_category">カテゴリー:<a href="">テスト名前</a></div>
							<div class="article_list_update">更新日時:0000/00/00</div>
						</div>
					</div>
					<div class="article_list_explain_area">
						<div class="article_list_title"><a href="">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトル</a></div>
						<div class="article_list_explain"> <a href="">記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明</a> </div>
						<div class="article_list_tag_list">
                            <a href=""><div class="tag_single">:00000</div></a>
                            <a href=""><div class="tag_single">:00000</div></a>
                        </div>
						<div class="article_list_view_count">閲覧数:00000</div>
                    </div>
                </div>



				<div class="article_list_mass">
					<div class="article_list_image_area"> <a href=""><img src="{{ asset('images/front/top_link/image_190_150.png') }}"></a>
						<div class="article_list_base">
							<div class="article_list_auther">著者:<a href="">テスト名前</a></div>
							<div class="article_list_category">カテゴリー:<a href="">テスト名前</a></div>
							<div class="article_list_update">更新日時:0000/00/00</div>
						</div>
					</div>
					<div class="article_list_explain_area">
						<div class="article_list_title"><a href="">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトル</a></div>
						<div class="article_list_explain"> <a href="">記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明</a> </div>
						<div class="article_list_tag_list">
                            <a href=""><div class="tag_single">:00000</div></a>
                            <a href=""><div class="tag_single">:00000</div></a>
                        </div>
						<div class="article_list_view_count">閲覧数:00000</div>
                    </div>
                </div>



				<div class="article_list_mass">
					<div class="article_list_image_area"> <a href=""><img src="{{ asset('images/front/top_link/image_190_150.png') }}"></a>
						<div class="article_list_base">
							<div class="article_list_auther">著者:<a href="">テスト名前</a></div>
							<div class="article_list_category">カテゴリー:<a href="">テスト名前</a></div>
							<div class="article_list_update">更新日時:0000/00/00</div>
						</div>
					</div>
					<div class="article_list_explain_area">
						<div class="article_list_title"><a href="">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトル</a></div>
						<div class="article_list_explain"> <a href="">記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明</a> </div>
						<div class="article_list_tag_list">
                            <a href=""><div class="tag_single">:00000</div></a>
                            <a href=""><div class="tag_single">:00000</div></a>
                        </div>
						<div class="article_list_view_count">閲覧数:00000</div>
                    </div>
                </div>



				<div class="article_list_mass">
					<div class="article_list_image_area"> <a href=""><img src="{{ asset('images/front/top_link/image_190_150.png') }}"></a>
						<div class="article_list_base">
							<div class="article_list_auther">著者:<a href="">テスト名前</a></div>
							<div class="article_list_category">カテゴリー:<a href="">テスト名前</a></div>
							<div class="article_list_update">更新日時:0000/00/00</div>
						</div>
					</div>
					<div class="article_list_explain_area">
						<div class="article_list_title"><a href="">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトル</a></div>
						<div class="article_list_explain"> <a href="">記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明</a> </div>
						<div class="article_list_tag_list">
                            <a href=""><div class="tag_single">:00000</div></a>
                            <a href=""><div class="tag_single">:00000</div></a>
                        </div>
						<div class="article_list_view_count">閲覧数:00000</div>
                    </div>
                </div>



				<div class="article_list_mass">
					<div class="article_list_image_area"> <a href=""><img src="{{ asset('images/front/top_link/image_190_150.png') }}"></a>
						<div class="article_list_base">
							<div class="article_list_auther">著者:<a href="">テスト名前</a></div>
							<div class="article_list_category">カテゴリー:<a href="">テスト名前</a></div>
							<div class="article_list_update">更新日時:0000/00/00</div>
						</div>
					</div>
					<div class="article_list_explain_area">
						<div class="article_list_title"><a href="">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトル</a></div>
						<div class="article_list_explain"> <a href="">記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明</a> </div>
						<div class="article_list_tag_list">
                            <a href=""><div class="tag_single">:00000</div></a>
                            <a href=""><div class="tag_single">:00000</div></a>
                        </div>
						<div class="article_list_view_count">閲覧数:00000</div>
                    </div>
                </div>



				<div class="article_list_mass">
					<div class="article_list_image_area"> <a href=""><img src="{{ asset('images/front/top_link/image_190_150.png') }}"></a>
						<div class="article_list_base">
							<div class="article_list_auther">著者:<a href="">テスト名前</a></div>
							<div class="article_list_category">カテゴリー:<a href="">テスト名前</a></div>
							<div class="article_list_update">更新日時:0000/00/00</div>
						</div>
					</div>
					<div class="article_list_explain_area">
						<div class="article_list_title"><a href="">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトル</a></div>
						<div class="article_list_explain"> <a href="">記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明</a> </div>
						<div class="article_list_tag_list">
                            <a href=""><div class="tag_single">:00000</div></a>
                            <a href=""><div class="tag_single">:00000</div></a>
                        </div>
						<div class="article_list_view_count">閲覧数:00000</div>
                    </div>
                </div>



				<div class="article_list_mass">
					<div class="article_list_image_area"> <a href=""><img src="{{ asset('images/front/top_link/image_190_150.png') }}"></a>
						<div class="article_list_base">
							<div class="article_list_auther">著者:<a href="">テスト名前</a></div>
							<div class="article_list_category">カテゴリー:<a href="">テスト名前</a></div>
							<div class="article_list_update">更新日時:0000/00/00</div>
						</div>
					</div>
					<div class="article_list_explain_area">
						<div class="article_list_title"><a href="">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトル</a></div>
						<div class="article_list_explain"> <a href="">記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明</a> </div>
						<div class="article_list_tag_list">
                            <a href=""><div class="tag_single">:00000</div></a>
                            <a href=""><div class="tag_single">:00000</div></a>
                        </div>
						<div class="article_list_view_count">閲覧数:00000</div>
                    </div>
                </div>



				<div class="article_list_mass">
					<div class="article_list_image_area"> <a href=""><img src="{{ asset('images/front/top_link/image_190_150.png') }}"></a>
						<div class="article_list_base">
							<div class="article_list_auther">著者:<a href="">テスト名前</a></div>
							<div class="article_list_category">カテゴリー:<a href="">テスト名前</a></div>
							<div class="article_list_update">更新日時:0000/00/00</div>
						</div>
					</div>
					<div class="article_list_explain_area">
						<div class="article_list_title"><a href="">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトル</a></div>
						<div class="article_list_explain"> <a href="">記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明</a> </div>
						<div class="article_list_tag_list">
                            <a href=""><div class="tag_single">:00000</div></a>
                            <a href=""><div class="tag_single">:00000</div></a>
                        </div>
						<div class="article_list_view_count">閲覧数:00000</div>
                    </div>
                </div>



				<div class="article_list_mass">
					<div class="article_list_image_area"> <a href=""><img src="{{ asset('images/front/top_link/image_190_150.png') }}"></a>
						<div class="article_list_base">
							<div class="article_list_auther">著者:<a href="">テスト名前</a></div>
							<div class="article_list_category">カテゴリー:<a href="">テスト名前</a></div>
							<div class="article_list_update">更新日時:0000/00/00</div>
						</div>
					</div>
					<div class="article_list_explain_area">
						<div class="article_list_title"><a href="">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトル</a></div>
						<div class="article_list_explain"> <a href="">記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明</a> </div>
						<div class="article_list_tag_list">
                            <a href=""><div class="tag_single">:00000</div></a>
                            <a href=""><div class="tag_single">:00000</div></a>
                        </div>
						<div class="article_list_view_count">閲覧数:00000</div>
                    </div>
                </div>



				<div class="article_list_mass">
					<div class="article_list_image_area"> <a href=""><img src="{{ asset('images/front/top_link/image_190_150.png') }}"></a>
						<div class="article_list_base">
							<div class="article_list_auther">著者:<a href="">テスト名前</a></div>
							<div class="article_list_category">カテゴリー:<a href="">テスト名前</a></div>
							<div class="article_list_update">更新日時:0000/00/00</div>
						</div>
					</div>
					<div class="article_list_explain_area">
						<div class="article_list_title"><a href="">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトル</a></div>
						<div class="article_list_explain"> <a href="">記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明</a> </div>
						<div class="article_list_tag_list">
                            <a href=""><div class="tag_single">:00000</div></a>
                            <a href=""><div class="tag_single">:00000</div></a>
                        </div>
						<div class="article_list_view_count">閲覧数:00000</div>
                    </div>
                </div>



				<div class="article_list_mass">
					<div class="article_list_image_area"> <a href=""><img src="{{ asset('images/front/top_link/image_190_150.png') }}"></a>
						<div class="article_list_base">
							<div class="article_list_auther">著者:<a href="">テスト名前</a></div>
							<div class="article_list_category">カテゴリー:<a href="">テスト名前</a></div>
							<div class="article_list_update">更新日時:0000/00/00</div>
						</div>
					</div>
					<div class="article_list_explain_area">
						<div class="article_list_title"><a href="">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトル</a></div>
						<div class="article_list_explain"> <a href="">記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明</a> </div>
						<div class="article_list_tag_list">
                            <a href=""><div class="tag_single">:00000</div></a>
                            <a href=""><div class="tag_single">:00000</div></a>
                        </div>
						<div class="article_list_view_count">閲覧数:00000</div>
                    </div>
                </div>



				<div class="article_list_mass">
					<div class="article_list_image_area"> <a href=""><img src="{{ asset('images/front/top_link/image_190_150.png') }}"></a>
						<div class="article_list_base">
							<div class="article_list_auther">著者:<a href="">テスト名前</a></div>
							<div class="article_list_category">カテゴリー:<a href="">テスト名前</a></div>
							<div class="article_list_update">更新日時:0000/00/00</div>
						</div>
					</div>
					<div class="article_list_explain_area">
						<div class="article_list_title"><a href="">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイタイトルタイトルタイトルタイトル</a></div>
						<div class="article_list_explain"> <a href="">記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明記事説明</a> </div>
						<div class="article_list_tag_list">
                            <a href=""><div class="tag_single">:00000</div></a>
                            <a href=""><div class="tag_single">:00000</div></a>
                        </div>
						<div class="article_list_view_count">閲覧数:00000</div>
                    </div>
                </div>



            </div>
	    </section>
    </div>
</div>
@endsection