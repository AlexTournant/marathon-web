<x-layout>
    <section class="mb-5">
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contactez-nous</h2>

        <div class="row">
            <div class="col-md-8 mb-md-0 mb-5 mx-auto">
                <form id="contact-form" name="contact-form" method="POST" action="/contact">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-4">
                                <label for="name" class="form-label">Votre nom</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="md-form mb-4">
                                <label for="email" class="form-label">Votre email</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-4">
                                <label for="subject" class="form-label">Sujet</label>
                                <input type="text" id="subject" name="subject" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-4">
                                <label for="message" class="form-label">Votre message</label>
                                <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="text-center text-md-left mt-3">
                        <button class="btn btn-primary" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
