<!DOCTYPE html>
<html>
<style>
    @media print {
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
        text-decoration: underline;
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

    #data-lurah-pengaju td:nth-child(2) {
        padding-left: 30px;
    }

    #Isi td {
        text-align: center;
    }
</style>

<head>
    <title>Surat Keterangan Kelahiran</title>
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

        <div class="head-1">SURAT KETERANGAN KELAHIRAN</div>

        <div id="details" class="clearfix">
            <div id="lampiran">
                <div>Nomor : -</div>

            </div>

        </div>

        <div>
            Yang bertanda tangan dibawah ini menerangkan bahwa pada :
        </div>

        <div id="data-lurah-pengaju">
            <table>
                <tbody>
                    <tr>
                        <td>Hari</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>Jam</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>Di</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br>

        <div>Telah lahir seorang anak yang diberi nama :</div>
        <div id="Isi">
            <table>
                <tbody>
                    <tr>
                        <td>
                            <p>___________________________________</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>Dengan data-data sebagai berikut :</div>
        <div id="data-lurah-pengaju">
            <table>
                <tbody>
                    <tr>
                        <td>Jenis kelamin</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>Berat badan</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>Panjang Badan</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>Nama Ayah</td>
                        <td>:</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
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

        <div>Demikian surat keterangan kelahiran ini dibuat Dengan sebenar benarnya untuk dapat dipergunakan seperlunya.</div>

        <div class="ttd">
            <p><strong>LURAH PONGGOK</strong></p>
            <div style="margin-top: 100px;"><strong><u>Rudi</u></strong><br />
                Lurah Desa Ponggok<br />
                NIP.</div>
        </div>
    </div>


</body>

</html>
