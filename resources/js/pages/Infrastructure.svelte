<script>
    import Layout from '@/components/frontend/Layout.svelte';
    import { Link } from '@inertiajs/svelte';
    import { onMount } from 'svelte';
    import { fade, fly } from 'svelte/transition';
    import { SYSTEM } from '@/lib/store';

    let mounted = $state(false);
    onMount(() => {
        mounted = true;
    });
</script>

<Layout>
    <header class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img
                alt="Modern skyscraper architecture abstract view"
                class="w-full h-full object-cover opacity-90"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-FCdnLizTfnVLGUIsrY86svvJaYc2YJ0omRRs3dIG0X7EaRPhj2GZYR_02Qv92a-eh5gL8bDp3ZBuEO1zIWwEKN1Gd2JxyGE8a8cgLHnYuSgqRy_xPgJp18ciso_00BM44Z7JMeU9piU8tVvXWhLcRZBjnBpMGUnBjxfWJq0WRacnXagn0NFtXNc3bWQuS5LWNQa-MDpsb_pEJCnAON68Z1aBJ1D6DO66JqWhf7C6U4J08dXPMeq_dpcwCesv8DWha7AmJsOQC24"
            />
            <div
                class="absolute inset-0 bg-gradient-to-r from-background-light via-background-light/95 to-transparent dark:from-background-dark dark:via-background-dark/95"
            ></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                {#if mounted}
                    <div
                        in:fade={{ duration: 800, delay: 100 }}
                        class="inline-flex items-center px-3 py-1 rounded-full border border-accent-gold/30 bg-accent-gold/10 text-accent-gold text-xs font-semibold tracking-widest uppercase mb-6"
                    >
                        Infrastructure & Real Estate
                    </div>
                    <h1
                        in:fly={{ y: 20, duration: 800, delay: 300 }}
                        class="font-serif text-5xl md:text-6xl lg:text-7xl font-medium text-primary dark:text-white leading-tight mb-6"
                    >
                        Building Generational Wealth through <span class="italic text-accent-gold">Tangible Assets</span>.
                    </h1>
                    <p
                        in:fly={{ y: 20, duration: 800, delay: 500 }}
                        class="text-lg md:text-xl text-gray-600 dark:text-gray-300 mb-10 leading-relaxed font-light"
                    >
                        Expertly managed portfolios in global infrastructure and prime real estate markets designed to provide stable income and
                        long-term capital appreciation.
                    </p>
                    <div in:fly={{ y: 20, duration: 800, delay: 700 }} class="flex flex-col sm:flex-row gap-4">
                        <a
                            class="inline-flex justify-center items-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-white bg-primary hover:bg-primary/90 shadow-lg hover:shadow-xl transition-all duration-300"
                            href="#strategies"
                        >
                            Explore Strategies
                        </a>
                        <a
                            class="inline-flex justify-center items-center px-8 py-3 border border-primary dark:border-white text-base font-medium rounded-full text-primary dark:text-white bg-transparent hover:bg-primary/5 dark:hover:bg-white/5 transition-all duration-300"
                            href="#advisor"
                        >
                            View Performance
                        </a>
                    </div>
                {/if}
            </div>
        </div>
    </header>

    <!-- At a Glance Stats -->
    <div class="bg-white dark:bg-primary border-y border-gray-100 dark:border-white/10 relative z-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 divide-y md:divide-y-0 md:divide-x divide-gray-100 dark:divide-white/10">
                <div class="text-center px-4">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-widest mb-1">Assets Under Management</p>
                    <p class="font-serif text-4xl text-primary dark:text-white">$42.5<span class="text-accent-gold">B</span></p>
                </div>
                <div class="text-center px-4 pt-8 md:pt-0">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-widest mb-1">Global Properties</p>
                    <p class="font-serif text-4xl text-primary dark:text-white">850<span class="text-accent-gold">+</span></p>
                </div>
                <div class="text-center px-4 pt-8 md:pt-0">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-widest mb-1">Annualized Return (5Y)</p>
                    <p class="font-serif text-4xl text-primary dark:text-white">12.4<span class="text-accent-gold">%</span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Investment Strategy Section -->
    <section class="py-24 bg-background-light dark:bg-background-dark" id="strategies">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="font-serif text-4xl font-semibold text-primary dark:text-white mb-4">Strategic Allocation</h2>
                <div class="w-16 h-1 bg-accent-gold mx-auto mb-6"></div>
                <p class="text-gray-600 dark:text-gray-300 text-lg">
                    We leverage our scale and expertise to access high-quality assets that are typically out of reach for individual investors. Our
                    multi-strategy approach ensures resilience.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="group bg-white dark:bg-white/5 rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-white/10 transform hover:-translate-y-1"
                >
                    <div class="h-48 overflow-hidden relative">
                        <img
                            alt="Luxury high-rise residential building facade"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqkYP84joRiH00YO9nTkvEfdV9lMP3viIBG9bRoKbtw2ahwOxygicdk_pn-Sg-CkAQa7LtS9N4ZcoF2b5TXZT6gOi_H0SZXTqPNIyNS2fWigOFVQCQ1VZnXj5Ob0smm2eOOGaUk98wL_ym0JLW2bMlXzughFndTpxq2ZbzZ02xjD0ljTcQRvz4C6DhafjYR6_YyYNUPU7S-LB9pY4b2iZpYtxgPuoYkF_vW_8OTezlVHRZfU1gh-fwJVMKFImVLs_ODnCWfhi71MQ"
                        />
                        <div class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition-colors"></div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="material-icons text-accent-gold text-xl">apartment</span>
                            <h3 class="font-serif text-xl font-semibold text-primary dark:text-white">Direct Real Estate</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 text-sm leading-relaxed">
                            Acquiring core and value-add properties in prime urban locations. Focus on multifamily residential and Class A office
                            spaces.
                        </p>
                        <a
                            class="inline-flex items-center text-sm font-medium text-primary dark:text-white hover:text-accent-gold dark:hover:text-accent-gold transition-colors"
                            href="#"
                        >
                            Learn more <span class="material-icons text-sm ml-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="group bg-white dark:bg-white/5 rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-white/10 transform hover:-translate-y-1"
                >
                    <div class="h-48 overflow-hidden relative">
                        <img
                            alt="Wind turbines in a green field"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOHi-yUfYwfBUWw9p9UcP5bX_p9bNABENATcxZrMQK5l-m7v3iczaes8fqXoimCr0GRJK-J-PygJf6nzk3xVp5HgirzbuPXg-or2YWiZUJC7bn4BI1Xs5dfnEad2EL5PbfJQ3OaBvvBQ88d8VKKPsxGJh3KtQ_7G5oLjdPPMmixPb08dc5K7B__TrToQAwJcskvELpodhngM-G7wj4vq8O0o7RciD-Rry9nU2fG7fX_8WFn_4N7HCJCflvaN54RGGvH8Kz17POZQ8"
                        />
                        <div class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition-colors"></div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="material-icons text-accent-gold text-xl">solar_power</span>
                            <h3 class="font-serif text-xl font-semibold text-primary dark:text-white">Sustainable Infrastructure</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 text-sm leading-relaxed">
                            Investments in renewable energy, water treatment, and transit systems that power the future while generating predictable
                            cash flows.
                        </p>
                        <a
                            class="inline-flex items-center text-sm font-medium text-primary dark:text-white hover:text-accent-gold dark:hover:text-accent-gold transition-colors"
                            href="#"
                        >
                            Learn more <span class="material-icons text-sm ml-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="group bg-white dark:bg-white/5 rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-white/10 transform hover:-translate-y-1"
                >
                    <div class="h-48 overflow-hidden relative">
                        <img
                            alt="Financial data on tablet with glasses"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUnZBPF7c3WztuGo46bKxY99jav5-7bzEUF7GLrx-fOoD_H050WZ2QEcfbMzMUAuWlgFeGVVl7UTUKOxMUp8S-ckewOQqSlIxGFuxaLEa9VZR3OZBTML8vQwGsMdAB2m0pIJEiZPgBRFwe4k__kef9B7zRojRGemZvy2iOviuChuJFhcG_5jJEyFZPNt78GjSKwQO0rlvg01TABRYfuWvOzD6WYFlc1fNBHPozXGWjJeuzeEjXcoTbraaDM1SNu833lSRvfiOCICQ"
                        />
                        <div class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition-colors"></div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="material-icons text-accent-gold text-xl">query_stats</span>
                            <h3 class="font-serif text-xl font-semibold text-primary dark:text-white">Private Credit & REITs</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 text-sm leading-relaxed">
                            Diversified exposure through real estate debt and public market securities, offering enhanced liquidity compared to direct
                            ownership.
                        </p>
                        <a
                            class="inline-flex items-center text-sm font-medium text-primary dark:text-white hover:text-accent-gold dark:hover:text-accent-gold transition-colors"
                            href="#"
                        >
                            Learn more <span class="material-icons text-sm ml-1">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Risk Management Section -->
    <section class="py-24 bg-white dark:bg-primary relative overflow-hidden">
        <!-- Abstract Background Pattern -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-background-light dark:bg-white/5 skew-x-12 translate-x-1/2 opacity-50 z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row gap-16 items-start">
                <!-- Left: Content -->
                <div class="lg:w-1/2">
                    <span class="text-accent-gold font-semibold tracking-widest uppercase text-sm mb-2 block">Risk Management</span>
                    <h2 class="font-serif text-4xl font-semibold text-primary dark:text-white mb-6">Preserving Capital in Volatile Markets</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                        Our philosophy prioritizes the preservation of capital. We employ rigorous due diligence and active management to mitigate the
                        inherent risks of real asset investing.
                    </p>

                    <div class="space-y-4">
                        <!-- Accordion Item 1 -->
                        <div
                            class="border border-gray-100 dark:border-white/10 rounded-lg p-5 hover:border-accent-gold/30 transition-colors bg-background-light dark:bg-white/5"
                        >
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-white dark:bg-primary flex items-center justify-center text-accent-gold shadow-sm shrink-0"
                                >
                                    <span class="material-icons">shield</span>
                                </div>
                                <div>
                                    <h4 class="font-serif text-lg font-semibold text-primary dark:text-white mb-2">Inflation Hedging</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Real assets have historically shown a strong correlation with inflation, helping to protect purchasing power
                                        over time through rent escalations.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 2 -->
                        <div
                            class="border border-gray-100 dark:border-white/10 rounded-lg p-5 hover:border-accent-gold/30 transition-colors bg-background-light dark:bg-white/5"
                        >
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-white dark:bg-primary flex items-center justify-center text-accent-gold shadow-sm shrink-0"
                                >
                                    <span class="material-icons">donut_large</span>
                                </div>
                                <div>
                                    <h4 class="font-serif text-lg font-semibold text-primary dark:text-white mb-2">Structural Diversification</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        By balancing exposure across geography, sector, and asset class, we reduce the impact of localized economic
                                        downturns.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 3 -->
                        <div
                            class="border border-gray-100 dark:border-white/10 rounded-lg p-5 hover:border-accent-gold/30 transition-colors bg-background-light dark:bg-white/5"
                        >
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-white dark:bg-primary flex items-center justify-center text-accent-gold shadow-sm shrink-0"
                                >
                                    <span class="material-icons">gavel</span>
                                </div>
                                <div>
                                    <h4 class="font-serif text-lg font-semibold text-primary dark:text-white mb-2">Regulatory Oversight</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Navigating complex regulatory environments with a dedicated legal team to ensure compliance and project
                                        viability.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Image -->
                <div class="lg:w-1/2 relative h-full min-h-[500px]">
                    <img
                        alt="Detailed architectural drawing of a building"
                        class="w-full h-full object-cover rounded-xl shadow-2xl relative z-10 grayscale-[20%] hover:grayscale-0 transition-all duration-700"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAiAy_b5K3L4Lj4rrx4wTfG_M_x0pM7M0zn-onZwIvKeB8hHiZoZqSFVEGfcnvUpkvvx1X60d5g3KUVLJ54vY_hvpnAdQxZPsgCUbGTIAn1gXnC2aqDos0HLNKDehUAFWaVzez-Xv2NBH6ciPWzCKB0sctt7FFXfPGlXmaTS4NwbnkSa0q2uQvauQqKduKTTfeA5LznlxR9sdYH5TevXGXjqTVfH7lRVOhO5zL8ZEx4cNQOUHjKOQOX5cwf2SojKl1HPyT_Y_2ODA4"
                    />
                    <!-- Decorative Element -->
                    <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-primary dark:bg-accent-gold rounded-lg z-0"></div>
                    <div class="absolute -top-6 -right-6 w-24 h-24 border-2 border-accent-gold dark:border-white rounded-lg z-0"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advisor CTA Section -->
    <section class="py-24 bg-primary dark:bg-black text-white relative" id="advisor">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="bg-primary/50 dark:bg-white/5 border border-white/10 rounded-2xl p-8 md:p-12 lg:p-16 backdrop-blur-sm">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <!-- Advisor Image -->
                    <div class="shrink-0 relative">
                        <div class="w-48 h-48 lg:w-56 lg:h-56 rounded-full overflow-hidden border-4 border-accent-gold/30 shadow-2xl">
                            <img
                                alt="Professional headshot of a senior financial advisor"
                                class="w-full h-full object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBYeWMKb0FW2vUl33X8PyhhKKDKbDrKjZpQKI1eZD4rup_13MfT8rOzSAdOlOnkF9mniKn4EABzl2bxd1h_UGnZ3XIgGKMpl3TpMM-4TIUCWVlVqxQMMCjE4htIyEc55nlfBQs1seCqFj6lu95_bKH4VAWONSFRs4r81xN2eGZMdwNkuSe0h0pPM2DShd2Z0mhRt4fEjvl0p-HGUNt6PK8p7L5c_MbajIDXDtKRJdKAHHYMCnBnQ2JlbF0YB8MLzuUgOBUrEuf6Pgw"
                            />
                        </div>
                        <div class="absolute bottom-2 right-2 bg-accent-gold text-primary text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                            Senior Partner
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="text-center md:text-left flex-1">
                        <h2 class="font-serif text-3xl md:text-4xl font-medium mb-4">Your wealth requires a blueprint.</h2>
                        <p class="text-gray-300 text-lg mb-8 max-w-2xl leading-relaxed">
                            "Real assets offer a unique opportunity to decouple your portfolio from public market volatility. Let's discuss how our
                            infrastructure strategies fit your long-term goals."
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                            <Link
                                class="inline-flex justify-center items-center px-8 py-3 bg-accent-gold text-primary hover:bg-white transition-colors duration-300 rounded-full font-semibold text-base shadow-lg"
                                href="/contact-us"
                            >
                                Schedule Consultation
                            </Link>
                            <div class="flex items-center gap-3 text-gray-400 text-sm px-4">
                                <span class="material-icons text-accent-gold">phone</span>
                                <span>{$SYSTEM.phone}</span>
                            </div>
                        </div>
                        <div class="mt-8 pt-8 border-t border-white/10 flex items-center gap-4 justify-center md:justify-start opacity-70">
                            <span class="text-xs uppercase tracking-widest text-gray-400">Featured In:</span>
                            <div class="font-serif italic text-gray-300">Bloomberg</div>
                            <div class="w-1 h-1 bg-gray-600 rounded-full"></div>
                            <div class="font-serif italic text-gray-300">Financial Times</div>
                            <div class="w-1 h-1 bg-gray-600 rounded-full"></div>
                            <div class="font-serif italic text-gray-300">WSJ</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</Layout>
