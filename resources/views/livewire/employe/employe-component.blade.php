<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container">
        <div class="card position" style="width: 60rem;">
            <div class="card-header">
                All Employe
            </div>
            <div class="card-body">
                <a href="{{ route('employe.add')}}" class="btn btn-primary">Add Employe</a>
                <br><br>
                @if (Session::has('notif'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('notif')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <br><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>FOTO</th>
                            <th>USER</th>
                            <th>POSITION</th>
                            <th>DEPARTMENT</th>
                            <th>TELEPON</th>
                            <th>ALAMAT</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employes as $employe)
                        <tr class="">
                            <td><img src="{{ asset('assets/images/Employe')}}/{{$employe->foto}}" style="width: 100px" alt=""></td>
                            <td>{{$employe->user->name ?? ''}}</td>
                            <td>{{$employe->position->nama ?? ''}}</td>
                            <td>{{$employe->department->nama ?? ''}}</td>
                            <td>{{$employe->telepon}}</td>
                            <td>{{$employe->alamat}}</td>
                            <td class="col-2">
                                <a href="{{ route('employe.edit',['employe_id'=>$employe->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                <a href="{{ route('employe.detail',['employe_id'=>$employe->id])}}" class="btn btn-secondary fa fa-calendar-o"></a>
                                <a href="#" wire:click.prevent="deleteEmploye({{$employe->id}})" class="btn btn-secondary fa fa-trash"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                   
                </table>
            </div>
        </div>
    </div>
</div>
