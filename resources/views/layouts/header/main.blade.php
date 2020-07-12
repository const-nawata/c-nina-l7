<div class="jumbotron border-bottom border-warning jumbotron-cnina">
	<div class="row">
		<div class="col-sm-11 shop-title">{{ env('APP_NAME') }}</div>

		<div class="col-sm-1 text-right lang">
			<a class="dropdown-toggle" href="#" role="button" id="langDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ mb_ucfirst(__('prompts.title.language')) }}</a>

			<div class="dropdown-menu" aria-labelledby="langDropdownMenu">
				<a class="dropdown-item" lang="en" href="#">{{ mb_convert_case(__('prompts.langs.en'),MB_CASE_TITLE) }}</a>
				<a class="dropdown-item" lang="uk" href="#">{{ mb_convert_case(__('prompts.langs.uk'),MB_CASE_TITLE) }}</a>
				<a class="dropdown-item" lang="ru" href="#">{{ mb_convert_case(__('prompts.langs.ru'),MB_CASE_TITLE) }}</a>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-light nav-bar-cnina">
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="" href="#">{{ mb_ucfirst(__( 'prompts.title.home')) }}</a>
				</li>

{{--				{% if is_granted('ROLE_ADMIN') %}--}}
				<li class="nav-item dropdown">
					<a class="dropdown-toggle" href="#" role="button" id="dashboardDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ mb_ucfirst(__('prompts.title.dashboard')) }}</a>

					<div class="dropdown-menu" aria-labelledby="dashboardDropdownMenu">
						<a class="dropdown-item" itemScope="user" href="#">{{ mb_ucfirst(__('prompts.title.user')) }}</a>
						<a class="dropdown-item" itemScope="currency" href="#">{{ mb_ucfirst(__('prompts.title.currency')) }}</a>
					</div>
				</li>
{{--				{% endif %}--}}

			</ul>

			<ul class="navbar-nav ml-auto user-menu">
				<li class="nav-item dropdown">
					<a class="dropdown-toggle" href="#" role="button" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ mb_ucfirst(__('prompts.title.user')) }}</a>

					<div class="dropdown-menu" aria-labelledby="userDropdownMenu">

{{--						{% if is_granted('IS_AUTHENTICATED_FULLY') %}--}}
						<a class="dropdown-item" id="user_logout" href="#">{{ mb_ucfirst(__('prompts.title.logging-out')) }}</a>
						<a class="dropdown-item" id="owneredit" href="#" onclick="">{{ mb_ucfirst(__('prompts.title.edit')) }}</a>
{{--						{% else %}--}}
						<a class="dropdown-item" id="user_login" href="#">{{ mb_ucfirst(__('prompts.title.logging-in')) }}</a>
						<a class="dropdown-item" id="user_register" href="#" data-toggle="modal" data-target="#modal_dialog">{{ mb_ucfirst(__('prompts.title.registering')) }}</a>
{{--						{% endif %}--}}
					</div>
				</li>
			</ul>
		</div>
	</nav>

</div>
