@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">
    <br>

    <div id="article-from" class="shade">

        <div class="widget-title">
            <h3>
                {{ $user->short(118) }}

            </h3>
            {{--  <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>  --}}
        </div>


        <div class="expert-form">


            <form action="{{route('panel.experts')}}" method="post" id="teacher_ab_form">
                @csrf
                @method('post')

                <div class="expert-section">
                    <h4> {{ $user->short(165) }}</h4>
                    <div class="forsm">
                        <div class="ra row">
                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Starter">
                                        <input type="checkbox" {{($customer->attr('Starter'))?'checked':''}} id="Starter" name="Starter">
                                        <label class="key" for="Starter">
                                            <div class="right">
                                                <span> {{ $user->short(166) }}</span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Elementary">
                                        <input type="checkbox" {{($customer->attr('Elementary'))?'checked':''}} id="Elementary" name="Elementary">
                                        <label class="key" for="Elementary">
                                            <div class="right">
                                                <span> {{ $user->short(167) }}</span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Intermediate">
                                        <input type="checkbox" {{($customer->attr('Intermediate'))?'checked':''}} id="Intermediate" name="Intermediate">
                                        <label class="key" for="Intermediate">
                                            <div class="right">
                                                <span> {{ $user->short(168) }}</span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Upper_intermediate">
                                        <input type="checkbox" {{($customer->attr('Upper_intermediate'))?'checked':''}} id="Upper_intermediate" name="Upper_intermediate">
                                        <label class="key" for="Upper_intermediate">

                                            <div class="right">
                                                <span>
                                                    {{ $user->short(169) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Advanced">
                                        <input type="checkbox" {{($customer->attr('Advanced'))?'checked':''}} id="Advanced" name="Advanced">
                                        <label class="key" for="Advanced">

                                            <div class="right">
                                                <span>
                                                    {{ $user->short(170) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Mastery">
                                        <input type="checkbox" {{($customer->attr('Mastery'))?'checked':''}} id="Mastery" name="Mastery">
                                        <label class="key" for="Mastery">

                                            <div class="right">

                                                <span> {{ $user->short(171) }}</span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="expert-section">
                    <h4>
                        {{ $user->short(239) }}
                    </h4>
                    <div class="forsm">
                        <div class="ra row">
                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="American_Accent">
                                        <input type="checkbox" {{($customer->attr('American_Accent'))?'checked':''}} id="American_Accent" name="American_Accent">
                                        <label class="key" for="American_Accent">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(172) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="British_Accent">
                                        <input type="checkbox" {{($customer->attr('British_Accent'))?'checked':''}} id="British_Accent" name="British_Accent">
                                        <label class="key" for="British_Accent">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(173) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Australian_Accent">
                                        <input type="checkbox" {{($customer->attr('Australian_Accent'))?'checked':''}} id="Australian_Accent" name="Australian_Accent">
                                        <label class="key" for="Australian_Accent">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(174) }}

                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Indian_Accent">
                                        <input type="checkbox" {{($customer->attr('Indian_Accent'))?'checked':''}} id="Indian_Accent" name="Indian_Accent">
                                        <label class="key" for="Indian_Accent">

                                            <div class="right">

                                                <span>

                                                    {{ $user->short(175) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Irish_Accent">
                                        <input type="checkbox" {{($customer->attr('Irish_Accent'))?'checked':''}} id="Irish_Accent" name="Irish_Accent">
                                        <label class="key" for="Irish_Accent">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(176) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Scottish_Accent">
                                        <input type="checkbox" {{($customer->attr('Scottish_Accent'))?'checked':''}} id="Scottish_Accent" name="Scottish_Accent">
                                        <label class="key" for="Scottish_Accent">

                                            <div class="right">

                                                <span>

                                                    {{ $user->short(177) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="South_African_Accent">
                                        <input type="checkbox" {{($customer->attr('South_African_Accent'))?'checked':''}} id="South_African_Accent" name="South_African_Accent">
                                        <label class="key" for="South_African_Accent">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(178) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="expert-section">
                    <h4>


                        {{ $user->short(238) }}
                    </h4>
                    <div class="forsm">
                        <div class="ra row">
                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Children_">
                                        <input type="checkbox" {{($customer->attr('Children'))?'checked':''}} id="Children_(4-11)" name="Children">
                                        <label class="key" for="Children_(4-11)">

                                            <div class="right">

                                                <span>

                                                    {{ $user->short(179) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Teenagers_">
                                        <input type="checkbox" {{($customer->attr('Teenagers'))?'checked':''}} id="Teenagers_(12-18)" name="Teenagers">
                                        <label class="key" for="Teenagers_(12-18)">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(180) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Adults_">
                                        <input type="checkbox" {{($customer->attr('Adults'))?'checked':''}} id="Adults_(18+)" name="Adults">
                                        <label class="key" for="Adults_(18+)">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(181) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="expert-section">
                    <h4>
                        {{ $user->short(237) }}


                    </h4>
                    <div class="forsm">
                        <div class="ra row">
                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Curriculum">
                                        <input type="checkbox" {{($customer->attr('Curriculum'))?'checked':''}} id="Curriculum" name="Curriculum">
                                        <label class="key" for="Curriculum">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(182) }}

                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Homework">
                                        <input type="checkbox" {{($customer->attr('Homework'))?'checked':''}} id="Homework" name="Homework">
                                        <label class="key" for="Homework">

                                            <div class="right">

                                                <span>

                                                    {{ $user->short(183) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Learning_Materials">
                                        <input type="checkbox" {{($customer->attr('Learning_Materials'))?'checked':''}} id="Learning_Materials" name="Learning_Materials">
                                        <label class="key" for="Learning_Materials">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(184) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Writing_Exercises">
                                        <input type="checkbox" {{($customer->attr('Writing_Exercises'))?'checked':''}} id="Writing_Exercises" name="Writing_Exercises">
                                        <label class="key" for="Writing_Exercises">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(185) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Lesson_Plans">
                                        <input type="checkbox" {{($customer->attr('Lesson_Plans'))?'checked':''}} id="Lesson_Plans" name="Lesson_Plans">
                                        <label class="key" for="Lesson_Plans">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(186) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Proficiency_Assessment">
                                        <input type="checkbox" {{($customer->attr('Proficiency_Assessment'))?'checked':''}} id="Proficiency_Assessment" name="Proficiency_Assessment">
                                        <label class="key" for="Proficiency_Assessment">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(187) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Quizzes">
                                        <input type="checkbox" {{($customer->attr('Quizzes'))?'checked':''}} id="Quizzes" name="Quizzes">
                                        <label class="key" for="Quizzes">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(188) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Tests">
                                        <input type="checkbox" {{($customer->attr('Tests'))?'checked':''}} id="Tests" name="Tests">
                                        <label class="key" for="Tests">

                                            <div class="right">

                                                <span>

                                                    {{ $user->short(189) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Reading_Exercises">
                                        <input type="checkbox" {{($customer->attr('Reading_Exercises'))?'checked':''}} id="Reading_Exercises" name="Reading_Exercises">
                                        <label class="key" for="Reading_Exercises">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(190) }}

                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="expert-section">
                    <h4>
                        {{ $user->short(236) }}

                    </h4>
                    <div class="forsm">
                        <div class="ra row">
                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Business_English">
                                        <input type="checkbox" {{($customer->attr('Business_English'))?'checked':''}} id="Business_English" name="Business_English">
                                        <label class="key" for="Business_English">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(191) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Interview_Preparation">
                                        <input type="checkbox" {{($customer->attr('Interview_Preparation'))?'checked':''}} id="Interview_Preparation" name="Interview_Preparation">
                                        <label class="key" for="Interview_Preparation">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(192) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Reading_Comprehension">
                                        <input type="checkbox" {{($customer->attr('Reading_Comprehension'))?'checked':''}} id="Reading_Comprehension" name="Reading_Comprehension">
                                        <label class="key" for="Reading_Comprehension">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(193) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Listening_Comprehension">
                                        <input type="checkbox" {{($customer->attr('Listening_Comprehension'))?'checked':''}} id="Listening_Comprehension" name="Listening_Comprehension">
                                        <label class="key" for="Listening_Comprehension">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(194) }}
                                                    </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Speaking_Practice">
                                        <input type="checkbox" {{($customer->attr('Speaking_Practice'))?'checked':''}} id="Speaking_Practice" name="Speaking_Practice">
                                        <label class="key" for="Speaking_Practice">

                                            <div class="right">

                                                <span>
                                                    {{ $user->short(195) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Writing_Correction">
                                        <input type="checkbox" {{($customer->attr('Writing_Correction'))?'checked':''}} id="Writing_Correction" name="Writing_Correction">
                                        <label class="key" for="Writing_Correction">

                                            <div class="right">
                                                <span>
                                                    {{ $user->short(196) }}
                                                    </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Vocabulary_Development">
                                        <input type="checkbox" {{($customer->attr('Vocabulary_Development'))?'checked':''}} id="Vocabulary_Development" name="Vocabulary_Development">
                                        <label class="key" for="Vocabulary_Development">

                                            <div class="right">
                                                <span>
                                                    {{ $user->short(170) }}

                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Grammar_Development">
                                        <input type="checkbox" {{($customer->attr('Grammar_Development'))?'checked':''}} id="Grammar_Development" name="Grammar_Development">
                                        <label class="key" for="Grammar_Development">

                                            <div class="right">
                                                <span>
                                                    {{ $user->short(198) }}

                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Academic_English">
                                        <input type="checkbox" {{($customer->attr('Academic_English'))?'checked':''}} id="Academic_English" name="Academic_English">
                                        <label class="key" for="Academic_English">

                                            <div class="right">
                                                <span>
                                                    {{ $user->short(199) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Accent_Reduction">
                                        <input type="checkbox" {{($customer->attr('Accent_Reduction'))?'checked':''}} id="Accent_Reduction" name="Accent_Reduction">
                                        <label class="key" for="Accent_Reduction">

                                            <div class="right">
                                                <span>
                                                    {{ $user->short(200) }}

                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Phonetics">
                                        <input type="checkbox" {{($customer->attr('Phonetics'))?'checked':''}} id="Phonetics" name="Phonetics">
                                        <label class="key" for="Phonetics">

                                            <div class="right">
                                                <span>
                                                    {{ $user->short(201) }}
                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Colloquial_English">
                                        <input type="checkbox" {{($customer->attr('Colloquial_English'))?'checked':''}} id="Colloquial_English" name="Colloquial_English">
                                        <label class="key" for="Colloquial_English">

                                            <div class="right">
                                                <span>
                                                    {{ $user->short(202) }}

                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            {{--  <div class="col-lg-4 col-md-12">
                                <div>
                                    <div class="lable-container" style="line-height: 50px">
                                        <input type="text" hidden value="0" name="Phonetics">
                                        <input type="checkbox" {{($customer->attr('Phonetics'))?'checked':''}} id="Phonetics" name="Phonetics">
                                        <label class="key" for="Phonetics">

                                            <div class="right">
                                                <span>
                                                    {{ $user->short(203) }}

                                                </span>
                                            </div>
                                            <div class="left">
                                                <div class="toggle">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>  --}}

                        </div>
                    </div>
                </div>






                <div class="expert-section">
                    <h4>

                        {{ $user->short(234) }}
                    </h4>
                    <div class="forsm">
                        <div class="ra ">
                            <br>
                            <br>
                            <h3>
                                {{ $user->short(235) }}

                                :</h3>

                            <div class="row">


                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="TOEFL">
                                            <input type="checkbox" {{($customer->attr('TOEFL'))?'checked':''}} id="TOEFL" name="TOEFL">
                                            <label class="key" for="TOEFL">

                                                <div class="right">
                                                    <span>
                                                        {{ $user->short(204) }}

                                                    </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="IELTS">
                                            <input type="checkbox" {{($customer->attr('IELTS'))?'checked':''}} id="IELTS" name="IELTS">
                                            <label class="key" for="IELTS">

                                                <div class="right">
                                                    <span>
                                                        {{ $user->short(205) }}

                                                    </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="PTE">
                                            <input type="checkbox" {{($customer->attr('PTE'))?'checked':''}} id="PTE" name="PTE">
                                            <label class="key" for="PTE">

                                                <div class="right">
                                                    <span>
                                                        {{ $user->short(206) }}

                                                    </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="GRE">
                                            <input type="checkbox" {{($customer->attr('GRE'))?'checked':''}} id="GRE" name="GRE">
                                            <label class="key" for="GRE">

                                                <div class="right">

                                                    <span>

                                                        {{ $user->short(207) }}
                                                    </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="CELPIP">
                                            <input type="checkbox" {{($customer->attr('CELPIP'))?'checked':''}} id="CELPIP" name="CELPIP">
                                            <label class="key" for="CELPIP">

                                                <div class="right">

                                                    <span>
                                                        {{ $user->short(208) }}
                                                        </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="Duolingo">
                                            <input type="checkbox" {{($customer->attr('Duolingo'))?'checked':''}} id="Duolingo" name="Duolingo">
                                            <label class="key" for="Duolingo">

                                                <div class="right">
                                                    <span>
                                                        {{ $user->short(209) }}

                                                    </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="TOEIC">
                                            <input type="checkbox" {{($customer->attr('TOEIC'))?'checked':''}} id="TOEIC" name="TOEIC">
                                            <label class="key" for="TOEIC">

                                                <div class="right">

                                                    <span>
                                                        {{ $user->short(210) }}
                                                        </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="KET">
                                            <input type="checkbox" {{($customer->attr('KET'))?'checked':''}} id="KET" name="KET">
                                            <label class="key" for="KET">

                                                <div class="right">

                                                    <span>
                                                        {{ $user->short(211) }}
                                                        </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="PET">
                                            <input type="checkbox" {{($customer->attr('PET'))?'checked':''}} id="PET" name="PET">
                                            <label class="key" for="PET">

                                                <div class="right">

                                                    <span>
                                                        {{ $user->short(212) }}
                                                        </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="CAE">
                                            <input type="checkbox" {{($customer->attr('CAE'))?'checked':''}} id="CAE" name="CAE">
                                            <label class="key" for="CAE">

                                                <div class="right">

                                                    <span>
                                                        {{ $user->short(213) }}
                                                        </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="FCE">
                                            <input type="checkbox" {{($customer->attr('FCE'))?'checked':''}} id="FCE" name="FCE">
                                            <label class="key" for="FCE">

                                                <div class="right">

                                                    <span>
                                                        {{ $user->short(214) }}

                                                        </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="CPE">
                                            <input type="checkbox" {{($customer->attr('CPE'))?'checked':''}} id="CPE" name="CPE">
                                            <label class="key" for="CPE">

                                                <div class="right">

                                                    <span>
                                                        {{ $user->short(215) }}
                                                        </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="BEC">
                                            <input type="checkbox" {{($customer->attr('BEC'))?'checked':''}} id="BEC" name="BEC">
                                            <label class="key" for="BEC">

                                                <div class="right">
                                                    <span>
                                                        {{ $user->short(216) }}

                                                    </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="TOEFLPhD">
                                            <input type="checkbox" {{($customer->attr('TOEFLPhD'))?'checked':''}} id="TOEFLPhD" name="TOEFLPhD">

                                            {{-- <input type="checkbox" {{r($customer->att(''checkedتافل_دکت)?:'ری')}} id="تافل_دکتری" name="تافل_دکتری">--}}
                                            <label class="key" for="TOEFLPhD">

                                                <div class="right">

                                                    <span>
                                                        {{ $user->short(217) }}
                                                        </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <br>
                            </div>
                            <div class="clr"></div>
                            <h3>
                                {{ $user->short(234) }}
                                :</h3>

                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="TCF">
                                            <input type="checkbox" {{($customer->attr('TCF'))?'checked':''}} id="TCF" name="TCF">
                                            <label class="key" for="TCF">

                                                <div class="right">

                                                    <span>

                                                        {{ $user->short(218) }}
                                                    </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="TEF">
                                            <input type="checkbox" {{($customer->attr('TEF'))?'checked':''}} id="TEF" name="TEF">
                                            <label class="key" for="TEF">

                                                <div class="right">

                                                    <span>
                                                        {{ $user->short(219) }}
                                                        </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="DELF">
                                            <input type="checkbox" {{($customer->attr('DELF'))?'checked':''}} id="DELF" name="DELF">
                                            <label class="key" for="DELF">

                                                <div class="right">
                                                    <span>
                                                        {{ $user->short(220) }}


                                                    </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="DALF">
                                            <input type="checkbox" {{($customer->attr('DALF'))?'checked':''}} id="DALF" name="DALF">
                                            <label class="key" for="DALF">

                                                <div class="right">

                                                    <span>

                                                        {{ $user->short(221) }}
                                                    </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <br>
                            </div>
                            <div class="clr"></div>

                            <h3>
                                {{ $user->short(232) }}
                                :</h3>

                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="Goethe">
                                            <input type="checkbox" {{($customer->attr('Goethe'))?'checked':''}} id="Goethe" name="Goethe">
                                            <label class="key" for="Goethe">

                                                <div class="right">

                                                    <span>
                                                        {{ $user->short(222) }}
                                                    </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="Telc">
                                            <input type="checkbox" {{($customer->attr('Telc'))?'checked':''}} id="Telc" name="Telc">
                                            <label class="key" for="Telc">

                                                <div class="right">
                                                    <span>
                                                        {{ $user->short(223) }}
                                                    </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="Test_Daf">
                                            <input type="checkbox" {{($customer->attr('Test_Daf'))?'checked':''}} id="Test_Daf" name="Test_Daf">
                                            <label class="key" for="Test_Daf">

                                                <div class="right">

                                                    <span>
                                                         {{ $user->short(224) }}


                                                    </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="OSD">
                                            <input type="checkbox" {{($customer->attr('OSD'))?'checked':''}} id="OSD" name="OSD">
                                            <label class="key" for="OSD">

                                                <div class="right">
                                                    <span>
                                                        {{ $user->short(225) }}


                                                    </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <br>
                            </div>
                            <div class="clr"></div>

                            <h3>


                                {{ $user->short(231) }}
                                :</h3>

                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="TOMER">
                                            <input type="checkbox" {{($customer->attr('TOMER'))?'checked':''}} id="TOMER" name="TOMER">
                                            <label class="key" for="TOMER">

                                                <div class="right">

                                                    <span>
                                                        {{ $user->short(226) }}
                                                        </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="TYS">
                                            <input type="checkbox" {{($customer->attr('TYS'))?'checked':''}} id="TYS" name="TYS">
                                            <label class="key" for="TYS">

                                                <div class="right">

                                                    <span>
                                                        {{ $user->short(227) }}
                                                        </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <br>
                            </div>
                            <div class="clr"></div>

                            <h3>
                                {{ $user->short(230) }}
                                :</h3>

                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="DELE">
                                            <input type="checkbox" {{($customer->attr('DELE'))?'checked':''}} id="DELE" name="DELE">
                                            <label class="key" for="DELE">

                                                <div class="right">

                                                    <span>
                                                        {{ $user->short(228) }}

                                                    </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="lable-container" style="line-height: 50px">
                                            <input type="text" hidden value="0" name="SIELE">
                                            <input type="checkbox" {{($customer->attr('SIELE'))?'checked':''}} id="SIELE" name="SIELE">
                                            <label class="key" for="SIELE">

                                                <div class="right">

                                                    <span>
                                                        {{ $user->short(229) }}
                                                        </span>
                                                </div>
                                                <div class="left">
                                                    <div class="toggle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <br>
                            </div>



                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <div class="button-container reight">
                                <input type="submit" value="           {{ $user->short(23) }}" class="bt fln">

                            </div>

                        </div>
                    </div>
                </div>
                <div class="clr"></div>
            </form>
        </div>

    </div>
</div>

</div>
@endsection
