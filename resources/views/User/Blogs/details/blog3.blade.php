<x-app-layout>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('CSS/blogsdetals.css') }}">
    @endpush

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Looly Bags
        </h2>
    </x-slot>

    <div class="py-12 p-4">
        <div class="blog-header text-center">
            <h1 class="text-3xl font-bold text-white-600">الشنط اللولي – أناقة تلاقيك في روزا 👜</h1>
        </div>
    </div>

    <div class="py-12 p-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-12 px-6 blog-content rtl p-4">
                    <div class="blog-text text-gray-700 text-lg leading-relaxed space-y-6">
<br>
                        <p>لو بتدوري على لمسة من الأناقة تميز إطلالتك، <strong>الشنط اللولي</strong> من <strong>موقع روزا</strong> هي اختيارك الأمثل. تصميمات فريدة تجمع بين الشياكة والعملية، ومناسبة لكل المناسبات من الخروجات اليومية للسهرات الفخمة. عندنا، هتلاقي كل جديد في <strong>موضة شنط اليد</strong> لسنة <strong>2025</strong>.</p>

                        <h2 class="text-2xl font-semibold text-pink-500">إيه هي شنط اللولي؟</h2>

                        <p><strong>شنط لولي</strong> هي <strong>أكسسوارات نسائية</strong> مميزة مصنوعة من خرز لولي لامع، بتدي شكل فخم وناعم في نفس الوقت. مش بس شنطة، دي قطعة فنية بتلفت الأنظار وتكمل أناقتك بكل خطوة.</p>

                        <h2 class="text-2xl font-semibold text-pink-500">تشكيلة شنط لولي من روزا</h2>

                        <p>في <strong>Rosa Store</strong>، هتلاقي تشكيلة متنوعة تناسب كل الأذواق:</p>

                        <ul class="list-disc pl-6 space-y-2 text-gray-600">
                            <li><strong>شنط لولي صغيرة (Mini Bags)</strong>: مثالية للمناسبات الخاصة أو خروجة سريعة.</li>
                            <li><strong>شنط وسط</strong>: عملية وأنيقة، مناسبة للمشاوير اليومية.</li>
                            <li><strong>شنط كبيرة</strong>: مثالية للشغل أو الجامعة، بتجمع بين السعة والشياكة.</li>
                        </ul>

                        <h2 class="text-2xl font-semibold text-pink-500">ليه تختاري شنطة لولي من روزا؟</h2>

                        <ul class="list-disc pl-6 space-y-2 text-gray-600">
                            <li>خامات ممتازة تضمن عمر طويل وشكل راقي.</li>
                            <li>أسعار تنافسية مع تخفيضات على مدار السنة.</li>
                            <li>توصيل سريع وآمن لكل محافظات مصر.</li>
                            <li>خدمة عملاء محترفة لمساعدتك في الاختيار.</li>
                        </ul>

                        <h2 class="text-2xl font-semibold text-pink-500">نصائح من روزا لتنسيق الشنط اللولي</h2>

                        <ul class="list-disc pl-6 space-y-2 text-gray-600">
                            <li>مع فستان بسيط، شنطة لولي بلون ذهبي أو لؤلؤي بتكمل الإطلالة بشكل خرافي.</li>
                            <li>لإطلالة كاجوال، اختاري شنطة بألوان ناعمة مع جينز وتيشيرت.</li>
                            <li>في السهرات، شنطة لولي فيها لمعة خفيفة تكمل لبسك بدون ما تغطي عليه.</li>
                        </ul>

                        <div class="text-center my-6">
                            <img src="{{ asset('files/main_images/blogs/b2.jpg') }}" alt="شنط لولي من موقع روزا - أكسسوارات نسائية موضة 2025" class="mx-auto rounded-xl shadow-md w-full max-w-2xl">
                        </div>

                        <h2 class="text-2xl font-semibold text-pink-500">اطلبي دلوقتي من موقع روزا</h2>

                        <p>زورينا على موقع <strong>روزا</strong> وشوفي التشكيلة الجديدة من <strong>شنط لولي 2025</strong>. كل شنطة مصممة بحب واهتمام بالتفاصيل عشان تليق بيكي وبستايلك المميز.</p>

                        <div class="text-center mt-6">
                            <a href="{{ route('AllProducts') }}" class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-6 rounded-full transition">شوفي الشنط دلوقتي</a>
                        </div>

                        <p class="mt-8 font-semibold text-center text-lg text-gray-800">شنطة واحدة من روزا كفيلة تغيّر ستايلك تمامًا! اختاري القطعة اللي تعبر عنك، وخلي أناقتك تبدأ من شنطتك.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
