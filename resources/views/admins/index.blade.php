<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Физика
        </h2>
    </x-slot>
    
    <h1>Потребители</h1>
    <br>
    <table align="center" style="border:1px solid black;">
		<thead>
			<tr>
				<th>№</th>
				<th>Име</th>
				<th>Email</th>
				<th>Роля</th>
				<th>Актуализирай</th>		
			</tr>
		</thead>

		<tbody>
		@foreach($allUser as $user)
			<tr>
				<td>{{ $loop->iteration }}</td>	
				<td>{{ $user->name }}</td>			
				<td>{{ $user->email }}</td>
				<td>{{ $user->role }}</td>
				@if(\Auth::user()->isAdmin())
					
					<td>
						<button>
							<a style = "text-decoration: none; color: black;" href = "{{ url('users') }}/{{ $user->id }}/edit">Актуализирай</a>
						</button>
					</td>
				@endif
			</tr>
		@endforeach
		</tbody>
	</table>
</x-app-layout>