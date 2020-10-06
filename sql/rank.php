        <!-- Begin Page Content -->
        <div class="container-fluid">
				
          <!-- Page Heading -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">								
								<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
									<div class="kt-portlet kt-portlet--mobile">
										<div class="kt-portlet__head kt-portlet__head--lg">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
												<i class="kt-font-brand flaticon2-line-chart"></i>
												</span>
												<h3 class="kt-portlet__head-title">
													Liste des derniers avis de recherche
												</h3>
											</div>
										</div>
											<!--begin: Datatable -->
											<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
												
<thead>
													<tr>
														<th>SUSPECT</th>
														<th>AGENT</th>
														<th>SUPERVISEUR</th>
														<th>TYPE D'INFRACTION</th>
														<th>ACTION</th>
													</tr>
												</thead>
												<tbody class="sortable">
												<?php 
$color = "style='background-color : red';";
$color2 = '<b><font color="white">';
$color3 = '</font></b>';
$sql = "SELECT * FROM rapport WHERE Typeinfraction='Avis de recherche' LIMIT 5";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  echo "";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td ".$color.">".$color2."".$row["Suspect"]."".$color3."</td><td ".$color.">".$color2."".$row["Agent"]."".$color3."</td><td ".$color.">".$color2." ".$row["Superviseur"]."".$color3."</td><td ".$color.">".$color2."".$row["Typeinfraction"]."".$color3."</td>".$color2."<th ".$color."><a href='rapportinfo.php?id=" . $row['id'] . "'>Voir le rapport</a></th>".$color3."</tr>";
  }
  echo "</table>";
} else {
  echo "<tr><td>Aucun résultat</td><td></td><td></td><td></td><th></th></tr></table>";
}

?>
																										
																									</tbody>
				            </main>
        </div>
        </div>
        </div>
        </div>
        </div>
<br>
<br>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">								
								<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
									<div class="kt-portlet kt-portlet--mobile">
										<div class="kt-portlet__head kt-portlet__head--lg">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
												<i class="kt-font-brand flaticon2-line-chart"></i>
												</span>
												<h3 class="kt-portlet__head-title">
													Liste des derniers rapports
												</h3>
											</div>
										</div>
											<!--begin: Datatable -->
											<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
												
<thead>
													<tr>
														<th>SUSPECT</th>
														<th>AGENT</th>
														<th>SUPERVISEUR</th>
														<th>TYPE D'INFRACTION</th>
														<th>ACTION</th>
													</tr>
												</thead>
												<tbody class="sortable">
												<?php 
$color = "style='background-color : red';";
$sql = "SELECT Suspect, Agent, Superviseur, Typeinfraction, id FROM rapport LIMIT 5";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  echo "";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["Suspect"]."</td><td>".$row["Agent"]."</td><td> ".$row["Superviseur"]."</td><td>".$row["Typeinfraction"]."</td><th><a href='rapportinfo.php?id=" . $row['id'] . "'>Voir le rapport</a></th></tr>";
  }
  echo "</table>";
} else {
  echo "<tr><td>Aucun résultat</td><td></td><td></td><td></td><th></th></tr></table>";
}

?>
																										
																									</tbody>
				            </main>
        </div>
        </div>
        </div>
        </div>
        </div>
<br>
<br>
<br>
<br>          <div class="row">


          <!-- Content Row -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Rapport</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php include 'sql/nombrerapport.php';?></div>
                    </div>
                    <div class="col-auto">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
