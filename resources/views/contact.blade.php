<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Ududumbara Community</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com/3.4.0"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f8f8; /* Fallback background */
            color: #333;
        }
        html {
            scroll-behavior: smooth;
        }
        .icon {
            vertical-align: top;
        }
        /* Custom button styling for hover effects */
        .btn-primary {
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="text-gray-800 relative">
    <!-- Blurred Background -->
    <div class="fixed inset-0 z-0">
        <div class="absolute inset-0 bg-cover bg-center blur-sm" style="background-image: url('{{ asset('images/contact/bg.jpg') }}');"></div>
        <div class="absolute inset-0 bg-black opacity-30"></div> <!-- Optional overlay to darken the bg -->
    </div>

    <!-- Main Content Wrapper -->
    <div class="relative z-10">
        <x-header />

        <div class="container max-w-[950px] mx-auto my-20 px-4 md:px-8 lg:px-4 text-white leading-relaxed">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
                <!-- Text Container -->
                <div class="max-w-3xl mx-auto text-lg bg-black/20 p-6 rounded-lg shadow-lg">
                    We'd love to hear from you! Whether you have a question about our products, services, or our community initiatives, please don't hesitate to get in touch. We are here to help and share our story.
                </div>
            </div>

            <div class="content flex flex-col md:flex-row mt-16 gap-8">
                <div class="col-1 w-full md:w-auto bg-black/20 p-8 rounded-lg shadow-lg flex flex-col justify-center space-y-8">
                    <div class="address-line flex items-start">
                        <img alt="location" src="{{ asset('images/contact/marker.png') }}" class="icon bg-white rounded-full p-4 w-14 h-14 object-contain">
                        <div class="contact-info pl-5 pt-1">
                            <div class="contact-info-title text-[#01bdd4] font-semibold text-lg">Address</div>
                            <div>Ududumbara Community Collective,</div>
                            <div>Knuckles Forest Range,</div>
                            <div>Sri Lanka.</div>
                        </div>
                    </div>
                    <div class="address-line flex items-start">
                        <img alt="phone" src="{{ asset('images/contact/phone.png') }}" class="icon bg-white rounded-full p-4 w-14 h-14 object-contain">
                        <div class="contact-info pl-5 pt-1">
                            <div class="contact-info-title text-[#01bdd4] font-semibold text-lg">Phone</div>
                            <div>+94 77 123 4567</div>
                        </div>
                    </div>
                    <div class="address-line flex items-start">
                        <img alt="mail" src="{{ asset('images/contact/mail.png') }}" class="icon bg-white rounded-full p-4 w-14 h-14 object-contain">
                        <div class="contact-info pl-5 pt-1">
                            <div class="contact-info-title text-[#01bdd4] font-semibold text-lg">Email</div>
                            <div>info@ududumbara.community</div>
                        </div>
                    </div>
                </div>
                <div class="col-2 flex-1 bg-white/40 backdrop-blur-lg rounded-lg shadow-lg">
                    <form class="h-full flex flex-col">
                        <div class="form-container text-black p-8 flex-1">
                            <h2 class="text-2xl font-bold mb-6">Send Message</h2>
                            <div class="form-row pb-8">
                                <label class="block text-gray-700 text-sm font-semibold mb-2">Full Name</label>
                                <div>
                                    <input type="text" name="name" class="form-field w-full border-none border-b border-black focus:outline-none focus:border-green-500 pb-2 bg-transparent" placeholder="Your Full Name">
                                </div>
                            </div>
                            <div class="form-row pb-8">
                                <label class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                                <div>
                                    <input type="email" name="email" class="form-field w-full border-none border-b border-black focus:outline-none focus:border-green-500 pb-2 bg-transparent" placeholder="Your Email Address">
                                </div>
                            </div>
                            <div class="form-row pb-8">
                                <label class="block text-gray-700 text-sm font-semibold mb-2">Type your message...</label>
                                <div>
                                    <textarea name="message" class="form-field w-full border-none border-b border-black focus:outline-none focus:border-green-500 pb-2 h-24 resize-none bg-transparent" placeholder="Let us know how we can help..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="p-8 pt-0">
                            <button type="submit" class="send-btn border-0 py-3 px-6 bg-[#01bdd4] text-white font-bold rounded-md hover:bg-opacity-90 transition duration-300 btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <x-footer />
    </div>
</body>
</html>
