<x-layout>
    <section class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="fond-bold text-4xl">Let's find Your Next Job</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Web developer..." class="rounded-xl bg-white/20 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>

        <x-section-heading>Featured jobs</x-section-heading>

        <div class="grid lg:grid-cols-3 gap-8 mt-5">
            <x-job-card />
            <x-job-card />
            <x-job-card />
        </div>

        <section class="pt-10">
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>

    </section>
</x-layout>
