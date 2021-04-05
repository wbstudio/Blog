
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
                                <div class="go_button"></div>
                            </div>
                        </a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('login') }}" class="login">
                            <div class="link_mass">
                            <div class="link_name">ログイン</div>
                                <div class="go_button"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="login">
                            <div class="link_mass">
                            <div class="link_name">新規登録</div>
                                <div class="go_button"></div>
                            </div>
                        </a>
                    </li>
                    @endauth
                    <li>
                        <a href="">
                            <div class="link_mass">
                            <div class="link_name">03あいうえおあいうえおあいうえお</div>
                                <div class="go_button"></div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <div class="link_mass">
                            <div class="link_name">04あいうえおあいうえおあいうえお</div>
                                <div class="go_button"></div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <div class="link_mass">
                            <div class="link_name">05あいうえおあいうえおあいうえお</div>
                                <div class="go_button"></div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <div class="link_mass">
                            <div class="link_name">06あいうえおあいうえおあいうえお</div>
                                <div class="go_button"></div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <div class="link_mass">
                            <div class="link_name">07あいうえおあいうえおあいうえお</div>
                                <div class="go_button"></div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <div class="link_mass">
                            <div class="link_name">08あいうえおあいうえおあいうえお</div>
                                <div class="go_button"></div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <div class="link_mass">
                            <div class="link_name">09あいうえおあいうえおあいうえお</div>
                                <div class="go_button"></div>
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