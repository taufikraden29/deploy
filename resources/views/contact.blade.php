<x-app-layout title="Home">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Ini Contact</h3>
                    </div>
                    <div class="card-footer">
                        <form action="/contact" method="post">
                            @csrf
                            <input type="text" placeholder="Nama Anda">
                            <input type="email" placeholder="Email Anda">
                            <button class="btn btn-primary" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
