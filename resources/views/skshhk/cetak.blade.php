{{$data}}

<h1>BERITA ACARA PEMERIKSAAN</h1>

<p>Pada hari       {{  Illuminate\Support\Carbon::parse($data->tgl_terima)->format('l, d-m-Y') }} kami telah melakukan pengukuran dengan detil sebagai berikut:</p>

<img src={{ url('/storage') }}/{{$data->foto_belakang_angkutan}} alt="">
