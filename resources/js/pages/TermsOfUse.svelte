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
            <h1 class="font-serif text-4xl md:text-5xl font-medium text-primary dark:text-white leading-tight mb-6 animate-fade-in">Terms of Use</h1>
            <p
                class="text-lg text-gray-600 dark:text-gray-300 font-light leading-relaxed max-w-2xl mx-auto animate-fade-in"
                style="animation-delay: 0.1s;"
            >
                Please read these terms and conditions carefully before using our website.
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

                <h3>1. Acceptance of the Terms of Use</h3>
                <p>
                    These terms of use are entered into by and between You and {$SYSTEM.company} ("Company," "we," or "us"). The following
                    terms and conditions, together with any documents they expressly incorporate by reference (collectively, "Terms of Use"), govern
                    your access to and use of our website, including any content, functionality, and services offered on or through the website.
                </p>

                <h3>2. No Investment Advice</h3>
                <p>
                    The content of this website is for informational purposes only and does not constitute investment advice. You should not construe
                    any such information or other material as legal, tax, investment, financial, or other advice. Nothing contained on our Site
                    constitutes a solicitation, recommendation, endorsement, or offer by {$SYSTEM.siteName} or any third party service provider to buy or sell
                    any securities or other financial instruments in this or in any other jurisdiction in which such solicitation or offer would be
                    unlawful under the securities laws of such jurisdiction.
                </p>

                <h3>3. Intellectual Property Rights</h3>
                <p>
                    The Website and its entire contents, features, and functionality (including but not limited to all information, software, text,
                    displays, images, video, and audio, and the design, selection, and arrangement thereof) are owned by the Company, its licensors,
                    or other providers of such material and are protected by United States and international copyright, trademark, patent, trade
                    secret, and other intellectual property or proprietary rights laws.
                </p>

                <h3>4. Prohibited Uses</h3>
                <p>You may use the Website only for lawful purposes and in accordance with these Terms of Use. You agree not to use the Website:</p>
                <ul>
                    <li>In any way that violates any applicable federal, state, local, or international law or regulation.</li>
                    <li>To transmit, or procure the sending of, any advertising or promotional material without our prior written consent.</li>
                    <li>To impersonate or attempt to impersonate the Company, a Company employee, another user, or any other person or entity.</li>
                </ul>

                <h3>5. Disclaimer of Warranties</h3>
                <p>
                    You understand that we cannot and do not guarantee or warrant that files available for downloading from the internet or the
                    Website will be free of viruses or other destructive code. You are responsible for implementing sufficient procedures and
                    checkpoints to satisfy your particular requirements for anti-virus protection and accuracy of data input and output.
                </p>

                <h3>6. Limitation on Liability</h3>
                <p>
                    TO THE FULLEST EXTENT PROVIDED BY LAW, IN NO EVENT WILL THE COMPANY, ITS AFFILIATES, OR THEIR LICENSORS, SERVICE PROVIDERS,
                    EMPLOYEES, AGENTS, OFFICERS, OR DIRECTORS BE LIABLE FOR DAMAGES OF ANY KIND, UNDER ANY LEGAL THEORY, ARISING OUT OF OR IN
                    CONNECTION WITH YOUR USE, OR INABILITY TO USE, THE WEBSITE, ANY WEBSITES LINKED TO IT, ANY CONTENT ON THE WEBSITE OR SUCH OTHER
                    WEBSITES.
                </p>

                <h3>7. Changes to the Terms of Use</h3>
                <p>
                    We may revise and update these Terms of Use from time to time in our sole discretion. All changes are effective immediately when
                    we post them.
                </p>
            </div>
        </div>
    </section>
</Layout>
