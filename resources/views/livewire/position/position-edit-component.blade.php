<div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 34rem;">
                <div class="card-header">
                    Edit-Employe
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="editPosition" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" wire:model="nama">
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
