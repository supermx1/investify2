<script>
    import Layout from '@/components/frontend/Layout.svelte';
    import { Link } from '@inertiajs/svelte';
    import { SYSTEM } from '@/lib/store';
</script>

<Layout>
    <!-- Hero Section — Full-width with gradient overlay -->
    <header class="relative overflow-hidden bg-primary pb-20 pt-24 text-primary-foreground lg:pb-32 lg:pt-32">
        <!-- Background pattern -->
        <div
            class="pointer-events-none absolute inset-0 opacity-10"
            style="background-image: radial-gradient(circle at 25% 50%, currentColor 1px, transparent 1px); background-size: 28px 28px;"
        ></div>
        <div class="absolute -right-40 -top-40 h-[500px] w-[500px] rounded-full bg-accent-gold/10 blur-[120px]"></div>
        <div class="absolute -bottom-40 -left-40 h-[400px] w-[400px] rounded-full bg-accent-gold/5 blur-[100px]"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <div
                    class="mb-6 inline-flex items-center gap-2 rounded-full border border-primary-foreground/20 bg-primary-foreground/5 px-4 py-1.5 text-xs font-medium backdrop-blur-sm"
                >
                    <span class="flex h-1.5 w-1.5 rounded-full bg-accent-gold animate-pulse"></span>
                    Now accepting new investors
                </div>
                <h1 class="font-serif text-4xl font-semibold leading-tight sm:text-5xl lg:text-6xl">
                    Your wealth,<br />
                    <span class="text-accent-gold">reimagined.</span>
                </h1>
                <p class="mx-auto mt-6 max-w-xl text-base leading-relaxed text-primary-foreground/70 sm:text-lg">
                    Modern investment strategies tailored for the discerning investor. Access exclusive opportunities across real estate, energy, and
                    private markets.
                </p>
                <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <Link
                        href="/register"
                        class="w-full rounded-xl bg-background px-8 py-3.5 text-sm font-medium text-foreground shadow-lg transition-all hover:shadow-xl active:scale-[0.98] sm:w-auto"
                    >
                        Start Investing
                    </Link>
                    <Link
                        href="/about"
                        class="w-full rounded-xl border border-primary-foreground/20 px-8 py-3.5 text-sm font-medium text-primary-foreground transition-colors hover:bg-primary-foreground/10 sm:w-auto"
                    >
                        Learn More
                    </Link>
                </div>
            </div>

            <!-- Stats Bar -->
            <div class="mx-auto mt-16 max-w-3xl">
                <div
                    class="grid grid-cols-3 divide-x divide-primary-foreground/10 rounded-2xl border border-primary-foreground/10 bg-primary-foreground/5 px-2 py-6 backdrop-blur-sm sm:px-6"
                >
                    <div class="px-3 text-center sm:px-6">
                        <p class="text-2xl font-semibold sm:text-3xl">$4.2B</p>
                        <p class="mt-1 text-xs text-primary-foreground/50 sm:text-sm">Assets Under Management</p>
                    </div>
                    <div class="px-3 text-center sm:px-6">
                        <p class="text-2xl font-semibold sm:text-3xl">12.4%</p>
                        <p class="mt-1 text-xs text-primary-foreground/50 sm:text-sm">Avg. Annual Return</p>
                    </div>
                    <div class="px-3 text-center sm:px-6">
                        <p class="text-2xl font-semibold sm:text-3xl">15K+</p>
                        <p class="mt-1 text-xs text-primary-foreground/50 sm:text-sm">Active Investors</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- How It Works — Numbered steps with icons -->
    <section class="border-b border-border/50 py-20 lg:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-14 max-w-xl text-center">
                <p class="text-sm font-semibold uppercase tracking-wider text-accent-gold">Simple Process</p>
                <h2 class="mt-2 font-serif text-3xl font-semibold text-foreground sm:text-4xl">How it works</h2>
                <p class="mt-3 text-muted-foreground">Getting started takes just a few minutes. Here's how we help you grow your wealth.</p>
            </div>

            <div class="grid gap-8 md:grid-cols-3">
                {#each [{ step: '01', icon: 'person_add', title: 'Create Your Profile', desc: 'Tell us about your financial goals, risk tolerance, and investment horizon.' }, { step: '02', icon: 'auto_graph', title: 'Choose a Strategy', desc: 'Select from curated investment plans or let our experts build a custom portfolio.' }, { step: '03', icon: 'trending_up', title: 'Watch It Grow', desc: 'Track your portfolio in real-time with transparent reporting and insights.' }] as item}
                    <div
                        class="group relative rounded-2xl border border-border/50 bg-card p-8 transition-all hover:border-accent-gold/30 hover:shadow-lg"
                    >
                        <span class="text-5xl font-bold text-border/80 dark:text-border">{item.step}</span>
                        <div class="mt-4 flex h-12 w-12 items-center justify-center rounded-xl bg-accent-gold/10 text-accent-gold">
                            <span class="material-icons text-2xl">{item.icon}</span>
                        </div>
                        <h3 class="mt-4 text-lg font-semibold text-foreground">{item.title}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-muted-foreground">{item.desc}</p>
                    </div>
                {/each}
            </div>
        </div>
    </section>

    <!-- Investment Sectors — Card grid -->
    <section class="bg-muted/30 py-20 lg:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-14 flex flex-col items-start justify-between gap-4 md:flex-row md:items-end">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-wider text-accent-gold">Opportunities</p>
                    <h2 class="mt-2 font-serif text-3xl font-semibold text-foreground sm:text-4xl">Investment sectors</h2>
                    <p class="mt-3 max-w-lg text-muted-foreground">
                        Diversify across high-growth industries with vetted, institutional-grade opportunities.
                    </p>
                </div>
                <Link href="/wealth-management" class="flex items-center gap-1.5 text-sm font-medium text-foreground hover:text-accent-gold">
                    View all sectors
                    <span class="material-icons text-sm">arrow_forward</span>
                </Link>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                {#each [{ title: 'Real Estate', desc: 'Premium commercial & residential developments.', icon: 'apartment', href: '/infrastructure-real-estate', badge: '8-12% yield' }, { title: 'Renewable Energy', desc: 'Sustainable infrastructure & clean energy.', icon: 'bolt', href: '/renewable-energy', badge: 'ESG Impact' }, { title: 'Private Equity', desc: 'Growth-stage private companies.', icon: 'rocket_launch', href: '/private-equity', badge: 'High Growth' }, { title: 'Fixed Income', desc: 'Government & corporate bonds.', icon: 'shield', href: '/securities', badge: 'Stable Yield' }] as item}
                    <Link
                        href={item.href}
                        class="group flex flex-col rounded-2xl border border-border/50 bg-card p-6 transition-all hover:border-accent-gold/30 hover:shadow-lg"
                    >
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/5 text-primary transition-colors group-hover:bg-accent-gold/10 group-hover:text-accent-gold dark:bg-primary/20"
                        >
                            <span class="material-icons text-2xl">{item.icon}</span>
                        </div>
                        <h3 class="mt-4 text-base font-semibold text-foreground">{item.title}</h3>
                        <p class="mt-1.5 flex-1 text-sm text-muted-foreground">{item.desc}</p>
                        <div class="mt-4 flex items-center justify-between border-t border-border/30 pt-4">
                            <span class="rounded-md bg-accent-gold/10 px-2.5 py-1 text-xs font-medium text-accent-gold">{item.badge}</span>
                            <span class="material-icons text-sm text-muted-foreground transition-transform group-hover:translate-x-1"
                                >arrow_forward</span
                            >
                        </div>
                    </Link>
                {/each}
            </div>
        </div>
    </section>

    <!-- Performance / Trust Section -->
    <section class="py-20 lg:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-20">
                <!-- Content -->
                <div>
                    <p class="text-sm font-semibold uppercase tracking-wider text-accent-gold">Track Record</p>
                    <h2 class="mt-2 font-serif text-3xl font-semibold text-foreground sm:text-4xl">
                        Proven performance,<br />transparent growth.
                    </h2>
                    <p class="mt-4 text-muted-foreground leading-relaxed">
                        With a disciplined approach to risk management, we've consistently delivered attractive returns. Our focus on diversification
                        positions us for strong, sustainable growth.
                    </p>

                    <div class="mt-8 space-y-4">
                        {#each [{ label: '12% Average Annual Return', sublabel: 'Exchange-Traded Funds' }, { label: '8% Average Return', sublabel: 'Real Estate Portfolio' }, { label: 'Fully Digital Platform', sublabel: 'Real-time portfolio tracking' }] as item}
                            <div class="flex items-start gap-3">
                                <div class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-accent-gold/10">
                                    <span class="material-icons text-sm text-accent-gold">check</span>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-foreground">{item.label}</p>
                                    <p class="text-xs text-muted-foreground">{item.sublabel}</p>
                                </div>
                            </div>
                        {/each}
                    </div>

                    <Link
                        href="/wealth-management"
                        class="mt-8 inline-flex items-center gap-2 text-sm font-medium text-foreground hover:text-accent-gold"
                    >
                        Explore our platform
                        <span class="material-icons text-sm">arrow_forward</span>
                    </Link>
                </div>

                <!-- Dashboard mockup card -->
                <div class="relative">
                    <div class="absolute -inset-4 rounded-3xl bg-accent-gold/5 blur-2xl"></div>
                    <div class="relative rounded-2xl border border-border/50 bg-card p-6 shadow-xl sm:p-8">
                        <div class="mb-6 flex items-center justify-between">
                            <div>
                                <p class="text-xs font-medium text-muted-foreground">Total Portfolio Value</p>
                                <p class="mt-1 text-2xl font-semibold text-foreground">$4,285,120</p>
                            </div>
                            <div class="rounded-lg bg-accent-gold/10 px-3 py-1.5 text-sm font-semibold text-accent-gold">+8.4% YTD</div>
                        </div>

                        <!-- Simple chart -->
                        <div class="relative h-48 w-full">
                            <svg class="absolute inset-0 h-full w-full overflow-visible" preserveAspectRatio="none" viewBox="0 0 100 100">
                                <defs>
                                    <linearGradient id="heroChartGradient" x1="0" x2="0" y1="0" y2="1">
                                        <stop offset="0%" stop-color="currentColor" stop-opacity="0.15"></stop>
                                        <stop offset="100%" stop-color="currentColor" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                                <path
                                    d="M0,80 C15,75 25,65 40,58 C55,51 65,35 80,28 C90,23 95,22 100,20 V100 H0 Z"
                                    fill="url(#heroChartGradient)"
                                    class="text-accent-gold"
                                ></path>
                                <path
                                    d="M0,80 C15,75 25,65 40,58 C55,51 65,35 80,28 C90,23 95,22 100,20"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-width="2"
                                    vector-effect="non-scaling-stroke"
                                    class="text-accent-gold"
                                ></path>
                                <circle cx="100" cy="20" r="4" fill="currentColor" class="text-accent-gold"></circle>
                            </svg>
                        </div>

                        <!-- Time filters -->
                        <div class="mt-4 flex gap-2 border-t border-border/30 pt-4">
                            {#each ['1D', '1W', '1M', '6M', '1Y', 'ALL'] as period}
                                <button
                                    class="rounded-md px-3 py-1 text-xs font-medium transition-colors {period === '1Y'
                                        ? 'bg-primary text-primary-foreground shadow-sm'
                                        : 'text-muted-foreground hover:text-foreground'}"
                                >
                                    {period}
                                </button>
                            {/each}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Insights -->
    <section class="border-t border-border/50 bg-muted/30 py-20 lg:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-14 max-w-xl text-center">
                <p class="text-sm font-semibold uppercase tracking-wider text-accent-gold">Insights</p>
                <h2 class="mt-2 font-serif text-3xl font-semibold text-foreground sm:text-4xl">Latest research</h2>
                <p class="mt-3 text-muted-foreground">Expert analysis on the financial landscape.</p>
            </div>

            <div class="grid gap-8 md:grid-cols-3">
                {#each [{ title: 'The New Investor of 2026', category: 'Trends', date: 'Oct 24, 2025', read: '5 min', img: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800', excerpt: 'A paradigm shift as investors demand transparency and direct access.' }, { title: 'Why Wealth Protection Matters', category: 'Strategy', date: 'Sep 15, 2025', read: '4 min', img: 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=800', excerpt: 'Preserving capital has become the primary driver of long-term net worth.' }, { title: 'Real Assets in a Digital World', category: 'Education', date: 'Aug 02, 2025', read: '7 min', img: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800', excerpt: 'The role of tangible assets in portfolios dominated by digital derivatives.' }] as article}
                    <article class="group cursor-pointer">
                        <div class="relative aspect-[16/10] overflow-hidden rounded-xl">
                            <img
                                src={article.img}
                                alt={article.title}
                                class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            />
                            <div
                                class="absolute left-3 top-3 rounded-full bg-background/90 px-2.5 py-1 text-xs font-medium text-foreground backdrop-blur-sm"
                            >
                                {article.category}
                            </div>
                        </div>
                        <div class="mt-4 space-y-2">
                            <div class="flex items-center gap-2 text-xs text-muted-foreground">
                                <span>{article.date}</span>
                                <span class="h-1 w-1 rounded-full bg-accent-gold"></span>
                                <span>{article.read}</span>
                            </div>
                            <h3 class="text-base font-semibold text-foreground transition-colors group-hover:text-accent-gold">
                                {article.title}
                            </h3>
                            <p class="text-sm text-muted-foreground line-clamp-2">{article.excerpt}</p>
                        </div>
                    </article>
                {/each}
            </div>
        </div>
    </section>
</Layout>
