<x-app-layout>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('CSS/blogsdetals.css') }}">
    @endpush

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            luxury
        </h2>
    </x-slot>

    <div class="py-12 p-4">
        <div class="blog-header text-center">
            <h1 class="text-3xl font-bold text-white-600">لمسة أنوثة وفخامة من روزه ✨</h1>
        </div>
    </div>

    <div class="py-12 p-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-12 px-6 blog-content rtl p-4">
                    <div class="blog-text text-gray-700 text-lg leading-relaxed space-y-6">
                        <br>
                        <p>في عالم الجمال والموضة، تظل الأنثى دائمًا تبحث عن لمسة تُعبّر عن شخصيتها وتُبرز جمالها الداخلي والخارجي. ومن هنا، نشأت فكرة روزه – علامة متخصصة في تقديم كل ما يُضفي على إطلالتك لمسة أنوثة وفخامة. نحن في روزه نحرص على أن يكون كل منتج يعكس ذوقك الرفيع، ويُظهِر أناقتك في أدق التفاصيل.</p>

                        <p>روزه ليست مجرد متجر، بل هو عالم متكامل صُمم خصيصًا للمرأة التي تعشق التميز. من الحقائب اليدوية، والإكسسوارات الراقية، إلى الورود الصناعية الفاخرة، كل قطعة تُصمم بعناية لتمنحك تجربة فريدة وتُكمّل أناقتك بأسلوب فخم وعصري.</p>

                        <hr>

                        <h2 class="text-2xl font-semibold text-pink-500">لماذا روزه؟</h2>

                        <ul class="list-disc pl-6 space-y-2 text-gray-600">
                            <li><strong>أنوثة لا تُقاوم:</strong> تصميمات تجمع بين الرقة والأناقة لتُظهرك بأبهى صورة.</li>
                            <li><strong>فخامة وجودة:</strong> نختار أفضل الخامات والتفاصيل بعناية لتقديم منتج يليق بكِ.</li>
                            <li><strong>تشكيلة متنوعة:</strong> سواء للإطلالات اليومية أو المناسبات الخاصة، لدينا ما يناسب كل ذوق.</li>
                            <li><strong>هدايا مميزة:</strong> روزه هي خيارك الأول عندما ترغبين في تقديم هدية تترك أثرًا لا يُنسى.</li>
                        </ul>

                        <hr>

                        <h2 class="text-2xl font-semibold text-pink-500">لمسة فنية في كل منتج</h2>

                        <p>كل منتج في روزه يُعد قطعة فنية تعكس الشغف بالتفاصيل. ندمج بين الألوان الناعمة، والخامات الفاخرة، والتصاميم الحديثة لتوفير تجربة تسوق أنيقة وممتعة. من أول نظرة وحتى اللمسة الأخيرة، ستشعرين وكأنك تملكين شيئًا فريدًا.</p>

                        <p>سواء كنتِ تبحثين عن لمسة أنثوية تُكمّل إطلالتك أو قطعة تضفي على ديكور منزلك جمالًا خاصًا، روزه تقدم لكِ كل ما تحتاجينه بأسلوب يليق بالمرأة الراقية.</p>

                        <div class="text-center my-6">
                            <img src="{{ asset('files/main_images/blogs/c.png') }}" alt="لمسة أنوثة من روزه - إكسسوارات وهدايا فاخرة" class="mx-auto rounded-xl shadow-md w-full max-w-2xl">
                        </div>

                        <h2 class="text-xl font-bold text-center mt-8 text-pink-600">تسوّقي الأنوثة... تسوّقي روزه 💕</h2>

                        <p class="text-center text-gray-800 text-lg mt-4">في كل قطعة من روزه قصة تُحكى، وأناقة تُعبّر عنكِ. لا تنتظري، واكتشفي مجموعتنا المميزة التي تمنحكِ إحساس الفخامة والنعومة في آنٍ واحد. روزه... لأنكِ تستحقين الأفضل دائمًا.</p>

                        <div class="text-center mt-6">
                            <a href="{{ route('AllProducts') }}" class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-6 rounded-full transition">اكتشفي التشكيلة الآن</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
