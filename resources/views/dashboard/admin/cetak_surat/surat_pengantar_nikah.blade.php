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

<body onload="window.print()">
    <div class="surat-wrapper">
        <header class="header-wrapper">
            <img style="float: left; margin: 0px 15px 15px 0px;" src="images/kal.png" width="100" />
            <div id="alamat">
                <div class="head">PEMERINTAH KABUPATEN KUTAI KARTANEGARA</div>
                <div class="head">KECAMATAN ANGGANA</div>
                <div class="head">DESA SIDOMULYO</div>
                <div>Jl. Soekarno-Hatta, No. 68, Telepon/Faximile (0298) 523024</div>
                <!-- <div><a href="mailto:company@example.com">company@example.com</a></div> -->
            </div>
        </header>

        <hr class="garis1" />

        <div class="head-1">SURAT KETERANGAN NIKAH</div>

        <div id="details" class="clearfix">
            <div id="lampiran">
                <div>Nomor : -</div>
                
            </div>
           
        </div>

        <div>
            Yang bertanda tangan di bawah ini Kepala Desa SidoMulyo Kecamatan bukit Kabupaten Kutai Kartanegara menerangkan bahwa:
        </div>
<br>
        <div id="data-lurah-pengaju">
            <table>
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>KKN DESA SIDOMULYO</td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>:</td>
                        <td>Wasaga, 2-10-2004</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>Islam</td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>:</td>
                        <td>WNI</td>
                    </tr>
                    <tr>
                        <td>No.KTP</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>Desa Terong Tanah RT.RW. Kecamatan Pasarwajo</td>
                </tr>
                <br>
                    <tr>
                        <td>Nama Orang Tua</td>
                        <td>:</td>
                        <td>Riski</td>
                    </tr>
                </tbody>
            </table>
        </div>    

        <br>
        <div>
            Adalah anggota masyarakat Desa Sidomulyo dengan status belum menikah. Surat pengantar ini dipergunakan untuk mengurus Administrasi Pernikahan.
            </div>
            <br>
            <div>
                Demikian surat pengantar ini dibuat dan diserahkan kepada yang bersangkutan untuk dapat dipergunakan seperlunya.
            </div>

    
</body>

</html>