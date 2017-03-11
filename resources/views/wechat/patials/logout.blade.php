			<a href="{{ route('logout') }}"
			    onclick="event.preventDefault();
			             document.getElementById('logout-form').submit();"class="mui-pull-right">
			    退出
			</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			    {{ csrf_field() }}
			</form>