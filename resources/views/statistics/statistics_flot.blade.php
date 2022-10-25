@extends('layouts.master')

@section('title', 'Flot - Statistics')

@section('content')
<main id="js-page-content" role="main" class="page-content">

    @component('common-components.breadcrumb')
    @slot('item1') Statistics @endslot
    @slot('item2') Flot @endslot
    @endcomponent
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-chart-pie'></i> Flot <sup class='badge badge-primary fw-500'>ADDON</sup>
            <small>
                Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features
            </small>
        </h1>
    </div>
    <div class="alert alert-primary">
        <div class="d-flex flex-start w-100">
            <div class="mr-2 hidden-md-down">
                <span class="icon-stack icon-stack-lg">
                    <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                    <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                    <i class="ni ni-blog-read icon-stack-1x opacity-100 color-white"></i>
                </span>
            </div>
            <div class="d-flex flex-fill">
                <div class="flex-fill">
                    <span class="h5">Ease of use</span>
                    <p>
                        Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features. Additional examples are bundled with Flot. Flot is easy to use, just a few lines of code, you can make a simple line chart, it also provides a comprehensive API documentation where you can find examples, usage and methods. The most important part, Flot continues to release new versions, each new version comes with new features.
                    </p>
                    <p class="m-0">
                        Find more examples and guidelines on Flot's <a href="https://www.flotcharts.org/flot/examples/" target="_blank">official documentation</a> and detailed tutorials on <a href="http://www.jqueryflottutorial.com/how-to-make-jquery-flot-line-chart.html" target="_blank">Flot Tutorials</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Kitchen <span class="fw-300"><i>Sink (example)</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            We use a combination of various plots to create a more intricate diagram. More basic examples of plot can be found below
                        </div>
                        <div id="js-checkbox-toggles" class="d-flex mb-3">
                            <div class="custom-control custom-switch mr-2">
                                <input type="checkbox" class="custom-control-input" name="gra-0" id="gra-0" checked="">
                                <label class="custom-control-label" for="gra-0">Target Profit</label>
                            </div>
                            <div class="custom-control custom-switch mr-2">
                                <input type="checkbox" class="custom-control-input" name="gra-1" id="gra-1" checked="">
                                <label class="custom-control-label" for="gra-1">Actual Profit</label>
                            </div>
                            <div class="custom-control custom-switch mr-2">
                                <input type="checkbox" class="custom-control-input" name="gra-2" id="gra-2" checked="">
                                <label class="custom-control-label" for="gra-2">User Signups</label>
                            </div>
                        </div>
                        <div id="flot-toggles" class="w-100 mt-4" style="height: 300px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div id="panel-2" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Flot <span class="fw-300"><i>Bar</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            Single barchart to display timeline differences. It is currently displaying only one group of data
                        </div>
                        <div id="flot-bar" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>
            <div id="panel-3" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Flot <span class="fw-300"><i>Line</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            Flot lines are the most easest to make and can display lots of data very nicely!
                        </div>
                        <div id="flot-line" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>
            <div id="panel-4" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Flot <span class="fw-300"><i>Line (tooltip)</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            Adding tooltips is easy, you will need to include the plugin <code>jquery.flot.tooltip.js</code>
                        </div>
                        <div id="flot-line-alt" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>
            <div id="panel-5" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Flot <span class="fw-300"><i>Area</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            Area chart overlaps one over the other, making it easier to see the proportion of data
                        </div>
                        <div id="flot-area" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>
            <div id="panel-6" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Flot <span class="fw-300"><i>Interval Curve</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            Generates random data to populate and redraw recursively, we use the <code>jquery.flot.spline.js</code> plugin to make the lines curvey
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-secondary btn-sm dropdown-toggle mb-g" type="button" data-toggle="dropdown" aria-expanded="false"> Change interval </button>
                            <div class="dropdown-menu dropdown-lg p-0">
                                <div class="px-4 py-2 d-flex align-items-center justify-content-center">
                                    <input type="range" class="custom-range js-set-interval" id="js-flot-realtime-curved-speed" min="-1000" max="-100" step="100" value="-1000">
                                </div>
                            </div>
                        </div>
                        <div id="flot-realtime-curved" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div id="panel-7" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Flot <span class="fw-300"><i>Multiple Bars</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            Here we compare relations of different data groups, the greater the length of bar, bigger the value
                        </div>
                        <div id="flot-bar-fill" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>
            <div id="panel-8" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Flot <span class="fw-300"><i>Curved Lines</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            Curved lines by using the plugin <code>jquery.flot.spline.js</code>, adding a nice transition to the eyes
                        </div>
                        <div id="flot-line-curves" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>
            <div id="panel-9" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Flot <span class="fw-300"><i>Curved (tooltip)</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            We take the flot chart from previous example (above) and add tooltips
                        </div>
                        <div id="flot-line-curves-alt" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>
            <div id="panel-10" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Flot <span class="fw-300"><i>Area Curved</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            This Area chart has smooth curved lines to make it easy to read
                        </div>
                        <div id="flot-area-fill" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>
            <div id="panel-11" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Flot <span class="fw-300"><i>Interval (fill)</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            In this interval example we fill the whitespace. You can also try the interval button to change the speed of the redrawing
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-secondary btn-sm dropdown-toggle mb-g" type="button" data-toggle="dropdown" aria-expanded="false"> Change interval </button>
                            <div class="dropdown-menu dropdown-lg p-0">
                                <div class="px-4 py-2 d-flex align-items-center justify-content-center">
                                    <input type="range" class="custom-range js-set-interval" id="js-flot-realtime-fill-speed" min="-1000" max="-100" step="100" value="-1000">
                                </div>
                            </div>
                        </div>
                        <div id="flot-realtime-fill" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div id="panel-12" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Flot <span class="fw-300"><i>Pie</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            Pie chart is used to see the proprotion of each data groups, making Flot pie chart is pretty simple, in order to make pie chart you have to incldue <code>jquery.flot.pie.js</code> plugin
                        </div>
                        <div class="row">
                            <div class="col-xl-5">
                                <div id="js-pie-options" class="w-100" style="height: 250px"></div>
                            </div>
                            <div class="col-xl-6 offset-xl-1">
                                <div class="h-100 d-flex align-items-center mt-3 mt-xl-0">
                                    <div class="demo">
                                        <button id="example-1" class="btn btn-outline-primary js-pie-example">Default Options</button>
                                        <button id="example-2" class="btn btn-outline-primary js-pie-example">Without Legend</button>
                                        <button id="example-3" class="btn btn-outline-primary js-pie-example">Label Formatter</button>
                                        <button id="example-4" class="btn btn-outline-primary js-pie-example">Label Radius</button>
                                        <button id="example-5" class="btn btn-outline-primary js-pie-example">Label Styles #1</button>
                                        <button id="example-6" class="btn btn-outline-primary js-pie-example">Label Styles #2</button>
                                        <button id="example-7" class="btn btn-outline-primary js-pie-example">Hidden Labels</button>
                                        <button id="example-8" class="btn btn-outline-primary js-pie-example">Combined Slice</button>
                                        <button id="example-9" class="btn btn-outline-primary js-pie-example">Rectangular Pie</button>
                                        <button id="example-10" class="btn btn-outline-primary js-pie-example">Tilted Pie</button>
                                        <button id="example-11" class="btn btn-outline-primary js-pie-example">Donut Hole</button>
                                        <button id="example-12" class="btn btn-outline-primary js-pie-example">Interactivity</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="panel-13" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Sales <span class="fw-300"><i>Chart (example)</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            Pie chart is used to see the proprotion of each data groups, making Flot pie chart is pretty simple, in order to make pie chart you have to incldue <code>jquery.flot.pie.js</code> plugin
                        </div>
                        <div id="flot-sales" class="w-100" style="height: 350px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@stop

@section('footerScript')
<script src="{{ URL::asset('js/statistics/flot/flot.bundle.js')}}"></script>
<script>
    /* defined datas */
    var dataTargetProfit = [
        [1354586000000, 153],
        [1364587000000, 658],
        [1374588000000, 198],
        [1384589000000, 663],
        [1394590000000, 801],
        [1404591000000, 1080],
        [1414592000000, 353],
        [1424593000000, 749],
        [1434594000000, 523],
        [1444595000000, 258],
        [1454596000000, 688],
        [1464597000000, 364]
    ]
    var dataProfit = [
        [1354586000000, 53],
        [1364587000000, 65],
        [1374588000000, 98],
        [1384589000000, 83],
        [1394590000000, 980],
        [1404591000000, 808],
        [1414592000000, 720],
        [1424593000000, 674],
        [1434594000000, 23],
        [1444595000000, 79],
        [1454596000000, 88],
        [1464597000000, 36]
    ]
    var dataSignups = [
        [1354586000000, 647],
        [1364587000000, 435],
        [1374588000000, 784],
        [1384589000000, 346],
        [1394590000000, 487],
        [1404591000000, 463],
        [1414592000000, 479],
        [1424593000000, 236],
        [1434594000000, 843],
        [1444595000000, 657],
        [1454596000000, 241],
        [1464597000000, 341]
    ]
    var dataSales = [
        [1196463600000, 0],
        [1196550000000, 0],
        [1196636400000, 0],
        [1196722800000, 1177],
        [1196809200000, 3636],
        [1196895600000, 3575],
        [1196982000000, 2736],
        [1197068400000, 1086],
        [1197154800000, 1676],
        [1197241200000, 1205],
        [1197327600000, 1906],
        [1197414000000, 1710],
        [1197500400000, 1639],
        [1197586800000, 1540],
        [1197673200000, 1435],
        [1197759600000, 1301],
        [1197846000000, 1575],
        [1197932400000, 1481],
        [1198018800000, 1591],
        [1198105200000, 1608],
        [1198191600000, 1459],
        [1198278000000, 1234],
        [1198364400000, 1352],
        [1198450800000, 1686],
        [1198537200000, 1279],
        [1198623600000, 1449],
        [1198710000000, 1468],
        [1198796400000, 1392],
        [1198882800000, 1282],
        [1198969200000, 1208],
        [1199055600000, 1229],
        [1199142000000, 1177],
        [1199228400000, 1374],
        [1199314800000, 1436],
        [1199401200000, 1404],
        [1199487600000, 1253],
        [1199574000000, 1218],
        [1199660400000, 1476],
        [1199746800000, 1462],
        [1199833200000, 1500],
        [1199919600000, 1700],
        [1200006000000, 1750],
        [1200092400000, 1600],
        [1200178800000, 1500],
        [1200265200000, 1900],
        [1200351600000, 1930],
        [1200438000000, 1200],
        [1200524400000, 1980],
        [1200610800000, 1950],
        [1200697200000, 1900],
        [1200783600000, 1000],
        [1200870000000, 1050],
        [1200956400000, 1150],
        [1201042800000, 1100],
        [1201129200000, 1200],
        [1201215600000, 1300],
        [1201302000000, 1700],
        [1201388400000, 1450],
        [1201474800000, 1500],
        [1201561200000, 1546],
        [1201647600000, 1614],
        [1201734000000, 1954],
        [1201820400000, 1700],
        [1201906800000, 1800],
        [1201993200000, 1900],
        [1202079600000, 2000],
        [1202166000000, 2100],
        [1202252400000, 2200],
        [1202338800000, 2300],
        [1202425200000, 2400],
        [1202511600000, 2550],
        [1202598000000, 2600],
        [1202684400000, 2500],
        [1202770800000, 2700],
        [1202857200000, 2750],
        [1202943600000, 2800],
        [1203030000000, 3245],
        [1203116400000, 3345],
        [1203202800000, 3000],
        [1203289200000, 3200],
        [1203375600000, 3300],
        [1203462000000, 3400],
        [1203548400000, 3600],
        [1203634800000, 3700],
        [1203721200000, 3800],
        [1203807600000, 4000],
        [1203894000000, 4500]
    ];
    var dataSetBar1 = [
        [0, 3],
        [2, 8],
        [4, 5],
        [6, 13],
        [8, 5],
        [10, 7],
        [12, 4],
        [14, 6]
    ];
    var dataSetBar2 = [
        [0, 3],
        [2, 8],
        [4, 5],
        [6, 13],
        [8, 5],
        [10, 7],
        [12, 8],
        [14, 10]
    ];
    var dataSetBar3 = [
        [1, 5],
        [3, 7],
        [5, 10],
        [7, 7],
        [9, 9],
        [11, 5],
        [13, 4],
        [15, 6]
    ];
    var dataSet1 = [
        [0, 2],
        [1, 3],
        [2, 6],
        [3, 5],
        [4, 7],
        [5, 8],
        [6, 10]
    ];
    var dataSet2 = [
        [0, 1],
        [1, 2],
        [2, 5],
        [3, 3],
        [4, 5],
        [5, 6],
        [6, 9]
    ];
    var dataSet3 = [
        [0, 10],
        [1, 7],
        [2, 8],
        [3, 9],
        [4, 6],
        [5, 5],
        [6, 7]
    ];
    var dataSet4 = [
        [0, 8],
        [1, 5],
        [2, 6],
        [3, 8],
        [4, 4],
        [5, 3],
        [6, 6]
    ];
    var dataSetPie = [{
            label: "Asia",
            data: 4119630000,
            color: color.primary._500
        },
        {
            label: "Latin America",
            data: 590950000,
            color: color.info._500
        },
        {
            label: "Africa",
            data: 1012960000,
            color: color.warning._500
        },
        {
            label: "Oceania",
            data: 95100000,
            color: color.danger._500
        },
        {
            label: "Europe",
            data: 727080000,
            color: color.success._500
        },
        {
            label: "North America",
            data: 344120000,
            color: color.fusion._400
        }
    ];
    var data = [],
        totalPoints = 50;
    var plotRealtimeCurvedInterval = 1000;
    var plotRealtimeFillInterval = 1000;

    /* generate random data */
    var getRandomData = function() {
        if (data.length > 0)
            data = data.slice(1);
        while (data.length < totalPoints) {
            var prev = data.length > 0 ? data[data.length - 1] : 50,
                y = prev + Math.random() * 10 - 5;
            if (y < 0) {
                y = 0;
            } else if (y > 100) {
                y = 100;
            }
            data.push(y);
        }
        var res = [];
        for (var i = 0; i < data.length; ++i) {
            res.push([i, data[i]])
        }
        return res;
    }
    /* generate random data -- end */

    /* label formatter */
    var labelFormatter = function(label, series) {
        return "<div class='fs-xs text-center p-1 text-white'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
    }
    /* label formatter -- end */

    /* init() interval range */
    $(document).on('change', '.js-set-interval', function() {
        plotRealtimeFillInterval = Math.abs($('#js-flot-realtime-fill-speed').val());
        plotRealtimeCurvedInterval = Math.abs($('#js-flot-realtime-curved-speed').val());
    })

    $(document).ready(function() {
        /* flot bar */
        var flotBar = $.plot("#flot-bar", [{
            data: [
                [0, 3],
                [2, 8],
                [4, 5],
                [6, 13],
                [8, 5],
                [10, 7],
                [12, 4],
                [14, 6]
            ]
        }], {
            series: {
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: color.fusion._200
                }
            },
            grid: {
                borderWidth: 1,
                borderColor: '#eee'
            },
            yaxis: {
                tickColor: '#eee',
                font: {
                    color: '#999',
                    size: 10
                }
            },
            xaxis: {
                tickColor: '#eee',
                font: {
                    color: '#999',
                    size: 10
                }
            }
        });
        /* flot bar lines -- end */

        /* flot bar lines multiple */
        var flotBarFill = $.plot("#flot-bar-fill", [{
                data: [
                    [0, 3],
                    [2, 8],
                    [4, 5],
                    [6, 13],
                    [8, 5],
                    [10, 7],
                    [12, 8],
                    [14, 10]
                ],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: color.success._500
                }
            },
            {
                data: [
                    [1, 5],
                    [3, 7],
                    [5, 10],
                    [7, 7],
                    [9, 9],
                    [11, 5],
                    [13, 4],
                    [15, 6]
                ],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: color.primary._500
                }
            }
        ], {
            grid: {
                borderWidth: 1,
                borderColor: '#D9D9D9'
            },
            yaxis: {
                tickColor: '#d9d9d9',
                font: {
                    color: '#666',
                    size: 10
                }
            },
            xaxis: {
                tickColor: '#d9d9d9',
                font: {
                    color: '#666',
                    size: 10
                }
            }
        });
        /* flot bar lines multiple -- end */

        /* flot simple lines */
        var flotLine = $.plot($('#flot-line'), [{
                data: dataSet1,
                label: 'New Customer',
                color: color.primary._400
            },
            {
                data: dataSet2,
                label: 'Returning Customer',
                color: color.fusion._400
            }
        ], {
            series: {
                lines: {
                    show: true,
                    lineWidth: 1
                },
                shadowSize: 0
            },
            points: {
                show: false,
            },
            legend: {
                noColumns: 1,
                position: 'nw'
            },
            grid: {
                hoverable: true,
                clickable: true,
                borderColor: '#ddd',
                borderWidth: 0,
                labelMargin: 5,
                backgroundColor: '#fff'
            },
            yaxis: {
                min: 0,
                max: 15,
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            },
            xaxis: {
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            }
        });
        /* flot simple lines -- end */

        /* flot lines curved */
        var flotLineCurves = $.plot($('#flot-line-curves'), [{
                data: dataSet1,
                label: 'New Customer',
                color: color.primary._400
            },
            {
                data: dataSet2,
                label: 'Returning Customer',
                color: color.fusion._400
            }
        ], {
            series: {
                lines: {
                    show: false
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    //fill: 0.4
                },
                shadowSize: 0
            },
            points: {
                show: false,
            },
            legend: {
                noColumns: 1,
                position: 'nw'
            },
            grid: {
                hoverable: true,
                clickable: true,
                borderColor: '#ddd',
                borderWidth: 0,
                labelMargin: 5,
                backgroundColor: '#fff'
            },
            yaxis: {
                min: 0,
                max: 15,
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            },
            xaxis: {
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            }
        });
        /* flot lines curved -- end */

        /* flot lines tooltip */
        var flotLineAlt = $.plot($('#flot-line-alt'), [{
                data: dataSet3,
                label: 'New Customer',
                color: color.danger._500
            },
            {
                data: dataSet4,
                label: 'Returning Customer',
                color: color.success._500
            }
        ], {
            series: {
                lines: {
                    show: true,
                    lineWidth: 1
                },
                shadowSize: 0
            },
            points: {
                show: true,
            },
            legend: {
                noColumns: 1,
                position: 'nw'
            },
            tooltip: true,
            tooltipOpts: {
                cssClass: 'tooltip-inner',
                defaultTheme: false,
                shifts: {
                    x: 10,
                    y: -40
                }
            },
            grid: {
                hoverable: true,
                clickable: true,
                borderColor: '#ddd',
                borderWidth: 0,
                labelMargin: 5,
                backgroundColor: '#fff'
            },
            yaxis: {
                min: 0,
                max: 15,
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            },
            xaxis: {
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            }
        });
        /* flot lines tooltip -- end */

        /* flot lines curved tooltip */
        var flotLineCurvesAlt = $.plot($('#flot-line-curves-alt'), [{
                data: dataSet3,
                label: 'New Customer',
                color: color.danger._500
            },
            {
                data: dataSet4,
                label: 'Returning Customer',
                color: color.success._500
            }
        ], {
            series: {
                lines: {
                    show: false
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    //fill: 0.4
                },
                shadowSize: 0
            },
            points: {
                show: true,
            },
            legend: {
                noColumns: 1,
                position: 'nw'
            },
            tooltip: true,
            tooltipOpts: {
                cssClass: 'tooltip-inner',
                defaultTheme: false,
                shifts: {
                    x: 10,
                    y: -40
                }
            },
            grid: {
                hoverable: true,
                clickable: true,
                borderColor: '#ddd',
                borderWidth: 0,
                labelMargin: 5,
                backgroundColor: '#fff'
            },
            yaxis: {
                min: 0,
                max: 15,
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            },
            xaxis: {
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            }
        });
        /* flot lines curved tooltip -- end */

        /* flot area */
        var flotArea = $.plot($('#flot-area'), [{
                data: dataSet1,
                label: 'New Customer',
                color: color.primary._500
            },
            {
                data: dataSet2,
                label: 'Returning Customer',
                color: color.fusion._500
            }
        ], {
            series: {
                lines: {
                    show: true,
                    lineWidth: 0,
                    fill: 0.8
                },
                shadowSize: 0
            },
            points: {
                show: false,
            },
            legend: {
                noColumns: 1,
                position: 'nw'
            },
            grid: {
                hoverable: true,
                clickable: true,
                borderColor: '#ddd',
                borderWidth: 0,
                labelMargin: 5,
                backgroundColor: '#fff'
            },
            yaxis: {
                min: 0,
                max: 15,
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            },
            xaxis: {
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            }
        });
        /* flot area -- end */

        /* flot area fill */
        var flotAreaFill = $.plot($('#flot-area-fill'), [{
                data: dataSet1,
                label: 'New Customer',
                color: color.primary._500
            },
            {
                data: dataSet2,
                label: 'Returning Customer',
                color: color.fusion._500
            }
        ], {
            series: {
                lines: {
                    show: false
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 0,
                    fill: 0.8
                },
                shadowSize: 0
            },
            points: {
                show: false,
            },
            legend: {
                noColumns: 1,
                position: 'nw'
            },
            grid: {
                hoverable: true,
                clickable: true,
                borderColor: '#ddd',
                borderWidth: 0,
                labelMargin: 5,
                backgroundColor: '#fff'
            },
            yaxis: {
                min: 0,
                max: 15,
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            },
            xaxis: {
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            }
        });
        /* flot area fill -- end */

        /* flot realtime curved */
        var plotRealtimeCurved = $.plot('#flot-realtime-curved', [getRandomData()], {
            colors: [color.primary._500],
            series: {
                lines: {
                    show: false
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    //fill: 0.9
                },
                shadowSize: 0 // Drawing is faster without shadows
            },
            grid: {
                borderColor: '#ddd',
                borderWidth: 1,
                labelMargin: 5
            },
            xaxis: {
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            },
            yaxis: {
                min: 0,
                max: 100,
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            }
        });
        /* flot realtime curved -- end */

        /* flot realtime fill */
        var plotRealtimeFill = $.plot('#flot-realtime-fill', [getRandomData()], {
            colors: [color.primary._200],
            series: {
                lines: {
                    show: true,
                    lineWidth: 0,
                    fill: 0.9
                },
                shadowSize: 0 // Drawing is faster without shadows
            },
            grid: {
                borderColor: '#ddd',
                borderWidth: 1,
                labelMargin: 5
            },
            xaxis: {
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            },
            yaxis: {
                min: 0,
                max: 100,
                color: '#eee',
                font: {
                    size: 10,
                    color: '#999'
                }
            }
        });
        /* flot realtime fill -- end */

        /* generate realtime data */
        var updateRealtimeCurved = function() {
            plotRealtimeCurved.setData([getRandomData()]);
            plotRealtimeCurved.draw();
            setTimeout(updateRealtimeCurved, plotRealtimeCurvedInterval);
        }
        var updateRealtimeFill = function() {
            plotRealtimeFill.setData([getRandomData()]);
            plotRealtimeFill.draw();
            setTimeout(updateRealtimeFill, plotRealtimeFillInterval);
        }
        /* generate realtime data -- end */
        updateRealtimeCurved();
        updateRealtimeFill();

        /* sales chart */
        var plotSales = $.plot($('#flot-sales'), [{
            data: dataSales,
        }], {
            series: {
                lines: {
                    show: true,
                    lineWidth: 1,
                    fill: true,
                    fillColor: {
                        colors: [{
                                opacity: 0.1
                            },
                            {
                                opacity: 0.15
                            }
                        ]
                    }
                },
                points: {
                    show: true
                },
                shadowSize: 0
            },
            selection: {
                mode: "x"
            },
            grid: {
                hoverable: true,
                clickable: true,
                tickColor: '#f2f2f2',
                borderWidth: 1,
                borderColor: '#f2f2f2'
            },
            tooltip: true,
            tooltipOpts: {
                cssClass: 'tooltip-inner',
                content: "Your sales for <span class='text-warning fw-500'>%x</span> was <span class='text-success fw-500'>$%y</span>",
                dateFormat: "%y-%0m-%0d",
                defaultTheme: false
            },
            colors: [color.primary._500],
            xaxis: {
                mode: "time",
                tickLength: 5
            }
        });
        /* sales chart -- end */

        /* flot toggle example */
        var flot_toggle = function() {

            var data = [{
                    label: "Target Profit",
                    data: dataTargetProfit,
                    color: color.danger._500,
                    bars: {
                        show: true,
                        align: "center",
                        barWidth: 30 * 30 * 60 * 1000 * 80,
                        lineWidth: 0,
                        fillColor: {
                            colors: [color.danger._900, color.danger._100]
                        }
                    },
                    highlightColor: 'rgba(255,255,255,0.3)',
                    shadowSize: 0
                },
                {
                    label: "Actual Profit",
                    data: dataProfit,
                    color: color.info._500,
                    lines: {
                        show: true,
                        lineWidth: 5
                    },
                    shadowSize: 0,
                    points: {
                        show: true
                    }
                },
                {
                    label: "User Signups",
                    data: dataSignups,
                    color: color.success._500,
                    lines: {
                        show: true,
                        lineWidth: 2
                    },
                    shadowSize: 0,
                    points: {
                        show: true
                    }
                }
            ]

            var options = {
                grid: {
                    hoverable: true,
                    clickable: true,
                    tickColor: '#f2f2f2',
                    borderWidth: 1,
                    borderColor: '#f2f2f2'
                },
                tooltip: true,
                tooltipOpts: {
                    cssClass: 'tooltip-inner',
                    defaultTheme: false
                },
                xaxis: {
                    mode: "time"
                },
                yaxes: {
                    tickFormatter: function(val, axis) {
                        return "$" + val;
                    },
                    max: 1200
                }

            };

            var plot2 = null;

            function plotNow() {
                var d = [];
                $("#js-checkbox-toggles").find(':checkbox').each(function() {
                    if ($(this).is(':checked')) {
                        d.push(data[$(this).attr("name").substr(4, 1)]);
                    }
                });
                if (d.length > 0) {
                    if (plot2) {
                        plot2.setData(d);
                        plot2.draw();
                    } else {
                        plot2 = $.plot($("#flot-toggles"), d, options);
                    }
                }

            };

            $("#js-checkbox-toggles").find(':checkbox').on('change', function() {
                plotNow();
            });
            plotNow()
        }
        flot_toggle();
        /* flot toggle example -- end*/

        /* flot pie chart */
        var flot_pie = function() {
            // target 
            var placeholder = $("#js-pie-options");
            /* init first plot */
            $.plot(placeholder, dataSetPie, {
                series: {
                    pie: {
                        show: true
                    }
                },
                legend: {
                    show: true
                }
            });
            //buttons
            $(document).on('click', '.js-pie-example', function() {
                $("#js-pie-options").unbind();

                var id = this.id;

                $(".js-pie-example").removeClass("active");
                $("#" + id).addClass("active");
                //$("#panel-12 .panel-hdr").addClass("highlight");

                switch (true) {
                    case (id == "example-1"):
                        $("#panel-12 h2").html('Pie <span class="fw-300 font-italic">Chart (default)</span>');
                        $("#panel-12 .panel-tag").text("The default pie chart with no options set");
                        $.plot(placeholder, dataSetPie, {
                            series: {
                                pie: {
                                    show: true
                                }
                            }
                        });
                        break;
                    case (id == "example-2"):
                        // code block
                        $("#panel-12 h2").html('Pie <span class="fw-300 font-italic">Chart (legend)</span>');
                        $("#panel-12 .panel-tag").text("The default pie chart when the legend is disabled. Since the labels would normally be outside the container, the chart is resized to fit");
                        $.plot(placeholder, dataSetPie, {
                            series: {
                                pie: {
                                    show: true
                                }
                            },
                            legend: {
                                show: false
                            }
                        });
                        break;
                    case (id == "example-3"):
                        $("#panel-12 h2").html('Pie <span class="fw-300 font-italic">Custom Label Formatter</span>');
                        $("#panel-12 .panel-tag").text("Added a semi-transparent background to the labels and a custom labelFormatter function");
                        $.plot(placeholder, dataSetPie, {
                            series: {
                                pie: {
                                    show: true,
                                    radius: 1,
                                    label: {
                                        show: true,
                                        radius: 1,
                                        formatter: labelFormatter,
                                        background: {
                                            opacity: 0.8
                                        }
                                    }
                                }
                            },
                            legend: {
                                show: false
                            }
                        });
                        break;
                    case (id == "example-4"):
                        $("#panel-12 h2").html('Pie <span class="fw-300 font-italic">Label Radius</span>');
                        $("#panel-12 .panel-tag").html("Slightly more transparent label backgrounds and adjusted the radius values to place them within the pie <code>radius: 3 / 4</code>");
                        $.plot(placeholder, dataSetPie, {
                            series: {
                                pie: {
                                    show: true,
                                    radius: 1,
                                    label: {
                                        show: true,
                                        radius: 3 / 4,
                                        formatter: labelFormatter,
                                        background: {
                                            opacity: 0.5
                                        }
                                    }
                                }
                            },
                            legend: {
                                show: false
                            }
                        });
                        break;
                    case (id == "example-5"):
                        $("#panel-12 h2").html('Pie <span class="fw-300 font-italic">Label Styles #1</span>');
                        $("#panel-12 .panel-tag").html("Semi-transparent, black-colored label background");
                        $.plot(placeholder, dataSetPie, {
                            series: {
                                pie: {
                                    show: true,
                                    radius: 1,
                                    label: {
                                        show: true,
                                        radius: 3 / 4,
                                        formatter: labelFormatter,
                                        background: {
                                            opacity: 0.5,
                                            color: "#000"
                                        }
                                    }
                                }
                            },
                            legend: {
                                show: false
                            }
                        });
                        break;
                    case (id == "example-6"):
                        $("#panel-12 h2").html('Pie <span class="fw-300 font-italic">Label Styles #2</span>');
                        $("#panel-12 .panel-tag").html("Semi-transparent, black-colored label background placed at pie edge");
                        $.plot(placeholder, dataSetPie, {
                            series: {
                                pie: {
                                    show: true,
                                    radius: 3 / 4,
                                    label: {
                                        show: true,
                                        radius: 3 / 4,
                                        formatter: labelFormatter,
                                        background: {
                                            opacity: 0.5,
                                            color: "#000"
                                        }
                                    }
                                }
                            },
                            legend: {
                                show: false
                            }
                        });
                        break;
                    case (id == "example-7"):
                        $("#panel-12 h2").html('Pie <span class="fw-300 font-italic">Hidden Labels</span>');
                        $("#panel-12 .panel-tag").html("Labels can be hidden if the slice is less than a given percentage of the pie (10% in this case)");
                        $.plot(placeholder, dataSetPie, {
                            series: {
                                pie: {
                                    show: true,
                                    radius: 1,
                                    label: {
                                        show: true,
                                        radius: 2 / 3,
                                        formatter: labelFormatter,
                                        threshold: 0.1
                                    }
                                }
                            },
                            legend: {
                                show: false
                            }
                        });
                        break;
                    case (id == "example-8"):
                        $("#panel-12 h2").html('Pie <span class="fw-300 font-italic">Combined Slice</span>');
                        $("#panel-12 .panel-tag").html("Multiple slices less than a given percentage (5% in this case) of the pie can be combined into a single, larger slice");
                        $.plot(placeholder, dataSetPie, {
                            series: {
                                pie: {
                                    show: true,
                                    combine: {
                                        color: "#999",
                                        threshold: 0.05
                                    }
                                }
                            },
                            legend: {
                                show: false
                            }
                        });
                        break;
                    case (id == "example-9"):
                        $("#panel-12 h2").html('Pie <span class="fw-300 font-italic">Rectangular Pie</span>');
                        $("#panel-12 .panel-tag").html("The radius can also be set to a specific size (even larger than the container itself)");
                        $.plot(placeholder, dataSetPie, {
                            series: {
                                pie: {
                                    show: true,
                                    radius: 500,
                                    label: {
                                        show: true,
                                        formatter: labelFormatter,
                                        threshold: 0.1
                                    }
                                }
                            },
                            legend: {
                                show: false
                            }
                        });
                        break;
                    case (id == "example-10"):
                        $("#panel-12 h2").html('Pie <span class="fw-300 font-italic">Tilted Pie</span>');
                        $("#panel-12 .panel-tag").html("The pie can be tilted at an angle");
                        $.plot(placeholder, dataSetPie, {
                            series: {
                                pie: {
                                    show: true,
                                    radius: 1,
                                    tilt: 0.5,
                                    label: {
                                        show: true,
                                        radius: 1,
                                        formatter: labelFormatter,
                                        background: {
                                            opacity: 0.8
                                        }
                                    },
                                    combine: {
                                        color: "#999",
                                        threshold: 0.1
                                    }
                                }
                            },
                            legend: {
                                show: false
                            }
                        });
                        break;
                    case (id == "example-11"):
                        $("#panel-12 h2").html('Pie <span class="fw-300 font-italic">Donut Hole</span>');
                        $("#panel-12 .panel-tag").html("A donut hole can be added");
                        $.plot(placeholder, dataSetPie, {
                            series: {
                                pie: {
                                    innerRadius: 0.5,
                                    show: true
                                }
                            }
                        });
                        break;
                    case (id == "example-12"):
                        $("#panel-12 h2").html('Pie <span class="fw-300 font-italic">Interactivity</span>');
                        $("#panel-12 .panel-tag").html("The pie can be made interactive with hover and click events");
                        $.plot(placeholder, dataSetPie, {
                            series: {
                                pie: {
                                    innerRadius: 0.5,
                                    show: true
                                }
                            }
                        });
                        $.plot(placeholder, dataSetPie, {
                            series: {
                                pie: {
                                    show: true
                                }
                            },
                            grid: {
                                hoverable: true,
                                clickable: true
                            }
                        });

                        placeholder.bind("plothover", function(event, pos, obj) {

                            if (!obj) {
                                return;
                            }

                            var percent = parseFloat(obj.series.percent).toFixed(2);
                            $("#hover").html("<span style='font-weight:bold; color:" + obj.series.color + "'>" + obj.series.label + " (" + percent + "%)</span>");
                        });

                        placeholder.bind("plotclick", function(event, pos, obj) {

                            if (!obj) {
                                return;
                            }

                            percent = parseFloat(obj.series.percent).toFixed(2);
                            alert("" + obj.series.label + ": " + percent + "%");
                        });
                        break;
                }

            });
        }
        flot_pie();
        /* flot pie chart -- end*/
    });
</script>
@stop