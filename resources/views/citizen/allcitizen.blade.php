@extends('layouts.app')

@section('content')

        <div class="col-md-8">
            <h4>See all Users attach to a ward</h4>
            <div class="card ">
                <table class="table table-striped table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        {{-- <th>S/N</th> --}}
                        <th>Full Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Ward</th>
                    </tr>
                    </thead>
                    <tbody>

                        
                        @if(count($users)>0)

                            @foreach($users as $user)
                                <tr>
                                    <td><a href="">{{$user->name}}</a></td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->ward->name}}</td>
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
