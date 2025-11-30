<!DOCTYPE html>
<html lang="en" prefix="DC: http://purl.org/dc/terms/">
<head>
  <link rel="schema.DC" href="http://purl.org/dc/terms/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visernic Limited - Company Profile</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://i.postimg.cc/26RKc169/icon-1.png">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Visernic Limited is a professional digital agency specializing in UI/UX design, web development, and tech solutions.">
    <meta name="keywords" content="Visernic Limited, UI/UX Design, Web Development, Digital Agency, Tech Solutions, Bangladesh">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Visernic Limited - Company Profile">
    <meta property="og:description" content="Visernic Limited is a digital agency specializing in innovative and human-focused solutions.">
    <!-- Using the banner image you provided -->
    <meta property="og:image" content="https://i.postimg.cc/bwR0cd3C/547687027.png"> 

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Visernic Limited - Company Profile">
    <meta property="twitter:description" content="Professional profile of Visernic Limited, a leading digital agency.">
    <meta property="twitter:image" content="https://i.postimg.cc/bwR0cd3C/547687027.png">

    <!-- == NEWLY ADDED == -->
    
    <!-- Apple Touch Icon (for Mobile Optimization) -->
    <link rel="apple-touch-icon" href="https://i.postimg.cc/26RKc169/icon-1.png">

    <!-- Dublin Core Metadata -->
    <meta name="DC.title" content="Visernic Limited - Company Profile">
    <meta name="DC.description" content="Visernic Limited is a professional digital agency specializing in UI/UX design, web development, and tech solutions.">
    <meta name="DC.subject" content="Visernic Limited, UI/UX Design, Web Development, Digital Agency, Tech Solutions, Bangladesh">
    <meta name="DC.creator" content="Visernic Limited">
    <meta name="DC.publisher" content="Visernic Limited">
    <meta name="DC.type" content="Text">
    <meta name="DC.format" content="text/html">
    <meta name="DC.identifier" content="https://visernic.com/">
    <meta name="DC.language" content="en">
    
    <!-- Google Analytics (Gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BQCJ8Y5S11"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-BQCJ8Y5S11');
    </script>
    
    <!-- == END NEWLY ADDED == -->

    <!-- Tailwind CSS for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- == YOUTUBE API  == -->

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0f172a; /* Back to slate-900 (dark) */
        }
        .action-button, .social-icon {
            transition: all 0.2s ease-in-out;
        }
        .action-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .social-icon:hover {
            transform: translateY(-2px);
            color: #2563eb; /* blue-600 */
        }
        .content-card {
            transition: all 0.3s ease-in-out;
        }
        .content-card:hover {
            transform: translateY(-4px);
            background-color: #334155; /* slate-700 hover for dark mode */
        }
        
        .animated-border-card {
            position: relative;
            overflow: hidden; /* Notun add kora hoyeche */
        }

        /* ==  ROCKET BORDER ANIMATION == */
        .rocket-border {
            position: absolute;
            background-color: #3b82f6; /* blue-500 */
            box-shadow: 0 0 10px #3b82f6, 0 0 5px #3b82f6;
            z-index: 10;
        }

        /* Top border */
        .rocket-top {
            top: 0;
            left: -100%; /* Start off-screen to the left */
            width: 100%;
            height: 3px;
            animation: rocket-horizontal 4s linear infinite;
            animation-delay: 1s; /* Start after right border */
        }

        /* Right border */
        .rocket-right {
            top: -100%; /* Start off-screen at the top */
            right: 0;
            width: 3px;
            height: 100%;
            animation: rocket-vertical 4s linear infinite;
        }

        /* Bottom border */
        .rocket-bottom {
            bottom: 0;
            left: 100%; /* Start off-screen to the right */
            width: 100%;
            height: 3px;
            animation: rocket-horizontal-reverse 4s linear infinite;
            animation-delay: 3s; /* Start after left border */
        }

        /* Left border */
        .rocket-left {
            top: 100%; /* Start off-screen at the bottom */
            left: 0;
            width: 3px;
            height: 100%;
            animation: rocket-vertical-reverse 4s linear infinite;
            animation-delay: 2s; /* Start after top border */
        }

        @keyframes rocket-horizontal {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        
        @keyframes rocket-horizontal-reverse {
            0% { left: 100%; }
            100% { left: -100%; }
        }

        @keyframes rocket-vertical {
            0% { top: -100%; }
            100% { top: 100%; }
        }
        
        @keyframes rocket-vertical-reverse {
            0% { top: 100%; }
            100% { top: -100%; }
        }
        /* == ROCKET BORDER ANIMATION == */

        /* == VIDEO BACKGROUND CSS  == */
        #player-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1; /* Content (z-20) o Border (z-10) er niche */
            border-radius: 1.1rem; /* Match the card's rounded-2xl */
        }
        /* == #player CSS RULE-TI REMOVE KORA HOYECHE == */
        
        /* == VIDEO BACKGROUND CSS  == */
        
        /* == NEWLY ADDED: Print-Friendly CSS == */
        @media print {
            body {
                background-color: #ffffff !important; /* Force white background for print */
                color: #000000 !important; /* Force black text */
            }
            
            /* Hide non-essential elements */
            .action-button, 
            #downloadVcardBtn,
            footer .social-icon,
            hr,
            .animated-border-card,
            .rocket-border,
            #player-container {
                display: none !important;
            }

            /* Ensure content cards print well */
            .content-card, 
            .animated-border-card {
                background-color: #ffffff !important;
                border: 1px solid #ddd !important;
                box-shadow: none !important;
                page-break-inside: avoid; /* Try to keep cards from splitting across pages */
            }

            /* Print header card */
            .animated-border-card {
                display: block !important;
                padding: 1.5rem !important; /* Adjust padding for print */
            }
            
            /* Force text colors to be dark for printing */
            h1, h2, h3, p, span, div, blockquote, a {
                color: #000000 !important;
            }
            
            /* Hide icons, but keep spacing */
            i.fas, i.fab {
                visibility: hidden;
            }
            
            /* Ensure links are visible */
            a {
                color: #0000ee !important; /* Standard blue link color for print */
                text-decoration: underline !important;
            }
            
            /* Show QR code (it's useful on paper) */
            img[alt="Contact QR Code"] {
                display: block !important;
            }
            
            /* Ensure main layout works */
            main {
                display: block !important;
            }
            
            footer {
                text-align: center !important;
                margin-top: 20px;
            }
        }
        /* == END PRINT CSS == */
        
    </style>
</head>
<body class="text-slate-200"> <!-- Back to dark mode text -->

    <div class="w-full max-w-5xl mx-auto px-4 py-8 sm:py-12">
        <!-- Header Section -->
        <!-- Profile Info Section -->
        <section class="animated-border-card text-center p-8 sm:p-12 bg-slate-800 rounded-2xl"> <!-- Back to bg-slate-800 -->
            
            <div id="player-container" class="opacity-30">
           <iframe
              src="https://player.vimeo.com/video/1081235250?background=1&amp;autoplay=1&amp;loop=1&amp;muted=1"
              title="Visernic Limited Background Video"
              style="position:absolute;top:0;left:0;width:100%;height:100%;border:0;"
              allow="autoplay; fullscreen; picture-in-picture">
           </iframe>
            </div>

            <!-- NOTUN ROCKET BORDER SPAN GULO ADD KORA HOYECHE -->
            <span class="rocket-border rocket-top"></span>
            <span class="rocket-border rocket-right"></span>
            <span class="rocket-border rocket-bottom"></span>
            <span class="rocket-border rocket-left"></span>

            <!-- Added Logo directly here -->
            <!-- z-index add kora hoyeche jate content border er upore thake -->
            <img class="relative z-20 w-32 h-32 rounded-full shadow-lg border-0 border-white mx-auto bg-white p-0.1" src="https://i.postimg.cc/26RKc169/icon-1.png" onerror="this.onerror=null;this.src='https://placehold.co/128x128/e2e8f0/4a5568?text=Logo';" alt="Visernic Logo">
            
            <div class="relative z-20 flex items-center justify-center mt-6"> <!-- z-index add kora hoyeche -->
                <h1 class="text-2xl font-extrabold text-white">Visernic Limited</h1> <!-- Back to text-white -->
                <!-- Verified Badge -->
                <span class="ml-1 text-blue-500" title="Verified Business">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a.75.75 0 00-1.06-1.06L9 10.94l-1.72-1.72a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.06 0l4.25-4.25z" clip-rule="evenodd" /></svg>
                </span>
            </div>
            <p class="relative z-20 text-[13px] text-slate-300 font-medium mt-1"> <!-- z-index add, Back to text-slate-300 -->
                Professional Web Development & Tech Solutions
            </p>
            
            <!-- Action Buttons -->
             <div class="relative z-20 mt-6 flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 w-full">
        <a href="mailto:contact@visernic.com" 
       class="action-button bg-blue-700 text-white font-bold text-sm py-3 px-4 rounded-full flex items-center justify-center hover:bg-blue-700 w-full sm:w-auto">
        <i class="fas fa-envelope mr-2"></i> Email Us
      </a>
      <a href="tel:+447577062211" 
       class="action-button bg-slate-700 text-slate-200 font-bold text-sm py-3 px-4 rounded-full flex items-center justify-center hover:bg-slate-600 w-full sm:w-auto">
        <i class="fas fa-phone mr-2"></i> Call Us
      </a>
      <a href="#" id="downloadVcardBtn" download="Visernic_Limited.vcf" 
       class="action-button bg-slate-700 text-slate-200 font-bold text-sm py-3 px-4 rounded-full flex items-center justify-center hover:bg-slate-600 w-full sm:w-auto">
        <i class="fas fa-download mr-2"></i> Save Contact
    </a>
            </div>

        </section>

        <!-- Main Content Grid -->
        <main class="mt-10 grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Left Column (Main Content) -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- About Us Card -->
                <div class="content-card bg-slate-800 p-6 sm:p-8 rounded-2xl shadow-md border-t-4 border-t-blue-500"> <!-- Dark mode bg, border -->
                    <h2 class="text-2xl font-bold text-white mb-4">About Us</h2> <!-- Dark mode text -->
                    <p class="text-base leading-relaxed text-slate-300"><a href="https://visernic.com" target="_blank" rel="noopener noreferrer" class="font-semibold text-blue-500 hover:underline">Visernic Limited</a> is a forward-thinking digital agency dedicated to creating innovative, reliable, and human-focused solutions. We partner with businesses of all sizes to translate vision into reality, driving technological growth and empowering clients through creativity, precision, and integrity.</p> <!-- Dark mode text -->
                </div>
                
                <!-- Our Services Card -->
                <div class="content-card bg-slate-800 p-6 sm:p-8 rounded-2xl shadow-md border-t-4 border-t-blue-500"> <!-- Dark mode bg, border -->
                    <h2 class="text-2xl font-bold text-white mb-5">Our Services</h2> <!-- Dark mode text -->
                    <div class="space-y-6">
                         <div class="flex items-start">
                             <i class="fas fa-pencil-ruler text-blue-500 w-6 text-center mt-1"></i>
                             <div class="ml-4">
                                 <h3 class="font-semibold text-white text-base">Professional UI/UX Design</h3> <!-- Dark mode text, choto kora hoise (lg -> base) -->
                                 <p class="text-sm text-slate-300">Creating intuitive and beautiful user interfaces that provide a seamless user experience.</p> <!-- Dark mode text, choto kora hoise (md -> sm) -->
                             </div>
                         </div>
                        <div class="flex items-start">
                           <i class="fas fa-code text-blue-500 w-6 text-center mt-1"></i>
                           <div class="ml-4">
                                 <h3 class="font-semibold text-white text-base">Web & Software Development</h3> <!-- Dark mode text, choto kora hoise (lg -> base) -->
                                 <p class="text-sm text-slate-300">Building fast, secure, and scalable websites and custom software solutions.</p> <!-- Dark mode text, choto kora hoise (md -> sm) -->
                             </div>
                        </div>
                        <div class="flex items-start">
                           <i class="fas fa-bullhorn text-blue-500 w-6 text-center mt-1"></i>
                           <div class="ml-4">
                                 <h3 class="font-semibold text-white text-base">Digital Marketing & SEO</h3> <!-- Dark mode text, choto kora hoise (lg -> base) -->
                                 <p class="text-sm text-slate-300">Driving growth and visibility with data-driven marketing strategies and search engine optimization.</p> <!-- Dark mode text, choto kora hoise (md -> sm) -->
                             </div>
                        </div>
                        <!-- Notun Domain Hosting Service add kora hoise -->
                        <div class="flex items-start">
                           <i class="fas fa-server text-blue-500 w-6 text-center mt-1"></i>
                           <div class="ml-4">
                                 <h3 class="font-semibold text-white text-base">Domain & Hosting</h3> <!-- choto kora hoise (lg -> base) -->
                                 <p class="text-sm text-slate-300">Reliable domain registration and high-performance web hosting solutions.</p> <!-- choto kora hoise (md -> sm) -->
                             </div>
                        </div>
                    </div>
                </div>

                <!-- Projects Highlights Card -->
                <div class="content-card bg-slate-800 p-6 sm:p-8 rounded-2xl shadow-md border-t-4 border-t-blue-500"> <!-- Dark mode bg, border -->
                    <h2 class="text-2xl font-bold text-white mb-5">Projects Highlights</h2> <!-- Dark mode text -->
                    <div class="space-y-5">
                        <div>
                            <h3 class="font-semibold text-white text-base">Enterprise Management Software</h3> <!-- Dark mode text, choto kora hoise (lg -> base) -->
                            <p class="text-base text-slate-300">Developed a scalable ERP system improving internal efficiency and automation across departments for a major client.</p> <!-- Dark mode text -->
                        </div>
                         <div>
                            <h3 class="font-semibold text-white text-base">Full-Stack E-Commerce Platform</h3> <!-- Dark mode text, choto kora hoise (lg -> base) -->
                            <p class="text-base text-slate-300">Architected and built a custom e-commerce platform from the ground up, now serving over 50,000 active users.</p> <!-- Dark mode text -->
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card -->
                <div class="content-card bg-slate-800 p-6 sm:p-8 rounded-2xl shadow-md border-t-4 border-t-blue-500"> <!-- Dark mode bg, border -->
                    <h2 class="text-2xl font-bold text-white mb-5">What Our Clients Say</h2> <!-- Dark mode text -->
                    <div class="space-y-5">
                        <blockquote class="text-base text-slate-300 italic border-l-4 border-blue-300 pl-4"> <!-- Dark mode text, border -->
                            "Visernic's ability to understand our complex requirements and deliver a polished, functional product was remarkable. They are true partners in innovation."
                        </blockquote>
                        <p class="text-right font-semibold text-slate-300">- Jane Doe, COO of TechCorp</p> <!-- Dark mode text -->
                    </div>
                </div>

                <!-- Why Choose Us Card (More Features) -->
                <div class="content-card bg-slate-800 p-6 sm:p-8 rounded-2xl shadow-md border-t-4 border-t-blue-500"> <!-- Dark mode bg, border -->
                    <h2 class="text-2xl font-bold text-white mb-5">Why Choose Us?</h2> <!-- Dark mode text -->
                    <div class="space-y-5">
                        <div class="flex items-start">
                             <i class="fas fa-user-check text-blue-500 w-6 text-center mt-1"></i>
                             <div class="ml-4">
                                 <h3 class="font-semibold text-white text-base">Client-Centric Approach</h3> <!-- Dark mode text, choto kora hoise (lg -> base) -->
                                 <p class="text-sm text-slate-300">We put your needs at the center of everything we do, ensuring a collaborative and transparent process.</p> <!-- Dark mode text, choto kora hoise (md -> sm) -->
                             </div>
                         </div>
                         <div class="flex items-start">
                             <i class="fas fa-shield-alt text-blue-500 w-6 text-center mt-1"></i>
                             <div class="ml-4">
                                 <h3 class="font-semibold text-white text-base">Quality & Reliability</h3> <!-- Dark mode text, choto kora hoise (lg -> base) -->
                                 <p class="text-sm text-slate-300">Our solutions are built to last, focusing on clean code, security, and scalable architecture.</p> <!-- Dark mode text, choto kora hoise (md -> sm) -->
                             </div>
                         </div>
                         <div class="flex items-start">
                             <i class="fas fa-headset text-blue-500 w-6 text-center mt-1"></i>
                             <div class="ml-4">
                                 <h3 class="font-semibold text-white text-base">Dedicated Support</h3> <!-- Dark mode text, choto kora hoise (lg -> base) -->
                                 <p class="text-sm text-slate-300">We provide ongoing support to ensure your digital assets continue to perform optimally.</p> <!-- Dark mode text, choto kora hoise (md -> sm) -->
                             </div>
                         </div>
                         <!-- Notun 4th item add kora hoise -->
                         <div class="flex items-start">
                             <i class="fas fa-lightbulb text-blue-500 w-6 text-center mt-1"></i>
                             <div class="ml-4">
                                 <h3 class="font-semibold text-white text-base">Innovative Solutions</h3>
                                 <p class="text-sm text-slate-300">We leverage the latest technologies to deliver creative and effective solutions for your business.</p>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column (Sidebar) -->
            <div class="lg:col-span-1 space-y-8">
                
                <!-- Contact Information Card -->
                <div class="content-card bg-slate-800 p-6 sm:p-8 rounded-2xl shadow-md border-t-4 border-t-slate-500"> <!-- Dark mode bg, border -->
                    <h2 class="text-2xl font-bold text-white mb-4">Contact Information</h2> <!-- Dark mode text -->
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-envelope text-slate-400 w-5 text-center"></i> <!-- Dark mode icon -->
                            <span class="ml-3 font-medium text-slate-300 break-all">contact@visernic.com</span> <!-- Dark mode text -->
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-headset text-slate-400 w-5 text-center"></i> <!-- Dark mode icon -->
                            <span class="ml-3 font-medium text-slate-300 break-all">support@visernic.com</span> <!-- Dark mode text -->
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-phone text-slate-400 w-5 text-center"></i> <!-- Dark mode icon -->
                            <span class="ml-3 font-medium text-slate-300">+44 7577 062211</span> <!-- Dark mode text -->
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt text-slate-400 w-5 text-center pt-1"></i> <!-- Dark mode icon -->
                            <span class="ml-3 text-sm text-slate-300">Nazipur, Patnila, Naogaon</span> <!-- Dark mode text, choto kora hoise (font-small -> text-sm) -->
                        </div>
                    </div>
                    <hr class="my-6 border-slate-600"> <!-- Dark mode hr -->
                    <!-- QR Code -->
                    <div class="text-center">
                        <h3 class="text-lg font-semibold text-white mb-2">Scan QR Code</h3> <!-- Dark mode text -->
                        <div class="flex justify-center">
                            <!-- Updated QR Code for Visernic Limited -->
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&data=BEGIN%3AVCARD%0AVERSION%3A3.0%0AN%3ALimited%3BVisernic%0AFN%3AVisernic%20Limited%0AORG%3AVisernic%20Limited%0ATEL%3BTYPE%3DWORK%2CVOICE%3A%2B447577062211%0AEMAIL%3Acontact%40visernic.com%0AEMAIL%3Asupport%40visernic.com%0AADR%3BTYPE%3DWORK%3A%3B%3BNazipur%3BNaogaon%3B6540%3BBangladesh%0AEND%3AVCARD" alt="Contact QR Code" class="rounded-lg bg-white p-2"> <!-- Added bg-white to QR -->
                        </div>
                    </div>
                </div>
                
                <!-- Company Details Card -->
                <div class="content-card bg-slate-800 p-6 sm:p-8 rounded-2xl shadow-md border-t-4 border-t-slate-500"> <!-- Dark mode bg, border -->
                    <h2 class="text-2xl font-bold text-white mb-4">Company Details</h2> <!-- Dark mode text -->
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-user-tie text-slate-400 w-5 text-center pt-1"></i> <!-- Dark mode icon -->
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-slate-400">Founder</h3> <!-- Dark mode text -->
                                <p class="font-semibold text-slate-200">MD Mostafa Niloy</p> <!-- Dark mode text -->
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-calendar-alt text-slate-400 w-5 text-center pt-1"></i> <!-- Dark mode icon -->
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-slate-400">Founded</h3> <!-- Dark mode text -->
                                <p class="font-semibold text-slate-200">December 01, 2024</p> <!-- Dark mode text -->
                            </div>
                        </div>
                        <!-- NOTUN LICENSE NUMBER ADD KORA HOYECHE -->
                        <div class="flex items-start">
                            <i class="fas fa-id-card text-slate-400 w-5 text-center pt-1"></i> <!-- Dark mode icon -->
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-slate-400">License No.</h3> <!-- Dark mode text -->
                                <p class="font-semibold text-slate-200">16613617</p> <!-- Dark mode text -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Core Competencies Card -->
                <div class="content-card bg-slate-800 p-6 sm:p-8 rounded-2xl shadow-md border-t-4 border-t-slate-500"> <!-- Dark mode bg, border -->
                    <h2 class="text-2xl font-bold text-white mb-4">Our Expertise</h2> <!-- Dark mode text -->
                    <div class="space-y-3">
                        <div class="flex items-center"><i class="fas fa-check-circle text-blue-500 w-5 text-center"></i><span class="ml-3 font-medium text-slate-200">Web Development</span></div>
                        <div class="flex items-center"><i class="fas fa-check-circle text-blue-500 w-5 text-center"></i><span class="ml-3 font-medium text-slate-200">Software Engineering</span></div>
                        <div class="flex items-center"><i class="fas fa-check-circle text-blue-500 w-5 text-center"></i><span class="ml-3 font-medium text-slate-200">Business Strategy</span></div>
                        <div class="flex items-center"><i class="fas fa-check-circle text-blue-500 w-5 text-center"></i><span class="ml-3 font-medium text-slate-200">Project Leadership</span></div>
                        <div class="flex items-center"><i class="fas fa-check-circle text-blue-500 w-5 text-center"></i><span class="ml-3 font-medium text-slate-200">Client Relations</span></div>
                        <div class="flex items-center"><i class="fas fa-check-circle text-blue-500 w-5 text-center"></i><span class="ml-3 font-medium text-slate-200">Digital Marketing</span></div>
                        <div class="flex items-center"><i class="fas fa-check-circle text-blue-500 w-5 text-center"></i><span class="ml-3 font-medium text-slate-200">Cloud Solutions</span></div>
                        <div class="flex items-center"><i class="fas fa-check-circle text-blue-500 w-5 text-center"></i><span class="ml-3 font-medium text-slate-200">Team Collaboration</span></div>
                    </div>
                </div>

                <!-- Our Mission Card (Replaced Education) -->
                <div class="content-card bg-slate-800 p-6 sm:p-8 rounded-2xl shadow-md border-t-4 border-t-slate-500"> <!-- Dark mode bg, border -->
                    <h2 class="text-2xl font-bold text-white mb-5">Our Mission</h2> <!-- RE-STYLED: title -->
                    <div class="space-y-5"> <!-- RE-STYLED: content -->
                        <div class="flex items-start">
                            <i class="fas fa-rocket text-blue-500 w-6 text-center mt-1"></i>
                            <div class="ml-4">
                                <h3 class="font-semibold text-white text-base">Drive Innovation</h3> <!-- choto kora hoise (lg -> base) -->
                                <p class="text-sm text-slate-300">To relentlessly innovate and deliver cutting-edge solutions that provide real-world value.</p> <!-- TEXT CHOTO KORA HOYECHE -->
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-users text-blue-500 w-6 text-center mt-1"></i>
                            <div class="ml-4"> <!-- TYPO FIXED: classs="ml-4" -> class="ml-4" -->
                                <h3 class="font-semibold text-white text-base">Empower Clients</h3> <!-- choto kora hoise (lg -> base) -->
                                <p class="text-sm text-slate-300">To empower client growth and success by being a trusted, dedicated technology partner.</p> <!-- NOTUN TEXT: SOMAN KORA HOYECHE -->
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-handshake text-blue-500 w-6 text-center mt-1"></i>
                            <div class="ml-4">
                                <h3 class="font-semibold text-white text-base">Build with Integrity</h3> <!-- choto kora hoise (lg -> base) -->
                                <p class="text-sm text-slate-300">To uphold the highest standards of integrity and build lasting trust in all partnerships.</p> <!-- NOTUN TEXT: SOMAN KORA HOYECHE -->
                            </div>
                        </div>
                        <!-- 4TH ITEM SHORIYE FELA HOYECHE -->
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <!-- Footer -->
    <footer class="text-center text-sm text-slate-400 pt-8 pb-8 flex flex-col items-center"> <!-- Dark mode text -->
        <!-- Social Media Links (Moved from header) -->
        <div class="flex items-center justify-center space-x-6 text-slate-400 order-1 mb-4"> <!-- Dark mode text -->
            <a href="https://instagram.com/visernic" target="_blank" class="social-icon"><i class="fab fa-instagram fa-lg"></i></a>
            <a href="https://facebook.com/visernic" target="_blank" class="social-icon"><i class="fab fa-facebook fa-lg"></i></a>
            <a href="https://x.com/visernic" target="_blank" class="social-icon"><i class="fab fa-twitter fa-lg"></i></a>
            <a href="https://github.com/visernic" target="_blank" class="social-icon"><i class="fab fa-github fa-lg"></i></a>
        </div>
        <div class="order-2"> <!-- Added order-2 -->
            &copy; 2025 <a href="https://visernic.com" target="_blank" rel="noopener noreferrer" class="font-semibold text-blue-500 hover:underline">Visernic Limited</a>. All Rights Reserved. <!-- Dark mode link -->
        </div>
    </footer>

    <script>
        // This script creates a vCard file on-the-fly for the 'Save Contact' button
        document.addEventListener('DOMContentLoaded', function() {
            const downloadButton = document.getElementById('downloadVcardBtn');
            
            if (downloadButton) {
                // vCard data string for Visernic Limited
                const vCardData = `BEGIN:VCARD
VERSION:3.0
N:Limited;Visernic;;;
FN:Visernic Limited
ORG:Visernic Limited
TEL;TYPE=WORK,VOICE:+447577062211
EMAIL:contact@visernic.com
EMAIL:support@visernic.com
ADR;TYPE=WORK:;;Nazipur;Nagaon;6540;Bangladesh
END:VCARD`;

                try {
                    // Create a Blob (binary large object) from the vCard string
                    const blob = new Blob([vCardData], { type: 'text/vcard;charset=utf-8' });
                    // Create a URL for the Blob
                    const url = URL.createObjectURL(blob);
                    // Set the download button's href to this new URL
                    downloadButton.href = url;
                } catch (e) {
                    // Handle any errors
                    console.error("vCard creation failed.", e);
                    if(downloadButton) downloadButton.style.display = 'none';
                }
            }
        });

        // == YOUTUBE PLAYER SCRIPT-TI ==
    </script>
</body>
</html>
