@extends('layouts.app')

@section('content')
    <section>
        <div>
            <p class="fw700 fs18">ברוכים הבאים לאפליקציה בעברית</p>
            <p class="fs14 me-lg-5" style="color : #777">ברוכים הבאים לאפליקציה בעברית! האפליקציה המובילה בשוק שנותנת לכם את
                כל האפשרויות לגרום לאתר שלכם לדבר עם הלקוח הישראלי בשפתו המקומית. לנוחיותכם, האפליקציה מתעדכנת מעת לעת.
                תהנה! 🙂</p>
        </div>
        <div class="d-flex flex-column jcs"
            style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">
            <p class="fw700 fs18">
                וידאו מבוא
            </p>
            <p class="fs14" style="color : #777">
                צפו בווידאו המבוא הקצר הזה שיעזור לכם לנווט בקלות באפליקציה
            </p>

            <div style="border : 3px solid #C6C6C6; border-radius:12px; height:419px; background-color:#FBFBFB;"
                class="d-flex aic jcc">
                <div class="d-flex flex-column aic jcc">
                    @include('components.svgs.video-svg')
                    <p class="fs14" style="color : #777">כאן יופיע תוכן הווידאו</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div>
            <p class="fs18 fw700">
                קטגוריית הגדרות
            </p>
            <p class="fs14" style="color : #777">
                בלחיצה אחת על כל קטגוריה, תוכל בקלות להתאים את חנות ה-Shopify שלך לחוויה הייחודית שלך בישראל.
            </p>
        </div>


        @php
            $contents = [
                [
                    'name' => 'ימין לשמאל',
                    'icon' => 'rtl2',
                    'content' =>
                        'שנו את היישור של האתר שלכם מימין לשמאל - בלחיצת כפתור!',
                    'button' => 'הגדרת RTL',
                    'link' => 'rtl',
                ],

                [
                    'name' => 'כפתור שפה ודינאמי',
                    'icon' => 'language2',
                    'content' =>
                        'תרגמו את האתר שלכם לעברית במהירות ותאפשרו לקהל שלכם לקרוא באתר באופן שהם מכירים ורגילים אליו.',
                    'button' => 'שפת הגדרה',
                    'link' => 'language',
                ],
                [
                    'name' => 'אמצעי תשלום',
                    'icon' => 'payment2',
                    'content' =>
                        'הוסיפו לאתר את סמלי אמצעי התשלום המקומיים (ויזה, ביט וכו\') בהתאם לאופן התשלום שאתם מקבלים בהזמנות - בכמה קליקים בודדים!',
                    'button' => 'הגדרת אמצעי תשלום',
                    'link' => 'payment',
                ],
                [
                    'name' => 'גופנים',
                    'icon' => 'fonts2',
                    'content' =>
                        'הוכח כי הפונט של האתר עשוי לגרום ללמעלה מ-15% מהגולשים להישאר באתר. כדאי לשנות את הפונט שלכם! יש תמיכה בפונטים בעברית.',
                    'button' => 'הגדרת גופן',
                    'link' => 'fonts',
                ],
                [
                    'name' => 'תצורת WhatsApp',
                    'icon' => 'whatsapp2',
                    'content' =>
                        'הגדר הודעת פתיחה של WhatsApp כדי לברך מבקרים בחזית החנות שלך.',
                    'button' => 'הגדר עכשיו',
                    'link' => 'whatsapp',
                ],
                [
                    'name' => 'שַׁבָּת',
                    'icon' => 'sabbath2',
                    'content' =>
                        'הגדר את שעות השבת של החנות שלך כך שייסגרו ויפתחו מחדש באופן אוטומטי, תוך עדכון ללקוחות לגבי שעות הפעילות שלך',
                    'button' => 'קבע שבת',
                    'link' => 'sabbath',
                ],
                [
                    'name' => 'התראות',
                    'icon' => 'alert2',
                    'content' =>
                        'אין סיבה שהלקוחות שלכם יקבלו התראות למייל באנגלית - שנו עכשיו והתאימו את המלל לשפה ולמותג שלכם!',
                    'button' => 'הגדרות הודעות',
                    'link' => 'alert',
                ],
                [
                    'name' => 'נגישות',
                    'icon' => 'accessibility2',
                    'content' =>
                        'הפעילו תוסף נגישות על מנת לשפר את ידידותיות השימוש באתר שלכם לגולשים בעלי מוגבלויות. יש אפשרות גם להצהרת נגישות בקליק!',
                    'button' => 'הגדרת נגישות',
                    'link' => 'accessibility',
                ],
                [
                    'name' => 'מיקוד אוטומטי',
                    'icon' => 'automatic-focus2',
                    'content' =>
                        'באמצעות כלי המיקוד האוטומטי, המערכת שלנו יכולה לעדכן אוטומטית את המיקוד בהזמנות הנכנסות בהתאם לכתובת שהלקוח הזין.',
                    'button' => 'הגדרת מיקוד אוטומטי',
                    'link' => 'automatic-focus',
                ],
                [
                    'name' => 'CSS',
                    'icon' => 'css2',
                    'content' =>
                        'שינוי הגדרות עיצוב מתקדמות - למשתמשים בעלי יידע טכני בלבד.',
                    'button' => 'הגדרת CSS מותאם',
                    'link' => 'css',
                ],

            ];
        @endphp

        <div class="row aic" style="gap:16px; margin-top:16px">
            @foreach ($contents as $content)
                <div class="col-lg-5 col-md-5 col-12 d-flex flex-column jcs flex-fill"
                    style="border:1px solid #C6C6C6; background-color: #FBFBFB; gap:45px; border-radius:16px; padding:16px">
                    <div class="d-flex gap-2 aic">
                        @include('components.svgs.' . $content['icon'] . '-svg')
                        <p class="fs14 fw700">
                            {{ $content['name'] }}
                        </p>
                    </div>
                    <p class="fs14">
                        {{ $content['content'] }}
                    </p>
                    <div>
                        <a href="{{ '/dashboard/'.$content['link'] }}" class="primary-button">{{ $content['button'] }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
