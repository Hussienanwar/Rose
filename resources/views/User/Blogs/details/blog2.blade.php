<x-app-layout>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('CSS/blogsdetals.css') }}">
    @endpush

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rosa Beuty
        </h2>
    </x-slot>

    <div class="py-12 p-4">
        <div class="blog-header text-center">
            <h1 class="text-3xl font-bold text-white-600">الميكب: سر الجمال والثقة مع روزه 💄</h1>
        </div>
    </div>

    <div class="py-12 p-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-12 px-6 blog-content rtl p-4">
                    <div class="blog-text text-gray-700 text-lg leading-relaxed space-y-6">
<br>
                        <p>في عالم الموضة والجمال، يبقى <strong>الميكب</strong> من أهم الوسائل التي تعتمدها المرأة لإبراز ملامحها والتعبير عن شخصيتها. سواء كنتِ تبحثين عن إطلالة طبيعية يومية أو لمسة ساحرة في مناسبة خاصة، فإن <strong>منتجات الميكب الأصلية من روزه</strong> تمنحكِ الثقة والجاذبية التي تستحقينها.</p>

                        <h2 class="text-2xl font-semibold text-pink-500">الميكب: أكثر من مجرد تجميل</h2>

                        <p>الميكب ليس مجرد أداة لتجميل الوجه، بل هو أسلوب حياة وطريقة للتعبير عن الذات. من خلال لمسات بسيطة، يمكنكِ تعزيز ملامحك الطبيعية، وإبراز أنوثتك، والشعور بالثقة في كل لحظة. في روزه، نقدم لكِ تجربة تجميل شاملة، تجمع بين الجودة، التنوع، والأسعار المناسبة.</p>

                        <h2 class="text-2xl font-semibold text-pink-500">أهم منتجات المكياج في روزه</h2>

                        <p>نحرص على توفير تشكيلة واسعة من <strong>منتجات الميكب الأصلية</strong>، المختارة بعناية لتناسب جميع أنواع البشرة:</p>

                        <ul class="list-disc pl-6 space-y-2 text-gray-600">
                            <li><strong>كريم الأساس (Foundation)</strong>: يوحّد لون البشرة ويمنحها مظهرًا ناعمًا وخاليًا من العيوب.</li>
                            <li><strong>الكونسيلر</strong>: لإخفاء الهالات والبقع، ويمنحكِ مظهرًا مشرقًا ومتجددًا.</li>
                            <li><strong>البلاشر</strong>: لمسة من الحيوية تمنح خدودك إشراقة طبيعية.</li>
                            <li><strong>ظلال العيون</strong>: ألوان متعددة تناسب كل الأوقات والمناسبات.</li>
                            <li><strong>الماسكرا والآيلاينر</strong>: لتحديد العيون ومنحها لمسة درامية جذابة.</li>
                            <li><strong>أحمر الشفاه</strong>: متوفر بقوامات وألوان تناسب كل الأذواق والمناسبات.</li>
                        </ul>

                        <h2 class="text-2xl font-semibold text-pink-500">كيف تختارين الميكب المناسب لبشرتك؟</h2>

                        <p>الاختيار الذكي للميكب يبدأ بفهم نوع بشرتك. في <strong>روزه</strong>، نساعدكِ في اختيار المنتجات المثالية:</p>

                        <ul class="list-disc pl-6 space-y-2 text-gray-600">
                            <li><strong>البشرة الدهنية</strong>: نوصي بكريم أساس مات يدوم طويلًا ويقلل اللمعان.</li>
                            <li><strong>البشرة الجافة</strong>: اختاري منتجات بتركيبة مرطبة وبلاشر كريمي.</li>
                            <li><strong>البشرة الحساسة</strong>: استخدمي مستحضرات خالية من العطور والمواد القاسية.</li>
                        </ul>

                        <h2 class="text-2xl font-semibold text-pink-500">لماذا تختارين ميكب روزه؟</h2>

                        <ul class="list-disc pl-6 space-y-2 text-gray-600">
                            <li>منتجات مكياج أصلية 100%</li>
                            <li>جودة عالية بأسعار تنافسية</li>
                            <li>ماركات محلية وعالمية موثوقة</li>
                            <li>توصيل سريع وآمن داخل مصر</li>
                            <li>نصائح تجميل من مختصين</li>
                        </ul>

                        <div class="text-center my-6">
                            <img src="{{ asset('files/main_images/blogs/m1.jpg') }}" alt="منتجات الميكب من روزه - كريم أساس وكونسيلر وبلاشر" class="mx-auto rounded-xl shadow-md w-full max-w-2xl">
                        </div>

                        <p><strong>الميكب يعبر عنكِ</strong>... هو لمسة فنية تخبر العالم من أنتِ. ومع كل منتج تختارينه من روزه، فأنتِ تروين قصة أناقة فريدة. اختاري الآن من تشكيلتنا، وابدئي كل يوم بجمال وثقة!</p>

                        <div class="text-center mt-6">
                            <a href="{{ route('AllProducts') }}" class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-6 rounded-full transition">اكتشفي منتجات الميكب الآن</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
