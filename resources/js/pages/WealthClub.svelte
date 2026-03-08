<script>
    import Layout from '@/components/frontend/Layout.svelte';
    import { onMount } from 'svelte';
    import { fade, fly } from 'svelte/transition';
    import { Link } from '@inertiajs/svelte';

    let mounted = $state(false);
    onMount(() => {
        mounted = true;
    });
</script>

<Layout>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-24 lg:pt-48 lg:pb-40 overflow-hidden bg-background-light dark:bg-background-dark">
        <!-- Abstract Background Pattern -->
        <div class="absolute inset-0 z-0 opacity-30 pointer-events-none">
            <div
                class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-b from-gray-200 to-transparent dark:from-white/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"
            ></div>
            <div
                class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-t from-accent-gold/20 to-transparent rounded-full blur-3xl translate-y-1/3 -translate-x-1/4"
            ></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            {#if mounted}
                <div
                    in:fade={{ duration: 800, delay: 100 }}
                    class="inline-block py-1 px-3 rounded-full bg-primary/5 dark:bg-accent-gold/5 text-primary dark:text-accent-gold text-xs font-semibold tracking-widest uppercase mb-8 border border-primary/10 dark:border-accent-gold/10 font-display"
                >
                    Invitation Only
                </div>
                <h1
                    in:fly={{ y: 20, duration: 800, delay: 300 }}
                    class="text-5xl md:text-7xl lg:text-8xl font-serif font-medium text-primary dark:text-white mb-8 leading-tight tracking-tight"
                >
                    Wealth Beyond <br />
                    <span class="italic text-gray-400 dark:text-gray-600 font-light">Management.</span>
                </h1>
                <p
                    in:fly={{ y: 20, duration: 800, delay: 500 }}
                    class="mt-4 max-w-2xl mx-auto text-xl text-gray-600 dark:text-gray-300 font-light leading-relaxed font-display"
                >
                    Access to off-market opportunities, personalized estate planning, and a network of global leaders. Designed for the 0.1%.
                </p>
                <div in:fly={{ y: 20, duration: 800, delay: 700 }} class="mt-12 flex justify-center gap-6">
                    <button
                        class="px-10 py-4 bg-accent-gold hover:bg-accent-gold/90 text-white rounded-full font-medium text-lg transition-all shadow-lg shadow-accent-gold/20 flex items-center gap-2 group font-display"
                    >
                        Request Invitation
                        <span class="material-icons text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </button>
                </div>
                <p
                    in:fly={{ y: 20, duration: 800, delay: 900 }}
                    class="mt-6 text-xs text-gray-400 dark:text-gray-600 uppercase tracking-widest font-display"
                >
                    Limited Intake for Q4 2023
                </p>
            {/if}
        </div>
    </section>

    <!-- The Privilege Grid -->
    <section class="py-24 bg-white dark:bg-background-dark relative border-t border-gray-100 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-3xl md:text-4xl font-serif text-primary dark:text-white mb-4">The Privileges</h2>
                <div class="h-1 w-20 bg-accent-gold mx-auto"></div>
                <p class="mt-4 text-gray-500 dark:text-gray-400 font-display">Curated specifically for ultra-high-net-worth individuals.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="group p-8 bg-background-light dark:bg-white/5 rounded-lg border border-transparent hover:border-accent-gold transition-all duration-300"
                >
                    <div
                        class="w-12 h-12 rounded-full bg-primary/5 dark:bg-white/10 flex items-center justify-center mb-6 group-hover:bg-accent-gold/10 transition-colors"
                    >
                        <span class="material-icons text-primary dark:text-white group-hover:text-accent-gold transition-colors">vpn_key</span>
                    </div>
                    <h3 class="text-xl font-semibold text-primary dark:text-white mb-3 font-serif">Private Equity Access</h3>
                    <p class="text-gray-600 dark:text-gray-400 font-light leading-relaxed font-display">
                        Direct entry into pre-IPO rounds and exclusive venture capital funds not available to the public market.
                    </p>
                </div>

                <!-- Card 2 -->
                <div
                    class="group p-8 bg-background-light dark:bg-white/5 rounded-lg border border-transparent hover:border-accent-gold transition-all duration-300"
                >
                    <div
                        class="w-12 h-12 rounded-full bg-primary/5 dark:bg-white/10 flex items-center justify-center mb-6 group-hover:bg-accent-gold/10 transition-colors"
                    >
                        <span class="material-icons text-primary dark:text-white group-hover:text-accent-gold transition-colors">room_service</span>
                    </div>
                    <h3 class="text-xl font-semibold text-primary dark:text-white mb-3 font-serif">Concierge Banking</h3>
                    <p class="text-gray-600 dark:text-gray-400 font-light leading-relaxed font-display">
                        24/7 dedicated liaison for liquidity management, cross-border transfers, and complex asset acquisition.
                    </p>
                </div>

                <!-- Card 3 -->
                <div
                    class="group p-8 bg-background-light dark:bg-white/5 rounded-lg border border-transparent hover:border-accent-gold transition-all duration-300"
                >
                    <div
                        class="w-12 h-12 rounded-full bg-primary/5 dark:bg-white/10 flex items-center justify-center mb-6 group-hover:bg-accent-gold/10 transition-colors"
                    >
                        <span class="material-icons text-primary dark:text-white group-hover:text-accent-gold transition-colors">diversity_2</span>
                    </div>
                    <h3 class="text-xl font-semibold text-primary dark:text-white mb-3 font-serif">Legacy Planning</h3>
                    <p class="text-gray-600 dark:text-gray-400 font-light leading-relaxed font-display">
                        Sophisticated trust structures and multi-generational wealth transfer strategies tailored to your family's vision.
                    </p>
                </div>

                <!-- Card 4 -->
                <div
                    class="group p-8 bg-background-light dark:bg-white/5 rounded-lg border border-transparent hover:border-accent-gold transition-all duration-300"
                >
                    <div
                        class="w-12 h-12 rounded-full bg-primary/5 dark:bg-white/10 flex items-center justify-center mb-6 group-hover:bg-accent-gold/10 transition-colors"
                    >
                        <span class="material-icons text-primary dark:text-white group-hover:text-accent-gold transition-colors">public</span>
                    </div>
                    <h3 class="text-xl font-semibold text-primary dark:text-white mb-3 font-serif">Global Summits</h3>
                    <p class="text-gray-600 dark:text-gray-400 font-light leading-relaxed font-display">
                        Invitations to closed-door economic forums in Davos, Singapore, and New York with world leaders.
                    </p>
                </div>

                <!-- Card 5 -->
                <div
                    class="group p-8 bg-background-light dark:bg-white/5 rounded-lg border border-transparent hover:border-accent-gold transition-all duration-300"
                >
                    <div
                        class="w-12 h-12 rounded-full bg-primary/5 dark:bg-white/10 flex items-center justify-center mb-6 group-hover:bg-accent-gold/10 transition-colors"
                    >
                        <span class="material-icons text-primary dark:text-white group-hover:text-accent-gold transition-colors">gavel</span>
                    </div>
                    <h3 class="text-xl font-semibold text-primary dark:text-white mb-3 font-serif">Legal Retainers</h3>
                    <p class="text-gray-600 dark:text-gray-400 font-light leading-relaxed font-display">
                        On-demand access to top-tier legal counsel for international property, tax law, and corporate structuring.
                    </p>
                </div>

                <!-- Card 6 -->
                <div
                    class="group p-8 bg-background-light dark:bg-white/5 rounded-lg border border-transparent hover:border-accent-gold transition-all duration-300"
                >
                    <div
                        class="w-12 h-12 rounded-full bg-primary/5 dark:bg-white/10 flex items-center justify-center mb-6 group-hover:bg-accent-gold/10 transition-colors"
                    >
                        <span class="material-icons text-primary dark:text-white group-hover:text-accent-gold transition-colors">security</span>
                    </div>
                    <h3 class="text-xl font-semibold text-primary dark:text-white mb-3 font-serif">Asset Protection</h3>
                    <p class="text-gray-600 dark:text-gray-400 font-light leading-relaxed font-display">
                        Advanced strategies to insulate your wealth from market volatility and liability, ensuring long-term preservation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-24 bg-primary text-white relative overflow-hidden">
        <div
            class="absolute top-0 right-0 w-full h-full opacity-10 pointer-events-none"
            style="background-image: radial-gradient(#C5A059 1px, transparent 1px); background-size: 32px 32px;"
        ></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
            <span class="text-6xl text-accent-gold font-serif opacity-50">"</span>
            <blockquote class="text-3xl md:text-4xl lg:text-5xl font-serif leading-tight mb-8 text-white/90">
                The level of discretion and access provided by The Wealth Club is unparalleled in the modern banking landscape.
            </blockquote>
            <cite class="not-italic flex flex-col items-center">
                <span class="text-lg font-semibold tracking-wide font-display">Alexander V.</span>
                <span class="text-accent-gold text-sm uppercase tracking-widest mt-1 font-display">Founding Member since 2018</span>
            </cite>
        </div>
    </section>

    <!-- Membership Criteria -->
    <section class="py-24 bg-background-light dark:bg-background-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative h-96 w-full rounded-lg overflow-hidden shadow-2xl">
                    <img
                        alt="Abstract dark luxury texture with gold accents representing elite status"
                        class="absolute inset-0 w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDrrrfnrXWGvTtpVyIlO1Glh9i28QYzFjRw07g-RWkwGSwNFYIZQ1bVPrcD4BO8PmHDEAruq0BFcGheZzED8gDoG0Sds2qFNtXL1tHOZ2ewDPAdriQUUPwziq_gmZvmNmW-HMVxcBCJiy_TZtelI7vo4C8q_4NKnmdIFOeluRgnf5b2mz34pJoLAOlnTWLxGCqpZXf5f9Yuvto5RpShNemaKGR9WhtGKqTTdhFFE2ui3IopffuU40DNODYCom2_o-YVXnl3fEjPI7c"
                    />
                    <div class="absolute inset-0 bg-primary/40"></div>
                    <div class="absolute bottom-8 left-8 text-white">
                        <p class="text-sm uppercase tracking-widest mb-1 font-display">Status</p>
                        <p class="text-3xl font-serif">Elite Tier</p>
                    </div>
                </div>
                <div>
                    <h2 class="text-3xl md:text-4xl font-serif text-primary dark:text-white mb-8">Membership Criteria</h2>
                    <div class="space-y-8">
                        <div class="flex gap-6 pb-8 border-b border-gray-200 dark:border-gray-700">
                            <span class="text-accent-gold text-2xl font-serif font-bold">01.</span>
                            <div>
                                <h3 class="text-lg font-semibold text-primary dark:text-white mb-2 font-display">Minimum Liquidity</h3>
                                <p class="text-gray-600 dark:text-gray-400 font-display">
                                    Prospective members must demonstrate investable assets exceeding $10M USD to ensure alignment with our deal flow.
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-6 pb-8 border-b border-gray-200 dark:border-gray-700">
                            <span class="text-accent-gold text-2xl font-serif font-bold">02.</span>
                            <div>
                                <h3 class="text-lg font-semibold text-primary dark:text-white mb-2 font-display">By Invitation or Referral</h3>
                                <p class="text-gray-600 dark:text-gray-400 font-display">
                                    Membership is capped at 500 families globally. Entry is granted strictly via current member referral or board
                                    invitation.
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <span class="text-accent-gold text-2xl font-serif font-bold">03.</span>
                            <div>
                                <h3 class="text-lg font-semibold text-primary dark:text-white mb-2 font-display">Fiduciary Alignment</h3>
                                <p class="text-gray-600 dark:text-gray-400 font-display">
                                    We require a preliminary compatibility assessment to ensure our fiduciary standards match your long-term goals.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-20 bg-white dark:bg-background-dark border-t border-gray-100 dark:border-gray-800">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-serif text-primary dark:text-white mb-6">Experience the Exceptional</h2>
            <p class="text-gray-600 dark:text-gray-400 mb-10 text-lg font-display">
                If you meet the criteria and wish to be considered for the next intake, please submit your credentials securely.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <button
                    class="px-8 py-3 bg-primary text-white hover:bg-primary/90 dark:bg-white dark:text-primary dark:hover:bg-gray-100 rounded-full font-medium transition-colors font-display"
                >
                    Submit Credentials
                </button>
                <button
                    class="px-8 py-3 border border-gray-300 dark:border-gray-600 text-primary dark:text-white hover:border-accent-gold hover:text-accent-gold dark:hover:border-accent-gold dark:hover:text-accent-gold rounded-full font-medium transition-colors font-display"
                >
                    Contact Liaison
                </button>
            </div>
        </div>
    </section>

</Layout>
