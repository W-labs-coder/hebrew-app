@extends('layouts.app')

@section('content')
    <section>
        <div>
            <p class="fw700 fs18">
                סרטוני הדרכה
            </p>
            <p class="fs14 me-lg-5" style="color : #777">
                למדו כל מה שאתם צריכים לדעת על האפליקציה בעברית עם הסרטונים המוקפדים שלנו שישדרגו את החוויה שלכם באפליקציה.
            </p>
        </div>

        <div class="d-flex flex-column jcs"
            style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">


            <div style="background-color:#FBFBFB; line-height:21px !important; border:1px solid #C6C6C6; border-radius:10px; padding:16px; gap:16px"
                class="d-flex  ais flex-column">

                <p class="fs14 fw700">
                    צפה בסרטוני הדרכה
                </p>

                <div class="accordion" id="training" style="width:488px !important">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <div class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                style="display: flex; justify-content:space-between">
                                התחלת עבודה עם אפליקציית עברית
                                <span class="icon"></span>
                            </div>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#training">
                            <div class="accordion-body">

                                <div class="d-flex gap-3 aic jcs">
                                    <div>@include('components.svgs.play-svg')</div>
                                    <p class="fs14">איך לנווט באפליקציה בעברית</p>
                                    <p class="fs14" style="color:#777777">00:45</p>
                                </div>
                                <hr />
                                <div class="d-flex gap-3 aic jcs">
                                    <div>@include('components.svgs.play-svg')</div>
                                    <p class="fs14">
                                        איך להירשם לחבילות פרימיום
                                    </p>
                                    <p class="fs14" style="color:#777777">00:45</p>
                                </div>
                                <hr />
                                <div class="d-flex gap-3 aic jcs">
                                    <div>@include('components.svgs.play-svg')</div>
                                    <p class="fs14">
                                        כרטיסיות ניווט ופונקציות
                                    </p>
                                    <p class="fs14" style="color:#777777">00:45</p>
                                </div>
                                <hr />
                                <div class="d-flex gap-3 aic jcs">
                                    <div>@include('components.svgs.play-svg')</div>
                                    <p class="fs14">
                                        כל מה שצריך לדעת על אפליקציית עברית
                                    </p>
                                    <p class="fs14" style="color:#777777">00:45</p>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                תכונות מרכזיות של אפליקציה בעברית (חלק 1)
                                <span class="icon"></span>
                            </div>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#training">
                            <div class="accordion-body">

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                פונקציות מרכזיות של אפליקציה בעברית (חלק 2)
                                <span class="icon"></span>
                            </div>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#training">
                            <div class="accordion-body">

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                תכונות מרכזיות של אפליקציה בעברית (חלק 3)
                                <span class="icon"></span>
                            </div>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#training">
                            <div class="accordion-body">

                            </div>
                        </div>
                    </div>
                </div>



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
                        <p class="fs14" style="color : #777">
                            הדרכה לשימוש במסך זה:
                        </p>
                    </div>
                </div>
            </div>



    </section>
@endsection
