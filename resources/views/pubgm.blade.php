<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Document</title>

        <link rel="stylesheet" href="{{ asset('css/pubgm.css')}}" />
    </head>

    <body>
        <div class="navbar">
            <div class="title">PAXELGAMES</div>

            <div class="just-a-line"></div>

            <div class="menu">
                <a href="/">BERANDA</a>

                <a href="">PRODUK</a>

                <a href="">TENTANG</a>

                <a href="">KONTAK</a>
            </div>
        </div>

        <div class="navbar-place"></div>

        <div class="top-up">
            <div class="menu-top-up">
                <h1>PILIHAN TOP UP - PUBG MOBILE</h1>

                <div class="kotak-kotak">
                    <div class="kotak-menu">
                        <div class="bg-menu">
                            <img src="./gambar/uc.png" />
                        </div>

                        <div class="info">
                            <h3>10 UC</h3>

                            <h4>Rp. 5.000</h4>
                        </div>
                    </div>

                    <div class="kotak-menu">
                        <div class="bg-menu">
                            <img src="./gambar/uc.png" />
                        </div>

                        <div class="info">
                            <h3>20 UC</h3>

                            <h4>Rp. 10.000</h4>
                        </div>
                    </div>

                    <div class="kotak-menu">
                        <div class="bg-menu">
                            <img src="./gambar/uc.png" />
                        </div>

                        <div class="info">
                            <h3>40 UC</h3>

                            <h4>Rp. 15.000</h4>
                        </div>
                    </div>

                    <div class="kotak-menu">
                        <div class="bg-menu">
                            <img src="./gambar/uc.png" />
                        </div>

                        <div class="info">
                            <h3>80 UC</h3>

                            <h4>Rp. 20.000</h4>
                        </div>
                    </div>

                    <div class="kotak-menu">
                        <div class="bg-menu">
                            <img src="./gambar/uc2.png" />
                        </div>

                        <div class="info">
                            <h3>160 UC</h3>

                            <h4>Rp. 25.000</h4>
                        </div>
                    </div>

                    <div class="kotak-menu">
                        <div class="bg-menu">
                            <img src="./gambar/uc2.png" />
                        </div>

                        <div class="info">
                            <h3>320 UC</h3>

                            <h4>Rp. 30.000</h4>
                        </div>
                    </div>

                    <div class="kotak-menu">
                        <div class="bg-menu">
                            <img src="./gambar/uc2.png" />
                        </div>

                        <div class="info">
                            <h3>640 UC</h3>

                            <h4>Rp. 35.000</h4>
                        </div>
                    </div>

                    <div class="kotak-menu">
                        <div class="bg-menu">
                            <img src="./gambar/uc2.png" />
                        </div>

                        <div class="info">
                            <h3>12800 UC</h3>

                            <h4>Rp. 40.000</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-top-up2">
                <h1>PILIHAN METODE PEMBAYARAN - PUBG MOBILE</h1>

                <div class="kotak-kotak2">
                    <div class="kotak-menu2">
                        <div class="bg-menu2">
                            <img src="./gambar/alfamaret.png" />
                        </div>
                    </div>

                    <div class="kotak-menu2">
                        <div class="bg-menu2">
                            <img src="./gambar/indomaret.png" />
                        </div>
                    </div>

                    <div class="kotak-menu2">
                        <div class="bg-menu2">
                            <img src="./gambar/qris.png" />
                        </div>
                    </div>

                    <div class="kotak-menu2">
                        <div class="bg-menu2">
                            <img src="./gambar/ovo.png" />
                        </div>
                    </div>

                    <div class="kotak-menu2">
                        <div class="bg-menu2">
                            <img src="./gambar/dana.png" />
                        </div>
                    </div>

                    <div class="kotak-menu2">
                        <div class="bg-menu2">
                            <img src="./gambar/shopee.png" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-top-up3">
                <div class="form-top-up">
                    <div class="form-pembelian">
                        <h1>FORM PEMBELIAN - PUBG MOBILE</h1>
                        <form action="/submit-pembelian" method="POST">
                            <div class="form-group">
                                <label for="id">ID:</label>
                                <input type="text" id="id" name="id" required />
                            </div>
                            <div class="form-group">
                                <label for="menu">Pilihan Menu:</label>
                                <select id="menu" name="menu" required>
                                    <option value="10 UC">
                                        10 UC - Rp. 5.000
                                    </option>
                                    <option value="20 UC">
                                        20 UC - Rp. 10.000
                                    </option>
                                    <option value="40 UC">
                                        40 UC - Rp. 15.000
                                    </option>
                                    <option value="80 UC">
                                        80 UC - Rp. 20.000
                                    </option>
                                    <option value="160 UC">
                                        160 UC - Rp. 25.000
                                    </option>
                                    <option value="320 UC">
                                        320 UC - Rp. 30.000
                                    </option>
                                    <option value="640 UC">
                                        640 UC - Rp. 35.000
                                    </option>
                                    <option value="12800 UC">
                                        12800 UC - Rp. 40.000
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="metode-pembayaran"
                                    >Metode Pembayaran:</label
                                >
                                <select
                                    id="metode-pembayaran"
                                    name="metode_pembayaran"
                                    required
                                >
                                    <option value="alfamart">Alfamart</option>
                                    <option value="indomaret">Indomaret</option>
                                    <option value="qris">QRIS</option>
                                    <option value="ovo">OVO</option>
                                    <option value="dana">Dana</option>
                                    <option value="shopee">Shopee</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nomor-rekening"
                                    >Nomor Rekening:</label
                                >
                                <input
                                    type="text"
                                    id="nomor-rekening"
                                    name="nomor_rekening"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input
                                    type="text"
                                    id="nama"
                                    name="nama"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label for="nomor-hp">Email</label>
                                <input
                                    type="text"
                                    id="nomor-hp"
                                    name="nomor_hp"
                                    required
                                />
                            </div>
                            <button type="submit">Kirim</button>
                        </form>
                    </div>
                </div>

                <div class="bg-kanan"></div>
            </div>
        </div>

        <footer>
            <div class="social-media">
                <a href=""> <i class="ri-discord-fill"></i></a>

                <a href=""> <i class="ri-facebook-box-fill"></i></a>

                <a href=""> <i class="ri-instagram-line"></i></a>

                <a href=""> <i class="ri-twitter-x-line"></i></a>

                <a href=""> <i class="ri-whatsapp-line"></i></a>
            </div>

            <div class="terakhir">&copy; PAXELGAMES 2024</div>
        </footer>
    </body>
</html>
