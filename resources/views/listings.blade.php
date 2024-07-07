<h1>{{$heading}}</h1>

@if(!empty($listings))
    @foreach($listings as $listing)
    <h2>{{$listing['title']}}</h2>
    <p>{{$listing['description']}}</p>
    @endforeach
@else 
    <p>No listings available</p>
@endif