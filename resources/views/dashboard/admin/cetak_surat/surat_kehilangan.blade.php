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

        <div class="head-1">SURAT KEHILANGAN</div>

        <div id="details" class="clearfix">
            <div id="lampiran">
                <div>Nomor : -</div>
                
            </div>
           
        </div>

        <div>
            yang bertanda tangan di bawah ini kepada kepala desa sidomulyo, Kecamatan anggana, kabupaten kutaikartanegara menerangkan dengan sebenarnya,Bahwa:</div>

        <div id="data-lurah-pengaju">
            <table>
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>agung</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>649876346003</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>laki-laki</td>
                    </tr>
                    <tr>
                        <td>Tempat,tanggal lahir</td>
                        <td>:</td>
                        <td>samarinda 09-mei-2001</td>
                    </tr>
                    <tr>
                        <td>kewarganegara/Agama</td>
                        <td>:</td>
                        <td>indonesia/islam</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>mahasiswa</td>
                    </tr>
                    <tr>
                        <td>Status pernikahan</td>
                        <td>:</td>
                        <td>belum menikah</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>jl.penangkaran buaya </td>
                    </tr>
                   
                    
                </tbody>
            </table>
        </div>
        <br><br>

        <div id="data-lurah-pengaju">
        <div>Nama tersebut diatas adalah benar warga desa sidomulyo,kecamatan anggana</div>
         <div>kabupaten kutaikartanegara,Dengan ini menerangkan bawha yang bersangkutan telah kehilangan berupa:</div>  
         <div>Surat keterangan ini di buat untuk keamanan</div> 
         <div>Demikian surat keterangan ini dibuat, atas perhatian dan kerjasamanya kami ucapan terimaksi</div>   
        <table>
                

        <div class="ttd">
            <p><strong>LURAH PONGGOK</strong></p>
            <div style="margin-top: 100px;"><strong><u>Rudi</u></strong><br />
                Lurah Desa Ponggok<br />
                NIP.</div>
        </div>
    </div>

    
</body>

</html>