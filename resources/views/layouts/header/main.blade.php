<div class="container c-cont">

	<div class="jumbotron bg-info border-bottom border-warning jumbotron-cnina">
		<div class="row">
			<div class="col-sm-11 shop-title">{{ env('APP_NAME') }}</div>

			<div class="col-sm-1 text-right lang">
				<a class="dropdown-toggle" href="#" role="button" id="langDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lang</a>

				<div class="dropdown-menu" aria-labelledby="langDropdownMenu">
					<a class="dropdown-item" lang="en" href="#">{{ mb_convert_case(__('prompts.langs.en'),MB_CASE_TITLE) }}</a>
					<a class="dropdown-item" lang="uk" href="#">{{ mb_convert_case(__('prompts.langs.uk'),MB_CASE_TITLE) }}</a>
					<a class="dropdown-item" lang="ru" href="#">{{ mb_convert_case(__('prompts.langs.ru'),MB_CASE_TITLE) }}</a>
				</div>
			</div>
		</div>
	</div>

</div>

<script>


	$("div.lang a.dropdown-item").click(function(){

		alert("Test message of lang item.");

		// window.location.replace( "/"+$(this).attr("lang")+"/"+current_url );
	});

</script>
