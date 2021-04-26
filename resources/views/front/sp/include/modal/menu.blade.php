
    <div class="modal js-modal">
        <div class="modal__bg js-modal-close"></div>
        <div class="modal__content">
            <div class="modal_head">
                <div class="modal_head_name">Menu</div>
                <div class="js-modal-close"></div>                
            </div>
            <div class="modal_contents">
                <ul>
                    <li class="modal_search_li">
                        <form method="POST" action="{{route('list.searchWordList')}}">
                        @csrf
                            <div class="link_mass">
                                <div class="link_name">
                                    <input type="text" name="">
                                </div>
                                <input type="image" class="search" src="{{ asset('images/front/icon_search_button.svg') }}">
                            </div>
                        </form>
                    </li>
                    @auth
                    <li>
                        <a href="{{ route('member.index') }}" class="login">
                            <div class="link_mass">
                            <div class="link_name">会員ページ</div>
                            </div>
                        </a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('login') }}" class="login">
                            <div class="link_mass">
                            <div class="link_name">ログイン</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="login">
                            <div class="link_mass">
                            <div class="link_name">新規登録</div>
                            </div>
                        </a>
                    </li>
                    @endauth
                    <li>
                        <div class="link_mass display_other">
                        <div class="link_name">Blogger</div>
                            <div class="go_button down"></div>
                        </div>
                        <ul class="hide_link">
                            <li><a href="{{ route('autherList') }}">Blogger List</a></li>
                            @foreach(Config::get('auther') as $keyAuther => $confAuther)
                            <li><a href="{{ route('list.onlyAuther', ['auther_id' => $keyAuther]) }}">{{$confAuther["name"]}}のページ</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li>
                        <div class="link_mass display_other">
                        <div class="link_name">Category</div>
                            <div class="go_button down"></div>
                        </div>
                        <ul class="hide_link">
                            <li><a href="{{ route('categoryList') }}">Category List</a></li>
                            @foreach(Config::get('category') as $keyCategory => $confCategory)
                            <li><a href="{{ route('list.onlyCategory', ['category_id' => $keyCategory]) }}">{{$confCategory["name"]}}のページ</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('inquiry.showForm') }}">
                            <div class="link_mass">
                            <div class="link_name">お問い合わせ</div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <div class="link_mass">
                            <div class="link_name">wakuwakuBlogとは？</div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <div class="link_mass">
                            <div class="link_name">サイトの使い方</div>
                            </div>
                        </a>
                    </li>

                    @auth
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('ログアウト') }}
                            </x-jet-dropdown-link>
                        </form>
                    </li>
                    @endauth

                </ul>
            </div>
        </div><!--modal__inner-->
    </div><!--modal-->