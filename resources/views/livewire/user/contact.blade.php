@extends('livewire.user.index')
@section('content')
    <!-- Section: Contact Us -->
    <section id="ContactUs">
        <!-- Section 1: Title -->
        <div class="section_1">
            <div class="titleContainer w-100 d-flex justify-content-center align-items-center">
                <img class="imgTitle w-100" src="https://statics.vinwonders.com/bai-bien-dep-nhat-viet-nam-01_1635343595.jpg">
                <div class="title">Contact Us</div>
            </div>
        </div>

        <!-- Section 2: Contact Details -->
        <div class="section_2 mt-xl-5">
            <div class="row">
                <!-- Location Details -->
                <div class="col-12 col-xl-4 mt-5">
                    <div class="DetailsContainer">
                        <div class="titleDetailContainer d-flex">
                            <div class="locationIconContainer wrapper-container">
                                <div class="wrapper-item">
                                    <i class="bi bi-geo-alt-fill locationIcon"></i>
                                </div>
                            </div>
                            <div class="titleDetail">
                                Location
                            </div>
                        </div>
                        <div class="quotes m-3">Our Agency</div>
                        <div class="quotesDetail m-3">285 Đội Cấn,Ba Đình,Hà Nội</div>
                        <div class="consulting m-3">Operator</div>
                        <div class="consultingDetail m-3">285 Đội Cấn,Ba Đình,Hà Nội</div>
                    </div>
                </div>

                <!-- Phone Details -->
                <div class="col-12 col-xl-4 mt-5">
                    <div class="DetailsContainer">
                        <div class="titleDetailContainer d-flex">
                            <div class="phoneIconContainer wrapper-container">
                                <div class="wrapper-item">
                                    <i class="bi bi-telephone-fill phoneIcon"></i>
                                </div>
                            </div>
                            <div class="titleDetail">
                                Give us a call
                            </div>
                        </div>
                        <div class="quotes m-3">Mobile Number</div>
                        <div class="quotesDetail m-3">Paul Davis: +1 629 592 593</div>
                        <div class="consulting m-3">Office Number</div>
                        <div class="consultingDetail m-3">Administration: <span>+1 184 016 482</span></div>
                        <div class="consultingDetail m-3">Technical Office <span>+1 963 935 836</span></div>
                    </div>
                </div>

                <!-- Email Details -->
                <div class="col-12 col-xl-4 mt-5">
                    <div class="DetailsContainer">
                        <div class="titleDetailContainer d-flex">
                            <div class="emailIconContainer wrapper-container">
                                <div class="wrapper-item">
                                    <i class="bi bi-envelope-fill emailIcon"></i>
                                </div>
                            </div>
                            <div class="titleDetail">
                                Write FeedBack For Us
                            </div>
                        </div>
                        <div class="quotes m-3">quotes</div>
                        <div class="quotesDetail m-3">Write to this email for a detailed quotation
                            <span>quote@travel.com</span> and information.</div>
                        <div class="consulting m-3">Consulting</div>
                        <div class="consultingDetail m-3">Our free consultation service can be requested here
                            <span>info@travel.com</span> every day.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: Contact Form -->
        <div class="section_3">
            <div class="formContactUsContainer container-xl">
                <div class="subTitleForm text-center pt-5">Plan your Next Trip</div>
                <div class="titleForm text-center mt-4">Get in Touch</div>
                <div class="note text-center mt-3">
                    We value your feedback and would love to hear your thoughts and suggestions. Please take a moment to
                    provide your feedback so we can continually improve our services and offer you the best travel
                    experiences.
                </div>
                <div class="formContactUs pt-5">
                    <!-- Form -->
                    <form wire:submit.prevent="feedback">
                        <div class="form-group mt-4 i1">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Type your name" wire:model="name">
                        </div>
                        <div class="form-group mt-4 i2">
                            <input type="email" class="form-control" id="exampleFormControlInput2"
                                placeholder="Insert your email" wire:model="email">
                        </div>
                        <div class="form-group mt-4 i3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your Message" rows="3"
                                wire:model="content"></textarea>
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btnContact text-center form-control">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Section 4: Google Map -->
        <div class="section_4">
            <iframe class="mapGoogle w-100 h-100"
                src="https://maps.google.com/maps?ll=21.037811,105.809581&q=285 Đội Cấn&t=&z=14&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </section>
@endsection
