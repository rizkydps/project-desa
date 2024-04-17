<!doctype html>
<html class="no-js" lang="en">
	
<head>
	@include('layouts.landing-partial.style')
    <style>
        .form-container {
            display: none;
        }
    </style>
</head>

	<body>

	<!-- page wrapper -->
	<div class="page-wrapper pbmit-bg-color-light">

		<!-- Header Main Area -->
		<header class="site-header header-style-2">
			@include('layouts.landing-partial.navbar')
			
			
			
		</header>
		<!-- Header Main Area End Here -->

		<!-- page content -->
		<div class="page-content">

			
            <section class="section-xl">
				<div class="container">
					<div class="pbmit-heading-subheading text-center">
						
						<h2 class="pbmit-title"> Formulir Pengajuan Surat Desa </h2>
                       
					</div>


					<div class="appointment_box">
                        
						
						<form>

                            <div class="row">
                                <div class="col-md-4 mx-auto">
                                    <select class="form-select form-control" aria-label="Default select example" id="form-selector" onchange="showForm()">
                                        <option value="">Pilih Jenis Surat :</option>
                                        <option value="form1">Surat Keterangan Domisili</option>
                                        <option value="form2">Surat keterangn pindah</option>
                                        <option value="form3">Surat pengantar Nikah</option>
                                        <option value="form4">Surat Keterangan Kematian</option>
                                        <option value="form5">Surat Keterangan  Kelahiran</option>
                                        <option value="form6">Surat Ijin Keramaian</option>
                                        <option value="form7">Surat Keterangan Tidak Mampu</option>
                                        <option value="form8">Surat Keterangan Usaha</option>
                                        <option value="form9">Surat Kehilangan</option>
                                        <option value="form10">Surat Keterangan Orang Yang Sama</option>
                                        <option value="form11">Surat Rekomendasi</option>
                                    </select>
                                </div>
                            </div>


                            <h4 class="text-center mb-3">name surat</h4>
                        
                            {{--  Form 1  --}}
                        <div class="form-container" id="form1">
							<div class="row " >
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Your Name *" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" placeholder="Your Email *" name="email" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="Your Phone *" name="phone" required>
								</div>
								<div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Department">Choose Department</option>
										<option value="Cardiology">Cardiology</option>
										<option value="Dental Care">Dental Care</option>
										<option value="Ophthalmology">Ophthalmology</option>
										<option value="Gastrologist">Gastrologist</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Doctor">Choose Doctor</option>
										<option value="Jordan Peele">Jordan Peele</option>
										<option value="Norton Berry">Norton Berry</option>
										<option value="Clare Smyth">Clare Smyth</option>
										<option value="Jamie Oliver">Jamie Oliver</option>
										<option value="Carla Hall">Carla Hall</option>
									</select>
								</div>
								<div class="col-md-12">
									<textarea name="message" cols="40" rows="10" class="form-control" placeholder="Type Appointment Note...." required></textarea>
								</div>
								<div class="col-md-12">
									<button class="pbmit-btn">
										<span class="pbmit-button-text">Submit Now</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</button>
								</div>
							</div>
                        </div>

                            {{--  Form 2  --}}
                        <div class="form-container" id="form2">
                            <div class="row" >
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Your Name *" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" placeholder="Your Email *" name="email" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="Your Phone *" name="phone" required>
								</div>
								<div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Department">Choose Department</option>
										<option value="Cardiology">Cardiology</option>
										<option value="Dental Care">Dental Care</option>
										<option value="Ophthalmology">Ophthalmology</option>
										<option value="Gastrologist">Gastrologist</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Doctor">Choose Doctor</option>
										<option value="Jordan Peele">Jordan Peele</option>
										<option value="Norton Berry">Norton Berry</option>
										<option value="Clare Smyth">Clare Smyth</option>
										<option value="Jamie Oliver">Jamie Oliver</option>
										<option value="Carla Hall">Carla Hall</option>
									</select>
								</div>
								<div class="col-md-12">
									<textarea name="message" cols="40" rows="10" class="form-control" placeholder="Type Appointment Note...." required></textarea>
								</div>
								<div class="col-md-12">
									<button class="pbmit-btn">
										<span class="pbmit-button-text">Submit Now</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</button>
								</div>
							</div>
                        </div>
                            {{--  Form 3  --}}
                        <div class="form-container" id="form3">
                            <div class="row " >
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Your Name *" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" placeholder="Your Email *" name="email" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="Your Phone *" name="phone" required>
								</div>
								<div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Department">Choose Department</option>
										<option value="Cardiology">Cardiology</option>
										<option value="Dental Care">Dental Care</option>
										<option value="Ophthalmology">Ophthalmology</option>
										<option value="Gastrologist">Gastrologist</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Doctor">Choose Doctor</option>
										<option value="Jordan Peele">Jordan Peele</option>
										<option value="Norton Berry">Norton Berry</option>
										<option value="Clare Smyth">Clare Smyth</option>
										<option value="Jamie Oliver">Jamie Oliver</option>
										<option value="Carla Hall">Carla Hall</option>
									</select>
								</div>
								<div class="col-md-12">
									<textarea name="message" cols="40" rows="10" class="form-control" placeholder="Type Appointment Note...." required></textarea>
								</div>
								<div class="col-md-12">
									<button class="pbmit-btn">
										<span class="pbmit-button-text">Submit Now</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</button>
								</div>
							</div>
                        </div>
                            {{--  Form 4  --}}
                        <div class="form-container" id="form4">
                            <div class="row" >
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Your Name *" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" placeholder="Your Email *" name="email" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="Your Phone *" name="phone" required>
								</div>
								<div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Department">Choose Department</option>
										<option value="Cardiology">Cardiology</option>
										<option value="Dental Care">Dental Care</option>
										<option value="Ophthalmology">Ophthalmology</option>
										<option value="Gastrologist">Gastrologist</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Doctor">Choose Doctor</option>
										<option value="Jordan Peele">Jordan Peele</option>
										<option value="Norton Berry">Norton Berry</option>
										<option value="Clare Smyth">Clare Smyth</option>
										<option value="Jamie Oliver">Jamie Oliver</option>
										<option value="Carla Hall">Carla Hall</option>
									</select>
								</div>
								<div class="col-md-12">
									<textarea name="message" cols="40" rows="10" class="form-control" placeholder="Type Appointment Note...." required></textarea>
								</div>
								<div class="col-md-12">
									<button class="pbmit-btn">
										<span class="pbmit-button-text">Submit Now</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</button>
								</div>
							</div>
                        </div>
                            {{--  Form 5  --}}
                        <div class="form-container" id="form5">
                            <div class="row" >
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Your Name *" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" placeholder="Your Email *" name="email" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="Your Phone *" name="phone" required>
								</div>
								<div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Department">Choose Department</option>
										<option value="Cardiology">Cardiology</option>
										<option value="Dental Care">Dental Care</option>
										<option value="Ophthalmology">Ophthalmology</option>
										<option value="Gastrologist">Gastrologist</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Doctor">Choose Doctor</option>
										<option value="Jordan Peele">Jordan Peele</option>
										<option value="Norton Berry">Norton Berry</option>
										<option value="Clare Smyth">Clare Smyth</option>
										<option value="Jamie Oliver">Jamie Oliver</option>
										<option value="Carla Hall">Carla Hall</option>
									</select>
								</div>
								<div class="col-md-12">
									<textarea name="message" cols="40" rows="10" class="form-control" placeholder="Type Appointment Note...." required></textarea>
								</div>
								<div class="col-md-12">
									<button class="pbmit-btn">
										<span class="pbmit-button-text">Submit Now</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</button>
								</div>
							</div>
                        </div>
                            {{--  Form 6  --}}
                        <div class="form-container" id="form6">
                            <div class="row" >
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Your Name *" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" placeholder="Your Email *" name="email" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="Your Phone *" name="phone" required>
								</div>
								<div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Department">Choose Department</option>
										<option value="Cardiology">Cardiology</option>
										<option value="Dental Care">Dental Care</option>
										<option value="Ophthalmology">Ophthalmology</option>
										<option value="Gastrologist">Gastrologist</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Doctor">Choose Doctor</option>
										<option value="Jordan Peele">Jordan Peele</option>
										<option value="Norton Berry">Norton Berry</option>
										<option value="Clare Smyth">Clare Smyth</option>
										<option value="Jamie Oliver">Jamie Oliver</option>
										<option value="Carla Hall">Carla Hall</option>
									</select>
								</div>
								<div class="col-md-12">
									<textarea name="message" cols="40" rows="10" class="form-control" placeholder="Type Appointment Note...." required></textarea>
								</div>
								<div class="col-md-12">
									<button class="pbmit-btn">
										<span class="pbmit-button-text">Submit Now</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</button>
								</div>
							</div>
                        </div>
                            {{--  Form 7  --}}
                        <div class="form-container" id="form7">
                            <div class="row" >
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Your Name *" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" placeholder="Your Email *" name="email" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="Your Phone *" name="phone" required>
								</div>
								<div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Department">Choose Department</option>
										<option value="Cardiology">Cardiology</option>
										<option value="Dental Care">Dental Care</option>
										<option value="Ophthalmology">Ophthalmology</option>
										<option value="Gastrologist">Gastrologist</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Doctor">Choose Doctor</option>
										<option value="Jordan Peele">Jordan Peele</option>
										<option value="Norton Berry">Norton Berry</option>
										<option value="Clare Smyth">Clare Smyth</option>
										<option value="Jamie Oliver">Jamie Oliver</option>
										<option value="Carla Hall">Carla Hall</option>
									</select>
								</div>
								<div class="col-md-12">
									<textarea name="message" cols="40" rows="10" class="form-control" placeholder="Type Appointment Note...." required></textarea>
								</div>
								<div class="col-md-12">
									<button class="pbmit-btn">
										<span class="pbmit-button-text">Submit Now</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</button>
								</div>
							</div>
                        </div>
                            {{--  Form 8  --}}
                        <div class="form-container" id="form8">
                            <div class="row" >
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Your Name *" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" placeholder="Your Email *" name="email" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="Your Phone *" name="phone" required>
								</div>
								<div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Department">Choose Department</option>
										<option value="Cardiology">Cardiology</option>
										<option value="Dental Care">Dental Care</option>
										<option value="Ophthalmology">Ophthalmology</option>
										<option value="Gastrologist">Gastrologist</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Doctor">Choose Doctor</option>
										<option value="Jordan Peele">Jordan Peele</option>
										<option value="Norton Berry">Norton Berry</option>
										<option value="Clare Smyth">Clare Smyth</option>
										<option value="Jamie Oliver">Jamie Oliver</option>
										<option value="Carla Hall">Carla Hall</option>
									</select>
								</div>
								<div class="col-md-12">
									<textarea name="message" cols="40" rows="10" class="form-control" placeholder="Type Appointment Note...." required></textarea>
								</div>
								<div class="col-md-12">
									<button class="pbmit-btn">
										<span class="pbmit-button-text">Submit Now</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</button>
								</div>
							</div>
                        </div>
                            {{--  Form 9  --}}
                        <div class="form-container" id="form9">
                            <div class="row" >
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Your Name *" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" placeholder="Your Email *" name="email" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="Your Phone *" name="phone" required>
								</div>
								<div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Department">Choose Department</option>
										<option value="Cardiology">Cardiology</option>
										<option value="Dental Care">Dental Care</option>
										<option value="Ophthalmology">Ophthalmology</option>
										<option value="Gastrologist">Gastrologist</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Doctor">Choose Doctor</option>
										<option value="Jordan Peele">Jordan Peele</option>
										<option value="Norton Berry">Norton Berry</option>
										<option value="Clare Smyth">Clare Smyth</option>
										<option value="Jamie Oliver">Jamie Oliver</option>
										<option value="Carla Hall">Carla Hall</option>
									</select>
								</div>
								<div class="col-md-12">
									<textarea name="message" cols="40" rows="10" class="form-control" placeholder="Type Appointment Note...." required></textarea>
								</div>
								<div class="col-md-12">
									<button class="pbmit-btn">
										<span class="pbmit-button-text">Submit Now</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</button>
								</div>
							</div>
                        </div>
                            {{--  Form 10  --}}
                        <div class="form-container" id="form10">
                            <div class="row" >
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Your Name *" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" placeholder="Your Email *" name="email" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="Your Phone *" name="phone" required>
								</div>
								<div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Department">Choose Department</option>
										<option value="Cardiology">Cardiology</option>
										<option value="Dental Care">Dental Care</option>
										<option value="Ophthalmology">Ophthalmology</option>
										<option value="Gastrologist">Gastrologist</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Doctor">Choose Doctor</option>
										<option value="Jordan Peele">Jordan Peele</option>
										<option value="Norton Berry">Norton Berry</option>
										<option value="Clare Smyth">Clare Smyth</option>
										<option value="Jamie Oliver">Jamie Oliver</option>
										<option value="Carla Hall">Carla Hall</option>
									</select>
								</div>
								<div class="col-md-12">
									<textarea name="message" cols="40" rows="10" class="form-control" placeholder="Type Appointment Note...." required></textarea>
								</div>
								<div class="col-md-12">
									<button class="pbmit-btn">
										<span class="pbmit-button-text">Submit Now</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</button>
								</div>
							</div>
                        </div>
                            {{--  Form 11  --}}
                        <div class="form-container" id="form11">
                            <div class="row" >
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Your Name *" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" placeholder="Your Email *" name="email" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="Your Phone *" name="phone" required>
								</div>
								<div class="col-md-6">
									<input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" value="2024-02-23" type="date" name="date-123">
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Department">Choose Department</option>
										<option value="Cardiology">Cardiology</option>
										<option value="Dental Care">Dental Care</option>
										<option value="Ophthalmology">Ophthalmology</option>
										<option value="Gastrologist">Gastrologist</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select form-control" aria-label="Default select example">
										<option value="Choose Doctor">Choose Doctor</option>
										<option value="Jordan Peele">Jordan Peele</option>
										<option value="Norton Berry">Norton Berry</option>
										<option value="Clare Smyth">Clare Smyth</option>
										<option value="Jamie Oliver">Jamie Oliver</option>
										<option value="Carla Hall">Carla Hall</option>
									</select>
								</div>
								<div class="col-md-12">
									<textarea name="message" cols="40" rows="10" class="form-control" placeholder="Type Appointment Note...." required></textarea>
								</div>
								<div class="col-md-12">
									<button class="pbmit-btn">
										<span class="pbmit-button-text">Submit Now</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</button>
								</div>
							</div>
                        </div>

						</form>
					</div>


				</div>
			</section>

			

		</div>
		<!-- page content End -->

		<!-- footer -->
		@include('layouts.landing-partial.footer')
        
		<!-- footer End -->

	</div>
	<!-- page wrapper End -->

	<!-- Search Box Start Here -->
	<div class="pbmit-search-overlay">
		<div class="pbmit-icon-close">
			<svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163" viewBox="0 0 26.163 26.163">
				<rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
				<rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
			</svg>
		</div>
		<div class="pbmit-search-outer"> 
			<form class="pbmit-site-searchform">
				<input type="search" class="form-control field searchform-s" name="s" placeholder="Search …">
				<button type="submit"></button>
			</form>
		</div>
	</div>
	<!-- Search Box End Here -->

	<!-- Scroll To Top -->
	<div class="pbmit-progress-wrap">
		<svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
		</svg>	
	</div>
	<!-- Scroll To Top End -->
	
	<!-- JS
		============================================ -->
	<!-- jQuery JS -->
    <script>
        function showForm() {
            // Mengambil elemen select dengan id form-selector
            var formSelector = document.getElementById("form-selector");
          
            // Mengambil nilai yang dipilih dari elemen select
            var selectedForm = formSelector.options[formSelector.selectedIndex].value;
          
            // Semua form dicek dulu untuk disembunyikan
            var formContainers = document.getElementsByClassName("form-container");
            for (var i = 0; i < formContainers.length; i++) {
                formContainers[i].style.display = "none";
            }
          
            // Form yang dipilih ditampilkan
            document.getElementById(selectedForm).style.display = "block";
          }
    </script>
	@include('layouts.landing-partial.script')

	</body>

</html>