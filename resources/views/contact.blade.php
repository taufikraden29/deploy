<x-app-layout title="Home">
    Ini Contact

    <form action="/contact" method="post">
        @csrf

        <button type="submit">Kirim</button>
    </form>
</x-app-layout>
