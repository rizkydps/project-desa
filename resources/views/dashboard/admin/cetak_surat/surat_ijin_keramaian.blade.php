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
        margin-top: 150px;
    }

    #lampiran {
        float: left;
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
    #data-lurah-pengaju td:nth-child(2) {
    padding-left: 30px;
    }
</style>

<head>
    <title>Surat Izin Keramaian </title>
</head>

<body onload="window.print()">
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

        <div id="details" class="clearfix">
            <div id="lampiran">
                <div>Nomor : -</div>
                <div>Lampiran : -</div>
                <div class="address">Perihal : Surat Izin Keramaian</div>
            </div>
            <div id="tanggal-surat">
                <div>Samarinda, 12 agustus 2023</div>
                <div class="kepada">Kepada Yth. :</div>
                <div class="kepada">Kepala Desa</div>
            </div>
        </div>

        <div>
            Dengan ini kami mengajukan permohonan kepada Bapak/Ibu, kiranya dapat memberikan izin kepada :
        </div>

        <div id="data-lurah-pengaju">
            <table>
                <tbody>
                    <br><br>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>Jenis kelamin</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>Tempat/Tanggal Lahir</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br>

        <div>Bahwa nama tersebut diatas akan mengadakan kegiatan <strong>PASAR MALAM</strong> yang inshaa Allah akan dilaksanakan pada:</div>
        <div id="data-lurah-pengaju">
            <table>
                <tbody>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>Tempat</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                </tbody>
            </table>
            <br><br>
        </div>
        <div>Sehubungan dengan maksud tersebut diatas, mohon kepada bapak sekiranya dapat diberikan izin untuk kegiatan <strong>PASAR MALAM</strong> tersebut. </div>


        <div>Demikian permohonan ini dibuat dan diajukan kepada bapak dan atas restunya kami ucapkan Terima kasih</div>

        <div class="ttd">
            <p><strong>LURAH PONGGOK</strong></p>
            <div style="margin-top: 100px;"><strong><u>Rudi</u></strong><br />
                Lurah Desa Ponggok<br />
                NIP.</div>
        </div>
    </div>

    
</body>

</html>