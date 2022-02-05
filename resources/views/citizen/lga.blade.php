@extends('layouts.app')

@section('content')

        <div class="col-md-8">
            <h4>See all LGA and number of users! Click on their names to see more</h4>
            <div class="card ">
                <table class="table table-striped table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        {{-- <th>S/N</th> --}}
                        <th>Lga</th>
                        <th>Number of Users</th>
                    </tr>
                    </thead>
                    <tbody>

                        
                        @if(count($lgas)>0)

                            @foreach($lgas as $lga)
                                <tr>
                                    <td><a href="{{route('get.ward', $lga->id)}}">{{$lga->name}}</a></td>
                                    <td>{{$lga->citizen->count()}}</td>
                                </tr>
                                @endforeach
                        @endif
                    

                    </tbody>
                </table>
            
        </div>
        </div>
    </div>
</div>
@endsection
