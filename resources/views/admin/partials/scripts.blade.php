<!-- jQuery -->
<script src="{{url('assets/admin/assets/vendor/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>


<!-- Bootstrap -->
<script src="{{url('assets/admin/assets/vendor/popper.js')}}"></script>
<script src="{{url('assets/admin/assets/vendor/bootstrap.min.js')}}"></script>
<script src="{{url('assets/admin/assets/vendor/Chart.min.js')}}"></script>
<script src="{{url('assets/admin/assets/vendor/moment.min.js')}}"></script>
<script src="{{url('assets/admin/assets/vendor/dateformat.js')}}"></script>

<script src="{{url('assets/admin/assets/js/app.js')}}"></script>
<script>
    window.theme = "default";
</script>
<script src="{{url('assets/admin/assets/js/color_variables.js')}}"></script>


<script src="{{url('assets/admin/assets/vendor/Chart.min.js')}}"></script>
<script src="{{url('assets/admin/assets/vendor/morris.min.js')}}"></script>
<script src="{{url('assets/admin/assets/vendor/raphael.min.js')}}"></script>
<script src="{{url('assets/admin/assets/vendor/bootstrap-datepicker.min.js')}}"></script>
<script src="{{url('assets/admin/assets/js/datepicker.js')}}"></script>

<script>
    new Morris.Area({
        element: 'morris-area-chart',
        data: [{
                year: '2017-01',
                a: 6352.27
            },
            {
                year: '2017-02',
                a: 4309.98
            },
            {
                year: '2017-03',
                a: 1465.98
            },
            {
                year: '2017-04',
                a: 1298.25
            },
            {
                year: '2017-05',
                a: 3209
            },
            {
                year: '2017-06',
                a: 2083
            },
            {
                year: '2017-07',
                a: 1285.23
            },
            {
                year: '2017-08',
                a: 1289
            },
            {
                year: '2017-09',
                a: 4430
            },
            {
                year: '2017-10',
                a: 8921.19
            }
        ],
        xkey: 'year',
        ykeys: ['a'],
        labels: ['Earnings'],
        lineColors: ['#fff'],
        fillOpacity: '0.2',
        gridEnabled: true,
        gridTextColor: '#ffffff',
        resize: true
    });

    new Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
                label: 'General',
                value: 20
            },
            {
                label: 'Software',
                value: 10
            },
            {
                label: 'Subscriptions',
                value: 5
            },
            {
                label: 'Products',
                value: 5
            },
            {
                label: 'Courses',
                value: 64
            }
        ],
        resize: true,
        colors: [colors.color_primary, colors.color_success, colors.color_warning, colors.color_danger, colors.color_blue]
    });
</script>




<script src="{{url('assets/admin/assets/vendor/dom-factory.js')}}"></script>
<!-- DOM Factory -->
<script src="{{url('assets/admin/assets/vendor/material-design-kit.js')}}"></script>
<!-- MDK -->



<script>
    (function() {
        'use strict';

        // Self Initialize DOM Factory Components
        domFactory.handler.autoInit()

        // Connect button(s) to drawer(s)
        var sidebarToggle = Array.prototype.slice.call(document.querySelectorAll('[data-toggle="sidebar"]'))

        sidebarToggle.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                var drawer = document.querySelector(selector)
                if (drawer) {
                    drawer.mdkDrawer.toggle()
                }
            })
        })

    })();
</script>

<script src="{{url('assets/admin/assets/vendor/jquery.dataTables.js')}}"></script>
<script src="{{url('assets/admin/assets/vendor/dataTables.bootstrap4.js')}}"></script>
<script src="{{url('assets/admin/assets/js/snackbar.js')}}"></script>


<script>
    $('#data-table').dataTable();
</script>
