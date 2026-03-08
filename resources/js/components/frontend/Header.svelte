<script lang="ts">
    import { Link } from '@inertiajs/svelte';
    import { SYSTEM } from '@/lib/store';
    import { page } from '@inertiajs/svelte';
    import type { User } from '@/types';

    const user = $page.props.auth.user as User;

    let isMenuOpen = $state(false);
    let activeDropdown = $state<string | null>(null);

    function toggleDropdown(name: string) {
        activeDropdown = activeDropdown === name ? null : name;
    }

    function closeMenu() {
        isMenuOpen = false;
        activeDropdown = null;
    }

    const solutions = [
        { title: 'Wealth Management', href: '/wealth-management', desc: 'Holistic financial planning', icon: 'trending_up' },
        { title: 'Mutual Funds', href: '/mutual-funds', desc: 'Diversified fund portfolios', icon: 'account_balance' },
        { title: 'ETFs', href: '/exchange-traded-funds', desc: 'Exchange-traded strategies', icon: 'swap_horiz' },
        { title: 'Securities', href: '/securities', desc: 'Equity & bond markets', icon: 'bar_chart' },
    ];

    const markets = [
        { title: 'Private Equity', href: '/private-equity', desc: 'Growth-stage investments', icon: 'rocket_launch' },
        { title: 'Real Estate', href: '/infrastructure-real-estate', desc: 'Commercial & residential', icon: 'apartment' },
        { title: 'Pharmaceuticals', href: '/pharmaceuticals', desc: 'Healthcare innovation', icon: 'biotech' },
        { title: 'Renewable Energy', href: '/renewable-energy', desc: 'Sustainable infrastructure', icon: 'bolt' },
    ];

    const values = [
        { title: 'Responsible Stewardship', href: '/responsible-stewardship' },
        { title: 'Diversity & Inclusion', href: '/diversity-inclusion' },
        { title: 'ESG Investing', href: '/esg-responsible-investment' },
        { title: 'Sustainability', href: '/sustainability' },
    ];
</script>

<!-- Modern Glassmorphism Navigation -->
<nav class="sticky top-0 z-50 w-full border-b border-white/10 bg-white/80 backdrop-blur-xl transition-all duration-300 dark:bg-background-dark/80">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between lg:h-18">
            <!-- Logo + Brand -->
            <div class="flex items-center gap-3">
                <Link href="/" class="flex items-center gap-2.5" onclick={closeMenu}>
                    <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-primary text-primary-foreground shadow-md">
                        <span class="text-base font-bold">{$SYSTEM.siteName?.charAt(0) ?? 'V'}</span>
                    </div>
                    <span class="text-lg font-semibold tracking-tight text-foreground">
                        {$SYSTEM.siteName}
                    </span>
                </Link>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden items-center gap-1 lg:flex">
                <!-- Solutions Dropdown -->
                <div class="group relative">
                    <button
                        class="flex items-center gap-1 rounded-lg px-3 py-2 text-sm font-medium text-muted-foreground transition-colors hover:bg-accent hover:text-foreground"
                    >
                        Solutions
                        <span class="material-icons text-base transition-transform group-hover:rotate-180">expand_more</span>
                    </button>
                    <div
                        class="mega-menu absolute left-1/2 top-full w-[560px] -translate-x-1/2 rounded-2xl border border-border/50 bg-popover/95 p-1 shadow-xl backdrop-blur-xl"
                    >
                        <div class="grid grid-cols-2 gap-1 p-2">
                            {#each solutions as item}
                                <Link href={item.href} class="flex items-start gap-3 rounded-xl px-3 py-3 transition-colors hover:bg-accent">
                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary/5 text-primary dark:bg-primary/20"
                                    >
                                        <span class="material-icons text-xl">{item.icon}</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-foreground">{item.title}</p>
                                        <p class="text-xs text-muted-foreground">{item.desc}</p>
                                    </div>
                                </Link>
                            {/each}
                        </div>
                        <div class="border-t border-border/30 px-4 py-3">
                            <Link href="/private-wealth" class="flex items-center gap-2 text-xs font-medium text-primary hover:underline">
                                <span class="material-icons text-sm">diamond</span>
                                Private Wealth Services →
                            </Link>
                        </div>
                    </div>
                </div>

                <!-- Markets Dropdown -->
                <div class="group relative">
                    <button
                        class="flex items-center gap-1 rounded-lg px-3 py-2 text-sm font-medium text-muted-foreground transition-colors hover:bg-accent hover:text-foreground"
                    >
                        Markets
                        <span class="material-icons text-base transition-transform group-hover:rotate-180">expand_more</span>
                    </button>
                    <div
                        class="mega-menu absolute left-1/2 top-full w-[560px] -translate-x-1/2 rounded-2xl border border-border/50 bg-popover/95 p-1 shadow-xl backdrop-blur-xl"
                    >
                        <div class="grid grid-cols-2 gap-1 p-2">
                            {#each markets as item}
                                <Link href={item.href} class="flex items-start gap-3 rounded-xl px-3 py-3 transition-colors hover:bg-accent">
                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-accent-gold/10 text-accent-gold">
                                        <span class="material-icons text-xl">{item.icon}</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-foreground">{item.title}</p>
                                        <p class="text-xs text-muted-foreground">{item.desc}</p>
                                    </div>
                                </Link>
                            {/each}
                        </div>
                    </div>
                </div>

                <!-- Direct Links -->
                <Link
                    class="rounded-lg px-3 py-2 text-sm font-medium text-muted-foreground transition-colors hover:bg-accent hover:text-foreground"
                    href="/wealth-club"
                >
                    Wealth Club
                </Link>
                <Link
                    class="rounded-lg px-3 py-2 text-sm font-medium text-muted-foreground transition-colors hover:bg-accent hover:text-foreground"
                    href="/news-and-insights"
                >
                    Insights
                </Link>
                <Link
                    class="rounded-lg px-3 py-2 text-sm font-medium text-muted-foreground transition-colors hover:bg-accent hover:text-foreground"
                    href="/about"
                >
                    About
                </Link>
            </div>

            <!-- Right side: CTAs -->
            <div class="hidden items-center gap-3 lg:flex">
                {#if user && (user.role === 'user' || user.role === 'company')}
                    <a
                        class="rounded-lg px-3 py-2 text-sm font-medium text-muted-foreground transition-colors hover:text-foreground"
                        href="/user/dashboard"
                    >
                        Dashboard
                    </a>
                {:else}
                    <a class="rounded-lg px-3 py-2 text-sm font-medium text-muted-foreground transition-colors hover:text-foreground" href="/login">
                        Sign In
                    </a>
                {/if}
                <Link
                    class="rounded-xl bg-primary px-5 py-2.5 text-sm font-medium text-primary-foreground shadow-sm transition-all hover:opacity-90 hover:shadow-md active:scale-[0.98]"
                    href="/contact-us"
                >
                    Get Started
                </Link>
            </div>

            <!-- Mobile menu toggle -->
            <button
                class="flex h-10 w-10 items-center justify-center rounded-xl text-foreground transition-colors hover:bg-accent lg:hidden"
                onclick={() => (isMenuOpen = !isMenuOpen)}
            >
                <span class="material-icons">{isMenuOpen ? 'close' : 'menu'}</span>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    {#if isMenuOpen}
        <div class="border-t border-border/30 bg-popover/98 backdrop-blur-xl lg:hidden">
            <div class="mx-auto max-w-7xl space-y-1 px-4 py-4">
                <!-- Solutions Group -->
                <button
                    class="flex w-full items-center justify-between rounded-xl px-3 py-2.5 text-sm font-medium text-foreground hover:bg-accent"
                    onclick={() => toggleDropdown('solutions')}
                >
                    Solutions
                    <span
                        class="material-icons text-base text-muted-foreground transition-transform {activeDropdown === 'solutions'
                            ? 'rotate-180'
                            : ''}"
                    >
                        expand_more
                    </span>
                </button>
                {#if activeDropdown === 'solutions'}
                    <div class="space-y-0.5 pb-2 pl-3">
                        {#each solutions as item}
                            <Link
                                href={item.href}
                                class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm text-muted-foreground hover:bg-accent hover:text-foreground"
                                onclick={closeMenu}
                            >
                                <span class="material-icons text-lg text-primary">{item.icon}</span>
                                {item.title}
                            </Link>
                        {/each}
                    </div>
                {/if}

                <!-- Markets Group -->
                <button
                    class="flex w-full items-center justify-between rounded-xl px-3 py-2.5 text-sm font-medium text-foreground hover:bg-accent"
                    onclick={() => toggleDropdown('markets')}
                >
                    Markets
                    <span
                        class="material-icons text-base text-muted-foreground transition-transform {activeDropdown === 'markets' ? 'rotate-180' : ''}"
                    >
                        expand_more
                    </span>
                </button>
                {#if activeDropdown === 'markets'}
                    <div class="space-y-0.5 pb-2 pl-3">
                        {#each markets as item}
                            <Link
                                href={item.href}
                                class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm text-muted-foreground hover:bg-accent hover:text-foreground"
                                onclick={closeMenu}
                            >
                                <span class="material-icons text-lg text-accent-gold">{item.icon}</span>
                                {item.title}
                            </Link>
                        {/each}
                    </div>
                {/if}

                <!-- Direct Links -->
                <Link
                    href="/wealth-club"
                    class="block rounded-xl px-3 py-2.5 text-sm font-medium text-foreground hover:bg-accent"
                    onclick={closeMenu}
                >
                    Wealth Club
                </Link>
                <Link
                    href="/news-and-insights"
                    class="block rounded-xl px-3 py-2.5 text-sm font-medium text-foreground hover:bg-accent"
                    onclick={closeMenu}
                >
                    Insights
                </Link>
                <Link href="/about" class="block rounded-xl px-3 py-2.5 text-sm font-medium text-foreground hover:bg-accent" onclick={closeMenu}>
                    About
                </Link>

                <!-- Mobile CTAs -->
                <div class="space-y-2 border-t border-border/30 pt-4">
                    {#if user && (user.role === 'user' || user.role === 'company')}
                        <a
                            href="/user/dashboard"
                            class="block rounded-xl px-3 py-2.5 text-center text-sm font-medium text-foreground hover:bg-accent"
                            onclick={closeMenu}
                        >
                            Dashboard
                        </a>
                    {:else}
                        <a
                            href="/login"
                            class="block rounded-xl px-3 py-2.5 text-center text-sm font-medium text-foreground hover:bg-accent"
                            onclick={closeMenu}
                        >
                            Sign In
                        </a>
                    {/if}
                    <Link
                        href="/contact-us"
                        class="block rounded-xl bg-primary px-4 py-3 text-center text-sm font-medium text-primary-foreground shadow-sm"
                        onclick={closeMenu}
                    >
                        Get Started
                    </Link>
                </div>
            </div>
        </div>
    {/if}
</nav>
