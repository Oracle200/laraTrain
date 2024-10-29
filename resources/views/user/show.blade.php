<x-layout>
	<x-slot:title>
		{{ $title }}
	</x-slot:title>

	<ul>
		@forelse ($links as $link)
			<li><a href="http://{{ $link['href'] }}">{{ $link['text'] }}</a></li>
		@empty
			Массив пуст
		@endforelse
	</ul>

	<table>
		<tr>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Зарплата</th>
		</tr>
		@foreach ($employees  as $key => $employee)
			@continue ($employee['salary'] <= 2000)
			<tr>
				<td>{{ $key + 1 }}</td>
				@foreach ($employee as $item)
					<td>{{ $item }}</td>
				@endforeach
			</tr>
		@endforeach
	</table>

	<table>
		@foreach ($users as $user)
		<tr style="color: {{ $user['banned'] ? 'red' : 'green'}}">
			@foreach ($user as $k_item => $item)
				@if ($k_item == 'banned' && $item == true)
					<td>забанен</td>
				@elseif ($k_item == 'banned' && $item == false)
					<td>активен</td>
				@else
					<td>{{ $item }}</td>
				@endif
			@endforeach
		</tr>
		@endforeach
	</table>
</x-layout>