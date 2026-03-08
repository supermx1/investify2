<script>
    import Layout from '@/components/frontend/Layout.svelte';
    import { Link } from '@inertiajs/svelte';
    import { onMount } from 'svelte';
    import { fade, fly } from 'svelte/transition';

    let mounted = false;
    onMount(() => {
        mounted = true;
    });
</script>

<Layout>
    <header class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-background-light dark:bg-background-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-center">
                <!-- Text Content -->
                <div class="lg:col-span-5 text-center lg:text-left mb-12 lg:mb-0">
                    {#if mounted}
                        <div
                            in:fade={{ duration: 800, delay: 100 }}
                            class="inline-block px-3 py-1 mb-6 text-xs font-semibold tracking-wider text-primary dark:text-accent-gold uppercase bg-primary/10 dark:bg-accent-gold/10 rounded-full border border-primary/20 dark:border-accent-gold/20"
                        >
                            Private Wealth Management
                        </div>
                        <h1
                            in:fly={{ y: 20, duration: 800, delay: 300 }}
                            class="text-5xl md:text-6xl font-serif font-medium text-primary dark:text-white leading-tight mb-6"
                        >
                            Preserving Legacy, <br />
                            <span class="text-accent-gold italic">Architecting Future.</span>
                        </h1>
                        <p
                            in:fly={{ y: 20, duration: 800, delay: 500 }}
                            class="mt-4 text-lg text-gray-600 dark:text-gray-400 leading-relaxed max-w-lg mx-auto lg:mx-0 font-light"
                        >
                            Exclusive wealth management strategies tailored for the modern elite. We blend traditional stewardship with cutting-edge
                            financial architecture.
                        </p>
                        <div
                            in:fly={{ y: 20, duration: 800, delay: 700 }}
                            class="mt-10 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start"
                        >
                            <Link
                                class="px-8 py-3.5 text-base font-medium rounded-lg text-white bg-primary hover:bg-primary-light shadow-lg shadow-primary/25 transition-all"
                                href="#services"
                            >
                                Explore Services
                            </Link>
                            <Link
                                class="px-8 py-3.5 text-base font-medium rounded-lg text-primary dark:text-white bg-white dark:bg-white/5 border border-gray-200 dark:border-white/10 hover:bg-gray-50 dark:hover:bg-white/10 transition-all"
                                href="/login"
                            >
                                Client Login
                            </Link>
                        </div>
                        <!-- Trust Indicators -->
                        <div
                            in:fly={{ y: 20, duration: 800, delay: 900 }}
                            class="mt-12 pt-8 border-t border-gray-200 dark:border-white/10 flex items-center justify-center lg:justify-start gap-8"
                        >
                            <div>
                                <p class="text-3xl font-serif text-primary dark:text-white">$12B+</p>
                                <p class="text-xs text-gray-500 uppercase tracking-wide mt-1">Assets Managed</p>
                            </div>
                            <div class="w-px h-10 bg-gray-200 dark:bg-white/10"></div>
                            <div>
                                <p class="text-3xl font-serif text-primary dark:text-white">35+</p>
                                <p class="text-xs text-gray-500 uppercase tracking-wide mt-1">Years Experience</p>
                            </div>
                        </div>
                    {/if}
                </div>

                <!-- Hero Visual -->
                <div class="lg:col-span-7 relative">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl shadow-primary/10 group">
                        <!-- Main Hero Image -->
                        <img
                            alt="Modern city skyline with glass skyscrapers reflecting blue sky"
                            class="w-full h-[600px] object-cover object-center transform transition-transform duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-muTqG_LXXWSZYz0IRwLKM2tVWxdTONtPJ7YIxV56c_SdfaPT8r3Mi7UuzJX167CcHuyKA37gIijI0FBy2wKvWZz9cevtah5TAD7-HstnHBNIKblGNQ5-zGjVtiB25Y0212AEcU0xC4gPJ7YCv6nzY-fDeaY4yNY5-G5Sox1OXSodWSXwg634E6T_s2FZI01hM0w3MldGLST-dKQOqV2kFpqIKVNMKtDcZ4nEv9b5IzG6_tW_iffdylUgm8H9DrVF0yTnbvi--PQ"
                        />

                        <!-- Floating Performance Card -->
                        <div
                            class="absolute -bottom-8 -left-8 md:bottom-10 md:left-10 bg-white dark:bg-primary p-6 rounded-xl shadow-xl border border-gray-100 dark:border-white/10 max-w-xs w-full animate-fade-in-up"
                        >
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-sm font-semibold text-gray-700 dark:text-gray-200">Portfolio Performance</h3>
                                <span
                                    class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400"
                                >
                                    YTD
                                </span>
                            </div>
                            <div class="flex items-end gap-2 mb-4">
                                <span class="text-3xl font-bold text-primary dark:text-white">+12.4%</span>
                                <span class="text-sm font-medium text-success-green mb-1 flex items-center">
                                    <span class="material-icons text-sm mr-0.5">trending_up</span> Return
                                </span>
                            </div>
                            <!-- Clean Line Chart Visualization -->
                            <div class="h-16 flex items-end gap-1">
                                <div
                                    class="w-1/6 bg-gray-100 dark:bg-white/5 h-[40%] rounded-t-sm relative overflow-hidden group-hover:h-[45%] transition-all duration-500"
                                >
                                    <div class="absolute bottom-0 w-full h-full bg-primary/20 dark:bg-accent-gold/20"></div>
                                </div>
                                <div
                                    class="w-1/6 bg-gray-100 dark:bg-white/5 h-[55%] rounded-t-sm relative overflow-hidden group-hover:h-[60%] transition-all duration-500 delay-75"
                                >
                                    <div class="absolute bottom-0 w-full h-full bg-primary/30 dark:bg-accent-gold/30"></div>
                                </div>
                                <div
                                    class="w-1/6 bg-gray-100 dark:bg-white/5 h-[50%] rounded-t-sm relative overflow-hidden group-hover:h-[52%] transition-all duration-500 delay-100"
                                >
                                    <div class="absolute bottom-0 w-full h-full bg-primary/40 dark:bg-accent-gold/40"></div>
                                </div>
                                <div
                                    class="w-1/6 bg-gray-100 dark:bg-white/5 h-[70%] rounded-t-sm relative overflow-hidden group-hover:h-[75%] transition-all duration-500 delay-150"
                                >
                                    <div class="absolute bottom-0 w-full h-full bg-primary/60 dark:bg-accent-gold/60"></div>
                                </div>
                                <div
                                    class="w-1/6 bg-gray-100 dark:bg-white/5 h-[85%] rounded-t-sm relative overflow-hidden group-hover:h-[90%] transition-all duration-500 delay-200"
                                >
                                    <div class="absolute bottom-0 w-full h-full bg-primary/80 dark:bg-accent-gold/80"></div>
                                </div>
                                <div class="w-1/6 bg-success-green h-[95%] rounded-t-sm relative shadow-[0_0_10px_rgba(16,185,129,0.4)]"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Decorative graphic -->
                    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 bg-primary/5 dark:bg-white/5 rounded-full blur-3xl -z-10"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Bento Grid Section -->
    <section class="py-24 bg-white dark:bg-primary relative" id="services">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-serif text-primary dark:text-white mb-4">How We Operate</h2>
                <p class="text-gray-500 dark:text-gray-400 max-w-2xl mx-auto">
                    Our methodology is disciplined, transparent, and built entirely around your specific life goals.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Step 1: Discovery -->
                <div
                    class="bg-background-light dark:bg-white/5 p-8 rounded-xl border border-gray-100 dark:border-white/10 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group"
                >
                    <div
                        class="w-12 h-12 rounded-lg bg-primary/10 dark:bg-white/10 flex items-center justify-center text-primary dark:text-white mb-6 group-hover:bg-primary group-hover:text-white dark:group-hover:bg-white dark:group-hover:text-primary transition-colors"
                    >
                        <span class="material-icons">search</span>
                    </div>
                    <h3 class="text-xl font-serif text-primary dark:text-white mb-3">01. Discovery</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        We begin by mapping your unique financial DNA, understanding your aspirations, risk tolerance, and legacy goals.
                    </p>
                </div>

                <!-- Step 2: Strategy -->
                <div
                    class="bg-background-light dark:bg-white/5 p-8 rounded-xl border border-gray-100 dark:border-white/10 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group"
                >
                    <div
                        class="w-12 h-12 rounded-lg bg-primary/10 dark:bg-white/10 flex items-center justify-center text-primary dark:text-white mb-6 group-hover:bg-primary group-hover:text-white dark:group-hover:bg-white dark:group-hover:text-primary transition-colors"
                    >
                        <span class="material-icons">architecture</span>
                    </div>
                    <h3 class="text-xl font-serif text-primary dark:text-white mb-3">02. Strategy</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Our team crafts tailored asset allocation models designed to withstand volatility and capture long-term growth.
                    </p>
                </div>

                <!-- Step 3: Execution -->
                <div
                    class="bg-background-light dark:bg-white/5 p-8 rounded-xl border border-gray-100 dark:border-white/10 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group"
                >
                    <div
                        class="w-12 h-12 rounded-lg bg-primary/10 dark:bg-white/10 flex items-center justify-center text-primary dark:text-white mb-6 group-hover:bg-primary group-hover:text-white dark:group-hover:bg-white dark:group-hover:text-primary transition-colors"
                    >
                        <span class="material-icons">bolt</span>
                    </div>
                    <h3 class="text-xl font-serif text-primary dark:text-white mb-3">03. Execution</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Seamless deployment of capital across global markets using institutional-grade platforms and access.
                    </p>
                </div>

                <!-- Step 4: Review -->
                <div
                    class="bg-background-light dark:bg-white/5 p-8 rounded-xl border border-gray-100 dark:border-white/10 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group"
                >
                    <div
                        class="w-12 h-12 rounded-lg bg-primary/10 dark:bg-white/10 flex items-center justify-center text-primary dark:text-white mb-6 group-hover:bg-primary group-hover:text-white dark:group-hover:bg-white dark:group-hover:text-primary transition-colors"
                    >
                        <span class="material-icons">sync</span>
                    </div>
                    <h3 class="text-xl font-serif text-primary dark:text-white mb-3">04. Review</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Continuous optimization and reporting ensures your strategy evolves alongside your life and the market landscape.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Highlight Section (Visual Balance) -->
    <section class="py-24 bg-background-light dark:bg-background-dark border-t border-gray-200 dark:border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-24 items-center">
                <div class="relative order-2 lg:order-1">
                    <div class="absolute inset-0 bg-primary/5 rounded-2xl transform rotate-3 scale-105 -z-10"></div>
                    <img
                        alt="Meeting room with glass walls and executive team discussing"
                        class="rounded-xl shadow-lg border border-white dark:border-gray-700 w-full object-cover h-96"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0PHI7X3wQ-6A9N4D0F97zFjG5zNeGGNdcvtUZsm-NxYxjD3GHs2YfJKuqHMjOuTvAr1psYVMWcMlBp6qGE-Yo5japjFpAfWGYSTbc9Fq74wW-0Wytt0vu_nAPk2GPiehlVFlqd80KY101FT90LwM60alNtJ7YC8TNsF-5ti8MRMhdw-v1XfPoW7LUCAFqSBeuprMSLDZONUrdEvLoNE9rWCzgw1n-YNqZmZMKIGZ5eKjaBgMDCuX7r7PrZCwgd01rFdz7PtR5KAI"
                    />
                </div>
                <div class="order-1 lg:order-2 mb-12 lg:mb-0">
                    <h2 class="text-3xl md:text-4xl font-serif text-primary dark:text-white mb-6">Institutional Grade Access for Individuals</h2>
                    <p class="text-gray-600 dark:text-gray-400 text-lg mb-8 leading-relaxed">
                        We open doors that are typically closed. From private equity to direct real estate investment, our clients gain access to the
                        same opportunities as major endowments and pension funds.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="material-icons text-primary dark:text-accent-gold mr-3 mt-0.5">check_circle</span>
                            <span class="text-gray-700 dark:text-gray-300">Exclusive Private Market Deals</span>
                        </li>
                        <li class="flex items-start">
                            <span class="material-icons text-primary dark:text-accent-gold mr-3 mt-0.5">check_circle</span>
                            <span class="text-gray-700 dark:text-gray-300">Tax-Optimized Estate Planning</span>
                        </li>
                        <li class="flex items-start">
                            <span class="material-icons text-primary dark:text-accent-gold mr-3 mt-0.5">check_circle</span>
                            <span class="text-gray-700 dark:text-gray-300">Global Philanthropic Strategy</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</Layout>
