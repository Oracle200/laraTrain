<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot:title>
	@if ($isAuth)
		Вы авторизованы
	@endif

	@unless ($isAuth)
		вы не авторизованы
	@endunless
</x-layout>