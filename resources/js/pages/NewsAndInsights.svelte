<script lang="ts">
    import Layout from '@/components/frontend/Layout.svelte';
    import { Link } from '@inertiajs/svelte';
    import { animate, splitText, heroParallax } from '@/lib/gsap';

    const articles = [
        {
            id: 1,
            title: 'Q4 Global Market Outlook: Navigating Volatility',
            category: 'Market Updates',
            date: 'Oct 24, 2023',
            readTime: '5 min read',
            author: 'Jonathan Sterling, CFA',
            image: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800',
            excerpt: 'As we approach year-end, our investment committee analyzes key macroeconomic indicators and identifies resilient sectors for portfolio allocation.',
        },
        {
            id: 2,
            title: 'Estate Planning for Multi-Generational Wealth',
            category: 'Wealth Strategy',
            date: 'Oct 18, 2023',
            readTime: '8 min read',
            author: 'Sarah Jenkins, J.D.',
            image: 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=800',
            excerpt: 'Strategies for preserving your legacy and minimizing tax liabilities when transferring assets to the next generation.',
        },
        {
            id: 3,
            title: 'The Rise of Sustainable Private Equity',
            category: 'Global Trends',
            date: 'Oct 10, 2023',
            readTime: '6 min read',
            author: 'Marcus Thorne',
            image: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800',
            excerpt: 'Examining how ESG criteria are reshaping private market valuations and creating new opportunities for conscientious investors.',
        },
        {
            id: 4,
            title: 'AI in Portfolio Management',
            category: 'Global Trends',
            date: 'Sep 28, 2023',
            readTime: '4 min read',
            author: 'Dr. Elena Rostova',
            image: 'https://images.unsplash.com/photo-1677442135703-1787eea5ce01?auto=format&fit=crop&q=80&w=800',
            excerpt: 'How artificial intelligence is enhancing risk assessment models and uncovering non-obvious correlations in global markets.',
        },
        {
            id: 5,
            title: 'Prime Commercial Real Estate Outlook',
            category: 'Market Updates',
            date: 'Sep 15, 2023',
            readTime: '7 min read',
            author: 'David Chen',
            image: 'https://images.unsplash.com/photo-1486325212027-8081e485255e?auto=format&fit=crop&q=80&w=800',
            excerpt: 'An analysis of cap rates in major metropolitan areas and the shifting landscape of commercial office space investment.',
        },
        {
            id: 6,
            title: 'Strategic Philanthropy: Impact & Tax Efficiency',
            category: 'Wealth Strategy',
            date: 'Sep 02, 2023',
            readTime: '6 min read',
            author: 'Olivia Vance',
            image: 'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&q=80&w=800',
            excerpt: 'Maximizing the impact of your charitable giving through Donor Advised Funds and private foundations.',
        },
    ];

    const allCategories = ['All', 'Market Updates', 'Wealth Strategy', 'Global Trends'];
    let activeFilter = $state('All');
    let showAll = $state(false);

    let filteredArticles = $derived(activeFilter === 'All' ? articles : articles.filter((a) => a.category === activeFilter));
    let displayedArticles = $derived(showAll ? filteredArticles : filteredArticles.slice(0, 4));

    function setFilter(category) {
        activeFilter = category;
        showAll = false;
    }
</script>

<Layout>
    <!-- Hero -->
    <section class="relative min-h-[50vh] overflow-hidden bg-primary">
        <img use:heroParallax={0.3} src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=1600" alt="Market data" class="absolute inset-0 h-full w-full object-cover opacity-40" />
        <div class="absolute inset-0 bg-gradient-to-b from-primary/30 via-primary/50 to-primary/70"></div>
        <div class="relative z-10 flex min-h-[50vh] flex-col justify-between px-6 pb-16 pt-24 lg:px-20">
            <div class="max-w-3xl">
                <p use:animate={{ type: 'fadeUp', delay: 0.2 }} class="editorial-label-light mb-6">Thought Leadership</p>
                <h1 use:splitText={{ delay: 0.4 }} class="editorial-heading text-5xl font-semibold text-primary-foreground sm:text-6xl lg:text-7xl">
                    News &amp; Insights
                </h1>
            </div>
            <p use:animate={{ type: 'fadeUp', delay: 0.8 }} class="max-w-md text-sm leading-relaxed text-primary-foreground/60">
                Curated market intelligence, strategic wealth planning guides, and updates from our global network.
            </p>
        </div>
    </section>

    <!-- Filter tabs + articles -->
    <section class="py-24 lg:py-36">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <!-- Filter tabs -->
            <div class="mb-16 flex gap-8 border-b border-border/40 pb-0">
                {#each allCategories as category}
                    <button
                        onclick={() => setFilter(category)}
                        class="pb-4 text-sm font-medium transition-colors border-b-2 {activeFilter === category
                            ? 'border-foreground text-foreground'
                            : 'border-transparent text-muted-foreground hover:text-foreground'}"
                    >
                        {category}
                    </button>
                {/each}
            </div>

            <!-- Featured first article -->
            {#if displayedArticles.length > 0}
                {@const featured = displayedArticles[0]}
                <article use:animate={{ type: 'fadeUp' }} class="group mb-16 grid grid-cols-1 gap-8 border-b border-border/40 pb-16 lg:grid-cols-2">
                    <div class="aspect-[16/10] overflow-hidden">
                        <img
                            src={featured.image}
                            alt={featured.title}
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                        />
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="editorial-label mb-4">{featured.category}</p>
                        <h2 class="editorial-heading text-3xl font-semibold text-foreground sm:text-4xl">{featured.title}</h2>
                        <p class="mt-4 text-sm leading-relaxed text-muted-foreground">{featured.excerpt}</p>
                        <div class="mt-6 flex items-center gap-4 text-xs text-muted-foreground">
                            <span>{featured.date}</span>
                            <span>·</span>
                            <span>{featured.readTime}</span>
                            <span>·</span>
                            <span>{featured.author}</span>
                        </div>
                        <a href="#" class="mt-6 inline-flex items-center gap-1.5 text-sm font-medium text-foreground underline underline-offset-4 decoration-muted-foreground hover:decoration-foreground transition-all">
                            Learn more →
                        </a>
                    </div>
                </article>
            {/if}

            <!-- Remaining articles: 3-col grid -->
            {#if displayedArticles.length > 1}
                <div use:animate={{ type: 'stagger', stagger: 0.12 }} class="grid gap-10 md:grid-cols-3">
                    {#each displayedArticles.slice(1) as article (article.id)}
                        <article class="group cursor-pointer">
                            <div class="aspect-[16/10] overflow-hidden">
                                <img
                                    src={article.image}
                                    alt={article.title}
                                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                />
                            </div>
                            <div class="mt-5">
                                <p class="editorial-label mb-2">{article.category}</p>
                                <h3 class="text-base font-semibold text-foreground transition-colors group-hover:text-primary">{article.title}</h3>
                                <p class="mt-2 text-sm leading-relaxed text-muted-foreground line-clamp-2">{article.excerpt}</p>
                                <div class="mt-4 flex items-center gap-3 text-xs text-muted-foreground">
                                    <span>{article.date}</span>
                                    <span>·</span>
                                    <span>{article.readTime}</span>
                                </div>
                            </div>
                        </article>
                    {/each}
                </div>
            {/if}

            <!-- Load more -->
            {#if filteredArticles.length > 4 && !showAll}
                <div class="mt-16 text-center">
                    <button
                        onclick={() => (showAll = true)}
                        class="text-sm font-medium text-foreground underline underline-offset-4 decoration-muted-foreground hover:decoration-foreground transition-all"
                    >
                        Load more →
                    </button>
                </div>
            {/if}
        </div>
    </section>
</Layout>
