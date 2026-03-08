<script>
    import Layout from '@/components/frontend/Layout.svelte';
    import { useForm } from '@inertiajs/svelte';
    import { fade, fly } from 'svelte/transition';
    import { SYSTEM } from '@/lib/store';
    import { Loader } from 'lucide-svelte';
    import { toast } from 'svelte-sonner';

    let coordinates = $state({
        latitude: '40.7058',
        longitude: '-74.0093',
    });

    let form = useForm({
        firstName: '',
        lastName: '',
        email: '',
        interest: 'General Inquiry',
        message: '',
    });

    function submit(e) {
        e.preventDefault();
        toast.success('Message sent successfully!');
        // $form.post('/contact-us', {
        //     onSuccess: () => {
        //         form.reset();
        //         toast.success('Message sent successfully!');
        //     },
        //     onError: () => {
        //         toast.error('Failed to send message!');
        //     },
        // });
    }
</script>

<Layout>
    <header class="relative bg-primary text-white pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 z-0 opacity-10">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid-pattern" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M0 40L40 0H20L0 20M40 40V20L20 40" stroke="white" stroke-width="1" fill="none" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid-pattern)" />
            </svg>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span
                class="inline-block py-1 px-3 rounded-full bg-accent-gold/10 text-accent-gold text-xs font-semibold tracking-wider uppercase mb-6 border border-accent-gold/20"
            >
                Get in Touch
            </span>
            <h1 class="font-serif text-5xl md:text-6xl font-medium leading-tight mb-6">
                Start the <span class="italic text-accent-gold">Conversation</span>.
            </h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto font-light leading-relaxed">
                Whether you’re looking to protect your wealth, explore new investment opportunities, or plan for future generations, we’re here to
                help.
            </p>
        </div>
    </header>

    <section class="py-24 bg-white dark:bg-background-dark relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Contact Information -->
                <div class="animate-fade-in-up">
                    <h2 class="font-serif text-3xl font-medium text-primary dark:text-white mb-8">Contact Information</h2>

                    <div class="space-y-8">
                        <div class="flex items-start gap-6 group">
                            <div
                                class="w-12 h-12 rounded-full bg-primary/5 dark:bg-white/10 flex items-center justify-center text-primary dark:text-accent-gold shadow-sm group-hover:bg-accent-gold group-hover:text-white transition-all duration-300"
                            >
                                <span class="material-icons">location_on</span>
                            </div>
                            <div>
                                <h3 class="font-serif text-xl font-medium text-primary dark:text-white mb-2">Headquarters</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                                    100 Financial District Blvd,<br />
                                    Suite 4500<br />
                                    New York, NY 10005
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-6 group">
                            <div
                                class="w-12 h-12 rounded-full bg-primary/5 dark:bg-white/10 flex items-center justify-center text-primary dark:text-accent-gold shadow-sm group-hover:bg-accent-gold group-hover:text-white transition-all duration-300"
                            >
                                <span class="material-icons">phone</span>
                            </div>
                            <div>
                                <h3 class="font-serif text-xl font-medium text-primary dark:text-white mb-2">Phone</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                                    <a href="tel:{$SYSTEM.phone}" class="hover:text-accent-gold transition-colors">{$SYSTEM.phone}</a>
                                </p>
                                <p class="text-sm text-gray-500 mt-1">Mon-Fri, 9am - 6pm EST</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-6 group">
                            <div
                                class="w-12 h-12 rounded-full bg-primary/5 dark:bg-white/10 flex items-center justify-center text-primary dark:text-accent-gold shadow-sm group-hover:bg-accent-gold group-hover:text-white transition-all duration-300"
                            >
                                <span class="material-icons">email</span>
                            </div>
                            <div>
                                <h3 class="font-serif text-xl font-medium text-primary dark:text-white mb-2">Email</h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                                    <a href="mailto:{$SYSTEM.email}" class="hover:text-accent-gold transition-colors">{$SYSTEM.email}</a>
                                </p>
                                <p class="text-sm text-gray-500 mt-1">We typically reply within 24 hours.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Map Location -->
                    <div class="mt-12 rounded-2xl overflow-hidden shadow-lg border border-gray-100 dark:border-white/10 h-64 relative group">
                        <iframe
                            title="Map Location"
                            width="100%"
                            height="100%"
                            frameborder="0"
                            scrolling="no"
                            marginheight="0"
                            marginwidth="0"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=-74.0293%2C40.6858%2C-73.9893%2C40.7258&amp;layer=mapnik&amp;marker={coordinates.latitude}%2C{coordinates.longitude}"
                            class="w-full h-full grayscale hover:grayscale-0 transition-all duration-500"
                        ></iframe>
                        <div class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition-colors pointer-events-none"></div>
                        <div
                            class="absolute bottom-4 left-4 bg-white dark:bg-primary px-4 py-2 rounded shadow-md text-xs font-medium text-primary dark:text-white pointer-events-none"
                        >
                            Financial District, NY
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-background-light dark:bg-white/5 rounded-2xl p-8 md:p-12 animate-fade-in-up" style="animation-delay: 0.2s;">
                    <h2 class="font-serif text-3xl font-medium text-primary dark:text-white mb-6">Send us a Message</h2>

                    <form onsubmit={submit} class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-primary dark:text-gray-300 mb-2" for="firstName">First Name</label>
                                <input
                                    bind:value={$form.firstName}
                                    class="w-full px-4 py-3 rounded-lg bg-white dark:bg-white/5 border-transparent focus:border-accent-gold focus:ring-0 transition-colors text-primary dark:text-white shadow-sm"
                                    id="firstName"
                                    placeholder="Jane"
                                    type="text"
                                />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-primary dark:text-gray-300 mb-2" for="lastName">Last Name</label>
                                <input
                                    bind:value={$form.lastName}
                                    class="w-full px-4 py-3 rounded-lg bg-white dark:bg-white/5 border-transparent focus:border-accent-gold focus:ring-0 transition-colors text-primary dark:text-white shadow-sm"
                                    id="lastName"
                                    placeholder="Doe"
                                    type="text"
                                />
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-primary dark:text-gray-300 mb-2" for="email">Email Address</label>
                            <input
                                bind:value={$form.email}
                                class="w-full px-4 py-3 rounded-lg bg-white dark:bg-white/5 border-transparent focus:border-accent-gold focus:ring-0 transition-colors text-primary dark:text-white shadow-sm"
                                id="email"
                                placeholder="jane@example.com"
                                type="email"
                            />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-primary dark:text-gray-300 mb-2" for="subject">Subject</label>
                            <select
                                bind:value={$form.interest}
                                class="w-full px-4 py-3 rounded-lg bg-white dark:bg-white/5 border-transparent focus:border-accent-gold focus:ring-0 transition-colors text-primary dark:text-white shadow-sm"
                                id="subject"
                            >
                                <option>General Inquiry</option>
                                <option>Wealth Management</option>
                                <option>Investment Strategy</option>
                                <option>Real Estate</option>
                                <option>Partnership</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-primary dark:text-gray-300 mb-2" for="message">Message</label>
                            <textarea
                                bind:value={$form.message}
                                class="w-full px-4 py-3 rounded-lg bg-white dark:bg-white/5 border-transparent focus:border-accent-gold focus:ring-0 transition-colors text-primary dark:text-white shadow-sm resize-none"
                                id="message"
                                placeholder="How can we help you?"
                                rows="5"
                            ></textarea>
                        </div>

                        <button
                            class="w-full bg-primary hover:bg-primary-light text-white px-8 py-4 rounded-lg text-sm font-medium transition-all shadow-lg hover:shadow-xl flex justify-center items-center gap-2"
                            type="submit"
                            disabled={$form.processing}
                        >
                            {#if $form.processing}
                                <Loader class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" />
                                Sending...
                            {:else}
                                Send Message <span class="material-icons text-sm">send</span>
                            {/if}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</Layout>
