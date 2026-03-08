<script>
    import Layout from '@/components/frontend/Layout.svelte';
    import { Link } from '@inertiajs/svelte';
    import { onMount } from 'svelte';
    import { fade, fly } from 'svelte/transition';

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
                src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&q=80&w=2000"
                alt="Private Equity Meeting"
                class="w-full h-full object-cover"
            />
        </div>

        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span
                    class="inline-block py-1 px-3 rounded-full bg-accent-gold/10 text-accent-gold text-xs font-semibold tracking-wider uppercase mb-6 border border-accent-gold/20 animate-fade-in"
                >
                    Private Markets
                </span>
                <h1 class="font-serif text-5xl lg:text-7xl font-medium text-primary dark:text-white leading-tight mb-6 animate-fade-in">
                    Fueling Growth <br />
                    <span class="italic text-accent-gold">Creating Value.</span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 font-light leading-relaxed mb-8 animate-fade-in" style="animation-delay: 0.1s;">
                    Private equity offers significant opportunities for generating strong returns and creating long-term value through strategic
                    investments and active management.
                </p>
                <div class="flex flex-wrap gap-4 animate-fade-in" style="animation-delay: 0.2s;">
                    <a
                        target="_blank"
                        href="/register"
                        class="bg-primary hover:bg-primary-light dark:bg-accent-gold dark:hover:bg-accent-gold/90 text-white px-8 py-3.5 rounded-full text-base font-medium transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 flex items-center gap-2"
                    >
                        Start Your Journey
                        <span class="material-icons text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Introduction Section -->
    <section class="py-24 bg-white dark:bg-primary/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">Unlocking Hidden Value</h2>
                    <div class="h-1 w-20 bg-accent-gold mb-8"></div>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6 text-lg">
                        Private equity is a powerful investment vehicle for those looking to generate significant returns. It involves investing in
                        private companies or acquiring them outright, with the aim of improving their operations and increasing their value before
                        selling them for a profit.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        While private equity can be a high-risk, high-reward investment, it holds the potential for significant returns if executed
                        properly. Our Private Equity division has been highly successful in identifying and investing in promising companies across a
                        range of industries.
                    </p>

                    <div class="grid grid-cols-2 gap-6 mt-10">
                        <div class="border-l-2 border-accent-gold pl-6">
                            <span class="block text-3xl font-serif text-primary dark:text-white mb-1">50+</span>
                            <span class="text-sm text-gray-500 uppercase tracking-wider">Companies Invested</span>
                        </div>
                        <div class="border-l-2 border-accent-gold pl-6">
                            <span class="block text-3xl font-serif text-primary dark:text-white mb-1">£3B+</span>
                            <span class="text-sm text-gray-500 uppercase tracking-wider">Total Investment Value</span>
                        </div>
                        <div class="border-l-2 border-accent-gold pl-6">
                            <span class="block text-3xl font-serif text-primary dark:text-white mb-1">25%</span>
                            <span class="text-sm text-gray-500 uppercase tracking-wider">Average IRR</span>
                        </div>
                        <div class="border-l-2 border-accent-gold pl-6">
                            <span class="block text-3xl font-serif text-primary dark:text-white mb-1">10+</span>
                            <span class="text-sm text-gray-500 uppercase tracking-wider">Years of Success</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-accent-gold/10 transform translate-x-4 translate-y-4 rounded-xl"></div>
                    <img
                        src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=1200"
                        alt="Private Equity Analysis"
                        class="relative rounded-xl shadow-2xl w-full h-auto object-cover aspect-[4/3] grayscale hover:grayscale-0 transition-all duration-700"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Investment Approach -->
    <section class="py-24 bg-background-light dark:bg-background-dark border-t border-primary/5 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Our Methodology</span>
                <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-4">Strategic Investment Approach</h2>
                <p class="text-gray-500 dark:text-gray-400 text-lg">
                    We are highly selective, focusing on companies that have a strong competitive position, a proven business model, and a talented
                    management team.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-soft hover:shadow-soft-hover transition-all border border-gray-100 dark:border-white/5 group"
                >
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">manage_search</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Rigorous Selection</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        We invest in companies with potential for significant growth. Our strict due diligence ensures we only back businesses with
                        solid fundamentals and scalable models.
                    </p>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-soft hover:shadow-soft-hover transition-all border border-gray-100 dark:border-white/5 group"
                >
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">handshake</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Active Partnership</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        We work closely with management teams to implement strategies that drive growth. We don't just provide capital; we provide
                        expertise, networks, and operational support.
                    </p>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-soft hover:shadow-soft-hover transition-all border border-gray-100 dark:border-white/5 group"
                >
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">trending_up</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Value Creation</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        Our goal is to improve operations, refocus product offerings, and streamline efficiencies to increase value before exiting for
                        a profit.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies -->
    <section class="py-24 bg-white dark:bg-primary/5 border-t border-primary/5 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div>
                    <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Track Record</span>
                    <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-2">Success Stories</h2>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Case Study 1 -->
                <div class="group relative overflow-hidden rounded-2xl bg-primary text-white">
                    <div
                        class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&q=80&w=800')] bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                    ></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/80 to-transparent"></div>
                    <div class="relative p-10 h-full flex flex-col justify-end">
                        <span class="inline-block px-3 py-1 bg-accent-gold/20 text-accent-gold text-xs font-bold uppercase rounded mb-4 w-fit"
                            >Tech Turnaround</span
                        >
                        <h3 class="font-serif text-2xl mb-4">Tech Sector Revitalization</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            We invested in a technology company on the brink of bankruptcy. Working with management to refocus products and streamline
                            operations, we sold the company three years later for a <strong class="text-white">5x return</strong>.
                        </p>
                        <div class="flex items-center gap-2 text-accent-gold font-medium">
                            <span class="material-icons text-base">check_circle</span>
                            <span>500% ROI in 3 Years</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="group relative overflow-hidden rounded-2xl bg-primary text-white">
                    <div
                        class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80&w=800')] bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                    ></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/80 to-transparent"></div>
                    <div class="relative p-10 h-full flex flex-col justify-end">
                        <span class="inline-block px-3 py-1 bg-accent-gold/20 text-accent-gold text-xs font-bold uppercase rounded mb-4 w-fit"
                            >Healthcare Growth</span
                        >
                        <h3 class="font-serif text-2xl mb-4">Healthcare Operational Efficiency</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            Facing regulatory challenges, this healthcare company needed a new direction. We helped identify new revenue streams and
                            improved efficiency, leading to a <strong class="text-white">4x return</strong> in just two years.
                        </p>
                        <div class="flex items-center gap-2 text-accent-gold font-medium">
                            <span class="material-icons text-base">check_circle</span>
                            <span>400% ROI in 2 Years</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Quote -->
    <section class="py-24 bg-background-light dark:bg-background-dark">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <div class="mb-8">
                <img
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCW4J3IBDS-QzOSelR3bsRUBjflSMMi6wZ7XlxqgLkNdAniee2hqhWHYZdDxpn1MDbvvOi1YQowg5yeWLohBfoHGJ5vaVVQ_kbY7V2-D66e7FDcgFP1ctDDhv0YywLcoIJrNsRAH0Wku5TYcUqqHuZk38WSZZJR3NLy1fH3zPu9ldoZiQyRuZtVBZyC_kNGMDNGHXCMfQgqF-zCCMaYAH1o8xbveGoXk0nm4wlem9uy3_1AMSp87NubKMXXb3sz58z21Jbe8To99vM"
                    alt="Jordyn Juarez"
                    class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-white dark:border-primary shadow-lg invert grayscale hover:grayscale-0 transition-all duration-300"
                />
            </div>
            <blockquote class="font-serif text-2xl md:text-3xl text-primary dark:text-white leading-relaxed mb-6">
                "Our investment approach and track record of success will continue to generate strong returns for our investors. We don't just predict
                the future; we help build it."
            </blockquote>
            <cite class="not-italic">
                <div class="font-bold text-primary dark:text-white">Jordyn Juarez</div>
                <div class="text-accent-gold text-sm font-medium uppercase tracking-wider">Head, Private Equity Division</div>
            </cite>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative bg-primary text-white py-20 overflow-hidden">
        <div
            class="absolute inset-0 opacity-10"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDJgfkV4p5ejGJOCARfhxekNuQWwk-b9Hq0F5tnya6cQe6qqOUCTczb97oABQtJzZb41fEc_oH659AwnV-HzUlxcXbjxp3uS_BdGN3lx2WbqlO0qFmmtEgMnhdvPEWxQg_2pQ2m-VBqm1kgusevag5Jce9VYTSPJmxTdzjV05xnN8LH2SJHTgT7eH3e2KMDVg_2VDN9ll16SRzSxbTtahFVJ_udWwdGUTwwVPcUqtKlC4TnsTUphp8h6djZWtTkgohtbewXdaiz96s');"
        ></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
            <h2 class="font-serif text-3xl md:text-4xl mb-6">Ready to capitalize on private market opportunities?</h2>
            <p class="text-gray-300 text-lg mb-10 max-w-2xl mx-auto">Join our network of investors and access exclusive private equity deals.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <Link
                    href="/register"
                    class="bg-accent-gold hover:bg-[#b08d4b] text-white px-8 py-3.5 rounded-full text-base font-medium transition-all shadow-lg hover:shadow-xl hover:-translate-y-1"
                >
                    Get Started
                </Link>
                <Link
                    href="/contact-us"
                    class="bg-transparent border border-white/30 hover:bg-white/10 text-white px-8 py-3.5 rounded-full text-base font-medium transition-all"
                >
                    Contact Advisor
                </Link>
            </div>
        </div>
    </section>
</Layout>
