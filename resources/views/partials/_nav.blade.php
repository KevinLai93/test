<div class="header">
            <ul>
                <li class="active"><a href="/">首頁</a></li>
                <li class=""><a href="register">註冊會員</a></li>
                <li class=""><a href="divine">占卜</a></li>
                @if(!Auth::check())
                <li class=""><a href="login">登入</a></li>
                @else
	            <li class=""><a href="login">登出</a></li>
	            @endif

            </ul>
        </div>
		