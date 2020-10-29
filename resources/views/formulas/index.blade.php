<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Физика
        </h2>
    </x-slot>
    <br>

    <h1>Формули</h1>
    <br>
    <table align="center" style="border:1px solid black;">
		<thead>
			<tr>
				<th>№</th>
				<th>Величина</th>
				<th>Формула</th>
				<th>Брой параметри</th>
				@if(\Auth::user()->isAdmin())
					<th>Изтрии</th>
					<th>Актуализирай</th>
				@endif
			</tr>
		</thead>

		<tbody>
		@foreach($allFormulas as $formula)
			<tr>
				<td>{{ $loop->iteration }}</td>	
				<td>{{ $formula->magnitude->name }}</td>			
				<td>{{ $formula->magnitude->symbol }} = {{ $formula->formula }}</td>
				<td>{{ $formula->parameters_count }}</td>
				@if(\Auth::user()->isAdmin())
					<td>
						<form method="post" action="{{ url('formulas/') }}/{{ $formula->id }}">
							@csrf
							@method('DELETE')
							<button style = "text-decoration: none; color: black;" href = "">Изтрий
							</button>
						</form>
					</td>
					<td>
						<button>
							<a style = "text-decoration: none; color: black;" href = "{{ url('formulas') }}/{{ $formula->id }}/edit">Актуализирай</a>
						</button>
					</td>
				@endif
			</tr>
		@endforeach
		</tbody>
	</table>
	@if(\Auth::user()->isAdmin())
		<button><a style = "text-decoration: none; color: black;" href = "{{ url('formulas') }}/create">Добави формула</a></button>
	@endif
</x-app-layout>