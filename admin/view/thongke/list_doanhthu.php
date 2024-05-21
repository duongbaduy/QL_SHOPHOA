<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="layoutSidenav_content">
<main>
    <h3>THỐNG KÊ SẢN PHẨM THEO DOANH THU</h3>
    <table>
        <tr>
            <td>
            

                
                <div
                id="myChart" style="width:100%; max-width:600px; height:500px;">
                </div>

                <script>
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                const data = google.visualization.arrayToDataTable([
                ['Tên sản phẩm', 'Doanh Thu'],
                <?php 
                    $tongsp = count($listtkdt);
                    $i = 1;
                    foreach($listtkdt as $thongke){
                        extract($thongke);
                        if($i==$tongsp) $dauphay=""; else $dauphay=",";
                        echo "['".$thongke['Ten_San_Pham']."',".$thongke['Doanh_Thu']."]".$dauphay;
                        $i+=1;
                    }
                ?>
                ]);

                const options = {
                title:'Sản phẩm theo doanh thu',
                is3D:true
                };

                const chart = new google.visualization.BarChart(document.getElementById('myChart'));
                chart.draw(data, options);
                }
                </script>
            </td>
            <td>
            
        <table class="table table-light table-striped">
                <th>Tên sản phẩm</th>
                <th>Số lượng bán ra</th>
                <th>Doanh Thu</th>
                <th></th>
                </tr>
                <?php
                if(isset($listtkdt)&&(count($listtkdt)>0))
                {
                    foreach($listtkdt as $KQ)
                    {

                ?>
                <tr>
                    <td><?php echo $KQ['Ten_San_Pham'] ?></td>
                    <td><?php echo $KQ['So_Luong_Ban_Ra'] ?></td>
                    <td><?php echo $KQ['Doanh_Thu'] ?></td>
                
                </tr>
                <?php 
                    }
                    $con = null;

                } 
                
                ?>
            
            
                    </td>
                </tr>
                
            </table>
    

          
</main>
</div>


