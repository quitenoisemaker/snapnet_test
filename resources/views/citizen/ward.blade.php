@extends('layouts.app')

@section('content')

        <div class="col-md-8">
            <h4>See all Wards and number of users! Click on their names to see more</h4>
            <div class="card ">
                <table class="table table-striped table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        {{-- <th>S/N</th> --}}
                        <th>Ward</th>
                        <th>Number of Users</th>
                    </tr>
                    </thead>
                    <tbody>

                        
                        @if(count($wards)>0)

                            @foreach($wards as $ward)
                                <tr>
                                    <td><a href="{{route('get.citizen', $ward->id)}}">{{$ward->name}}</a></td>
                                    <td>{{$ward->citizen->count()}}</td>
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
