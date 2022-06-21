   <!-- Page Header Start -->
   <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 ">Render-vous</h1>
                 
                </div>
            </div>
        </div>
        <!-- Page Header End -->





        <!-- rendez vous -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center  ">
                    <h6 class="section-title text-center text-info text-uppercase">Rendez-vous</h6>
                    <h1 class="mb-5">prendre votre <span class="text-info text-uppercase">Rendez-vous</span></h1>
                </div>
                <div class="row g-5">
                    <div class="col-md-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3137.257557979313!2d-8.52485928501372!3d32.24384258113635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaefdd4fcbbdbc1%3A0x846cbd9f328a7bdb!2sYOUCODE!5e1!3m2!1sfr!2sma!4v1653766821655!5m2!1sfr!2sma"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <form>
                                <div class="row g-3">
                                    <div>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="datetime-local" class="form-control datetimepicker-input"
                                                id="checkin" placeholder="Check In" data-target="#date3"
                                                data-toggle="datetimepicker">
                                            <label for="checkin">Check In</label>
                                        </div>
                                    </div>



                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select class="form-select" id="select3">
                                                <option value="1">chaise A</option>
                                                <option value="2">chaise B</option>
                                                <option value="3">chaise C</option>
                                                <option value="1">chaise D</option>
                                            </select>
                                            <label for="select3">choisir votre coiffeur</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Special Request" id="message"
                                                style="height: 100px"></textarea>
                                            <label for="message">Special Request</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 py-3" type="submit">Rendez-vous</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rendez vous End -->
