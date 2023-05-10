<x-master-admin>
    <section id="line-awesome-icons">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Pemesan</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content collapse show">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama</th>
                                                                <th>Alamat</th>
                                                                <th>Email</th>
                                                                <th>Nomor ID</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ( $biodata as $b )
                                                            <tr>
                                                                <td>{{ $b->id }}</td>
                                                                <td>{{ $b->nama }}</td>
                                                                <td>{{ $b->alamat }}</td>
                                                                <td>{{ $b->email }}</td>
                                                                <td>{{ $b->nomor_id }}</td>
                                                                <td>
                                                                    <button style="background-color: yellow"><a href="{{ route('biodata-edit', $b->id) }}">Edit</button></a>
                                                                    <form action="{{ route('biodata-delete', $b->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('delete')
                                                                    <button type="submit" style="background-color: rgb(255, 0, 0)"><a onclick="return confirm('Are you sure?')">Remove</a></button>
                                                                    </form></td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
</x-master-admin>