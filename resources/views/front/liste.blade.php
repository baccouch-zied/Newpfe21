<section class="sec-block pb-0">
            <div class="container">
                <div class="section-title text-center">
                    <span>Featured </span>
                    <h2 class="text-capitalize">restaurants & Cafes</h2>
                    <p class="mx-auto">The best restaurants and cafes that have been working with us for a long time.</p>
                </div><!--sec-title end-->
                <div class="featured-sec">
                <div class="featured-sec">
                    <div class="row mb-70">
                    @foreach($UserRestaurants as $UserRestaurant)
                        <div class="col-md-6">
                            <div class="featured-item">
                                <img src="{{ URL::to('/') }}/images/{{ $UserRestaurant->image }}" alt="" class="w-100">
                                <ul class="ftz">
                                    <li>
                                        <span>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.8333 3.33337H4.16667C3.24619 3.33337 2.5 4.07957 2.5 5.00004V16.6667C2.5 17.5872 3.24619 18.3334 4.16667 18.3334H15.8333C16.7538 18.3334 17.5 17.5872 17.5 16.6667V5.00004C17.5 4.07957 16.7538 3.33337 15.8333 3.33337Z" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M2.5 8.33337H17.5" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.3333 1.66663V4.99996" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.66669 1.66663V4.99996" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        {{$UserRestaurant->jour}}
                                    </li>
                                    <li>
                                        <span>
                                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 18.3333C14.6024 18.3333 18.3334 14.6023 18.3334 9.99996C18.3334 5.39759 14.6024 1.66663 10 1.66663C5.39765 1.66663 1.66669 5.39759 1.66669 9.99996C1.66669 14.6023 5.39765 18.3333 10 18.3333Z" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10 5V10L13.3333 11.6667" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M2.5 8.33337H17.5" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.3333 1.66663V4.99996" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.66669 1.66663V4.99996" stroke="#D8AB37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                       Ouverture: {{$UserRestaurant->ouverture}}<br/>
                                       Fermeture: {{$UserRestaurant->fermeture}}

                                    </li>
                                </ul>
                                <div class="feat-optz">
                                    <span class="text-capitalize">restaurant</span>
                                    <h2 class="text-capitalize"><a href="/restaurant-details/{{$UserRestaurant->id}}" title="">{{$UserRestaurant->name}}</a></h2>
                                </div>
                            </div><!--featured-item end-->
                        </div> 
                    @endforeach                                                   
                    </div>
            
                    <div class="row text-center">
                        <div class="col-12">
                            <a href="/restaurants" title="" class="btn-default">View all list <span></span></a>
                        </div>
                    </div>
                </div><!--featured-sec end-->
            </div>
</section>