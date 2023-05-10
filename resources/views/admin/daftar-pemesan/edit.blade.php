<x-master-admin>
    <section class="basic-inputs">
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Data</h4>
                    </div>
                    <form method="POST" action="{{ route('biodata-update', $biodata->id) }}" class="form-validate">
                        @method('put')
                        @csrf
                    <div class="card-block">
                        <div class="card-body">
                            <fieldset class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" required value="{{ $biodata->nama }}" id="basicInput" >
                            </fieldset>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <fieldset class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" required value="{{ $biodata->email }}" id="basicInput" >
                            </fieldset>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <fieldset class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $biodata->alamat }}" id="basicInput" required >
                            </fieldset>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <fieldset class="form-group">
                                <label for="nama">Nomor Tiket</label>
                                <input type="text" class="form-control" name="nomor_id" value="{{ $biodata->nomor_id }}" readonly required id="basicInput" >
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-lg btn-primary">Edit Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-master-admin>