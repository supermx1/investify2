<script lang="ts">
    import Layout from '@/components/frontend/Layout.svelte';
    import { onMount } from 'svelte';

    let mounted = $state(false);
    onMount(() => {
        mounted = true;
    });
</script>

<Layout>
    <!-- Hero Section -->
    <header class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-background-light dark:bg-background-dark">
        <div class="absolute inset-0 z-0">
            <div
                class="absolute inset-0 bg-gradient-to-r from-background-light/95 via-background-light/80 to-transparent dark:from-background-dark/95 dark:via-background-dark/80 dark:to-transparent z-10"
            ></div>
            <img
                src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?auto=format&fit=crop&q=80&w=2000"
                alt="ETF Trading"
                class="w-full h-full object-cover"
            />
        </div>

        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span
                    class="inline-block py-1 px-3 rounded-full bg-accent-gold/10 text-accent-gold text-xs font-semibold tracking-wider uppercase mb-6 border border-accent-gold/20 backdrop-blur-sm"
                >
                    Exchange-Traded Funds
                </span>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-serif font-medium text-primary dark:text-white mb-6 leading-tight">
                    ETF <br />
                    <span class="italic text-accent-gold">Insights.</span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 font-light mb-10 leading-relaxed max-w-2xl">
                    ETFs are an excellent investment vehicle that provides investors with access to a diversified portfolio of assets at low costs.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a
                        href="/register"
                        target="_blank"
                        class="bg-primary hover:bg-primary-light dark:bg-accent-gold dark:hover:bg-accent-gold/90 text-white px-8 py-3.5 rounded-full text-base font-medium transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 flex items-center gap-2"
                    >
                        Start Trading
                        <span class="material-icons text-sm">arrow_forward</span>
                    </a>
                    <a
                        href="/contact-us"
                        class="bg-white/50 dark:bg-white/5 hover:bg-white/80 dark:hover:bg-white/10 text-primary dark:text-white border border-primary/10 dark:border-white/10 backdrop-blur-sm px-8 py-3.5 rounded-full text-base font-medium transition-all flex items-center gap-2"
                    >
                        Contact Advisor
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Leadership & Introduction Section -->
    <section class="py-24 bg-white dark:bg-primary/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Leadership</span>
                    <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">Leroy Mahoney</h2>
                    <div class="h-1 w-20 bg-accent-gold mb-8"></div>
                    <p class="text-xl text-gray-500 dark:text-gray-400 mb-6 italic font-serif">Head, ETF Division</p>
                    <div class="prose prose-lg dark:prose-invert">
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                            "ETFs are an increasingly popular investment vehicle for investors who want exposure to a wide range of stocks, bonds, and
                            other assets. As a company, we have found ETFs to be an excellent investment model that has provided our clients with
                            significant returns over the years."
                        </p>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            An Exchange-Traded Fund (ETF) is a type of investment fund that trades on stock exchanges, just like a stock. ETFs own a
                            basket of underlying assets such as stocks, bonds, or commodities, and they are designed to track the performance of a
                            particular index, sector, or asset class.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -inset-4 bg-accent-gold/20 rounded-xl blur-lg transform rotate-2"></div>
                    <img
                        src="https://images.unsplash.com/photo-1642543492481-44e81e3914a7?auto=format&fit=crop&q=80&w=1200"
                        alt="ETF Strategy"
                        class="relative rounded-xl shadow-2xl w-full h-auto object-cover aspect-[4/3] grayscale hover:grayscale-0 transition-all duration-700"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-24 bg-background-light dark:bg-background-dark border-t border-primary/5 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Why Choose ETFs</span>
                <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-4">Benefits of Investing</h2>
                <p class="text-gray-500 dark:text-gray-400 text-lg">
                    ETFs offer a unique combination of benefits that make them an attractive option for both individual and institutional investors.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Diversification -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-soft hover:shadow-soft-hover transition-all border border-gray-100 dark:border-white/5 group"
                >
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">splitscreen</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Diversification</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-sm">
                        Access a broad range of securities to spread risk across different asset classes, sectors, and regions.
                    </p>
                </div>

                <!-- Low Costs -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-soft hover:shadow-soft-hover transition-all border border-gray-100 dark:border-white/5 group"
                >
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">sell</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Low Costs</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-sm">
                        Known for low management fees compared to other options. Passive management requires less research, resulting in lower costs.
                    </p>
                </div>

                <!-- Liquidity -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-soft hover:shadow-soft-hover transition-all border border-gray-100 dark:border-white/5 group"
                >
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">water_drop</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Liquidity</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-sm">
                        Traded on major stock exchanges, making them highly liquid. Buy or sell at any time during the trading day.
                    </p>
                </div>

                <!-- Tax Efficiency -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-soft hover:shadow-soft-hover transition-all border border-gray-100 dark:border-white/5 group"
                >
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">account_balance</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Tax Efficiency</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-sm">
                        More tax-efficient than mutual funds due to fewer capital gains distributions and lower turnover.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Performance Stats -->
    <section class="py-24 bg-primary text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z" fill="currentColor" />
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="font-serif text-3xl md:text-4xl mb-6">Remarkable Performance</h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-8">
                        The performance of our ETFs has been remarkable over the years, with consistent returns and low fees. Our ETFs have also
                        outperformed their benchmark indices consistently.
                    </p>
                    <a
                        href="/register"
                        target="_blank"
                        class="inline-flex items-center gap-2 bg-accent-gold hover:bg-accent-gold/90 text-white px-8 py-3 rounded-full font-medium transition-all"
                    >
                        View ETF Performance
                        <span class="material-icons text-sm">show_chart</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/10">
                        <div class="text-4xl font-bold text-accent-gold mb-2">34%</div>
                        <div class="text-sm text-gray-300">Avg. Annual Return (S&P 500 ETF)</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/10">
                        <div class="text-4xl font-bold text-accent-gold mb-2">3%</div>
                        <div class="text-sm text-gray-300">Steady Annual Increase (Last 4 Years)</div>
                    </div>
                    <div class="col-span-1 md:col-span-2 bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/10">
                        <div class="text-xl font-bold text-white mb-2">200+</div>
                        <div class="text-sm text-gray-300">Active Traders</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-24 bg-white dark:bg-primary/5">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-serif text-3xl md:text-5xl text-primary dark:text-white mb-6">Start building your ETF portfolio</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 mb-10 leading-relaxed">
                We believe in building enduring relationships with clients through trust and a shared purpose to improve investment outcomes for a
                better future.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a
                    href="/register"
                    target="_blank"
                    class="bg-primary hover:bg-primary-light dark:bg-accent-gold dark:hover:bg-accent-gold/90 text-white px-10 py-4 rounded-full text-lg font-medium transition-all shadow-xl hover:shadow-2xl hover:-translate-y-1"
                >
                    Get Started Today
                </a>
                <a
                    href="/contact-us"
                    class="bg-white dark:bg-white/5 hover:bg-gray-50 dark:hover:bg-white/10 text-primary dark:text-white border border-gray-200 dark:border-white/10 px-10 py-4 rounded-full text-lg font-medium transition-all"
                >
                    Speak with an Advisor
                </a>
            </div>
        </div>
    </section>
</Layout>
