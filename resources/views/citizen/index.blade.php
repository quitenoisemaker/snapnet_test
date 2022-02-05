@extends('layouts.app')

@section('content')

        <div class="col-md-8 ">
            <h4>See all available state ! Click on their names to see more</h4>
            <div class="card ">
                
                <table class="table table-striped table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>States</th>
                    </tr>
                    </thead>
                    <tbody>

                        {{$count=1}}
                        @if(count($states)>0)

                            @foreach($states as $state)
                                <tr>
                    
                                    <td>{{$count++}} </td>
                                    <td><a href="{{route('get.lga', $state->id)}}">{{$state->name}}</a></td>
    
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
