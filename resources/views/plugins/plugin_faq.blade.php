@extends('layouts.master')

@section('title', 'Plugin FAQ - Core Plugins')

@section('content')
<main id="js-page-content" role="main" class="page-content">

    @component('common-components.breadcrumb')
    @slot('item1') Core Plugins @endslot
    @slot('item2') Plugin FAQ @endslot
    @endcomponent
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-shield-alt'></i> Plugins FAQ
            <small>
                The difference types of plugins and its appliaction importance within the template
            </small>
        </h1>
    </div>
    <div class="row">
        <div class="col">
            <div class="card mb-g">
                <div class="card-body">
                    <h2 class="color-danger-400">
                        Jquery
                        <sup>
                            <span class="badge bg-fusion-500 fs-nano">DEPENDENCY</span>
                        </sup>
                    </h2>
                    jQuery is a lightweight, "write less, do more", JavaScript library. The purpose of jQuery is to make it much easier to use JavaScript on your website. jQuery takes a lot of common tasks that require many lines of JavaScript code to accomplish, and wraps them into methods that you can call with a single line of code.
                </div>
            </div>
            <div class="card mb-g">
                <div class="card-body">
                    <h2 class="color-danger-400">
                        jquery-ui-cust.js
                        <sup>
                            <span class="badge bg-fusion-500 fs-nano">DEPENDENCY</span>
                        </sup>
                    </h2>
                    jQuery UI is a widget and interaction library built on top of the jQuery JavaScript Library that you can use to build highly interactive web applications.
                </div>
            </div>
            <div class="card mb-g">
                <div class="card-body">
                    <h2 class="color-danger-400">
                        popper.js
                        <sup>
                            <span class="badge bg-fusion-500 fs-nano">DEPENDENCY</span>
                        </sup>
                    </h2>
                    Dependency for Bootstrap.js to relay and position popovers and tooltips.
                </div>
            </div>
            <div class="card mb-g">
                <div class="card-body">
                    <h2 class="color-danger-400">
                        bootstrap.js
                        <sup>
                            <span class="badge bg-fusion-500 fs-nano">DEPENDENCY</span>
                        </sup>
                    </h2>
                    Dependency for Bootstrap.js to relay and position popovers and tooltips.
                </div>
            </div>
            <div class="card mb-g">
                <div class="card-body">
                    <h2 class="color-danger-400">
                        app.navigation.js
                        <sup>
                            <span class="badge badge-danger fs-nano">CORE</span>
                        </sup>
                    </h2>
                    Is a simple jQuery plugin for creating accordion like menus for SmartAdmin Laravel.
                </div>
            </div>
            <div class="card mb-g">
                <div class="card-body">
                    <h2 class="color-danger-400">
                        ba-throttle-debounce.js
                        <sup>
                            <span class="badge badge-danger fs-nano">CORE</span>
                        </sup>
                    </h2>
                    Using jQuery throttle / debounce, you can pass a delay and function to $.debounce to get a new function, that when called repetitively, executes the original function just once per “bunch” of calls, effectively coalescing multiple sequential calls into a single execution at either the beginning or end.
                </div>
            </div>
            <div class="card mb-g">
                <div class="card-body">
                    <h2 class="color-danger-400">
                        jquery-snippets.js
                        <sup>
                            <span class="badge badge-danger fs-nano">CORE</span>
                        </sup>
                    </h2>
                    A number of useful snippets library that is used repeatedly throught the app.
                </div>
            </div>
            <div class="card mb-g">
                <div class="card-body">
                    <h2 class="color-danger-400">
                        app.core.js
                        <sup>
                            <span class="badge badge-danger fs-nano">CORE</span>
                        </sup>
                    </h2>
                    The entire app core, has a lot of useful functions, including saving/loading, mapping objects, data management, DOM cycles, page hight calculations, and many more.
                </div>
            </div>
            <div class="card mb-g">
                <div class="card-body">
                    <h2 class="color-danger-400">
                        bootbox
                        <sup>
                            <span class="badge badge-success fs-nano">EXTENSION</span>
                        </sup>
                    </h2>
                    A small JavaScript library which allows you to create programmatic dialog boxes using Bootstrap modals, without having to worry about creating, managing, or removing any of the required DOM elements or JavaScript event handlers.
                </div>
            </div>
            <div class="card mb-g">
                <div class="card-body">
                    <h2 class="color-danger-400">
                        waves.js
                        <sup>
                            <span class="badge badge-success fs-nano">EXTENSION</span>
                        </sup>
                    </h2>
                    A tiny foundation for creating reactive components with interpolation, data-binding, and plugins.
                </div>
            </div>
            <div class="card mb-g">
                <div class="card-body">
                    <h2 class="color-danger-400">
                        SlimScroll
                        <sup>
                            <span class="badge badge-success fs-nano">EXTENSION</span>
                        </sup>
                    </h2>
                    slimScroll is a small jQuery plugin that transforms any div into a scrollable area. slimScroll doesn't occupy any visual space as it only appears on a user initiated mouse-over.
                </div>
            </div>
            <div class="card mb-g">
                <div class="card-body">
                    <h2 class="color-danger-400">
                        SmartPanels
                        <sup>
                            <span class="badge badge-success fs-nano">EXTENSION</span>
                        </sup>
                    </h2>
                    Transforms your panel component into draggable, localstorage based component. Remembering position, collapse state, and color changes.
                </div>
            </div>
            <div class="card mb-g">
                <div class="card-body">
                    <h2 class="color-danger-400">
                        Pace.js
                        <sup>
                            <span class="badge badge-warning fs-nano">RECOMMENDED</span>
                        </sup>
                    </h2>
                    An automatic web page progress bar. Created using standalone javascript library.
                </div>
            </div>
        </div>
    </div>
</main>
@stop
