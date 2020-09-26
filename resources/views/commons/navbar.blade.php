<header >
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">釣りスポット</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            @if(Auth::check())
            <ul class="navbar-nav">
     
                <li class="nav-item">{!! link_to_route('microposts.search','投稿一覧・検索',[],['class'=>'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('users.index','ユーザー一覧',[],['class'=>'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('users.show','マイページ',['user'=>Auth::id()],['class'=>'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('logout.get','ログアウト',[],['class'=>'nav-link']) !!}</li>
                <!-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item">{!! link_to_route('users.show','マイページ',['user'=>Auth::id()])  !!}</li>
                            <li class="dropdown-divider"></li>
                            {{-- ログアウトへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                    </ul>
                </li> -->
            </ul>
            
            
            @else
            <ul class="navbar-nav">
                {{-- ユーザ登録ページへのリンク --}}
                <li class="nav-item">{!! link_to_route('signup.get','新規登録',[],['class'=>'nav-link'])  !!}</li>
                {{-- ログインページへのリンク --}}
                <li class="nav-item">{!! link_to_route('login','ログイン',[],['class'=>'nav-link']) !!}</li>
            </ul>
            
            
            @endif
            
        </div>
        
        
        
    </nav>
</header>