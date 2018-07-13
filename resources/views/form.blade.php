@if($method == 'get')
    <form method="post" action="form">
        @csrf
        <p><input type="submit"></p>
    </form>
@else
    {{'Форма принята'}}
@endif