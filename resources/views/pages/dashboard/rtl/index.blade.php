@extends('layouts.app')

@section('content')
    <section>
        <div>
            <p class="fw700 fs18">RTL</p>
            <p class="fs14 me-lg-5" style="color : #777">התאם בקלות את הפריסה שלך לנוחות ונגישות בקריאה מימין לשמאל</p>
        </div>



        <div class="d-flex flex-column jcs"
            style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">

            <div style="background: #021341; border-radius:10px; padding:16px">
                <div class="d-flex jcb aic">
                    <div class="d-flex aic gap-2">
                        @include('components.svgs.alert3-svg')
                        <p class="fs14" style="color : #FBFBFB !important">
                            לקוחות יקרים, הוספנו עבורכם תמיכה לתבניות הבאות:
                        </p>
                    </div>
                    @include('components.svgs.cancel-icon-svg')
                </div>
            </div>


            <div style="background-color:#FBFBFB; line-height:21px !important;">

                <p class="fs14" style="color : #777">
                    Alchemy, Alpha, Area, Aronic, Artz, Athens, August, Aurora, Aurum, Avone, Ayush, Baseline, Be, Belliza,
                    Berlin, Beyond, Bioearth, Biona, Blockshop, Blum, Boost, Booster, Broadcast, Broccoli, Brooklyn, Cafesa,
                    Camamas, Canopy, Canyon, Capital, Caros, Cartior, Classy, Colorblock, Combine, Concept, ContentIL,
                    Copenhagen, CornerStone, Craft, Crave, Dawn, Debut, Debutify, Denim, Digital, District, Ecom, Ecomify,
                    Ecomprofithub, Ecomus, Ecomwithmichael, Editions, Electro, ElectroElectronics, Electronics, Ella,
                    Emerge, Empire, Enterprise, Envy, Esrar, Essence, Exclusive, Expanse, FKX, Fashionopolism, Fastor,
                    Fetch, Flexion, Flow, Focal, Forge, Foxic, Frame, Furniture, Furrie, Gain, Gecko, Gravity, Habitat,
                    Halo, Harmic, Honey, Housei, Impact, Impulse, Influence, Kabbalah, Kala, Kalles, Kidxtore, Kodo, Koka,
                    Krismotion, LeanDawn, Lezada, Local, Loft, Lumia, Lushy, Lusion, Luxe, Mate, Mavon, Milton, Minimalin,
                    Minimalista, Minimog, Minion, Modular, Mojave, Mojuri, Morata, Motion, MrParker, Neat, Neytiri,
                    NfDigital, North, Odora, Origin, Oworganic, PaloAlto, Paper, Parallax, PerchFashion, Pesto, Petshop,
                    Pop, PoseTheme, Prestige, ProfitParadise, Publisher, Pukabop, Pursuit, Rebel, Reformation, Refresh,
                    Ride, Sahara, Sense, Shapes, Shovalstudio, Showcase, Shrine, ShrinePro, Slumberhome, Sofine, Spark,
                    Split, Spotlight, Spozy, Stark, Starlite, Startup, Stella, Stellar, Stiletto, Story, Streamline, Studio,
                    SuitUp, Sunrise, Suruchi, Sweeny, Symmetry, TJ, Taste, Tifaret, Toykio, Toyqo, Trade, Tritiya, Turbo,
                    Umino, Unsen, Upscale, VeanVision, Veena, Venture, Venue, Vogue, Warehouse, Wokiee,
                </p>

            </div>
        </div>



        <div class="d-flex flex-column jcs"
            style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">

            <div>
                <p class="fw700 fs18">
                    יישרו את האתר שלכם מימין לשמאל כך שיהיה תואם לשפה.
                </p>
                <p class="fs14" style="color: #777">
                    במידה וערכת הנושא שלכם לא נמצאת כאן, צרו איתנו קשר ואנחנו נדאג להעלות אותה עבורכם.
                </p>
            </div>
            <div style="background: #021341; border-radius:10px; padding:16px">
                <div class="d-flex jcb aic">
                    <div class="d-flex aic gap-2">
                        @include('components.svgs.alert3-svg')
                        <div>
                            <p class="fs14" style="color : #FBFBFB !important">
                                לצורך התאמת ערכת הנושא, שם התבנית שלכם חייבת להתחיל בשם המקורי של התבנית על מנת להתאים את
                                התבנית בצורה נכונה
                            </p>
                            <p class="fs14" style="color : #C6C6C6 !important">
                                במידה וערכת הנושא שלכם לא נמצאת כאן, צרו איתנו קשר ואנחנו נדאג להעלות אותה עבורכם.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div style="background-color:#FBFBFB; line-height:21px !important; border:1px solid #C6C6C6; border-radius:10px; padding:16px"
                class="d-flex jcb aic">

                <div>
                    <form method="POST">
                        @csrf
                        @php
                            $options = [
                                [
                                    'id' => '1',
                                    'value' => 'Order confirmation',
                                    'name' => 'Order confirmation',
                                ],
                                [
                                    'id' => '2',
                                    'value' => 'Draft order invoice',
                                    'name' => 'Draft order invoice',
                                ],
                                [
                                    'id' => '3',
                                    'value' => 'Shipping confirmation',
                                    'name' => 'Shipping confirmation',
                                ],
                                [
                                    'id' => '4',
                                    'value' => 'Picked up by customer',
                                    'name' => 'Picked up by customer',
                                ],
                                [
                                    'id' => '5',
                                    'value' => 'Ready for local pickup',
                                    'name' => 'Ready for local pickup',
                                ],
                                [
                                    'id' => '6',
                                    'value' => 'Order out for local delivery',
                                    'name' => 'Order out for local delivery',
                                ],
                                [
                                    'id' => '7',
                                    'value' => 'Order locally delivered',
                                    'name' => 'Order locally delivered',
                                ],
                                [
                                    'id' => '8',
                                    'value' => 'New gift card',
                                    'name' => 'New gift card',
                                ],
                                [
                                    'id' => '9',
                                    'value' => 'Order edited',
                                    'name' => 'Order edited',
                                ],
                                [
                                    'id' => '10',
                                    'value' => 'Order cancelled',
                                    'name' => 'Order cancelled',
                                ],
                                [
                                    'id' => '11',
                                    'value' => 'Order payment receipt',
                                    'name' => 'Order payment receipt',
                                ],
                                [
                                    'id' => '12',
                                    'value' => 'Shipping update',
                                    'name' => 'Shipping update',
                                ],
                            ];
                        @endphp
                        @include('components.form.select_input', [
                            'isRequired' => false,
                            'label' => 'רשימת ערכות הנושא:',
                            'w' => '488px',
                            'id' => 'status',
                            'name' => 'status',
                            'options' => $options,
                            'option_val' => 'name',
                            'option_val2' => 'id',
                            'show_default' => true,
                            'placeholder' => 'בחר נושא',
                            'login' => true,
                        ])


                        <div class="d-flex flex-column" style="gap:24px">
                            <p class="fs14">
                                ערכת נושא נוכחית: Motion
                            </p>

                            @include('components.form.button', [
                                'text' => 'הגדרת אמצעי תשלום',
                                'h' => '37px',
                                'w' => '183px',
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
                <div>
                    @include('components.svgs.rtl-image-svg')
                </div>


            </div>

            <p class="fs14" style="margin-top: 10px">
                נתקלים בקושי למצוא את חבילת הנושא שלכם? צרו קשר ואנחנו נדאג להוסיף אותה עבורכם.
            </p>
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
                    'שלב 1 - בחרו את ערכת הנושא מהרשימה.',
                    'שלב 2 - לחצו "שמירה".',
                    'שלב 3 - הכנסו ל"הגדרות האפליקציה בערכת הנושא".',
                    'שלב 4 - וודאו שהאפליקציה מופעלת וש"Activate RTL" מסומן.',
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
