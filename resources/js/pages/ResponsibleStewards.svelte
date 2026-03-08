<script>
    import Layout from '@/components/frontend/Layout.svelte';
    import { Link } from '@inertiajs/svelte';
</script>

<Layout>
    <!-- Hero Section -->
    <header class="relative bg-background-light dark:bg-background-dark pt-16 pb-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-center">
                <div class="lg:col-span-6 text-center lg:text-left animate-fade-in mb-12 lg:mb-0">
                    <!-- Breadcrumb -->
                    <nav
                        class="flex items-center space-x-2 text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-6 font-display"
                    >
                        <a class="hover:text-primary dark:hover:text-accent-gold transition-colors" href="/">Home</a>
                        <span class="text-gray-300 dark:text-gray-600">/</span>
                        <a class="hover:text-primary dark:hover:text-accent-gold transition-colors" href="/">Philosophy</a>
                        <span class="text-gray-300 dark:text-gray-600">/</span>
                        <span class="text-primary dark:text-accent-gold font-bold">Responsible Stewardship</span>
                    </nav>
                    <h1 class="font-serif text-5xl lg:text-6xl font-medium text-primary dark:text-white leading-tight mb-6">
                        Investing for a <br />
                        <span class="italic text-success-green">Sustainable Future.</span>
                    </h1>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 font-light leading-relaxed max-w-lg mx-auto lg:mx-0">
                        We believe that true wealth is measured not just in returns, but in the lasting positive impact we leave on the world. Our
                        ESG-focused strategies align your portfolio with your values.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <button
                            class="bg-primary hover:bg-primary-light text-white px-8 py-3.5 rounded-full text-sm font-medium transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 flex items-center justify-center gap-2"
                        >
                            Our Impact Report
                            <span class="material-icons text-sm">arrow_forward</span>
                        </button>
                        <button
                            class="bg-white dark:bg-white/5 border border-primary/20 dark:border-white/10 text-primary dark:text-white hover:bg-gray-50 dark:hover:bg-white/10 px-8 py-3.5 rounded-full text-sm font-medium transition-all flex items-center justify-center"
                        >
                            ESG Philosophy
                        </button>
                    </div>
                    <div class="mt-10 flex items-center justify-center lg:justify-start gap-8 opacity-70">
                        <div class="flex items-center gap-2">
                            <span class="material-icons text-success-green text-xl">eco</span>
                            <span class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Carbon Neutral</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-icons text-success-green text-xl">diversity_3</span>
                            <span class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Inclusive Growth</span>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-6 relative animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl aspect-[4/3] group">
                        <div class="absolute inset-0 bg-primary/10 group-hover:bg-primary/0 transition-colors duration-500 z-10"></div>
                        <img
                            alt="Lush green forest canopy with sunlight filtering through leaves"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHebtFSYZ9ihbqaJ-fcyrYEvSOCqvgq21-6Edj4k6N6zvBwvZOQv_SU_4_2KdL6sdZZCNb6DKMwwyGJH31Qjw3Jz6-lac53JkKxh99y9E5JSTdwiLEBtriVJ8rI8CbV9U5XO_R_WV9v5zuikksqbpZz7vYOc4DupUAabx2arWY-nTzBJz6GxAh0HA1hIKzdsRCJnu5ET9n8BK15p4DQcsu7eYdpZNikhedNNhCMViuOPnFkn0DvL1Ecju6ToEQ1EQRTkAvJ3izr-E"
                        />
                        <div
                            class="absolute bottom-6 left-6 right-6 bg-white/95 dark:bg-primary/95 backdrop-blur shadow-soft rounded-xl p-6 border border-white/20 z-20"
                        >
                            <div class="flex justify-between items-center mb-2">
                                <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide font-medium">
                                    Sustainable Fund Performance
                                </p>
                                <span class="bg-success-green/10 text-success-green text-xs font-bold px-2 py-1 rounded-md flex items-center">
                                    <span class="material-icons text-sm mr-1">trending_up</span> +14.2% YTD
                                </span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-2 mb-4">
                                <div class="bg-success-green h-2 rounded-full" style="width: 78%"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-4 text-center">
                                <div>
                                    <p class="text-2xl font-serif text-primary dark:text-white font-medium">45%</p>
                                    <p class="text-[10px] text-gray-400 uppercase">Lower Carbon</p>
                                </div>
                                <div>
                                    <p class="text-2xl font-serif text-primary dark:text-white font-medium">320</p>
                                    <p class="text-[10px] text-gray-400 uppercase">Projects Funded</p>
                                </div>
                                <div>
                                    <p class="text-2xl font-serif text-primary dark:text-white font-medium">A+</p>
                                    <p class="text-[10px] text-gray-400 uppercase">ESG Rating</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -z-10 -top-10 -right-10 w-64 h-64 bg-success-green/10 rounded-full blur-3xl"></div>
                    <div class="absolute -z-10 -bottom-10 -left-10 w-64 h-64 bg-accent-gold/10 rounded-full blur-3xl"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Commitment Section -->
    <section class="py-24 bg-white dark:bg-primary/5 border-t border-primary/5 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-4">The Vantage Sustainability Commitment</h2>
                <p class="text-gray-500 dark:text-gray-400 text-lg leading-relaxed">
                    We integrate environmental, social, and governance (ESG) factors into every investment decision. Our philosophy is rooted in the
                    conviction that responsible companies deliver superior long-term returns.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Environmental -->
                <div
                    class="bg-background-light dark:bg-white/5 rounded-2xl p-8 hover:shadow-soft-hover transition-all duration-300 border border-primary/5 group relative overflow-hidden"
                >
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-success-green/10 rounded-bl-full -mr-6 -mt-6 transition-transform group-hover:scale-110"
                    ></div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="w-12 h-12 bg-white dark:bg-primary rounded-xl flex items-center justify-center shadow-sm mb-6 text-success-green">
                            <span class="material-icons">forest</span>
                        </div>
                        <h3 class="font-serif text-2xl text-primary dark:text-white mb-3">Environmental Stewardship</h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed text-sm">
                            Prioritizing investments in renewable energy, resource efficiency, and climate resilience. We actively divest from
                            high-carbon industries to protect our planet for future generations.
                        </p>
                    </div>
                </div>
                <!-- Social -->
                <div
                    class="bg-background-light dark:bg-white/5 rounded-2xl p-8 hover:shadow-soft-hover transition-all duration-300 border border-primary/5 group relative overflow-hidden"
                >
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-accent-gold/10 rounded-bl-full -mr-6 -mt-6 transition-transform group-hover:scale-110"
                    ></div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="w-12 h-12 bg-white dark:bg-primary rounded-xl flex items-center justify-center shadow-sm mb-6 text-accent-gold">
                            <span class="material-icons">people_outline</span>
                        </div>
                        <h3 class="font-serif text-2xl text-primary dark:text-white mb-3">Social Responsibility</h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed text-sm">
                            Championing fair labor practices, human rights, and community development. We seek out companies that invest in their
                            workforce and positively impact society.
                        </p>
                    </div>
                </div>
                <!-- Governance -->
                <div
                    class="bg-background-light dark:bg-white/5 rounded-2xl p-8 hover:shadow-soft-hover transition-all duration-300 border border-primary/5 group relative overflow-hidden"
                >
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-primary/5 rounded-bl-full -mr-6 -mt-6 transition-transform group-hover:scale-110"
                    ></div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div
                            class="w-12 h-12 bg-white dark:bg-primary rounded-xl flex items-center justify-center shadow-sm mb-6 text-primary dark:text-white"
                        >
                            <span class="material-icons">gavel</span>
                        </div>
                        <h3 class="font-serif text-2xl text-primary dark:text-white mb-3">Corporate Governance</h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed text-sm">
                            Ensuring transparency, accountability, and ethical leadership. We advocate for board diversity, executive pay alignment,
                            and shareholder rights.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- D&I Section -->
    <section class="py-24 bg-background-light dark:bg-background-dark overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative mb-12 lg:mb-0 order-2 lg:order-1">
                    <div class="absolute inset-0 bg-success-green/10 blur-3xl rounded-full transform scale-90"></div>
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl aspect-[4/5] group">
                        <img
                            alt="Diverse team meeting in modern eco-friendly office"
                            class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8B9zHyQPhRoL8kTTN84ppShM6DmTa6bRMuEJyOLazB1gxGgEyaFpj91B5voYrtJPayXrbfCXv17tQ_wkQ_n4bUPi067cEwQrHfUvZdqi40l5N4NaAdGCFGe0cD7fl1ujmXpLcMWfJSPeNb0YHbJsswpM-wFmWq1azekhmbuA1T9X5T-ICnBvINvdftLe0xBkOMKAIEMVVcJ6AeCjovl7P8h-raKMzHDh6H2KVcyjWp9ITfl4LBDRmfywDiUpla9UOkSIpIN4aqwU"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="bg-white/20 backdrop-blur-md p-3 rounded-lg">
                                    <span class="material-icons text-white">diversity_1</span>
                                </div>
                                <div>
                                    <p class="text-sm font-light opacity-90">Internal Initiative</p>
                                    <p class="text-xl font-serif">Women in Wealth Leadership</p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-200 leading-relaxed">
                                Our firm is committed to fostering an inclusive environment where diverse perspectives drive better investment
                                outcomes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <span class="text-success-green font-bold text-sm tracking-wider uppercase mb-2 block">Culture &amp; Community</span>
                    <h2 class="font-serif text-4xl text-primary dark:text-white mb-6">Diversity &amp; Inclusion</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                        We believe that a diverse team leads to more robust decision-making and innovation. Our commitment to diversity extends beyond
                        our hiring practices to the companies we invest in and the communities we serve.
                    </p>
                    <div class="space-y-6 mb-10">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-success-green/10 flex items-center justify-center text-success-green">
                                <span class="material-icons text-sm">percent</span>
                            </div>
                            <div>
                                <h4 class="text-primary dark:text-white font-serif text-lg">40% Female Leadership</h4>
                                <p class="text-sm text-gray-500 mt-1">
                                    We are proud to have strong female representation across our executive and investment committees.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-success-green/10 flex items-center justify-center text-success-green">
                                <span class="material-icons text-sm">school</span>
                            </div>
                            <div>
                                <h4 class="text-primary dark:text-white font-serif text-lg">Education Access Program</h4>
                                <p class="text-sm text-gray-500 mt-1">
                                    Sponsoring financial literacy programs in underrepresented communities to build generational wealth.
                                </p>
                            </div>
                        </div>
                    </div>
                    <button
                        class="text-primary dark:text-white font-medium border-b-2 border-success-green pb-1 hover:text-success-green transition-colors inline-flex items-center gap-2 group"
                    >
                        Read Our D&amp;I Report
                        <span class="material-icons text-sm transform group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <section class="relative bg-primary text-white py-20 overflow-hidden">
        <div
            class="absolute inset-0 opacity-20"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBN6rSXPyKb-WBffWrmQmWoTQmD8VOxRstz_IgbgCSB7jz2PkVgl5F_IHPKDFUbDdF1g6SEyguPq5muXr3vsz5zg4YGqyp-_a2NGR9LfWfoSWJoEGuhAgpTRIFI7Mjw2nPKMMSuCEYcEAPVXzBbLtwHOTZYdCzje898kDEiB4HwCgvLud8l97CHfiETxHlu9WARNheOv9nZok0-L5dy6blTv8bmUCL4n05ZZZFP7WZDGQzSKFrF_KJu22Uu2s3bm8nqY5GA2eAjpqE'); background-size: cover; background-position: center;"
        ></div>
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
            <span
                class="inline-block py-1 px-3 rounded-full bg-white/10 text-white text-xs font-semibold tracking-wider uppercase mb-6 border border-white/20"
            >
                Join the Movement
            </span>
            <h2 class="font-serif text-3xl md:text-5xl mb-6">Invest in a Better Tomorrow</h2>
            <p class="text-gray-300 text-lg mb-10 max-w-2xl mx-auto">
                Align your portfolio with your principles without compromising on performance. Let's build a legacy that honors both your wealth and
                the world.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <Link
                    href="/contact-us"
                    class="bg-success-green hover:bg-emerald-600 text-white px-8 py-4 rounded-full text-base font-medium transition-all shadow-lg hover:shadow-xl hover:-translate-y-1"
                >
                    Start Your Impact Journey
                </Link>
                <button
                    class="bg-transparent border border-white/30 hover:bg-white/10 text-white px-8 py-4 rounded-full text-base font-medium transition-all"
                >
                    Download ESG Guide
                </button>
            </div>
        </div>
    </section>
</Layout>
