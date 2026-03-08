<script>
    import Layout from '@/components/frontend/Layout.svelte';
    import { Link } from '@inertiajs/svelte';
    import { SYSTEM } from '@/lib/store';
    const team = $state([
        {
            name: 'James Sterling',
            role: 'Chief Executive Officer',
            image: 'https://placehold.co/600x800',
        },
        {
            name: 'Elena Vance',
            role: 'Chief Investment Officer',
            image: 'https://placehold.co/600x800',
        },
        {
            name: 'Marcus Chen',
            role: 'Head of Private Markets',
            image: 'https://placehold.co/600x800',
        },
        {
            name: 'Sarah Jenkins',
            role: 'Head of Estate Planning',
            image: 'https://placehold.co/600x800',
        },
    ]);
</script>

<Layout>
    <!-- Hero Section -->
    <header class="relative bg-background-light dark:bg-background-dark pt-20 pb-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <span
                class="inline-block py-1 px-3 rounded-full bg-accent-gold/10 text-accent-gold text-xs font-semibold tracking-wider uppercase mb-6 border border-accent-gold/20 animate-fade-in"
            >
                About {$SYSTEM.siteName}
            </span>
            <h1 class="font-serif text-5xl lg:text-7xl font-medium text-primary dark:text-white leading-tight mb-8 animate-fade-in">
                Partner in Your <br />
                <span class="italic text-accent-gold">Financial Legacy</span>
            </h1>
            <p
                class="text-xl text-gray-600 dark:text-gray-300 font-light leading-relaxed max-w-3xl mx-auto animate-fade-in"
                style="animation-delay: 0.1s;"
            >
                {$SYSTEM.siteName} is a global investment firm specialized in comprehensive solutions. We are committed to delivering high-value strategies
                while fostering a culture of innovation and partnership.
            </p>
        </div>
        <div class="absolute -z-10 -top-20 -right-20 w-96 h-96 bg-accent-gold/5 rounded-full blur-3xl"></div>
        <div class="absolute -z-10 bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary/10 to-transparent"></div>
    </header>

    <!-- Who We Are Section -->
    <section class="py-24 bg-background-light dark:bg-background-dark border-b border-primary/5 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="absolute inset-0 bg-accent-gold/10 transform -translate-x-4 translate-y-4 rounded-xl"></div>
                    <img
                        src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800"
                        alt="Corporate Headquarters"
                        class="relative rounded-xl shadow-lg w-full h-auto object-cover aspect-[4/3]"
                    />
                </div>
                <div>
                    <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">Global Vision, Personal Focus</h2>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        {$SYSTEM.siteName} offers a range of investment strategies to meet the unique needs of clients, including private equity, mutual
                        funds, real estate, infrastructure, and securities.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-8">
                        Our commitment to innovation and personalized solutions has defined us, with investments spanning across sectors and borders.
                        We empower investors worldwide, delivering sustainable and impactful solutions.
                    </p>

                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <span class="block text-3xl font-serif text-accent-gold mb-1">96</span>
                            <span class="text-sm text-gray-500 font-medium uppercase tracking-wider">Remote Locations</span>
                        </div>
                        <div>
                            <span class="block text-3xl font-serif text-accent-gold mb-1">1,000+</span>
                            <span class="text-sm text-gray-500 font-medium uppercase tracking-wider">Professionals</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- History Timeline -->
    <section class="py-24 bg-white dark:bg-primary/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-20">
                <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-4">History of Growth</h2>
                <div class="w-16 h-0.5 bg-accent-gold mx-auto"></div>
            </div>
            <div class="relative">
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-px bg-primary/10 dark:bg-white/10 hidden md:block"></div>

                <!-- 1982 -->
                <div class="relative z-10 mb-20 md:grid md:grid-cols-2 md:gap-16 items-center">
                    <div class="text-right md:pr-10 mb-6 md:mb-0">
                        <span class="font-serif text-5xl md:text-6xl text-accent-gold block mb-2 opacity-90">1982</span>
                        <h3 class="text-xl font-medium text-primary dark:text-white mb-2">The Foundation</h3>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed text-sm md:text-base">
                            Our journey began with a bold vision: to transform how individuals and institutions approach financial growth.
                        </p>
                    </div>
                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-white border-4 border-accent-gold rounded-full hidden md:block shadow-[0_0_0_4px_rgba(197,160,89,0.2)]"
                    ></div>
                    <div class="md:pl-10">
                        <div class="relative h-64 w-full rounded-lg overflow-hidden shadow-soft group">
                            <div class="absolute inset-0 bg-primary/20 group-hover:bg-primary/0 transition-colors duration-500"></div>
                            <img
                                alt="Historical architecture"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTDNDSsrlvzIxBFLMLkFymUZHA-PuUZdZ0lehcft06XMJcKP0Ra2QVhkISlVJT5zHlwx4Q8aVfWo79IONCEZfl8aGUhihK71tBMqQDcNl15Mf3v6HQdfzGPx89eHEFdRJPVczJEuaksPd1sZNehU1nQZzRa8xW1R8dawVdLGX9hUDkXhufyjIy7v4vO5vtK9yxvw9PZj9D51xNVoNYChehxDxyuokfJp3bbmRL-O3xxB5Fw7USkcNefeOwK0svDBm_eZWn8iTdtgU"
                            />
                        </div>
                    </div>
                </div>

                <!-- 1998 -->
                <div class="relative z-10 mb-20 md:grid md:grid-cols-2 md:gap-16 items-center flex-row-reverse">
                    <div class="md:col-start-2 text-left md:pl-10 mb-6 md:mb-0 order-2 md:order-none">
                        <span class="font-serif text-5xl md:text-6xl text-accent-gold block mb-2 opacity-90">1998</span>
                        <h3 class="text-xl font-medium text-primary dark:text-white mb-2">Global Expansion</h3>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed text-sm md:text-base">
                            Opened headquarters in New York and Singapore, bridging Eastern and Western markets to offer true global asset
                            diversification.
                        </p>
                    </div>
                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-white border-4 border-accent-gold rounded-full hidden md:block shadow-[0_0_0_4px_rgba(197,160,89,0.2)]"
                    ></div>
                    <div class="md:col-start-1 md:pr-10 text-right">
                        <div class="relative h-64 w-full rounded-lg overflow-hidden shadow-soft group ml-auto">
                            <div class="absolute inset-0 bg-primary/20 group-hover:bg-primary/0 transition-colors duration-500"></div>
                            <img
                                alt="Modern corporate office"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMy-qhvfI020DR1j_32NmizV8fXGmC2i4L-lBAYNxXBwTmX23z6YiK32TgfOIetZHSf6KS2bO7ICYDB19hI3nR2_aAUA4-lx6ussiPcUFWyxPDStOMF8OCBCudOV6KLVr4WGhqLF6mt3ZDnbGHIrgSa17CKF0ffbUSggRepqkcK4173GXF8uEx9CV642kxnIsabcJvTJvqqZBe4b_fwk1LMbHVP6a9KuCROcCOxwCeMhTIiWoykhErPnRg6Fd6th00RABwVHQMnWk"
                            />
                        </div>
                    </div>
                </div>

                <!-- 2010 -->
                <div class="relative z-10 mb-20 md:grid md:grid-cols-2 md:gap-16 items-center">
                    <div class="text-right md:pr-10 mb-6 md:mb-0">
                        <span class="font-serif text-5xl md:text-6xl text-accent-gold block mb-2 opacity-90">2010</span>
                        <h3 class="text-xl font-medium text-primary dark:text-white mb-2">Technological Integration</h3>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed text-sm md:text-base">
                            Launched the proprietary '{$SYSTEM.siteName} Insight' platform, providing clients with institutional-grade real-time analytics
                            and transparency.
                        </p>
                    </div>
                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-white border-4 border-accent-gold rounded-full hidden md:block shadow-[0_0_0_4px_rgba(197,160,89,0.2)]"
                    ></div>
                    <div class="md:pl-10">
                        <div class="relative h-64 w-full rounded-lg overflow-hidden shadow-soft group">
                            <div class="absolute inset-0 bg-primary/20 group-hover:bg-primary/0 transition-colors duration-500"></div>
                            <img
                                alt="Digital analytics"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5V1318fkMDKenAnb0-wj39pA2I-UmaDV_h_WWThG_ApnbZ5PfSfaNK2kNXWKhnOu7w8H8yql79Og9IWD6jkgGgIzS-IQzxoxJoQacvqtkPw4EHOas8vasO27cJnAHEqAMs0-mVhiicSZLGw-bM9JqiUC1Q9Jp1AJ2mubSn8gs1PhSEjT0te1nPFWHrYKH9n-Nz-Ohklq7sJwfOEPmma1wT0Sk3PH_owuxytkPssk98GzbfvvLL18nrlg9uCWT6iBsjcxqYdGx3-4"
                            />
                        </div>
                    </div>
                </div>

                <!-- 2023 -->
                <div class="relative z-10 md:grid md:grid-cols-2 md:gap-16 items-center flex-row-reverse">
                    <div class="md:col-start-2 text-left md:pl-10 mb-6 md:mb-0 order-2 md:order-none">
                        <span class="font-serif text-5xl md:text-6xl text-accent-gold block mb-2 opacity-90">2023</span>
                        <h3 class="text-xl font-medium text-primary dark:text-white mb-2">Sustainable Future</h3>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed text-sm md:text-base">
                            Surpassed $50B in assets under management while pioneering our Green Legacy fund for sustainable multigenerational growth.
                        </p>
                    </div>
                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-white border-4 border-accent-gold rounded-full hidden md:block shadow-[0_0_0_4px_rgba(197,160,89,0.2)]"
                    ></div>
                    <div class="md:col-start-1 md:pr-10 text-right">
                        <div class="relative h-64 w-full rounded-lg overflow-hidden shadow-soft group ml-auto">
                            <div class="absolute inset-0 bg-primary/20 group-hover:bg-primary/0 transition-colors duration-500"></div>
                            <img
                                alt="Sustainable energy concept"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDubRTdIGHtwocaYNSTnwxTnTTh7_uRz8dTh7q_xT5Cmpvi-HaW1ECpYwMON55wQRSoDOOvmHyDxGgYvHyfBVSMZSkaIWgGm6AZisODHnNbODECKVsvoEP7pKJPAqHxy5IosZyDYEJfdBCZg9gEkQHs09am6-3MSDHlaIxTatdyHHiIu16Pk7_kPxtEnIpQ4ZoM-mxGjvo0KuBq_ovO5tWPDYLYIjqBjbcoN-z6ecJLekwOy5GpYqrN2dU2fb207R3gX_dEAtmPLvs"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Executive Leadership -->
    <section class="py-24 bg-background-light dark:bg-background-dark border-t border-primary/5 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-xl">
                    <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Our People</span>
                    <h2 class="font-serif text-3xl md:text-5xl text-primary dark:text-white mb-4">Executive Leadership</h2>
                    <p class="text-gray-500 dark:text-gray-400">
                        We are proud to have a team of highly experienced professionals with a wealth of knowledge in global markets, financial
                        planning, and research.
                    </p>
                </div>
                <Link
                    class="inline-flex items-center text-primary dark:text-white font-medium hover:text-accent-gold transition-colors group"
                    href="/contact-us"
                >
                    View Full Team <span class="material-icons ml-2 group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </Link>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                {#each team as member}
                    <div class="group">
                        <div class="relative overflow-hidden rounded-lg mb-6 aspect-[3/4]">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10 flex flex-col justify-end p-6"
                            >
                                <div class="flex gap-4">
                                    <a class="text-white hover:text-accent-gold transition-colors" href="javascript:void(0)"
                                        ><span class="material-icons">mail</span></a
                                    >
                                    <a class="text-white hover:text-accent-gold transition-colors" href="javascript:void(0)"
                                        ><img
                                            alt="LinkedIn"
                                            class="w-6 h-6 invert"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjTJsn4Gqf1hpcwSecCNDq-M_UO6vIERqZE15r6zhr-xtE4z1EwhdHxh5lBFiwIFSN7UKEH3xGbXTZMH2904nL5X7dQqpQB7xkFqPtnN-0SYG1xNME1nxv_ugepPYUCeSyh1shoRvE3BJFhLT0aEY9pGj5FIhR1cy4MYExcTOKcQGFBEmQSVb0zD8KVUpM2AxTGSGw33oipjAkmIKiBJbcM1SeT_9Rf0kUISXWpDZ04U6iGYzy-jGc_kLRiDj9Xfe4EJbaFysqbsA"
                                        /></a
                                    >
                                </div>
                            </div>
                            <img
                                alt={member.name}
                                class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500"
                                src={member.image}
                            />
                        </div>
                        <h3 class="font-serif text-xl text-primary dark:text-white group-hover:text-accent-gold transition-colors">{member.name}</h3>
                        <p class="text-sm font-medium text-gray-400 uppercase tracking-wide mt-1">{member.role}</p>
                        <div class="w-8 h-px bg-accent-gold mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                {/each}
            </div>
        </div>
    </section>

    <!-- Investment Divisions -->
    <section class="py-24 bg-primary text-white relative overflow-hidden">
        <!-- Abstract Bg -->
        <div
            class="absolute inset-0 opacity-10"
            style="background-image: radial-gradient(#C5A059 1px, transparent 1px); background-size: 20px 20px;"
        ></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Our Expertise</span>
                <h2 class="font-serif text-3xl md:text-4xl mb-6">Specialized Divisions</h2>
                <p class="text-gray-300 leading-relaxed">
                    {$SYSTEM.siteName} has a diverse portfolio of investment vehicles. Each division has a unique investment strategy tailored to its specific
                    market segment.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Division 1 -->
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-xl hover:bg-white/10 transition-colors group">
                    <div class="w-12 h-12 bg-accent-gold/20 rounded-lg flex items-center justify-center mb-6 text-accent-gold">
                        <span class="material-icons">candlestick_chart</span>
                    </div>
                    <h3 class="font-serif text-xl mb-3">ETF Division</h3>
                    <p class="text-gray-400 text-sm mb-4">Focuses on index-tracking ETFs and alternative asset ETFs.</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-white/10">
                        <div class="w-8 h-8 rounded-full bg-white/20"></div>
                        <div>
                            <p class="text-xs text-gray-400">Led by</p>
                            <p class="text-sm font-medium">Leroy Mahoney</p>
                        </div>
                    </div>
                </div>

                <!-- Division 2 -->
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-xl hover:bg-white/10 transition-colors group">
                    <div class="w-12 h-12 bg-accent-gold/20 rounded-lg flex items-center justify-center mb-6 text-accent-gold">
                        <span class="material-icons">account_balance</span>
                    </div>
                    <h3 class="font-serif text-xl mb-3">Securities Division</h3>
                    <p class="text-gray-400 text-sm mb-4">Focuses on fixed income securities, bonds, and CDs.</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-white/10">
                        <div class="w-8 h-8 rounded-full bg-white/20"></div>
                        <div>
                            <p class="text-xs text-gray-400">Led by</p>
                            <p class="text-sm font-medium">Yair Londyn</p>
                        </div>
                    </div>
                </div>

                <!-- Division 3 -->
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-xl hover:bg-white/10 transition-colors group">
                    <div class="w-12 h-12 bg-accent-gold/20 rounded-lg flex items-center justify-center mb-6 text-accent-gold">
                        <span class="material-icons">apartment</span>
                    </div>
                    <h3 class="font-serif text-xl mb-3">Real Estate Division</h3>
                    <p class="text-gray-400 text-sm mb-4">Invests in commercial and residential real estate projects globally.</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-white/10">
                        <div class="w-8 h-8 rounded-full bg-white/20"></div>
                        <div>
                            <p class="text-xs text-gray-400">Led by</p>
                            <p class="text-sm font-medium">Moises Strickland</p>
                        </div>
                    </div>
                </div>

                <!-- Division 4 -->
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-xl hover:bg-white/10 transition-colors group">
                    <div class="w-12 h-12 bg-accent-gold/20 rounded-lg flex items-center justify-center mb-6 text-accent-gold">
                        <span class="material-icons">pie_chart</span>
                    </div>
                    <h3 class="font-serif text-xl mb-3">Private Equity</h3>
                    <p class="text-gray-400 text-sm mb-4">Invests in private companies across various sectors.</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-white/10">
                        <div class="w-8 h-8 rounded-full bg-white/20"></div>
                        <div>
                            <p class="text-xs text-gray-400">Led by</p>
                            <p class="text-sm font-medium">Jordyn Juarez</p>
                        </div>
                    </div>
                </div>

                <!-- Division 5 -->
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-xl hover:bg-white/10 transition-colors group">
                    <div class="w-12 h-12 bg-accent-gold/20 rounded-lg flex items-center justify-center mb-6 text-accent-gold">
                        <span class="material-icons">show_chart</span>
                    </div>
                    <h3 class="font-serif text-xl mb-3">Mutual Funds</h3>
                    <p class="text-gray-400 text-sm mb-4">Invests in a range of mutual funds for diversified exposure.</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-white/10">
                        <div class="w-8 h-8 rounded-full bg-white/20"></div>
                        <div>
                            <p class="text-xs text-gray-400">Led by</p>
                            <p class="text-sm font-medium">Donavan Knapp</p>
                        </div>
                    </div>
                </div>

                <!-- Division 6 -->
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-xl hover:bg-white/10 transition-colors group">
                    <div class="w-12 h-12 bg-accent-gold/20 rounded-lg flex items-center justify-center mb-6 text-accent-gold">
                        <span class="material-icons">public</span>
                    </div>
                    <h3 class="font-serif text-xl mb-3">Infrastructure</h3>
                    <p class="text-gray-400 text-sm mb-4">Projects providing essential services like transportation and energy.</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-white/10">
                        <div class="w-8 h-8 rounded-full bg-white/20"></div>
                        <div>
                            <p class="text-xs text-gray-400">Led by</p>
                            <p class="text-sm font-medium">Quinten Mosley</p>
                        </div>
                    </div>
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
            <h2 class="font-serif text-3xl md:text-5xl mb-6">Partners in your prosperity</h2>
            <p class="text-gray-300 text-lg mb-10 max-w-2xl mx-auto">
                Discover how our seasoned leadership and historical resilience can serve your financial future.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <Link
                    href="/contact-us"
                    class="bg-accent-gold hover:bg-[#b08d4b] text-white px-8 py-4 rounded-full text-base font-medium transition-all shadow-lg hover:shadow-xl hover:-translate-y-1"
                >
                    Start a Conversation
                </Link>
            </div>
        </div>
    </section>
</Layout>
