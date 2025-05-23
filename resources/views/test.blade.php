<html>

<head>
    <title>QR Absensi
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        html {
            margin: 1.5cm;
        }

        .page-break {
            page-break-after: always;
        }

        .header,
        .footer {
            width: 100%;
            text-align: center;
            position: fixed;
        }

        .header {
            top: -20px;
            bottom: 300px;
        }

        .footer {
            bottom: -63px;
        }

        .pagenum:before {
            content: counter(page);
        }
        body {
            margin-top: 45px;
            margin-bottom: 25px;
        }
        

    </style>
    <style>
        tbody td {
            vertical-align: top;
            word-wrap: break-word;
        }

        td:nth-child(1) {
            max-width: 120px;
        }

    </style>
</head>

<body style="font-size: 11pt;">
    <div class="header">
        <table width="100%">
            <tr>
                <td width="50%" valign="top">

                </td>
                <td width="50%" style="text-align: right;">
                    <img src="{{ public_path('assets/img/logo.png') }}" style="height: 60px;" alt="">
                </td>
            </tr>
        </table>
    </div>
    <div class="footer">
        {{-- Page <span class="pagenum"></span> --}}
        <img src="{{ public_path('assets/img/footer_jgu_2025.png') }}" style="width:117%" alt="">
    </div>
    <div class="body-page">
        <center>
            <b style="font-size:50px">SCAN DISINI</b>
            <br>
            <b style="font-size:20px;">UNTUK MELAKUKAN ABSENSI</b>
            <br>
            <a href="" target="_blank"><img src="{!! $qr !!}" style="height: 250px;margin:40px 0 20px 0;"></a>
            <br>
            <hr>
            <br>
            <b style="font-size:15px ">LANGKAH MELAKUKAN ABSENSI</b>
            <br>
            <br>
        </center>
        <table width="100%" style="font-size:13px;">
            <tr>
                <td width="30%" style="text-align: center;">
                    <h1>1.</h1>
                    <p>Menggunakan pemindai QR-Code</p>
                </td>
                <td width="40%" style="text-align: center;">
                    <h1>2.</h1>
                    <p>Masuk dengan akun Anda</p>
                </td>
                <td width="30%" style="text-align:center;">
                    <h1>3.</h1>
                    <p>Isikan detail data yang sesuai</p>
                </td>
            </tr>
        </table>
        <hr>
        <blockquote>
            <small style="font-size: 8pt;color:#999">
                <center><i>
                        Sivitas Akademika JGU (Mahasiswa/Staf/Dosen) silakan masuk melalui Single Sign-On (SSO) dengan
                        menggunakan akun Klas atau masuk melalui Google dengan menggunakan email @jgu.ac.id, sedangkan
                        untuk
                        tamu (eksternal) dapat masuk menggunakan akun Google.<br>
                        Jika terdapat kendala login atau belum memiliki akun SSO silakan menghubungi tim HR / ITIC.</i>
                </center>
            </small>
        </blockquote>
    </div>
    
</body>

</html>
