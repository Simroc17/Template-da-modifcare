@extends('layouts.master')

@section('title', 'Base - Font Icons')

@section('content')
<main id="js-page-content" role="main" class="page-content">

    @component('common-components.breadcrumb')
    @slot('item1') Font Icons @endslot
    @slot('item2') NextGen Icons @endslot
    @slot('item3') Base @endslot
    @endcomponent
    <div class="subheader">
        <h1 class="subheader-title">
            NextGen Icons: <span class='fw-300'>Base</span>
            <small>
                NextGen Icons description
            </small>
        </h1>
    </div>
    <div class="alert alert-primary">
        <div class="d-flex flex-start w-100">
            <div class="mr-2">
                <span class="icon-stack icon-stack-lg">
                    <i class="base-2 icon-stack-3x color-primary-400"></i>
                    <i class="base-3 icon-stack-2x color-primary-600 opacity-70"></i>
                    <i class="fal fa-lightbulb icon-stack-1x text-white opacity-90"></i>
                </span>
            </div>
            <div class="d-flex flex-fill">
                <div class="flex-fill">
                    <span class="h5">What are Base Icons?</span>
                    <br>
                    Base Icons are primarily used as a 'base' layer for <strong>Stack Icons</strong>, but may also be used as regular general icons. To see base icons in action see the <a href="#" target="_blank">Stack Icons Showcase</a> page.
                </div>
            </div>
        </div>
    </div>
    <div class="card pt-3 pr-3 pb-0 pl-3">
        <div id="icon-list" class="row"></div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="iconModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 shadow-3">
                <div class="modal-header">
                    <h5 class="modal-title" id="iconModalLabel">
                        <strong></strong>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body bg-faded">
                    <div class="row">
                        <div class="col-sm-12 col-lg-auto col-xl-auto">
                            <div class="mx-auto mb-3 mb-sm-3 mb-md-3 mb-lg-0 mb-xl-0 d-none d-sm-block d-md-block d-lg-block d-xl-block rounded shadow-1" style="font-size: 200px; width: 301px; height: 305px; background: url(/img/backgrounds/bg-5.png) #fff 0px 28px; border: 1px solid #ededec; border-left:0; border-right:0;">
                                <div class="opacity-50 w-100 h-100 d-flex align-items-center justify-content-center text-primary">
                                    <i class="fal fa-address-book"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 d-flex flex-column align-items-stretch col-sm-12 col-lg-auto col-xl-auto">
                            <h5 class="frame-heading m-0 p-0">
                                Showcasting various icon sizes <code>fa-2x</code> to <code>fa-9x</code>
                            </h5>
                            <div class="mb-g">
                                <div class="d-flex flex-row flex-wrap align-items-center justify-content-between flex-row-reverse mt-2">
                                    <span class="fa-9x d-inline l-h-n">
                                        <i class="fal fa-address-book"></i>
                                    </span>
                                    <span class="fa-7x d-inline l-h-n">
                                        <i class="fal fa-address-book"></i>
                                    </span>
                                    <span class="fa-5x d-inline l-h-n">
                                        <i class="fal fa-address-book"></i>
                                    </span>
                                    <span class="fa-3x d-inline l-h-n">
                                        <i class="fal fa-address-book"></i>
                                    </span>
                                    <span class="fa-2x d-inline l-h-n">
                                        <i class="fal fa-address-book"></i>
                                    </span>
                                </div>
                            </div>
                            <h5 class="frame-heading mt-0 mb-2 p-0">
                                Icons with various backgrounds
                            </h5>
                            <div class="row">
                                <div class="col">
                                    <div class="rounded p-1 shadow-1 bg-white">
                                        <div class="bg-primary-50 d-flex flex-column align-items-center justify-content-center p-3 fa-4x">
                                            <i class="fal fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="rounded p-1 shadow-1 bg-white">
                                        <div class="bg-primary-400 d-flex flex-column align-items-center justify-content-center p-3 fa-4x">
                                            <i class="fal fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="rounded p-1 shadow-1 bg-white">
                                        <div class="bg-primary-700 d-flex flex-column align-items-center justify-content-center p-3 fa-4x">
                                            <i class="fal fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="text" id="js-icon-class" style="opacity:0;" class="position-absolute pos-top pos-right">
                </div>
                <div class="modal-footer">
                    <code class="p-0 d-inline-block bg-white flex-1">
                        &lt;i class="<span class="color-success-500 fw-500 js-icon-class">fal fa-address-book</span>"&gt;&lt;/i&gt;
                    </code>
                    <button type="button" class="btn btn-success js-icon-copy" data-dismiss="modal">Copy Icon</button>
                </div>
            </div>
        </div>
    </div>
</main>
@stop

@section('footerScript')
<script>
    // webfont prefix
    var prefix = ""; //fal fas far fab etc
    var prefix_extend = ""

    // file that will be filtered
    var filename = "/media/data/ng-icon-base.json";

    $.getJSON(filename).then(function(data) {

            // ...worked
            var formatedDOMElms = [];

            //
            jQuery.each(data, function(index, item) {
                formatedDOMElms.push('<div class="col-4 col-sm-4 col-lg-3 col-xl-2 d-flex justify-content-center align-items-center mb-g">\
                                            <a href="#" class="rounded bg-white p-0 m-0 d-flex flex-column w-100 h-100 shadow-hover-2 js-showcase-icon" data-toggle="modal" data-target="#iconModal" data-filter-tags=' + item + '>\
                                                <div class="rounded-top color-fusion-300 w-100 bg-primary-300">\
                                                    <div class="rounded-top d-flex align-items-center justify-content-center w-100 pt-3 pb-3 pr-2 pl-2 fa-6x hover-bg">\
                                                        <i class="' + item + '"></i>\
                                                    </div>\
                                                </div>\
                                                <div class="rounded-bottom p-1 w-100 d-flex justify-content-center align-items-center text-center">\
                                                    <span class="d-block text-truncate text-muted">' + item + '</span>\
                                                </div>\
                                            </a>\
                                        </div>');

            });

            // append to HTML dom
            $('#icon-list').append(formatedDOMElms.reverse().join(" "));

            // initialize filter
            //initApp.listFilter($('#icon-list'), $('#filter-icon'));

            // client event for each icon
            $('.js-showcase-icon').click(function() {

                var iconClass = $(this).find('i').attr('class');

                $('#iconModal .modal-body i').removeClass().addClass(iconClass);
                $('#iconModal .modal-body .js-icon-class').empty().text(iconClass);
                $('#js-icon-class').val('<i class="' + iconClass + '"></i>')
                $('#iconModalLabel strong').empty().text(iconClass)

            });

            // copy icon button
            $('.js-icon-copy').click(function() {
                $('#js-icon-class').select();
                document.execCommand('copy');
            });

            // add number of icons
            //$('#filter-icon').attr('placeholder', "Search " + data.length + " icons for")


        })
        .fail(function() {
            // ...didn't work, handle it
            console.log("failed")
        });
</script>
@stop