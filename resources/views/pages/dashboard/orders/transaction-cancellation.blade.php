@extends('layouts.app')

@section('content')
    <section>
        <div>
            <p class="fw700 fs18">
                ביטולי עסקאות
            </p>
            <p class="fs14 me-lg-5" style="color : #777">
                בטל בקלות את ההזמנה שלך אם תוכניות משתנות או יש צורך בהתאמות.
            </p>
        </div>

        <div class="d-flex flex-column jcs"
            style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">
            <div style="background: #021341; border-radius:10px; padding:16px">
                <div class="d-flex jcb aic">
                    <div class="d-flex aic gap-2">
                        @include('components.svgs.alert3-svg')
                        <div>
                            <p class="fs14" style="color : #FBFBFB !important">
                                שימו לב! ע"פ חוק אתרי סחר בישראל חייבים לשלב עמוד בקשת ביטול עסקה במקום בולט באתר. יצרנו
                                בשבילכם עמוד מתאים ונוח לגולשים. תהנו!
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div style="background-color:#FBFBFB; line-height:21px !important; border:1px solid #C6C6C6; border-radius:10px; padding:16px"
                class="d-flex  ais flex-column">


                <form method="POST" class="d-flex flex-column" style="gap:16px">
                    @csrf


                    <div class="d-flex-flex-column" style="gap:16px">
                        <p class="fs14 fw700">
                            טופס ביטול עסקה
                        </p>
                        <p class="fs14" style="width:488px !important">
                            באמצעות אפשרות זו תוכלו לפתוח עמוד "ביטול עסקה" נוח ויעיל עבור הלקוחות - והכל בלחיצת כפתור.
                        </p>
                    </div>



                    <div style="background: #E1E1E1; border-radius:10px; border-radius:10px; gap:16px; padding:16px; width:488px"
                        class="d-inline-flex flex-column ais jcc">
                        <p class="fw700 fs14">
                            איך זה עובד
                        </p>

                        @php
                            $options = [
                                ' לקוח שמעוניין לבטל עסקה נכנס אל העמוד ומזין את הפרטים',
                                'אתם מקבלים התראה במייל + הבקשה נכנסת לרשימת בקשות בתוך האפליקציה להמשך טיפולכם',
                            ];
                        @endphp

                        @foreach ($options as $option)
                            <div class="d-flex ais gap-3" style="justify-content: flex-start">
                                <div>
                                    @include('components.svgs.check-dark-svg')
                                </div>
                                <p class="fs14" style="color: #0D0D0D !important;">
                                    {{ $option }}
                                </p>

                            </div>
                        @endforeach

                    </div>

                    <div>
                        @include('components.form.select_input', [
                            'isRequired' => false,
                            'label' => 'עמוד ביטול עסקה',
                            'w' => '488px',
                            'id' => 'status',
                            'name' => 'status',
                            'options' => [],
                            'option_val' => 'name',
                            'option_val2' => 'id',
                            'show_default' => true,
                            'placeholder' => 'מכובה',
                            'login' => true,
                        ])
                    </div>
                    <div>
                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'דואר אלקטרוני של בעל האתר:',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'הכנס כתובת דוא"ל...',
                            'login' => true,
                            'w' => '488px',
                        ])
                    </div>
                    <div>
                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'קישור לתנאי השימוש באתר:',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'הקלד כאן את הקישור לאתר...',
                            'login' => true,
                            'w' => '488px',
                        ])
                    </div>
                    <div>
                        @include('components.form.text_area_input', [
                            'isRequired' => false,
                            'label' => 'תנאי ביטול עסקה:',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'רגע לפני שתבטלו עסקה, אנחנו מזמינים אתכם ליצור איתנו קשר.
                                                אם בכל זאת החלטתם לבטל, מלאו את פרטיכם בטופס משמאל ואנו ניצור איתכם קשר בהקדם.
                                                א. ביטול עסקה ייעשה תוך 14 ימים מיום קבלת המוצר, או מסמך הגילוי לפי המאוחר ביניהם.
                                                ב. בהתאם לחוק הגנת הצרכן, בגין ביטול העסקה תחוייבו בדמי ביטול בשיעור של %5 או 100 ש”ח לפי הנמוך ביניהם.
                                                ג. המוצר יוחזר ככל שהדבר אפשרי באריזתו המקורית.
                                                ד. החברה תמסור לצרכן עותק של הודעת הזיכוי שמסר העסק לחברת האשראי.
                                                ה. לא ניתן לבטל רכישה של מוצרים פסידים, מוצרים שיוצרו במיוחד עבור הצרכן וכן מוצרים הניתנים להקלטה, העתקה ושכפול שהצרכן פתח את אריזתם המקורית.',
                            'login' => true,
                            'w' => '488px',
                            'border' => '1px solid #C6C6C6',
                            'h' => '289px',
                        ])
                    </div>

                    <div>
                        @include('components.form.button', [
                            'text' => 'איפוס תנאי ביטול עסקה',
                            'h' => '37px',
                            'w' => '',
                            'br' => '24px',
                            'color' => '#fff',
                            'bg' => '#021341',
                            'border' => '1px solid #021341',
                            'type' => 'button',
                            'formId' => 'addProductForm',
                            'button_id' => 'addProductBtn',
                        ])

                    </div>

                    <div>
                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'קישור לתנאי השימוש באתר:',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'www.example.com/shopify/Hebrewapp',
                            'login' => true,
                            'w' => '488px',
                        ])
                    </div>

                    <div>
                        @include('components.form.button', [
                            'text' => 'העתקת קישור',
                            'h' => '37px',
                            'w' => '',
                            'br' => '24px',
                            'color' => '#fff',
                            'bg' => '#021341',
                            'border' => '1px solid #021341',
                            'type' => 'button',
                            'formId' => 'addProductForm',
                            'button_id' => 'addProductBtn',
                        ])

                    </div>


                    <div style="background: #E1E1E1; border-radius:10px; border-radius:10px; gap:16px; padding:16px; width:488px; margin-top:8px"
                        class="d-inline-flex  ais jcb">

                        <p class="fs14" style="color: #0D0D0D !important;">
                            צבע רקע:
                        </p>

                        <div style="background: #FBFBFB; width:25px; height:25px; border-radius:4px"></div>

                    </div>
                    <div style="background: #E1E1E1; border-radius:10px; border-radius:10px; gap:16px; padding:16px; width:488px; margin-top:8px"
                        class="d-inline-flex  ais jcb">

                        <p class="fs14" style="color: #0D0D0D !important;">
                            צבע טקסט:
                        </p>

                        <div style="background: #0D0D0D; width:25px; height:25px; border-radius:4px"></div>

                    </div>
                    <div style="background: #E1E1E1; border-radius:10px; border-radius:10px; gap:16px; padding:16px; width:488px; margin-top:8px"
                        class="d-inline-flex  ais jcb">

                        <p class="fs14" style="color: #0D0D0D !important;">
                            רקע הכפתור:
                        </p>

                        <div style="background: #0D0D0D; width:25px; height:25px; border-radius:4px"></div>

                    </div>
                    <div style="background: #E1E1E1; border-radius:10px; border-radius:10px; gap:16px; padding:16px; width:488px; margin-top:8px"
                        class="d-inline-flex  ais jcb">

                        <p class="fs14" style="color: #0D0D0D !important;">
                            צבע טקסט הכפתור:
                        </p>

                        <div style="background: #0D0D0D; width:25px; height:25px; border-radius:4px"></div>

                    </div>

                    <div>
                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'כותרת דף',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'הוסף כאן כותרת...',
                            'login' => true,
                            'w' => '488px',
                        ])
                    </div>
                    <div>
                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'כותרת תנאי ביטול עסקה',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'הוסף כאן את תנאי הביטול...',
                            'login' => true,
                            'w' => '488px',
                        ])
                    </div>
                    <div>
                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'כותרת טופס',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'הוסף כאן את כותרת הטופס...',
                            'login' => true,
                            'w' => '488px',
                        ])
                    </div>
                    <div>
                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'טקסט כפתור תנאי שימוש',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'לצפייה בתנאי השימוש של האתר',
                            'login' => true,
                            'w' => '488px',
                        ])
                    </div>
                    <div>
                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'שם מלא',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'הקלד את שמך המלא כאן...',
                            'login' => true,
                            'w' => '488px',
                        ])
                    </div>
                    <div>
                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'אֶלֶקטרוֹנִי',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'הקלד את כתובת האימייל שלך כאן...',
                            'login' => true,
                            'w' => '488px',
                        ])
                    </div>
                    <div>
                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'מספר טלפון',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'הקלד את מספר הטלפון שלך כאן...',
                            'login' => true,
                            'w' => '488px',
                        ])
                    </div>
                    <div>
                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'שדה מספר הזמנה',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'הקלד את מספר ההזמנה שלך כאן...',
                            'login' => true,
                            'w' => '488px',
                        ])
                    </div>


                    <div>
                         @include('components.form.text_area_input', [
                            'isRequired' => false,
                            'label' => 'הודעה קצרה וברורה',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'כתוב את ההודעה שלך כאן...',
                            'login' => true,
                            'w' => '488px',
                            'border' => '1px solid #C6C6C6',
                            'h' => '115px',
                        ])
                    </div>






                    <div>

                        @include('components.form.button', [
                            'text' => 'שמירת שינויים',
                            'h' => '37px',
                            'w' => '',
                            'br' => '24px',
                            'color' => '#0D0D0D',
                            'bg' => '#FBB105',
                            'border' => '1px solid #FBB105',
                            'type' => 'submit',
                            'formId' => 'addProductForm',
                            'button_id' => 'addProductBtn',
                        ])
                    </div>
                </form>




            </div>




            <div class="d-flex flex-column jcs"
                style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">
                <p class="fw700 fs18">
                    הדרכה לשימוש במסך זה:
                </p>
                <div style="border : 3px solid #C6C6C6; border-radius:12px; height:419px; background-color:#FBFBFB;"
                    class="d-flex aic jcc">
                    <div class="d-flex flex-column aic jcc">
                        @include('components.svgs.video-svg')
                        <p class="fs14" style="color : #777">כאן יופיע תוכן הווידאו</p>
                    </div>
                </div>
            </div>


            <div style="background: #021341; border-radius:10px; border-radius:10px; gap:16px; padding:16px"
                class="d-inline-flex flex-column ais jcc">

                @php
                    $options = [
                        'שלב 1 - הפעילו את מערכת ביטולי עסקאות ע"י לחיצה על הכפתור למעלה, כך שיופיע טקסט "מופעל".',
                        'שלב 2 - העתיקו את הקישור לעמוד דרך כפתור "העתק".',
                        'שלב 3 - שלבו את הקישור במקום בולט בתפריטי האתר כך שהלקוחות יוכלו לגשת אליו.',
                    ];
                @endphp

                @foreach ($options as $option)
                    <div class="d-flex aic gap-3" style="justify-content: flex-start">
                        @include('components.svgs.check-light-svg')
                        <p class="fs14" style="color: #FBFBFB !important;">
                            {{ $option }}
                        </p>

                    </div>
                @endforeach

            </div>


            <div class="d-flex flex-column jcs"
                style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">
                <div style="border : 3px solid #C6C6C6; border-radius:12px; height:419px; background-color:#FBFBFB;"
                    class="d-flex aic jcc">
                    <div class="d-flex flex-column aic jcc">
                        @include('components.svgs.video-svg')
                        <p class="fs14" style="color : #777">כאן יופיע תוכן הווידאו</p>
                    </div>
                </div>
            </div>
    </section>
@endsection
