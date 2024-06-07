<h1>{{ auth()->user() }}</h1>

<hr>
<form action="/logout" method="POST">
    @csrf
    <button type="submit" class="dropdown-item">Logout</button>  
  </form>  