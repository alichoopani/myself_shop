{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="About us" icon="las la-info" :link="backpack_url('about-us')" />
<x-backpack::menu-item title="Addresses" icon="las la-address-card" :link="backpack_url('address')" />
<x-backpack::menu-item title="Bags" icon="las la-suitcase" :link="backpack_url('bag')" />
<x-backpack::menu-item title="Car accessories" icon="las la-car" :link="backpack_url('car-accessory')" />
<x-backpack::menu-item title="Cities" icon="las la-city" :link="backpack_url('city')" />
<x-backpack::menu-item title="Comments" icon="las la-comments" :link="backpack_url('comment')" />
<x-backpack::menu-item title="Contact us" icon="las la-box-open" :link="backpack_url('contact-us')" />
<x-backpack::menu-item title="Faqs" icon="las la-address-book" :link="backpack_url('faqs')" />
<x-backpack::menu-item title="Favorites" icon="las la-heart" :link="backpack_url('favorite')" />
<x-backpack::menu-item title="Hats" icon="las la-hat-cowboy" :link="backpack_url('hat')" />
<x-backpack::menu-item title="Images" icon="las la-image" :link="backpack_url('image')" />
<x-backpack::menu-item title="Likes" icon="las la-thumbs-up" :link="backpack_url('like')" />
<x-backpack::menu-item title="Phone covers" icon="las la-mobile" :link="backpack_url('phone-cover')" />
<x-backpack::menu-item title="Provinces" icon="las la-globe" :link="backpack_url('province')" />
<x-backpack::menu-item title="T shirts" icon="las la-tshirt" :link="backpack_url('t-shirt')" />
<x-backpack::menu-item title="Tuning parts" icon="las la-car-crash" :link="backpack_url('tuning-part')" />
<x-backpack::menu-item title="Tyres" icon="las la-cog" :link="backpack_url('tyre')" />
<x-backpack::menu-item title="Users" icon="las la-user" :link="backpack_url('user')" />
<x-backpack::menu-item title="Wheels" icon="las la-dharmachakra" :link="backpack_url('wheel')" />


