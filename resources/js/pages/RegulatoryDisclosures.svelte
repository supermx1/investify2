<script>
    import Layout from '@/components/frontend/Layout.svelte';
    import { SYSTEM } from '@/lib/store';
</script>



<Layout>
    <!-- Hero Section -->
    <header class="relative bg-background-light dark:bg-background-dark pt-20 pb-16 overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <span
                class="inline-block py-1 px-3 rounded-full bg-accent-gold/10 text-accent-gold text-xs font-semibold tracking-wider uppercase mb-6 border border-accent-gold/20 animate-fade-in"
            >
                Legal
            </span>
            <h1 class="font-serif text-4xl md:text-5xl font-medium text-primary dark:text-white leading-tight mb-6 animate-fade-in">
                Regulatory Disclosures
            </h1>
            <p
                class="text-lg text-gray-600 dark:text-gray-300 font-light leading-relaxed max-w-2xl mx-auto animate-fade-in"
                style="animation-delay: 0.1s;"
            >
                Important information regarding our regulatory status, business practices, and client protections.
            </p>
        </div>
        <div class="absolute -z-10 -top-20 -right-20 w-96 h-96 bg-accent-gold/5 rounded-full blur-3xl"></div>
    </header>

    <!-- Content Section -->
    <section class="py-16 bg-white dark:bg-primary/5">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg prose-gray dark:prose-invert max-w-none">
                <p class="lead text-xl text-gray-500 dark:text-gray-400 mb-10">
                    Last Updated: {new Date().toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' })}
                </p>

                <h3>1. SEC Registration</h3>
                <p>
                    {$SYSTEM.company} is an investment adviser registered with the U.S. Securities and Exchange Commission ("SEC").
                    Registration as an investment adviser does not imply a certain level of skill or training. Additional information about {$SYSTEM.company}
                    is available on the SEC's website at <a
                        href="https://www.adviserinfo.sec.gov"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-accent-gold hover:underline">www.adviserinfo.sec.gov</a
                    >.
                </p>

                <h3>2. Form ADV</h3>
                <p>
                    Our Form ADV Part 2A Brochure provides information about our qualifications and business practices. If you have any questions
                    about the contents of this Brochure, please contact us. The information in this Brochure has not been approved or verified by the
                    United States Securities and Exchange Commission or by any state securities authority.
                </p>
                <div class="my-8 p-6 bg-background-light dark:bg-white/5 rounded-lg border border-primary/5">
                    <h4 class="text-lg font-serif font-medium text-primary dark:text-white mb-2">Download Documents</h4>
                    <ul class="list-none pl-0 space-y-2">
                        <li>
                            <a href="#" class="flex items-center text-accent-gold hover:underline">
                                <span class="material-icons text-sm mr-2">description</span> Form ADV Part 2A (Firm Brochure)
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-accent-gold hover:underline">
                                <span class="material-icons text-sm mr-2">description</span> Part 3: Client Relationship Summary (Form CRS)
                            </a>
                        </li>
                    </ul>
                </div>

                <h3>3. Proxy Voting</h3>
                <p>
                    It is our policy not to vote proxies on behalf of our clients unless specifically agreed to in writing. Clients will receive proxy
                    materials directly from the custodian or transfer agent and are responsible for voting their own proxies.
                </p>

                <h3>4. Code of Ethics</h3>
                <p>
                    {$SYSTEM.siteName} has adopted a Code of Ethics pursuant to SEC Rule 204A-1. The Code describes the high standard of business conduct we
                    expect of our supervised persons and sets forth provisions regarding potential conflicts of interest, personal securities
                    transactions, and the protection of confidential information. A copy of our Code of Ethics is available to clients and prospective
                    clients upon request.
                </p>

                <h3>5. Business Continuity Plan</h3>
                <p>
                    We have developed a Business Continuity Plan to address how we will respond to events that significantly disrupt our business.
                    Since the timing and impact of disasters and disruptions is unpredictable, we will have to be flexible in responding to actual
                    events as they occur. Our plan covers data backup and recovery, mission critical systems, financial and operational assessments,
                    alternative communications, and alternate physical location of employees.
                </p>

                <h3>6. Anti-Money Laundering</h3>
                <p>
                    To help the government fight the funding of terrorism and money laundering activities, federal law requires all financial
                    institutions to obtain, verify, and record information that identifies each person who opens an account. What this means for you:
                    When you open an account, we will ask for your name, address, date of birth, and other information that will allow us to identify
                    you. We may also ask to see your driver's license or other identifying documents.
                </p>
            </div>
        </div>
    </section>
</Layout>
