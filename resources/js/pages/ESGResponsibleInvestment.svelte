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
                class="inline-block py-1 px-3 rounded-full bg-success-green/10 text-success-green text-xs font-semibold tracking-wider uppercase mb-6 border border-success-green/20 animate-fade-in"
            >
                Sustainable Future
            </span>
            <h1 class="font-serif text-5xl lg:text-7xl font-medium text-primary dark:text-white leading-tight mb-8 animate-fade-in">
                ESG & <br />
                <span class="italic text-success-green">Responsible Investment</span>
            </h1>
            <p
                class="text-xl text-gray-600 dark:text-gray-300 font-light leading-relaxed max-w-3xl mx-auto animate-fade-in"
                style="animation-delay: 0.1s;"
            >
                At {$SYSTEM.siteName}, we pride ourselves on our commitment to environmental, social, and governance (ESG) principles.
            </p>
        </div>
        <div class="absolute -z-10 -top-20 -right-20 w-96 h-96 bg-success-green/5 rounded-full blur-3xl"></div>
        <div class="absolute -z-10 bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary/10 to-transparent"></div>
    </header>

    <!-- As an Investment Company -->
    <section class="py-24 bg-white dark:bg-primary/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="absolute inset-0 bg-success-green/10 transform -translate-x-4 translate-y-4 rounded-xl"></div>
                    <img
                        src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&q=80&w=800"
                        alt="Sustainable Investment"
                        class="relative rounded-xl shadow-lg w-full h-auto object-cover aspect-[4/3]"
                    />
                </div>
                <div>
                    <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">As an Investment Company</h2>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        We have implemented a comprehensive ESG integration program across all investment strategies and asset classes. The program
                        incorporates ESG criteria into the investment process, including in-depth analysis of sustainability risks and opportunities,
                        active ownership, and impact investing.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        We have partnered with industry leaders, including the Principles for Responsible Investment (PRI), a United Nations-supported
                        organization that works to promote responsible investment practices.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        To further strengthen our commitment, we have established an ESG committee responsible for setting priorities, monitoring
                        progress, and ensuring alignment with our mission.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Initiatives Grid -->
    <section class="py-24 bg-background-light dark:bg-background-dark border-t border-primary/5 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-success-green font-bold text-sm tracking-wider uppercase mb-2 block">Our Impact</span>
                <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">ESG Initiatives</h2>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                    Designed not only to meet ESG goals but to make a positive impact on society and the environment.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Initiative 1 -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-sm border border-primary/5 dark:border-white/10 hover:border-success-green/30 transition-colors"
                >
                    <div class="w-12 h-12 bg-success-green/10 rounded-lg flex items-center justify-center mb-6 text-success-green">
                        <span class="material-icons">solar_power</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-3">Renewable Energy</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                        Significant investment in solar, wind, and hydroelectric power, supporting the transition to a low-carbon economy while
                        generating solid returns.
                    </p>
                </div>

                <!-- Initiative 2 -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-sm border border-primary/5 dark:border-white/10 hover:border-success-green/30 transition-colors"
                >
                    <div class="w-12 h-12 bg-success-green/10 rounded-lg flex items-center justify-center mb-6 text-success-green">
                        <span class="material-icons">agriculture</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-3">Sustainable Agriculture</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                        Investing in projects focused on organic farming, agroforestry, and crop rotation to improve soil health and support
                        small-scale farmers.
                    </p>
                </div>

                <!-- Initiative 3 -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-sm border border-primary/5 dark:border-white/10 hover:border-success-green/30 transition-colors"
                >
                    <div class="w-12 h-12 bg-success-green/10 rounded-lg flex items-center justify-center mb-6 text-success-green">
                        <span class="material-icons">trending_up</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-3">Socially Responsible Investing</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                        Prioritizing companies with strong ESG scores to reduce risk and contribute to a more sustainable economy.
                    </p>
                </div>

                <!-- Initiative 4 -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-sm border border-primary/5 dark:border-white/10 hover:border-success-green/30 transition-colors"
                >
                    <div class="w-12 h-12 bg-success-green/10 rounded-lg flex items-center justify-center mb-6 text-success-green">
                        <span class="material-icons">recycling</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-3">Reducing Waste</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                        Initiatives to reduce paper use, increase recycling, and improve energy efficiency in our offices to minimize our
                        environmental footprint.
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
            <h2 class="font-serif text-3xl md:text-5xl mb-6">Invest in a Better World</h2>
            <p class="text-gray-300 text-lg mb-10 max-w-2xl mx-auto">Join us in creating a sustainable and equitable future for all.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <Link
                    href="/contact-us"
                    class="bg-success-green hover:bg-emerald-600 text-white px-8 py-4 rounded-full text-base font-medium transition-all shadow-lg hover:shadow-xl hover:-translate-y-1"
                >
                    Contact Us
                </Link>
            </div>
        </div>
    </section>
</Layout>
