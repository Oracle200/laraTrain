<x-layout>
	<x-slot:title>
		{{ $title }}
	</x-slot:title>

	{{ $city ? $city : 'Москва' }}
</x-layout>