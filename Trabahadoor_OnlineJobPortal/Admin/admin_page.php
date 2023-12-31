<?php
include '../Functions/config.php';
include '../Admin/admin_analytics.php';
?>

<!DOCTYPE html>
</body>
</html>
<html lang="en">
<head>
<script>
window.onload = function () {
    CanvasJS.addColorSet("Blueshades",
                [
                "#00072D",
                "#051560", 
                "#1E3F66",
                "#2E5984",
                "#528AAE",
                "#73A5C6",
                "#91BAD6",
                "#BCD2E8",
                "#F0FFFF",                
                ]);
    CanvasJS.addColorSet("Forpie",
                ["#2E5984",
                "#73A5C6",
            ]);
var chart1 = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	exportEnabled: true,
	colorSet: "Blueshades",
	title:{
		text: "Top Hiring Industries for PWD",
        fontFamily: "poppins",
        fontColor: "#1c2d45",
        fontStyle: "Bold",
	},
	axisY:{
		includeZero: true
	},
	data: [{
		type: "column", 
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",
        indexLabel: "{y}",   
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart1.render();

var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	exportEnabled: true,
	colorSet: "Blueshades",
	title:{
		text: "Disability Diversity of Job Seekers",
        fontFamily: "poppins",
        fontColor: "#1c2d45",
        fontStyle: "Bold",
	},
	axisY:{
		includeZero: true
	},
	data: [{
		type: "bar", 
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",
        indexLabel: "{y}",   
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();

var chart3 = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
	exportEnabled: true,
    colorSet: "Forpie",
	title:{
		text: "Work Schedule Distribution",
        fontFamily: "poppins",
        fontColor: "#1c2d45",
        fontStyle: "Bold",
	},
	axisY:{
		includeZero: true
	},
	data: [{
		type: "pie", 
		indexLabelFontColor: "#5A5757",
        indexLabel: "{label} - {y}",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
	}]
});
chart3.render();

var chart4 = new CanvasJS.Chart("chartContainer4", {
	animationEnabled: true,
	exportEnabled: true,
	colorSet: "Forpie",
	title:{
		text: "Job Seeker Gender Ratio",
        fontFamily: "poppins",
        fontColor: "#1c2d45",
        fontStyle: "Bold",
	},
	axisY:{
		includeZero: true
	},
	data: [{
		type: "pie", 
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",
        indexLabel: "{label} - {y}",  
		dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
	}]
});
chart4.render();

var chart5 = new CanvasJS.Chart("chartContainer5", {
	animationEnabled: true,
	exportEnabled: true,
	colorSet: "Blueshades",
	title:{
		text: "Age of Jobseeker",
        fontFamily: "poppins",
        fontColor: "#1c2d45",
        fontStyle: "Bold",
	},
	axisY:{
		includeZero: true
	},
	data: [{
		type: "column", 
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",
        indexLabel: "{y}",    
		dataPoints: <?php echo json_encode($dataPoints5, JSON_NUMERIC_CHECK); ?>
	}]
});
chart5.render();
}
</script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/admin.css">
    <link rel="icon" href="../Images\TBDlogo.png">
<!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Trabahadoor</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="navigation">
                <ul>
                <li>
                        <a href="admin_page.php">
                            <span class="icon"><img src="../Images\TBDlogo.png" class="logo" alt="tbdlogo"></span>
                            <span class="title-logo">Trabahadoor</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin_page.php">
                            <span class="icon"><i class="ri-home-4-line"></i></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin_app.php">
                            <span class="icon"><i class="ri-team-line"></i></span>
                            <span class="title">Applicants</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin_emp.php">
                            <span class="icon"><i class="ri-group-line"></i></span>
                            <span class="title">Employers</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin_deacapp.php">
                            <span class="icon"><i class="ri-user-unfollow-line"></i></span>
                            <span class="title">Deactivated Applicants</span>
                        </a>
                    </li>

                    <li>
                        <a href="admin_deacemp.php">
                            <span class="icon"><i class="ri-user-unfollow-fill"></i></span>
                            <span class="title">Deactivated Employers</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Functions/logout.php">
                            <span class="icon"><i class="ri-logout-box-line"></i></span>
                            <span class="title">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="main">
                <div class="topbar">
                    <div class="toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                    
                </div>
                <h1 class="page-title">Dashboard</h1>
           
                <div class="card-box">
                    <div class="card">
                        <div>
                            <div class="numbers"><?php echo $totaljs; ?></div>
                            <div class="card-name">Total Jobseeker</div>
                        </div>
                        <div class="icon-bx">
                        <i class="ri-team-line"></i>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers"><?php echo $totalemp; ?></div>
                            <div class="card-name">Total Employer</div>
                        </div>
                        <div class="icon-bx">
                        <i class="ri-group-line"></i>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers"><?php echo $totalft; ?></div>
                            <div class="card-name">Full time jobs available</div>
                        </div>
                        <div class="icon-bx">
                        <i class="ri-briefcase-fill"></i>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div>
                            <div class="numbers"><?php echo $totalpt; ?></div>
                            <div class="card-name">Part time jobs available</div>
                        </div>
                        <div class="icon-bx">
                        <i class="ri-time-line"></i>
                        </div>
                    </div>
                </div>
                <!-- Industry -->
                <div class="charts">

                    <div class="chart-box">
                       
                        <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
                    </div>
                <!-- TOD -->
                <div class="chart-container">
                 
                    <div id="chartContainer3" style="height: 370px; width: 100%;"></div>
                </div>
                </div>

                <!-- Working Schedules -->
                <div class="charts">

                    <div class="chart-box">
                    
                        <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
                    </div>
                <!-- Gender -->
                <div class="chart-container">
                 
                    <div id="chartContainer4" style="height: 370px; width: 100%;"></div>
                </div>
                </div>

                <!-- Age Bracket -->
                <div class="charts">

                    <div class="chart-box">
                        
                        <div id="chartContainer5" style="height: 370px; width: 100%;"></div>
                    </div>            
                </div>
            </div>
        </div>
    </main>
</body>
<script src="../Javascript/main.js"></script>  
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</html>