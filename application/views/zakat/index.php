<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Perhitungan Zakat</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="<?= base_url('assets/'); ?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?= base_url(); ?>">Home</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="<?= base_url(); ?>">Home</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">

            <h1 class="header center teal-text">Perhitungan Zakat</h1>


        </div>
    </div>


    <div class="container">
        <div class="section">
            <ul class="collapsible popout">
                <li>
                    <div class="collapsible-header teal white-text"><i class="material-icons">monetization_on</i>Zakat Maal</div>
                    <div class="collapsible-body">
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <h2 class="center teal-text"><i class="material-icons">monetization_on</i></h2>
                                    <h5 class="center">Zakat Maal</h5>
                                    <p>Maal berasal dari kata bahasa Arab artinya harta atau kekayaan (al-amwal, jamak dari kata maal) adalah “segala hal yang diinginkan manusia untuk disimpan dan dimiliki” (Lisan ul-Arab). Menurut Islam sendiri, harta merupakan sesuatu yang boleh atau dapat dimiliki dan digunakan (dimanfaatkan) sesuai kebutuhannya. Oleh karena itu dalam pengertiannya, zakat maal berarti zakat yang dikenakan atas segala jenis harta, yang secara zat maupun substansi perolehannya tidak bertentangan dengan ketentuan agama. Sebagai contoh, zakat maal terdiri atas simpanan kekayaan seperti uang, emas, surat berharga, penghasilan profesi, aset perdagangan, hasil barang tambang atau hasil laut, hasil sewa aset dan lain sebagainya.</p>
                                    <p>Zakat maal yang dimaksud dalam perhitungan ini adalah zakat yang dikenakan atas uang, emas, surat berharga, dan aset yang disewakan. Tidak termasuk harta pertanian, pertambangan, dan lain-lain yang diatur dalam UU No.23/2011 tentang pengelolaan zakat. Zakat maal harus sudah mencapai nishab (batas minimum) dan terbebas dari hutang serta kepemilikan telah mencapai 1 tahun (haul). Nishab zakat maal sebesar 85 gram emas. Kadar zakatnya senilai 2,5%. (Sumber: Al Qur'an Surah Al Baqarah ayat 267, Peraturan Menteri Agama Nomer 31 Tahun 2019, Fatwa MUI Nomer 3 Tahun 2003, dan pendapat Shaikh Yusuf Qardawi).</p>
                                    <p>sumber: <a href="https://baznas.go.id" target="_blank">basnaz.go.id</a></p>
                                </div>
                            </div>
                            <form name="zakatMal" class="col s12 m6">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="emas" value="0" placeholder="masukkan emas" id="emas" type="number" class="validate" onkeyup="hitungZakatMal()">
                                        <label for="emas">Nilai emas, perak, dll dalam rupiah</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="uang" value="0" placeholder="masukkan uang" id="uang" type="number" class="validate" onkeyup="hitungZakatMal()">
                                        <label for="uang">Uang tunai, tabungan, deposito</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="aset" value="0" placeholder="masukkan nilai aset" id="aset" type="number" class="validate" onkeyup="hitungZakatMal()">
                                        <label for="aset">Nilai kendaraan, rumah, dan aset lain</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="hutang" value="0" placeholder="masukkan hutang" id="hutang" type="number" class="validate" onkeyup="hitungZakatMal()">
                                        <label for="hutang">Jumlah hutang/cicilan(jika ada)</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-value="<?= $harga; ?>" value="Rp<?= number_format($harga, 0, ',', '.'); ?>" placeholder="" id="harga" type="text" readonly class="validate" onkeyup="">
                                        <label for="harga">Harga emas saat ini</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-value="<?= $nishab; ?>" value="Rp<?= number_format($nishab, 0, ',', '.'); ?>" placeholder="" id="nishab" type="text" readonly class="validate" onkeyup="">
                                        <label for="nishab">Nishab 85 gram</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="zakat" value="0" placeholder="" id="zakat" type="text" class="validate" onkeyup="hitungZakatMal()">
                                        <label for="zakat">Wajib mengeluarkan zakat</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header teal white-text"><i class="material-icons">business_center</i>Zakat Penghasilan</div>
                    <div class="collapsible-body">
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <h2 class="center teal-text"><i class="material-icons">business_center</i></h2>
                                    <h5 class="center">Zakat Penghasilan</h5>
                                    <p>Zakat penghasilan atau yang dikenal juga sebagai zakat profesi; zakat pendapatan adalah bagian dari zakat mal yang wajib dikeluarkan atas harta yang berasal dari pendapatan / penghasilan rutin dari pekerjaan yang tidak melanggar syariah. Nishab zakat penghasilan sebesar 85 gram emas per tahun. Kadar zakat penghasilan senilai 2,5%.</p>
                                    <p>Dalam praktiknya, zakat penghasilan dapat ditunaikan setiap bulan dengan nilai nishab perbulannya adalah setara dengan nilai seperduabelas dari 85 gram emas (mengikuti harga Buy Back emas pada hari dimana zakat akan ditunaikan), dengan kadar 2,5%. Jadi apabila penghasilan setiap bulan telah melebihi nilai nishab bulanan, maka wajib dikeluarkan zakatnya sebesar 2,5% dari penghasilannya tersebut</p>
                                    <p>Ada banyak jenis profesi dengan pembayaran rutin maupun tidak, dengan penghasilan sama dan tidak dalam setiap bulannya. Jika penghasilan dalam 1 bulan tidak mencapai nishab, maka hasil pendapatan selama 1 tahun dikumpulkan atau dihitung, kemudian zakat ditunaikan jika penghasilan bersihnya sudah cukup nishab.</p>
                                    <p>sumber: <a href="https://baznas.go.id" target="_blank">basnaz.go.id</a></p>
                                </div>
                            </div>
                            <form name="zakatPenghasilan" class="col s12 m6">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="penghasilan" value="0" placeholder="masukkan penghasilan" id="penghasilan" type="number" class="validate" onkeyup="hitungZakatPenghasilan()">
                                        <label for="penghasilan">Penghasilan per bulan</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="bonus" value="0" placeholder="masukkan bonus" id="bonus" type="number" class="validate" onkeyup="hitungZakatPenghasilan()">
                                        <label for="bonus">Bonus pendapatan dan lain-lain</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input value="0" placeholder="masukkan pengeluaran" id="pengeluaran" type="number" class="validate" onkeyup="hitungZakatPenghasilan()">
                                        <label for="pengeluaran">Pengeluaran kebutuhan pokok per bulan</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-value="<?= $harga; ?>" value="Rp<?= number_format($harga, 0, ',', '.'); ?>" placeholder="" id="harga" type="text" readonly class="validate" onkeyup="hitungZakatPenghasilan()">
                                        <label for="harga">Harga emas saat ini</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-value="<?= $nishabPerBulan; ?>" value="Rp<?= number_format($nishabPerBulan, 0, ',', '.'); ?>" placeholder="" id="nishabPerBulan" type="text" readonly class="validate" onkeyup="hitungZakatPenghasilan()">
                                        <label for="nishabPerBulan">Nishab 85 gram(dibagi 12 bulan)</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="zakat" value="0" placeholder="" id="zakat" type="text" class="validate" onkeyup="hitungZakatPenghasilan()">
                                        <label for="zakat">Wajib mengeluarkan zakat per bulan</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header teal white-text"><i class="material-icons">add_business</i>Zakat Perdagangan</div>
                    <div class="collapsible-body">
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <h2 class="center teal-text"><i class="material-icons">add_business</i></h2>
                                    <h5 class="center">Zakat Perdagangan</h5>
                                    <p>Zakat perdagangan adalah zakat yang dikeluarkan dari harta niaga, sedangkan harta niaga adalah harta atau aset yang diperjualbelikan dengan maksud untuk mendapatkan keuntungan. Harta perdagangan yang dikenakan zakat dihitung dari asset lancar usaha dikurangi hutang yang berjangka pendek (hutang yang jatuh tempo hanya satu tahun). Jika selisih dari asset lancar dan hutang tersebut sudah mencapai nisab, maka wajib dibayarkan zakatnya.Nisab zakat perdagangan senilai 85 gram emas dengan tarif zakat sebesar 2,5% dan sudah mencapai satu tahun (haul).</p>
                                    <p>sumber: <a href="https://baznas.go.id" target="_blank">basnaz.go.id</a></p>
                                </div>
                            </div>
                            <form name="zakatPerdagangan" class="col s12 m6">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="asetLancar" value="0" placeholder="masukkan nilai asetLancar" id="asetLancar" type="number" class="validate" onkeyup="hitungZakatPerdagangan()">
                                        <label for="asetLancar">Aset Lancar</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="hutang" value="0" placeholder="masukkan hutang" id="hutang" type="number" class="validate" onkeyup="hitungZakatPerdagangan()">
                                        <label for="hutang">Hutang jangka pendek</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-value="<?= $harga; ?>" value="Rp<?= number_format($harga, 0, ',', '.'); ?>" placeholder="" id="harga" type="text" readonly class="validate" onkeyup="">
                                        <label for="harga">Harga emas saat ini</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-value="<?= $nishab; ?>" value="Rp<?= number_format($nishab, 0, ',', '.'); ?>" placeholder="" id="nishab" type="text" readonly class="validate" onkeyup="">
                                        <label for="nishab">Nishab 85 gram</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="zakat" value="0" placeholder="" id="zakat" type="text" class="validate" onkeyup="hitungZakatPerdagangan()">
                                        <label for="zakat">Wajib mengeluarkan zakat</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header teal white-text"><i class="material-icons">animation</i>Zakat Emas</div>
                    <div class="collapsible-body">
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="icon-block">
                                    <h2 class="center teal-text"><i class="material-icons">animation</i></h2>
                                    <h5 class="center">Zakat Emas</h5>
                                    <p>Zakat emas, perak, atau logam mulia adalah zakat yang dikenakan atas emas, perak dan logam mulia lainnya yang telah mencapai nisab dan haul(satu tahun). Zakat emas wajib dikenakan zakat jika emas yang tersimpan telah mencapai atau melebihi nisabnya yakni 85 gram (mengikuti harga Buy Back emas pada hari dimana zakat akan ditunaikan), kadar zakat emas adalah 2,5%. Sementara itu, zakat perak wajib ditunaikan jika perak yang dimiliki telah mencapai atau melebihi nisab sebesar 595 gram, kadar zakatnya ialah 2,5% dari perak yang dimiliki.</p>
                                    <p>sumber: <a href="https://baznas.go.id" target="_blank">basnaz.go.id</a></p>
                                </div>
                            </div>
                            <form name="zakatEmas" class="col s12 m6">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="emas" value="0" placeholder="masukkan nilai emas" id="emas" type="number" class="validate" onkeyup="hitungZakatEmas()">
                                        <label for="emas">Emas dalam gram</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-value="<?= $harga; ?>" value="Rp<?= number_format($harga, 0, ',', '.'); ?>" placeholder="" id="harga" type="text" readonly class="validate" onkeyup="">
                                        <label for="harga">Harga emas saat ini</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input data-value="<?= $nishab; ?>" value="Rp<?= number_format($nishab, 0, ',', '.'); ?>" placeholder="" id="nishab" type="text" readonly class="validate" onkeyup="">
                                        <label for="nishab">Nishab 85 gram</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="zakat" value="0" placeholder="" id="zakat" type="text" class="validate" onkeyup="hitungZakatEmas()">
                                        <label for="zakat">Wajib mengeluarkan zakat</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>

            </ul>


            <!--   Icon Section   -->
            <div class="row">



            </div>

        </div>
        <div class="row center">
            <h5 class="header col s12 light">Harga emas diambil dari API <a target="_blank" href="https://metals-api.com/">metals-api.com</a> lalu dikonversi dari USD ke IDR menggunakan API <a target="_blank" href="https://currencyconverterapi.com/">currencyconverterapi.com</a> dan diperbarui setiap hari sesuai dengan perkembangan harga emas dan nilai mata uang rupiah</h5>
        </div>
    </div>

    <footer class="page-footer teal">
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="orange-text text-lighten-3" target="_blank" href="https://github.com/risqid">Dharmawan</a>
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        (function($) {
            $(function() {

                $('.sidenav').sidenav();
                $('.collapsible').collapsible();
            }); // end of document ready
        })(jQuery); // end of jQuery name space
    </script>
    <script>
        function hitungZakatMal() {
            emas = Number(document.zakatMal.emas.value);
            uang = Number(document.zakatMal.uang.value);
            aset = Number(document.zakatMal.aset.value);
            hutang = Number(document.zakatMal.hutang.value);
            nishab = Number(document.getElementById('nishab').getAttribute('data-value'));

            totalHarta = emas + uang + aset;
            total = totalHarta - hutang;

            if (emas == 0 && uang == 0 && aset == 0 && hutang == 0) {
                document.zakatMal.zakat.value = "data belum diisi"
            } else {
                if (total < nishab) {
                    document.zakatMal.zakat.value = "belum mencapai nishab"
                } else {
                    document.zakatMal.zakat.value = 0.025 * total
                }
            }

        }

        function hitungZakatPenghasilan() {
            penghasilan = Number(document.zakatPenghasilan.penghasilan.value);
            bonus = Number(document.zakatPenghasilan.bonus.value);
            pengeluaran = Number(document.zakatPenghasilan.pengeluaran.value);
            nishabPerBulan = Number(document.getElementById('nishabPerBulan').getAttribute('data-value'));

            totalPenghasilan = penghasilan + bonus;
            total = totalPenghasilan - pengeluaran;
            zakat = 0.025 * total;

            if (penghasilan == 0 && bonus == 0 && pengeluaran == 0) {
                document.zakatPenghasilan.zakat.value = "data belum diisi"
            } else {
                if (total < nishabPerBulan) {
                    document.zakatPenghasilan.zakat.value = "belum mencapai nishab"
                } else {
                    document.zakatPenghasilan.zakat.value = zakat;
                }
            }

        }

        function hitungZakatPerdagangan() {
            asetLancar = Number(document.zakatPerdagangan.asetLancar.value);
            hutang = Number(document.zakatPerdagangan.hutang.value);
            nishab = Number(document.getElementById('nishab').getAttribute('data-value'));

            total = asetLancar - hutang;

            if (asetLancar == 0 && hutang == 0) {
                document.zakatPerdagangan.zakat.value = "data belum diisi"
            } else {
                if (total < nishab) {
                    document.zakatPerdagangan.zakat.value = "belum mencapai nishab"
                } else {
                    document.zakatPerdagangan.zakat.value = 0.025 * total
                }
            }

        }

        function hitungZakatEmas() {
            emas = Number(document.zakatEmas.emas.value);
            harga = Number(document.getElementById('harga').getAttribute('data-value'));
            nishab = Number(document.getElementById('nishab').getAttribute('data-value'));

            total = emas * harga;

            if (emas == 0) {
                document.zakatEmas.zakat.value = "data belum diisi"
            } else {
                if (emas < 85) {
                    document.zakatEmas.zakat.value = "belum mencapai nishab"
                } else {
                    document.zakatEmas.zakat.value = 0.025 * total
                }
            }

        }
    </script>

</body>

</html>