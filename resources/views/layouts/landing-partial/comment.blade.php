<section class="section-xl" id="aspira">
    <div class="container">
        <div class="pbmit-heading-subheading text-center">
            <h4 class="pbmit-subtitle">With Access To</h4>
            <h2 class="pbmit-title">Aspirasi & Pengaduan</h2>
            <div class="pbmit-heading-desc">
                Our clinic is equipped with modern facilities and advanced medical technology to ensure accurate diagnoses <br> and effective treatments. This enables us to provide you with the highest standard of care.
            </div>
        </div>
        <div class="appointment_box">
            <h4 class="text-center mb-3">Buat Aspirasi & Aduan</h4>
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Nama Lengkap*" name="nama" required>
                    </div>
                    <div class="col-md-6">
                        <input type="tel" class="form-control" placeholder="Nomer Hp" name="whatsapp" required>
                    </div>
                    <div class="col-md-12">
                        <input type="tel" class="form-control" placeholder="Prihal" name="prihal" required>
                    </div>
                    <div class="col-md-12">
                        <textarea name="aduan"  cols="40" rows="10" class="form-control"  placeholder="Tulis Pesan...." required></textarea>
                    </div>

                        <div class="col-md-6">
                            <label for="captcha"><code>*Validasi :</code></label>
                            <div>
                                <img src="{{ captcha_src('math') }}" alt="captcha" class="captcha-img" id="captcha-img">
                                <button type="button" class="btn btn-refresh" id="refresh-captcha">
                                    <i class="fas fa-sync-alt"></i>
                                </button>                                                
                            </div>
                            <input type="text" id="captcha" placeholder="Isi Validasi dengan Benar" class="form-control" name="captcha" required>
                        </div>
            
                        @if ($errors->has('captcha'))
                            <span class="text-danger">{{ $errors->first('captcha') }}</span>
                        @endif
                    <div class="col-md-12">
                        <button class="pbmit-btn" type="submit">
                            <span class="pbmit-button-text">Kirim</span>
                            <span class="pbmit-button-icon-wrapper">
                                <span class="pbmit-button-icon">
                                    <i class="pbmit-base-icon-black-arrow-1"></i>
                                </span>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
            @if(session('success'))
    <script>alert("{{ session('success') }}");</script>
@endif
        </div>
    </div>
</section>
