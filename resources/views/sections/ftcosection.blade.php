<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 py-5 px-md-5 bg-primary">
                <div class="heading-section heading-section-white ftco-animate mb-5">
                    <h2 class="mb-4">Taklif va Etirozlar bilidirish</h2>
                    <p>Ariza, shikoyat yoki taklifingiz bo‘lsa bizga murojaat qiling, biz tez orada Siz bilan
                        bog‘lanamiz!</p>
                </div>
                <form action="{{ route('message') }}" method="POST" class="appointment-form ftco-animate">
                    @csrf
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Ism" name="name">
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="Familiya" name="surname">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Telefon" name="contact">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Xabar"></textarea>
                        </div>

                    </div>


                    <div class="form-group ml-md-4">
                        <input type="submit" value="Yuborish" class="btn btn-secondary py-3 px-4">
                    </div>


                </form>
            </div>
        </div>
    </div>
</section>
