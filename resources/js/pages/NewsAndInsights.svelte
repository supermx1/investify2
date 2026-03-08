<script>
    import Layout from '@/components/frontend/Layout.svelte';
    import { useForm, Link } from '@inertiajs/svelte';

    let form = useForm({
        first_name: '',
        last_name: '',
        email: '',
        interest: 'Wealth Planning',
        message: '',
    });

    function submit(e) {
        e.preventDefault();
        // Placeholder for submission logic
        console.log('Form submitted:', $form);
        form.reset();
    }

    const articles = [
        {
            id: 1,
            title: 'Q4 Global Market Outlook: Navigating Volatility',
            category: 'Market Updates',
            date: 'Oct 24, 2023',
            readTime: '5 min read',
            author: 'Jonathan Sterling, CFA',
            image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBMzJxN9cQ288Hdqe0GdEzex1OI0HgXgKSF8pKgDGVXSrNUPN0DZiKmBXTPA43ltjvMzxE_OmdtNxnBX5dmVwc12XABOK6lkaGbWm-jnj0GQLUEXQhXTwvqkuHSK92jgKjEQlOVeQ3YpmV6RCdhuqXsfU1H7PzzMzpWReTPGXvYRpHQmFDbhp-EMlY_IMrod15jbMGlVe1D7EPHumGe-GF_nJ37Y6nWw9b440WoFvto6MPckhfh9MwcUB6lP6t2MrdlfKhkPS7jJ1E',
            excerpt:
                'As we approach year-end, our investment committee analyzes key macroeconomic indicators and identifies resilient sectors for portfolio allocation.',
        },
        {
            id: 2,
            title: 'Estate Planning for Multi-Generational Wealth',
            category: 'Wealth Strategy',
            date: 'Oct 18, 2023',
            readTime: '8 min read',
            author: 'Sarah Jenkins, J.D.',
            image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuANuC5QpHaAqCdsAg1nccKRlcKTLA91JuF4ndB8WWB9mAktOSAGBdvGKaHrCL7rmUBf5_aoAnNd9maUN8ixEGDxQlWHLawAdurKT3ifgrFod0ApqZ_pesk3r1LBxHwFs5u123oFUYFbEFL6kqsvOQ4KK8GSCBvJC-wFPPjgdJhhaPF1QGZdxKO7Prr8qTNkord3zGKrydr3OyPxLDNF9cGfmwoBdqDrEl4JWhcTuDWR5vRAV3Tc--lkWoySGUxKdA2tHTK_uWtC6Mk',
            excerpt: 'Strategies for preserving your legacy and minimizing tax liabilities when transferring assets to the next generation.',
        },
        {
            id: 3,
            title: 'The Rise of Sustainable Private Equity',
            category: 'Global Trends',
            date: 'Oct 10, 2023',
            readTime: '6 min read',
            author: 'Marcus Thorne',
            image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAbu7Bstau6VpHGZ2SvI2kAF-ieQMKY3yR4qBoSVABsN9QyHRMPsWi8iOygdtEPwE-5K1inSvHEnRM_p1THazBlJsNN5pR17xeOdu4GSlYaQW5tfbEOKtHDKeQMN3oTCkYFXaKbo3lJBXot9-6w99DnG114SsEvBPErZ8vMxXvWZFyE_i5QWwvV8WBPWtrvfh9pqdDdT1VXyn-8A4EXoiIlte4V8CII2vrOQ1w20_dufMZItKmI06u4MFXWVCuX9b6yHeXoKDuTZKs',
            excerpt: 'Examining how ESG criteria are reshaping private market valuations and creating new opportunities for conscientious investors.',
        },
        {
            id: 4,
            title: 'AI in Portfolio Management',
            category: 'Global Trends',
            date: 'Sep 28, 2023',
            readTime: '4 min read',
            author: 'Dr. Elena Rostova',
            image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuD1ZpmB-hJ4PZyPBFCz7vQyNhgw-7Cz7g5BTKH_BzDW4AJ6hBovHpc4Zr2R3TSarNDIqBchcmk4vxKzOUhQ4Le6uJVQzBzngPWllQuf6EOW177S2x4nof4g_YUrEu2sGUeCqpkSAtrtP_0T4D7exR_6GEskrv6Y-8_l6KWWRRDrdwdZs3MFRFKzu3OcI1JLdnhtpMbkMDfT4nm1PMh-w0MZjHZugV7q-WBy03r3oB0gn8SqcMzdxKbR5KcgeE-sgxPve8FpIMEl7Ho',
            excerpt: 'How artificial intelligence is enhancing risk assessment models and uncovering non-obvious correlations in global markets.',
        },
        {
            id: 5,
            title: 'Prime Commercial Real Estate Outlook',
            category: 'Market Updates',
            date: 'Sep 15, 2023',
            readTime: '7 min read',
            author: 'David Chen',
            image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDJ7hIrDO0Q0TE6jaoP-QRrlQq8QJJkBreviLuiDFdvVvUFAtd9KzgwBlpEnhAUDPeIsgUdmZ1O8OtFNwKqFxKdLwb5QO7SPDKvqdV0fAPle0ZlAwZJ_kyTY3BWji1lsJI9NsslmbTOXhaUdiGP4w_SBNIZyezPoonXbIO_SsW3KPOY5_hXR7nw0D2rNgXV2JFtgsSRT2-2dejASr3wwsRWrPBpL4LEcpl6_OMMk5hrKF8CB3rF6euddkZrGWihG3CQVtoWnjMP4pU',
            excerpt: 'An analysis of cap rates in major metropolitan areas and the shifting landscape of commercial office space investment.',
        },
        {
            id: 6,
            title: 'Strategic Philanthropy: Impact & Tax Efficiency',
            category: 'Wealth Strategy',
            date: 'Sep 02, 2023',
            readTime: '6 min read',
            author: 'Olivia Vance',
            image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuD3csaDr88TWDpOiO33fVTOqsIx9ePZ9R9JJI46tbh-cBJeFMJ60w7tj-DyYy_QKXEJWtLMMnRVmEZh3QJbv-LSBRDa3ZyRxdXlkKTXYUVeHjdPX4a8Hb6s28zvDLHIn0rG0cDeH4IuaavjV-aZQ5mERPLl1mqAD3Mw7HlX2gUAtSmcZ0Dtmt6wLnb7Im18qoF470e7QCu-5jamaGOY7TbC56CvpzSpdq3_0u1ymh8kWgw7hXA8rFWbLZCdrY0T6KnGx5YDQlh3TnU',
            excerpt: 'Maximizing the impact of your charitable giving through Donor Advised Funds and private foundations.',
        },
    ];

    const allCategories = ['All', 'Market Updates', 'Wealth Strategy', 'Global Trends'];

    let activeFilter = $state('All');
    let currentPage = $state(1);
    const itemsPerPage = 3;

    let filteredArticles = $derived(activeFilter === 'All' ? articles : articles.filter((article) => article.category === activeFilter));

    let totalPages = $derived(Math.ceil(filteredArticles.length / itemsPerPage));

    let paginatedArticles = $derived(filteredArticles.slice((currentPage - 1) * itemsPerPage, currentPage * itemsPerPage));

    function setFilter(category) {
        activeFilter = category;
        currentPage = 1;
    }

    function nextPage() {
        if (currentPage < totalPages) {
            currentPage += 1;
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }

    function prevPage() {
        if (currentPage > 1) {
            currentPage -= 1;
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }

    function goToPage(page) {
        currentPage = page;
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>

<Layout>
    <!-- Hero Section -->
    <header class="relative bg-primary dark:bg-background-dark pt-24 pb-32 overflow-hidden">
        <div
            class="absolute inset-0 opacity-20"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBpYO0D2lrqeEwTRIpNndzDfG4mAFBPs0j5S3RgDDv8mW8OVAInJXNC95bpAExKorL6-MCxOd3LGy30bgWGsHryF35dmJei4NCBqsws5kvf4un6ZWnSRDZLr2nk9rT-gFJiIMqlK7ghhVBYFPGUROYEnUcEaxl9X0XoaH3esCgDYrfBtqL_3CbY5r10Ruubjtdg0nRcI1Y_uZ_dLkLAvhW3RJ7arcgHhSWm4rZco6Nb6WJIyNKzQdlrFQr4zfCgyy2wjc-ePK0kzUs'); background-size: cover; background-position: center;"
        ></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary/90 to-primary/80 dark:from-background-dark/95 dark:to-background-dark/90"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <span
                class="inline-block py-1 px-3 rounded-full bg-accent-gold/20 text-accent-gold text-xs font-semibold tracking-wider uppercase mb-6 border border-accent-gold/30"
            >
                Thought Leadership
            </span>
            <h1 class="font-serif text-5xl lg:text-6xl font-medium text-white leading-tight mb-6">
                News &amp; <span class="italic text-accent-gold">Insights</span>
            </h1>
            <p class="text-lg text-gray-300 mb-8 font-light leading-relaxed max-w-2xl mx-auto">
                Stay ahead with curated market intelligence, strategic wealth planning guides, and updates from the Vantage global network.
            </p>
        </div>
    </header>

    <!-- News Grid Section -->
    <section class="py-20 bg-background-light dark:bg-background-dark -mt-20 relative z-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-4 mb-16">
                {#each allCategories as category}
                    <button
                        onclick={() => setFilter(category)}
                        class="px-6 py-2 rounded-full text-sm font-medium transition-colors shadow-sm {activeFilter === category
                            ? 'bg-primary text-white shadow-md hover:bg-primary-light'
                            : 'bg-white dark:bg-primary/20 text-gray-600 dark:text-gray-300 border border-gray-200 dark:border-white/10 hover:text-primary dark:hover:text-white hover:border-primary/30'}"
                    >
                        {category}
                    </button>
                {/each}
            </div>

            <!-- Articles Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {#each paginatedArticles as article (article.id)}
                    <article
                        class="bg-white dark:bg-[#1e232b] rounded-xl overflow-hidden shadow-soft hover:shadow-soft-hover border border-gray-100 dark:border-white/5 transition-all duration-300 group flex flex-col h-full"
                    >
                        <div class="relative h-56 overflow-hidden">
                            <img
                                alt={article.category}
                                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700"
                                src={article.image}
                            />
                            <div
                                class="absolute top-4 left-4 bg-white/90 dark:bg-primary/90 backdrop-blur px-3 py-1 rounded-md text-xs font-bold uppercase tracking-wider text-primary dark:text-white border border-primary/10"
                            >
                                {article.category}
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-grow">
                            <div class="flex items-center gap-2 mb-4 text-xs text-gray-400 font-medium uppercase tracking-wide">
                                <span class="material-icons text-sm text-accent-gold">calendar_today</span>
                                {article.date}
                                <span class="mx-1">•</span>
                                <span>{article.readTime}</span>
                            </div>
                            <h3 class="font-serif text-2xl text-primary dark:text-white mb-3 group-hover:text-accent-gold transition-colors">
                                {article.title}
                            </h3>
                            <p class="text-gray-500 dark:text-gray-400 mb-6 line-clamp-3">
                                {article.excerpt}
                            </p>
                            <div class="mt-auto pt-6 border-t border-gray-100 dark:border-white/5 flex justify-between items-center">
                                <span class="text-sm font-medium text-primary dark:text-white">By {article.author}</span>
                                <a class="text-accent-gold hover:text-primary dark:hover:text-white transition-colors" href="#">
                                    <span class="material-icons">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </article>
                {/each}
            </div>

            <!-- Pagination -->
            {#if totalPages > 1}
                <div class="mt-16 flex justify-center items-center gap-2">
                    <button
                        onclick={prevPage}
                        disabled={currentPage === 1}
                        class="px-3 py-2 rounded-md border border-gray-200 dark:border-white/10 bg-white dark:bg-white/5 text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-white/10 disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
                        aria-label="Previous page"
                    >
                        <span class="material-icons text-sm">chevron_left</span>
                    </button>

                    {#each Array(totalPages) as _, i}
                        <button
                            onclick={() => goToPage(i + 1)}
                            class="px-4 py-2 rounded-md border text-sm font-medium transition-colors {currentPage === i + 1
                                ? 'bg-primary border-primary text-white'
                                : 'bg-white dark:bg-white/5 border-gray-200 dark:border-white/10 text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-white/10'}"
                        >
                            {i + 1}
                        </button>
                    {/each}

                    <button
                        onclick={nextPage}
                        disabled={currentPage === totalPages}
                        class="px-3 py-2 rounded-md border border-gray-200 dark:border-white/10 bg-white dark:bg-white/5 text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-white/10 disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
                        aria-label="Next page"
                    >
                        <span class="material-icons text-sm">chevron_right</span>
                    </button>
                </div>
            {/if}
        </div>
    </section>

</Layout>
