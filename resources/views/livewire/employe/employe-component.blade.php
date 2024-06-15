<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container">
        <div class="">
            <div class="card position" style="width: 60rem;"></div>
            <div class="card-header">
                All Employe
            </div>
            <div class="card-body">
                <a href="{{ route('employe.add')}}" class="btn btn-primary">Add Employe</a>
                <br><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>User</th>
                            <th>Position</th>
                            <th>Department</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employes as $employe)
                        <tr>
                            <td><img src="{{ asset('assets/images/Employe')}}/{{$employe->foto}}" alt=""></td>
                            <td>{{$employe->user->name ?? ''}}</td>
                            <td>{{$employe->position->nama ?? ''}}</td>
                            <td>{{$employe->department->nama ?? ''}}</td>
                            <td>{{$employe->telepon}}</td>
                            <td>{{$employe->alamat}}</td>
                            <td class="col-2">
                                <a href="{{ route('employe.edit',['employe_id'=>$employe->id])}}" class="btn btn-secondary">Edit</a>
                                <a href="{{ route('employe.detail',['employe_id'=>$employe->id])}}" class="btn btn secondary">Detail</a>
                                <a href="#" wire:click.prevent="deleteEmploye({{$employe->id}})" class="btn">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                   
                </table>
            </div>
        </div>
    </div>
</div>
