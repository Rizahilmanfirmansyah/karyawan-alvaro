<div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 34rem;">
                <div class="card-header">
                    Add-Employe
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="addEmploye" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" wire:model="foto">
                            @if ($this->foto)
                            <br>
                            <img src="{{$foto->temporaryUrl()}}" style="width: 200px" alt="">    
                            @endif
                            @error('foto') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="user_id" class="form-label">User</label>
                            <select name="" class="form-control" id="" wire:model="user_id">
                                <option value="#" selected>Plih Calon Karyawan</option>
                                @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            
                            @error('user_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="user_id" class="form-label">Position</label>
                            <select name="" id="" class="form-control" wire:model="position_id">
                                <option value="#" selected>Plih Calon Karyawan</option>
                                @foreach ($positions as $position)
                                <option value="{{$position->id}}">{{$position->nama}}</option>
                                @endforeach
                            </select>
                            @error('position_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="user_id" class="form-label">Department</label>
                            <select name="" class="form-control" id="" wire:model="department_id">
                                <option value="#" selected>Plih Calon Karyawan</option>
                                @foreach ($departments as $department)
                                <option value="{{$department->id}}">{{$department->nama}}</option>
                                 @endforeach
                            </select>
                            
                            @error('department_id') <span class="error">{{ $message }}</span> @enderror

                        </div>
                        <div class="form-group">
                            <label for="telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" wire:model="telepon">
                            @error('telepon') <span class="error">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" wire:model="alamat">
                            @error('alamat') <span class="error">{{$message}}</span> @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
