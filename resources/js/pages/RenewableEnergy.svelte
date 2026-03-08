<script>
    import Layout from '@/components/frontend/Layout.svelte';
    import { onMount } from 'svelte';
    import { fade, fly } from 'svelte/transition';

    let mounted = false;
    onMount(() => {
        mounted = true;
    });
</script>

<Layout>

        <!-- Hero Section -->
        <header class="relative w-full h-[600px] flex items-center overflow-hidden">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0 z-0">
                <img
                    alt="Modern solar panels in a bright field"
                    class="w-full h-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPe8pxomgs3RGqZXZH8kzN7NIzPzMEGjyTgPoHlFPre6P0W50uJmohy8pbO9c7UmXlpBG3cYUbIl4e0nmr_a-Kaf4Wtp5VhAHeMFhb7w0WbjjD26BeEjuGQXim0t4SUuaNdpUFXRdfG4YLgZspTyXK6Dq-Cj-zbAoaoSv3Rzeym6sR9Z_pKVyXvI-QJNErrPhQT20YHM4rB3Dchfx_0VBmfTLoGUkvPCB4u6MIx0GakONbvlinxnm7mvGRyvR8vexdqiydGj5zolA"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/60 to-transparent dark:from-background-dark/95 dark:via-background-dark/80 dark:to-background-dark/20"
                ></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 w-full">
                <div class="max-w-2xl">
                    <!-- Breadcrumb -->
                    <nav
                        class="flex items-center space-x-2 text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-6 font-display"
                    >
                        <a class="hover:text-primary dark:hover:text-accent-gold transition-colors" href="/">Home</a>
                        <span class="text-gray-300 dark:text-gray-600">/</span>
                        <a class="hover:text-primary dark:hover:text-accent-gold transition-colors" href="/infrastructure-real-estate">Investments</a>
                        <span class="text-gray-300 dark:text-gray-600">/</span>
                        <span class="text-primary dark:text-accent-gold font-bold">Renewables &amp; Pyrolysis</span>
                    </nav>

                    {#if mounted}
                        <h1
                            in:fly={{ y: 20, duration: 800, delay: 100 }}
                            class="font-serif text-5xl md:text-6xl lg:text-7xl text-gray-900 dark:text-white leading-[1.1] mb-6"
                        >
                            Capitalizing on the <br /> <span class="italic text-gray-600 dark:text-gray-300">Circular Economy.</span>
                        </h1>
                        <p
                            in:fly={{ y: 20, duration: 800, delay: 300 }}
                            class="font-serif text-xl text-gray-700 dark:text-gray-300 leading-relaxed mb-10 max-w-lg border-l-4 border-primary dark:border-accent-gold pl-6"
                        >
                            Exclusive access to high-yield infrastructure assets at the intersection of sustainable energy and advanced material
                            recovery.
                        </p>
                        <div in:fly={{ y: 20, duration: 800, delay: 500 }} class="flex flex-col sm:flex-row gap-4">
                            <button
                                class="bg-primary dark:bg-accent-gold hover:bg-primary-light dark:hover:bg-accent-gold/90 text-white dark:text-background-dark font-semibold px-8 py-3.5 rounded-full shadow-lg shadow-primary/20 dark:shadow-accent-gold/20 transition-all flex items-center justify-center gap-2 group"
                            >
                                Download Prospectus
                                <span class="material-icons text-sm group-hover:translate-x-1 transition-transform">arrow_downward</span>
                            </button>
                            <button
                                class="bg-white dark:bg-white/10 hover:bg-gray-50 dark:hover:bg-white/20 text-gray-800 dark:text-white font-medium px-8 py-3.5 rounded-full border border-gray-200 dark:border-white/10 shadow-sm transition-all"
                            >
                                View Performance
                            </button>
                        </div>
                    {/if}
                </div>
            </div>
        </header>


    <!-- Intro Text -->
    <section class="py-20 bg-background-light dark:bg-background-dark border-b border-gray-200 dark:border-white/5">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="font-serif text-3xl md:text-4xl text-gray-900 dark:text-white mb-6">Future-Proof Your Legacy</h2>
            <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed font-light font-display">
                As global markets shift towards sustainability, the most resilient portfolios are those diversified into tangible assets. Our
                Renewable Energy &amp; Pyrolysis strategy offers a unique dual-benefit: generating consistent energy yields while solving critical
                waste management challenges through advanced thermal decomposition technology.
            </p>
            <div class="w-24 h-1 bg-primary/30 dark:bg-accent-gold/30 mx-auto mt-10 rounded-full"></div>
        </div>
    </section>

    <!-- Investment Strategy Grid -->
    <section class="py-24 bg-white dark:bg-background-dark/50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="mb-16">
                <span class="text-primary dark:text-accent-gold font-bold tracking-widest text-sm uppercase font-display">Strategic Allocation</span>
                <h3 class="font-serif text-4xl text-gray-900 dark:text-white mt-3">Investment Vehicles</h3>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="group p-8 bg-background-light dark:bg-white/5 rounded-xl border border-gray-100 dark:border-white/10 hover:border-primary/50 dark:hover:border-accent-gold/50 hover:shadow-lg transition-all duration-300"
                >
                    <div
                        class="w-14 h-14 bg-white dark:bg-white/10 rounded-lg flex items-center justify-center shadow-sm mb-6 group-hover:bg-primary/10 dark:group-hover:bg-accent-gold/10 transition-colors"
                    >
                        <span
                            class="material-icons text-gray-700 dark:text-gray-300 text-3xl group-hover:text-primary dark:group-hover:text-accent-gold"
                            >solar_power</span
                        >
                    </div>
                    <h4
                        class="font-serif text-2xl text-gray-900 dark:text-white mb-4 group-hover:text-primary dark:group-hover:text-accent-gold transition-colors"
                    >
                        Infrastructure Equity
                    </h4>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6 font-display">
                        Direct ownership stakes in operational solar farms and wind arrays across OECD nations, providing stable, inflation-linked
                        cash flows backed by long-term government contracts.
                    </p>
                    <a
                        class="inline-flex items-center text-sm font-semibold text-gray-900 dark:text-white hover:text-primary dark:hover:text-accent-gold transition-colors font-display"
                        href="#"
                    >
                        Learn more <span class="material-icons text-sm ml-1">arrow_forward</span>
                    </a>
                </div>

                <!-- Card 2 -->
                <div
                    class="group p-8 bg-background-light dark:bg-white/5 rounded-xl border border-gray-100 dark:border-white/10 hover:border-primary/50 dark:hover:border-accent-gold/50 hover:shadow-lg transition-all duration-300"
                >
                    <div
                        class="w-14 h-14 bg-white dark:bg-white/10 rounded-lg flex items-center justify-center shadow-sm mb-6 group-hover:bg-primary/10 dark:group-hover:bg-accent-gold/10 transition-colors"
                    >
                        <span
                            class="material-icons text-gray-700 dark:text-gray-300 text-3xl group-hover:text-primary dark:group-hover:text-accent-gold"
                            >science</span
                        >
                    </div>
                    <h4
                        class="font-serif text-2xl text-gray-900 dark:text-white mb-4 group-hover:text-primary dark:group-hover:text-accent-gold transition-colors"
                    >
                        Pyrolysis Ventures
                    </h4>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6 font-display">
                        Venture-grade exposure to cutting-edge pyrolysis plants converting plastic waste into high-value biofuels and circular
                        chemical feedstocks. High growth potential.
                    </p>
                    <a
                        class="inline-flex items-center text-sm font-semibold text-gray-900 dark:text-white hover:text-primary dark:hover:text-accent-gold transition-colors font-display"
                        href="#"
                    >
                        Learn more <span class="material-icons text-sm ml-1">arrow_forward</span>
                    </a>
                </div>

                <!-- Card 3 -->
                <div
                    class="group p-8 bg-background-light dark:bg-white/5 rounded-xl border border-gray-100 dark:border-white/10 hover:border-primary/50 dark:hover:border-accent-gold/50 hover:shadow-lg transition-all duration-300"
                >
                    <div
                        class="w-14 h-14 bg-white dark:bg-white/10 rounded-lg flex items-center justify-center shadow-sm mb-6 group-hover:bg-primary/10 dark:group-hover:bg-accent-gold/10 transition-colors"
                    >
                        <span
                            class="material-icons text-gray-700 dark:text-gray-300 text-3xl group-hover:text-primary dark:group-hover:text-accent-gold"
                            >account_balance</span
                        >
                    </div>
                    <h4
                        class="font-serif text-2xl text-gray-900 dark:text-white mb-4 group-hover:text-primary dark:group-hover:text-accent-gold transition-colors"
                    >
                        Green Bonds
                    </h4>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6 font-display">
                        Senior secured debt instruments financing sustainable transitions. A conservative approach offering fixed coupons with
                        rigorous ESG covenants attached.
                    </p>
                    <a
                        class="inline-flex items-center text-sm font-semibold text-gray-900 dark:text-white hover:text-primary dark:hover:text-accent-gold transition-colors font-display"
                        href="#"
                    >
                        Learn more <span class="material-icons text-sm ml-1">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ESG & Risk Management Section -->
    <section class="py-24 bg-gray-50 dark:bg-background-dark relative overflow-hidden">
        <!-- Abstract Background Pattern -->
        <div
            class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-gray-200 to-transparent dark:from-white/5 opacity-50 pointer-events-none"
        ></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Content Side -->
                <div>
                    <span class="text-success-green font-bold tracking-widest text-sm uppercase flex items-center gap-2 font-display">
                        <span class="w-2 h-2 rounded-full bg-success-green"></span> Impact &amp; Governance
                    </span>
                    <h3 class="font-serif text-4xl text-gray-900 dark:text-white mt-4 mb-6">Risk Mitigation &amp; <br />ESG Measurability</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-lg mb-8 leading-relaxed font-display">
                        We don't just invest in green; we verify it. Our proprietary risk framework ensures that environmental impact translates into
                        financial durability, hedging against regulatory shifts and volatile commodity markets.
                    </p>

                    <div class="space-y-4 font-display">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-success-green/10 flex items-center justify-center mt-1">
                                <span class="material-icons text-success-green text-sm">check</span>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 dark:text-white">Geopolitical Hedge</h5>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">
                                    Domestic energy production reduces reliance on foreign supply chains.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-success-green/10 flex items-center justify-center mt-1">
                                <span class="material-icons text-success-green text-sm">check</span>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 dark:text-white">Long-term PPA Contracts</h5>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">
                                    20-year Power Purchase Agreements secure revenue predictability.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-success-green/10 flex items-center justify-center mt-1">
                                <span class="material-icons text-success-green text-sm">check</span>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 dark:text-white">Regulatory Compliance</h5>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">
                                    Full adherence to EU Taxonomy and SEC Climate Disclosure rules.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visual/Metrics Side -->
                <div
                    class="bg-white dark:bg-white/5 p-8 lg:p-10 rounded-2xl shadow-xl shadow-gray-200/50 dark:shadow-none border border-gray-100 dark:border-white/10"
                >
                    <h4 class="font-serif text-2xl text-gray-900 dark:text-white mb-8">Live Impact Metrics</h4>
                    <div class="grid grid-cols-2 gap-8 mb-8">
                        <div>
                            <div class="text-gray-400 text-sm font-medium mb-1 font-display">Carbon Offset (YTD)</div>
                            <div class="text-4xl font-light text-gray-900 dark:text-white flex items-baseline gap-1 font-display">
                                42.8k <span class="text-sm text-gray-500 dark:text-gray-400">Tons</span>
                            </div>
                            <div class="text-xs text-success-green mt-2 flex items-center font-display">
                                <span class="material-icons text-sm mr-0.5">trending_up</span> +12% vs last year
                            </div>
                        </div>
                        <div>
                            <div class="text-gray-400 text-sm font-medium mb-1 font-display">Energy Generated</div>
                            <div class="text-4xl font-light text-gray-900 dark:text-white flex items-baseline gap-1 font-display">
                                185 <span class="text-sm text-gray-500 dark:text-gray-400">GWh</span>
                            </div>
                            <div class="text-xs text-success-green mt-2 flex items-center font-display">
                                <span class="material-icons text-sm mr-0.5">trending_up</span> Exceeding targets
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-100 dark:border-white/10 pt-8">
                        <div class="flex justify-between items-end mb-2">
                            <span class="text-gray-900 dark:text-white font-semibold font-display">ESG Portfolio Score</span>
                            <span class="text-success-green font-bold text-xl font-display">AAA</span>
                        </div>
                        <div class="w-full bg-gray-100 dark:bg-white/10 rounded-full h-2">
                            <div class="bg-success-green h-2 rounded-full" style="width: 92%"></div>
                        </div>
                        <p class="text-xs text-gray-400 mt-2 text-right font-display">Audited by Sustainalytics</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prominent CTA Section -->
    <section class="py-20 bg-gray-900 dark:bg-primary border-t border-white/10 relative">
        <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
            <h2 class="font-serif text-3xl md:text-5xl text-white mb-6">Secure Your Portfolio's Future</h2>
            <p class="text-gray-300 dark:text-white/80 text-lg mb-10 max-w-2xl mx-auto font-light font-display">
                Schedule a private consultation with our Energy Sector Specialists to discuss how Pyrolysis and Renewables fit into your wealth
                preservation strategy.
            </p>
            <button
                class="bg-primary hover:bg-primary-light text-white dark:bg-white dark:text-primary dark:hover:bg-gray-100 font-bold text-lg px-10 py-4 rounded-full shadow-[0_0_20px_rgba(242,208,13,0.4)] transition-all transform hover:-translate-y-1"
            >
                Talk to a Private Wealth Advisor
            </button>
            <p class="mt-6 text-sm text-gray-500 dark:text-white/60 font-display">Minimum investment threshold applies. Accredited investors only.</p>
        </div>
    </section>
</Layout>
