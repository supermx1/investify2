<script lang="ts">
    import { Link } from '@inertiajs/svelte';
    import { SYSTEM } from '@/lib/store';
    import { useAppearance } from '@/hooks/useAppearance.svelte';

    const currentYear = $derived(new Date().getFullYear());
    const { appearance, updateAppearance } = useAppearance();

    let isDark = $state(appearance === 'dark');

    function toggleDarkMode() {
        updateAppearance(isDark ? 'light' : 'dark');
        isDark = !isDark;
    }
</script>

<footer class="border-t border-border/50 bg-card text-foreground">
    <!-- Upper section: CTA Banner -->
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
            class="relative -mt-px overflow-hidden rounded-2xl border border-border/50 bg-primary px-8 py-12 text-center text-primary-foreground shadow-lg sm:px-16 lg:-mt-10"
        >
            <div
                class="pointer-events-none absolute inset-0 opacity-10"
                style="background-image: radial-gradient(circle at 30% 50%, currentColor 1px, transparent 1px); background-size: 24px 24px;"
            ></div>
            <div class="relative z-10">
                <h3 class="font-serif text-2xl font-semibold sm:text-3xl">Ready to grow your wealth?</h3>
                <p class="mx-auto mt-3 max-w-lg text-sm text-primary-foreground/70">
                    Join thousands of investors who trust us with their financial future. Start your journey today.
                </p>
                <div class="mt-6 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <Link
                        href="/register"
                        class="rounded-xl bg-background px-6 py-3 text-sm font-medium text-foreground shadow-sm transition-all hover:opacity-90 active:scale-[0.98]"
                    >
                        Create Account
                    </Link>
                    <Link
                        href="/contact-us"
                        class="rounded-xl border border-primary-foreground/20 px-6 py-3 text-sm font-medium text-primary-foreground transition-colors hover:bg-primary-foreground/10"
                    >
                        Talk to an Advisor
                    </Link>
                </div>
            </div>
        </div>
    </div>

    <!-- Main footer grid -->
    <div class="mx-auto max-w-7xl px-6 pb-10 pt-16 lg:px-8">
        <div class="grid grid-cols-2 gap-x-8 gap-y-10 md:grid-cols-4 lg:grid-cols-5">
            <!-- Brand Column -->
            <div class="col-span-2 lg:col-span-1">
                <div class="flex items-center gap-2.5">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-primary text-primary-foreground shadow-sm">
                        <span class="text-sm font-bold">{$SYSTEM.siteName?.charAt(0) ?? 'V'}</span>
                    </div>
                    <span class="text-base font-semibold tracking-tight">{$SYSTEM.siteName}</span>
                </div>
                <p class="mt-4 text-sm leading-relaxed text-muted-foreground">Modern wealth management for a new generation of investors.</p>
                <!-- Social Links -->
                <div class="mt-5 flex gap-3">
                    <a
                        href="#"
                        class="flex h-8 w-8 items-center justify-center rounded-lg bg-accent text-muted-foreground transition-colors hover:text-foreground"
                        aria-label="LinkedIn"
                    >
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"
                            ><path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                            ></path></svg
                        >
                    </a>
                    <a
                        href="#"
                        class="flex h-8 w-8 items-center justify-center rounded-lg bg-accent text-muted-foreground transition-colors hover:text-foreground"
                        aria-label="Twitter"
                    >
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"
                            ><path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"
                            ></path></svg
                        >
                    </a>
                    <a
                        href="#"
                        class="flex h-8 w-8 items-center justify-center rounded-lg bg-accent text-muted-foreground transition-colors hover:text-foreground"
                        aria-label="Instagram"
                    >
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"
                            ><path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
                            ></path></svg
                        >
                    </a>
                </div>
            </div>

            <!-- Solutions -->
            <div>
                <h5 class="text-sm font-semibold text-foreground">Solutions</h5>
                <ul class="mt-4 space-y-2.5 text-sm">
                    <li>
                        <Link class="text-muted-foreground transition-colors hover:text-foreground" href="/wealth-management">Wealth Management</Link>
                    </li>
                    <li><Link class="text-muted-foreground transition-colors hover:text-foreground" href="/mutual-funds">Mutual Funds</Link></li>
                    <li><Link class="text-muted-foreground transition-colors hover:text-foreground" href="/exchange-traded-funds">ETFs</Link></li>
                    <li><Link class="text-muted-foreground transition-colors hover:text-foreground" href="/securities">Securities</Link></li>
                    <li><Link class="text-muted-foreground transition-colors hover:text-foreground" href="/private-wealth">Private Wealth</Link></li>
                </ul>
            </div>

            <!-- Markets -->
            <div>
                <h5 class="text-sm font-semibold text-foreground">Markets</h5>
                <ul class="mt-4 space-y-2.5 text-sm">
                    <li><Link class="text-muted-foreground transition-colors hover:text-foreground" href="/private-equity">Private Equity</Link></li>
                    <li>
                        <Link class="text-muted-foreground transition-colors hover:text-foreground" href="/infrastructure-real-estate"
                            >Real Estate</Link
                        >
                    </li>
                    <li>
                        <Link class="text-muted-foreground transition-colors hover:text-foreground" href="/renewable-energy">Renewable Energy</Link>
                    </li>
                    <li>
                        <Link class="text-muted-foreground transition-colors hover:text-foreground" href="/pharmaceuticals">Pharmaceuticals</Link>
                    </li>
                </ul>
            </div>

            <!-- Company -->
            <div>
                <h5 class="text-sm font-semibold text-foreground">Company</h5>
                <ul class="mt-4 space-y-2.5 text-sm">
                    <li><Link class="text-muted-foreground transition-colors hover:text-foreground" href="/about">About Us</Link></li>
                    <li>
                        <Link class="text-muted-foreground transition-colors hover:text-foreground" href="/news-and-insights"
                            >Insights & Research</Link
                        >
                    </li>
                    <li><Link class="text-muted-foreground transition-colors hover:text-foreground" href="/wealth-club">Wealth Club</Link></li>
                    <li><Link class="text-muted-foreground transition-colors hover:text-foreground" href="/contact-us">Contact</Link></li>
                </ul>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="mt-12 flex flex-col items-center justify-between gap-4 border-t border-border/50 pt-6 text-xs text-muted-foreground md:flex-row">
            <p>© {currentYear} {$SYSTEM.company}. All rights reserved.</p>

            <!-- Dark Mode Toggle -->
            <button
                onclick={toggleDarkMode}
                class="flex items-center gap-2 rounded-full border border-border/50 bg-accent px-3 py-1.5 text-xs text-muted-foreground transition-all hover:text-foreground cursor-pointer"
                aria-label="Toggle dark mode"
            >
                {#if isDark}
                    <span class="material-icons text-sm">light_mode</span>
                    <span>Light</span>
                {:else}
                    <span class="material-icons text-sm">dark_mode</span>
                    <span>Dark</span>
                {/if}
            </button>

            <div class="flex flex-wrap justify-center gap-4 sm:gap-6">
                <Link class="transition-colors hover:text-foreground" href="/privacy-policy">Privacy</Link>
                <Link class="transition-colors hover:text-foreground" href="/terms-of-use">Terms</Link>
                <Link class="transition-colors hover:text-foreground" href="/regulatory-disclosures">Disclosures</Link>
            </div>
        </div>

        <div class="mx-auto mt-6 max-w-3xl text-center text-[10px] leading-relaxed text-muted-foreground/60">
            Investing involves risk, including possible loss of principal. The information provided here is for general informational purposes only
            and should not be considered an individualized recommendation or personalized investment advice.
        </div>
    </div>
</footer>
