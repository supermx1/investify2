<script>
    import Layout from '@/components/frontend/Layout.svelte';
    import { Link } from '@inertiajs/svelte';
    import { SYSTEM } from '@/lib/store';
</script>

<Layout>
    <!-- Hero Section -->
    <header class="relative bg-background-light dark:bg-background-dark pt-20 pb-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <span
                class="inline-block py-1 px-3 rounded-full bg-accent-gold/10 text-accent-gold text-xs font-semibold tracking-wider uppercase mb-6 border border-accent-gold/20 animate-fade-in"
            >
                Our Culture
            </span>
            <h1 class="font-serif text-5xl lg:text-7xl font-medium text-primary dark:text-white leading-tight mb-8 animate-fade-in">
                Strength in <br />
                <span class="italic text-accent-gold">Diversity</span>
            </h1>
            <p
                class="text-xl text-gray-600 dark:text-gray-300 font-light leading-relaxed max-w-3xl mx-auto animate-fade-in"
                style="animation-delay: 0.1s;"
            >
                At {$SYSTEM.siteName}, we believe that diversity and inclusion are not just buzzwords—they are essential elements that create a
                successful and sustainable business.
            </p>
        </div>
        <div class="absolute -z-10 -top-20 -right-20 w-96 h-96 bg-accent-gold/5 rounded-full blur-3xl"></div>
        <div class="absolute -z-10 bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary/10 to-transparent"></div>
    </header>

    <!-- Impact Statistics -->
    <section class="py-16 bg-white dark:bg-primary/5 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Stat 1 -->
                <div class="bg-primary/5 dark:bg-white/5 rounded-2xl p-8 border border-primary/10 dark:border-white/10 text-center">
                    <div class="text-4xl md:text-5xl font-serif text-accent-gold mb-2 font-bold">53%</div>
                    <div class="text-lg font-medium text-primary dark:text-white mb-2">Outperformance</div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Companies with more women on their boards outperformed those with fewer by 53% (Catalyst Study).
                    </p>
                </div>
                <!-- Stat 2 -->
                <div class="bg-primary/5 dark:bg-white/5 rounded-2xl p-8 border border-primary/10 dark:border-white/10 text-center">
                    <div class="text-4xl md:text-5xl font-serif text-accent-gold mb-2 font-bold">Better</div>
                    <div class="text-lg font-medium text-primary dark:text-white mb-2">Decisions</div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Diverse teams make better business decisions up to 87% of the time (McKinsey & Company).
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Women in Leadership -->
    <section class="py-20 bg-background-light dark:bg-background-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">Women in Leadership</h2>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        One of the key areas where {$SYSTEM.siteName} focuses is our commitment to empowering women. We believe that providing equal opportunities
                        is not only the right thing to do, but it’s also critical for business success.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        We are proud to have a diverse team of talented women in leadership roles, driving strategy and innovation. To support this
                        ensuring pipeline, we offer:
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center">
                            <span class="material-icons text-accent-gold mr-2 text-sm mt-1">check_circle</span>
                            <span class="text-gray-600 dark:text-gray-300 text-sm"
                                >Mentorship programs pairing senior leaders with emerging talent.</span
                            >
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons text-accent-gold mr-2 text-sm mt-1">check_circle</span>
                            <span class="text-gray-600 dark:text-gray-300 text-sm">Sponsorship initiatives to advocate for career advancement.</span>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons text-accent-gold mr-2 text-sm mt-1">check_circle</span>
                            <span class="text-gray-600 dark:text-gray-300 text-sm">Equal pay for equal work policy, rigorously audited.</span>
                        </li>
                    </ul>
                </div>
                <div class="relative order-1 lg:order-2">
                    <div class="absolute inset-0 bg-accent-gold/10 transform translate-x-4 translate-y-4 rounded-xl"></div>
                    <img
                        src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=800"
                        alt="Women in Leadership"
                        class="relative rounded-xl shadow-lg w-full h-auto object-cover aspect-[4/3]"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- LGBTQIA+ Support -->
    <section class="py-20 bg-white dark:bg-primary/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="absolute inset-0 bg-accent-gold/10 transform -translate-x-4 translate-y-4 rounded-xl"></div>
                    <img
                        src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800"
                        alt="Inclusive Team"
                        class="relative rounded-xl shadow-lg w-full h-auto object-cover aspect-[4/3]"
                    />
                </div>
                <div>
                    <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">Proudly Inclusive</h2>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        We believe everyone deserves to be treated with respect and dignity, regardless of sexual orientation or gender identity. Our
                        commitment to the LGBTQIA+ community is woven into our corporate fabric.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        Diversity of identity brings diversity of thought. By fostering a safe, supportive environment, we unlock deeper insights for
                        our clients and a greater sense of belonging for our team.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <span class="material-icons text-accent-gold mr-2 text-sm mt-1">verified</span>
                            <span class="text-gray-600 dark:text-gray-300 text-sm">Zero-tolerance policy for discrimination or harassment.</span>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons text-accent-gold mr-2 text-sm mt-1">verified</span>
                            <span class="text-gray-600 dark:text-gray-300 text-sm">Active allyship training programs for all employees.</span>
                        </li>
                        <li class="flex items-center">
                            <span class="material-icons text-accent-gold mr-2 text-sm mt-1">verified</span>
                            <span class="text-gray-600 dark:text-gray-300 text-sm">Support for community initiatives pushing for equality.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Initiatives Grid -->
    <section class="py-24 bg-background-light dark:bg-background-dark border-t border-primary/5 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Our Actions</span>
                <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">Driving Progress</h2>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                    We recognize that promoting diversity and inclusion is an ongoing journey. Here are some of the initiatives we've implemented.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Initiative 1 -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-sm border border-primary/5 dark:border-white/10 hover:border-accent-gold/30 transition-colors"
                >
                    <div class="w-12 h-12 bg-accent-gold/10 rounded-lg flex items-center justify-center mb-6 text-accent-gold">
                        <span class="material-icons">school</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-3">D&I Training</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                        Providing training programs that raise awareness about issues of diversity and inclusion to help employees learn about
                        different cultures, behaviors, and backgrounds.
                    </p>
                </div>

                <!-- Initiative 2 -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-sm border border-primary/5 dark:border-white/10 hover:border-accent-gold/30 transition-colors"
                >
                    <div class="w-12 h-12 bg-accent-gold/10 rounded-lg flex items-center justify-center mb-6 text-accent-gold">
                        <span class="material-icons">diversity_3</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-3">Employee Resource Groups</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                        ERGs are groups of employees who share similar characteristics and come together to discuss and advocate for issues relevant
                        to their group, fostering a sense of community.
                    </p>
                </div>

                <!-- Initiative 3 -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-sm border border-primary/5 dark:border-white/10 hover:border-accent-gold/30 transition-colors"
                >
                    <div class="w-12 h-12 bg-accent-gold/10 rounded-lg flex items-center justify-center mb-6 text-accent-gold">
                        <span class="material-icons">schedule</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-3">Flexible Work Arrangements</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                        Offering flexible work arrangements such as remote work and flexible hours to enable employees to balance their work and
                        personal commitments.
                    </p>
                </div>

                <!-- Initiative 4 -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-sm border border-primary/5 dark:border-white/10 hover:border-accent-gold/30 transition-colors"
                >
                    <div class="w-12 h-12 bg-accent-gold/10 rounded-lg flex items-center justify-center mb-6 text-accent-gold">
                        <span class="material-icons">person_search</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-3">Diverse Hiring Practices</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                        Implementing blind resumes, diversifying recruitment sources, and conducting diverse interview panels to ensure our workforce
                        represents the communities we serve.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <section class="relative bg-primary text-white py-20 overflow-hidden">
        <div
            class="absolute inset-0 opacity-10"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDJgfkV4p5ejGJOCARfhxekNuQWwk-b9Hq0F5tnya6cQe6qqOUCTczb97oABQtJzZb41fEc_oH659AwnV-HzUlxcXbjxp3uS_BdGN3lx2WbqlO0qFmmtEgMnhdvPEWxQg_2pQ2m-VBqm1kgusevag5Jce9VYTSPJmxTdzjV05xnN8LH2SJHTgT7eH3e2KMDVg_2VDN9ll16SRzSxbTtahFVJ_udWwdGUTwwVPcUqtKlC4TnsTUphp8h6djZWtTkgohtbewXdaiz96s');"
        ></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
            <h2 class="font-serif text-3xl md:text-5xl mb-6">Join a Culture of Inclusion</h2>
            <p class="text-gray-300 text-lg mb-10 max-w-2xl mx-auto">
                Discover a workplace where your unique perspective is valued and your potential is limitless.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <Link
                    href="/contact-us"
                    class="bg-accent-gold hover:bg-[#b08d4b] text-white px-8 py-4 rounded-full text-base font-medium transition-all shadow-lg hover:shadow-xl hover:-translate-y-1"
                >
                    Contact Us
                </Link>
            </div>
        </div>
    </section>
</Layout>
