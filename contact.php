<!DOCTYPE html>
<html lang="en">
    <?php include('includes/head.php'); ?>
    <?php include('includes/navbar.php'); ?>

    <body>
        <!-- Shape -->
        <div class="custom-shape-divider-top-1692107995">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <a href="https://wa.me/2348069652888?text=Hello, I would like to make an enquiry about KAA"
            style="position: fixed; bottom: 20px; right: 20px; z-index: 999;" title="WhatsApp" target="_blank"><img
                src="image/whatsapp-icon.svg" class="shadow-md" alt="" width="50px"></a>

        <section class="common-section">
            <div class="container max-w-screen-xl">
                <div class="grid md:grid-cols-2 gap-10">
                    <div>
                        <div class="mb-5">
                            <p class="text-brand font-bold text-xl mb-2">Address</p>
                            <p>
                                <span><i class="bi bi-geo-alt-fill"></i></span> Dadin Kowa,
                                Keffi - Nasarawa State, Nigeria.
                            </p>
                        </div>
                        <div class="mb-5">
                            <p class="text-brand font-bold text-xl mb-2">Phone Number</p>
                            <p><i class="bi bi-telephone-fill"></i> 08069652888</p>
                        </div>

                        <div class="mb-5">
                            <p class="text-brand font-bold text-xl mb-2">Email</p>
                            <p><i class="bi bi-envelope-fill"></i> info@kaa.com</p>
                        </div>
                    </div>
                    <div class="md:flex md:justify-end map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4917.3313755418385!2d7.883601614724588!3d8.86232015841765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1051e572239bc9ef%3A0x723e01b45bcbb48e!2sKing&#39;s%20Ambassadors%20Academy!5e0!3m2!1sen!2sng!4v1692261643481!5m2!1sen!2sng"
                            height="300" width="400" style="border: 0" allowfullscreen=""
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="common-section bg-gray-200 border-gray-700">
            <div class="container max-w-screen-xl">
                <form class="mx-auto">
                    <p class="section-title mb-5">CONTACT US!</p>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="floating_first_name" id="floating_first_name"
                                class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:outline-none focus:ring-0 focus:border-brand peer"
                                placeholder=" " required />
                            <label for="floating_first_name"
                                class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Full
                                name</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="email" name="floating_email" id="floating_email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                                placeholder=" " required />
                            <label for="floating_email"
                                class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                                address</label>
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block mb-2 text-sm  text-gray-400">Your message</label>
                        <textarea id="message" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300 focus:ring-brand focus:border-brand"
                            placeholder="Leave a message..."></textarea>
                    </div>
                    <button type="submit"
                        class="text-white bg-brand hover:bg-brand/90 focus:ring-4 mt-5 focus:outline-none focus:ring-brand font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                        Submit
                    </button>
                </form>
            </div>
        </section>

        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>

</html>