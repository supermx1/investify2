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
                src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&q=80&w=2000"
                alt="Securities & Financial Markets"
                class="w-full h-full object-cover"
            />
        </div>

        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span
                    class="inline-block py-1 px-3 rounded-full bg-accent-gold/10 text-accent-gold text-xs font-semibold tracking-wider uppercase mb-6 border border-accent-gold/20 backdrop-blur-sm"
                >
                    Fixed Income Division
                </span>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-serif font-medium text-primary dark:text-white mb-6 leading-tight">
                    Securities <br />
                    <span class="italic text-accent-gold">Insights.</span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 font-light mb-10 leading-relaxed max-w-2xl">
                    Our focus on risk management, extensive research, and diversification in fixed income investments have generated strong returns
                    over the past five years.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a
                        href="/register"
                        target="_blank"
                        class="bg-primary hover:bg-primary-light dark:bg-accent-gold dark:hover:bg-accent-gold/90 text-white px-8 py-3.5 rounded-full text-base font-medium transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 flex items-center gap-2"
                    >
                        Invest Now
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

    <!-- Leadership Section -->
    <section class="py-24 bg-white dark:bg-primary/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Leadership</span>
                    <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">Yair Londyn</h2>
                    <div class="h-1 w-20 bg-accent-gold mb-8"></div>
                    <p class="text-xl text-gray-500 dark:text-gray-400 mb-6 italic font-serif">Head, Fixed Income Division</p>
                    <div class="prose prose-lg dark:prose-invert">
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                            "Our focus on risk management, extensive research, and diversification in fixed income investments have generated strong
                            returns for the company over the past five years."
                        </p>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Over the years, Investify has made substantial investments in bonds, particularly focusing on high-quality corporate and
                            municipal bonds. As of the close of 2022, the total worth of the company's bond investments had reached an impressive £2.5
                            billion.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -inset-4 bg-accent-gold/20 rounded-xl blur-lg transform rotate-2"></div>
                    <img
                        src="https://images.unsplash.com/photo-1560472355-536de3962603?auto=format&fit=crop&q=80&w=1200"
                        alt="Fixed Income Division"
                        class="relative rounded-xl shadow-2xl w-full h-auto object-cover aspect-[4/3] grayscale hover:grayscale-0 transition-all duration-700"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Fixed Income Securities Overview -->
    <section class="py-24 bg-background-light dark:bg-background-dark border-t border-primary/5 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Our Portfolio</span>
                <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-4">Fixed Income Securities</h2>
                <p class="text-gray-500 dark:text-gray-400 text-lg">
                    Investments that provide a guaranteed return through government bonds, corporate bonds, municipal bonds, and certificates of
                    deposit.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Bonds -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-soft hover:shadow-soft-hover transition-all border border-gray-100 dark:border-white/5 group"
                >
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">account_balance</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Bonds</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-sm mb-4">
                        We invest heavily in high-quality corporate and municipal bonds, lending capital to issuers in exchange for regular interest
                        payments and principal repayment at maturity.
                    </p>
                    <div class="flex items-baseline gap-2 mt-auto">
                        <span class="text-3xl font-bold text-accent-gold">£2.5B</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">portfolio value</span>
                    </div>
                    <div class="text-sm text-gray-500 dark:text-gray-400 mt-1">3.5% average annual return</div>
                </div>

                <!-- Certificates of Deposit -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-soft hover:shadow-soft-hover transition-all border border-gray-100 dark:border-white/5 group"
                >
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">savings</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Certificates of Deposit</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-sm mb-4">
                        Low-risk, FDIC-insured investments with fixed interest rates. We offer traditional, jumbo, and bump-up CDs with terms ranging
                        from three months to five years.
                    </p>
                    <div class="flex items-baseline gap-2 mt-auto">
                        <span class="text-3xl font-bold text-accent-gold">£1B</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">in CD investments</span>
                    </div>
                    <div class="text-sm text-gray-500 dark:text-gray-400 mt-1">2.5% average annual return</div>
                </div>

                <!-- Fixed Income Total -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-soft hover:shadow-soft-hover transition-all border border-gray-100 dark:border-white/5 group"
                >
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">trending_up</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Fixed Income Total</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-sm mb-4">
                        Our overall fixed income portfolio has grown from £500 million in 2018 to £1.2 billion, providing a steady stream of income
                        and a buffer against market volatility.
                    </p>
                    <div class="flex items-baseline gap-2 mt-auto">
                        <span class="text-3xl font-bold text-accent-gold">£1.2B</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">total fixed income</span>
                    </div>
                    <div class="text-sm text-gray-500 dark:text-gray-400 mt-1">4.5% average annual return</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ETFs & Mutual Funds -->
    <section class="py-24 bg-primary text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 0 C 50 100 80 100 100 0 Z" fill="currentColor" />
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <div>
                    <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Growth Vehicles</span>
                    <h2 class="font-serif text-3xl md:text-4xl mb-6">Exchange-Traded Funds</h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-8">
                        ETFs provide investors with access to a broad range of securities, helping spread risk across asset classes, sectors, and
                        regions with low management fees.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="bg-accent-gold/20 p-2 rounded-full mr-4 mt-1">
                                <span class="material-icons text-accent-gold text-sm">diversity_3</span>
                            </span>
                            <div>
                                <h3 class="text-lg font-serif mb-1">Diversification</h3>
                                <p class="text-gray-400 text-sm">
                                    Access to a broad range of securities across different asset classes, sectors, and regions.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-accent-gold/20 p-2 rounded-full mr-4 mt-1">
                                <span class="material-icons text-accent-gold text-sm">payments</span>
                            </span>
                            <div>
                                <h3 class="text-lg font-serif mb-1">Low Costs</h3>
                                <p class="text-gray-400 text-sm">
                                    Passively managed with lower management fees compared to other investment options.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-accent-gold/20 p-2 rounded-full mr-4 mt-1">
                                <span class="material-icons text-accent-gold text-sm">swap_horiz</span>
                            </span>
                            <div>
                                <h3 class="text-lg font-serif mb-1">Liquidity & Tax Efficiency</h3>
                                <p class="text-gray-400 text-sm">
                                    Traded on major exchanges with lower turnover, providing flexibility and reduced tax burden.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/10 mt-8">
                        <div class="text-4xl font-bold text-accent-gold mb-2">34%</div>
                        <div class="text-sm text-gray-300">Average annual return on our S&P 500 ETF over the past five years</div>
                    </div>
                </div>

                <div>
                    <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Proven Track Record</span>
                    <h2 class="font-serif text-3xl md:text-4xl mb-6">Mutual Funds</h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        Mutual funds have been a key part of our investment strategy for many years. They offer a diversified investment option that
                        pools small investments together to create a larger, more comprehensive portfolio.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/10">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium">Equity Mutual Funds</span>
                                <span class="text-accent-gold font-bold">20.2%</span>
                            </div>
                            <div class="w-full bg-white/10 rounded-full h-2">
                                <div class="bg-accent-gold rounded-full h-2" style="width: 67%"></div>
                            </div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/10">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium">Fixed Income Funds</span>
                                <span class="text-accent-gold font-bold">7.5%</span>
                            </div>
                            <div class="w-full bg-white/10 rounded-full h-2">
                                <div class="bg-accent-gold rounded-full h-2" style="width: 25%"></div>
                            </div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/10">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium">Top Performing Portfolios</span>
                                <span class="text-accent-gold font-bold">40%+</span>
                            </div>
                            <div class="w-full bg-white/10 rounded-full h-2">
                                <div class="bg-accent-gold rounded-full h-2" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm italic">
                        Our investment portfolios have consistently outperformed the market, with some portfolios achieving returns of over 40%.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Private Equity & Investment Strategy -->
    <section class="py-24 bg-white dark:bg-primary/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div>
                    <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">High Growth</span>
                    <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">Private Equity</h2>
                    <div class="h-1 w-20 bg-accent-gold mb-8"></div>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        Private equity involves investing in private companies or acquiring them outright, with the aim of improving their operations
                        and increasing their value before selling them for a profit.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-8">
                        Our Private Equity division has been highly successful in identifying and investing in promising companies across a range of
                        industries.
                    </p>

                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-background-light dark:bg-white/5 p-5 rounded-xl text-center border border-gray-100 dark:border-white/5">
                            <div class="text-2xl font-bold text-accent-gold mb-1">50+</div>
                            <div class="text-xs text-gray-500 dark:text-gray-400">Companies</div>
                        </div>
                        <div class="bg-background-light dark:bg-white/5 p-5 rounded-xl text-center border border-gray-100 dark:border-white/5">
                            <div class="text-2xl font-bold text-accent-gold mb-1">£3B+</div>
                            <div class="text-xs text-gray-500 dark:text-gray-400">Invested</div>
                        </div>
                        <div class="bg-background-light dark:bg-white/5 p-5 rounded-xl text-center border border-gray-100 dark:border-white/5">
                            <div class="text-2xl font-bold text-accent-gold mb-1">25%</div>
                            <div class="text-xs text-gray-500 dark:text-gray-400">Avg IRR</div>
                        </div>
                    </div>
                </div>

                <div>
                    <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Our Approach</span>
                    <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">Investment Strategy</h2>
                    <div class="h-1 w-20 bg-accent-gold mb-8"></div>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        Our investment strategy for fixed income securities, bonds, and CDs is focused on investing in high-quality, low-risk
                        investments that provide a steady stream of income. Our team carefully analyses each opportunity, looking at credit quality,
                        interest rate risk, and liquidity.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="bg-accent-gold/10 p-2 rounded-full mr-4 mt-1 shrink-0">
                                <span class="material-icons text-accent-gold text-sm">location_city</span>
                            </span>
                            <div>
                                <h3 class="font-serif text-lg text-primary dark:text-white mb-1">Municipal Bonds</h3>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">
                                    Over £500M invested in 2020 with an average yield of 3.5%, generating £17M+ in annual interest income.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-accent-gold/10 p-2 rounded-full mr-4 mt-1 shrink-0">
                                <span class="material-icons text-accent-gold text-sm">corporate_fare</span>
                            </span>
                            <div>
                                <h3 class="font-serif text-lg text-primary dark:text-white mb-1">Corporate Bonds</h3>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">
                                    Over £1B invested in 2020 with an average yield of 4.2%, generating £42M+ in annual interest income.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-accent-gold/10 p-2 rounded-full mr-4 mt-1 shrink-0">
                                <span class="material-icons text-accent-gold text-sm">account_balance_wallet</span>
                            </span>
                            <div>
                                <h3 class="font-serif text-lg text-primary dark:text-white mb-1">Certificates of Deposit</h3>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">
                                    Over £250M invested in 2020 with an average yield of 2.5%, generating £6M+ in annual interest income.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-24 bg-background-light dark:bg-background-dark border-t border-primary/5 dark:border-white/5">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-serif text-3xl md:text-5xl text-primary dark:text-white mb-6">Invest in Securities</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 mb-10 leading-relaxed">
                Join us in building a robust, diversified portfolio with our proven track record in fixed income, ETFs, mutual funds, and private
                equity.
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
