<div class="container">
    @if(isset($details))
    <p>the search result for your query{{$query}} are:</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name </th>
                <th>Age</th>
                <th>Blood Type</th>
                <th>phone number</th>
                <th>email</th>
                <th>city</th>
            </tr>
            <tbody>
            @foreach($details as $donor)
            <tr>
                <td>{{$donor->name}}</td>
                <td>{{$donor->age}}</td>
                <td>{{$donor->blood type}}</td>
                <td>{{$donor->phone number}}</td>
                <td>{{$donor->email}}</td>
                <td>{{$donor->city}}</td>

            </tr> 
            @endforeach
            </tbody>
        </thead>
     @endif
    </table>
</div>