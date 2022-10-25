@extends('layouts.master')

@section('title', 'Flavors &amp; Editions - Documentation')

@section('content')
<main id="js-page-content" role="main" class="page-content">

    @component('common-components.breadcrumb')
        @slot('item1') Documentation @endslot
        @slot('item2') Flavors &amp; Editions @endslot
    @endcomponent
    <div class="subheader"></div>
    <h1 class="fw-500 mb-5 mt-5 text-center">
        SmartAdmin Laravel comes with multiple Flavors & Editions
        <small>All flavors are sold separately. Support is included with the purchase of the full <br> versions. You'll find the links for the all the flavors below.</small>
    </h1>
    <div class="container">
        <div class="row">
            <!-- HTML Flavor -->
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body p-4 rounded position-relative">
                        <span class="badge badge-primary fw-300 ml-auto position-absolute pos-top pos-right mr-4 mt-4 hidden-sm-down">FULL PROJECT + DOCUMENTATION</span>
                        <div class="d-flex align-items-center mb-g">
                            <img src="{{ URL::asset('/img/demo/laravel.png') }}" class="mr-3">
                            <h1 class="fw-300 m-0 l-h-n">
                                <span class="text-contrast">
                                    Laravel
                                </span>
                                <small class="fw-300 m-0 l-h-n">
                                    Expressive, elegant syntax, ease of usage!
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>Laravel is a free, open-source PHP web framework intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony</p>
                                <ul class="mt-xs-3 list-spaced">
                                    <li>
                                        Easy to pickup and understand if you are comfortable with PHP.
                                    </li>
                                    <li>
                                        Build with Laravel 8 with few reusable componets.
                                    </li>
                                    <li>
                                        Added starterkit which give bootster to start your new project with SmartAdmin.
                                    </li>
                                    <li>
                                        Basic authentication and DB migration.
                                    </li>
                                    <li>
                                        Over 256 layout possibilities with auto save feature
                                    </li>
                                    <li>
                                        Lifetime free updates.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="alert alert-info fs-lg">
                    <div class="d-flex flex-start w-100">
                        <div class="mr-2 hidden-sm-down">
                            <span class="icon-stack icon-stack-lg">
                                <i class="base-14 icon-stack-3x color-primary-400"></i>
                                <i class="base-14 icon-stack-2x color-primary-600 opacity-70"></i>
                                <i class="fal fa-cog icon-stack-1x text-white opacity-90"></i>
                            </span>
                        </div>
                        <div class="d-flex flex-fill">
                            <div class="flex-fill">
                                <span class="h5">Pro tip!</span>
                                Consider adding the HTML Flavor as part of your purchase when purchasing other Flavors of this Theme. It will allow for much richer and deeper customization by enabling you to modify <strong>SCSS</strong>, <strong>JS</strong> and <strong>HBS</strong> files, which are not included with the flavors below.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 mb-4">
                        <div class="card h-100 rounded overflow-hidden">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-g">
                                    <img src="{{ URL::asset('/img/demo/html5.png')}}" class="mr-3">
                                    <h1 class="fw-300 m-0 l-h-n">
                                        <span class="text-contrast">Pure HTML 5</span>
                                        <small class="fw-300 m-0 l-h-n">
                                            Smart Design, Smart Build, Smart Execution!
                                        </small>
                                    </h1>
                                </div>
                                <div class="col">
                                    Purely designed for your comfort. Comes with video tutorials, well supported documentation, examples and email support (for your basic needs) and free updates for the life of the theme**
                                    <ul class="mt-3 list-spaced">
                                        <li>
                                            Uses npm package manager to neatly wrap and manage third party plugins.
                                        </li>
                                        <li>
                                            Easily build your project with custom colors and components
                                        </li>
                                        <li>
                                            Over 256 layout possibilities with auto save feature
                                        </li>
                                    </ul>
                                    <br>
                                    <a href="https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0?ref=themesbrand" class="btn btn-sm btn-outline-primary waves-effect waves-themed" target="_blank">Full Project – Sold Separately</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mb-4">
                        <!-- .NET Flavor -->
                        <div class="card h-100 rounded overflow-hidden position-relative">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-g">
                                    <img src="{{ URL::asset('/img/demo/mvc.png') }}" class="mr-3">
                                    <h1 class="fw-300 m-0 l-h-n">
                                        <span class="text-contrast">.Net Core 3.1</span>
                                        <small class="fw-300 m-0 l-h-n">
                                            Multi-platform based scalable solution
                                        </small>
                                    </h1>
                                </div>
                                <div class="col">
                                    ASP.NET MVC is used to build Web applications in .NET Framework. .NET Core is the new open-source and cross-platform framework to build applications for all operating systems including Windows, Mac, and Linux.
                                    <ul class="mt-3 list-spaced">
                                        <li>
                                            Fully supports ASP.NET Core Identity and the .NET Core ecosystem.
                                        </li>
                                        <li>
                                            Uses the latest MVC features, such as Partials, TagHelpers and RazorPages to provide quick, easy and re-usable building blocks.
                                        </li>
                                        <li>
                                            Blazing performance and extensibility, no restrictions or compromises, the limit is your own imagination!
                                        </li>
                                    </ul>
                                    <a href="https://wrapbootstrap.com/theme/smartadmin-asp.net-core-responsive-webapp-WB073L89G?ref=themesbrand" class="btn btn-sm btn-outline-primary" target="_blank">Full Project – Sold Separately</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mb-4">
                        <!-- PHP Flavor -->
                        <div class="card h-100 rounded overflow-hidden">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-g">
                                    <img src="{{ URL::asset('/img/demo/php.png') }}" class="mr-3">
                                    <h1 class="fw-300 m-0 l-h-n">
                                        <span class="text-contrast">Php 7</span>
                                        <small class="fw-300 m-0 l-h-n">
                                            Easy to understand platform with a large community set
                                        </small>
                                    </h1>
                                </div>
                                <div class="col">
                                    PHP is a free language with no licensing fees, the cost of using it is minimal. Interactable with many different database languages including MySQL. Can run on Windows, Linux and Unix servers, making it very flexible to work with.
                                    <ul class="mt-3 list-spaced">
                                        <li>
                                            Clean and well documented code. Supports PHP 7.1 and later.
                                        </li>
                                        <li>
                                            Basic and Advanced API Controls. Uses Composer package manager.
                                        </li>
                                        <li>
                                            Requires no framework, use your favorite text editor to create your dream application, that's fast, reliable and flexible for almost any platform.
                                        </li>
                                    </ul>
                                    <br>
                                    <a href="https://wrapbootstrap.com/theme/smartadmin-php-7-responsive-webapp-WB05M9585?ref=themesbrand" class="btn btn-sm btn-outline-primary" target="_blank">Full Project – Sold Separately</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mb-4">
                        <!-- RAILS Flavor -->
                        <div class="card h-100 rounded overflow-hidden position-relative">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-g">
                                    <img src="{{ URL::asset('/img/demo/rails.png') }}" class="mr-3">
                                    <h1 class="fw-300 m-0 l-h-n">
                                        <span class="text-contrast">
                                            Rails
                                        </span>
                                        <small class="fw-300 m-0 l-h-n">
                                            Flexible, less opinionated solution
                                        </small>
                                    </h1>
                                </div>
                                <div class="col">
                                    Rails, is a server-side web application framework written in Ruby under the MIT License. Rails is a model–view–controller framework, providing default structures for a database, a web service, and web pages
                                    <ul class="mt-3 list-spaced">
                                        <li>
                                            Ready-made plugins and modules, which allow developers not to waste time on writing boilerplate code
                                        </li>
                                        <li>
                                            It’s consistent. Developers follow standardized file storage and programming conventions that keep a project structured and readable.
                                        </li>
                                        <li>
                                            Packed with builtin security features
                                        </li>
                                    </ul>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary disabled">Full Project – Sold Separately (not yet available)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 text-center text-muted h4 font-italic">
            <i class="fal fa-check text-success"></i> 3 months of basic support are included with the purchase of any SmartAdmin flavors**
        </div>
    </div>
</main>
@stop
