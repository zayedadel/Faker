<?php

namespace Faker\Provider\ar_YE;

class Text extends \Faker\Provider\Text
{
    protected static function validStart($word)
    {
        return preg_match('/^\p{Arabic}/u', $word);
    }

    /**
     *
     * Title: ألفاظ يمنية قديمة في لهجة مخلاف شرعب المعاصرة دراسة مقارنة مع المعجم السبئي
     * Author: أ.د. عبدالله أبوالغيث
     * Language: Arabic
     *
     * @see https://wefaq.net/c/77/2939
     * @var string
     */
    protected static $baseText = <<<'EOT'

    تقع منطقة مخلاف شرعب في الجهة الشمالية من محافظة تعز اليمنية، وتمتد في الإطار الإداري لمديريتي شرعب السلام والتعزية، وتسمى أحياناً بمخلاف تعز. تجدر الإشارة أن منطقة المخلاف كانت في عصر الهمداني (توفي في الفترة: 350-360هـ) تمثل جزءاً من مخلاف السحول الذي تقع معظم مناطقه في محافظة إب الحالية مع بعض المناطق الواقعة شمال محافظة تعز الحالية؛ منها القَفاعَة وشرعب والأجعود[2]. والقفاعة هي التسمية القديمة للمنطقة التي غلبت عليها تسمية المخلاف الحالية، بينما انحسر اسم القفاعة ليصبح اسماً لإحدى عزل منطقة المخلاف في الوقت الحاضر، وتعد أكبر عزل المخلاف وتتوسط بقية عزله العشر الأخرى.
    
    ونحن عندما نتحدث عن لهجة منطقة مخلاف شرعب العربية المعاصرة يجدر بنا التنبيه بأنه من الصعوبة الادعاء بأن منطقة المخلاف تحوي على لهجة واحدة متطابقة في كل أساليبها وألفاظها، حيث نجد تفاوتاً في ألفاظ تلك اللهجة ومظاهرها اللغوية من عزلة لأخرى؛ بل من قرية لأخرى في إطار العزلة الواحدة، لذلك فنحن هنا سنعتمد في تحديدنا لألفاظ لهجة المخلاف -التي سنتناولها في ثنايا هذه الدراسة- بدرجة أساسية على لهجة قرية الحُمَري التي تتوسط عزلة القفاعة، وهي مسقط رأس الباحث.
    
    ولا يخفي أن بعضاً من الألفاظ المخلافية التي سنوردها في هذه الدراسة صارت في طريقها للاندثار[3] – كما هو الحال مع لهجات بقية مناطق اليمن[4] – ويعود ذلك لاختلاط أبناء المنطقة مع غيرهم بسبب هجراتهم الداخلية إلى بعض المدن اليمنية الرئيسة، وكذلك بعض الدول العربية خصوصاً منطقة الخليج، مع التأثير الذي تحدثه المسلسلات التي تبثها الفضائيات اليمنية والعربية وفي مقدمتها مسلسلات اللهجتين المصرية والسورية.
    
    تجدر الإشارة بأن الألفاظ التي سنتناولها هنا على أنها ألفاظ من لهجة المخلاف المعاصرة لا يقتصر وجودها على تلك اللهجة، لكنها تشترك في كثير منها مع لهجات المناطق المجاورة لها؛ خصوصاً في محافظتي تعز وإب، وتشترك في البعض الآخر مع كثير من اللهجات اليمنية المنتشرة في مختلف ربوع المحافظات اليمنية، ونترك للقراء الأعزاء من أبناء اليمن في تلك المناطق والمحافظات مهمة تحديد ما تشترك به مناطقهم مع لهجة المخلاف في إطار الألفاظ التي ستتناولها هذه الدراسة.
    
    علماً بأننا لن نتناول هنا كل الألفاظ والظواهر اللغوية التي تشترك بها لهجة مخلاف شرعب المعاصرة مع اللغة اليمنية القديمة، حيث أهملنا معظم الألفاظ التي تشيع بشكل كبير في معظم اللهجات اليمنية، وكذلك الألفاظ التي تشترك مصادرها اليمنية القديمة مع العربية الفصحى، لأن تناول كل تلك الألفاظ يعد مشروع لكتاب كبير، خصوصاً إن أضفنا إليها الظواهر اللغوية التي تشترك بها لهجة المخلاف مع اللغة اليمنية القديمة، وكذلك الألفاظ الكثيرة التي تزخر بها لهجة المخلاف ولا تستمدها من اللغة العربية الفصيحة، حيث يغلب الظن بأن أصول تلك الألفاظ إنما استمدتها لهجة المخلاف من اللغة اليمنية القديمة حتى وإن لم يكن بإمكاننا تأصيلها في إطار النقوش المسندية[5] التي تم اكتشافها حتى الآن، ونسأل من الله أن يمكننا من تناول الموضوع مفصلاً في إطار كتاب خاص، سواء بصورة شخصية، أو بالشراكة مع المهتمين من أبناء المنطقة وغيرهم من المختصين.
    
    لذلك فنحن في هذه الدراسة التي بين أيدينا سنكتفي بإيراد ألفاظ مختارة من لهجة مخلاف شرعب المعاصرة (قرابة مئة وخمسون لفظاً)، وسنعمل على تأصيلها للّغة اليمنية القديمة، وذلك من خلال مقارنتها مع الألفاظ التي أوردها المعجم السبئي[6]، مع الأخذ بعين الاعتبار بأن الألفاظ المخلافية التي سنتناولها لا تتطابق جميعها تمام الانطباق مع الألفاظ اليمنية القديمة الواردة في المعجم السبئي، لكنها قد تبتعد عنها معنى ومبنى، بحيث تحتفظ بجزء من معني اللفظة القديمة، وقد تتغير فيها المعاني الحسية إلى معنوية والعكس، إلى جانب تعرض تلك الألفاظ أحيانا لظواهر الإبدال والإقلاب[7].
    
    وسيلاحظ القارئ الكريم بأن بعض الألفاظ التي أوردناها وتعود في أصولها إلى اللغة اليمنية القديمة قد تشترك في بعض معانيها مع اللغة العربية الفصحى، وذلك يعود إلى الأصل المشترك الذي يربط بين اللغتين العربيتين الجنوبية القديمة والفصحى، وقد اتضح لنا من خلال استعراض المعجم السبئي اشتراك اللغتان في أكثر ألفاظهما، بصورة تفوق كثيراً ما تنبه إليه مؤلفو المعجم السبئي، أو ما أثبتته كتب التراث العربي[8]، وهو مشروع نلفت نظر أهل الاختصاص من اليمنيين وغيرهم للتصدي له وإخراجه إلى النور.
    
    نختم هذا التمهيد بالإشارة إلى بعض الأطروحات العلمية التي تناولت لهجة المخلاف، لكنها اقتصرت على تناول الظواهر اللغوية لتلك اللهجة وبعض مفرداتها، من غير تأصيل لها سواءً إلى العربية الفصحى أو إلى اليمنية القديمة، كما هو الحال مع أطروحة الدكتوراه التي أعدها الدكتور عبدالله محمد سعيد عبدالله[9]. أو أنها اقتصرت على إيراد بعض مفردات لهجات المخلاف مع تعريف مختصر بمعانيها، كما هو الحال مع رسالة الماجستير التي أعدها الباحث سرحان سعيد عثمان[10].
    
    نشير أخيراً بأن كتابة المسند اليمنية القديمة تحتوى على (29) حرفاً، يتطابق (28) حرفاً منها مع حروف اللغة العربية الفصحى، أما الحرف الزائد فيعتقد أنه يقع من حيث طريقة نطقه بين حرفي السين والشين، وهو إلى السين أقرب، ولذلك فنحن سنميزه عن حرف السين العادية عند وروده في مصادر كلمات المعجم السبئي التي سنوردها في دراستنا هذه بأن نكتبه على هيئة سين مشددة (سّ).
    
    علماً بأننا سنكتب الألفاظ اليمنية القديمة على هيئة مصادرها كما وردت في المعجم السبئي، لكننا سنرتبها حسب الأبجدية العربية ليسهل للقارئ متابعتها، وذلك بعكس المعجم السبئي الذي تم ترتيب مصادر الكلمات اليمنية القديمة فيه حسب ترتيب الحروف اللاتينية التي كتبت بها، وقد نضع أمام مصدر اللفظة رقماً، وذلك ليسهل العودة إلى اللفظة المقصودة في المعجم السبئي، كون مؤلفو المعجم قد اضطروا إلى تكرار مصادر بعض الألفاظ وتمييزها بالأرقام (1، 2 ، 3 ) إذا وجدوا اختلاف جذري في معانيها بين نقش وآخر. وسيكون منهجنا متمثلاً بإيراد معنى اللفظة المطلوب[11] الوارد في المعجم السبئي بين حاصرتين معقوفتين [ ]، ثم إيراد الألفاظ المقابلة في لهجة المخلاف بين قوسين ( ) مع توضيح الاشتراك في المعنى.
    
     (الألفاظ المدروسة)
    
    أتم :
    
    [ وفَقَ / ألف بين فريقين ]، وفي اللهجة (الـمُتِم) هي الأنثى الحامل من الحيوانات، ويتم استعارتها أحياناً للمرأة الحامل، والحمل عادة ما يأتي نتيجة للتوفيق (اقتران) بين أنثى وذكر.
    
    أسو / أسي :
    
    [ وَجَدَ ، وُجِدَ ] ، وفي اللهجة (أسِيْ) تعني وَجَدَ، وجمعها (أسْوا) أي وجَدوا، و (أسِيّة) تعني لُقْية.
    
    بذل :
    
    [ منح ]، وفي اللهجة (البَذَالة) هي المنحة التي تعطى لشخص ما مقابل إرجاعه للقية عثر عليها إلى صاحبها.
    
    برج :
    
    [ اكتسب ، تملك ، مال مكتسب ]، وفي اللهجة: فلان (بَرّج) فلان، إذا أعطاه مستحقات مالية يطلبها منه.
    
    برك1:
    
    بركة [ بِرْكَة ]، وفي اللهجة لازال الاسم نفسه مستعملاً، ويلفظ (بَرِكَة)، ويقصد بها خزان الماء المكشوف الذي يبنى من الأحجار ويطلى بمادة الجير أو الاسمنت لحفظ مياه الأمطار.
    
    برك2 :
    
    [ برّك ، بارك ]، وفي اللهجة (بَرَك) الشخص بمعنى جثى على ركبتيه، ويقال: جَمَل بارك، إذا استقر جالساً على الأرض.
    
    بسل :
    
    مبسل [ مطبخ ]، وفي اللهجة (بِسِل)[12] الأكل، بمعنى نضج على النار فهو (باسِل)، حيث تم استعارة اسم المطبخ للأكل الذي يطبخ فيه.
    
    بشيم :
    
    [ شيء غير مرغوب فيه ]، وفي اللهجة (البَشَم) هو الرائحة الكريهة (غير المرغوب فيها) التي تخرج من بطن الإنسان المصاب بالتخمة إذا تَجشأ (تِقَرْتَع)، و(بَشِم) من فلان سئم من وجوده أو كلامه. وقد أوردتها معاجم الفصحى بهذه المعاني[13].
    
    بهث :
    
    [ كبير، عظيم، غريب، أجنبي ]، وفي اللهجة يقال (اَبْتَهَت) إذا تعرض لشيء أخافه، و(بَهَتُه) إذا أخاف شخص آخر، وعادة ما يصاب الإنسان بالخوف إذا رأى شيء كبير أو غريب لا يعرفه. أما إبدال الثاء بالتاء فهو أمر شائع في اللهجة وفي الفصحى.
    
    ثرم :
    
    أثرم [ بوابة أو ساقية لتوزيع ماء ]، وفي اللهجة (أثْرَم/ أفْرَم/ أشْرَم) تقال على من شقت شفة فمه العليا.
    
    جرن :
    
    [ بيدر، جرن ]، وفي لهجة المخلاف يسمى البيدر (مِجْران).
    
    جزز :
    
    جززة [ كساء صوف ]، وفي اللهجة (جَز) بمعنى (قَصَ)، وعادة يتم قص الصوف من جلد الخروف، فأصبح اسم كساء الصوف اسماً لعملية قصه.
    
    حسّر :
    
    حسرو، أحسر [ فقراء الناس ]، وفي اللهجة (الحَاسِر) هو المصاب بالتعب والإنهاك، ويقال أيضاً كناية عن تعب المرأة الحامل وتوصف بأنها (حاسِر)، أما حمل المرأة فيسمى (إرْزان) فهي (مُرْزِن). ويلاحظ أن اللهجة أخذت من اللفظة القديمة صفة التعب ولإنهاك التي تميز حال الفقراء.
    
    حفش :
    
    [ فعل لا تعرف دلالته ]، وفي اللهجة حدث إبدال للفظة فيقال: (حَشَف) إذا رفع الشخص ثوبه إلى أعلى الركبة، ويقال (حَشْفَر) إذا زاد الرفع ووصل إلى حد إخراج العورة. ويقال فلان (اتْحَشْفَر) لفلان بمعنى استنفر طاقته لمواجهته.
    
    حلأ :
    
    تحلأن [ تاب من ذنب ]، وفي اللهجة (حِلِئ/ يِحْلأ) بمعنى تراجع عن خطئه، وقول الشخص (حُلوءتي) بمعني لن أكرر هذا العمل.
    
    حمم :
    
    [ فصل حر ]، ومنها أتت كلمة (حَمَأ) في لهجة المخلاف وغيرها من لهجات اليمن للتعبير عن حرارة الجو.
    
    حود :
    
    [ غار محفور في جانب الجبل ]، ولا زالت التسمية نفسها مستخدمة في لهجة المخلاف (حُود).
    
    حوي :
    
    [ أحاط، حصر، طوّق ]، وفي اللهجة (الَحَوِية) هي الحوش الخلفي للمنزل المحاط بالأحجار أو بعيدان شجرة العلب الشوكية (الزَرَب).
    
    خبط :
    
    [ كسر- هزم عدواً، عانى من مرض ]، وفي اللهجة (الخَبيط) هو دهس حبوب الذرة في البيدر (المجران)، بواسطة عود طويل معقوف يسمى (المَخْبَط). وفلان (خَبَط) فلان، بمعنى ضربه بعصا، وتسمى الضربة (خَبْطَة). ويقال: فلان (مَخْبُوط) فوق الفراش، أي يعاني من مرض شديد جعله طريح الفراش.
    
    خرش :
    
    [ خرّب، دمّر ]، وفي اللهجة (خَرَش) بمعنى: فك عقدة حَبْل، ويوصف الحبل بعد فك عقدته بأنه (مَخْروش)، و(خَرَش) للبهيمة فك رباطها. وهذه المعاني للّفظة تعود إلى اللغة اليمنية القديمة[14].
    
    خرط :
    
    [ استل – اخترط سلاحاً ]، وفي اللهجة (خَرَط) مازالت تحمل المعنى نفسه. و(الخَرَاط) هو الكذاب، و(الخَرْط) كلام مشكوك في صحته.
    
    خصر :
    
    خصرو [ رفيق، صاحب ]، وفي اللهجة (الخُصار) هو استخدام الخضروات لتسهيل أكل الخبز، فيقال مثلاً (تخَصّر) ببصل، فالخصار هنا يصاحب نزول الأكل إلى جوف الإنسان كما يصحب المرء رفيقه. وفي حال استخدام السوائل لتسهيل البلع مثل السمن واللبن يقال له (سِبْغ) وهي كلمة فصيحة.
    
    خطر :
    
    مخطر [ اسم لا تعرف دلالته ]، وفي اللهجة (مَخْطَر) تعني في أحد الأيام (ترتبط بقص ذكريات الأشخاص عن الماضي)، ويقال أيضاً: (مَخْطَر) واحد، بمعنى مرة واحدة.
    
    خلأ :
    
    [ فعل لا تعرف دلالته ]، وفي اللهجة (خَلأ) الشيء، إذا أصبحت له رائحة كريهة، فهو (خَالِئ)، والرائحة التي تبدر منه تسمى (خَلِي).
    
    خيب :
    
    خيبة [ جفاف، احتباس المطر]، وفي اللهجة (الخِيبة) هو الإنسان قبيح الوجه، ويقال أيضاً على الإنسان البخيل أو سيئ الطباع. والمشترك بين معاني المعجم واللهجة هو السوء الناتج عنها.
    
    دبل :
    
    [ كتلة من تمر ]، وفي اللهجة (دَبَل) تعني الشيء الكثير.
    
    دحق :
    
    لم يرد هذا الفعل في المعجم السبئي، لكنه ورد في نقش نشره مطهر الإرياني[15] كلقب لمقدم النقش (يدحق)، ويذكر الإرياني أن المقصود باللقب من يقوم بفعل (الدَحْق) وأن معناه غير معروف. وفي لهجة المخلاف (دَحَق) تعني ذَبَح، و(يِدْحَق) يذبح.
    
    دع :[16]
    
    دعو [ عَلِم، شعر بشيء ]، وفي اللهجة يوصف كثير العلم والمعرفة بأنه (دُعْدوع)، و(ادّعْدَع) فلان، بمعني تحدث كثيراً في موضوع ما. و(يِدَعْدِع) الماء، يكثر من شربه.
    
    دفن :
    
    مدفن [ حفرة لخزن الحبوب مطمورة في الأرض]، وظلت هذه (المدافِن) تحمل نفس التسمية في المخلاف وتستخدم لخزن الحبوب حتى وقت قريب، وقد تم الاستعاضة عنها مؤخراً بالبراميل الكبيرة.
    
    دهر :
    
    [ أحرق، دمّر ]، وفي اللهجة (دَهّر) فلان بأولاده، بمعني تركهم للآخرين يعبثون بهم دون متابعة واهتمام منه، وتستخدم للبهيمة إذا تركت ترعى في غير أملاك صاحبها، وكأن من (يِدَهِر) بأولاده أو حيواناته يودي بهم للهلاك.
    
    ذرأ :
    
    مذرأة [ حقل مزروع، أرض مزروعة ]، وفي اللهجة (ذَرأ الأرض) ألقى فيها بذور الحبوب، و(الذارئ) هو من يقوم بتلك العملية، و(المَذْرؤ) وعاء مصنوع من سعف النخيل توضع فيه البذور ويعلق على كتف من يقوم بعملية إبذار الأرض.
    
    ذود :
    
    ذودة [ مرعى ]، وفي اللهجة (الذُود) هو القطيع من الأغنام والماعز والإبل، وقد تطلق لفظة (ذُود) للدلالة على كثرة الشيء، كأن يقال: فلان له ذود من الأولاد، كناية على كثرة أولاده، و(الذَواد) هو من يرعى الإبل.
    
    ربخ :
    
    [ راحة، استجمام، بقاء ]، وفي اللهجة (رَبَخ، يَرْبُخ) بمعنى استراح بعد عمل، وتسمى فترة الراحة (رَبْخَة).
    
    ردع :
    
    وردت في المعجم السبئي في باب (رضع)، وتم تصحيحها في قائمة التصويبات (ردع)، ومعناها [ ذبح ]، وفي اللهجة (رَدَع) بمعنى نطح، ويقال ثور أو خروف (مُرَادِع) إذا مارس النطح ضد أقرانه من الحيوانات أو ضد بني الإنسان، والذبح إنما يكون للحيوان، الذي عادة ما يقاوم ذابحه.
    
    رحسّ :
    
    [ قرب قرباناً سائلا ]، وفي اللهجة يقال: فلان (رَحَس) فلان، بمعنى طرحه أرضاَ ومرغه في التراب، والبهيمة رحست الزرع إذا أتلفته، وفلان رحس الأكل إذا أكل كثيراً، وغالباً فإن ذلك من معانيها المتوارثة من اللغة اليمنية القديمة.
    
    روسّ :
    
    [ اسم لا تعرف دلالته ]، وفي اللهجة (رَوَس) الشيء إذا أقامه، فهو (مَرْووس)، وتستخدم للإنسان والجماد، ويأتي منها فعل الأمر (إرْوَس) بمعنى إرفع رأسك.
    
    زبد2 :
    
    [ هبة، عطية ]، وفي اللهجة تسمى الآنية الصغيرة المقعرة (زُبْدِيَة)، ربما لأنها كانت وما زالت وسيلة لتبادل الهدايا بين الجيران وغيرهم.
    
    زبر :
    
    [ بنى، أقام بناء ]، وفي اللهجة (الزَبَر) هو كثيب الرمل الذي يقيمه المحراث للفصل بين مواضع البذور (التَلِم). و(الزُبْرَة) هي مطرقة ضخمة من الحديد تستخدم لتقطيع صخور الجبال من أجل إعداد الأحجار للبناء، وتسمى أيضاَ (خِيشَة).
    
    زرر :
    
    [ عاق، قيد ]، وفي اللهجة يقال: فلان (زَر) فلان، بمعنى ضمه بقوة وقيد حركته، (والزِرَار) هو ما تثبت بواسطته أطراف الثوب.
    
    زهد :
    
    أزهد [ ضريبة، خراج ]، وفي اللهجة (زِهِد/ يِزْهَد) بمعنى: أدرك، وُهِبَ ذكاءً، عارف ببواطن الأمور، وتلك صفات يفترض توفرها بمن يخولون بتقدير قيمة الضرائب والخراج وتحصيلها، فأصبحت سمة للشخص المتمتع بالذكاء بشكل عام.
    
    سأر :
    
    [ سؤر، بقية ]، وفي اللهجة يقال (سُوْر) وتحمل المعنى نفسه.
    
    سبط :
    
    [ صرع – غلب – طرح أرضاً ]، وفي اللهجة (سِبِط) بمعنى التصق، وعادة ما يتلاصق المتصارعون (يِتْسَابَطُوا) أثناء صراعهم، ومن هنا أتي معناها في اللهجة.
    
    سبل :
    
    [ برج السنبلة الفلكي ]، وفي اللهجة (السَبُول) هي سنابل الذرة، ومفردها (سَبُولة) أي سنبلة، وغالباً هي من معاني اللغة اليمنية القديمة.
    
    سحت :
    
    [ هزيمة، اختلال، اضطراب ]، وفي اللهجة (سَحَت)، أي تزحلق فوق شيء ناعم، وتعني الاختلال وعدم الثبات.
    
    سكر :
    
    [ سدّ على مجرى ماء ]، وفي اللهجة (سَكّر) الباب أو الشيء المفتوح بمعنى أغْلَقه.
    
    سّلب :
    
    [ استقى ماء بغير حق، سلب ماء ]، وفي اللهجة (السَلَب) هي نوع من أنواع الحبال، تصنع من أوراق شجرة يقال لها (سِلْعِف)، وربما أسميت الحبال بالسَلَب لأنها تمثل الأداة التي يربط بها الدلو الذي يتم بواسطته سلب الماء.
    
    سلح :
    
    [ لوّث، نجّس ]، وفي اللهجة (سِلِح) بمعنى: تبرز إسهالاً، فهو (سَالِح)، وبرازه (سَلْح).
    
    سمر :
    
    مسمر [ اسم لا تعرف دلالته ]، وفي اللهجة (الـمَسْمَر، السَمَر، السَمْرة)، هي الاحتفال الليلي، أو تعمد بقاء الشخص يقظاً في الليل، والفاعل منها (سَامِر)، وجمعها (سُمُور).
    
    سّني :
    
    سنيو [ فعل لا تعرف دلالته ]، وفي اللهجة (السَاني) تعني الشيء المستقيم، وقولهم: امشي (سَانِي) أي على طول، و (سَنّى ) الحيوان، أي أطلقه إلى المرعى بدون راع، و (سَنّى) الشخص أولاده، بمعنى تركهم في الشوارع من غير اهتمام أو متابعة.
    
    سيب3 :
    
    [ خيانة، غدر ]، وفي اللهجة (السَياب) هو ترك الشخص أو الحيوان بدون رعاية واهتمام وأكل، فهو (مُسَيّب).
    
    شتر :
    
    [ خرّب ، كسّر ، شوّه ، عاب (شيئاً) ]، وفي اللهجة (شَتَر) ما زالت تحمل نفس تلك المعاني.
    
    شجب :
    
    لم ترد هذه اللفظة في المعجم السبئي، والفعل (شَجَبَ) يحمل معاني (حَفظ، حَمى، وَقى)[17]، وفي لهجة المخلاف تطلق تسمية (الشَاجِبة) على عملية الحرث العَرْضي لأطراف الحقل بعد حرثه طولاً، وذلك لحماية الزرع من التدفق المباشر لسيول الأمطار عليه.
    
    شرح :
    
    [ حَفظ ، نجّى ]، وفي اللهجة (شَرَح) الشيء بمعنى حرسه من السرقة، والفاعل منها (شَارِح)، والمفعول (مَشْرُوح). ويقال أيضاَ: (شَارِح) لي، بمعنى انتظرني.
    
    شقر :
    
    شقر، تشقر [ رفْع إلى النهاية العليا، قمة ]، وفي اللهجة (الشُقُر و الـمَشْقُر) هي تسمية للرياحين التي تزرع في أعلى قمة بسقف البيت، وتشقر الشخص، أي وضع الشُقُر على رأسه.
    
    شمت :
    
    [ شمات، شماتة ]، وفي اللهجة (الشَمَات) هو الشخص قذر الثوب أو الوجه أو الطباع، ويقال: كلام شَمَات، بمعنى كلام سيء.
    
    شوب :
    
    [ اسم لا تعرف دلالته ]، وفي اللهجة (الشُوبي) تسمية للبذرة التي تتوسط الغلاف المدور الذي يقع داخل ثمار الدوم (البُعَار)، وجمعها (شِيبان)، ويتم استخراجها وأكلها بعد فلق ذلك الغلاف بواسطة حجر.
    
    شوع :
    
    شعت [ شيعة - أنصار، زوج ]، وفي اللهجة (الشَوَاعة) هم الأشخاص المشاركين في زفة العروسة (الحَرِوّة) إلى بيت زوجها.
    
    صبس :
    
    [ تكريم، تبجيل ]، وتردد في لهجة المخلاف على نطاق ضيق كلمة (شَبَش) بمعنى أحسنت، وهي كلمة حملها بعض أبناء المنطقة من مدينة عدن اليمنية أثناء اغترابهم فيها أيام الاستعمار البريطاني جراء مخالطتهم للهنود لكونها من لغتهم. والسؤال: هل أخذها الهنود عن الحميريين، أم العكس[18]؟ أما الإبدال بين السين والصاد فهو أمر شائع.
    
    صبن :
    
    [ أمسك، مانِع، صد [19]]، وفي اللهجة توصف المرأة الحائض بأنها (مُصَبِن)، ويرتبط معني الكلمة بمعناها اليمني القديم بالإمساك عن معاشرتها من قبل الزوج لوجود مانع الحيض[20]، علماً بأن لفظة (حيض) قد وردت في النقوش اليمنية القديمة.
    
    صبي2 :
    
    [ اسم لا تعرف دلالته ]، وفي اللهجة (صَبا/ يَصْبي) الطعام إذا سكبه الشخص نحو الأسفل من إناء يحمله أعلى رأسه، بغرض تعريضه للرياح لتخليصه من بقايا السنابل العالقة فيه (الصُولَة والجُرْدُم).
    
    صرب :
    
    [ صراب، حصاد، موسم حصاد ]، وفي اللهجة مازالت تحمل الاسم نفسه (صِراب)، ويوصف الحقل بعد العملية بأنه (مَصْروب).
    
    صرف2 :
    
    [ مصروف، نفقة ]، وفي اللهجة يقال (صَرْفَة) للمعنى نفسه.
    
    صري :
    
    صري، صرية [ حمى – حفظ ، حماية ]، وفي اللهجة، (صَر) الشيء حفظه، و(الصُرَة) اسم لقطعة القماش التي تُصَر فيها الأشياء أو النقود لحفظها.
    
    صفف :
    
    [ اسم لا تعرف دلالته ]، وفي اللهجة (الصَفيف) هو حافة البِركة أو الحوض المستخدم لخزن المياه، وغالباً فذلك هو المعنى المقصود، خصوصاً أن المعجم السبئي يعتبر (صفف) لفظة مرادفة ل(ظفف) التي يعتبرها اسم مجهول أيضاً، وغالباً فهي تعني ضفة خزان مائي كبير (كالبحر والسد) كما هو في العربية الفصحى، وهو ما يقابل كلمة (صفيف) للخزان المائي الصغير.
    
    صلع :
    
    لم ترد لفظة (صلع) في النقوش التي اعتمد عليها المعجم السبئي، لكنها وردت في نقش القصيدة الحميرية التي اكتشفت بعد ذلك، وأعطي لها معنى الخُبْز[21]، وهو المعنى نفسه المستخدم في لهجة المخلاف (صُلَعْ) ومفردها (صُلْعَة)، وإذا صغر حجمها يقال لها (دُرْدُرْ) وجمعها (دَرَادِر).
    
    صلل :
    
    [ غطى بصفائح من حجر ]، وفي اللهجة يقال (صَلّلْ) البيت، إذا وضع على أخشاب سقفها صفائح الأحجار (الصَلَلْ) قبل أن يتم طمرها بالتراب.
    
    ضبح :
    
    [ فعل لا تعرف دلالته ]، وفي اللهجة (ضِبِح) الشخص، أي أصيب بالضجر، فهو (ضَبْحَان) بمعنى ضجر ومهموم.
    
    ضبع :
    
    هضبع [ أرسل في هجوم ]، وفي اللهجة يقال (ضَبّع) بالحيوان – خصوصاً القطط – إذا أرسله إلى مكان بعيد وتركه هناك رغبة في عدم عودته للبيت، ويقال: فلان (ضَبّع) بفلان إذا بعثه في مهمة خطرة يبغي هلاكه.
    
    ضمد :
    
    الضمد [ اسم لا تعرف دلالته ]، وفي اللهجة (الضِمْد) هي مقدار ما يعمله ثوران في يوم واحد، ويربطان بنير يسمى (مَضْمِد) ليجران محراثاً أو أدوات جرف (مَحَر)، وهذا هو معنى اللفظة في النقوش اليمنية القديمة[22].
    
    ضمر :
    
    [ بيع الغائب ]، وفي اللهجة (الضَمار) هو رأس المال، أو مقدار ما يمتلكه الشخص من أموال، وقد تقال للدلالة على ما يؤمله الأب من ولده، كأن يقول: اِبْنِي هذا مالي وضَماري.
    
    طبن :
    
    [ أدعى حقوق ملكية في أرض ]، ويرى الصلوي أنها تعني الشراكة في ملكية أرض، وأن الألفاظ المشتقة منها في اللهجات اليمنية المعاصرة أخذت معنى الشراكة بشكل عام[23]، وهو ما حدث في لهجة المخلاف، فالطَبينة هي الزوجة الثانية، و(الْـمَطْبُن) هو تنور احتياطي صغير يوضع بجوار التنور الأكبر منه (الـمافي)، و(طَبَنَت) المرأة عند جارتها، عندما تعطيها طحين وتطلب منها أن تخبز لها مع خبزها، وفلان (طَبَن) نفسه، بمعنى التحق بأناس آخرين ليستفيد من أكل أو خدمة بدون طلب منهم.
    
    ظبب :
    
    [ منطقة مسايل أمطار ؟ ]، وفي اللهجة (الظَبَب) هو الرائحة التي تنتج عن حريق أو احتكاك شديد بين شيئين (شياط باللهجة المصرية)، وغالباً فإن معنى الظبب في اللهجة من بقايا اللغة اليمنية القديمة.
    
    ظور :
    
    [ صخر، صفا ]، وفي اللهجة (الوَظْر) هو حجر صغير حاد غير مهندم يستخدم لتثبيت الأحجار الكبرى عند البناء، وعندما يستخدم في مجالات أخرى غير البناء يقال له (حِيف)، حيث حدث قلب بين الظاء والواو.
    
    عبط :
    
    [ بلوى ، مصيبة ] ، وفي اللهجة يقال فلان (عَبيط)، أي قوي يصعب منازلته، ويوصف أيضاً بأنه (مَصِيبة) ويقصد بها القوة وليس المعنى العام للمصيبة التي تعني الكارثة. ويوجد اللفظ في بعض اللهجات الخليجية.
    
    عجر :
    
    [ إيذاء ، ضِرار ]، وفي اللهجة (العَجِر) هي البهيمة التي يتم تلقيمها أكل أكثر من اللازم يؤدي إلى مرضها أو وفاتها، وتطلق بصفة خاصة على العِجْل الرضيع للبقرة.
    
    عرم :
    
    [ سد ، عَرِم ]، وفي اللهجة (العُرْم) هو حاجب العين، تشبيهاً له بسد يحمي العين التي تشبه البحيرة أسفل منه.
    
    عسن :
    
    عسن / معسن [ أساس ، مدماك أسفل في البناء ]، وفي اللهجة يقال (عَسَن) النوب/النحل، عندما يخرج من الخلية بقيادة الملكة (الأب بلهجة المخلاف)، حيث تقف الملكة على غصن أحد الأشجار وتقوم بقية النحل بالاستقرار (العُسُون) فوقها، وتصبح الملكة أسفل منها كمدماك الأساس في البناء.
    
    عصر :
    
    [ تصارع، تقاتل ]، وفي اللهجة (عَصَر) الشخص خصمه بمعنى أوقعه أرضاَ، و(عَصَر) قطعة القماش المبللة إذا لفها بقوة. و(العِصْرَة) هي الحُزمة المربوطة من قصب الذرة أو أوراق الخضروات وغيرها.
    
    عقب :
    
    [ بنى شيئاً إضافياً ، أضاف ]، وفي اللهجة يطلق اسم (العَقْبَة) على المحصول الإضافي لعيدان قصب الذرة، حيث تترك جذور عيدان القصب بعد قطعها، فتنبت منها عيدان خضراء طرية أصغر حجماً تسمى (العَقْبَة).
    
    عقم :
    
    معقم [ مصرف ماء ]، وفي اللهجة مازال الاسم نفسه يطلق على فتحة تصريف مياه الأمطار من قطع الأراضي الزراعية. أما (العَقْمَة) فهي تسمية تطلق على قطعة الأرض الكبيرة (الحُول) التي تستوعب كمية كبيرة من مياه الأمطار المتدفقة عليها من الشعاب المجاورة، بعكس (القَطِين) و (الرَجْحَة) و (الـمَشَنّة) و (الهُوب) التي تطلق على القطع الزراعية الأصغر حجما.
    
    عكر :
    
    [ نازع في ادّعاء، رد مطلباً ]، وفي اللهجة يقال (تَعَاكَروا) بمعنى تنافسوا في مسابقة؛ سواء كانت في معلومات أو في حركات رياضية مثل القفز والسباق والأكل وغيره، وكل منهم يدعي بأنه الأفضل. و(عَكِر) بمعنى صعب.
    
    علب :
    
    [ شجر العِلب ] ، وفي اللهجة ما زالت تحمل الاسم نفسه، ويقصد بها شجر السدر ، ويطلق على ثمرتها في المخلاف تسمية (البُعَار)، أما (البِعّار) فهو جمع ثمار الدوم.
    
    علم1 :
    
    [ اعترف ]، وفي اللهجة ( العِلْمْ) هو الكلام، وشخص (يَعْلِمْ) أي يتحدث في موضوع ما، و(عَلُوم) بمعنى يعجبه تبادل الحديث مع الآخرين. ويقال أيضاً (إعْلِمْني عن أحوالك) بمعنى خبِّرني عن شؤونك. والمشترك بين الاعتراف والكلام والإخبار هو وجود شخص يتحدث وآخر أو آخرون يستمعون.
    
    عوف :
    
    عوفي [ مجاعة ]، وفي اللهجة (العُواف) هي الوجبة الثانوية التي يأكلها الإنسان إذا شعر بالجوع في الضُحى بين وجبتي الإفطار والغداء، وفي بعض المناطق تطلق على الوجبة التي يأكلها الإنسان في العصر بين وجبتي الغداء والعَشاء.
    
    عير1 :
    
    [ عاب ، شان ]، وما زالت تستخدم في اللهجة بنفس المعنى، فيقال فلان (عَايَر) فلان إذا عابه في بعض مناقصه.
    
    فدي :
    
    [ فدى، فدية ]، وفي اللهجة (فَدِيْ) على الشخص المريض أو المرأة النفساء، بحيث يمسك بيده حيوان (دجاجة مثلاً) أو بيضة ويدور بها من فوق رأس الشخص المعني سبع مرات، ثم يقوم بذبح الحيوان أو رمي البيضة إلى الأرض، وتمثل تلك العملية حماية للشخص في عادات أهل المنطقة.
    
    فرع :
    
    [ باكورة ثمر، باكورة غلة ]، وفي اللهجة (فَرْعَمَت/ تِفَرْعِم) الشجرة، بمعنى ظهرت بواكير ثمارها، والاسم منها (فُرْعُوم) وجمعها (فَرَاعِم) ويقابلها في العربية الفصحى براعم.
    
    فقح :
    
    [ نِصْف ]، وفي اللهجة (فَقَح) تعني أبقى نصيباً لشخص ما؛ خصوصاً من شيء يؤكل.
    
    فلق :
    
    مفلق [ فتحة توزيع الماء من السد ]، وفي اللهجة فلق الشيء قسمه أو قطعه نصفين، وفلق رأس الشخص أو الحيوان، شجه بحجر أو فأس وغيره. ويقال أيضاَ (فَلَج) وتحمل المعنى نفسه في اليمنية القديمة وفي لهجة المخلاف.
    
    فيش :
    
    [ اسم لا تعرف دلالته ]، وفي اللهجة (الفِيش) هو الإباحة، ويقال أرض (فِيش) أي مباحة للرعي فيها، وغالباً ذلك هو المعنى المقصود للّفظة، ويوجد نفس المعنى في مدينة شهارة في محافظة عمران، حيث تنقسم المدينة إلى قسمين: شهارة الأمير، وشهارة الفيش، وكان السكن في شهارة الأمير ينحصر على الحاكم وخاصته، بينما يباح السكن لعامة الناس في شهارة الفيش.
    
    قدم :
    
    [ قائد، مقدم ]، وفي اللهجة يقال (مَقْدَمي) وهو من يتقدم القوم.
    
    قرش :
    
    قرشة، قرشتي [ راعٍ]، وفي اللهجة (القُرَاش) هي الأنعام، حيث تم استعارة اسم الراعي لبهائمه التي يرعاها.
    
    قسح :
    
    [ عنف، شدة، قسوة ]، وفي اللهجة فلان (قَسَح) فلان، بمعنى قتله، ويقال المريض (قَسَحِه) إذا فاضت روحه، والمقصود (قسحها) والضمير هنا عائد على الروح.
    
    قشب :
    
    قشبن [ بناء قشيب، إنشاء جديد ]، وفي اللهجة يقال: (قَشَب) البيت، بمعنى أزال أخشاب سقفه القديمة التي توشك على السقوط واستبدلها بأخشاب جديدة.
    
    قصع :
    
    قصع، مقصع [ نقب، نفق ]، وفي اللهجة (قَصَع) مدخل الغرفة أو البهو، إذا سده بجدار، و(قَصَع) العُود ، بمعنى كسره بيده نصفين.
    
    قطر :
    
    مقطر [ مقطرة، مجمرة للبخور ]، وفي اللهجة (الـمَقْطُور) هو المكان من سقف البيت الذي يعلو موضع التنور (المافِي)، وتوضع فيه فتحات لخروج الدخان.
    
    قطط :
    
    [ فعل لا تعرف دلالته ]، وفي اللهجة (قَطْقَط) الشيء، أي قطّعه إلى قطع صغيره.
    
    قطن :
    
    [ صغير ]، وفي اللهجة يقال للجربة الزراعية الكبيرة (حُول) بينما تسمى الجربة الأصغر منها (قَطِين).
    
    قفد :
    
    مقفدة [ أساس ؟] وضع المعجم هذه الترجمة مصحوبة بعلامة استفهام، أي أن هناك شك بالمعنى، وفي اللهجة (قَفَد) الشيء قلبه على رأسه فهو (مَقْفُود).
    
    قلح :
    
    [ ساقية ماء مرفوعة ]، وفي اللهجة (الـمُقَلِح) هو الشخص قليل الحياء، وغالباً هو لفظ يمني قديم رغم بعده عن المعنى الذي أورده المعجم.
    
    قلد :
    
    مقلد [ حَوض ]، وفي اللهجة (الـمَقْلِد) اسم للحفرة الصغيرة في الجبل التي تتبقى (تأجُل) فيها مياه الأمطار، وتسمى عند إذ مَقْلِد، ويستخدم الرعاة مياهها للشرب.
    
    قلي :
    
    [ حَرْق الحجر لصنع الجير للملاط ]، وفي اللهجة (القَلْي) هو الشَوي، و(الـمَقْلِي/ الـمَقْلَى) هو الصاج الذي ينضج عليه نوع من أنواع الخبز.
    
    قوح :
    
    ستقحن [ أحرز نجاحا أو فوزا ]، وفي اللهجة الشخص (الـمُقَاوِح) هو كثير المجادلة بالحق والباطل، ولا يقبل الهزيمة بسهولة. ويقال أيضاً فلان (قَوَّح) فلان، إذا شجه بحجر أو عصا (صميل) في رأسه.
    
    قيظ :
    
    [ موسم القيظ، غلال القيظ ]، وهو موسم زراعي استثنائي يسمى في اللهجة (القِياظ)، حيث تزرع الأرض في هذا الموسم إذا نزلت مياه الأمطار في الشتاء.
    
    كبي :
    
    مكبي [ إناء للطيب، إناء للدهن ] وتكبي [ تطييب، دهن ] وكبية [ اسم لا تعرف دلالته ]، وفي اللهجة (الكُبِيّة) هي تدخين الوعاء الذي يُحفظ فيه اللبن أو الدهن (السمن)، بواسطة عود شجرة تسمى (حَامَر)، بغرض الحفاظ على اللبن والدهن من التلف، ويطلق على العود المحترق اسم (مَكْبي).
    
    كرف :
    
    كرف، كريفم [ كريف، صهريج ، حوض ]، وفي اللهجة (الكَرِيف) هو الحفرة في الأرض التي تحتفظ بمياه الأمطار. و(الكُرْف) هي قبضة اليدين إذا ملئت بشيء، و(الكَرْف) هو شم الشيء المحبب برغبة. 
    
    كسّأ :
    
    [ فعل لا تعرف دلالته ]، وفي اللهجة (الكِسَا)، هو غطاء الوعاء، و(كَسّى) على الشيء غطاه، و(الكِيس) هو غطاء الرجل عند نومه، وكذلك الوعاء من القماش يحفظ به الطحين وغيره.
    
    كسو :
    
    كسوة [ كساء ]، وفي اللهجة (الكِسْوَة) هي ملابس الشخص، و(مُكْتَسِي) أي يرتدي ملابسه.
    
    كور :
    
    [ جبل ]، وفي اللهجة (الكُور) عبارة عن حجرة صلبة شبه مدورة بحجم قبضة اليد، تستخدم لسحق البسباس وغيرها على حجرة محفورة تسمى (مَسْحَقَة) أو (مَرْهَى).
    
    لبت :
    
    [ اسم لا تعرف دلالته ]، وفي لهجة المخلاف (اللبَّة) هي الحبل، وتحمل في بعض اللهجات اليمنية الأخرى معاني: رابط أو جسر[24].
    
    لكد :
    
    ملكد [ صهريج، حوض ]، وفي اللهجة (لَكَد) بمعنى استخدم عصا غليظه للضرب على سنابل الذرة بغرض فصل الحبوب عنها، وتسمى تلك العصا (مَلْكَد). وفلان (لَكَد) فلان، إذا ضربه بشدة. وغالباً هذه من المعاني اليمنية القديمة للّفظة.
    
    لهج :
    
    ألهج [ نافذة عليا، لَهْج (يمني) ]، وفي اللهجة (لَهِج) بمعنى واسع (رَاخِي)، لا ينغلق بإحكام، وتستخدم للنافذة، وغطاء الوعاء، وغيرها من الأشياء التي يشكو الإنسان من توسعها.
    
    متع :
    
    [ أبقى أحداً أو شيئاً ]، وفي اللهجة يقال (ماتِع) بمعنى انْتَظِر، و(مَاتَع) انْتَظَرَ، وهو (مُمَاتِع) أي مُنْتَظِر، والانتظار هو بقاء الشخص في مكانه.
    
    مسر :
    
    [ أزال الطين ]، وفي اللهجة تقال اللفظة على الشخص الملحاح، فيقال "فلان محد يقدر (يَمْسُرُه)"، أي تجد صعوبة في صرفه عما يطلب منك، حيث تحول المعنى الحسي إلى معنوي. والأكل (الـمَاسِر) غير المملوح.
    
    نجز :
    
    [ تخلص من أحد، وضع نهاية لأحد، أجهز على أحد ]، وفي اللهجة فلان (نَجَزْ) أي خرجت روحه، و(نَجَز) الشيء انتهى، و(نَجِزْنِي) بمعنى خلصني/ اعطني طلبي ودعني انصرف.
    
    نخي1 :
    
    هنخيو، يهنخيو [ أُسيل الماء، تُرك الماء يجري ]، وفي اللهجة يقال (نَخِي/ يَنْخِي) الماء، إذا سال من إناء مثقوب، وسقف البيت (يَنْخِي/يِنَخِي) إذا تسربت مياه الأمطار من ثقوب فيه إلى الداخل.
    
    ندف :
    
    [ فرسان ، خيالة ]، وفي اللهجة يقال: فلان (نَدَف) فلان، بمعنى أصابه بطلقة من بندقيته في مكان قاتل، وقد تعني القدرة على التصويب والقنص (الفروسية).
    
    نسأ :
    
    [ نسأ، أخّر، أجّل ]، وفي اللهجة (نَسأ/ يِنْسأ) إذا وضع عيدان قصب الذرة أو شيئاً من الأكل أمام البهيمة. ويستخدم الفعل للدلالة على تبذير الشخص، فيوصف بأنه (يِنْسأ) فلوسه للآخرين. وغالباً تلك من المعاني اليمنية القديمة للّفظة.
    
    نضو :
    
    [ خرّب، أتلف ]، وفي اللهجة (نَضَى/ يَنْضِي) الجدار، إذا أزاله من أساسه.
    
    نطع1 :
    
    [ عداوة، إيذاء ]، وفي اللهجة فلان (نَطَع) فلان، أي ضربه ضرباَ مبرحا.
    
    نطف :
    
    منطفة [ مذبح يقدم عليه قربان سائل ]، وفي اللهجة (النُطْفَة) هي القَطْرة من شيء سائل، و(نَطّف) أي تساقط على شكل قطرات.
    
    نفس :
    
    [ صفّى، نقّى ]، وفي اللهجة حدث إقلاب للفظة مع بقاء معناها، فيقال (نَسَّف).
    
    نفق :
    
    [ طلب شيئاً من أحد ]، وفي اللهجة يقال (نَفَقَت) البضاعة إذا اشتد عليها الطلب، وفلان (نَفّق) أي باع كل ما لديه.
    
    نفل :
    
    [ أنزل شيئاً ]، وفي اللهجة (نَفَل) السيارة، إذا أفرغها من حمولتها. ويقال: فلان (نَفَل) بعد فلان، أو نَزَل بعد فلان، بمعنى اشتد عليه بالكلام.
    
    نكر2 :
    
    تنكر [ بلوى/ بلاء ] وهنكرن [ شوّه، بدّل ]، وفي اللهجة يقال فلان (نُكْرَة) إذا تغيرت طباعه إلى الأسوأ، أو تمعر وجهه بالانفعال غير المبرر.
    
    نود :
    
    [ ريح، نَوْد ]، وفي اللهجة (نَوّد/ يِنَوِد) أي استخدم مروحة يدوية أو قطعة قماش لإشعال النار أو لتخفيض درجة حرارة الجو حول شخص ما، وتسمى تلك المروحة (مَنْوَدة).
    
    هجل :
    
    هجلم [ سير في سهل ]، وفي اللهجة (هَجَل / يَهْجِل) أي ردد الأهازيج المصاحبة للعمل، ويسمى ذلك الفعل (هُجْلَة، هُجَالة)، ولعل بعض الأهازيج كانت تردد أثناء عملية السير فتم إطلاق اسم السير على الأهازيج المصاحبة.
    
    هرج :
    
    [ قتل، ذبح ]، وفي اللهجة (هَرَج) فلان، بمعنى قال كلاماَ يستعرض فيه قوته وقدراته، وقد يكون أكثر كلامه مبالغ فيه، وفي المثل يقال "(الهَرْج) نصف القتال".
    
    همس :
    
    [ كسر، قهر عدواً ]، والهمس في لهجات بعض مناطق اليمن هو الضغط على الشيء بقوة، وفي لهجة المخلاف حدث إقلاب لحروف اللفظة وصارت (مَهَس).
    
    هيل :
    
    [ خوف، هول، فزع ]، وفي اللهجة يُضرب ب(الهُول) المثل بالضخامة فيقال (ساع الهول)، ولا يعرف الهول المقصود هنا، لكن الحكايات الشعبية في المنطقة تتحدث عن حيوان أسطوري تسميه (هول الليل) تذكر عنه أنه ضخم جداً، لدرجة تمكنه من وضع إحدى قدميه على جبل بينما يضع القدم الأخرى على جبل مقابل.
    
    وبد :
    
    يوبد [ حفر في صخر ]، وفي اللهجة يقال لآلة الحفر أو القَطع الحديدية بأنها صارت (وَدْب) عندما تفقد حدتها، على اعتبار أن الصخور التي تستخدم لقطعها تعد سبباً لفقد حدتها، وحدث إقلاب بين الباء والدال.
    
    وثر :
    
    وثر، أوثر [ وضع أساسا، جزء أسفل ]، وفي اللهجة (الـمُوثِر) هو أساس الجدار المطمور في الأرض.
    
    وثن :
    
    [ حدد، حجر حد ]، وفي اللهجة مازالت تسمية (وَثَن) تطلق على الحجر الذي يوضع حداً للفصل بين الأراضي الزراعية، ويقال (وَثّن) بمعنى وضع حداً.
    
    وجر2 :
    
    يوجرن [رُجِمَ]، وفي اللهجة (وَجّر) بمعنى رمى بالحجارة على أحد، ويتسابق الصبية ب(الوِجّار) بمعنى من منهم سيرمي الحجرة إلى مسافة أبعد من غيره.
    
    ورد :
    
    [ ورد، نزل إلى مكان، نزل المطر، عَمّق حفر بئر ]، وفي اللهجة (وَرَد) بمعنى: جلب الماء من البئر.
    
    وسف :
    
    [ زاد، أضاف أفراداً إلى فئة اجتماعية ]، وفي اللهجة يقال: فلان (وَسّف) فلان، بمعنى صب الماء على يديه أو جسده بصورة متقطعة لمساعدته على الاغتسال، وغالباً يدخل ذلك ضمن معاني الكلمة في اللغة اليمنية القديمة.
    
    وسق :
    
    هوسق [ ملأ ، طم، ردم (جداراً) ] وهي تحمل معنى الوصل بين الجدار وما يليه، وفي اللهجة يقال (واسَق) بمعني وصل بين طرفي شيء منقطع - حبل وغيره - ، ويقال (توَاسَق) الشخص شيئاً، إذا تناول شيء من مكان مرتفع، ويأتي منه فعل الأمر (اتْواسَق).
    
    وسل :
    
    موسلة [ قربان يتوسل به/ وسيلة ]، وفي اللهجة يقال (تِوَسّل/ يِتْوَسّل) إذا احتفظ بشيء ما لوقت حاجته. وتلبية الحاجة هي الصفة المشتركة بين المعنيين.
    
    وسم :
    
    سمة، موسم [ سِمة، علامة، أمارة ]، وفي اللهجة (وَسّم) بمعنى أحمى حديدة على النار تسمى (مِيسام) ووضعها على جسم الإنسان أو الحيوان بغرض علاجه من مرض، وتسمى علامتها الظاهرة على الجسم (وَسْمَة)،ومن ينفذ تلك العملية يسمى (مُوَسِّم). ويستخدم (الوَسْم) في بعض مناطق اليمن لوضع علامات لقطعان الماشية بغرض التعرف عليها.
    
    وصت :
    
    هوصت، موصت [ قضى - أمَر - حكم بشيء ، بَعْث - مهمة ]، وفي اللهجة (تَوَسَط)، بمعني تدخل لحل إشكال بين شخصين أو طرفين.
    
    وصح :
    
    [ وصل، بلغ ]، وفي اللهجة (الـمُواصَحَة) تعني المصارحة بين شخصين، بخصوص كلام بلغ أحدهما وقيل له بأن الآخر قاله عنه.
    
    وطف :
    
    [ اسم لا تعرف دلالته ]، وفي اللهجة (الوِطَاف) هو السرج الذي يقي الحمار عند تحميله شيء على ظهره، ويسمى عند الجمل (القَتَب). قارن مادة (وفط) في هذه الدراسة.
    
    وفأ :
    
    هوفأ [ زوّد، أعطى زاداً ]، وفي اللهجة الوفاء هو الزيادة، فيقول المشتري للبائع (وَفِيني) بمعنى زودني.
    
    وفط :
    
    وفط ، موفط [ أحرق، إحراق ]، وفي اللهجة (الـمُوطَفَة) هي قطعة قماش يستعين بها الإنسان للإمساك بوعاء أو شيء ساخن، حيث انتقل اسم الحرق إلى الأداة التي تستخدم للوقاية منه.
    
    وقر :
    
    [ حجر فيه نقش، ثقب صخر ]، وفي اللهجة (وَقّر) بمعنى حفر حجرة لاستخدامها في سحق شيء ما عليها، وتسمى أداة الحديد المستخدمة في ذلك الحفر (مُوقِر). وللكلمة استخدام معنوي في بعض الأحيان، كقولهم: فلان جالس (يِوَقِر) فوق رأسي، بمعنى يلح عليّ بكلامه في موضوع ما.
    
    وهت :
    
    موهت [ حقل منخفض ]، وفي اللهجة (الوهْطَة/ الـمُوهَطَة) هي المكان المنخفض من الأرض، والإبدال بين التاء والطاء شائع في لهجات اليمن ولغة العرب الفصحى.
    
    وهر :
    
    توهر [ لفظ لا تعرف دلالته]، وفي اللهجة يقال: (وَهّر) بمعنى طارد شخصاً أو جماعة من الناس مستخدماً الرمي بالأحجار، وترد أحياناً بمعنى الضرب المبرح، كقولهم في الدعاء على شخص ما " شِجْعَلك وَرْوَر مِن جِزِع وَهَّر" بمعنى جعلك الله عرضة لضرب جميع الناس.
    
    يبس :
    
    [ أرض جافة، أرض قاحلة ]، وفي اللجهة (الأرض يَبَسْ) بمعنى ناشفة من قلة سقوط الأمطار وانعدامها، والعود (اليابِس) هو الذي فقد خضرته وطراوته، وإنسان (يابِس) بمعنى نحيل وهزيل.
    
     تم بحمد الله
    
    [1] تم نشر هذا البحث في مجلة شؤون العصر (المحكمة)، الصادرة عن المركز اليمني للدراسات الاستراتيجية، صنعاء-اليمن، العدد49، 2013م، ص133-153.
    
    [2] الهمداني، الحسن بن أحمد بن يعقوب. صفة جزيرة العرب، تحقيق: محمد بن على الأكوع الحوالي، مكتبة الإرشاد، صنعاء، 1990م، ص 139، 197.
    
    [3] سيعتمد الباحث في تحديد معاني لهجة مخلاف شرعب – بدرجة أساسية - على ما تحويه ذاكرته منذ الطفولة، وذلك قد يجعل بعض الألفاظ والمعاني تسقط من ذهنه، فليعذرنا من وجد مثل تلك الهفوات، فالكمال لله وحده.
    
    [4] عن العوامل المؤثرة في اختفاء بعض الألفاظ المغرقة في المحلية من اللهجات اليمنية، انظر: السوسوة، عباس علي. دراسات في المحكية اليمنية، مركز عبادي للدراسات والنشر، صنعاء، ط2، 2007م ص 37- 49.
    
    [5] المسند هو الاسم الذي يطلق على الكتابات العربية القديمة التي كتبت بها دول جنوب جزيرة العرب (اليمن) قبل الإسلام، عن تلك الكتابة وحروفها وقواعدها انظر: بيستون، ألفرد. قواعد النقوش العربية الجنوبية.. كتابة المسند، ترجمة: رفعت هزيم، مؤسسة حمادة للخدمات الجامعية، إربد، 1995.   إسماعيل، فاروق. اللغة اليمنية القديمة، دار الكتب العلمية، تعز، 2000م.
    
    [6] بيستون.أ. ف. ل، جاك ريكمانز، محمود الغول، والتر مولر . المعجم السبئي (بالإنجليزية والفرنسية والعربية) ، دار نشريات بيترز- لوفان الجديدة، ومكتبة لبنان- بيروت، 1982م. مع ملاحظة أننا لن نشير في البحث إلى النقوش التي وردت فيها الألفاظ اليمنية القديمة التي تناولناها فيه، كونها قد وردت في المعجم السبئي الذي اعتمدناه للمقارنة في هذا البحث، ويمكن لمن يرغب العودة للمعجم لمعرفة تلك النقوش.
    
    [7] الإبدال هو جعل حرف مكان حرف آخر، ويحصل غالباً بين الحروف التي هي من مخرج واحد أو مخارج متقاربة. أما الإقلاب أو القلب فهو عبارة عن تقديم أحد حروف اللفظ الواحد مع حفظ معناه أو تغييره تغييراً طفيفاً، مثل قولهم جبذ وجذب، انظر: المخلافي، على محمد غالب ردمان. المنسوب إلى لهجات اليمن في كتب التراث العربي، وزارة الثقافة والسياحة، صنعاء، 2004م، ص 83، 97.
    
    [8] عن إشارات كتب التراث العربي لبعض الألفاظ اليمانية في لغة العرب الفصحى، انظر: الهلالي، هادي عطية مطر. دلالة الألفاظ اليمانية في بعض المعجمات العربية، مركز الدراسات والبحوث اليمني، صنعاء، 1987م.
    
    [9] لهجة قبائل المخلاف.. دراسة وصفية تراكمية في الأبنية والتراكيب، جامعة القاهرة، كلية دار العلوم، 2001م.
    
    [10] صلة لهجة المخلاف باللغة العربية الفصيحة، معهد الخرطوم الدولي للغة العربية، 2000م.
    
    [11] قد يكون للّفظة الواحدة أكثر من معنى في المعجم السبئي، بناء على تعدد النقوش المسندية التي وردت فيها، لكننا سنكتفي بإيراد المعنى أو المعاني التي لها مقابل في لهجة المخلاف، وسنهمل إيراد بقية المعاني.
    
    [12] يغلب على لهجة مخلاف شرعب عند نطق الفعل الماضي أو المضارع إمالة الحرف الأول نحو الكسر، مع تسكين آخر الفعل وعدم تحريكه بعلامات الإعراب، مع وجود حالات أخرى تتعدد بتعدد طريقة النطق في مناطق المخلاف. عن أبنية الفعل في لهجة المخلاف، انظر: عبدالله محمد سعيد، لهجة قبائل المخلاف، ص84-110.
    
    [13] الرازي، محمد بن أبي بكر بن عبد القادر. مختار الصحاح، مكتبة المؤيد، الطائف، 1971م، مادة (بشم). والملاحظ أن مؤلفي المعجم السبئي جعلوا مصدرها رباعي، بينما مصدرها في معاجم الفصحى ثلاثي.
    
    [14] الصلوي، ابراهيم محمد. ألفاظ يمانية خاصة، مجلة كلية الآداب، جامعة صنعاء، العدد 12، 1991م، ص 72.
    
    [15] انظر نقش الإرياني 71 في كتابه: نقوش مسندية وتعليقات، ط2، مركز الدراسات والبحوث اليمني، صنعاء، 1990م، ص 402-404.
    
    [16] اعتمد مؤلفو المعجم السبئي في مواضع قليلة المصدر الثنائي، هذه واحدة منها.
    
    [17] الصلوي. ألفاظ يمانية خاصة، ص 78.
    
    [18] يعود التواصل بين اليمن والهند إلى مطلع الألف الثاني قبل الميلاد على الأقل، لمزيد من التفاصيل، انظر: أبوالغيث، عبدالله. النشاط التجاري اليمني القديم وصلاته بالهند، مجلة التاريخ العربي، جمعية المؤرخين المغاربة، العدد 55، 2011م، ص 59-64.
    
    [19] تم اعتماد معاني هذه اللفظة من ورقة التصويبات الملحقة بالمعجم، وإن كانت لا تختلف كثيراً عن المعنى المصحح (امتنع، أمسك عن فعل شيء).
    
    [20] كانت معاشرة المرأة الحائض محرمة أيضاً في الديانات اليمنية الوثنية السابقة للإسلام، انظر: الصلوي، إبراهيم محمد. نقش جديد من نقوش الاعتراف العلني، مجلة كلية الآداب، جامعة صنعاء، العدد 20، 1997م، ص 36.
    
    [21] عبدالله، يوسف. ترنيمة الشمس.. نقش القصيدة الحميرية صورة من الأدب العربي قبل الإسلام، مركز الدراسات والبحوث اليمني، صنعاء، 1989م، ص 19. واكتفينا هنا بإيراد هذا الاسم من هذه القصيدة، وذلك بغرض لفت الانتباه إلى احتوائها على كثير من الأسماء والأفعال والظواهر اللغوية المنتشرة في لهجة مخلاف شرعب المعاصرة، حتى أنها تحتاج من وجهة نظرنا لدراسة خاصة بها، نأمل أن ترى النور على يد الباحث أو غيره من المختصين في هذا الجانب.
    
    [22]  لا يقتصر وجود هذه اللفظة على منطقة المخلاف لكنه ينتشر في العديد من مناطق اليمن، انظر: عبدالله، يوسف. معجم اللغة اليمنية القديمة، مجلة اليمن الجديد، وزارة الإعلام والثقافة، صنعاء، العدد 12، السنة 18، 1989م، ص40.
    
    [23] الصلوي. ألفاظ يمانية خاصة، ص 78.
    
    [24] عبدالله. معجم اللغة اليمنية القديمة، ص40.
    EOT;
}
