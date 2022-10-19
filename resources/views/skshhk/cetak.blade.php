{{$data}}
<img style="width: 100%;height: 'auto'" src={{ url('/kop.png') }} alt="">

<h1 style="font-size: 14pt;text-align:center">BERITA ACARA PEMERIKSAAN</h1>
<p style="font-size: 12pt">Pada hari {{  Illuminate\Support\Carbon::parse($data->tgl_terima)->format('l, d-m-Y') }} kami
    telah melakukan pengukuran dengan detil sebagai berikut:</p>

<ul style="list-style-type: decimal">
    <li>INFORMASI VENDOR DAN DOKUMEN</li>
    <table>
        <tr>
            <td>1.1.</td>
            <td>Nama Perusahaan</td>
            <td>: {{$data->vendor->nama_vendor}}</td>
        </tr>
        <tr>
            <td>1.2.</td>
            <td>Nomor Dokumen</td>
            <td>: Nama</td>

        </tr>
        <tr>
            <td>1.3.</td>
            <td>Tanggal Terbit Dokumen</td>
            <td>: Nama</td>
        </tr>
        <tr>
            <td>1.4.</td>
            <td>Tanggal Penerimaan</td>
            <td>: Nama</td>
        </tr>
        <tr>
            <td>1.5.</td>
            <td>No. Plat Angkutan</td>
            <td>: Nama</td>
        </tr>
        <tr>
            <td>1.6.</td>
            <td>Nama Pengemudi Angkutan</td>
            <td>: Nama</td>
        </tr>
    </table>
    <li>HASIL PENGUKURAN DOKUMEN DAN FISIK</li>
    <table style="border-collapse: collapse;">
        <tr style="border: solid 1px #000;">
            <td style="border: solid 1px #000;"></td>
            <td style="border: solid 1px #000;">Dokumen</td>
            <td style="border: solid 1px #000;">Fisik</td>
        </tr>
        <tr style="border: solid 1px #000;">
            <td style="border: solid 1px #000;">Panjang</td>
            <td style="border: solid 1px #000;">{{$data->dok_panjang}}</td>
            <td style="border: solid 1px #000;">{{$data->lp_panjang}}</td>
        </tr>

        <tr style="border: solid 1px #000;">
            <td style="border: solid 1px #000;">Lebar</td>
            <td style="border: solid 1px #000;">{{$data->dok_lebar}}</td>
            <td style="border: solid 1px #000;">{{$data->lp_lebar}}</td>
        </tr>

        <tr style="border: solid 1px #000;">
            <td style="border: solid 1px #000;">Tinggi 1 (T1)</td>
            <td style="border: solid 1px #000;">{{$data->dok_tinggi_1}}</td>
            <td style="border: solid 1px #000;">{{$data->lp_tinggi_1}}</td>
        </tr>

        <tr style="border: solid 1px #000;">
            <td style="border: solid 1px #000;">Tinggi 2 (T2)</td>
            <td style="border: solid 1px #000;">-</td>
            <td style="border: solid 1px #000;">-</td>
        </tr>

        <tr style="border: solid 1px #000;">
            <td style="border: solid 1px #000;">Tinggi 3 (T3)</td>
            <td style="border: solid 1px #000;">-</td>
            <td style="border: solid 1px #000;">-</td>
        </tr>

        <tr style="border: solid 1px #000;">
            <td style="border: solid 1px #000;">Tinggi Rata-Rata</td>
            <td style="border: solid 1px #000;">-</td>
            <td style="border: solid 1px #000;">-</td>
        </tr>

        <tr style="border: solid 1px #000;">
            <td style="border: solid 1px #000;">Volume (m<sup>3</sup>)</td>
            <td style="border: solid 1px #000;">-</td>
            <td style="border: solid 1px #000;">-</td>
        </tr>

        <tr style="border: solid 1px #000;">
            <td style="border: solid 1px #000;">Selisih Volume</td>
            <td style="border: solid 1px #000;">-</td>
            <td style="border: solid 1px #000;">-</td>
        </tr>
    </table>

    <li>DOKUMENTASI</li>
    <table>
        <tr>

        </tr>
    </table>
</ul>

<p style="font-size: 12pt">
    Demikian berita acara ini dibuat dengan sesungguhnya dan dapat digunakan dengan sebagaimana mestinya.
</p>
{{-- <img src={{ url('/storage') }}/{{$data->foto_belakang_angkutan}} alt=""> --}}

{{-- END PAGE 1 --}}
<div style="break-after:page"></div>

<img style="width: 100%;height: 'auto'" src={{ url('/kop.png') }} alt="">

<h1 style="font-size: 14pt;text-align:center">BERITA ACARA PEMERIKSAAN</h1>
<p style="font-size: 12pt">Pada hari {{  Illuminate\Support\Carbon::parse($data->tgl_terima)->format('l, d-m-Y') }} kami
    telah melakukan pengukuran dengan detil sebagai berikut:</p>

<ul style="list-style-type: decimal">
    <li>INFORMASI VENDOR DAN DOKUMEN</li>
    <li>HASIL PENGUKURAN DOKUMEN DAN FISIK</li>
    <li>DOKUMENTASI</li>
</ul>

<p style="font-size: 12pt">
    Demikian berita acara ini dibuat dengan sesungguhnya dan dapat digunakan dengan sebagaimana mestinya.
</p>
<img src={{ url('/storage') }}/{{$data->foto_belakang_angkutan}} alt="">

{{-- END PAGE 2 --}}
<div style="break-after:page"></div>

<div style="break-after:page"></div>

<img style="width: 100%;height: 'auto'" src={{ url('/kop.png') }} alt="">

<h1 style="font-size: 14pt;text-align:center">BERITA ACARA PEMERIKSAAN</h1>
<p style="font-size: 12pt">Pada hari {{  Illuminate\Support\Carbon::parse($data->tgl_terima)->format('l, d-m-Y') }} kami
    telah melakukan pengukuran dengan detil sebagai berikut:</p>

<ul style="list-style-type: decimal">
    <li>INFORMASI VENDOR DAN DOKUMEN</li>
    <li>HASIL PENGUKURAN DOKUMEN DAN FISIK</li>
    <li>DOKUMENTASI</li>
</ul>

<p style="font-size: 12pt">
    Demikian berita acara ini dibuat dengan sesungguhnya dan dapat digunakan dengan sebagaimana mestinya.
</p>
<img src={{ url('/storage') }}/{{$data->foto_belakang_angkutan}} alt="">

{{-- END PAGE 3 --}}

<script>
    window.addEventListener('load', function () {
        // window.print()
        console.log('All assets are loaded')
    })

</script>

<style>
    html,
    body {
        font-family: Arial, Helvetica, sans-serif
    }

</style>
