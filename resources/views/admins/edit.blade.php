<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Физика
        </h2>
    </x-slot>
{{$user->name}}
    <form method="post" action = "/admins/{{ $user->id }}"> 
        {{ csrf_field() }}
        @method('PUT')

        <br>
        <div class="dropdown">
            Промени роля
            <br>
            <button onclick="myFunction()" class="dropbtn">Избери роля</button>
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Търсене..." id="myInput" onkeyup="filterFunction()">
                <div> 
                    <a>
                        <input id="user" type="radio" name="role" value="user" required>
                        <label for="user">
                           user 
                        </label>

                        <br>
                        <input id="" type="radio" name="role" value="admin" required>
                        <label for="user">
                           admin 
                        </label>
                    </a>
                </div>
            </div>
        </div>
        <br>
        
        <input type = "submit" name = "submit" value="Запази">  
    </form>
    <script src = "{{ asset('js/dropdown.js') }}"></script>
</x-app-layout>