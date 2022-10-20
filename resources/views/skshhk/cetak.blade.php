{{-- {{$data}} --}}

<img style="width: 100%;height: 'auto'" src={{ url('/kop.png') }} alt="">
<div class="margin: 3cm">


<h1 style="font-size: 14pt;text-align:center;margin-top:-12px">BERITA ACARA PEMERIKSAAN</h1>
<p style="font-size: 11pt;margin-left: 0.7cm">Pada hari {{  Illuminate\Support\Carbon::parse($data->tgl_terima)->format('l, d-m-Y') }} kami
    telah melakukan pengukuran dengan detil sebagai berikut:</p>

<ul style="list-style-type: decimal;font-size: 11pt;">
    <li style="margin-top: 8px">INFORMASI VENDOR DAN DOKUMEN</li>
    <table style="margin-top: 8px; font-size: 11pt;">
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
    <li style="margin-top: 8px">HASIL PENGUKURAN DOKUMEN DAN FISIK</li>
    <table style="border-collapse: collapse;font-size: 10pt;margin-top: 4px">
        <tr style="border: solid 1px #000;padding: 2pt;text-align:center">
            <td width="200px" style="border: solid 1px #000;padding: 2pt;text-align:center"></td>
            <td width="200px" style="border: solid 1px #000;padding: 2pt;text-align:center">Dokumen</td>
            <td width="200px" style="border: solid 1px #000;padding: 2pt;text-align:center">Fisik</td>
        </tr>
        <tr style="border: solid 1px #000;padding: 2pt;text-align:center">
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">Panjang</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$data->dok_panjang}}</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$data->lp_panjang}}</td>
        </tr>

        <tr style="border: solid 1px #000;padding: 2pt;text-align:center">
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">Lebar</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$data->dok_lebar}}</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$data->lp_lebar}}</td>
        </tr>

        <tr style="border: solid 1px #000;padding: 2pt;text-align:center">
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">Tinggi 1 (T1)</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$data->dok_tinggi_1}}</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$data->lp_tinggi_1}}</td>
        </tr>

        <tr style="border: solid 1px #000;padding: 2pt;text-align:center">
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">Tinggi 2 (T2)</td>
              <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$data->dok_tinggi_2}}</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$data->lp_tinggi_2}}</td>
        </tr>

        <tr style="border: solid 1px #000;padding: 2pt;text-align:center">
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">Tinggi 3 (T3)</td>
               <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$data->dok_tinggi_3}}</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$data->lp_tinggi_3}}</td>
        </tr>

        <tr style="border: solid 1px #000;padding: 2pt;text-align:center">
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">Tinggi Rata-Rata</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{($data->dok_tinggi_1+$data->dok_tinggi_2+$data->dok_tinggi_3)/3}}</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{($data->lp_tinggi_1+$data->lp_tinggi_2+$data->lp_tinggi_3)/3}}</td>

        </tr>

        <tr style="border: solid 1px #000;padding: 2pt;text-align:center">
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">Volume (m<sup>3</sup>)</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$v_dok}}</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$v_lp}}</td>
        </tr>

        <tr style="border: solid 1px #000;padding: 2pt;text-align:center">
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">Selisih Volume</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">
                @if($v_lp>=$v_dok)
                 0
                @else
                @php
                abs($v_dok-$v_lp)
                @endphp
                @endif
            </td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">
             @if($v_lp<$v_dok)
             @php
                  abs($v_dok-$v_lp)
                  @endphp
                @else
                0
                @endif
            </td>
        </tr>
    </table>

    <li style="margin-top: 8px">DOKUMENTASI</li>
    <table style="border-collapse: collapse;font-size: 10pt;margin-top: 4px">
         <tr style="border: solid 1px #000;padding: 2pt;text-align:center">
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">
                <span style="display: block;margin-bottom: 6px">Foto Depan Angkutan</span>
            <img src={{ url('/storage') }}/{{$data->foto_depan_angkutan}} style="height: 100px" alt="" >
        </td>
           <td style="border: solid 1px #000;padding: 2pt;text-align:center">
                <span style="display: block;margin-bottom: 6px">Foto Belakang Angkutan</span>
            <img src={{ url('/storage') }}/{{$data->foto_belakang_angkutan}} style="height: 100px" alt="" >
        </td>
        <td style="border: solid 1px #000;padding: 2pt;text-align:center">
                <span style="display: block;margin-bottom: 6px">Foto Dokumen Pengukuran</span>
            <img src={{ url('/storage') }}/{{$data->foto_dokumen}} style="height: 100px" alt="" >
        </td>
        </tr>
         <tr style="border: solid 1px #000;padding: 2pt;text-align:center">
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">
                <span style="display: block;margin-bottom: 6px">Foto Pengukuran Tinggi 1</span>
            <img src={{ url('/storage') }}/{{$data->foto_depan_angkutan}} style="height: 100px" alt="" >
        </td>
           <td style="border: solid 1px #000;padding: 2pt;text-align:center">
                <span style="display: block;margin-bottom: 6px">Foto Pengukuran Tinggi 2</span>
            <img src={{ url('/storage') }}/{{$data->foto_belakang_angkutan}} style="height: 100px" alt="" >
        </td>
        <td style="border: solid 1px #000;padding: 2pt;text-align:center">
                <span style="display: block;margin-bottom: 6px">Foto Pengukuran Tinggi 3</span>
            <img src={{ url('/storage') }}/{{$data->foto_dokumen}} style="height: 100px" alt="" >
        </td>
        </tr>

    </table>
</ul>

<p style="font-size: 11pt; margin-left: 0.7cm">
    Demikian berita acara ini dibuat dengan sesungguhnya dan dapat digunakan dengan sebagaimana mestinya.
</p>

<p style="font-size: 11pt; margin-left: 0.7cm">
    Desa Baru, {{  Illuminate\Support\Carbon::parse($data->tgl_terima)->format('d-m-Y') }}
    <br>

    <img src={{ url('/storage') }}/{{$data->ttd}} style="height: 100px" alt="" >
    <span style="display: block;text-transform:uppercase;font-weight:800">{{$data->petugas->nama}}</span>
    <span style="display: block;text-transform:uppercase">No.Reg. {{$data->petugas->no_reg}}</span>

</p>

</div>



{{-- END PAGE 1 --}}
<div style="break-after:page"></div>

<img style="width: 100%;height: 'auto'" src={{ url('/kop.png') }} alt="">
<div class="margin: 3cm">


<h1 style="font-size: 14pt;text-align:center;margin-top:-12px">BERITA ACARA PEMERIKSAAN</h1>
<p style="font-size: 11pt;margin-left: 0.7cm">Pada hari {{  Illuminate\Support\Carbon::parse($data->tgl_terima)->format('l, d-m-Y') }}  kami selaku petugas yang ditunjuk dengan surat keputusan nomor <<NO SK>> tanggal <<TANGGAL SK>>. Telah melakukan pemeriksaan fisik kayu di lokasi PT Brilian Cipta Mandiri dengan rincian sebagai berikut:</p>

<ul style="list-style-type: decimal;font-size: 11pt;">
    <li style="margin-top: 8px">Dokumen SKSHHK {{$data->vendor->nama_vendor}} nomor {{$data->no_seri}} tanggal {{  Illuminate\Support\Carbon::parse($data->tgl_terima)->format('d-m-Y') }} dinyatakan  @if ($data->is_sesuai==1)
        sesuai
    @else
        tidak sesuai
    @endif dengan aplikasi SIPUHH dan diberi keterangan/diterakan “TELAH DIGUNAKAN” pada tanggal{{  Illuminate\Support\Carbon::parse($data->tgl_terima)->format('d-m-Y') }}   dengan rincian sebagai berikut:

    </li>
    <table style="border-collapse: collapse;font-size: 10pt;margin-top: 4px">
        <tr style="border: solid 1px #000;padding: 2pt;text-align:center">
            <td width="200px" style="border: solid 1px #000;padding: 2pt;text-align:center">Jenis Kayu</td>
            <td width="200px" style="border: solid 1px #000;padding: 2pt;text-align:center">Jumlah Batang</td>
            <td width="200px" style="border: solid 1px #000;padding: 2pt;text-align:center">Volume (m<sup>3</sup>)</td>
        </tr>
        <tr style="border: solid 1px #000;padding: 2pt;text-align:center">
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$data->hh->nama}}</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$data->dok_jumlah_batang}}</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$data->dok_panjang*$data->dok_lebar*(($data->dok_tinggi_1+$data->dok_tinggi_2+$data->dok_tinggi_3)/3)}}</td>
        </tr>

        <tr style="border: solid 1px #000;padding: 2pt;text-align:center">
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">Jumlah</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">s.d.a</td>
            <td style="border: solid 1px #000;padding: 2pt;text-align:center">{{$data->dok_panjang*$data->dok_lebar*(($data->dok_tinggi_1+$data->dok_tinggi_2+$data->dok_tinggi_3)/3)}}</td>
        </tr>


    </table>

    <li style="margin-top: 8px">Hasil Pemeriksaan Fisik
    <br>
    <p>
        Menurut perhitungan yang didasarkan pada Daftar Kayu Bulat nomor {{$data->no_seri}} tanggal {{  Illuminate\Support\Carbon::parse($data->tgl_terima)->format('d-m-Y') }}  sebagai lampiran dokumen SKSHHK tersebut pada butir 1, dengan Daftar Pemeriksaan Fisik Kayu terlampir, hasilnya sebagai berikut:
    </p>
     <table style="margin-top: 8px; font-size: 11pt;">
        <tr>
            <td>a. Perbedaan Jumlah Batang</td>
            <td>: {{abs($data->dok_jumlah_batang-$data->lp_jumlah_batang)}}</td>

        </tr>

         <tr>
            <td>b. Perbedaan Jumlah Jenis Kayu</td>
            <td>: 0</td>

        </tr>

         <tr>
            <td>c. Perbedaan Volume</td>
            <td>: {{(abs($v_dok-$v_lp)/$v_lp)*100}}%</td>

        </tr>

     </table>

    </li>

</ul>

<p style="font-size: 11pt; margin-left: 0.7cm">
    Dengan ini dinyatakan bahwa SKSHHK {{$data->vendor->nama_vendor}} nomor {{$data->no_seri}}
    @if ($data->is_sesuai==1)
        sesuai
    @else
        tidak sesuai
    @endif
     dengan fisik kayu.


</p>
<p style="font-size: 11pt; margin-left: 0.7cm">

Demikian berita acara ini dibuat dengan sesungguhnya dan dapat digunakan dengan sebagaimana mestinya.
</p>


<p style="font-size: 11pt; margin-left: 0.7cm">
    Desa Baru, {{  Illuminate\Support\Carbon::parse($data->tgl_terima)->format('d-m-Y') }}
    <br>

    <img src={{ url('/storage') }}/{{$data->ttd}} style="height: 100px" alt="" >
    <span style="display: block;text-transform:uppercase;font-weight:800">{{$data->petugas->nama}}</span>
    <span style="display: block;text-transform:uppercase">No.Reg. {{$data->petugas->no_reg}}</span>

</p>

</div>


{{-- END PAGE 2 --}}

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
