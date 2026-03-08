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
                Privacy Policy
            </h1>
            <p
                class="text-lg text-gray-600 dark:text-gray-300 font-light leading-relaxed max-w-2xl mx-auto animate-fade-in"
                style="animation-delay: 0.1s;"
            >
                We are committed to protecting your privacy and ensuring the security of your personal information.
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

                <h3>1. Introduction</h3>
                <p>
                    {$SYSTEM.company} ("we," "our," or "us") respects your privacy and is committed to protecting it through our compliance
                    with this policy. This policy describes the types of information we may collect from you or that you may provide when you visit
                    our website and our practices for collecting, using, maintaining, protecting, and disclosing that information.
                </p>

                <h3>2. Information We Collect</h3>
                <p>We collect several types of information from and about users of our Website, including information:</p>
                <ul>
                    <li>
                        By which you may be personally identified, such as name, postal address, e-mail address, or telephone number ("personal
                        information");
                    </li>
                    <li>That is about you but individually does not identify you; and/or</li>
                    <li>About your internet connection, the equipment you use to access our Website, and usage details.</li>
                </ul>

                <h3>3. How We Use Your Information</h3>
                <p>We use information that we collect about you or that you provide to us, including any personal information:</p>
                <ul>
                    <li>To present our Website and its contents to you.</li>
                    <li>To provide you with information, products, or services that you request from us.</li>
                    <li>To fulfill any other purpose for which you provide it.</li>
                    <li>To carry out our obligations and enforce our rights arising from any contracts entered into between you and us.</li>
                </ul>

                <h3>4. Data Security</h3>
                <p>
                    We have implemented measures designed to secure your personal information from accidental loss and from unauthorized access, use,
                    alteration, and disclosure. All information you provide to us is stored on our secure servers behind firewalls.
                </p>

                <h3>5. Changes to Our Privacy Policy</h3>
                <p>
                    It is our policy to post any changes we make to our privacy policy on this page. If we make material changes to how we treat our
                    users' personal information, we will notify you through a notice on the Website home page.
                </p>

                <h3>6. Contact Information</h3>
                <p>
                    To ask questions or comment about this privacy policy and our privacy practices, contact us via our <a
                        href="/contact-us"
                        class="text-accent-gold hover:underline">Contact Page</a
                    >.
                </p>
            </div>
        </div>
    </section>
</Layout>
