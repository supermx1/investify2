<script lang="ts">
    import Layout from '@/components/frontend/Layout.svelte';

    import { fade, fly } from 'svelte/transition';
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
                alt="Mutual Funds Analysis"
                class="w-full h-full object-cover"
            />
        </div>

        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span
                    class="inline-block py-1 px-3 rounded-full bg-accent-gold/10 text-accent-gold text-xs font-semibold tracking-wider uppercase mb-6 border border-accent-gold/20 backdrop-blur-sm"
                >
                    Mutual Funds Division
                </span>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-serif font-medium text-primary dark:text-white mb-6 leading-tight">
                    Mutual Funds <br />
                    <span class="italic text-accent-gold">Insights.</span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 font-light mb-10 leading-relaxed max-w-2xl">
                    Mutual funds are a powerful investment tool that provides individuals with the opportunity to diversify their portfolio and access
                    a wide range of assets.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a
                        href="/register"
                        target="_blank"
                        class="bg-primary hover:bg-primary-light dark:bg-accent-gold dark:hover:bg-accent-gold/90 text-white px-8 py-3.5 rounded-full text-base font-medium transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 flex items-center gap-2"
                    >
                        Start Your Journey
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
                    <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">Donavan Knapp</h2>
                    <div class="h-1 w-20 bg-accent-gold mb-8"></div>
                    <p class="text-xl text-gray-500 dark:text-gray-400 mb-6 italic font-serif">Head, Mutual Funds Division</p>
                    <div class="prose prose-lg dark:prose-invert">
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                            "Through mutual funds, investors can benefit from professional management and the expertise of investment managers,
                            allowing them to potentially achieve their long-term financial goals."
                        </p>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            As one of the most popular investment vehicles available to investors, mutual funds have been a key part of Investify's
                            investment strategy for many years. We have successfully invested in mutual funds across a variety of asset classes and
                            have seen consistent returns from these investments.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -inset-4 bg-accent-gold/20 rounded-xl blur-lg transform rotate-2"></div>
                    <img
                        src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&q=80&w=1200"
                        alt="Investment Strategy Meeting"
                        class="relative rounded-xl shadow-2xl w-full h-auto object-cover aspect-[4/3] grayscale hover:grayscale-0 transition-all duration-700"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Strategy Section -->
    <section class="py-24 bg-gray-50 dark:bg-primary/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-4">Our Investment Approach</h2>
                <p class="text-gray-500 dark:text-gray-400 text-lg">
                    Our team of experienced investment professionals carefully selects a range of mutual funds to create a portfolio that is tailored
                    to meet our clients' specific investment goals.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Managed Portfolios -->
                <div class="bg-white dark:bg-primary/20 p-8 rounded-2xl shadow-sm hover:shadow-md transition-all group">
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">pie_chart</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Managed Portfolios</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        We allow our clients to invest in a diversified portfolio of mutual funds, tailored to their risk tolerance and financial
                        objectives.
                    </p>
                </div>

                <!-- Advisory Services -->
                <div class="bg-white dark:bg-primary/20 p-8 rounded-2xl shadow-sm hover:shadow-md transition-all group">
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">support_agent</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Advisory Services</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        Our team of investment advisors works closely with clients to create a customised mutual fund investment strategy designed to
                        meet specific objectives.
                    </p>
                </div>

                <!-- Retirement Planning -->
                <div class="bg-white dark:bg-primary/20 p-8 rounded-2xl shadow-sm hover:shadow-md transition-all group">
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">savings</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Retirement Planning</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        Mutual funds offer a diversified investment strategy that mitigates risk while providing potential for growth, making them
                        ideal for retirement planning.
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
                    <h2 class="font-serif text-3xl md:text-4xl mb-6">Proven Performance</h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-8">
                        Our investment portfolios have consistently outperformed the market. In 2022, we saw significant returns across our mutual
                        fund investments.
                    </p>
                    <a
                        href="/register"
                        target="_blank"
                        class="inline-flex items-center gap-2 bg-accent-gold hover:bg-accent-gold/90 text-white px-8 py-3 rounded-full font-medium transition-all"
                    >
                        View Our Performance Data
                        <span class="material-icons text-sm">show_chart</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/10">
                        <div class="text-4xl font-bold text-accent-gold mb-2">20.2%</div>
                        <div class="text-sm text-gray-300">Average Return for Equity Mutual Funds</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/10">
                        <div class="text-4xl font-bold text-accent-gold mb-2">7.5%</div>
                        <div class="text-sm text-gray-300">Average Return for Fixed Income Funds</div>
                    </div>
                    <div class="col-span-2 bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/10">
                        <div class="text-4xl font-bold text-accent-gold mb-2">>40%</div>
                        <div class="text-sm text-gray-300">Returns Achieved by Top Performing Portfolios</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-24 bg-white dark:bg-primary/5">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-serif text-3xl md:text-5xl text-primary dark:text-white mb-6">Ready to Diversify Your Portfolio?</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 mb-10 leading-relaxed">
                Investing in mutual funds is a smart way to grow your wealth while managing risk. Our experts are here to guide you every step of the
                way.
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
