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
                src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&q=80&w=2000"
                alt="Pharmaceutical Research"
                class="w-full h-full object-cover"
            />
        </div>

        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span
                    class="inline-block py-1 px-3 rounded-full bg-accent-gold/10 text-accent-gold text-xs font-semibold tracking-wider uppercase mb-6 border border-accent-gold/20 backdrop-blur-sm"
                >
                    Pharmaceutical Division
                </span>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-serif font-medium text-primary dark:text-white mb-6 leading-tight">
                    Pharma <br />
                    <span class="italic text-accent-gold">Insights.</span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 font-light mb-10 leading-relaxed max-w-2xl">
                    Pharmaceuticals have the power to transform lives and alleviate suffering, making them crucial for the betterment of society.
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

    <!-- Introduction Section -->
    <section class="py-24 bg-white dark:bg-primary/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Leadership</span>
                    <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">Simeon Acevedo</h2>
                    <div class="h-1 w-20 bg-accent-gold mb-8"></div>
                    <p class="text-xl text-gray-500 dark:text-gray-400 mb-6 italic font-serif">Head, Pharmaceutical Division</p>
                    <div class="prose prose-lg dark:prose-invert">
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                            "The pharmaceutical sector is an industry that focuses on the research, development, and commercialisation of drugs for
                            the prevention, treatment, and cure of diseases. It is a complex industry that involves various players such as
                            pharmaceutical companies, research institutions, government bodies, and healthcare providers."
                        </p>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            The industry has been able to achieve significant milestones over the years, leading to a substantial improvement in the
                            quality of life of people across the world.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -inset-4 bg-accent-gold/20 rounded-xl blur-lg transform rotate-2"></div>
                    <img
                        src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80&w=1200"
                        alt="Pharmacists working together"
                        class="relative rounded-xl shadow-2xl w-full h-auto object-cover aspect-[4/3] grayscale hover:grayscale-0 transition-all duration-700"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Key Innovations -->
    <section class="py-24 bg-background-light dark:bg-background-dark border-t border-primary/5 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Our Focus</span>
                <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-4">Key Innovations</h2>
                <p class="text-gray-500 dark:text-gray-400 text-lg">
                    We invest in companies driving breakthroughs that reshape healthcare and improve patient outcomes.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Drug Delivery -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-soft hover:shadow-soft-hover transition-all border border-gray-100 dark:border-white/5 group"
                >
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">medication</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Drug Delivery Systems</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-sm">
                        Significant strides in developing delivery systems that are more effective, efficient, and less invasive, reducing side
                        effects and improving compliance.
                    </p>
                </div>

                <!-- Personalised Medicine -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-soft hover:shadow-soft-hover transition-all border border-gray-100 dark:border-white/5 group"
                >
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">fingerprint</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Personalised Medicine</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-sm">
                        Advances in genomics enable tailoring treatments to individual patients based on their genetic makeup and lifestyle.
                    </p>
                </div>

                <!-- Digital Health -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-soft hover:shadow-soft-hover transition-all border border-gray-100 dark:border-white/5 group"
                >
                    <div
                        class="w-14 h-14 bg-primary/5 dark:bg-white/10 rounded-full flex items-center justify-center mb-6 text-2xl text-primary dark:text-white group-hover:bg-accent-gold group-hover:text-white transition-colors"
                    >
                        <span class="material-icons">monitor_heart</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-4">Digital Health</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-sm">
                        Integrating telemedicine, wearables, and health apps to enable remote monitoring and early disease detection.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Future Opportunities & Case Study -->
    <section class="py-24 bg-primary text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 0 C 50 100 80 100 100 0 Z" fill="currentColor" />
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <div>
                    <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Track Record</span>
                    <h2 class="font-serif text-3xl md:text-4xl mb-6">Success Stories</h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        We invest in companies with proven innovation. A notable success was our investment in a biotech firm developing a treatment
                        for Pompe disease, a rare genetic disorder.
                    </p>
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/10 mb-8">
                        <p class="italic text-gray-200 mb-4">
                            "Our investment allowed the company to complete clinical trials... resulting in a successful acquisition by a larger
                            pharmaceutical company for a profit of over $50 million."
                        </p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/10">
                        <div class="text-4xl font-bold text-accent-gold mb-2">30%+</div>
                        <div class="text-sm text-gray-300">Return to clients from generic drug manufacturer investment</div>
                    </div>
                </div>

                <div>
                    <span class="text-accent-gold font-bold text-sm tracking-wider uppercase mb-2 block">Future Outlook</span>
                    <h2 class="font-serif text-3xl md:text-4xl mb-6">Areas of Opportunity</h2>
                    <ul class="space-y-6">
                        <li class="flex items-start">
                            <span class="bg-accent-gold/20 p-2 rounded-full mr-4 mt-1">
                                <span class="material-icons text-accent-gold text-sm">science</span>
                            </span>
                            <div>
                                <h3 class="text-xl font-serif mb-1">Drug Discovery</h3>
                                <p class="text-gray-400 text-sm">Continued investment to identify new drug candidates and bring them to market.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-accent-gold/20 p-2 rounded-full mr-4 mt-1">
                                <span class="material-icons text-accent-gold text-sm">biotech</span>
                            </span>
                            <div>
                                <h3 class="text-xl font-serif mb-1">Biologics</h3>
                                <p class="text-gray-400 text-sm">
                                    Drugs made from living organisms, increasingly used to treat cancer and autoimmune disorders.
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-accent-gold/20 p-2 rounded-full mr-4 mt-1">
                                <span class="material-icons text-accent-gold text-sm">public</span>
                            </span>
                            <div>
                                <h3 class="text-xl font-serif mb-1">Emerging Markets</h3>
                                <p class="text-gray-400 text-sm">
                                    Significant opportunities in markets like China, India, and Brazil due to large populations.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-24 bg-white dark:bg-primary/5">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-serif text-3xl md:text-5xl text-primary dark:text-white mb-6">Invest in the Future of Health</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 mb-10 leading-relaxed">
                Join us in supporting breakthrough medical advancements while building a robust investment portfolio.
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
