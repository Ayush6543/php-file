
<title>Laravel Page</title>

<a href="/about/ayush">About</a>
<a href="/contact">Contact</a>
<p>This the home page</p>
@if($name=='amrit')
<h2>This is amrit</h2>
@elseif($name=='aman')
<h1>This is aman</h1>
@else
<h2>This is raj</h2>
@endif


<div>
    @foreach($users as $user)
    <h3>{{$user}}</h3> 
    @endforeach
</div>

<div>
    @for($i=0;$i<=10;$i++)
    <h3>{{$i}}</h3>
    @endfor
</div>
