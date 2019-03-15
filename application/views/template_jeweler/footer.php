    <br/><br/><br/><br/><br/><br/>
    <div class="footer-copyright-area" style="position: fixed; bottom: 0px; left: 0px;width: 100%">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &copy; 2019 <a href="https://itera.ac.id">ITERA</a> All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- jquery
        ============================================ -->
    <script src="<?=base_url()?>assets_jeweler/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?=base_url()?>assets_jeweler/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?=base_url()?>assets_jeweler/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?=base_url()?>assets_jeweler/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?=base_url()?>assets_jeweler/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?=base_url()?>assets_jeweler/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="<?=base_url()?>assets_jeweler/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?=base_url()?>assets_jeweler/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?=base_url()?>assets_jeweler/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?=base_url()?>assets_jeweler/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="<?=base_url()?>assets_jeweler/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?=base_url()?>assets_jeweler/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="<?=base_url()?>assets_jeweler/js/morrisjs/raphael-min.js"></script>
    <script src="<?=base_url()?>assets_jeweler/js/morrisjs/morris.js"></script>
    <script src="<?=base_url()?>assets_jeweler/js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="<?=base_url()?>assets_jeweler/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?=base_url()?>assets_jeweler/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="<?=base_url()?>assets_jeweler/js/calendar/moment.min.js"></script>
    <script src="<?=base_url()?>assets_jeweler/js/calendar/fullcalendar.min.js"></script>
    <script src="<?=base_url()?>assets_jeweler/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?=base_url()?>assets_jeweler/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?=base_url()?>assets_jeweler/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/Highcharts-5.0.6/highcharts.js"></script>
    <script src="<?=base_url()?>assets_jeweler/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="<?=base_url()?>assets_jeweler/js/data-table/bootstrap-table.js"></script>
    <script src="<?=base_url()?>assets_jeweler/js/data-table/tableExport.js"></script>
    <script src="<?=base_url()?>assets_jeweler/js/data-table/data-table-active.js"></script>
    <script src="<?=base_url()?>assets/zoom-master/js/zoom.js"></script>
    <script>
      var OneSignal = window.OneSignal || [];

        OneSignal.push(function() {
            OneSignal.init({
            appId: "4939f0be-bceb-4df2-a5dc-7951125f918b",
            });
        })

        OneSignal.push(function() {

            var isPushSupported = OneSignal.isPushNotificationsSupported();
            if(isPushSupported) {
                
                OneSignal.isPushNotificationsEnabled(function(isEnable) {
                    if(isEnable){
                        console.log('Notification are Enabled');
                        OneSignal.getUserId(function(userId) {
                            console.log(userId);
                            $.ajax({
                                url: '<?=base_url()?>init/storeid',
                                method: 'post',
                                data: {user_id:userId},
                                success: function(res) {
                                    console.log(res);
                                },
                                error: function(err) {
                                    console.log(res)
                                }
                            })
                        })
                    }else{
                        console.log('Notification are not enabled yet');
                        OneSignal.push(function() {
                            OneSignal.showHttpPrompt();
                        });
                    }
                })

            }else {

            }

            
        });
    </script>
    <script type="text/javascript">
            Highcharts.chart('kerusakan', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'bar'
            },
            title: {
                text: 'Frekwensi Ticket Layanan'
            },
            credits: {
                enabled: false
            },
            xAxis: {
            categories: [<?php
                    $i = 1;
                    
                    foreach ($grafik_layanan as $row) {
                        if ($i==1) {
                            echo "'".$row->nama_kerusakan."'";
                        } else {
                            echo ",'".$row->nama_kerusakan."'";
                        }
                    $i++;
                    } ?>
                ],
            },
            yAxis: {
            min: 0,
            title: {
                text: 'Jumlah ',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b>'
            },
            plotOptions: {
                bar: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.y}',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        }
                    }
                }
            },
            series: [{
                name: 'Layanan',
                colorByPoint: true,
                data: [
                    <?php
                    $i = 1;
                    
                    foreach ($grafik_layanan as $row) {
                        if ($i==1) {
                            echo "{name:'".$row->nama_kerusakan."',y:".$row->jml."}";
                        } else {
                            echo ",{name:'".$row->nama_kerusakan."',y:".$row->jml."}";
                        }
                    $i++;
                    } ?>
                ] 
            }]
        });
    </script>
    <?php
        if (!empty($script))$this->load->view($script);
    ?>
</body>

</html>