<!DOCTYPE html>
<html>
<style>

 @media print{
            @page {
                margin-top: 30px;
                margin-bottom: 30px;
            }
            } 
    .surat-wrapper {
        margin: 0 auto;
        max-width: 1240px;
        max-height: 1754px;
        width: 100%;
        background: white;
        color: black;
    }

    .surat-wrapper .head-1 {
        color: black;
        font-size: 20px;
        text-align: center;
        font-weight: bold;
        text-decoration:underline;
    }

    .garis1 {
        border-top: 3px solid black;
        height: 2px;
        border-bottom: 1px solid black;
    }

    .ttd {
        position: absolute;
        right: 0px;
        width: 300px;
        text-align: center;
    }

    #lampiran {
        text-align: center;
    }

    #tanggal-surat {
        float: right;
    }

    #tanggal-surat .kepada {
        text-align: left;
    }

    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }

    #details {
        margin-bottom: 50px;
    }

    #data-lurah-pengaju {
        margin: 10px 0 10 30px;
    }

    .header-wrapper {
        display: table;
        margin: auto;
    }

    #alamat {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
    }

    #alamat .head {
       font-size: 20px;
       font-weight: bold;
    }

    #alamat .h3 {
        margin: 0;
    }

    footer {
        position: fixed;
        bottom: -60px;
        left: 0px;
        right: 0px;
        height: 50px;
    }
</style>

<head>
    <title>Surat</title>
</head>

<body >
    <div class="surat-wrapper">
        <header class="header-wrapper">
            <img style="float: left; margin: 0px 15px 15px 0px;" src="{{ asset('images/logo.png') }}" width="100" />
            <div id="alamat">
                <div class="head">PEMERINTAH KABUPATEN KUTAI KARTANEGARA</div>
                <div class="head">KECAMATAN ANGGANA</div>
                <div class="head">DESA SIDOMULYO</div>
                <div>Jl. Soekarno-Hatta, No. 68, Telepon/Faximile (0298) 523024</div>
                <!-- <div><a href="mailto:company@example.com">company@example.com</a></div> -->
            </div>
        </header>

        <hr class="garis1" />

        <div class="head-1">SURAT KETERANGAN DOMISILI</div>

        <div id="details" class="clearfix">
            <div id="lampiran">
                <div>Nomor : {{ $surat->nomor_surat }}</div>
                
            </div>
           
        </div>

        <div>
        Yang bertanda tangan dibawah ini kepala Desa Sidomulyo Kabupaten Kutai Kartanegara menerangkan dengan sebenarnya, bahwa:
        </div>
<br>
        <div id="data-lurah-pengaju">
            <table>
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $surat->name }}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>{{ $surat->nik }}</td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{ $surat->tempat_tanggal_lahir }}, {{ $surat->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ $surat->jenis_kelamin }}</td>
                    </tr>
                    
                    <tr>
                        <td>Warganegara/Agama</td>
                        <td>:</td>
                        <td>{{ $surat->warganegara }}/{{ $surat->agama }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $surat->pekerjaan }}</td>
                    </tr>
                    <tr>
                        <td>Status Pernikahan</td>
                        <td>:</td>
                        <td>{{ $surat->statis_pernikahan }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $surat->alamat }}</td>
                    </tr>
                </tbody>
            </table>
        </div>    

        <br>
        <div>
            Berdasarkan pengamatan Karni, yang bersangkutan benar-benar penduduk yang berdomisili di Desa Wambongi Kecamatan Batuatas Kabupaten Buton Selatan Provinsi Sulawesi Tenggara.
            </div>
            <br>
            <div>Demikian Surat Keterangan Domisili ini dikeluarkan kepada yang bersangkutan untuk dipergunakan sebagaimana mestinya.</div>
<br><br><br>
            <div class="ttd">
                <p><strong>Kepala Desa Sidomulyo</strong></p>
                <div style="margin-top: 100px;"><strong><u>Agus Haryanto</u></strong><br />
                    Kepala Desa Sidomulyo<br />
                    NIP.</div>
            </div>
</body>

</html>