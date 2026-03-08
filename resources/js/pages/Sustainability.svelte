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
                class="inline-block py-1 px-3 rounded-full bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 text-xs font-semibold tracking-wider uppercase mb-6 border border-emerald-500/20 animate-fade-in"
            >
                Our Responsibility
            </span>
            <h1 class="font-serif text-5xl lg:text-7xl font-medium text-primary dark:text-white leading-tight mb-8 animate-fade-in">
                Sustainability at <br />
                <span class="italic text-emerald-600 dark:text-emerald-400">{$SYSTEM.siteName}</span>
            </h1>
            <p
                class="text-xl text-gray-600 dark:text-gray-300 font-light leading-relaxed max-w-3xl mx-auto animate-fade-in"
                style="animation-delay: 0.1s;"
            >
                We understand that we have a responsibility to our stakeholders, the environment, and society as a whole, and we take that
                responsibility very seriously.
            </p>
        </div>
        <div class="absolute -z-10 -top-20 -right-20 w-96 h-96 bg-emerald-500/5 rounded-full blur-3xl"></div>
        <div class="absolute -z-10 bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary/10 to-transparent"></div>
    </header>

    <!-- Our Approach (Split Section) -->
    <section class="py-24 bg-white dark:bg-primary/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="absolute inset-0 bg-emerald-500/10 transform -translate-x-4 translate-y-4 rounded-xl"></div>
                    <img
                        src="https://images.unsplash.com/photo-1473448912268-2022ce9509d8?auto=format&fit=crop&q=80&w=800"
                        alt="Green Energy"
                        class="relative rounded-xl shadow-lg w-full h-auto object-cover aspect-[4/3]"
                    />
                </div>
                <div>
                    <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">A Commitment to Action</h2>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        At every level of our organization, we have made a commitment to sustainability. From our supply chain to our operations, we
                        are constantly looking for ways to reduce our environmental impact and create positive social change.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        We believe that this commitment is not only the right thing to do, but it is also good for business. By integrating
                        sustainability into our business practices, we foster resilience and drive long-term value.
                    </p>
                    <div class="grid grid-cols-2 gap-6 mt-8">
                        <div>
                            <div class="text-3xl font-serif text-emerald-600 dark:text-emerald-400 font-bold mb-1">96+</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Remote Locations</div>
                        </div>
                        <div>
                            <div class="text-3xl font-serif text-emerald-600 dark:text-emerald-400 font-bold mb-1">100%</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Ethical Sourcing</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Pillars Grid -->
    <section class="py-24 bg-background-light dark:bg-background-dark border-t border-primary/5 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-emerald-600 dark:text-emerald-400 font-bold text-sm tracking-wider uppercase mb-2 block">Our Pillars</span>
                <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">Integrated Sustainability</h2>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                    We recognize that sustainability is multifaceted. Here is how we address it across our ecosystem.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Pillar 1 -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-sm border border-primary/5 dark:border-white/10 hover:border-emerald-500/30 transition-colors"
                >
                    <div class="w-12 h-12 bg-emerald-500/10 rounded-lg flex items-center justify-center mb-6 text-emerald-600 dark:text-emerald-400">
                        <span class="material-icons">local_shipping</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-3">Supply Chain</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                        We work closely with our suppliers to ensure that they meet our standards for sustainability. This includes everything from
                        ethical sourcing to reducing carbon emissions across the logistics network.
                    </p>
                </div>

                <!-- Pillar 2 -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-sm border border-primary/5 dark:border-white/10 hover:border-emerald-500/30 transition-colors"
                >
                    <div class="w-12 h-12 bg-emerald-500/10 rounded-lg flex items-center justify-center mb-6 text-emerald-600 dark:text-emerald-400">
                        <span class="material-icons">factory</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-3">Operations</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                        We are committed to reducing our environmental impact by investing in renewable energy, implementing energy-efficient
                        technologies, and striving to use resources efficiently to reduce waste.
                    </p>
                </div>

                <!-- Pillar 3 -->
                <div
                    class="bg-white dark:bg-white/5 p-8 rounded-xl shadow-sm border border-primary/5 dark:border-white/10 hover:border-emerald-500/30 transition-colors"
                >
                    <div class="w-12 h-12 bg-emerald-500/10 rounded-lg flex items-center justify-center mb-6 text-emerald-600 dark:text-emerald-400">
                        <span class="material-icons">groups</span>
                    </div>
                    <h3 class="font-serif text-xl text-primary dark:text-white mb-3">Social Impact</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                        We are committed to creating positive change in the communities where we operate. This includes supporting local businesses
                        and investing in education and training programs to empower future generations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Investment Success -->
    <section class="py-20 bg-emerald-900/5 dark:bg-emerald-900/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="font-serif text-3xl md:text-4xl text-primary dark:text-white mb-6">Sustainable Investments</h2>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        We have seen great success in our sustainability-focused investments. By investing in companies that share our commitment, we
                        are supporting positive social and environmental change while generating strong financial returns.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex gap-4">
                            <span class="material-icons text-emerald-600 dark:text-emerald-400 shrink-0">trending_up</span>
                            <div>
                                <h4 class="font-bold text-primary dark:text-white">Market Outperformance</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Our investments in companies with strong sustainability practices have significantly outperformed the market.
                                </p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <span class="material-icons text-emerald-600 dark:text-emerald-400 shrink-0">bolt</span>
                            <div>
                                <h4 class="font-bold text-primary dark:text-white">Renewable Energy Returns</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Investments in renewable energy sectors have generated consistent, solid returns.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="relative order-1 lg:order-2">
                    <img
                        src="https://images.unsplash.com/photo-1532601224476-15c79f2f7a51?auto=format&fit=crop&q=80&w=800"
                        alt="Sustainable Growth"
                        class="relative rounded-xl shadow-lg w-full h-auto object-cover aspect-[4/3] grayscale hover:grayscale-0 transition-all duration-500"
                    />
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
            <h2 class="font-serif text-3xl md:text-5xl mb-6">Drive Sustainable Growth</h2>
            <p class="text-gray-300 text-lg mb-10 max-w-2xl mx-auto">Partner with us to create value that lasts for generations to come.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <Link
                    href="/contact-us"
                    class="bg-emerald-600 hover:bg-emerald-700 text-white px-8 py-4 rounded-full text-base font-medium transition-all shadow-lg hover:shadow-xl hover:-translate-y-1"
                >
                    Contact Us
                </Link>
            </div>
        </div>
    </section>
</Layout>
