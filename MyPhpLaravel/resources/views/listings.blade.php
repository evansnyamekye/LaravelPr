<h1>{{$heading}}</h1>
 @foreach($listings as $listing)
<h1>{{$listing['title']}}</h1>
<p>{{$listing['description']}}<p>
@endforeach